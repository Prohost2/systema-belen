<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<p><b>Name Supplier:</b>{{name}}</p>
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
		<form action="<?php echo base_url('index.php/Provider/saveProvider') ?>" name="Provider" method="post">
		<div class="tab-content" id="myTabContent">
		  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
		  	<div class="container-fluid">
		  		<div class="row">
		  			<div class="col-4">
		  				<label for="">NAME OF SUPPLIER</label>
		  				<input type="text" ng-model="name" name="name_supplier" class="form-control">
		  			</div>
		  			<div class="col-4">
		  				<label for="">CONTACT NAME</label>
		  				<input type="text" name="contact" class="form-control">
		  			</div>
		  			<div class="col-4">
		  				<label for="">CONTACT LAST NAME</label>
		  				<input type="text" name="last_name" class="form-control">
		  			</div>
		  			<div class="col-4">
		  				<label for="">CONTACT EMAIL</label>
		  				<input type="text" name="email" class="form-control">
		  			</div>
		  			<div class="col-4">
		  				<label for="">CONTACT PHONE NUMBER</label>
		  				<input type="text" name="phone" class="form-control">
		  			</div>
		  			<div class="col-4">
		  				<label for="">ADDRES</label>
		  				<input type="text" name="address" class="form-control">
		  			</div>
		  			<div class="col-4">
		  				<label for="">CITY</label>
		  				<input type="text" name="city" class="form-control">
		  			</div>
		  			<div class="col-4">
		  				<label for="">ZIP CODE</label>
		  				<input type="text" name="zip" class="form-control">
		  			</div>
		  			<div class="col-4">
		  				<label for="">COUNTRY</label>
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
		  				<input type="text" name="manufacturing" class="form-control">
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
		  			<div class="col-md-3">
		  				<label for="">PAYPAL ACOUNT</label>
		  				<input type="text" name="paypal" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">BANK ACCOUNT 1</label>
		  				<input type="text" name="account" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">BANK NAME</label>
		  				<input type="text" name="bank_name" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">BANK ADDRESS 1</label>
		  				<input type="text" name="bank_address" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">BANK ADDRESS 2</label>
		  				<input type="text" name="bank_address2" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">BANK  COUNTRY</label>
		  				<input type="text" name="bank_country" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">BANK IDENTIFIER</label>
		  				<input type="text" name="bank_identifier" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">BANK ID</label>
		  				<input type="text" name="bank_id" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">ACCOUNT NUMBER</label>
		  				<input type="text" name="bank_number" class="form-control">
		  			</div>
		  		</div>
		  	</div>
		  </div>
		  <div class="tab-pane fade" id="terms" role="tabpanel" aria-labelledby="terms-tab">
		  	<div class="container-fluid">
		  		<div class="row">
		  			<div class="col-md-3">
		  				<label for="">INTERMEDIARY BANK</label><br>
		  				<small>Yes</small>
		  				<input type="radio" name="intermediary_bank">
		  				<small>No</small>
		  				<input type="radio" name="intermediary_bank">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">PAYMENT TERMS</label>
						<select name="payment_terms" id="" class="form-control">
		  				<option value="0">Select Terms</option>
		  					<?php foreach ($terms->result() as $fila): ?>
		  						<option value="<?= $fila->id_terms ?>"><?= $fila->description_terms ?></option>
		  					<?php endforeach ?>
						</select>
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">SKYPE 1</label>
		  				<input type="text" name="skype" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">SKYPE 2</label>
		  				<input type="text" name="skype2" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">BOSS NAME</label>
		  				<input type="text" name="boos_name" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">BOSS EMAIL</label>
		  				<input type="text" name="boos_email" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">BOSS PHONE NUMBER</label>
		  				<input type="text" name="boos_number" class="form-control">
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">INCOTERMS</label>
		  				<select name="incoterms" id="" class="form-control">
		  					<option value="fob">FOB</option>
		  					<option value="cif">CIF</option>
		  					<option value="exw">EXW</option>
		  				</select>
		  			</div>
		  			<div class="col-md-3">
		  				<label for="">TERMS OF PAYMENT OF THE PROVIDER
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
								+
							</button>
		  				</label>
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