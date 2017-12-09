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
											<input type="text" name="" id="fsnku" class="form-control">
										</div>
										<div class="col-md-3">
											<label for="">MODEL</label>
											<input type="text" name="model" id="model" class="form-control">
										</div>
										<div class="col-md-3">
											<label for="">BRAND</label>
											<input type="text" name="" id="brand" class="form-control">
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
												<option value="">select code</option>
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
												<option value="">select code</option>
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
												<option value="">select Duty</option>
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
												<option value="">select code</option>
												<?php foreach ($supplier->result() as $fila): ?>
													<option value="<?php echo $fila->id_supplier ?>"><?php echo $fila->name_supplier ?></option>
												<?php endforeach ?>
											</select>
										</div>
										<div class="col-md-3">
											<label for="">MANUFACTURER CODE</label>
											<select name="" id="" class="form-control">
												<option value="">select Code</option>
												<option value=""></option>
											</select>
										</div>
										<div class="col-md-3">
											<label for="">MANUFACTURER NAME</label>
											<select name="" id="" class="form-control">
												<option value="">select Code</option>
												<option value=""></option>
											</select>
										</div>
										<div class="col-md-3">
											<label for="">MANUFACTURER TIME</label>
											<select name="" id="" class="form-control">
												<option value="">select Code</option>
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
												<label for="">Category
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#category">
												  +
												</button>
												</label>
												<select name="category" id="" class="form-control">
													<option value="#">Select Category</option>
												<?php foreach ($category->result() as $fila): ?>
														<?php if ($fila->fk_type_category == 1): ?>
															<option value="<?php echo $fila->fk_type_category ?>"><?php echo $fila->name_category ?></option>
														<?php endif ?>
												<?php endforeach ?>
												</select>
												<br>
											</div>

											<div class="col-3">
												<label for="">Sub Category
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sub_category">
												  +
												</button>
												</label>
												<select name="sub_category" id="" class="form-control">
													<option value="#">Select Category</option>
												<?php foreach ($category->result() as $fila): ?>
														<?php if ($fila->fk_type_category === "2"): ?>
															<option value="<?php echo $fila->fk_type_category ?>"><?php echo $fila->name_category ?></option>
														<?php endif ?>
												<?php endforeach ?>
												</select>
												<br>
											</div>
											<div class="col-3">
												<label for="">Category Web
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#category_web">
												  +
												</button>
												</label>
												<select name="category_web" id="" class="form-control">
												<?php foreach ($category->result() as $fila): ?>
														<?php if ($fila->fk_type_category === "3"): ?>
															<option value="<?php echo $fila->fk_type_category ?>"><?php echo $fila->name_category ?></option>
														<?php endif ?>
												<?php endforeach ?>
												</select>
												<br>
											</div>

											<div class="col-3">
												<label for="">Category Ebay
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#categoryEbay">
												  +
												</button>
												</label>
												<select name="category_ebay" id="" class="form-control">
												<?php foreach ($category->result() as $fila): ?>
														<?php if ($fila->fk_type_category === "4"): ?>
															<option value="<?php echo $fila->fk_type_category ?>"><?php echo $fila->name_category ?></option>
														<?php endif ?>												<?php endforeach ?>
												</select>
												<br>
											</div>

											<div class="col-3">
												<label for="">Category Walmart
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#category_walmart">
												  +
												</button>
												</label>
												<select name="category_walmart" id="" class="form-control">
												<?php foreach ($category->result() as $fila): ?>
														<?php if ($fila->fk_type_category === "5"): ?>
															<option value="<?php echo $fila->fk_type_category ?>"><?php echo $fila->name_category ?></option>
														<?php endif ?>												<?php endforeach ?>
												</select>
												<br>
											</div>

											<div class="col-3">
												<label for="">Category Amazon
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#category_amazon">
												  +
												</button>
												</label>
												<select name="category_amazon" id="" class="form-control">
												<?php foreach ($category->result() as $fila): ?>
														<?php if ($fila->fk_type_category === "6"): ?>
															<option value="<?php echo $fila->fk_type_category ?>"><?php echo $fila->name_category ?></option>
														<?php endif ?>												<?php endforeach ?>
												</select>
												<br>
											</div>

											<div class="col-3">
												<label for="">Sub Categ. Amazon 
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sub_category_amazon">
												  +
												</button>
												</label>
												<select name="sub_amazon" id="" class="form-control">
												<?php foreach ($category->result() as $fila): ?>
														<?php if ($fila->fk_type_category === "7"): ?>
															<option value="<?php echo $fila->fk_type_category ?>"><?php echo $fila->name_category ?></option>
														<?php endif ?>												<?php endforeach ?>
												</select>
												<br>
											</div>

											<div class="col-3">
												<label for="">Refinamiento Amazon</label>
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
											<p>	Table cost y price </p>
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
											<input type="text" name="usa_cost" class="form-control">
										</div>
										<div class="col-md-4">
											<label for="">EU COST</label>
											<input type="text" name="eu_cost" class="form-control">
										</div>
									</div>
									<br>	
									<div class="row">
										<div class="col-md-2">
											<label for="">Percentage 1</label>
											<input type="text" name="percentage_1" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">Percentage 2</label>
											<input type="text" name="percentage_2" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">Percentage 3</label>
											<input type="text" name="percentage_3" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">Percentage 4</label>
											<input type="text" name="percentage_4" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">Percentage 5</label>
											<input type="text" name="percentage_5" class="form-control">
										</div>
									</div>
									<div class="row">
										<div class="col-md-2">
											<label for="">Price 1</label>
											<input type="text" name="price_1" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">Price 2</label>
											<input type="text" name="price_2" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">Price 3</label>
											<input type="text" name="price_3" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">Price 4</label>
											<input type="text" name="price_4" class="form-control">
										</div>
										<div class="col-md-2">
											<label for="">Price 5</label>
											<input type="text" name="price_5" class="form-control">
										</div>
									</div>
							</div>
				  </div>
				 <!-- End of Tab Cost and Price -->
					<div class="tab-pane fade show" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<label for="">80 Characters Title</label>
										<input type="text" name="title_80" class="form-control">
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-12">
										<label for="">200 Characters Title</label>
										<textarea name="title_200" id="" cols="90" rows="10" class="form-control">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum sint autem laborum ipsa quae quia nostrum sit odio. Asperiores molestias, ex provident corporis dicta maiores earum aliquam nobis quod mollitia.</textarea>
									</div>		
								</div>
								<br>
								<div class="row">
									<div class="col-md-12">
										<label for="">2000 Characters description</label>
										<input type="text" name="description_2000" class="form-control">
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-12">
										<label for="">4000 Characters description</label>
										<textarea name="description_4000" id="" cols="90" rows="10" class="form-control">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum sint autem laborum ipsa quae quia nostrum sit odio. Asperiores molestias, ex provident corporis dicta maiores earum aliquam nobis quod mollitia.</textarea>
									</div>		
								</div>
								<br>
								<div class="row">
									<div class="col-md-12">
										<label for="">80 Characters Title html</label>
			   		 					<textarea name="title_80_html" id="editor" class="form-control editor" maxlength="80"></textarea>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-12">
										<label for="">200 Characters Title html</label>
										<textarea name="title_200_html" id="editor" class="form-control editor1" maxlength="80"></textarea>
									</div>		
								</div>	
								<div class="row">
									<div class="col-md-12">
										<label for="">2000 Characters description html</label>
			   		 					<textarea name="description_2000_html" id="editor" class="form-control editor2" maxlength="80"></textarea>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-12">
										<label for="">4000 Characters description html</label>
										<textarea name="description_4000_html" id="editor" class="form-control editor3" maxlength="80"></textarea>
									</div>		
								</div>															
				  	</div>
				 <!-- End Of Tab Description -->
				  	</div>
				  	<div class="tab-pane fade show" id="pills-dimensions" role="tabpanel" aria-labelledby="pills-dimensions-tab">
				  		<div class="container">
				  			<div class="row">
				  				<div class="col-md-3">
				  					<label for="">Length</label>
				  						<input type="text" class="form-control" name="">
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">Height</label>
				  						<input type="text" class="form-control" name="">
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">Width</label>
				  						<input type="text" class="form-control" name="">
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">Unit Of Measure</label>
				  						<input type="text" class="form-control" name="">
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">Weight</label>
				  						<input type="text" class="form-control" name="">
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">Unit Of Measure</label>
				  						<input type="text" class="form-control" name="">
				  					</div>
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
										<option value="#">Select one Option</option>
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
												<?php foreach ($chart->result() as $fila): ?>
														<?php if ($fila->type_chart === "4"): ?>
															<option value="<?php echo $fila->id_chart ?>"><?php echo $fila->name_chart ?></option>
														<?php endif ?>
												<?php endforeach ?>	
										<option value="#">Select one Option</option>
									</select>
				  					</div>
				  				<div class="col-md-3">
				  					<label for="">COLOR MAP
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#color_map">
												  +
												</button>
				  					</label>
									<select name="map_product" id="" class="form-control">
										<option value="#">Select one Option</option>
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
										<option value="#">Select one Option</option>
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
										<option value="#">Select one Option</option>
												<?php foreach ($chart->result() as $fila): ?>
														<?php if ($fila->type_chart === "7"): ?>
															<option value="<?php echo $fila->id_chart ?>"><?php echo $fila->name_chart ?></option>
														<?php endif ?>
												<?php endforeach ?>	
									</select>
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
				  			</div>
				  		</div>
				  	</div>		
				  <!-- End Of Tab Bullet Point -->			 			  	
				  	<div class="tab-pane fade show" id="pills-image" role="tabpanel" aria-labelledby="pills-image-tab">
				  		<div class="container">
				  			<div class="row">	
								<!-- Opcion par arrastrar la ruta completa  o armar por click-->
				  			</div>
				  			<div class="row">
				  				<div class="col-3"><img src="<?php echo base_url('asset/img/faces/') ?>{{img1}}" class="img-fluid" alt=""></div>
				  				<div class="col-3"><img src="<?php echo base_url('asset/img/faces/') ?>{{img2}}" class="img-fluid" alt=""></div>
				  				<div class="col-3"><img src="<?php echo base_url('asset/img/faces/') ?>{{img3}}" class="img-fluid" alt=""></div>
				  				<div class="col-3"><img src="<?php echo base_url('asset/img/faces/') ?>{{img4}}" class="img-fluid" alt=""></div>
				  			</div>
				  			<div class="row">
				  				<div class="col-3">
				  				<label for="">image #1</label>
				  					<input type="text" ng-model="img1" class="form-control">									
				  				</div>	
				  				<div class="col-3">
				  				<label for="">image #</label>
				  					<input type="text" ng-model="img2" class="form-control">									
				  				</div>
				  				<div class="col-3">
				  				<label for="">image #</label>
				  					<input type="text" ng-model="img3" class="form-control">									
				  				</div>	
				  				<div class="col-3">
				  				<label for="">image #</label>
				  					<input type="text" ng-model="img4" class="form-control">									
				  				</div>
				  			</div>
							<div class="row">
				  				<div class="col-3"><img src="<?php echo base_url('asset/img/faces/') ?>{{img5}}" class="img-fluid" alt=""></div>
				  				<div class="col-3"><img src="<?php echo base_url('asset/img/faces/') ?>{{img6}}" class="img-fluid" alt=""></div>
				  				<div class="col-3"><img src="<?php echo base_url('asset/img/faces/') ?>{{img7}}" class="img-fluid" alt=""></div>
				  				<div class="col-3"><img src="<?php echo base_url('asset/img/faces/') ?>{{img8}}" class="img-fluid" alt=""></div>
				  			</div>
				  			<div class="row">
				  				<div class="col-3">
				  				<label for="">image #</label>
				  					<input type="text" ng-model="img5" class="form-control">									
				  				</div>
				  				<div class="col-3">
				  				<label for="">image #</label>
				  					<input type="text" ng-model="img6" class="form-control">									
				  				</div>
				  				<div class="col-3">
				  				<label for="">image #</label>
				  					<input type="text" ng-model="img7" class="form-control">									
				  				</div>
				  				<div class="col-3">
				  				<label for="">image #</label>
				  					<input type="text" ng-model="img8" class="form-control">									
				  				</div>

				  			</div>
				  		</div>
				  	</div>
				  <!-- End Of Tab image Point -->
				  <div class="tab-pane fade show" id="pills-keywords" role="tabpanel" aria-labelledby="pills-keywords-tab">
					<div class="container">
						<div class="row">
						  	<div class="col-md-4">
						  		<label for=""> Keywords 1</label>
						  		<input type="text" class="form-control" name="keyword1">
						  	</div>
						  	<div class="col-md-4">
						  		<label for=""> Keywords 2 </label>
						  		<input type="text" class="form-control" name="keyword2">
						  	</div>
						  	<div class="col-md-4">
						  		<label for=""> Keywords 3 </label>
						  		<input type="text" class="form-control" name="keyword3">
						  	</div>
						  	<div class="col-md-4"> 
						  		<label for=""> Keywords 4 </label>
						  		<input type="text" class="form-control" name="keyword4">
						  	</div>
						  	<div class="col-md-4">
						  		<label for=""> Keywords 5 </label>
						  		<input type="text" class="form-control" name="keyword5">
						  	</div>							
						</div>
					</div>
				  </div>		
				</div>
				<br><br>
				<button class="btn btn-raised btn-primary">Save</button>
			</form>
</div>