<div class="container-fluid" style="margin-top: 50px;" ng-controller="firstCtrl">
			<div class="row">
					<div class="col-3"><b>SKU:</b> {{SKU}}</div>
			</div>
			<small>* Required</small>
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-expanded="true">CODE IDENTIFICATOR</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="pills-category-tab" data-toggle="pill" href="#pills-category" role="tab" aria-controls="pills-category" aria-expanded="true">CATEGORY</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-expanded="true">COST AND PRICE</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-category" aria-expanded="true">DESCRIPTION</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="pills-dimensions-tab" data-toggle="pill" href="#pills-dimensions" role="tab" aria-controls="pills-category" aria-expanded="true">PRODUCT DIMENSIONS</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="pills-chart-tab" data-toggle="pill" href="#pills-chart" role="tab" aria-controls="pills-category" aria-expanded="true">SIZE AND COLOR</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="pills-bullet-tab" data-toggle="pill" href="#pills-bullet" role="tab" aria-controls="pills-category" aria-expanded="true">BULLET POINTS Y WARRANTY</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="pills-image-tab" data-toggle="pill" href="#pills-image" role="tab" aria-controls="pills-image" aria-expanded="true">IMAGES</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="pills-keywords-tab" data-toggle="pill" href="#pills-keywords" role="tab" aria-controls="pills-category" aria-expanded="true">KEYWORDS</a>
				  </li>
			</ul>
			<form action="<?php echo base_url('index.php/Home/saveProduct') ?>" name="add_product" method="post">
				<div class="tab-content" id="pills-tabContent">
				 <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
				  		<div class="container">
									<div class="row">
										<div class="col-md-3">
											<!-- Codigo SKU codigo obligatorio unico y no irrepetible -->
											<label for="">SKU *</label>
											<input type="text" name="sku" ng-model="SKU" id="sku" class="form-control autocomplete">
										</div>
										<div class="col-md-3">
											<label for="">UPC</label>
											<input type="text" name="upc" id="upc" class="form-control autocomplete">
										</div>
										<div class="col-md-3">
											<label for="">UPC_13</label>
											<input type="text" name="upc_13" id="upc_13" class="form-control autocomplete">
										</div>
										<div class="col-md-3">
											<label for="">ASIN</label>
											<input type="text" name="asin" id="asin" class="form-control autocomplete">
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<label for="">FSNKU</label>
											<input type="text" name="fsnku" id="fsnku" class="form-control">
										</div>
										<div class="col-md-3">
											<label for="">MODEL</label>
											<input type="text" name="model" id="model" class="form-control">
										</div>
										<div class="col-md-3">
											<label for="">BRAND</label>
											<input type="text" name="brand" id="brand" class="form-control">
										</div>
										<div class="col-md-3">
											<label for="">BRAND CATEGORY</label>
											<input type="text" name="" class="form-control">
										</div>										
									</div>
									<div class="row">
										<div class="col-md-4">
											<!-- Codigo Aancelario para obtener donde voy a importar cuanto es el impuesto -->
											<label for="">HS CODE ORIGIN 
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
												  +
												</button>
											</label>
											<select name="code_origin" id="" class="form-control">
												<option value="">select </option>
												<?php foreach ($filed->result() as $fila ): ?>
													<?php if ($fila->filed_type == "code_origin"): ?>
														<option value="<?php echo $fila->id_code_product ?>"><?php echo $fila->filed_name ?></option>
													<?php endif ?>
												<?php endforeach ?>												
											</select>
										</div>
										<!-- Codigo Aancelario para obtener donde voy a importar cuanto es el impuesto -->
										<div class="col-md-4">
											<label for="">HS CODE DESTINATION
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
												  +
												</button>
											</label>
											<select name="code_destination" id="" class="form-control">
												<option value="">select</option>
												<?php foreach ($filed->result() as $fila ): ?>
													<?php if ($fila->filed_type === "code_destination"): ?>
														<option value="<?php echo $fila->id_code_product ?>"><?php echo $fila->filed_name  ?></option>
													<?php endif ?>
												<?php endforeach ?>											
											</select>
											<!-- Button trigger modal -->
										</div>
										<div class="col-md-4">
											<label for="">DUTY
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
												  +
												</button>
											</label>
											<select name="duty" id="" class="form-control">
												<option value="">select </option>
												<?php foreach ($filed->result() as $fila ): ?>
													<?php if ($fila->filed_type === "duty"): ?>
														<option value="<?php echo $fila->id_code_product ?>"><?php echo $fila->filed_name ?></option>
													<?php endif ?>
												<?php endforeach ?>	
											</select>
										</div>										
									</div>
									<br><br>
									<div class="row">
										<div class="col-md-3">
											<label for="">SUPPLIER</label>
											<select name="provider" id="" class="form-control">
												<option value="">select </option>
												<?php foreach ($supplier->result() as $fila): ?>
													<option value="<?php echo $fila->id_supplier ?>"><?php echo $fila->name_supplier ?></option>
												<?php endforeach ?>
											</select>
										</div>
										<div class="col-md-3">
											<label for="">MANUFACTURER CODE</label>
											<select name="" id="" class="form-control">
												<option value="">select</option>
												<option value=""></option>
											</select>
										</div>
										<div class="col-md-3">
											<label for="">MANUFACTURER NAME</label>
											<select name="" id="" class="form-control">
												<option value="">select</option>
												<option value=""></option>
											</select>
										</div>
										<div class="col-md-3">
											<label for="">MANUFACTURER TIME</label>
											<select name="" id="" class="form-control">
												<option value="">select</option>
												<option value=""></option>
											</select>
										</div>
									</div>
									<div class="row">
									</div>
				  		</div>
				 </div>
				 <!-- Fin de tab CODE  -->
					<div class="tab-pane fade show" id="pills-category" role="tabpanel" aria-labelledby="pills-category-tab">
							<div class="container">
									<div class="row">
											<div class="col-3">
												<label for="">CATEGORY
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#category">
												  +
												</button>
												</label>
												<select name="category" id="" class="form-control">
													<option value="#">Select</option>
												<?php foreach ($category->result() as $fila): ?>
														<?php if ($fila->fk_type_category == 1): ?>
															<option value="<?php echo $fila->fk_type_category ?>"><?php echo $fila->name_category ?></option>
														<?php endif ?>
												<?php endforeach ?>
												</select>
												<br>
											</div>

											<div class="col-3">
												<label for="">SUB CATEGORY
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sub_category">
												  +
												</button>
												</label>
												<select name="sub_category" id="" class="form-control">
													<option value="#">Select</option>
												<?php foreach ($category->result() as $fila): ?>
														<?php if ($fila->fk_type_category === "2"): ?>
															<option value="<?php echo $fila->fk_type_category ?>"><?php echo $fila->name_category ?></option>
														<?php endif ?>
												<?php endforeach ?>
												</select>
												<br>
											</div>
											<div class="col-3">
												<label for="">CATEGORY WEB
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#category_web">
												  +
												</button>
												</label>
												<select name="category_web" id="" class="form-control">
													<option value="#">Select</option>
												<?php foreach ($category->result() as $fila): ?>
														<?php if ($fila->fk_type_category === "3"): ?>
															<option value="<?php echo $fila->fk_type_category ?>"><?php echo $fila->name_category ?></option>
														<?php endif ?>
												<?php endforeach ?>
												</select>
												<br>
											</div>

											<div class="col-3">
												<label for="">CATEGORY EBAY
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#categoryEbay">
												  +
												</button>
												</label>
												<select name="category_ebay" id="" class="form-control">
													<option value="#">Select</option>
												<?php foreach ($category->result() as $fila): ?>
														<?php if ($fila->fk_type_category === "4"): ?>
															<option value="<?php echo $fila->fk_type_category ?>"><?php echo $fila->name_category ?></option>
														<?php endif ?>												<?php endforeach ?>
												</select>
												<br>
											</div>

											<div class="col-3">
												<label for="">CATEGORY WALMART
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#category_walmart">
												  +
												</button>
												</label>
												<select name="category_walmart" id="" class="form-control">
													<option value="#">Select</option>
												<?php foreach ($category->result() as $fila): ?>
														<?php if ($fila->fk_type_category === "5"): ?>
															<option value="<?php echo $fila->fk_type_category ?>"><?php echo $fila->name_category ?></option>
														<?php endif ?>												<?php endforeach ?>
												</select>
												<br>
											</div>

											<div class="col-3">
												<label for="">CATEGORY AMAZON
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#category_amazon">
												  +
												</button>
												</label>
												<select name="category_amazon" id="" class="form-control">
													<option value="#">Select</option>
												<?php foreach ($category->result() as $fila): ?>
														<?php if ($fila->fk_type_category === "6"): ?>
															<option value="<?php echo $fila->fk_type_category ?>"><?php echo $fila->name_category ?></option>
														<?php endif ?>												<?php endforeach ?>
												</select>
												<br>
											</div>

											<div class="col-3">
												<label for="">SUB CATEG. AMAZON 
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sub_category_amazon">
												  +
												</button>
												</label>
												<select name="sub_amazon" id="" class="form-control">
													<option value="#">Select</option>
												<?php foreach ($category->result() as $fila): ?>
														<?php if ($fila->fk_type_category === "7"): ?>
															<option value="<?php echo $fila->fk_type_category ?>"><?php echo $fila->name_category ?></option>
														<?php endif ?>												<?php endforeach ?>
												</select>
												<br>
											</div>

											<div class="col-3">
												<label for="">REFINAMIENTO AMAZON</label>
												<input type="text" name="refinamiento" class="form-control">
											</div>
									</div>
							</div>
				  </div>
				 <!-- End of tab Category -->				 
					<div class="tab-pane fade show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
							<div class="container">
									<div class="row">
										<div class="col-md-12">
											<p>	TABLE COST Y PRICE </p>
										</div>
										<div class="col-md-12">		
										</div>
										<div class="col-md-4">
											<!-- Codigo SKU codigo obligatorio unico y no irrepetible -->
											<label for="">ORIGIN COST </label>
											<input type="text" name="origin_cost" class="form-control">
										</div>
										<div class="col-md-4">
											<label for="">USA COST</label>
											<input type="text" name="usa_cost" ng-model="cost_usa" class="form-control">
										</div>
										<div class="col-md-4">
											<label for="">EU COST</label>
											<input type="text" name="eu_cost" ng-model="cost_eu" class="form-control">
										</div>
									</div>
									<br>	
									<div class="row">
										<h4>COST AND PRICE USA</h4>
									</div>
									<div class="row">
										<div class="col-md-2">
											<label for="">PERCENTAGE 1</label>
											<input type="text" name="percentage_1" ng-model="percentage_1" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">PERCENTAGE 2</label>
											<input type="text" name="percentage_2" ng-model="percentage_2" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">PERCENTAGE 3</label>
											<input type="text" name="percentage_3" ng-model="percentage_3" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">PERCENTAGE 4</label>
											<input type="text" name="percentage_4" ng-model="percentage_4" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">PERCENTAGE 5</label>
											<input type="text" name="percentage_5" ng-model="percentage_5" class="form-control">
										</div>
									</div>
									<div class="row">
										<div class="col-md-2">
											<label for="">PRICE 1</label>
											<input type="text" name="price_1" value="{{ percentage_1 / 100 * cost_usa  | currency}}" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">PRICE 2</label>
											<input type="text" name="price_2" value="{{ percentage_2 / 100 * cost_usa  | currency}}" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">PRICE 3</label>
											<input type="text" name="price_3" value="{{ percentage_3 / 100 * cost_usa  | currency}}" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">PRICE 4</label>
											<input type="text" name="price_4" value="{{ percentage_4 / 100 * cost_usa  | currency}}" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">PRICE 5</label>
											<input type="text" name="price_5" value="{{ percentage_5 / 100 * cost_usa | currency}}" class="form-control">
										</div>
									</div>
<!-- Bloques de codigo EU -->
									<div class="row">
										<h4>Cost and Price Eu</h4>
									</div>
									<div class="row">
										<div class="col-md-2">
											<label for="">PERCENTAGE 1</label>
											<input type="text" name="percentage_1" ng-model="percentage_1_eu" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">PERCENTAGE 2</label>
											<input type="text" name="percentage_2" ng-model="percentage_2_eu" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">PERCENTAGE 3</label>
											<input type="text" name="percentage_3" ng-model="percentage_3_eu" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">PERCENTAGE 4</label>
											<input type="text" name="percentage_4" ng-model="percentage_4_eu" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">PERCENTAGE 5</label>
											<input type="text" name="percentage_5" ng-model="percentage_5_eu" class="form-control">
										</div>
									</div>
									<div class="row">
										<div class="col-md-2">
											<label for="">PRICE 1</label>
											<input type="text" name="price_1" value="{{percentage_1_eu / 100 * cost_eu | currency: '€'}}" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">PRICE 2</label>
											<input type="text" name="price_2" value="{{percentage_2_eu / 100 * cost_eu | currency: '€'}}" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">PRICE 3</label>
											<input type="text" name="price_3" value="{{percentage_3_eu / 100 * cost_eu | currency: '€'}}" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">PRICE 4</label>
											<input type="text" name="price_4" value="{{percentage_4_eu / 100 * cost_eu | currency: '€'}}" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">PRICE 5</label>
											<input type="text" name="price_5" value="{{percentage_5_eu / 100 * cost_eu | currency: '€'}}" class="form-control">
										</div>
									</div>
<!-- Cierre de codigos para EU -->
							</div>
				  </div>
				 <!-- End of Tab Cost and Price -->
					<div class="tab-pane fade show" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<label for="">80 CHARACTERS TITLE</label>
										<input type="text" name="title_80" class="form-control">
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-12">
										<label for="">200 CHARACTERS TITLE</label>
										<textarea name="title_200" id="" cols="90" rows="10" class="form-control"></textarea>
									</div>		
								</div>
								<br>
								<div class="row">
									<div class="col-md-12">
										<label for="">2000 CHARACTERS DESCRIPTION</label>
										<input type="text" name="description_2000" class="form-control">
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-12">
										<label for="">4000 CHARACTERS DESCRIPTION</label>
										<textarea name="description_4000" id="" cols="90" rows="10" class="form-control"></textarea>
									</div>		
								</div>
								<br>
								<div class="row">
									<div class="col-md-12">
										<label for="">80 CHARACTERS TITLE HTML</label>
			   		 					<textarea name="title_80_html" id="editor" class="form-control editor" maxlength="80"></textarea>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-12">
										<label for="">200 CHARACTERS TITLE HTML</label>
										<textarea name="title_200_html" id="editor" class="form-control editor1" maxlength="80"></textarea>
									</div>		
								</div>	
								<div class="row">
									<div class="col-md-12">
										<label for="">2000 CHARACTERS DESCRIPTION HTML</label>
			   		 					<textarea name="description_2000_html" id="editor" class="form-control editor2" maxlength="80"></textarea>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-12">
										<label for="">4000 CHARACTERS DESCRIPTION HTML</label>
										<textarea name="description_4000_html" id="editor" class="form-control editor3" maxlength="80"></textarea>
									</div>		
								</div>															
				  	</div>
				 <!-- End Of Tab Description -->
				  	</div>
				  	<div class="tab-pane fade show" id="pills-dimensions" role="tabpanel" aria-labelledby="pills-dimensions-tab">
				  		<div class="container">
						<div class="fondo" style=" padding: 20px">
					  		<div class="row">
					  			<div class="col-md-4">
					  				<h5 class="text-center">INDIVIDUAL PRODUCT DIMENSION</h5>
					  				<p class="text-center"> METRIC SYSTEM</p>
					  			</div>
					  		</div>
				  		<!-- Sistema de medidas Comunes -->
				  			<div class="row">
				  				<div class="col-md-3">
				  					<label for="">LENGTH</label>
				  						<input type="text" id="lg" class="form-control" name="" >
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">HEIGHT</label>
				  						<input type="text" id="a" class="form-control" name="" >
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">WIDTH</label>
				  						<input type="text" id="an" class="form-control" name="">
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">LENGTH UNIT OF MEASURE</label>
				  						<select name="" id="valor" class="form-control modelo">
				  							<option value="m">M</option>
				  							<option value="cm">CM</option>
				  							<option value="mm">MM</option>
				  						</select>
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">WEIGHT</label>
				  						<input type="text" class="form-control" name="">
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">WEIGHT UNIT OF MEASURE</label>
				  					<select name="" id="" ng-model="peso" class="form-control">
				  							<option value="GR">GR</option>
				  							<option value="KG">KG</option>		  						
				  					</select>
				  				</div>
				  			</div>
				  			<!-- Funciones para medidas imperiales -->
					  		<div class="row">
					  			<div class="col-md-4">
					  				<p class="text-center"> IMPERIAL SYSTEM</p>
					  			</div>
					  		</div>
				  			<div class="row">
				  				<div class="col-md-3">
				  					<label for="">LENGTH</label>
				  						<input type="text" class="form-control" id="lg_v" name="">
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">HEIGHT</label>
				  						<input type="text" class="form-control" id="a_v" name="">
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">WIDTH</label>
				  						<input type="text" class="form-control" id="an_v" name="">
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">LENGTH UNIT OF MEASURE</label>
				  						<select name="" id="imp" class="form-control modelo">
				  							<option value="in">In</option>
				  							<option value="ft">Ft</option>
				  						</select>
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">WEIGHT</label>
				  						<input type="text" class="form-control" name="">
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">WEIGHT UNIT OF MEASURE</label>
				  					<select name="" id="" class="form-control">
				  							<option value="GR">GR</option>
				  							<option value="KG">KG</option>		  						
				  					</select>
				  				</div>
				  			</div>
						</div>
							<!--  Imperial Sistema -->
				  			<div>
				  				<hr>
				  			</div>
				  			<h5>INDIVIDUAL PRODUCT PACKING DIMENSION</h5>
				  			<div class="row">
				  				
				  				<div class="col-md-3">
				  					<label for="">LENGTH</label>
				  						<input type="text" class="form-control" name="">
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">HEIGHT</label>
				  						<input type="text" class="form-control" name="">
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">WIDTH</label>
				  						<input type="text" class="form-control" name="">
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">UNIT OF MEASURE</label>
				  						<input type="text" class="form-control" name="">
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">WEIGHT</label>
				  						<input type="text" class="form-control" name="">
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">UNIT OF MEASURE</label>
				  						<input type="text" class="form-control" disabled="">
				  					</div>
				  			</div>
				  			<div>
				  				<hr>
				  			</div>
				  			<h5>MASTER CARTON DIMENSION</h5>
				  			<div class="row">
				  				<div class="col-md-3">
				  					<label for="">LENGTH</label>
				  						<input type="text" class="form-control" name="">
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">HEIGHT</label>
				  						<input type="text" class="form-control" name="">
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">WIDTH</label>
				  						<input type="text" class="form-control" name="">
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">UNIT OF MEASURE</label>
				  						<input type="text" class="form-control" name="">
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">WEIGHT</label>
				  						<input type="text" class="form-control" name="">
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">UNIT OF MEASURE</label>
				  						<input type="text" class="form-control" name="CM" disabled="">
				  					</div>
				  			</div>
				  			<div>
				  				<hr>
				  			</div>
				  		</div>
				  	</div>
				 <!-- End Of Tab Dimensions -->
				  	<div class="tab-pane fade show" id="pills-chart" role="tabpanel" aria-labelledby="pills-chart-tab">
				  		<div class="container">
				  			<div class="row">
				  				<div class="col-md-3">
				  					<label for="">REAL COLOR
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#real_color">
												  +
												</button>
				  					</label>
									<select name="real" id="" class="form-control">
										<option value="#">Select</option>
												<?php foreach ($chart->result() as $fila): ?>
														<?php if ($fila->type_chart === "3"): ?>
															<option value="<?php echo $fila->id_chart ?>"><?php echo $fila->name_chart ?></option>
														<?php endif ?>
												<?php endforeach ?>										
									</select>	
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">LISTING COLOR
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#listing_color">
												  +
												</button>
				  					</label>
									<select name="listing" id="" class="form-control">
											<option value="#">Select</option>
												<?php foreach ($chart->result() as $fila): ?>
														<?php if ($fila->type_chart === "4"): ?>
															<option value="<?php echo $fila->id_chart ?>"><?php echo $fila->name_chart ?></option>
														<?php endif ?>
												<?php endforeach ?>	
									</select>
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">COLOR MAP
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#color_map">
												  +
												</button>
				  					</label>
									<select name="map_product" id="" class="form-control">
											<option value="#">Select</option>
												<?php foreach ($chart->result() as $fila): ?>
														<?php if ($fila->type_chart === "5"): ?>
															<option value="<?php echo $fila->id_chart ?>"><?php echo $fila->name_chart ?></option>
														<?php endif ?>
												<?php endforeach ?>	
									</select>
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">SIZE
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#size">
												  +
												</button>
				  					</label>
									<select name="size_product" id="" class="form-control">
										<option value="#">Select</option>
												<?php foreach ($chart->result() as $fila): ?>
														<?php if ($fila->type_chart === "6"): ?>
															<option value="<?php echo $fila->id_chart ?>"><?php echo $fila->name_chart ?></option>
														<?php endif ?>
												<?php endforeach ?>	
									</select>
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">SIZE MAP
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#size_map">
												  +
												</button>
				  					</label>
									<select name="size_map" id="" class="form-control">
										<option value="#">Select</option>
												<?php foreach ($chart->result() as $fila): ?>
														<?php if ($fila->type_chart === "7"): ?>
															<option value="<?php echo $fila->id_chart ?>"><?php echo $fila->name_chart ?></option>
														<?php endif ?>
												<?php endforeach ?>	
									</select>
				  				</div>
				  				<div class="col-md-3">
				  					<label for="">PARENT PRODUCT</label>	
				  					<input type="checkbox">
				  				</div>
				  				<div class="col-md-3">
				  					<label for="">SKU PARENT</label>	
				  					<input type="text" name="parent">
				  				</div>
				  			</div>
				  		</div>
				  	</div>	
				  <!-- End Of tab Chart -->
				  	<div class="tab-pane fade show" id="pills-bullet" role="tabpanel" aria-labelledby="pills-bullet-tab">
				  		<div class="container">
				  			<div class="row">
				  				<div class="col-md-4">
				  					<label for="">BULLET POINT 1</label>
				  						<input type="text" class="form-control" name="bullet1">
				  					</div>
				  				<div class="col-md-4">
				  					<label for="">BULLET POINT 2</label>
				  						<input type="text" class="form-control" name="bullet2">
				  					</div>
				  				<div class="col-md-4">
				  					<label for="">BULLET POINT 3</label>
				  						<input type="text" class="form-control" name="bullet3">
				  					</div>
				  				<div class="col-md-4">
				  					<label for="">BULLET POINT 4</label>
				  						<input type="text" class="form-control" name="bullet4">
				  					</div>
				  				<div class="col-md-4">
				  					<label for="">BULLET POINT 5</label>
				  						<input type="text" class="form-control" name="bullet5">
				  					</div>
				  				<div class="col-md-4">
				  					<label for="">Warranty 1</label>
				  						<input type="text" class="form-control" name="warranty1">
				  					</div>
				  				<div class="col-md-4">
				  					<label for="">Warranty 2</label>
				  						<input type="text" class="form-control" name="warranty2">
				  					</div>
				  				<div class="col-md-4">
				  					<label for="">BULLET POINT 1 HTML</label>
				  						<input type="text" class="form-control bullet1" name="bullet1_html">
				  					</div>
				  				<div class="col-md-4">
				  					<label for="">BULLET POINT 2 HTML</label>
				  						<input type="text" class="form-control bullet2" name="bullet2_html">
				  					</div>
				  				<div class="col-md-4">
				  					<label for="">BULLET POINT 3 HTML</label>
				  						<input type="text" class="form-control bullet3" name="bullet3_html">
				  					</div>
				  				<div class="col-md-4">
				  					<label for="">BULLET POINT 4 HTML</label>
				  						<input type="text" class="form-control bullet4" name="bullet4_html">
				  					</div>
				  				<div class="col-md-4">
				  					<label for="">BULLET POINT 5 HTML</label>
				  						<input type="text" class="form-control bullet5" name="bullet5_html">
				  					</div>
				  				<div class="col-md-4">
				  					<label for="">Warranty 2</label>
				  						<input type="text" class="form-control" name="warranty2_html">
				  					</div>
				  			</div>
				  		</div>
				  	</div>		
				  <!-- End Of Tab Bullet Point -->			 			  	
				  	<div class="tab-pane fade show" id="pills-image" role="tabpanel" aria-labelledby="pills-image-tab">
				  		<div class="container">
				  			<div class="row">	
								<!-- Opcion par arrastrar la ruta completa  o armar por click-->
								<div class="col-md-12">
									<p>RUTA PRINCIPAL</p>
									<input type="text" name="" class="form-control" ng-model="ruta">
								</div>
				  			</div>
				  			<div class="row">
				  				<div class="col-3"><img src="<?php //echo base_url('asset/img/faces/') ?>{{ruta}}{{img1}}" class="img-fluid" alt=""></div>
				  				<div class="col-3"><img src="<?php //echo base_url('asset/img/faces/') ?>{{ruta}}{{img2}}" class="img-fluid" alt=""></div>
				  				<div class="col-3"><img src="<?php //echo base_url('asset/img/faces/') ?>{{ruta}}{{img3}}" class="img-fluid" alt=""></div>
				  				<div class="col-3"><img src="<?php //echo base_url('asset/img/faces/') ?>{{ruta}}{{img4}}" class="img-fluid" alt=""></div>
				  			</div>
				  			<div class="row">
				  				<div class="col-3">
				  				<label for="">IMAGE #1</label>
				  					<input type="text" ng-model="img1" class="form-control">									
				  				</div>	
				  				<div class="col-3">
				  				<label for="">IMAGE #2</label>
				  					<input type="text" ng-model="img2" class="form-control">									
				  				</div>
				  				<div class="col-3">
				  				<label for="">IMAGE #3</label>
				  					<input type="text" ng-model="img3" class="form-control">									
				  				</div>	
				  				<div class="col-3">
				  				<label for="">IMAGE #4</label>
				  					<input type="text" ng-model="img4" class="form-control">									
				  				</div>
				  			</div>
							<div class="row">
				  				<div class="col-3"><img src="<?php //echo base_url('asset/img/faces/') ?>{{ruta}}{{img5}}" class="img-fluid" alt=""></div>
				  				<div class="col-3"><img src="<?php //echo base_url('asset/img/faces/') ?>{{ruta}}{{img6}}" class="img-fluid" alt=""></div>
				  				<div class="col-3"><img src="<?php //echo base_url('asset/img/faces/') ?>{{ruta}}{{img7}}" class="img-fluid" alt=""></div>
				  				<div class="col-3"><img src="<?php// echo base_url('asset/img/faces/') ?>{{ruta}}{{img8}}" class="img-fluid" alt=""></div>
				  			</div>
				  			<div class="row">
				  				<div class="col-3">
				  				<label for="">IMAGE #5</label>
				  					<input type="text" ng-model="img5" class="form-control">									
				  				</div>
				  				<div class="col-3">
				  				<label for="">IMAGE #6</label>
				  					<input type="text" ng-model="img6" class="form-control">									
				  				</div>
				  				<div class="col-3">
				  				<label for="">IMAGE #7</label>
				  					<input type="text" ng-model="img7" class="form-control">									
				  				</div>
				  				<div class="col-3">
				  				<label for="">IMAGE #8</label>
				  					<input type="text" ng-model="img8" class="form-control">									
				  				</div>
				  			</div>
				  			<div class="row">
				  				<div class="col-3"><img src="<?php echo base_url('asset/img/faces/') ?>{{Swatch}}" class="img-fluid" alt=""></div>
				  			</div>
				  			<div class="row">
				  				<div class="col-3">
				  				<label for="">SWATCH</label>
				  					<input type="text" ng-model="Swatch" class="form-control">									
				  				</div>				  				
				  			</div>
				  		</div>
				  	</div>
				  <!-- End Of Tab image Point -->
				  <div class="tab-pane fade show" id="pills-keywords" role="tabpanel" aria-labelledby="pills-keywords-tab">
					<div class="container">
						<div class="row">
						  	<div class="col-md-4">
						  		<label for=""> KEYWORDS 1</label>
						  		<input type="text" class="form-control" name="keyword1">
						  	</div>
						  	<div class="col-md-4">
						  		<label for=""> KEYWORDS 2 </label>
						  		<input type="text" class="form-control" name="keyword2">
						  	</div>
						  	<div class="col-md-4">
						  		<label for=""> KEYWORDS 3 </label>
						  		<input type="text" class="form-control" name="keyword3">
						  	</div>
						  	<div class="col-md-4"> 
						  		<label for=""> KEYWORDS 4 </label>
						  		<input type="text" class="form-control" name="keyword4">
						  	</div>
						  	<div class="col-md-4">
						  		<label for=""> KEYWORDS 5 </label>
						  		<input type="text" class="form-control" name="keyword5">
						  	</div>							
						</div>
					</div>
				  </div>		
				<br><br>
				<button class="btn btn-raised btn-primary">Save</button>
			</form>
</div>