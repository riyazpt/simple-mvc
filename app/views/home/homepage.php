<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
<?php

$publicFolder= BASE_URL.'/index_files/';
?>

   
    <link rel="stylesheet" href="<?php echo $publicFolder; ?>bootstrap.min.css">
    
    
   
</head>
<body>
    <div class="row ">
        <div class="col-md-4 col-md-offset-6">
          
            <a href="<?php echo BASE_URL;?>home/showCompanyRegistration" > <div class=" text-center">Registration</div></a>
           
        </div>
    </div>
    <div class="row ">
        <div class="col-md-4 col-md-offset-6">
          
            <a href="<?php echo BASE_URL;?>home/showCompanySearch" > <div class=" text-center">Company List </div></a>
            
        </div>
    </div>
  <div class="row ">
        <div class="col-md-4 col-md-offset-6">
          
            <a href="<?php echo BASE_URL;?>home/saveUser" > <div class=" text-center">User </div></a>
            
        </div>
    </div>

    <script>
        
    </script>
</body>
</html>



 
  
  