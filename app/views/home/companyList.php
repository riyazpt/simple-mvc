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
    <link rel="stylesheet" href="<?php echo $publicFolder; ?>style-new.css">
    
    <link rel="stylesheet" href="<?php echo $publicFolder; ?>company-signup.css"><!--MAIN CSS FOR THIS PAGE-->
    <link rel="stylesheet" href="<?php echo $publicFolder; ?>list.css">

    <script src="<?php echo $publicFolder; ?>jquery-3.3.1.min.js.download"></script>
    <script src="<?php echo $publicFolder; ?>popper.min.js.download"></script> 
    <script src="<?php echo $publicFolder; ?>popUp.js.download"></script> 
    <script src="<?php echo $publicFolder; ?>bootstrap.min.js.download"></script>
    <script src="<?php echo $publicFolder; ?>bootstrap-select.js.download"></script>
    <script src="<?php echo $publicFolder; ?>bootstrap-select.min.js.download"></script> 
    
    <style>
       


      </style>
</head>
<body>
    <main>
        <div class="container">
            <form class="search-list-sec form-columns form-columns-custom large style-two">
            <div class="form-group search-groups">
                <label class="control-label">search</label>
                <input type="search" class="form-control" id="input_keywords" style="">
            </div>
            </form>
            
            <div class="record-listing">
                <ul class="table-listing table-head">
                    <li>company name</li>
                    <li>email</li>
                    <li>website</li>
                    <li>industry</li>
                    <li class="date">created</li>
                </ul>
                
                      <?php
                            

                    if (is_array($showCompanyDetails) && count($showCompanyDetails) > 0) 
                            {
                       
                                foreach ($showCompanyDetails as $row) 
                                        { 
                                   
                                  ?>
                                    <ul class="table-listing">
                                        <?php
                                   $commaDissectedArray=   explode(',', $row["meta_value"]);
                                   
                                   foreach ($commaDissectedArray as $commaDissectedValue) 
                                        { 
                                      
                                       list($key, $value) = explode('=', $commaDissectedValue);
                                  
                                  
                                        ?>
                                  
                                           
                                             
                                                <?php 
                                                if(isset($key))
                                                {
                                                   
                                                    if(!empty($key ))
                                                    {
                                                       
                                                        if(strcmp($key,"company_name")==0)
                                                        {
                                                            ?>
                                                             <li>
                                                        <?php echo $value;?>
                                                           </li>
                                                       <?php
                                                       }
                                                    }
                                                }
                                                ?>
                                            
                                         
                                              
                                             
                                                <?php 
                                                if(isset($key))
                                                {
                                                    if(!empty($key ))
                                                    {
                                                       
                                                        if(strcmp($key,"email")==0)
                                                        {?>
                                                           <li>
                                                               <?php
                                                         echo $value;?>
                                                               </li>
                                                       <?php }
                                                    }
                                                }
                                                ?>
                                            
                                            
                                           
                                             
                                                <?php 
                                                if(isset($key))
                                                {
                                                    if(!empty($key ))
                                                    {
                                                       ?>
                                                 
                                                     <?php
                                                        if(strcmp($key,"website")==0)
                                                        {?>
                                                        <li>
                                                            <?php
                                                         echo $value;?></li>
                                                        
                                                        <?php }
                                                        
                                                   }
                                                }
                                                ?>
                                            
                                            
                                             
                                             
                                                <?php 
                                                if(isset($key))
                                                {
                                                    if(!empty($key))
                                                    {
                                                       
                                                        if(strcmp($key,"industry")==0)
                                                        {?>
                                                         <li>
                                                       <?php  echo $value;?>
                                                         </li>
                                                       <?php 
                                                       
                                                        }
                                                    }
                                                }
                                                ?>
                                            
                                            
                                
                                
                                                    
                                                    
                                         <?php
                                         
                                          }?>
                                                         
                                         <li class="date"><?php echo $row["created_date"]; ?> <span class="option-task"></span>
                                       
                                             <div class="dropdown-customize">
                                                 <p data-toggle="modal" data-target="#modalEdit" class="company-edit" row-data="row-<?php echo $row["group_id"]; ?>">edit</p>
                                        <p data-toggle="modal" data-target="#modalDelete" class="company-delete" id="modalDe-<?php echo $row["group_id"]; ?>" row-data="row-<?php echo $row["group_id"]; ?>">delete</p>
                                        </div>
                                         </li>
                                         </ul> 
                                      <?php  }
                                     }
                                    
                                
?>
                    
                    
                    
               
                
               
            </div>
        </div>    
    </main>

    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="edit-div-wrapper">
                      
                        <main>
                                <section class="company-signup-form1-cont container beHidden beVisible">
                                    <div class="text-center">
                                        <span>essential information</span>
                                    </div>
                                    <form action="" id="companyEditForm" class="col-md-5 form1-companysignup">
                                        <div class="form-group mt-4">
                                            <div class="floating-label">      
                                                <input class="floating-input" type="text" name="companyName" id="companyName" placeholder=" " value="" autocomplete="off">
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
                                            <div class="dropdown bootstrap-select"><select class="selectpicker" data-live-search="true" id="industry" name="industry" tabindex="-98">
                                                <option value="">default</option>
                                                <option value="1">industry 1</option>
                                                <option value="2">industry 2</option>
                                                <!-- add selected in option if active -->
                                            </select>
                                                <button type="button" class="btn dropdown-toggle bs-placeholder btn-light" data-toggle="dropdown" role="button" data-id="" title="default"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">default</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                                        </div>
                                        <div class="phone-col-form">
                                            <div class="form-group SelectCustom phone-col-1">
                                                <p class="selectLabel">country code</p>
                                                <div class="dropdown bootstrap-select"><select class="selectpicker" data-live-search="true" id="landline_country_code" name="landline_country_code" tabindex="-98">
                                                    <option value="">default</option>
                                                    <option value="1">country 1</option>
                                                    <option value="2">country 2</option>
                                                    <!-- add selected in option if active -->
                                                </select><button type="button" class="btn dropdown-toggle bs-placeholder btn-light" data-toggle="dropdown" role="button" data-id="" title="default"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">default</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                                            </div>
                                            <div class="form-group phone-col-2">
                                                <div class="floating-label">      
                                                    <input class="floating-input" type="text" name="mobile_number" id="mobile_number" placeholder=" " value="" autocomplete="off">
                                                    <span class="highlight"></span>
                                                    <label>phone number</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="phone-col-form">
                                            <div class="form-group SelectCustom phone-col-1">
                                                <p class="selectLabel">country code</p>
                                                <div class="dropdown bootstrap-select"><select class="selectpicker" data-live-search="true" id="country" name="country" tabindex="-98">
                                                    <option value="">default</option>
                                                    <option value="1">country 1</option>
                                                    <option value="2">country 2</option>
                                                    <!-- add selected in option if active -->
                                                </select><button type="button" class="btn dropdown-toggle bs-placeholder btn-light" data-toggle="dropdown" role="button" data-id="" title="default"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">default</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                                            </div>
                                           
                                        </div>
                                        <div class="two-col-form">    
                                         
                                            <div class="form-group SelectCustom two-col">
                                                <p class="selectLabel">state</p>
                                                <div class="dropdown bootstrap-select"><select class="selectpicker" data-live-search="true" id="state" name="state" tabindex="-98">
                                                    <option value="">default</option>
                                                    <option value="1">state 1</option>
                                                    <option value="2">state 2</option>
                                                    <!-- add selected in option if active -->
                                                </select><button type="button" class="btn dropdown-toggle bs-placeholder btn-light" data-toggle="dropdown" role="button" data-id="" title="default"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">default</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                                            </div>
                                            <div class="form-group SelectCustom two-col">
                                                <p class="selectLabel">city</p>
                                                <div class="dropdown bootstrap-select"><select class="selectpicker" data-live-search="true" id="city" name="city" tabindex="-98">
                                                    <option value="">default</option>
                                                    <option value="1">city 1</option>
                                                    <option value="2">city 2</option>
                                                    <!-- add selected in option if active -->
                                                </select><button type="button" class="btn dropdown-toggle bs-placeholder btn-light" data-toggle="dropdown" role="button" data-id="" title="default"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">default</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                                            </div>
                                            <div class="form-group SelectCustom two-col">
                                                <p class="selectLabel">suburb</p>
                                                <div class="dropdown bootstrap-select"><select class="selectpicker" data-live-search="true" id="suburb" name="suburb" tabindex="-98">
                                                    <option value="">default</option>
                                                    <option value="1">suburb 1</option>
                                                    <option value="2">suburb 2</option>
                                                    <!-- add selected in option if active -->
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
                                        <input onchange="uploadImageCover(this);" type="file" name="logo_url" id="logo_url" class="form-control" required="" style="opacity: 0;" value="upload">
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
                                                            <input type="text" class="url-yt" id="youtube-input-url" name="youtube_url" placeholder="paste url here">
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
                               
                               
                            
                            </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="mainModal-div-wrapper">
                        <div class="warning-img">
                            <img src="img/warning.png" alt="">
                            <p>are you sure you want to delete this?</p>
                        </div>
                        <div class="warning-but-cont">
                            <button type="button" id="deleteThis">yes</button>
                            <button type="button" id="dontDeleteThis" data-dismiss="modal" aria-label="Close">no</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<script>
jQuery(function (){
    jQuery('#input_keywords').click(function (){
        jQuery(this).closest('.form-group').addClass('focused');
    });
});

$(document).ready(function(){
    $('.option-task').click(function(){
        $(this).addClass('activeContainer');
        $(this).next().toggleClass('dpShow');;
    });
});

$(document).mouseup(function(e){
    var container = $(".dropdown-customize");

    // If the target of the click isn't the container
    if(!container.is(e.target) && container.has(e.target).length === 0){
        container.removeClass('dpShow');
        $('.option-task').removeClass('activeContainer');
    }
});
$(document).mouseup(function(e){
    var container = $("#modalDelete");

    // If the target of the click isn't the container
    if(!container.is(e.target) && container.has(e.target).length === 0){
        $('#deleteThis').removeClass();
    }
});
$(document).on("click", "#modalDe", function () {
     var myBookId = $(this).attr('row-data'); 
     $("#deleteThis").addClass(myBookId);
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
$('#dontDeleteThis').click(function(){
    $(this).prev().removeClass();
});

$('#deleteThis').click(function(){
    var id = $(this).attr('class');
    var companyid = $(this).attr('row-data');
    var result_copmany_id = companyid.split("-");
   
    var url = "<?php echo BASE_URL;?>home/deleteCompany";
             
            $.ajax({
                    url: url,
                    type: 'POST',
                    data: {'company_id':result_copmany_id[1]},
                   
                    success: function (data) {
                      
                        
                    $('[row-data=' + id + ']').closest('ul').remove();
                    $('#modalDelete').modal('hide');
                   
                    }
       });
   
   
    
});
$('.company-delete').click(function(){
     var companyid = $(this).attr('row-data');
   $(deleteThis).attr("row-data",companyid);
   var myBookId = $(this).attr('row-data'); 
     $("#deleteThis").addClass(myBookId);
});
$('.company-edit').click(function(){
     var companyid = $(this).attr('row-data');
  
    var result_copmany_id = companyid.split("-");
   
    var url = "<?php echo BASE_URL;?>home/editCompany";
             
            $.ajax({
                    url: url,
                    type: 'POST',
                    dataType:"json",
                    data: {'company_id':result_copmany_id[1]},
                   
                    success: function (data) {
                      
                        
                   console.log(data);
                   populate('#companyEditForm', data);
                   
                    }
                    
       });
});

function populate(frm, data) {
    console.log(data);
    for (var i = 0, l = data.length; i < l; i++) 
    {
    var obj = data[i];
    console.log(obj);
    
    $.each(data, function(meta_key, meta_value){
      
    $('[name='+obj['meta_key']+']', frm).val(obj['meta_value']);
    console.log(obj['meta_key']);
  });
}
}

</script>



 
  
  