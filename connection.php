<?php

class db{
	public $host = "localhost";
	public $user = "root";
	public $pass = "";
	public $db_name = "login";

    public $link;
    public $error;

    public function __construct (){
    	$this->connect();
    }

	private function connect()
	{
       $this->link = new mysqli($this->host,$this->user,$this->pass,$this->db_name);
	}
 
    public function insert($query)
    {
    	$result= $this->link->query($query);

    	if($result){		echo "<script>alert('Sucessfull')</script>"; exit();}
    	else       {        echo "<script>alert('Unsuccessfull')</script>";  exit();}
		
    }

}


?>