<?php include'header.php';?>

<div class="">
    

            <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">
                
                <?php foreach($properties as $pro){?>
                        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2"></div>
              <h2><a href="#"><?=$pro->bedrooms?> Bed Rooms and <?=$pro->dining?> Dinning Room Aparment on Sale</a></h2> 
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> <?=$pro->address?></p>
              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
              <cite>KSH <?=number_format($pro->price)?></cite>   
              
              
              </blockquote> 
            </div>
          </div> 
                <?php } ?>
        
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
              <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 2010 Kizingo, Mombasa</p>
              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p> 
              <cite>KSH 20,000,000</cite>
              </blockquote> 
            </div> 
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2"></div>
              <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1990 Elgon View, Eldoret</p>
              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
              <cite>KSH 20,000,000</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3"></div>
              <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 2000 Ken Mosa, Eldoret</p>
              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
              <cite>KSH 20,000,000</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-4"></div>
              <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span>2010 Huruma, Eldoret</p>
              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
              <cite>KSH 10,000,000</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-5"></div>
              <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Vipingo, Mombasa</p>
              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
              <cite>KSH 20,000,000</cite>
              </blockquote>
            </div>
          </div>
        </div><!-- /sl-slider -->



        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->
</div>



<div class="banner-search">
  <div class="container"> 
    <!-- banner -->
    <h3>Buy, Sale & Rent</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
          <input type="text" class="form-control" placeholder="Search of Properties">
          <div class="row">
                  <form method="get">
            <div class="col-lg-3 col-sm-3 ">
              <select class="form-control" name="type" id="type">
                <option value="buy">Buy</option>
                <option value="rent">Rent</option>
                <option value="sale">Sale</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
              <select class="form-control">
                <option>Price</option>
                <option>KSH150,000 - KSH200,000</option>
                <option>KSH200,000 - KSH250,000</option>
                <option>KSH250,000 - KSH300,000</option>
                <option>KSH300,000 - above</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
            <select class="form-control">
                <option>Property</option>
                <option>Apartment</option>
                <option>Building</option>
                <option>Office Space</option>
              </select>
              </div>
              <div class="col-lg-3 col-sm-4">
              <button class="btn btn-success"  onclick="window.location.href='<?php echo base_url()?>Real_estate/buysalerent?type=$('#type').value'">Find Now</button>
              </div>
              </form>
          </div>
          
          
        </div>
        <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
          <p>Join now and get updated with all the properties deals.</p>
          <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Login</button>        </div>
      </div>
    </div>
  </div>
</div>
<!-- banner -->
<div class="container">
  <div class="properties-listing spacer"> <a href="<?=base_url()?>index.php/Real_estate/buysalerent?type=rent" class="pull-right viewall">View All Listing</a> 
    <h2>Featured Properties</h2>
    <div id="owl-example" class="owl-carousel">
        
                <?php foreach($properties as $property){?>
                <div class="properties">
                        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/<?=$property->image?>" class="img-responsive" alt="properties"/>
                        <?php if($property->status==0){?>
                        <div class="status new">New</div>
                        <?php }else if($property->status==1){?>
          <div class="status sold">Sold</div>
          <?php } ?>
          </div>
          <h4><a href="<?=base_url()?>real_estate/property_detail?id=<?=$property->id?>"><?=$property->name?></a></h4>
          <p class="price">Price: KSH<?=number_format($property->price);?></p>
        <div class="listing-detail">
            <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?=$property->bedrooms?></span><span data-toggle="tooltip" data-placement="bottom" data-original-title="iving Room"><?=$property->living_rooms?></span><span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?=$property->parking?></span><span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?=$property->kitchens?></span>     
        </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
        </div>
                <?php }?>
        
      <div class="properties">
        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/1.jpg" class="img-responsive" alt="properties"/>
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: KSH234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/2.jpg" class="img-responsive" alt="properties"/>
          <div class="status new">New</div>
        </div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: KSH234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/3.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: KSH234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/4.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: KSH234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/1.jpg" class="img-responsive" alt="properties"/>
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: KSH234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/2.jpg" class="img-responsive" alt="properties"/>
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: KSH234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/3.jpg" class="img-responsive" alt="properties"/>
          <div class="status new">New</div>
        </div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: KSH234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/4.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: KSH234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/1.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: KSH234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/2.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: KSH234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/3.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: KSH234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      
    </div>
    
  </div>
  <div class="container">
          <div id="owl-example" class="owl-carousel">
        
                <?php foreach($properties as $property){?>
                <div class="properties">
                        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/<?=$property->image?>" class="img-responsive" alt="properties"/>
                        <?php if($property->status==0){?>
                        <div class="status new">New</div>
                        <?php }else if($property->status==1){?>
          <div class="status sold">Sold</div>
          <?php } ?>
          </div>
          <h4><a href="<?=base_url()?>real_estate/property_detail?id=<?=$property->id?>"><?=$property->name?></a></h4>
          <p class="price">Price: KSH<?=number_format($property->price);?></p>
        <div class="listing-detail">
            <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?=$property->bedrooms?></span><span data-toggle="tooltip" data-placement="bottom" data-original-title="iving Room"><?=$property->living_rooms?></span><span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?=$property->parking?></span><span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?=$property->kitchens?></span>     
        </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
        </div>
                <?php }?>
        
      <div class="properties">
        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/1.jpg" class="img-responsive" alt="properties"/>
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: KSH234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/2.jpg" class="img-responsive" alt="properties"/>
          <div class="status new">New</div>
        </div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: KSH234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/3.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: KSH234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/4.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: KSH234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/1.jpg" class="img-responsive" alt="properties"/>
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: KSH234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/2.jpg" class="img-responsive" alt="properties"/>
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: KSH234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/3.jpg" class="img-responsive" alt="properties"/>
          <div class="status new">New</div>
        </div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: KSH234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/4.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: KSH234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/1.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: KSH234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/2.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: KSH234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?= base_url()?>assets/images/properties/3.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: KSH234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      
    </div>
  </div>
  <div class="spacer">
    <div class="row">
      <div class="col-lg-6 col-sm-9 recent-view">
        <h3>About Us</h3>
        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<br><a href="about.php">Learn More</a></p>
      
      </div>
      <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
        <h3>Recommended Properties</h3>
        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="item active">
              <div class="row">
                <div class="col-lg-4"><img src="<?= base_url()?>assets/images/properties/1.jpg" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">KSH300,000</p>
                  <a href="property-detail.php" class="more">More Detail</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-4"><img src="<?= base_url()?>assets/images/properties/2.jpg" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">KSH300,000</p>
                  <a href="property-detail.php" class="more">More Detail</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-4"><img src="<?= base_url()?>assets/images/properties/3.jpg" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">KSH300,000</p>
                  <a href="property-detail.php" class="more">More Detail</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-4"><img src="<?= base_url()?>assets/images/properties/4.jpg" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">KSH300,000</p>
                  <a href="property-detail.php" class="more">More Detail</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include'footer.php';?>