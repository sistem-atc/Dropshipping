<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use App\Models\Token;

class MeliController extends Controller
{

    protected static $OAUTH_URL    = "/oauth/token";
    protected static $MLB = 'https://auth.mercadolivre.com.br';
    protected static $API_ROOT_URL = "https://api.mercadolibre.com";

    public function preparetologin()
    {   
        
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
        
        $params = array("client_id" => $appId, "response_type" => "code", "redirect_uri" => env('REDIRECT_URI'));    
        $query = http_build_query($params);
        return redirect(self::$MLB."/authorization?".http_build_query($params));
    }

    public function callback (Request $request){

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
            'company' => Auth::user()->company,
            'access_token' => $request['body']->access_token,
            'expires_in' => $request['body']->expires_in,
            'user_id' => $request['body']->user_id,
            'refresh_token' => $request['body']->refresh_token,
        ]);
        
        return redirect('/');

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
}
