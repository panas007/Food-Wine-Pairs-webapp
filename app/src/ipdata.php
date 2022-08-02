<?php
/**
 *  Store the user ip along with the country of the user.
 *  The code has some security implications. The client can set all HTTP header information
 *  (ie. $_SERVER['HTTP_...) to any arbitrary value it wants. 
 *  As such it's far more reliable to use $_SERVER['REMOTE_ADDR'], as this cannot be set by the user.
 *  Althought, we just store the IP and also we check for the validity of the IP.
 * 
 */
session_start();
require_once 'db_handler.php';

if (!isset($_SESSION['ipaddr'])){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    if (filter_var($ip, FILTER_VALIDATE_IP,
        FILTER_FLAG_IPV4 |
        FILTER_FLAG_IPV6 ) === false) {
        $_SESSION['ipaddr'] = null;
    }
    else {
        $_SESSION['ipaddr'] = $ip;
        $clientDetails = json_decode(file_get_contents("http://ipinfo.io/$ip/json"));
        if (filter_var($_SESSION['ipaddr'], FILTER_VALIDATE_IP,FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE ) === false )
            $_SESSION['country'] = null;
        else
            $_SESSION['country'] = $clientDetails->country;
    }
    
    //file_put_contents('testfile.txt', print_r( $clientDetails, TRUE)); save client details to file

    if (!is_null($_SESSION['ipaddr'])){

        $sql = "INSERT INTO usersips (user_ip_address, country, date_time) VALUES ( ? , ? ,? );";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sql)){
            file_put_contents('testfile.txt', print_r( "error", TRUE));
            echo "Fail to prepare SQL";
            exit();
        }
        $dt = date("Y-m-d H:i:s");
        mysqli_stmt_bind_param( $stmt,"sss", $_SESSION['ipaddr'], $_SESSION['country'],$dt);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
}



?>
