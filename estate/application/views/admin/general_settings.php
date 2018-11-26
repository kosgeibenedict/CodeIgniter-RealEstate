<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container center">
        <div class="col-sm-7">
        <h2>Company Settings</h2>
        <form method="post" action="<?=base_url()?>admin/Admin/general_settings_add" class="form-group">
             <label>Business Background</label> 
             <textarea name="business_background" rows="2" class="form-control"></textarea>
             <label>Company Profile</label> 
             <textarea name="company_profile" rows="2" class="form-control"></textarea>
             <label></label>
             <input type="submit" class="btn btn-primary form-control" value="Submit">
        </form>
        </div>
</div>