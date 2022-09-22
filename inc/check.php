<?php

$gdomain = "www.betturkey712.com";



function unicodeString($str) {
    $aa = preg_replace('/u([\da-fA-F]{4})/', '&#x\1;', $str);
    return str_replace('\\','',$aa);
}


function getir($user,$pass){
    global $gdomain;
    $url = "https://".$gdomain."/login";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $headers = array(
    "Accept: application/json",
    "Content-Type: application/x-www-form-urlencoded",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $data = <<<DATA
    username=$user&password=$pass&captcha=
    DATA;
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    $resp = curl_exec($curl);
    curl_close($curl);
    $durum = json_decode($resp,false);
    if (!($durum->status == "1")){
        curl_close($curl);
        return "hata";
    }
    return $durum->token;
}


function kbilgi($token){
    global $gdomain;
    $url = "https://".$gdomain."/getMyDetails";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $headers = array(
    "Accept: application/json",
    "Content-Type: application/x-www-form-urlencoded",
    "authorization: Bearer ".$token,
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $resp = curl_exec($curl);
    curl_close($curl);
    $durum = json_decode($resp,false);
    if (!($durum->status == "1")){
        curl_close($curl);
        return "hata";
    }
    return unicodeString($resp);
}


function kbilgi1($token){
    global $gdomain;
    $url = "https://".$gdomain."/getMyDetails";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $headers = array(
    "Accept: application/json",
    "Content-Type: application/x-www-form-urlencoded",
    "authorization: Bearer ".$token,
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $data = <<<DATA
    detailed=true
    DATA;
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    $resp = curl_exec($curl);
    curl_close($curl);
    $durum = json_decode($resp,false);
    if (!($durum->status == "1")){
        curl_close($curl);
        return "hata";
    }
    return unicodeString($resp);
}

function ktransfer($token){
    global $gdomain;
    $url = "https://".$gdomain."/getData/transactionList";
    $ch = curl_init();
    $tariha = str_replace('.','-',date('Y.m.d'));
    $tarihb = str_replace('.','-',date('Y.m.d', time() - 2629745));
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "start=0&length=10&sortBy=id&sortDesc=ASC&date1=".$tarihb."&date2=".$tariha."&status=0&date=");
    $headers = array();
    $headers[] = 'Accept: application/json';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    $headers[] = "Authorization: Bearer ".$token;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}




?>