<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TEST PROJECT</title>
<?php

$publicFolder= "http://" . $_SERVER['SERVER_NAME'].'/simple-mvc-Jaznet/assets/index_files/';
?>

 
    <link rel="stylesheet" href="<?php echo $publicFolder; ?>bootstrap.min.css">
     <script src="<?php echo $publicFolder; ?>jquery-3.3.1.min.js.download"></script>
  
</head>
<body>
    <main>
        <section class="">
            <div class="text-center mt-4">
                <span>User</span>
            </div>
            <form id="company-contact-form" name="user-save" action="#" class="col-md-5 user-save">
                <div class="form-group mt-4">
                    <div class="floating-label">      
                        <input class="floating-input" type="text" name="user_name" id="user_name" placeholder=" " value="" autocomplete="off">
                        <span class="highlight"></span>
                        <label>User Name</label>
                    </div>
                </div>
                <div class="form-group mt-4">
                    <div class="floating-label">      
                        <input class="floating-input" type="text" name="password" id="password" placeholder=" " value="" autocomplete="off">
                        <span class="highlight"></span>
                        <label>Password</label>
                    </div>
                </div>

                    <div class="form-group mt-4">
                            <button type="button" id="btn-submit" class="btn-submit btn-primary">Save</button>
                           
                        </div>
                </div>
            </form>
        </section>
    </main>
    <script>
         $('#btn-submit').click(function(){
           event.preventDefault(); 
           
            var form = $("#company-contact-form");
             var serializedData = form.serialize();
              var url = "<?php echo BASE_URL;?>home/postUser";
             
            $.ajax({
                    url: url,
                    type: 'POST',
                    data: {'formData':serializedData,'type':"formPost"},
                   
                    success: function (data) {
                        console.log(data);
                        
                
                   
                    }
       });
           
   })
   
     //upload cover photo or youtubr links
        jQuery('#form3-image-upload').click(function (){
            jQuery('#file3').trigger('click');
        });
    
    </script>
</body>
</html>



 
  
  