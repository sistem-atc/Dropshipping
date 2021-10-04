<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use App\Models\Token;
use App\Models\User;

class MeliController extends Controller
{

    protected static $OAUTH_URL      = "/oauth/token";
    protected static $MLB            = "https://auth.mercadolivre.com.br";
    protected static $API_ROOT_URL   = "https://api.mercadolibre.com";
    protected static $OAUTH_URL_TEST = "/users/test_user";
    // protected $client_id;
    // protected $client_secret;
    // protected $redirect_uri;
    // protected $access_token;
    // protected $refresh_token;

    // public function __construct($client_id, $client_secret, $access_token = null, $refresh_token = null) {
    //     $this->client_id = $client_id;
    //     $this->client_secret = $client_secret;
    //     $this->access_token = $access_token;
    //     $this->refresh_token = $refresh_token;
    // }
    
    public function preparetologin()
    {   
        $usercompany = User::where('id', Auth::user()->id)->first();
        $companydata = $usercompany->company()->first();
        $appId = $companydata->appid;
        $params = array("client_id" => $appId, "response_type" => "code", "redirect_uri" => env('REDIRECT_URI'));    
        $query = http_build_query($params);
        return redirect(self::$MLB."/authorization?".http_build_query($params));
    }

    public function callback (Request $request){

        $usercompany = User::where('id', Auth::user()->id)->first();
        $companydata = $usercompany->company()->first();
        $appId = $companydata->appid;
        $secretKey = $companydata->secretkey;
        Session::put(['appId' => $appId, 'secretKey' => $secretKey,]);
        $body = array(
            "grant_type" => "authorization_code", 
            "client_id" => $appId, 
            "client_secret" => $secretKey, 
            "code" => $request->code, 
            "redirect_uri" => env('REDIRECT_URI')
        );

        $opts = array(
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $body
        );
        
        $request = $this->execute(self::$OAUTH_URL, $opts);
        Token::create([
            'recording_user' => Auth::user()->id,
            'company' => Auth::user()->company,
            'access_token' => $request['body']->access_token,
            'expires_in' => $request['body']->expires_in,
            'user_id' => $request['body']->user_id,
            'refresh_token' => $request['body']->refresh_token,
        ]);
        
        $this->session($request);
        
        return redirect()->route('home');

    }
    
    public function refreshAccessToken() {
        
        $usercompany = User::where('id', Auth::user()->id)->first();
        $companydata = $usercompany->company()->first();
        $appId = $companydata->appid;
        $secretKey = $companydata->secretkey;
        $refresh_token = Company::find($companydata->id)->token;
            $body = array(
                "grant_type" => "refresh_token", 
                "client_id" => $appId, 
                "client_secret" => $secretKey, 
                "refresh_token" => $refresh_token->first()->refresh_token,
            );
        
            $opts = array(
                CURLOPT_POST => true, 
                CURLOPT_POSTFIELDS => $body
            );
        
            $request = $this->execute(self::$OAUTH_URL, $opts);

            if($request["httpCode"] == 200) {       
                
                Token::create([
                    'recording_user' => Auth::user()->id,
                    'company' => Auth::user()->company,
                    'access_token' => $request['body']->access_token,
                    'expires_in' => $request['body']->expires_in,
                    'user_id' => $request['body']->user_id,
                    'refresh_token' => $request['body']->refresh_token,
                ]);      
                
                $this->session($request);
                
                return redirect()->route('home');

            } else {
                return redirect()->route('home', ['msg' => 'Erro na Atualização do Token']);
            }   
    }

    public function createusertest()
    {   
        $usertest = array(
            "access_token" => Session::get('acess_token'),
            "site_id"  => "MLA"
        );
        $opts = array(
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $body
        );
        $request = $this->execute(self::$API_ROOT_URL, $opts);
    }

    public function questions() {
        $this->me();
        $params = [
        'seller_id' => Session::get('MyId'),
        'status' => 'UNANSWERED',
        'access_token' => Session::get('AuthML'),
        ];

        $response = $this->get('questions/search', $params);
            if($response["httpCode"] == 400)
                return Session::flash('error','Favor renovar o Token do Mercado Livre');
            elseif ($response["httpCode"] == 403)
                return Session::flash('error','Favor autenticar o Token do Mercado Livre');    
        $qtd_perguntas = $response['body']->total;
        $perguntas = $response['body']->questions;
        return view('atendimentos.mensagensML',['qtd_perguntas' => $qtd_perguntas , 'perguntas' => $perguntas]);

    }

    public function me() {
        $myid = $this->get('/users/me', array('access_token' => Session::get('AuthML')));
            if ($myid["httpCode"] == 400)
                return ('Favor autenticar o Token do Mercado Livre');
            elseif ($myid["httpCode"] == 403)   
                return ('Usuario sem token');  
        Session::put('MyId', $myid['body']->id);
    }

    public function options($path, $params = null) {
        $opts = array(
            CURLOPT_CUSTOMREQUEST => "OPTIONS"
        );
        
        $exec = $this->execute($path, $opts, $params);

        return $exec;
    }
    public function execute($path, $opts = array(), $params = array(), $assoc = false) {
        $uri = $this->make_path($path, $params);

        $ch = curl_init($uri);
        curl_setopt_array($ch, self::$CURL_OPTS);

        if(!empty($opts))
            curl_setopt_array($ch, $opts);

        $return["body"] = json_decode(curl_exec($ch), $assoc);
        $return["httpCode"] = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);
        
        return $return;
    }
    
    public function get($path, $params = null, $assoc = false) {
        $exec = $this->execute($path, null, $params, $assoc);

        return $exec;
    }

    public function make_path($path, $params = array()) {
        if (!preg_match("/^\//", $path)) {
            $path = '/' . $path;
        }

        $uri = self::$API_ROOT_URL . $path;
        
        if(!empty($params)) {
            $paramsJoined = array();

            foreach($params as $param => $value) {
               $paramsJoined[] = "$param=$value";
            }
            $params = '?'.implode('&', $paramsJoined);
            $uri = $uri.$params;
        }

        return $uri;
    }

    public function delete($path, $params) {
        $opts = array(
            CURLOPT_CUSTOMREQUEST => "DELETE"
        );
        
        $exec = $this->execute($path, $opts, $params);
        
        return $exec;
    }

    public function put($path, $body = null, $params = array()) {
        $body = json_encode($body);
        $opts = array(
            CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => $body
        );
        
        $exec = $this->execute($path, $opts, $params);

        return $exec;
    }
    
    public function post($path, $body = null, $params = array()) {
        $body = json_encode($body);
        $opts = array(
            CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
            CURLOPT_POST => true, 
            CURLOPT_POSTFIELDS => $body
        );
        
        $exec = $this->execute($path, $opts, $params);

        return $exec;
    }    
    
    public static $CURL_OPTS = array(
        CURLOPT_USERAGENT => "MELI-PHP-SDK-2.0.0", 
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_CONNECTTIMEOUT => 10, 
        CURLOPT_RETURNTRANSFER => 1, 
        CURLOPT_TIMEOUT => 60
    );

    public function session($request){
        Session::forget(['AuthML']);
        Session::put([
            'AuthML', $request['body']->access_token,
        ]);

        return Session::all();

    }
}
