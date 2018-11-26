<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style style="text/css">
        .sidebar{
                text-align:left;
              
        }
       .sidebar ul li{
                list-style: none;
                color: white;
                font-size: 14px;
                font-family: Tahoma;
                padding-top: 5px;
                padding-bottom: 10px;
                padding-left:0;
                text-decoration: none; 
        } 
        .sidebar a{
                text-decoration: none;
                color:#fff;
        }
        .sidebar ul a li:hover{
                text-decoration: none;
                color: #0FB70F;
        }
        .sidebar ul a li ul li a:hover{
                text-decoration: none;
                color: #fff;
        }
        .sidebar a li:visited{ 
                color: grey;
        }
        .sidebar a:active{ 
                color: #0FB70F;
        }
        i{
                padding-right:7px;
        }
        li ul{
                color: #000;
        }
</style>
<div class="bg bg-dark col-sm-12">
        <div class="list">
                <div>
                        <?php
                        $config_items=$this->Fetch_model->fetch_config_items('logo');
                        ?>
                <a href="#"><img src="<?= base_url()?>assets/images/company_infor/<?php echo $config_items['value']?>" class="img-fluid" alt="Realestate" style="margin-bottom:15px" ></a> 
                </div>
                <div class="sidebar">
                <ul style="margin-left:-30px">
                        <a href="<?=base_url()?>admin/admin"><li><i class="fa fa-dashboard"></i> Dashboard</li></a>
                        <a data-toggle="collapse" href="#collapse1"><li><i class="fa fa-home "></i> Rent <i class="fa fa-angle-down"> </i>
                        <ul id="collapse1" class="collapse" style="margin-bottom:-15px">
                        <li class=""><a href="<?=base_url()?>admin/Admin/add_rental_property">Add Property</a></li>
                                <li class=""><a href="<?=base_url()?>admin/Admin/rental_property">Listed Property</a></li>
                        </ul></li></a>
                        <a href=""><li><i class="fa fa-bank"></i> Buy</li></a>
                        <a href="<?=base_url()?>admin/users/all_users"><li><i class="fa fa-users"></i> Users</li></a>
                        <a data-toggle="collapse" href="#collapse3"><li><i class="fa fa-building"></i>  Properties
                        <i class="fa fa-angle-down"> </i>
                        <ul id="collapse3" class="collapse" style="margin-bottom:-15px">
                        <li class=""><a href="<?=base_url()?>admin/property/lease_property">Lease Property</a></li> 
                        </ul>
                        </li></a>
                        <a href="<?= base_url()?>admin/property/gallery"> <li><i class="fa fa-image"></i>Gallery</li></a>
                        <a href=""><li><i class="fa fa-align-justify"></i> Resources</li></a>
                        <a href=""><li><i class="fa fa-phone"></i> Contact Details</li></a>
                        <a data-toggle="collapse" href="#collapse2"><li><i class="fa fa-cogs"></i> Settings
                        <i class="fa fa-angle-down"> </i>
                        <ul id="collapse2" class="collapse" style="margin-bottom:-15px">
                        <li class=""><a href="<?=base_url()?>admin/Admin/general_settings">General Settings</a></li>
                                <li class=""><a href="<?=base_url()?>admin/Admin/company_settings">Company Settings</a></li>
                        </ul>
                        </li></a>
                </ul>
                </div>
        </div>
</div>