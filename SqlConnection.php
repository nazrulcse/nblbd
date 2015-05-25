<?php

class SqlConnection extends Exception 
{
	
	//var $db="nblcom_neew";
	//var $user="nblcom_mashfiq";
	//var $password="t{(S8!d8M^8G";
        //var $host="localhost";

var $db="nblbd_neew";
var $user="root";
var $password="";
var $host="localhost";
	


 var $conn;
 
	function throwsqlError($err)
	{
	echo $err;
            throw new Exception("");
	}
	//creating connection 
	function createConnection() 
	{
		//$this->conn=mysql_connect($this->user,$this->password,$this->db);
		//echo $this->host;
            $this->conn=mysql_connect($this->host, $this->user,$this->password);
		if (!$this->conn) 
		{	

                         $e = mysql_error();  // For OCILogon errors pass no parameter
                        $this-> throwsqlError($e);
		}
                else {
                   //echo "hi";
				   mysql_select_db($this->db);
                    //mysql_select_db($db)or die (mysql_error());
                }
		return $this->conn;
	}
	//insert data into database
	function insert_data($query)
	{
	    $result = mysql_query($query);
	    if (!$result) 
              {
           die('Invalid query: ' . mysql_error());
             }
		//oci_execute($select_stmt,OCI_DEFAULT);
		return $result;
            /*$connection=$this->createConnection();
		$stmt = oci_parse($this->conn,$query);
		//if error in creating statement
		if(!$stmt){
			$e = OCIError($this->conn);
			$this-> throwOCIError($e);
		}
		if(oci_execute($stmt, OCI_DEFAULT)){
			$this->commit();
			return "success";
		}
		else{
			$e = OCIError($stmt);
			$this-> throwOCIError($e);
		}*/
		// echo $conn . " inserted hallo\n\n";
	}  
	//commit
	function commit() 
	{
		//oci_commit($this->conn);
	}
	//getting data from table
	
	
	function select_data($query) 
	{
		 //echo $query;
          $result = mysql_query($query);
	  if (!$result) {
           die('Invalid query: ' . mysql_error());
             }
		//oci_execute($select_stmt,OCI_DEFAULT);
		return $result;
	}
	
	function closeConnection()
	{
		 mysql_close($this->conn);
	}
}

/*$sql=new SqlConnection();
try{
$sql->createConnection();
}catch(Exception $e)
{
 echo "error";
}*/


?>
