<div class="container-fluid">
	<div class="row">
		<div class="col-12">
		<?php foreach ($provider->result() as $fila ): ?>	
			<p><b>Name Supplier:</b><?php echo $fila->name_supplier ?></p>
		<?php endforeach ?>
		</div>
		<ul class="nav nav-tabs" id="myTab" role="tablist">
		  <li class="nav-item">
		    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-expanded="true">Provider Data</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Bank Data</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="terms-tab" data-toggle="tab" href="#terms" role="tab" aria-controls="terms">Other Data</a>
		</ul>
		<?php foreach ($provider->result() as $fila): ?>
				<form action="<?php echo base_url('index.php/Provider/updateProviderdata/'.$fila->id_supplier) ?>" name="Provider" method="post">			
		<?php endforeach ?>
		<div class="tab-content" id="myTabContent">
		  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
		  	<div class="container-fluid">
		  		<div class="row">
		  			<div class="col-4">
		  				<label for="">NAME OF SUPPLIER</label>
		  				<?php foreach ($provider->result() as $fila ): ?>
							<input type="text" name="name_supplier" value="<?php echo $fila->name_supplier ?>" class="form-control">		  					
		  				<?php endforeach ?>
		  			</div>
		  			<div class="col-4">
		  				<label for="">CONTACT NAME</label>
						<?php foreach ($provider->result() as $fila ): ?>
		  				<input type="text" name="contact" value="<?php echo $fila->contact_name ?> " class="form-control">
						<?php endforeach ?>
		  			</div>
		  			<div class="col-4">
		  				<label for="">CONTACT LAST NAME</label>
		  				<?php foreach ($provider->result() as $fila ): ?>
		  				<input type="text" name="last_name" value="<?php echo $fila->contact_last_name ?> " class="form-control">
		  				<?php endforeach ?>
		  			</div>
		  			<div class="col-4">
		  				<label for="">CONTACT EMAIL</label>
		  				<?php foreach ($provider->result() as $fila ): ?>
		  				<input type="text" name="email" value="<?php echo $fila->contact_email ?>" class="form-control">
		  				<?php endforeach ?>
		  			</div>
		  			<div class="col-4">
		  				<label for="">CONTACT PHONE NUMBER</label>
		  				<?php foreach ($provider->result() as $fila ): ?>
		  				<input type="text" name="phone" value="<?php echo $fila->contact_phone ?>" class="form-control">
		  			<?php endforeach ?>
		  			</div>
		  			<?php foreach ($provider->result() as $fila ): ?>
		  			<div class="col-4">
		  				<label for="">ADDRES</label>
		  				<input type="text" name="address" value="<?php echo $fila->addres ?>" class="form-control">
		  			</div>
		  			<div class="col-4">
		  				<label for="">CITY</label>
		  				<input type="text" name="city" value="<?php echo $fila->City ?>" class="form-control">
		  			</div>
		  			<div class="col-4">
		  				<label for="">ZIP CODE</label>
		  				<input type="text" name="zip" value="<?php echo $fila->zip_code ?>" class="form-control">
		  			</div>
		  			<?php endforeach ?>
		  			<div class="col-4">
		  				<label for="">COUNTRY: <b><?php echo $fila->china_zone ?></b></label>
		  				<select name="country" id="" class="form-control">
		  					<option value="">Select Country</option>
		  				</select>
		  			</div>
		  			<div class="col-4">
		  				<label for="">SUPPLIER VERIFIED</label><br>
		  				<small>Yes</small>
		  				<input type="radio" name="verified">
		  				<small>No</small>
		  				<input type="radio" name="verified">
		  			</div>
		  			<div class="col-4">
		  				<label for="">MANUFACTURING LEAD TIME</label>
		  				<?php foreach ($provider->result() as $fila): ?>
		  				<input type="text" name="manufacturing" value="<?php echo $fila->manufacturing_time ?>" class="form-control">	
		  				<?php endforeach ?>
		  				
		  			</div>
		  			<div class="col-4">
		  				<label for="">ALIBABA</label><br>
		  				<small>Yes</small>
		  				<input type="radio" name="alibaba">
		  				<small>No</small>
		  				<input type="radio" name="alibaba">
		  			</div>	  			
		  		</div>
		  	</div>
		  	<!--  -->
		  </div>
		  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
		  	<div class="container-fluid">
		  		<div class="row">
		  			<?php foreach ($provider->result() as $fila): ?>
		  			<div class="col-md-3">
		  				<label for="">PAYPAL ACOUNT</label>
		  				<input type="text" name="paypal" value="<?php echo $fila->paypal_acount ?>" class="form-control">	
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">BANK ACCOUNT 1</label>
		  				<input type="text" name="account" value="<?php echo $fila->bank_account ?>" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">BANK NAME</label>
		  				<input type="text" name="bank_name" value="<?php echo $fila->bank_name ?>" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">BANK ADDRESS 1</label>
		  				<input type="text" name="bank_address" value="<?php echo $fila->bank_addres_1 ?>" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">BANK ADDRESS 2</label>
		  				<input type="text" name="bank_address2" value="<?php echo $fila->bank_addres_2 ?>" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">BANK  COUNTRY</label>
		  				<input type="text" name="bank_country" value="<?php echo $fila->bank_country ?>" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">BANK IDENTIFIER</label>
		  				<input type="text" name="bank_identifier" value="<?php // echo $fila->bank_identifier ?>" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">BANK ID</label>
		  				<input type="text" name="bank_id" value="<?php echo $fila->bank_id ?>" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">ACCOUNT NUMBER</label>
		  				<input type="text" name="bank_number" value="<?php echo $fila->bank_account// ?>" class="form-control">
		  			</div>
		  			<?php endforeach ?>
		  		</div>
		  	</div>
		  </div>
		  <div class="tab-pane fade" id="terms" role="tabpanel" aria-labelledby="terms-tab">
		  	<div class="container-fluid">
		  		<br>
		  		<div class="row">
		  			<div class="col-md-3">
		  				<label for="">INTERMEDIARY BANK</label><br>
		  				<small>Yes</small>
		  				<input type="radio" name="intermediary_bank">
		  				<small>No</small>
		  				<input type="radio" name="intermediary_bank">
		  			</div>
		  			<div class="col-md-3">
		  				<?php foreach ($provider->result() as $fila): ?>
		  						<label for="">PAYMENT TERMS: <b><?php echo $fila->description_terms ?></b></label>
		  					<?php endforeach ?>	
						<select name="payment_terms" id="" class="form-control">
		  				<option value="0">Select</option>
		  					<?php foreach ($terms->result() as $fila): ?>
		  						<option value="<?= $fila->id_terms ?>"><?= $fila->description_terms ?></option>
		  					<?php endforeach ?>
						</select>
		  			</div>
		  			<div class="col-md-3">
		  				<?php foreach ($provider->result() as $fila): ?>
		  				<label for="">SKYPE 1</label>
		  				<input type="text" name="skype" value="<?php echo $fila->skype_1 ?>" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">SKYPE 2</label>
		  				<input type="text" name="skype2" value="<?php echo $fila->skype_2 ?>" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">BOSS NAME</label>
		  				<input type="text" name="boos_name" value="<?php echo $fila->boss_name ?>" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">BOSS EMAIL</label>
		  				<input type="text" name="boos_email" value="<?php echo $fila->boss_email ?>" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">BOSS PHONE NUMBER</label>
		  				<input type="text" name="boos_number" value="<?php echo $fila->boss_phone ?>" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">INCOTERMS</label>
		  				<select name="incoterms" id="" class="form-control">
		  					<option value=" ">Select</option>
		  					<option value="fob">FOB</option>
		  					<option value="cif">CIF</option>
		  					<option value="exw">EXW</option>
		  				</select>
		  			</div>
		  				<?php endforeach ?>
		  			<div class="col-md-12">
		  				<?php foreach ($provider->result() as $fila): ?>
		  						<label for="">TERMS OF PAYMENT OF THE PROVIDER <b><?php echo $fila->description_terms ?></b></label>
		  					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
								+
							</button>
		  					<?php endforeach ?>	
		  				<select name="terms_provider" id="" class="form-control">
		  					<option value="">Select Terms Provider</option>
		  					<?php foreach ($terms->result() as $fila): ?>
		  						<option value="<?= $fila->id_terms ?>"><?= $fila->description_terms ?></option>
		  					<?php endforeach ?>
		  				</select>
		  			</div>
		  		</div>
		  	</div>
		  </div>
		</div>
		<button type="submit" class="btn btn-raised btn-primary">Save</button>
		</form>		
	</div>
</div>