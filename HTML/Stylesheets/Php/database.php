<?php
class Database{
	public $host = DB_HOST;                //properties 
	public $username = DB_USER;
	public $password = DB_PASS;
	public $db_name = DB_NAME;
	
	public $link;                         //more properties
	public $error;
	
	/*
	* class constructor
	*/
	
	
	public function __construct(){                 //methods
		
		//call connect function construct
		
		$this->connect();
			
	}        

/*
*  Connector
*/	
		
		private function connect(){
			$this->link = new mysqli($this->host, $this->username, $this->password="nitinkumar@26", $this->db_name);
		  
		    if(!$this->link){
				$this->error = "Connection Failed:".$this->link->connect_error;
				return false;
			}
		
		}
    
    /*
    *select
    */
    public function select($query){
        $result = $this->link->query($query) or die($this->link->error.__LINE__);
        if($result->num_rows > 0){
            return $result;
        }
        else{
            return false;
        }
    }
    
    /*
    *insert
    */
    public function insert($query){
        $insert_row=$this->link->query($query) or die($this->link->error.__LINE__);
        
        //validate insert
        if($insert_row){
            header("Location: admin.php?msg=".urlencode('Record Adder'));
            exit();
         }
                    else{
                    die('Error : ('. $this->link->erno .') '. $this->link->error);
                    }
    }
    
    
    /*
    *update
    */
    public function update($query){
        $update_row=$this->link->query($query) or die($this->link->error.__LINE__);
        
        //validate insert
        if($update_row){
            header("Location: admin.php?msg=".urlencode('Record Updated'));
            exit();
         }
                    else{
                    die('Error : ('. $this->link->erno .') '. $this->link->error);
                    }
    }
    
     /*
    *delete
    */
    public function delete($query){
        $delete_row=$this->link->query($query) or die($this->link->error.__LINE__);
        
        //validate insert
        if($delete_row){
            header("Location: admin.php?msg=".urlencode('Record Deleted'));
            exit();
         }
                    else{
                    die('Error : ('. $this->link->erno .') '. $this->link->error);
                    }
    }
    
   
    
    
    
}

