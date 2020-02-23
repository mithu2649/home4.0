<?php
require_once "settings.php";
//header("Content-Type: application/json; charset=UTF-8");
class getData extends DB{
    public function getSwitches($room_id){
        $stmt = $this->connect()->prepare("SELECT * FROM appliances WHERE room_id=?");
        $stmt->execute([$room_id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $resultJSON = json_encode($result);
        return $resultJSON;
    }
    public function getRooms(){
        $stmt = $this->connect()->prepare("SELECT * FROM rooms");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $resultJSON = json_encode($result);
        return $resultJSON;
    }
}

/*
$obj = new getData;
$room = $obj->getRooms();
$room = json_decode($room);
for($i=0; $i<sizeof($room); $i++){
    echo $room[$i]->room_name;
    $room_id = $room[$i]->id;
    $switch = $obj->getSwitches($room_id)."<br><br>";
    print_r($switch);
}
*/

?>