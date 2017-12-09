<br>
<br>
<br>
<!-- crear categoria con ajax  -->
<div class="container-fluid">
<?php foreach ($category->result() as $fila): ?>
	<form action="<?php echo base_url('index.php/Category/updateCategory/'.$fila->id_category) ?>" name="category" method="post">
		<div class="row">
			<div class="col-md-6">
				<label for="">Name Category </label>
				<input type="text" name="category" class="form-control" value="<?php echo $fila->name_category ?>">
			</div>
			<div class="col-md-3">
				<label for="">Select Type Category</label>
				<input type="text" class="form-control" value="<?php echo $fila->name_type_category ?>" disabled>
			</div>
		</div>
		<button type="submit" class="btn btn-raised btn-primary">Save Category</button>	
	</form>	
<?php endforeach ?>
</div>