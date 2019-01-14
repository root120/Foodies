<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Add Restaurent</h3>
			<hr/>
			<form action="<?php echo base_url()?>owners/add_restaurent" method="POST" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="res">Restaurent Name</label>
			    <input type="text" class="form-control" name="res_name" id="res" placeholder="Enter Restaurent Name">
			  </div>

			  <div class="form-group">
			    <label for="desc">Restaurent Description</label>
			    <textarea class="form-control" id="desc" name="res_desc" rows="5" placeholder="Enter Restaurent Description"></textarea>
			  </div>

			  <div class="form-group">
			    <label for="address">Restaurent Address</label>
			    <input type="text" class="form-control" id="address" name="res_address" placeholder="Enter Restaurent address">
			  </div>

			  <div class="form-group">
			    <label for="img">Restaurent Image</label>
			    <input type="file" class="form-control" id="img" name="res_image"  placeholder="Enter Restaurent address">
			  </div>
			
			  <button type="submit" class="btn btn-primary">Add</button>
		   </form>
		   <br>
			</div>
			<div class="col-md-6">
				<h3>Owners Profile</h3>
			    <hr/>
			</div>
	   </div>
   </div>
</section>