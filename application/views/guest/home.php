<div class="container" style="padding-top: 40px">
	<div class="row">
		<div class="col-4">
			<a href="<?php echo base_url('index.php/Home/add_product') ?>" class="btn btn-raised">Add Product</a>
		</div>
	</div>
		<table class="table table-sm">
			<thead class="">
				<tr>
					<th>Id</th>
					<th>Code</th>
					<th>Name</th>
					<th>Date Creat</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>#12345</td>
					<td>AE23RFG</td>
					<td>Title</td>
					<td>2017-05-15</td>
					<td><a href="#" class="delete">Delete</a> <a href="<?php echo base_url('index.php/Home/updateProduct') ?>"> Update</a></td>
				</tr>
			</tbody>
		</table>
	</div>