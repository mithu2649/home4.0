<?php
require_once "settings.php";

class login extends DB{
    public function newLogin($username, $password){
        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE username=? AND password=? LIMIT 1");
        $stmt->execute([$username, $password]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //$resultJSON = json_encode($result);
        if($result){
            $result = json_decode($resultJSON);
            $cookie_name = "HOMEID";
            $cookie_value = $result[0]->username.$result[0]->email.rand(10000, 20000);
            $cookie_value = hash('sha1',$cookie_value);
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "../"); // 86400 = 1 day
            $stmt = $this->connect()->prepare("UPDATE users SET device_id=? WHERE username=? LIMIT 1");
            $stmt->execute([$cookie_value, $username]);
        }
        //return $resultJSON;
    }
    public function setLogin($cookie_name){
        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE device_id=? LIMIT 1");
        $stmt->execute([$cookie_name]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $resultJSON = json_encode($result);
        return $resultJSON;
    }
}

?>