<?php
unset($_COOKIE['HOMEID']);
$logout = setcookie("HOMEID", "", time() - 3600);
if($logout){
    echo "Logged out successfully";
    header('location: login');
}
?>