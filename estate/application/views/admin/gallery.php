<style>
        .btn{
                font-size: 14px;
        }
        img :hover{
                padding: 300px;
        }
</style>
<div class="col-sm-12 panel" style="padding-top:10px;margin-top:10px;overflow:hidden">
        <div class="row">
                <div class="col-sm-2"><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#add_user">Add Image <i class="fa fa-plus"></i></button></div></div><br>
         
        <!-- Modal -->
<div id="add_user" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
              <h6 class="modal-title">Add Image</h6>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <form id="frm_client" method="post" action="<?= base_url()?>admin/property/add_property_gallery" enctype="multipart/form-data">
      <div class="modal-body">
              <div class="row">
                      <div class="col-sm-4">
                           <label class="text-right">Image:</label>   
                      </div>
                      <div class="col-sm-8">
                              <input type="file" name="image[]" class="form-control" multiple="multiple">
                      </div>
              </div>
              <div class="row">
                      <div class="col-sm-4">
                           <label class="text-right">Property:</label>   
                      </div>
                      <div class="col-sm-8">
                              <select name="property" id="property" class="form-control">
                                     <option value="">--Select Property</option> 
                              <?php foreach($property as $pro):?>
                                     <option value="<?=$pro->id?>"><?=$pro->name?></option> 
                              <?php endforeach;?>
                              </select>
                      </div>
              </div>
              <div class="row">
                      <div class="col-sm-4">
                           <label class="text-right">Description:</label>   
                      </div>
                      <div class="col-sm-8">
                              <input type="text" name="desc" class="form-control">
                      </div>
              </div> 
              
      </div>
      <div class="modal-footer">
        <button type="submit" id="" class="btn btn-success ">Save Info..</button>
        <button type="button" class="btn btn-default hidden" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>

  </div>
</div>
</div>
<div class="panel col-lg-12">
        <div class="row">
        <?php foreach($gallery_images as $images):?>
        
                <div class="col-sm-4">
                      <img src="<?=base_url()?>assets/images/gallery/<?=$images->pictures?>" id="<?=$images->property_id?>" alt="property gallery" class="col-sm-11" height="98%">  
                </div>
                <hr>
        <?php endforeach;?>
        </div>
</div>

<script>
 
$("#send").click(function(){
      //  alert();
  $.ajax({
  type: "POST",
  url: '<?= base_url()?>admin/users/save_clients', 
  data: jQuery('#frm_client').serialize(), 
  success: function (response) { 
                        if (response)
                        {
                           alert('User Saved succesfully'); 
                           location.reload();
                        } else (response === "0")
                        {
                            alert('User Saved succesfully'); 
                           location.reload();
                        }  
                    },
                    error: function (xhr)
                    {
                        alert(xhr.statusText + xhr.responseText);
                    } 
  });
        
});
</script>
