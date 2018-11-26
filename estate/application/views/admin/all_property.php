<div class="panel">
        <table class="Datatable table table-striped">
                <thead>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Bedrooms</th>
                        <th>Kitchens</th>
                        <th>Living Rooms</th> 
                        <th>Parking</th>
                        <th>Location</th>
                        <th>Desc</th>
                        <th>Action</th>
                </thead>  
                <tbody>
                        <?php foreach($listed_properties as $property):?>
                                <tr>
                                        <td><?= $property->id?></td>
                                        <td><img src="<?php echo base_url()?>assets/images/properties/<?= $property->image?>" height="50" width="50" style="border-radius:20px;"></td>
                                        <td><?= $property->name?></td>
                                        <td><?= $property->bedrooms?></td>
                                        <td><?= $property->kitchens?></td>
                                        <td><?= $property->living_rooms?></td>
                                        <td><?= $property->parking?></td>
                                        <td><?= $property->location?></td>
                                        <td><?= $property->description?></td>
                                        <td><i class=" fa fa-eye btn text-success " id="view"> View</i>
                                <i class="fa fa-edit btn text-info"> Edit</i>
                                <i class=" fa fa-trash text-danger btn "> Delete</i></td>
                                </tr>
                        <?php endforeach;?>
                </tbody>
        </table>
</div>
