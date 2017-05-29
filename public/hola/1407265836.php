<?php

class Conexion{

    var $host;
    var $user ;
    var $pass ;
    var $db	;
    var $db_link;
    var $conn 		= false;
    var $persistant = false;
    
	
	public function conn(){ // connection function
			
			$this->host = 'localhost';
			$this->user = 'upcn';
			$this->pass = 'tadeom';
			$this->db   = 'upcndesarrollo_com_ar_sistema';
		   
		   	mysql_connect($this->host, $this->user, $this->pass, true);
			mysql_select_db($this->db);

			if (mysql_error()){

				echo " error:  ".mysql_error();
				break;
			}
	
			return true;
	 }

	 
	public function select($tabla,$campo,$param){
	 
		if ($this->conn()){
		
			if($campo OR $param){
					
				$q 		= ("select * from $tabla where $campo = '$param'");
				$res 	= mysql_query($q);
				
			}else{
				
				$q 		= ("select * from $tabla order by id DESC ");
	
				$res 	= mysql_query( $q );
				
			}
			
			
			if (mysql_error()){

				echo " error:  ".mysql_error();
				break;
			}

			return $res;
			
		}
	}
		
	public function query($query){
		
		
			$this->conn();
			
				$res = mysql_query($query);
				
				if(!$res){
					return mysql_error();
					break;
				}else{
					return $res;
				}
			
				
	
	}

	function cabeceras($tabla){
		
			if( $this->conn()){
				
				$res = mysql_query("SHOW COLUMNS FROM $tabla");
				
				if(!$res){
					echo mysql_error();
					break;
				}else{
					return $res;
				}
				
			}
	}


	
}


?>