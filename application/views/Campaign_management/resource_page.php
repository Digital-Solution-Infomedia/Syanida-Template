<!-- START: Template CSS-->
<link rel="stylesheet" href="<?php echo base_url()?>assets/temp_1/vendors/jquery-ui/jquery-ui.min.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/temp_1/vendors/jquery-ui/jquery-ui.theme.min.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/temp_1/vendors/simple-line-icons/css/simple-line-icons.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/temp_1/vendors/flags-icon/css/flag-icon.min.css" />
  <!-- END Template CSS-->

  <!-- START: Page CSS-->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/temp_1/vendors/vendors/datatable/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/temp_1/vendors/datatable/buttons/css/buttons.bootstrap4.min.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/temp_1/vendors/bootstrap4-toggle/css/bootstrap4-toggle.min.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/temp_1/vendors/select2/css/select2.min.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/temp_1/vendors/select2/css/select2-bootstrap.min.css" />

  <!-- START: Custom CSS-->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/temp_1/css/main2.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/temp_1/vendors/quill/quill.snow.css" />
   <!-- START: Pre Loader-->
    <!-- START: Main Content-->
      <div class="container-fluid site">
        <!-- START: Breadcrumbs-->
        <div class="row">
          <div class="col-12 align-self-center">
            <div
              class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded"
            >
              <div class="w-sm-100 mr-auto">
                <h4 class="mb-0">Resources Controller</h4>
              </div>

              <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">App</li>
                <li class="breadcrumb-item active">
                  <a href="#">Resources Controller</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
      <div class="row row-eq-height">
        <div class="col-12 mt-3">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <nav>
                  <div class="nav nav-tabs font-weight-bold" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-product-tab" data-toggle="tab" href="#nav-product"
                      role="tab" aria-controls="nav-product-rules" aria-selected="true">Product</a>
                    <a class="nav-item nav-link" id="nav-customer-tab" data-toggle="tab" href="#nav-customer" role="tab"
                      aria-controls="nav-customer-rules" aria-selected="false">Customer</a>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-product" role="tabpanel"
                    aria-labelledby="nav-product-tab">
                    <div class="py-3">
                      <div class="row">
                        <div class="col-12">
                          <div class="card mb-3">
                            <div class="card-header">
                              <h4 class="card-title">Add Product</h4>
                            </div>
                            <div class="card-body">
                              <form class="needs-validation" novalidate>
                                <div class="form-row">
                                  <div class="col-md-5">
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        <label for="username1">Code Product</label>
                                        <input type="text" class="form-control" id="username1"
                                          placeholder="Code Product" />
                                        <div class="valid-feedback">Looks good!</div>
                                      </div>
                                      <div class="col-md-12 mb-3">
                                        <label for="email1">Name Product</label>
                                        <input type="text" class="form-control" id="email1"
                                          placeholder="Name Product" />
                                        <div class="valid-feedback">Looks good!</div>
                                      </div>
                                      <div class="col-md-12 mb-3">
                                        <label for="email1">Price Product</label>
                                        <input type="text" class="form-control" id="email1" placeholder="price" />
                                        <div class="valid-feedback">Looks good!</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-7">
                                    <div class="col-md-12 mb-3">
                                      <label for="validationCustom02">Product Desc</label>
                                      <textarea class="form-control " name="product_desc" id="snow-container" cols="30"
                                        rows="10"></textarea>
                                      <div class="valid-feedback">Looks good!</div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn btn-primary float-right" type="submit">
                                  Submit form
                                </button>
                              </form>
                            </div>
                          </div>

                          <div class="card">
                            <div class="card-header">
                              <h4 class="card-title">List Product</h4>
                            </div>
                            <div class="card-body">
                              <div class="table-responsive">
                                <table id="example" class="display table dataTable table-striped table-bordered">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Code</th>
                                      <th>Name</th>
                                      <th>Price</th>
                                      <th>Description</th>
                                      <th style="width: 10%">Status</th>
                                      <th style="width: 5%">Tools</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>INDIKIDS10</td>
                                      <td>Indimovie Kids</td>
                                      <td>35.000</td>
                                      <td>Paket Minipack indihome movie kids</td>
                                      <td>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="50"
                                          data-size="xs" data-height="3" />
                                      </td>
                                      <td>
                                        <div class="ml-auto my-auto">
                                          <a href="#" data-toggle="modal" data-target="#newcontact" class="ml-2"><i
                                              class="icon-pencil"></i></a>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="nav-customer" role="tabpanel" aria-labelledby="nav-customer-tab">
                    <div class="py-3">
                      <div class="row">
                        <div class="col-12">
                          <div class="card mb-3">
                            <div class="card-header">
                              <h4 class="card-title">Add Cust Kriteria</h4>
                            </div>
                            <div class="card-body">
                              <form class="needs-validation" novalidate>
                                <div class="form-row">
                                  <div class="col-md-5">
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        <label for="email1">Kriteria Name</label>
                                        <input type="text" class="form-control" id="email1"
                                          placeholder="Kriteria Nmae" />
                                        <div class="valid-feedback">Looks good!</div>
                                      </div>
                                      <div class="col-md-12 mb-3">
                                        <label for="username1">Area</label>
                                        <select multiple data-allow-clear="1" required>
                                          <option>Reg 1</option>
                                          <option>Reg 2</option>
                                          <option>Reg 3</option>
                                          <option>Reg 4</option>
                                          <option>Reg 5</option>
                                          <option>Reg 6</option>
                                          <option>Reg 7</option>
                                        </select>
                                      </div>
                                      <div class="col-md-12 mb-3">
                                        <label for="email1">Paket</label>
                                        <select multiple data-allow-clear="1" required>
                                          <option>Pkg 1</option>
                                          <option>Pkg 2</option>
                                          <option>Pkg 3</option>
                                        </select>
                                        <div class="valid-feedback">Looks good!</div>
                                      </div>
                                      <div class="col-md-12 mb-3">
                                        <label for="email1">History View Channel</label>
                                        <select multiple data-allow-clear="1" required>
                                          <option>Most Viewed 1</option>
                                          <option>Most Viewed 2</option>
                                          <option>Most Viewed 3</option>
                                          <option>Most Viewed 4</option>
                                        </select>
                                        <div class="valid-feedback">Looks good!</div>
                                      </div>

                                    </div>
                                  </div>
                                  <div class="col-md-7">
                                    <div class="col-md-12 mb-3">
                                      <label for="email1">Subscription</label>
                                      <select multiple data-allow-clear="1" required>
                                        <option>Sub 1</option>
                                        <option>Sub 2</option>
                                        <option>Sub 3</option>
                                        <option>Sub 4</option>
                                        <option>Sub 5</option>
                                      </select>
                                      <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="email1">Last Campaign Time</label>
                                      <input type="number" class="form-control" id="email1" placeholder="price" />
                                      <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="email1">History Campaign Topic</label>
                                      <select multiple data-allow-clear="1" required>
                                        <option>History 1</option>
                                        <option>History 2</option>
                                        <option>History 3</option>
                                        <option>History 4</option>
                                      </select>
                                      <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="email1">AddOn Information</label>
                                      <select required>
                                        <option label="Choose on thing">Choose on thing</option>
                                        <option>Social Media</option>
                                        <option>147</option>
                                        <option>Aplikasi MyindiHome</option>
                                        <option>Plaza</option>
                                      </select>
                                      <div class="valid-feedback">Looks good!</div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn btn-primary float-right" type="submit">
                                  Submit form
                                </button>
                              </form>
                            </div>
                          </div>

                          <div class="card">
                            <div class="card-header">
                              <h4 class="card-title">List Cust Kriteria</h4>
                            </div>
                            <div class="card-body">
                              <div class="table-responsive">
                                <table id="example" class="display table dataTable table-striped table-bordered">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Name</th>
                                      <th>Area</th>
                                      <th>Package</th>
                                      <th>History View</th>
                                      <th>Subscription</th>
                                      <th style="width: 5%">Last Campaign</th>
                                      <th>Last Campaign Topic</th>
                                      <th>AddOn Info</th>
                                      <th style="width: 10%">Status</th>
                                      <th style="width: 5%">Tools</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>Lansia</td>
                                      <td>All</td>
                                      <td>INDI10MB</td>
                                      <td>CNN News</td>
                                      <td>SOD via MOSS</td>
                                      <td>3 Days ago</td>
                                      <td>Gimmick 20MB</td>
                                      <td>Social Media</td>
                                      <td>
                                        <input type="checkbox" checked data-toggle="toggle" data-width="50"
                                          data-size="xs" data-height="3" />
                                      </td>
                                      <td>
                                        <div class="ml-auto my-auto">
                                          <a href="#" data-toggle="modal" data-target="#newcontact" class="ml-2"><i
                                              class="icon-pencil"></i></a>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END: Card DATA-->
      </div>
    <!-- END: Content-->

<!-- START: Template JS-->
<script src="<?php echo base_url()?>assets/temp_1/vendors/jquery/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url()?>assets/temp_1/vendors/jquery-ui/jquery-ui.min.js"></script>
  <script src="<?php echo base_url()?>assets/temp_1/vendors/moment/moment.js"></script>
  <script src="<?php echo base_url()?>assets/temp_1/vendors/slimscroll/jquery.slimscroll.min.js"></script>
  <!-- END: Template JS-->
  
  <!-- START: APP JS-->
  <script src="<?php echo base_url()?>assets/temp_1/js/app.js"></script>
  <!-- END: APP JS-->

<!-- START: Page Vendor JS-->
  <script src="<?php echo base_url()?>assets/temp_1/vendors/datatable/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url()?>assets/temp_1/vendors/datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url()?>assets/temp_1/vendors/datatable/jszip/jszip.min.js"></script>
  <script src="<?php echo base_url()?>assets/temp_1/vendors/datatable/pdfmake/pdfmake.min.js"></script>
  <script src="<?php echo base_url()?>assets/temp_1/vendors/datatable/pdfmake/vfs_fonts.js"></script>
  <script src="<?php echo base_url()?>assets/temp_1/vendors/datatable/buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url()?>assets/temp_1/vendors/datatable/buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?php echo base_url()?>assets/temp_1/vendors/datatable/buttons/js/buttons.colVis.min.js"></script>
  <script src="<?php echo base_url()?>assets/temp_1/vendors/datatable/buttons/js/buttons.flash.min.js"></script>
  <script src="<?php echo base_url()?>assets/temp_1/vendors/datatable/buttons/js/buttons.html5.min.js"></script>
  <script src="<?php echo base_url()?>assets/temp_1/vendors/datatable/buttons/js/buttons.print.min.js"></script>

<!-- END: Page Vendor JS-->

  <!-- START: Page JS-->

  <script src="<?php echo base_url()?>assets/temp_1/js/datatable.script.js"></script>
  <script src="<?php echo base_url()?>assets/temp_1/vendors/bootstrap4-toggle/js/bootstrap4-toggle.min.js"></script>
  <script src="<?php echo base_url()?>assets/temp_1/vendors/select2/js/select2.full.min.js"></script>
  <script src="<?php echo base_url()?>assets/temp_1/vendors/quill/quill.min.js"></script>
  <script src="<?php echo base_url()?>assets/temp_1/js/select2.script.js"></script>
    <!-- END: Content-->
    <script>
  var quill = new Quill('#snow-container', {
    theme: 'snow'
  });
</script>