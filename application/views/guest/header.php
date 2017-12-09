<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Code Origin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url('index.php/Home/insertFiled') ?>" name="Duty" method="post">
          <label for="">New Code Origin</label>
          <input type="text" class="form-control" name="filed_name">
          <input type="hidden" name="filed_type" value="code_origin">  
        <button type="submit" class="btn btn-primary" id="save_filed">Save changes</button>            
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Code Origin -->
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Code Destination</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url('index.php/Home/insertFiled') ?>" name="Duty" method="post">
          <label for="">Code Destination</label>
          <input type="text" class="form-control" name="filed_name">
          <input type="hidden" name="filed_type" value="code_destination">  
        <button type="submit" class="btn btn-primary" id="save_filed">Save changes</button>            
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Code Destination -->
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Duty</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url('index.php/Home/insertFiled') ?>" name="Duty" method="post">
          <label for="">Percentage Duty</label>
          <input type="text" class="form-control" name="filed_name">
          <input type="hidden" name="filed_type" value="duty">  
        <button type="submit" class="btn btn-primary" id="save_filed">Save changes</button>            
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Duty -->
<!-- Modal -->
<div class="modal fade" id="category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url('index.php/Category/addCategory') ?>" name="category" method="post">
          <label for="">Name Category</label>
          <input type="text" class="form-control" name="filed_name">
          <input type="hidden" name="filed_type" value="1">  
        <button type="submit" class="btn btn-primary" id="save_filed">Save changes</button>            
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Category -->
<!-- Modal -->
<div class="modal fade" id="sub_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Sub Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url('index.php/Category/addCategory') ?>" name="category" method="post">
          <label for="">Name Sub Category</label>
          <input type="text" class="form-control" name="filed_name">
          <input type="hidden" name="filed_type" value="2">  
        <button type="submit" class="btn btn-primary" id="save_filed">Save changes</button>            
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Sub Category -->
<!-- Modal -->
<div class="modal fade" id="category_web" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category Web</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url('index.php/Category/addCategory') ?>" name="category" method="post">
          <label for="">Name Category Web</label>
          <input type="text" class="form-control" name="filed_name">
          <input type="hidden" name="filed_type" value="3">  
        <button type="submit" class="btn btn-primary" id="save_filed">Save changes</button>            
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Category Web-->
<!-- Modal -->
<div class="modal fade" id="categoryEbay" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category Ebay</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url('index.php/Category/addCategory') ?>" name="category" method="post">
          <label for="">Name Category Ebay</label>
          <input type="text" class="form-control" name="filed_name">
          <input type="hidden" name="filed_type" value="4">  
        <button type="submit" class="btn btn-primary" id="save_filed">Save changes</button>            
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Category Ebay-->
<!-- Modal -->
<div class="modal fade" id="category_walmart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category Walmart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url('index.php/Category/addCategory') ?>" name="category" method="post">
          <label for="">Name Category Walmart</label>
          <input type="text" class="form-control" name="filed_name">
          <input type="hidden" name="filed_type" value="5">  
        <button type="submit" class="btn btn-primary" id="save_filed">Save changes</button>            
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Category Walmart-->
<!-- Modal -->
<div class="modal fade" id="categoryEbay" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category Walmart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url('index.php/Category/addCategory') ?>" name="category" method="post">
          <label for="">Name Category Walmart</label>
          <input type="text" class="form-control" name="filed_name">
          <input type="hidden" name="filed_type" value="5">  
        <button type="submit" class="btn btn-primary" id="save_filed">Save changes</button>            
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Category walmart-->
<!-- Modal -->
<div class="modal fade" id="category_amazon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category Amazon</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url('index.php/Category/addCategory') ?>" name="category" method="post">
          <label for="">Name Category Amazon</label>
          <input type="text" class="form-control" name="filed_name">
          <input type="hidden" name="filed_type" value="6">  
        <button type="submit" class="btn btn-primary" id="save_filed">Save changes</button>            
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Category Amazon-->
<!-- Modal -->
<div class="modal fade" id="sub_category_amazon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Sub Category Amazon</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url('index.php/Category/addCategory') ?>" name="category" method="post">
          <label for="">Add Sub Category Amazon</label>
          <input type="text" class="form-control" name="filed_name">
          <input type="hidden" name="filed_type" value="7">  
        <button type="submit" class="btn btn-primary" id="save_filed">Save changes</button>            
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Category Ebay-->
<!-- Modal -->
<div class="modal fade" id="sub_category_amazon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Sub Category Amazon</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url('index.php/Category/addCategory') ?>" name="category" method="post">
          <label for="">Add Sub Category Amazon</label>
          <input type="text" class="form-control" name="filed_name">
          <input type="hidden" name="filed_type" value="7">  
        <button type="submit" class="btn btn-primary" id="save_filed">Save changes</button>            
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Category Ebay-->
<!-- Modal -->
<div class="modal fade" id="real_color" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Real Color</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url('index.php/Home/insertChart') ?>" name="category" method="post">
          <label for="">Add Real Color</label>
          <input type="text" class="form-control" name="filed_name">
          <input type="hidden" name="filed_type" value="3">  
        <button type="submit" class="btn btn-primary" id="save_filed">Save changes</button>            
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Category Ebay-->
<!-- Modal -->
<div class="modal fade" id="listing_color" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Listing Color</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url('index.php/Home/insertChart') ?>" name="category" method="post">
          <label for="">Add Listing Color</label>
          <input type="text" class="form-control" name="filed_name">
          <input type="hidden" name="filed_type" value="4">  
        <button type="submit" class="btn btn-primary" id="save_filed">Save changes</button>            
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Category Ebay-->
<!-- Modal -->
<div class="modal fade" id="color_map" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Listing Color</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url('index.php/Home/insertChart') ?>" name="category" method="post">
          <label for="">Add Color Map</label>
          <input type="text" class="form-control" name="filed_name">
          <input type="hidden" name="filed_type" value="5">  
        <button type="submit" class="btn btn-primary" id="save_filed">Save changes</button>            
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Category Ebay-->
<!-- Modal -->
<div class="modal fade" id="size" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add SIZE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url('index.php/Home/insertChart') ?>" name="category" method="post">
          <label for="">Add SIZE</label>
          <input type="text" class="form-control" name="filed_name">
          <input type="hidden" name="filed_type" value="6">  
        <button type="submit" class="btn btn-primary" id="save_filed">Save changes</button>            
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Category Ebay-->
<!-- Modal -->
<div class="modal fade" id="size_map" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Size Map</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url('index.php/Home/insertChart') ?>" name="category" method="post">
          <label for="">Add Size Map</label>
          <input type="text" class="form-control" name="filed_name">
          <input type="hidden" name="filed_type" value="7">  
        <button type="submit" class="btn btn-primary" id="save_filed">Save changes</button>            
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Category Ebay-->
<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper ">
            <div class="logo">
                <a href="" class="simple-text">
                    System Admin
                </a>
            </div>

            <nav class="nav flex-column">
              <a class="nav-link active" href="<?php echo base_url('index.php/home/') ?>">Product</a>
              <a class="nav-link" href="<?php echo base_url('index.php/OrderShop/') ?>">Purchase Order</a>
              <a class="nav-link" href="<?php echo base_url('index.php/Provider') ?>">Provider</a>
              <a class="nav-link" href="<?php echo base_url('index.php/Category') ?>">Category</a>
              <a class="nav-link" href="<?php echo base_url('index.php/Shop') ?>">Marketplace</a>
              <a href="<?php echo base_url('index.php/Tools') ?>" class="nav-link">Tools</a>
            </nav>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Bienvenido <?php echo $this->session->userdata('nombre'); ?></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
                                <p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
                                    <p>Notifications</p>
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-settings"></i>
                                <p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>



    
