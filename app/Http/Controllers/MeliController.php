<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use App\Models\Token;
use App\Models\User;

=======
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use App\Models\Token;
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d

class MeliController extends Controller
{

    protected static $OAUTH_URL    = "/oauth/token";
<<<<<<< HEAD
    protected static $MLB = "https://auth.mercadolivre.com.br";
    protected static $API_ROOT_URL = "https://api.mercadolibre.com";
    protected static $OAUTH_URL_TEST = "/users/test_user";
=======
    protected static $MLB = 'https://auth.mercadolivre.com.br';
    protected static $API_ROOT_URL = "https://api.mercadolibre.com";
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d

    public function preparetologin()
    {   
        
<<<<<<< HEAD
        $usercompany = User::where('id', Auth::user()->id)->first();
        $companydata = $usercompany->company()->first();
        $appId = $companydata->appid;
                
=======
        $usercompany = Auth::user()->company;
        $empresas = Company::all();
            foreach($empresas as $empresa)
            {
                if ($usercompany = $empresa->id)
                {
                    $appId = $empresa->appid;
                    $secretKey = $empresa->secretkey;
                }
            } 
        
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
        $params = array("client_id" => $appId, "response_type" => "code", "redirect_uri" => env('REDIRECT_URI'));    
        $query = http_build_query($params);
        return redirect(self::$MLB."/authorization?".http_build_query($params));
    }

    public function callback (Request $request){

<<<<<<< HEAD
        $usercompany = User::where('id', Auth::user()->id)->first();
        $companydata = $usercompany->company()->first();
        $appId = $companydata->appid;
        $secretKey = $companydata->secretkey;
        Session::put(['appId' => $appId, 'secretKey' => $secretKey,]);
        
=======
        $usercompany = Auth::user()->company;
        $empresas = Company::all();
            foreach($empresas as $empresa)
            {
                if ($usercompany = $empresa->id)
                {
                    $appId = $empresa->appid;
                    $secretKey = $empresa->secretkey;
                }
            } 

>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
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
<<<<<<< HEAD
            'recording_user' => Auth::user()->id,
=======
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
            'company' => Auth::user()->company,
            'access_token' => $request['body']->access_token,
            'expires_in' => $request['body']->expires_in,
            'user_id' => $request['body']->user_id,
            'refresh_token' => $request['body']->refresh_token,
        ]);
        
<<<<<<< HEAD
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
                "refresh_token" => $refresh_token
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

=======
        return redirect('/');

    }
            
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
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
    
    public static $CURL_OPTS = array(
        CURLOPT_USERAGENT => "MELI-PHP-SDK-2.0.0", 
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_CONNECTTIMEOUT => 10, 
        CURLOPT_RETURNTRANSFER => 1, 
        CURLOPT_TIMEOUT => 60
    );
<<<<<<< HEAD

    public function session($request){

        Session::put([
            'AuthML', $request['body']->access_token,
        ]);

        return Session::all();

    }
=======
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
}
