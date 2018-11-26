<style>
        .btn{
                font-size: 14px;
        }
</style>
<div class="col-sm-12 panel" style="padding-top:10px;margin-top:10px;overflow:hidden">
        <div class="row">
                <div class="col-sm-2"><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#add_user">Add User <i class="fa fa-plus"></i></button></div></div><br>
        <table class="table table-striped table-hover table-bordered">
                <thead>
                        <th></th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>E-mail</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                </thead>
                <tbody>
                        <?php foreach($users as $user){?>
                        <tr>    <td><input type="checkbox" value="<?= $user->ids?>" name="check[]"></td>
                                <td></td>
                                <td><?= $user->firstname ." ". $user->lastname;?></td>
                                <td><?= $user->phone;?></td>
                                <td><?= $user->email;?></td>
                                <td><?= $user->role_name;?></td>
                                <td><?php if($user->status == '1'){
                                echo "Active";}else{
                                echo "Inactive";}?></td>
                                <td>
                                <?php if($user->status != '1'){?>
                                 <i class="fa fa-unlock-alt text-success btn" id="de_<?= $user->ids?>"> Activate</i><?php } else{?><i class="fa fa-lock text-danger btn" id="<?= $user->ids?>"> Deactivate</i><?php }?>
                               <a href="#view_user-<?= $user->ids?>" data-toggle="modal"> <i class=" fa fa-eye btn text-success " id="view"> View</i></a>
                               <a href="#edit_user-<?= $user->ids?>" data-toggle="modal"> <i class="fa fa-edit btn text-info"> Edit</i></a>
                                <i class=" fa fa-trash text-danger btn " id="del-<?= $user->ids?>"> Delete</i>
                                </td>
                        </tr>
                        <?php }?>
                </tbody>
        </table>
        <!-- Modal -->
<div id="add_user" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
              <h6 class="modal-title">Add User</h6>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <form id="frm_client" method="post">
      <div class="modal-body">
              <div class="row">
                      <div class="col-sm-4">
                           <label class="text-right">First Name:</label>   
                      </div>
                      <div class="col-sm-8">
                              <input type="text" name="firstname" class="form-control">
                      </div>
              </div>
              <div class="row">
                      <div class="col-sm-4">
                           <label class="text-right">Last Name:</label>   
                      </div>
                      <div class="col-sm-8">
                              <input type="text" name="lastname" class="form-control">
                      </div>
              </div>
              <div class="row ">
                      <div class="col-sm-4">
                           <label class="text-right">Phone Number:</label>   
                      </div>
                      <div class="col-sm-8">
                              <input type="text" name="phone" class="form-control">
                      </div>
              </div>
              <div class="row ">
                      <div class="col-sm-4">
                           <label class="text-right">E-mail:</label>   
                      </div>
                      <div class="col-sm-8">
                              <input type="email" name="email" class="form-control">
                      </div>
              </div>
              <div class="row ">
                      <div class="col-sm-4">
                           <label class="text-right">Role:</label>   
                      </div>
                      <div class="col-sm-8">
                              <select type="text" name="role" class="form-control">
                                      <?php foreach($roles as $role){?>
                                      <option value="<?= $role->id;?>"><?= $role->role_name;?></option>
                                      <?php }?>
                              </select>
                      </div>
              </div>
              <div class="row ">
                      <div class="col-sm-4">
                           <label class="text-right">Id Number:</label>   
                      </div>
                      <div class="col-sm-8">
                              <input type="text" name="id_no" class="form-control"> 
                      </div>
              </div>
              <div class="row ">
                      <div class="col-sm-4">
                           <label class="text-right">Username:</label>   
                      </div>
                      <div class="col-sm-8">
                              <input type="text" name="username" class="form-control"> 
                      </div>
              </div>
              <div class="row ">
                      <div class="col-sm-4">
                           <label class="text-right">Password:</label>   
                      </div>
                      <div class="col-sm-8">
                              <input type="text" name="password" class="form-control"> 
                      </div>
              </div>
              
      </div>
      <div class="modal-footer">
        <button type="button" id="send" class="btn btn-success ">Save Info..</button>
        <button type="button" class="btn btn-default hidden" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>

  </div>
</div>
<?php foreach($users as $user){?>
        <!-- Modal -->
<div id="edit_user-<?= $user->ids?>" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
              <h4 class="modal-title text-info">Edit Details of <?= $user->firstname .' '. $user->lastname;?></h4>
        <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
        
      </div>
      <form id="frm_edit-<?= $user->ids?>" method="post">
      <div class="modal-body">
              <div class="row">
                      <div class="col-sm-6">
                           <label class="text-right">First Name:</label>  
                           <input type="text" name="firstname" value="<?= $user->firstname?>" class="form-control">
                           <input type="hidden" name="id" value="<?=  $user->ids?>">
                      </div>
                      <div class="col-sm-6">
                           <label class="text-right">Last Name:</label>  
                           <input type="text" value="<?= $user->lastname?>" name="lastname" class="form-control"> 
                      </div>
              </div>
              <div class="row">
                      <div class="col-sm-6">
                        <label class="text-right">Phone Number:</label>   
                        <input type="text" value="<?= $user->phone?>" name="phone" class="form-control">
                      </div>
                      <div class="col-sm-6">
                        <label class="text-right">E-mail:</label>
                        <input type="email" name="email" value="<?= $user->email?>" class="form-control">      
                      </div>
              </div>
              <div class="row ">
                      <div class="col-sm-6">
                           <label class="text-right">Role:</label> 
                           <select type="text" name="role" class="form-control">
                                   <?php $role_id = $user->role;
                                   $get_role = $this->Fetch_model->get_role_name($role_id);
                                   
                                   ?>
                                   <option value="<?= $get_role['id'];?>"><?php echo $get_role['role_name'];?></option>
                                   <option></option>
                                      <?php foreach($roles as $role){?>
                                      <option value="<?= $role->id;?>"><?= $role->role_name;?></option>
                                      <?php }?>
                              </select>   
                      </div> 
                      <div class="col-sm-6">
                          <label class="text-right">Id Number:</label>
                          <input type="text" value="<?= $user->id_no?>" name="id_no" class="form-control"> 
                      </div>
              </div>
              <div class="row ">
                      
                      <div class="col-sm-6">
                         <label class="text-right">Username:</label>      
                         <input type="text" value="<?= $user->username?>" name="username" class="form-control">
                      </div>
                      <div class="col-sm-6">
                        <label class="text-right">Password:</label>  
                        <input type="text" value="<?= $user->password?>" name="password" class="form-control">     
                      </div>
              </div> 
              
      </div>
      <div class="modal-footer">
        <button type="button" id="update-<?= $user->ids?>" class="btn btn-success ">Update Info..</button>
        <button type="button" class="btn btn-default hidden" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>

  </div>
</div>

<div id="view_user-<?= $user->ids?>" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content"> 
      <div class="modal-body">
              <div class="row">
                      <div class="col-sm-6">
                           <label class="text-right">First Name:</label>  
                           <input type="text" readonly="" name="firstname" value="<?= $user->firstname?>" class="form-control">
                           <input type="hidden" name="id" value="<?=  $user->ids?>">
                      </div>
                      <div class="col-sm-6">
                           <label class="text-right">Last Name:</label>  
                           <input type="text" readonly="" value="<?= $user->lastname?>" name="lastname" class="form-control"> 
                      </div>
              </div>
              <div class="row">
                      <div class="col-sm-6">
                        <label class="text-right">Phone Number:</label>   
                        <input type="text" readonly="" value="<?= $user->phone?>" name="phone" class="form-control">
                      </div>
                      <div class="col-sm-6">
                        <label class="text-right">E-mail:</label>
                        <input type="email" readonly="" name="email" value="<?= $user->email?>" class="form-control">      
                      </div>
              </div>
              <div class="row ">
                      <div class="col-sm-6">
                           <label class="text-right">Role:</label> 
                           <select type="text" readonly="" name="role" class="form-control">
                                   <?php $role_id = $user->role;
                                   $get_role = $this->Fetch_model->get_role_name($role_id);
                                   
                                   ?>
                                   <option value="<?= $get_role['id'];?>"><?php echo $get_role['role_name'];?></option>
                                    
                              </select>   
                      </div> 
                      <div class="col-sm-6">
                          <label class="text-right">Id Number:</label>
                          <input type="text" readonly="" value="<?= $user->id_no?>" name="id_no" class="form-control"> 
                      </div>
              </div>
              <div class="row ">
                      
                      <div class="col-sm-6">
                         <label class="text-right">Username:</label>      
                         <input type="text" readonly="" value="<?= $user->username?>" name="username" class="form-control">
                      </div>
                      <div class="col-sm-6">
                        <label class="text-right">Password:</label>  
                        <input type="text" readonly="" value="<?= $user->password?>" name="password" class="form-control">     
                      </div>
              </div> 
              
      </div> 
    </div>

  </div>
</div>
<?php }?>
</div>

<script>
<?php foreach($users as $user){?>
 $("#<?= $user->ids?>").click(function(){ 
  $.ajax({
  type: 'post',
  url: '<?= base_url()?>admin/users/deactivate/<?= $user->ids?>', 
  success: function (response) {
   // We get the element having id of display_info and put the response inside it
   location.reload();
  }
  });    
});
 $("#de_<?= $user->ids?>").click(function(){  
  $.ajax({
  type: 'post',
  url: '<?= base_url()?>admin/users/activate/<?= $user->ids?>', 
  success: function (response) {
   // We get the element having id of display_info and put the response inside it
   location.reload();
  }
  });    
});
<?php }?> 
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
<?php foreach($users as $row){?>
        $("#update-<?= $row->ids?>").click(function(){   
                $.ajax({
                        url: '<?= base_url()?>admin/users/update_user',
                        type: 'POST',
                        data: jQuery("#frm_edit-<?= $row->ids?>").serialize(), 
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
        
$("#del-<?= $row->ids?>").click(function(){
    var check = confirm('Are You sure you want to delete this?');
     if(check == 1){ 
           var check2 = confirm("This wont be reversed");
             if(check2 == 1){
           $.ajax({
                        url: '<?= base_url()?>admin/users/delete_user/<?= $row->ids?>', 
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
