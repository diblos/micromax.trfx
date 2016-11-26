<?php
// http://www.99points.info/2015/04/instagram-api-fetch-all-photos-with-a-specific-hashtag-using-php/
 function processURL($url)
    {
        $ch = curl_init();
        curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => 2
        ));

        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    $tag = '99points';
    $client_id = "3109f09a0e5e43eb896dc557f4299bfa";
    $access_token = "1901819859.1677ed0.cce935d10ac446e182ee00116b5822af";
    // $url = 'https://api.instagram.com/v1/tags/'.$tag.'/media/recent?client_id='.$client_id;
    $url = 'https://api.instagram.com/v1/tags/'.$tag.'/media/recent?access_token='.$access_token;

    echo $url;

    $all_result  = processURL($url);
    $decoded_results = json_decode($all_result, true);

    echo '<pre>';
    print_r($decoded_results);
    exit;

    //Now parse through the $results array to display your results... 
    foreach($decoded_results['data'] as $item){
        $image_link = $item['images']['thumbnail']['url'];
        echo '<img src="'.$image_link.'" />';
    }
?>