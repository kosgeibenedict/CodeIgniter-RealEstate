<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="panel"> 
<h3><u><a href=""><?=$title?></a></u></h3>
      <div class="form-group">
              <form class="form-group" method="post" action="<?=base_url()?>admin/admin/company_details" enctype="multipart/form-data">
                      <div class="row col-sm-12">
                              <div class="col-sm-6">
                                     <div class="form-group">
                                             <div class="col-sm-4"> 
                                                     <label>Company Name</label>
                                             </div>
                                             <div class="col-sm-8">
                                                     <input type="hidden" name="company[]" class="form-control" value="company_name">
                                                     <input type="text" name="val[]" class="form-control">
                                             </div>
                                     </div> 
                                     <div class="form-group">
                                             <div class="col-sm-4">
                                                     <label>Company Slogan</label>
                                             </div>
                                             <div class="col-sm-8">
                                                     <input type="hidden" name="company[]" class="form-control" value="slogan">
                                                     <textarea name="val[]" class="form-control" rows="3"></textarea>
                                             </div>
                                     </div>  
                                     <div class="form-group">
                                             <div class="col-sm-4"> 
                                                     <label>Company Logo</label>
                                             </div>
                                             <div class="col-sm-8">
                                                     <input type="hidden" name="company[]" class="form-control" value="logo">
                                                     <input type="text" name="val[]" class="form-control" id="file_name">
                                                     <input type="file" name="image" class="form-control"id="file">
                                             </div>
                                     </div>
                                     
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                             <div class="col-sm-4">
                                                     <label>Mission</label>
                                             </div>
                                             <div class="col-sm-8">
                                                     <input type="hidden" name="company[]" class="form-control" value="mission">
                                                     <textarea name="val[]" class="form-control" rows="2"></textarea>
                                             </div>
                                     </div>
                                     <div class="form-group">
                                             <div class="col-sm-4">
                                                     <label>Vision</label>
                                             </div>
                                             <div class="col-sm-8">
                                                     <input type="hidden" name="company[]" class="form-control" value="vision">
                                                     <textarea name="val[]" class="form-control" rows="2"></textarea>
                                             </div>
                                     </div> 
                                     <div class="form-group">
                                             <div class="col-sm-4">
                                                     <label>Address</label>
                                             </div>
                                             <div class="col-sm-8">
                                                     <input type="hidden" name="company[]" class="form-control" value="address">
                                                     <textarea name="val[]" class="form-control" rows="2"></textarea>
                                             </div>
                                     </div>
                              </div>
                              <div class="col-sm-6">
                                      <div class="col-sm-4 pull-right">
                                      <input type="submit" class="btn btn-secondary form-control">
                                      </div>
                              </div>
                      </div>
              </form>
      </div>  
</div>
<script>
        $('#file').on('change',function(){
             val=$(this).val();
             $('#file_name').val(val);
        });
</script>