<div class="panel" style="padding:0 10px 0 0">
<div class="row" style="margin-top:1%; text-align: center; color:#fff">
        <div class="col-sm-3 " style="padding:15px;">
                <div class="panel bg-success " >
                        <div class="row ">
                                <div class="col-sm-3" style="text-align:center">
                             <i class="fa fa-home" style="font-size:50px; padding:15px"></i>  
                       </div>
                       <div class="col-sm-8 text-center text-default" >
                              <a href="<?= base_url()?>admin/Admin/rental_property?>"> <h4 style="color:#fff"><?php echo
                              $properties; ?> Classic Properties </h4></a><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                       </div>
                        </div>
                       
                </div></div>
        <div class="col-sm-3 " style="padding:15px;">
                <div class="panel bg-warning">
                        <div class="row">
                             <div class="col-sm-3" style="text-align:center">
                             <i class="fa fa-users" style="font-size:50px; padding:15px"></i>  
                       </div> 
                       <div class="col-sm-8 text-center">
                              <a href="<?= base_url()?>admin/users/all_users" ><h4 style="color:#fff">
                               <ul class="list-group text-left" style="padding-left:15px;">
                                       
                                       <li class="list-group">Agents <?= $agents;?></li>
                                       <li class="list-group">Clients <?= $clients;?></li>
                                       <li class="list-group">Admin <?= $admins;?></li>
                               </ul>
                               </h4></a>
                       </div>
                        </div>
                        </div></div>
        <div class="col-sm-3" style="padding:15px;">
                <div class="panel bg-primary">
                      <div class="row">
                              <div class="col-sm-3" style="text-align:center">
                             <i class="fa fa-money" style="font-size:50px; padding:15px"></i>  
                             </div> 
                              <div class="col-sm-8 text-center">
                                 <h4 style="color:#fff">
                               <ul class="list-group text-left" style="padding-left:15px;">
                                       <li class="list-group">Total Income</li>
                                       <li class="list-group">Pending Income</li>
                                       <li class="list-group">Service Dues</li>
                               </ul>
                               </h4>     
                              </div>
                      </div>
                </div>
        </div>
          
        <div class="col-sm-3 " style="padding:15px;">
                <div class="panel bg-danger">
                       <div class="row">
                              <div class="col-sm-3" style="text-align:center">
                             <i class="fa fa-money" style="font-size:50px; padding:15px"></i>  
                             </div> 
                              <div class="col-sm-8 text-center">
                                 <h4 style="color:#fff">
                               <ul class="list-group text-left" style="padding-left:15px;">
                                       <li class="list-group">Total Expense</li>
                                       <li class="list-group">Pending Expense</li>
                                       <li class="list-group">Due Expense</li>
                               </ul>
                               </h4>     
                              </div>
                      </div>
                </div>
        </div> 
</div> <br>
<div class="row">
        <div class="col-sm-6">
                <div class="panel" style="border:solid 1px silver; border-top:none">
                        <table class="table table-striped table-hover">
                                <thead>
                                        <th>Client Name</th>
                                        <th>Phone Number</th>
                                        <th>Property</th> 
                                        <th>Action</th>
                                </thead>
                                <tbody>
                                        <?php if(!empty($enquiries)){ foreach($enquiries as $row){?>
                                        <tr>
                                                <td><?= $row->fullname;?></td>
                                                <td><?php if(empty($row->comments)){ echo $row->contact_number;?> <blink><i class="fa fa-phone text-danger" style=""></i></blink> <?php } else{
                                                        echo $row->contact_number; }
                                                ?></td> 
                                                <td><a href="#img-<?= $row->ids?>" data-toggle="modal"><?= $row->name;?></a></td> 
                                                <td><a  href="#myModal-<?= $row->ids?>"data-toggle="modal" ><i class="fa fa-list text-info"> View</i></a>
                                                <i class="fa fa-envelope text-danger"> E-mail</i>
                                                 </td>
                                        </tr>
                                        <?php }}else{?>
                                        <tr><td colspan="2"></td>
                                                <td><b class="text-info" style="font-size:14px">No record found</b> </td>
                                                <td  colspan="3"></td>
                                        </tr>
                                        
                                        <?php }?>
                                </tbody>
                        </table>
                        <!-- Modal -->
                   <?php foreach($enquiries as $roww){?>     
                <div id="myModal-<?= $roww->ids?>" class="modal fade" role="dialog">
                  <div class="modal-dialog"> 
                    <div class="modal-content">
                      <div class="modal-header">
                        
                        <h4 class="modal-title text-info" style="padding-top:0px">Enquiry  for <?= $roww->fullname;?></h4>
                        <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body"> 
                      
                              <form method="post" class="update_frm" id="frm_update-<?= $roww->ids?>">
                      <div class="row">
                              <div class="col-sm-3">Full Name</div>
                              <div class="col-sm-9">
                                      <input type="text" class="form-control" name="fullname" readonly="" value="<?= $roww->fullname?>">
                              </div>
                              <div class="col-sm-3">Phone Number</div>
                              <div class="col-sm-9">
                                      <input type="text" class="form-control" name="phone_no" readonly="" value="<?= $roww->contact_number?>">
                              </div>
                              <div class="col-sm-3">Property Name</div>
                              <div class="col-sm-9">
                                      <input type="text" class="form-control" name="property" readonly="" value="<?= $roww->name?>">
                              </div>
                              <div class="col-sm-3">E-mail</div>
                              <div class="col-sm-9">
                                      <input type="text" class="form-control" name="email" readonly="" value="<?= $roww->email_address?>">
                              </div>
                              <div class="col-sm-3">Message</div>
                              <div class="col-sm-9" style="margin-bottom:15px">
                                      <textarea type="text" readonly="" class="form-control" name="meassage" value="<?= $roww->message?>"><?= $roww->message?></textarea>
                              </div>
                              <div class="col-sm-3">Date</div>
                              <div class="col-sm-9">
                                      <input type="text" readonly="" class="form-control" name="date" value="<?= $roww->date?>">
                              </div>
                              <div class="col-sm-3">Enter Comments</div>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="comments" value="<?= $roww->comments?>" placeholder="enter comments i.e Contacted">
                                <input type="hidden" value="<?= $roww->ids;?>" name="id">
                                </div>
                              
                      </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" id="update-<?= $roww->ids?>" class="btn btn-success send">Update Record</button>
                        </form>
                      </div>
                    </div>

                  </div>
                </div>
                <div id="img-<?= $roww->ids?>" class="modal fade" role="dialog">
                  <div class="modal-dialog modal-lg" > 
                   <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
                    <div class="modal-content" > 
                    <img src="<?= base_url()?>assets/images/properties/<?= $roww->image?>"> 
                    </div>

                  </div>
                </div>
                </div>
                <?php }?>
                <!--end of modal -->
                        
                </div>
                
        </div>
         
</div>
</div>
<script>
 <?php foreach($enquiries as $rowz){?>
        $("#update-<?= $rowz->ids?>").click(function(){  
                $.ajax({
                        url: '<?= base_url()?>admin/property/update_enquiry',
                        type: 'POST',
                        data: jQuery("#frm_update-<?= $rowz->ids?>").serialize(), 
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
      <?php }?> 
</script>