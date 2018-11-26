<style>
        .panel{
                padding: 3px; 
        }
</style>
<div class="panel">
        <header>ADD PROPERTY</header>
        <div class="panel">
                
                <h2>Please provide your property's info.</h2>
                <div class="row">
                <div class="form-group col-sm-5">
                        <form method="post" action="<?=base_url()?>admin/admin/add_new_property" enctype="multipart/form-data">
                                <div class="form-group">
                                <label>Property name</label>
                                <input type="text" name="property_name" class="form-control">
                                </div>
                                <div class="form-group">
                                <label>Property address</label>
                                <input type="text" name="address" class="form-control">
                                </div>
                                <div class="form-group">
                                <label>Unit number</label>
                                <input type="number" name="unit_no" class="form-control">
                                </div>
                                <div class="form-group">
                                <label>Property type</label>
                                <select name="property_type" class="form-control">
                                        <option disabled="">Select option</option>
                                        <option value='house'>House</option>
                                        <option value='apartment'>Apartment/Condo</option>
                                        <option value='townhouse'>Townhouse</option>
                                        <option value='community'>Entire Apartment Community</option>
                                </select>
                                </div>
                        </div>
                        </div>
                         <h2>Listing Status</h2>
                <h3>Details and description</h3>
        <div class="row">
                <div class="col-sm-5">
                        
                        <div class="form-group">
                                
                                <label>Rent price</label>
                                <input type="text" name="rent_price" class="form-control">
                        </div> 
                        <div class="form-group"> 
                                <label>Security deposit</label>
                                <input type="text" name="deposit" class="form-control">
                                <small>set to one month's rent</small>
                        </div>
                        <div class="form-group"> 
                                <label>Beds</label>
                                <select name="beds" class="form-control">
                                       <option disabled="">select no of beds</option> 
                                       <option value="bed-sitter">Bedsitter</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                </select>
                        </div>
                        <div class="form-group"> 
                                <label>Baths</label> 
                                <select name="baths" class="form-control">
                                       <option disabled="">select no of baths</option> 
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5+</option>
                                </select>
                        </div>
                        <div class="form-group">
                                <label>Square feet</label>
                                <input type="number" class="form-control" name="size">
                        </div>
                        </div>
                        <div class="col-sm-5">
                        <h2></h2>  
                        <div class="form-group"> 
                        <h3></h3>
                                <label>Lease Duration</label>
                                <select name="duration" class="form-control">
                                       <option disabled="">select duration</option>  
                                       <option value="1m">1 Month</option>
                                       <option value="6m">6 Months</option>
                                       <option value="1y">1 Year</option>
                                       <option value="ro">Rent to own</option>
                                       <option value="temporary">Temporary</option>
                                </select>
                        </div>
                        <div class="form-group"> 
                                <label>Date Available</label>
                                <input type="date" name="date_available" class="form-control">
                                <small>set the date when the property is Available</small>
                        </div>
                        <div class="form-group"> 
                                <label>Lease Terms</label>
                               <textarea rows="2" name="lease_terms" class="form-control" placeholder="Example: Tenant pays for electricity and Water Bills."></textarea>
                        </div>
                        <div class="form-group"> 
                                <label>Description</label>
                               <textarea rows="2" name="lease_terms" class="form-control" placeholder="Example: What is outstanding about your property"></textarea>
                        </div>
                        </div>
                        </div>
                        <h2>Contact information</h2>
                        <div class="row">
                             <div class="col-sm-5">
                                     <div class="form-group">
                                             <label>Name</label>
                                             <input type="text" name="name" class="form-control">
                                     </div> 
                                     <div class="form-group">
                                             <label>Email</label>
                                             <input type="email" name="email" class="form-control">
                                     </div>
                                     <div class="form-group">
                                             <label>Phone</label>
                                             <input type="phone" name="phone" class="form-control">
                                     </div>
                                     <div class="form-group">
                                             
                                             <input type="checkbox" name="hide_phone">Hide phone on listing
                                     </div>
                             </div>  
                             <div class="col-sm-5">
                                     <h5>For rent by:</h5>
                                     <div class="form-group">
                                             <input type="radio" name="renter" value="owner"> <label> Property owner.</label> 
                                     </div>
                                     <div class="form-group"> 
                                             <input type="radio" name="renter" value="broker"> <label> Management company/Broker.</label> 
                                     </div>
                                     <div class="form-group"> 
                                             <input type="radio" name="renter" value="tenant"> <label> Tenant.</label>
                                     </div>
                             </div>
                             <div class="col-sm-5">
                                     <label>Main photo</label>
                                     <input type='file' name="main_photo" class="form-control">
                             </div>
                        </div> 
                        <button id="add_amenities" class="btn btn-secondary">Add amenities</button>
                        <div class="amenities hidden">
                        <h3>Amenities and rules</h3> 
                        <div class="row">
                                
                                <div class="col-sm-5">
                                        <h4>AMENITIES (OPTIONAL)</h4>
                                        <hr>
                                        <div class="form-group">
                                                <input type="checkbox" name="amenities[]" value="A/C"> <lable>A/C</lable>
                                        </div> 
                                        <div class="form-group">
                                                <input type="checkbox" name="amenities[]" value="Balcony"> <lable>Balcony/Deck</lable>
                                        </div> 
                                        <div class="form-group">
                                                <input type="checkbox" name="amenities[]" value="Furnished"> <lable>Furnished</lable>
                                        </div> 
                                        <div class="form-group">
                                                <input type="checkbox" name="parking" value="1"> <lable>Parking</lable>
                                        </div> 
                                       <!-- <div class="form-group row">
                                                <div style="padding:0;">
                                                <input type="text" name="parking" class="col-sm-3" placeholder="Add Amenity"></div><div style="padding:0;"><input type="submit" class="btn btn-primary col-sm-2" value="Add"></div> 
                                        </div>-->
                                </div>
                                
                                <div class="col-sm-5">
                                        <h4>Laundry</h4>
                                        <hr>
                                        <div class="form-group">
                                             <input type="radio" name="amenities[]" value="laundry none"> <label> None.</label> 
                                     </div>
                                     <div class="form-group"> 
                                             <input type="radio" name="amenities[]" value="laundry in_unit"> <label> In-unit.</label> 
                                     </div>
                                     <div class="form-group"> 
                                             <input type="radio" name="amenities[]" value="laundry shared"> <label> Shared.</label>
                                     </div>
                                        <h4>Pets</h4>
                                        <hr>
                                        <div class="form-group">
                                                <input type="checkbox" name="amenities[]"value="no pets"> <lable>No pets allowed</lable>
                                        </div> 
                                        <div class="form-group">
                                                <input type="checkbox" name="amenities[]"value="cats allowed"> <lable>Cats ok</lable>
                                        </div> 
                                        <div class="form-group">
                                                <input type="checkbox" name="amenities[]"value="dogs allowed"> <lable>Dogs ok</lable>
                                        </div>
                                </div>
                        </div>
                        </div> 
                        <hr>
                        <div class="panel">
                        <div class="col-sm-7">
                        <div class="form-group col-sm-5 pull-right">
                                        <input type="submit" class="btn btn-primary form-control" value="Add Property">
                                </div>
                                </div>
                                </div>
                        </form>
                 
        </div>
</div>
<script>
        $('#add_amenities').on('click',function(e){ 
                e.preventDefault();
           $('.amenities').removeClass('hidden');
           $(this).hide();
        }); 
</script>