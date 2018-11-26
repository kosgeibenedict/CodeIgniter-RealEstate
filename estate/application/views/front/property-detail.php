<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Buy</span>
    <h2>Buy</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 hidden-xs">

<div class="hot-properties hidden-xs">
<h4>Hot Properties</h4>
<?php
$hot_properties=$this->Fetch_model->fetch_hot_properties();
$price = '';
foreach($hot_properties as $hot){
        ?>
        <div class="row">
                <div class="col-lg-4 col-sm-5"><img src="<?= base_url()?>assets/images/properties/<?php echo $hot->image?>" class="img-responsive img-circle" alt="properties"/></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="<?=base_url()?>real_estate/property_detail?id=<?=$hot->id?>"><?=$hot->name?></a></h5>
                  <p class="price">KSH<?php $price= number_format($hot->price);
                  echo $price;
                  ?></p> </div>
              </div>
        <?php
}
?> 

</div>



<div class="advertisement">
  <h4>Advertisements</h4>
  <img src="<?= base_url()?>assets/images/advertisements.jpg" class="img-responsive" alt="advertisement">

</div>

</div>

<div class="col-lg-9 col-sm-8 ">
      <?php foreach($property_head as $property){?>  

<h2><?=$property->living_rooms?> room and <?=$property->kitchens?> kitchen apartment</h2>
<div class="row">
  <div class="col-lg-8">
  <div class="property-images">
    <!-- Slider Starts -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators hidden-xs">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
      </ol>
      <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="item active">
          <img src="<?= base_url()?>assets/images/properties/<?=$property->property_image?>" class="properties" alt="properties" />
        </div>
        <!-- #Item 1 -->

        <!-- Item 2 -->
        <div class="item">
          <img src="<?= base_url()?>assets/images/properties/2.jpg" class="properties" alt="properties" />
         
        </div>
        <!-- #Item 2 -->

        <!-- Item 3 -->
         <div class="item">
          <img src="<?= base_url()?>assets/images/properties/1.jpg" class="properties" alt="properties" />
        </div>
        <!-- #Item 3 -->

        <!-- Item 4 -->
        <div class="item ">
          <img src="<?= base_url()?>assets/images/properties/3.jpg" class="properties" alt="properties" />
          
        </div>
        <!-- # Item 4 -->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<!-- #Slider Ends -->

  </div>
  



  <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
  <p><?=$property->description?></p>
  <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Lease Terms</h4>
  <p><?=$property->lease_terms?></p>

  </div>
  <div><h4><span class="glyphicon glyphicon-map-marker"></span> Location</h4>
<div class="well"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Eldoret,+Chepkanga,+RV+Region,+Kenya&amp;aq=0&amp;oq=pulch&amp;sll=0.5204,0.5204&amp;sspn=	35.269779,35.269779&amp;ie=UTF8&amp;hq=&amp;hnear=Pulchowk,+Patan+Dhoka,+Patan,+Bagmati,+Central+Region,+Nepal&amp;ll=0.5204,35.269779&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed"></iframe></div>
  </div>
        </div>
  </div>
  <div class="col-lg-4">
  <div class="col-lg-12  col-sm-6">
<div class="property-info">
<p class="price">KSH <?= number_format($property->price,2);?></p>
  <p class="area"><span class="glyphicon glyphicon-map-marker"></span><?=$property->location?></p>
  
  <div class="profile">
  <span class="glyphicon glyphicon-user"></span> Agent Details
  <p><?= $property->firstname.' '.$property->lastname?><br><?= $property->phone?></p>
  </div>
</div>

    <h6><span class="glyphicon glyphicon-home"></span> Availabilty</h6>
    <div class="listing-detail">
    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>

</div> 
<div class="col-lg-12 col-sm-6 ">
<div class="enquiry">
  <h6><span class="glyphicon glyphicon-envelope"></span> Post Enquiry</h6>
  <form role="form" id="enq" method="post">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name"/>
                <input type="hidden" name="property_id" value="<?= $_GET['id']; ?>">
                <input type="text" class="form-control" name="email" placeholder="you@yourdomain.com"/>
                <input type="text" name="phone_no" class="form-control" placeholder="your number"/>
                <textarea rows="6" name="message" class="form-control" placeholder="Hello I am interested in the, <?=$property->name?> Property on https://www.<?php echo($_SERVER['REQUEST_URI'])?> ">Hello I am interested in the, <?=$property->name?> Property on https://www.<?php echo($_SERVER['REQUEST_URI'])?></textarea>
      <button type="button" id="send" class="btn btn-primary" name="Submit">Send Message</button>
      </form>
 </div>         
</div>
<?php }?>
  </div>
</div>
</div>
</div>
</div>
</div>

<?php include'footer.php';?>
<script>
        $('#send').click(function(){
                 $.ajax({
  type: "POST",
  url: '<?= base_url()?>admin/property/send_enquiry', 
  data: jQuery('#enq').serialize(), 
  success: function (response) { 
                        if (response)
                        {
                           alert('Enquiry Send succesfully'); 
                           location.reload();
                        } else (response === "0")
                        {
                            alert('Enguiry Saved succesfully'); 
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