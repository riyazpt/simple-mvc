
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class dbConnction {

public $con; 
public $host ;
		public $user ;
		public $pass;
		public $dbname ;
    function __construct() {
	$this-> host = 'localhost';
		$this->user ='root';
		$this-> pass = '';
		$this-> dbname = 'final_jazenetdb';
        try{
        $this->con = new PDO('mysql:dbname='.$this-> dbname.';host='.$this-> host, $this->user, $this->pass);
        }catch(PDOException $e){
            die('Database Connection failed'.$e->getMessage());
        }
       
    }


   
    public function execute_query($sql, $param = array()){
       
        $qPart = array_fill(0, count($param), "(?,?,?,?)");
        $sql .=  implode(",",$qPart);

            $stmt = $this->con->prepare($sql);
            
            if(!empty($param) && $stmt){
                   $index = 1;
                   $groupID=  $this->selectMax();
                   $dateNow=date("Y-m-d H:i:s");
                  // echo $dateNow;die;
                  foreach($param as $key => &$value)
                      {
                     
                            $stmt->bindValue($index++, $groupID);
                            $stmt->bindValue($index++, $key);
                            $stmt->bindValue($index++, $value);
                            $stmt->bindParam($index++,$dateNow,PDO::PARAM_STR);
                            
                    }     
                    
                    $result = $stmt->execute();
                   
                    if($result){
                        
                            return $stmt;
                    }
                else {
                    echo 'Failed';
                }
            }
            
            
            return false;
   }
public function execute_selectquery($sql, $param = array()){

            $stmt = $this->con->prepare($sql);
            if(!empty($param) && $stmt){
                    $index = 1;
                    
                    foreach($param as &$p){
                      
                            $stmt->bindParam($index, $p);
                            $index++;
                    }
            }
            if($stmt){
                    $result = $stmt->execute();
                    if($result){
                            return $stmt;
                    }
                  else  {
                        return 'error';
                    }
            }
            return false;
   }
    public function selectMax() {
       
        $qry="SELECT MAX(group_id)+ 1 FROM jazenet_registration";
        $stmt = $this->con->prepare($qry);
        $stmt->execute();
        $item_id = $stmt->fetchColumn();

        return $item_id;
    }
     public function deleteQuery($postedData) {
       
        $qry="DELETE  FROM jazenet_registration WHERE group_id=?";
        $stmt = $this->con->prepare($qry);
        $index=1;
         $stmt->bindParam($index, $postedData);
         $stmt->execute();
       
    }
    
     public function execute_save_query($sql, $param ){
         
         $statement = $this->con->prepare($sql);
       // echo $sql;die;
      // print_r($param);die;
$statement->execute($param);
//        $statement->execute([
//    'user_name' => 'Bob',
//    'password' => 'Desaunois',
//   
//]);
//        
     }
}

?>
