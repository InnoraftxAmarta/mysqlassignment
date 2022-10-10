<?php

class employee 
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "Amarta@070";
    private $database = "myDB";
    public $con;

    public function connect()
    {
        $this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if (mysqli_connect_error()) {
            trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
        } 
        else {
               echo "connected";
        }
    }
    public function displayData($tablename){
        $query = "SELECT * FROM $tablename";
        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                   
            }
            return $data;
            }else{
             echo "No found records";
            }
    }



}

?>

