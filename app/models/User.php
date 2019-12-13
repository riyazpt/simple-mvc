<?php


class User 
{
    protected $obj=null;
    public function __construct() {

    
    $this->obj =  new dbConnction();

    }

    public function saveUserDetailsToDB($postedData) {

        
        $userForm = trim($postedData['formData']);
        
          foreach (explode('&', $userForm) as $x) {
            list($key, $value) = explode('=', $x);
            $output[$key] = $value;
        }
       
        $sql = "INSERT INTO users (user_name,password) VALUES (:user_name,:password)";

   
        $result = $this->obj->execute_save_query($sql, $output);
        
        
        
        
    }
  

  
  
}

?>
