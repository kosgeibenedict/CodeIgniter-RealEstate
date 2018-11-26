<!DOCTYPE html>
<html>
 
    <head>
        <title><?php 
        
        $config_items=$this->Fetch_model->fetch_config_items('company_name');
        
        echo $config_items['value']; ?></title>
        <?php
        $this->load->view('front/admin_header');
        ?> 
    </head>
         <style type="text/css">
                 .row{
                         display: flex;
                 }
         </style>
    <body style="margin: 0px; padding: 0px;">   
                <div class="row">
                <div class="sidebar col-sm-2"  style="background-color:#000;margin:0;">
                        <?php
                       $this->load->view('front/sidebar');
                       ?>
                </div>
                <div class="col-sm-10">
                     
                    <?php echo $body; ?>
                      
                </div>
                </div> 
                 <div> 
                         <?php
                         $this->load->view('front/footer');
                         ?>
                 </div>
         
    </body>
     
</html>