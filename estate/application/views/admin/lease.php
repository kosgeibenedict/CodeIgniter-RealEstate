<style>
        .btn{
                font-size: 14px;
        }
</style>
<div class="col-sm-12 panel" style="padding-top:10px;margin-top:10px;overflow:hidden">
        <div class="row">
                <div class="col-sm-2"><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#add_user">Lease Property <i class="fa fa-plus"></i></button></div></div><br>
        <table class="table table-striped table-hover table-bordered">
                <thead>
                        <th></th>
                        <th>Client Name</th>
                        <th>Property Name</th>
                        <th>Lease Price</th>
                        <th>Payment Date</th>
                        <th>Status</th> 
                        <th>Action</th>
                </thead>
                <tbody>
                        <?php foreach($lease_prop as $prop){?>
                        <tr>    <td><input type="checkbox" value="<?= $prop->ids?>" name="check[]"></td>
                                <td><?= $prop->client_id?></td>
                                <td><a href="#img-<?= $prop->ids?>" data-toggle="modal"><?= $prop->name;?></a></td> 
                                <td><?= number_format($prop->lease_price,2);?></td>
                                <td><?= $prop->payment_date;?></td>
                                <td><?php if($prop->status == '1'){
                                echo "Paid";}else{
                                echo "Un Paid";}?></td>
                                <td>
                                 
                               <a href="#view_prop-<?= $prop->ids?>" data-toggle="modal"> <i class=" fa fa-eye btn text-success " id="view"> View</i></a>
                               <a href="#edit_property-<?= $prop->ids?>" data-toggle="modal"> <i class="fa fa-edit btn text-info"> Edit</i></a>
                        <i class=" fa fa-trash text-danger btn " id="del-<?= $prop->ids?>"> Delete</i>
                                </td>
                        </tr>
                        <?php }?>
                </tbody>
        </table>
        <!-- Modal -->
<div id="add_user" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
              <h6 class="modal-title">Lease A Property</h6>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <form id="frm_lease" method="post">
      <div class="modal-body">
              <div class="row">
                      <div class="col-sm-6">
                           <label class="text-right">Client Name:</label>   
                           <input type="text"  name="client_name" class="form-control">
                                    
                      </div>
                      <div class="col-sm-6">
                              <label class="text-right">Property Name:</label>   
                           <select type="text" name="property_name" id="property" class="form-control">
                                   <?php foreach($propss as $propty){?>
                                   <option value="<?= $propty->id;?>" ><?= $propty->name;?></option>
                                   <?php }?>
                           </select>
                      </div>
              </div>
              <div class="row">
                      <div class="col-sm-6">
                           <label class="text-right">Monthly Payment  Amount:</label>  
                            <input type="text" name="payment_amount" id="amount" class="form-control">
                      </div>
                      <div class="col-sm-6">
                          <label class="text-right">Issue Date:</label> 
                          <input type="date" class="datepicker form-control" name="date" class="form-control">  
                      </div>
              </div>
              <div class="row ">
                      <div class="col-sm-6">
                         <label class="text-right">Repayment Date:</label> 
                         <input type="date" name="repayment" class="form-control">
                      </div> 
                      <div class="col-sm-6">
                          <label class="text-right">Exit Date:</label> 
                          <input type="date" class="datepicker form-control" name="exit_date" class="form-control">  
                      </div>
                      
              </div> 
              <div class="row"><div class="col-sm-6">
                         <label class="text-right">Special Requirements:</label> 
                         <textarea type="date" name="requirement" class="form-control"></textarea>
                      </div> </div>
              
      </div>
      <div class="modal-footer">
        <button type="button" id="send" class="btn btn-success ">Save Info..</button>
        <button type="button" class="btn btn-default hidden" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>

  </div>
</div>
        <?php foreach($lease_prop as $prop){?>
        <!-- Modal -->
<div id="view_prop-<?= $prop->ids?>" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
              <h6 class="modal-title">Leased Property Details</h6>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div> 
      <div class="modal-body">
              <div class="row">
                      <div class="col-sm-6">
                           <label class="text-right">Client Name:</label>   
                           <input type="text" value="<?= $prop->client_id;?>"  name="client_name" class="form-control" readonly="">
                                    
                      </div>
                      <div class="col-sm-6">
                              <label class="text-right">Property Name:</label>   
                           <input type="text" name="property_name" id="property" class="form-control" value="<?= $prop->name;?>" readonly="">
                                    
                      </div>
              </div>
              <div class="row">
                      <div class="col-sm-6">
                           <label class="text-right">Monthly Payment  Amount:</label>  
                            <input type="text" name="payment_amount" value="<?= $prop->lease_price;?>" id="amount" readonly="" class="form-control">
                      </div>
                      <div class="col-sm-6">
                          <label class="text-right">Issue Date:</label> 
                          <input type="date" value="<?= $prop->date_of_issue;?>" class="datepicker form-control" name="date" readonly="" class="form-control">  
                      </div>
              </div>
              <div class="row ">
                      <div class="col-sm-6">
                         <label class="text-right">Repayment Date:</label> 
                         <input type="text" name="repayment" value="<?= $prop->payment_date?>" class="form-control" readonly="">
                      </div> 
                      <div class="col-sm-6">
                          <label class="text-right">Exit Date:</label> 
                          <input type="text" value="<?= $prop->exit_date;?>" class="datepicker form-control" name="exit_date" class="form-control" readonly="">  
                      </div>
                      
              </div> 
              <div class="row"><div class="col-sm-6">
                         <label class="text-right">Special Requirements:</label> 
                         <input type="text" name="requirement" readonly="" class="form-control" value="<?= $prop->requirements?>"> 
                      </div> </div>
              
      </div> 
    </div>

  </div>
</div>

<div id="edit_property-<?= $prop->ids?>" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
              <h6 class="modal-title">Update Leased Property</h6>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <form id="frm_update-<?= $prop->ids?>" method="post">
      <div class="modal-body">
              <div class="row">
                      <div class="col-sm-6">
                           <label class="text-right">Client Name:</label>  
                           <input type="hidden" value="<?= $prop->ids;?>" name="id">
                           <input type="text" value="<?= $prop->client_id;?>"  name="client_name" class="form-control">
                                    
                      </div>
                      <div class="col-sm-6">
                              <label class="text-right">Property Name:</label>   
                           <select type="text" name="property_name" id="property" class="form-control">
                                   <option value="<?= $prop->property_id;?>"> <?= $prop->name;?></optio>
                                   <?php foreach($propss as $propty){?>
                                   <option value="<?= $propty->id;?>" ><?= $propty->name;?></option>
                                   <?php }?>
                           </select>
                      </div>
              </div>
              <div class="row">
                      <div class="col-sm-6">
                           <label class="text-right">Monthly Payment  Amount:</label>  
                            <input type="text" value="<?= $prop->lease_price;?>" name="payment_amount" id="amount" class="form-control">
                      </div>
                      <div class="col-sm-6">
                          <label class="text-right">Issue Date:</label> 
                          <input type="date" value="<?= $prop->date_of_issue;?>" class="datepicker form-control" name="date" class="form-control">  
                      </div>
              </div>
              <div class="row ">
                      <div class="col-sm-6">
                         <label class="text-right">Repayment Date:</label> 
                         <input type="date" value="<?= $prop->payment_date;?>" name="repayment" class="form-control">
                      </div> 
                      <div class="col-sm-6">
                          <label class="text-right">Exit Date:</label> 
                          <input type="date" value="<?= $prop->exit_date?>" class="datepicker form-control" name="exit_date" class="form-control">  
                      </div>
                      
              </div> 
              <div class="row"><div class="col-sm-6">
                         <label class="text-right">Special Requirements:</label> 
                         <textarea type="date" name="requirement" class="form-control"><?= $prop->requirements?></textarea>
                      </div> </div>
              
      </div>
      <div class="modal-footer">
        <button type="button" id="update-<?= $prop->ids?>" class="btn btn-success ">Update Info..</button>
        <button type="button" class="btn btn-default hidden" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>

  </div>
</div>
<div id="img-<?= $prop->ids?>" class="modal fade" role="dialog">
                  <div class="modal-dialog modal-lg" > 
                   <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
                    <div class="modal-content" > 
                    <img src="<?= base_url()?>assets/images/properties/<?= $prop->image?>" height="400px"> 
                    </div>

                  </div>
                </div>

        <?php }?>
 
</div>

<script>  
$("#send").click(function(){ 
  $.ajax({
  type: "POST",
  url: '<?= base_url()?>admin/property/save_lease', 
  data: jQuery('#frm_lease').serialize(), 
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
<?php foreach($lease_prop as $prop){?>
$("#update-<?= $prop->ids?>").click(function(){   
                $.ajax({
                        url: '<?= base_url()?>admin/property/update_lease',
                        type: 'POST',
                        data: jQuery("#frm_update-<?= $prop->ids?>").serialize(), 
                success: function(response){
                        if(response == 1){
                           alert('Record Updated succesfully'); 
                           location.reload();  
                        }else{
                           alert('Record Updated succesfully'); 
                           location.reload();    
                        } 
                },
                error: function (xhr,responseText)
                    { 
                      alert(xhr.statusText + xhr.responseText);
                    } 
                        
                }); 
        });
        
$("#del-<?= $prop->ids?>").click(function(){
    var check = confirm('Are You sure you want to delete this?');
     if(check == 1){ 
           var check2 = confirm("This wont be reversed");
             if(check2 == 1){
           $.ajax({
                        url: '<?= base_url()?>admin/property/delete_lease/<?= $prop->ids?>', 
                success: function(response){
                        if(response === 1){
                           alert('Record Deleted succesfully'); 
                           location.reload();  
                        }else{
                           alert('Record Deleted succesfully'); 
                           location.reload();    
                        } 
                },
                error: function (xhr,responseText)
                    { 
                      alert(xhr.statusText + xhr.responseText);
                    } 
                        
                }); 
     }
             else{
                     
             }
     }
     else{
             
     }
});
<?php }?>
         
</script>
<?php
