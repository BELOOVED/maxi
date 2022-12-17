<?php
$site = "www.casinomaxi565.com";

function brand(){
    global $site;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.casinomaxi565.com/tr/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Host: '.$site,
        'Upgrade-Insecure-Requests: 1',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.5359.95 Safari/537.36',
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
        'Sec-Fetch-Site: none',
        'Sec-Fetch-Mode: navigate',
        'Sec-Fetch-User: ?1',
        'Sec-Fetch-Dest: document',
        'Sec-Ch-Ua: "Not?A_Brand";v="8", "Chromium";v="108"',
        'Sec-Ch-Ua-Mobile: ?0',
        'Sec-Ch-Ua-Platform: "Windows"',
        'Accept-Encoding: gzip, deflate',
        'Accept-Language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    ]);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_ENCODING , "gzip");


    $response = curl_exec($ch);

    curl_close($ch);
    $brandid = "";
    global $brandid;
    $brandid = (explode('"',explode('brandConfig.brandId = "',$response)[1])[0]);
}

function login($login,$password){
    brand();
    global $brandid;
    global $site;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://'.$site.'/api/v1/sessions/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Host: '.$site,
        'Sec-Ch-Ua: "Not?A_Brand";v="8", "Chromium";v="108"',
        'Sec-Ch-Ua-Mobile: ?0',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.5359.95 Safari/537.36',
        'X-Obg-Country-Code: TR',
        'X-Obg-Device: Desktop',
        'Content-Type: application/json; charset=UTF-8',
        'Accept: application/json, text/plain, */*',
        'X-Obg-Channel: Web',
        'Brandid: '.$brandid,
        'Marketcode: tr',
        'Sec-Ch-Ua-Platform: "Windows"',
        'Origin: '.$site,
        'Sec-Fetch-Site: same-origin',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Dest: empty',
        'Referer: https://'.$site.'/tr/giris/',
        'Accept-Encoding: gzip, deflate',
        'Accept-Language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"type":"Up","loginSource":"web","IovationBlackBox":"","username":"'.$login.'","password":"'.$password.'"}');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_ENCODING , "gzip");
    $response = curl_exec($ch);
    curl_close($ch);
    if (stristr($response, "sessionToken")){
        global $logintoken;
        $logintoken = json_decode($response,false)->sessionToken;
        return json_decode($response,false)->sessionToken;
    }else{
        return "hata";
    }
}

function para(){
    global $brandid;
    global $site;
    global $logintoken;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://'.$site.'/api/v1/wallet/balance/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Host: '.$site,
        'Sec-Ch-Ua: "Not?A_Brand";v="8", "Chromium";v="108"',
        'Sec-Ch-Ua-Mobile: ?0',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.5359.95 Safari/537.36',
        'X-Obg-Country-Code: TR',
        'X-Obg-Device: Desktop',
        'Content-Type: application/json; charset=utf-8',
        'Accept: application/json, text/plain, */*',
        'Sessiontoken: '.$logintoken,
        'X-Obg-Channel: Web',
        'Brandid: '.$brandid,
        'Marketcode: tr',
        'Sec-Ch-Ua-Platform: "Windows"',
        'Sec-Fetch-Site: same-origin',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Dest: empty',
        'Referer: https://'.$site.'/tr/giris/',
        'Accept-Encoding: gzip, deflate',
        'Accept-Language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    ]);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_ENCODING , "gzip");
    $response = curl_exec($ch);
    curl_close($ch);
    if (stristr($response, "availableToWithdraw")){
        return json_decode($response,false)->availableToWithdraw->amount;
    }else{
        return "hata";
    }
}


function bilgi(){
    global $brandid;
    global $site;
    global $logintoken;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://'.$site.'/api/v1/currentcustomer/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Host: '.$site,
        'Sec-Ch-Ua: "Not?A_Brand";v="8", "Chromium";v="108"',
        'Sec-Ch-Ua-Mobile: ?0',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.5359.95 Safari/537.36',
        'X-Obg-Country-Code: TR',
        'X-Obg-Device: Desktop',
        'Content-Type: application/json; charset=utf-8',
        'Accept: application/json, text/plain, */*',
        'Sessiontoken: '.$logintoken,
        'X-Obg-Channel: Web',
        'Brandid: '.$brandid,
        'Marketcode: tr',
        'Sec-Ch-Ua-Platform: "Windows"',
        'Sec-Fetch-Site: same-origin',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Dest: empty',
        'Referer: https://'.$site.'/tr/giris/',
        'Accept-Encoding: gzip, deflate',
        'Accept-Language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    ]);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_ENCODING , "gzip");
    $response = curl_exec($ch);
    curl_close($ch);
    if (stristr($response, "customerId")){
        return $response;
    }else{
        return "hata";
    }
}

function islemgecmsi(){
    global $brandid;
    global $site;
    global $logintoken;
    $tariha = str_replace('.','-',date('Y.m.d'));
    $tarihb = str_replace('.','-',date('Y.m.d', time() - 2629745));
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://'.$site.'/api/v1/wallet/transactions?pageSize=10&pageNumber=0&from='.$tarihb.'&to='.$tariha);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Host: '.$site,
        'Sec-Ch-Ua: "Not?A_Brand";v="8", "Chromium";v="108"',
        'Sec-Ch-Ua-Mobile: ?0',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.5359.95 Safari/537.36',
        'X-Obg-Country-Code: TR',
        'X-Obg-Device: Desktop',
        'Content-Type: application/json; charset=utf-8',
        'Accept: application/json, text/plain, */*',
        'Sessiontoken: '.$logintoken,
        'X-Obg-Channel: Web',
        'Brandid: '.$brandid,
        'Marketcode: tr',
        'Sec-Ch-Ua-Platform: "Windows"',
        'Sec-Fetch-Site: same-origin',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Dest: empty',
        'Referer: https://'.$site.'/tr/cuzdan/islem-gecmisi/',
        'Accept-Encoding: gzip, deflate',
        'Accept-Language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    ]);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_ENCODING , "gzip");
    $response = curl_exec($ch);
    curl_close($ch);
    if (stristr($response, "transactions")){
        return $response;
    }else{
        return "hata";

    }
}
?>