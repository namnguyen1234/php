<?php

class LoginController{
    public function login() {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 0,
            CURLOPT_URL => 'https://api-test.stringeex.com/v1/account',
            CURLOPT_USERAGENT => 'cURL Request',
            // CURLOPT_SSL_VERIFYPEER => false
            CURLOPT_POSTFIELDS => http_build_query(array(     
		    "email"=> "huy@stringee.com",
		    "password"=> "123456"
            ))
        ));
        
        $resp = curl_exec($curl);
        
        $weather = json_decode($resp);
        
        var_dump($weather); 
        
        curl_close($curl);
    }
}