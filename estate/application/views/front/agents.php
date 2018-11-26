<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Agents</span>
    <h2>Agents</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer agents">

<div class="row">
  <div class="col-lg-8  col-lg-offset-2 col-sm-12">
          
          <?php foreach($agents as $agent):?>
          <!-- agents --> 
      <div class="row">
        <div class="col-lg-2 col-sm-2 "><a href="#"><img src="<?=base_url()?>assets/images/agents/1.jpg" class="img-responsive"  alt="agent name"></a></div>
        <div class="col-lg-7 col-sm-7 "><h4><?php echo $agent->firstname.'  '.$agent->lastname;?></h4><p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p></div>
        <div class="col-lg-3 col-sm-3 "><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:abc@realestate.com"><?=$agent->email?></a><br>
        <span class="glyphicon glyphicon-earphone"></span> <?=$agent->phone?></div>
      </div>
      <!-- agents -->
          <?php endforeach;?>
          
      <!-- agents --> 
      <div class="row">
        <div class="col-lg-2 col-sm-2 "><a href="#"><img src="<?=base_url()?>assets/images/agents/1.jpg" class="img-responsive"  alt="agent name"></a></div>
        <div class="col-lg-7 col-sm-7 "><h4>John Smith</h4><p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p></div>
        <div class="col-lg-3 col-sm-3 "><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:abc@realestate.com">abc@realestete.com</a><br>
        <span class="glyphicon glyphicon-earphone"></span> (9009) 899 889</div>
      </div>
      <!-- agents -->
      
       <!-- agents -->
      <div class="row">
        <div class="col-lg-2 col-sm-2 "><a href="#"><img src="<?=base_url()?>assets/images/agents/2.jpg" class="img-responsive" alt="agent name"></a></div>
        <div class="col-lg-7 col-sm-7 "><h4>John Smith</h4><p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p></div>
        <div class="col-lg-3 col-sm-3 "><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:abc@realestate.com">abc@realestete.com</a><br>
        <span class="glyphicon glyphicon-earphone"></span> (9009) 899 889</div>
      </div>
      <!-- agents -->
      

       <!-- agents -->
      <div class="row">
        <div class="col-lg-2 col-sm-2 "><a href="#"><img src="<?=base_url()?>assets/images/agents/3.jpg" class="img-responsive" alt="agent name"></a></div>
        <div class="col-lg-7 col-sm-7 "><h4>John Smith</h4><p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p></div>
        <div class="col-lg-3 col-sm-3 "><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:abc@realestate.com">abc@realestete.com</a><br>
        <span class="glyphicon glyphicon-earphone"></span> (9009) 899 889</div>
      </div>
      <!-- agents -->
      

       <!-- agents -->
      <div class="row">
        <div class="col-lg-2 col-sm-2 "><a href="#"><img src="<?=base_url()?>assets/images/agents/4.jpg" class="img-responsive" alt="agent name"></a></div>
        <div class="col-lg-7 col-sm-7 "><h4>John Smith</h4><p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p></div>
        <div class="col-lg-3 col-sm-3 "><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:abc@realestate.com">abc@realestete.com</a><br>
        <span class="glyphicon glyphicon-earphone"></span> (9009) 899 889</div>
      </div>
      <!-- agents -->
      
     
  </div>
</div>


</div>
</div>

<?php include'footer.php';?>