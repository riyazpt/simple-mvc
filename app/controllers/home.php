<?php

class Home extends Controller {

  
   public function Index () {
        
       
        $this->view('home/homepage');
         
          
      
    }
     public function showCompanyRegistration () {
        
        $this->view('home/companyForm');
      
    }
     public function showCompanySearch () {
        
          $companyModal=$this->model('Company');
          
          $showCompanyDetails=$companyModal->fetchCompanyDetails();
         
         $data['showCompanyDetails']=$showCompanyDetails;
        $this->view('home/companyList',$data);
      
    }
 public function postForm () {
        
       $postedData = $_POST;
       $companyModal=$this->model('Company');
       
       
      $companyModal->saveCompanyDetailsToDB($postedData);
           
    }
    public function deleteCompany () {
        
        $postedData = $_POST['company_id'];
       
       $companyModal=$this->model('Company');
       
       
      $companyModal->deleteCompanyDetails($postedData);
           
    }
     public function editCompany () {
        
        $postedData = $_POST['company_id'];
       
       $companyModal=$this->model('Company');
       
       
       $companyAssociateAray= $companyModal->editCompanyDetails($postedData);
      echo  json_encode($companyAssociateAray);
    }
    
     public function saveUser () {
        
      $this->view('home/user');
           
    }
 public function postUser () {
        
       $postedData = $_POST;
      
       $userModal=$this->model('User');
       
       
      $userModal->saveUserDetailsToDB($postedData);
           
    }
}

?>