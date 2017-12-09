<br>
<br>
<br>
<!-- crear categoria con ajax  -->
<div class="container-fluid">
	<form action="<?php echo base_url('index.php/Category/addCategory') ?>" name="category" method="post">
		<div class="row">
			<div class="col-md-3">
				<label for="">Name Category </label>
				<input type="text" name="category" class="form-control">
			</div>
			<div class="col-md-3">
				<label for="">Select Type Category</label>
				<select name="filed_type" id="category" class="form-control">
					<option value="0">Select One Option</option>
					<?php foreach ($category->result() as $fila): ?>
						<option value="<?php echo $fila->id_type_category ?>"><?php echo $fila->name_type_category ?></option>
					<?php endforeach ?>
				</select>
			</div>
		</div>
		<button type="submit" class="btn btn-raised btn-primary">Save Category</button>	
	</form>
</div>