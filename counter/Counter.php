<?php

namespace counter;

class Counter
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $databasename = "counter";

    private function connectDb()
    {
        $con = @mysqli_connect($this->host, $this->username, $this->password, $this->databasename);
        if (!$con) {
            echo "Error: " . mysqli_connect_error();
            exit();
        } else return $con;
    }

    public function setCount()
    {
        $con = $this->connectDb();
        $userIp = $_SERVER['REMOTE_ADDR'];
        $sql = 'select ip from pageview where ip="' . $userIp . '"';
        $query = mysqli_query($con, $sql);
        if (mysqli_num_rows($query) == 0)
            mysqli_query($con, "insert into pageview (ip) values('$userIp')");
    }

    public function getCount()
    {
        $con = $this->connectDb();
        return mysqli_query($con, "SELECT ip FROM `pageview`")->num_rows;
    }

}

?>