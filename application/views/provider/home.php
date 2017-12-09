<div class="container" style="padding-top: 40px">
	<div class="row">
		<div class="col-4">
			<a href="<?php echo base_url('index.php/Provider/addProvider') ?>" class="btn btn-raised">Add New Supplier</a>
		</div>
	</div>
		<table class="table table-stripped">
			<thead class="">
				<tr>
					<th>Id</th>
					<th>Supplier Name</th>
					<th>Contact Name</th>
					<th>Supplier Contact</th>
					<th>City</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($supplier->result() as $fila): ?>
					<tr>
						<td><?php echo $fila->id_supplier ?></td>
						<td><?php echo $fila->name_supplier ?></td>
						<td><?php echo $fila->contact_name." ".$fila->contact_last_name ?></td>
						<td><?php echo $fila->contact_email ?></td>
						<td><?php echo $fila->City ?></td>
						<td><a href="#">Delete </a><a href="<?php echo base_url('index.php/Provider/updateProvider/'.$fila->id_supplier) ?>">Update</a></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>