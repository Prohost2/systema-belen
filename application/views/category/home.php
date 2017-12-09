<!-- Posible categoria nueva o jalarla para la creación de un producto -->
<div class="container" style="padding-top: 40px">
	<div class="row">
		<div class="col-4">
			<a href="<?php echo base_url('index.php/Category/formaddCategory') ?>" class="btn btn-raised">Add Category</a>
		</div>
	</div>
		<table class="table table-sm ">
			<thead class="thead-primary">
				<tr>
					<th>Id</th>
					<th>Name Category</th>
					<th>Type Category</th>
					<th>action</th>	
				</tr>
			</thead>
			<tbody>
			<?php foreach ($category->result() as $fila): ?>
				<tr>
					<td><?php echo $fila->id_category ?> </td>
					<td><?php echo $fila->name_category ?> </td>
					<td><?php echo $fila->name_type_category ?> </td>
					<td><a href="#">Delete</a><a href="<?php echo base_url('index.php/Category/formupdateCategory/'.$fila->id_category) ?>">Update</a></td>
				</tr>	
			<?php endforeach ?>
			</tbody>
		</table>
	</div>