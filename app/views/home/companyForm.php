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

    <link rel="stylesheet" href="<?php echo $publicFolder; ?>template.css">
    <link rel="stylesheet" href="<?php echo $publicFolder; ?>reset.css">	
    <link rel="stylesheet" href="<?php echo $publicFolder; ?>template-child.css">
    <link rel="stylesheet" href="<?php echo $publicFolder; ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $publicFolder; ?>ionicons.min.css">
    <link rel="stylesheet" href="<?php echo $publicFolder; ?>bootstrap-select.css">
    <link rel="stylesheet" href="<?php echo $publicFolder; ?>bootstrap-select.min.css">
    
    <link rel="stylesheet" href="<?php echo $publicFolder; ?>company-signup.css"><!--MAIN CSS FOR THIS PAGE-->


    <script src="<?php echo $publicFolder; ?>jquery-3.3.1.min.js.download"></script>
    <script src="<?php echo $publicFolder; ?>popper.min.js.download"></script> 
    <script src="<?php echo $publicFolder; ?>popUp.js.download"></script> 
    <script src="<?php echo $publicFolder; ?>bootstrap.min.js.download"></script>
    <script src="<?php echo $publicFolder; ?>bootstrap-select.js.download"></script>
    <script src="<?php echo $publicFolder; ?>bootstrap-select.min.js.download"></script> 
    
    <style>
        .SelectCustom > .dropdown.bootstrap-select > button {
            display: none;
        }
      </style>
</head>
<body>
    <main>
        <section class="company-signup-form1-cont container beHidden beVisible">
            <div class="text-center mt-4">
                <span>essential information</span>
            </div>
            <form id="company-contact-form" name="company-contact-form" action="#" class="col-md-5 form1-companysignup">
                <div class="form-group mt-4">
                    <div class="floating-label">      
                        <input class="floating-input" type="text" name="company_name" id="companyName" placeholder=" " value="" autocomplete="off">
                        <span class="highlight"></span>
                        <label>company name</label>
                    </div>
                </div>
                <div class="form-group mt-4">
                    <div class="floating-label">      
                        <input class="floating-input" type="text" name="email" id="companyEmail" placeholder=" " value="" autocomplete="off">
                        <span class="highlight"></span>
                        <label>email</label>
                    </div>
                </div>
                <div class="form-group mt-4 ">
                    <div class="floating-label">      
                        <input class="floating-input" type="text" name="website" id="companyWebsite" placeholder=" " value="" autocomplete="off">
                        <span class="highlight"></span>
                        <label>website</label>
                    </div>
                </div>
               <div class="form-group SelectCustom">
                    <p class="selectLabel">industry</p>
                    <div class="dropdown bootstrap-select">
                        <select class="selectpicker" data-live-search="true" id="" name="industry" tabindex="-98">
                        <option value="">default</option>
                        <option value="1">industry 1</option>
                        <option value="2">industry 2</option>
                         add selected in option if active 
                    </select>
                        <button type="button" class="btn dropdown-toggle bs-placeholder btn-light" data-toggle="dropdown" role="button" data-id="" title="default"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">default</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                </div>
             <div class="phone-col-form">
                    <div class="form-group SelectCustom phone-col-1">
                        <p class="selectLabel">country code</p>
                        <div class="dropdown bootstrap-select">
                            <select class="selectpicker" data-live-search="true" id="" name="landline_country_code" tabindex="-98">
                            <option value="">default</option>
                            <option value="1">country 1</option>
                            <option value="2">country 2</option>
                             add selected in option if active 
                        </select>
                            <button type="button" class="btn dropdown-toggle bs-placeholder btn-light" data-toggle="dropdown" role="button" data-id="" title="default"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">default</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                    </div>
                    <div class="form-group phone-col-2">
                        <div class="floating-label">      
                            <input class="floating-input" type="text" name="landline_number" id="landline_number" placeholder=" " value="" autocomplete="off">
                            <span class="highlight"></span>
                            <label>phone number</label>
                        </div>
                    </div>
                </div>
                    <div class="phone-col-form">
                    <div class="form-group SelectCustom phone-col-1">
                        <p class="selectLabel">country code</p>
                        <div class="dropdown bootstrap-select">
                            <select class="selectpicker" data-live-search="true" id="mobile_country_code" name="mobile_country_code" tabindex="-98">
                            <option value="">default</option>
                            <option value="1">country 1</option>
                            <option value="2">country 2</option>
                             add selected in option if active 
                        </select>
                            <button type="button" class="btn dropdown-toggle bs-placeholder btn-light" data-toggle="dropdown" role="button" data-id="" title="default"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">default</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                    </div>
                    <div class="form-group phone-col-2">
                        <div class="floating-label">      
                            <input class="floating-input" type="text" name="mobile_number" id="mobile_number" placeholder=" " value="" autocomplete="off">
                            <span class="highlight"></span>
                            <label>mobile number</label>
                        </div>
                    </div>
                </div>
                <div class="two-col-form">    
                    <div class="form-group SelectCustom two-col">
                        <p class="selectLabel">country</p>
                        <div class="dropdown bootstrap-select">
                            <select class="selectpicker" data-live-search="true" id="country" name="country" tabindex="-98">
                            <option value="">default</option>
                            <option value="1">country 1</option>
                            <option value="2">country 2</option>
                             add selected in option if active 
                        </select><button type="button" class="btn dropdown-toggle bs-placeholder btn-light" data-toggle="dropdown" role="button" data-id="" title="default"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">default</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                    </div>
  <div class="form-group SelectCustom two-col">
                        <p class="selectLabel">state</p>
                        <div class="dropdown bootstrap-select"><select class="selectpicker" data-live-search="true" id="state" name="state" tabindex="-98">
                            <option value="">default</option>
                            <option value="1">state 1</option>
                            <option value="2">state 2</option>
                             add selected in option if active 
                        </select><button type="button" class="btn dropdown-toggle bs-placeholder btn-light" data-toggle="dropdown" role="button" data-id="" title="default"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">default</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                    </div>
                    <div class="form-group SelectCustom two-col">
                        <p class="selectLabel">city</p>
                        <div class="dropdown bootstrap-select">
                            <select class="selectpicker" data-live-search="true" id="city" name="city" tabindex="-98">
                            <option value="">default</option>
                            <option value="1">city 1</option>
                            <option value="2">city 2</option>
                             add selected in option if active 
                        </select><button type="button" class="btn dropdown-toggle bs-placeholder btn-light" data-toggle="dropdown" role="button" data-id="" title="default"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">default</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                    </div>
                    <div class="form-group SelectCustom two-col">
                        <p class="selectLabel">suburb</p>
                        <div class="dropdown bootstrap-select">
                            <select class="selectpicker" data-live-search="true" id="suburb" name="suburb" tabindex="-98">
                            <option value="">default</option>
                            <option value="1">suburb 1</option>
                            <option value="2">suburb 2</option>
                             add selected in option if active 
                        </select><button type="button" class="btn dropdown-toggle bs-placeholder btn-light" data-toggle="dropdown" role="button" data-id="" title="default"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">default</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                    </div>
                  
                

                   

 
                     

                
                </div>
                  <div class="form-group mt-4">
                    <div class="floating-label">      
                        <input class="floating-input" type="text" name="street_name" id="street_name" placeholder=" " value="" autocomplete="off">
                        <span class="highlight"></span>
                        <label>street name</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <div class="floating-label">      
                        <input class="floating-input" type="text" name="property_no" id="property_no" placeholder=" " value="" autocomplete="off">
                        <span class="highlight"></span>
                        <label>property house no.</label>
                    </div>
                </div>

                 <div class="form-group mt-4">
                    <div class="floating-label">      
                        <input class="floating-input" type="text" name="building_name" id="building_name" placeholder=" " value="" autocomplete="off">
                        <span class="highlight"></span>
                        <label>building name/complex name</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <div class="floating-label">      
                        <input class="floating-input" type="text" name="appartment_no" id="appartment_no" placeholder=" " value="" autocomplete="off">
                        <span class="highlight"></span>
                        <label>appartment/office, unit, no</label>
                    </div>
                </div>
                <div class="submit-company-form-signup">submit</div>
            </form>
        </section>
        <section class="company-signup-form3-cont container beHidden">
            <div class="text-center mt-4">
                <span>upload logo</span>
            </div>
            <form id="form3_profile_image" name="form3_profile_image" method="post" enctype="multipart/form-data" class="col-md-6 form2-companysignup">
                <input onchange="uploadImageCover(this);" type="file" name="file3" id="file3" class="form-control" required="" style="opacity: 0;" value="upload">
                <div class="profile-image-content text-center">
                    
                    <div class="profile-image-upload-wrap form-group">
                        <div class="cover-image-preview">
                            <!--youtube and cover image-->
                        </div>
                        <div class="image-selection-wrap halign-center">
                            <button type="button" id="form3-image-upload" class="btn-select-file3 btn-ouline-shadow">upload</button>
                            <button type="button" id="form3-image-video" class="btn-select-file3 btn-ouline-shadow" data-toggle="modal" data-target="#uploadURLmodal">add youtube links</button>
                        </div>
                    </div>
                    <div>
                      <div class="lbl-note" id="progress" style="color:green;"></div>
                      <div class="lbl-note">format - jpeg, png</div>
                      <div class="lbl-note">min. image size 480x480 px</div>
                    </div> 
  
            <input type="hidden" name="account_id" id="account_id" value="">
                    <input type="hidden" name="" user_id="" value="">            
                </div>
                <div class="form2-btn-cont">
                    <div class="form2-btn" id="skip-form3">skip</div>
                    <div class="form2-btn">save</div>
                </div>
  
                <!-- Modal -->
                <div id="uploadURLmodal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
  
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h4 class="modal-title">add youtube links</h4>
                            </div>
                            <div class="modal-body">
                                <div class="yt-input-cont">
                                    <input type="text" class="url-yt" id="youtube-input-url" name="" placeholder="paste url here">
                                </div>
                                <div class="invalid-url hideME"><p>invalid url</p></div>
                                <div class="youtube-save-btn">save</div>
                            </div>
                        </div>
  
                    </div>
                </div>
            </form>
        </section>
    </main>
    <script>
         $('.submit-company-form-signup').click(function(){
           event.preventDefault(); 
           
            var form = $("#company-contact-form");
             var serializedData = form.serialize();
              var url = "<?php echo BASE_URL;?>home/postForm";
             
            $.ajax({
                    url: url,
                    type: 'POST',
                    data: {'formData':serializedData,'type':"formPost"},
                   
                    success: function (data) {
                        console.log(data);
                        
                   $(".company-signup-form1-cont").removeClass('beVisible');
            $(".company-signup-form3-cont").addClass('beVisible');
                   
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



 
  
  