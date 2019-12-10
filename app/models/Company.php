<?php


class Company 
{
    protected $obj=null;
    public function __construct() {

    
    $this->obj =  new dbConnction();

    }

    public function saveCompanyDetailsToDB($postedData) {


        $companyContactForm = trim($postedData['formData']);
        $sql = "INSERT INTO jazenet_registration (group_id,meta_key,meta_value,created_date) VALUES";

        foreach (explode('&', $companyContactForm) as $x) {
            list($key, $value) = explode('=', $x);
            $output[$key] = $value;
        }

        $reversedOutput=($output);
        $result = $this->obj->execute_query($sql, $reversedOutput);
    }
  public function fetchCompanyDetails() {
       $companyAssociateAray=array();
        $companyListQuery = "SELECT 
                                group_id, GROUP_CONCAT(CONCAT(meta_key, '=', 
                            IFNULL(meta_value, 'NULL')) ORDER by id) AS meta_value,created_date	 
                            FROM 
                                jazenet_registration
                            GROUP BY 
                                group_id;  
                            ";

        $resultCompanyList = $this->obj->execute_selectquery($companyListQuery);
         if ($resultCompanyList) {
                    $companyAssociateAray = $resultCompanyList->fetchAll(PDO::FETCH_ASSOC);
                    
         }
      return $companyAssociateAray;
  }
public function deleteCompanyDetails($postedData) {
      
        
       
        $resultCompanyList = $this->obj->deleteQuery($postedData);
       
      return $resultCompanyList;
  }
  
  public function editCompanyDetails($postedData) {
      
        
        $companyIdAray=array($postedData);
        $companyListQuery = "SELECT * FROM jazenet_registration  WHERE group_id=? ORDER BY id";
       
        $resultCompanyList = $this->obj->execute_selectquery($companyListQuery,$companyIdAray);
       
         if ($resultCompanyList) {
                    $companyAssociateAray = $resultCompanyList->fetchAll(PDO::FETCH_ASSOC);
                  
         }
      return $companyAssociateAray;
  }
  
  
  
}

?>
