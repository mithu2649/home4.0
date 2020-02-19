<?php


/* ====================Databse settings and cookies handling==================== */

class DB{
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $charset;
    protected function connect(){
        $this->host = "localhost";
        $this->username = "root";//Replace this with your server's username.
        $this->password = "password";//Replace this with your server's password.
        $this->dbname = "codewithpandey_project";
        $this->charset = "utf8";
        try{
            $dsn = "mysql:host=".$this->host.";dbname=".$this->dbname.";charset".$this->charset;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch(PDOException $e){
            die("Connot connect: ".$e->getMessage());
        }
    }
}

if(isset($_COOKIE['HOMEID'])){
    
}

/*class app extends DB{
    public function getAppliances(){
        $stmt = $this->connect()->prepare("SELECT * FROM project");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($result);
    }
}

/*$obj = new app;
$app = json_decode($obj->getAppliances());
for($i=0; $i<sizeof($app); $i++){
    echo $app[$i]->app_name." is ".$app[$i]->status."<br>";
}*/

?>