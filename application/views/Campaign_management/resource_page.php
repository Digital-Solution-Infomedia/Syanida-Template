<!-- START: Template CSS-->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/temp_1/vendors/jquery-ui/jquery-ui.min.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/temp_1/vendors/jquery-ui/jquery-ui.theme.min.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/temp_1/vendors/simple-line-icons/css/simple-line-icons.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/temp_1/vendors/flags-icon/css/flag-icon.min.css" />
<!-- END Template CSS-->

<!-- START: Page CSS-->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/temp_1/vendors/vendors/datatable/css/dataTables.bootstrap4.min.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/temp_1/vendors/datatable/buttons/css/buttons.bootstrap4.min.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/temp_1/vendors/bootstrap4-toggle/css/bootstrap4-toggle.min.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/temp_1/vendors/select2/css/select2.min.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/temp_1/vendors/select2/css/select2-bootstrap.min.css" />

<!-- START: Custom CSS-->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/temp_1/css/main2.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/temp_1/vendors/quill/quill.snow.css" />
<!-- START: Pre Loader-->
<!-- START: Main Content-->
<div class="container-fluid site">
  <!-- START: Breadcrumbs-->
  <div class="row">
    <div class="col-12 align-self-center">
      <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
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
                <a class="nav-item nav-link active" id="nav-product-tab" data-toggle="tab" href="#nav-product" role="tab" aria-controls="nav-product-rules" aria-selected="true">Product</a>
                <a class="nav-item nav-link" id="nav-customer-tab" data-toggle="tab" href="#nav-customer" role="tab" aria-controls="nav-customer-rules" aria-selected="false">Customer</a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-product" role="tabpanel" aria-labelledby="nav-product-tab">
                <div class="py-3">
                  <div class="row">
                    <div class="col-12">
                      <div class="card mb-3">
                        <div class="card-header">
                          <h4 class="card-title">Add Product</h4>
                        </div>
                        <div class="card-body">
                          <form class="needs-validation" action="<?= base_url() ?>Campaign_management/resources/simpan_resource_product" method="POST" novalidate>
                            <div class="form-row">
                              <div class="col-md-5">
                                <div class="row">
                                <input type="hidden" name="id" class="form-control" id="username1" value="<?php if(isset($detail_product)) { echo $detail_product->id; } ?>"/>
                                  <div class="col-md-12 mb-3">
                                    <label for="username1">Code Product</label>
                                    <input type="text" name="code_product" class="form-control" id="username1" placeholder="Code Product" value="<?php if(isset($detail_product)) { echo $detail_product->code_product; } ?>" required/>
                                    <div class="valid-feedback">Looks good!</div>
                                  </div>
                                  <div class="col-md-12 mb-3">
                                    <label for="email1">Name Product</label>
                                    <input type="text" name="name_product" class="form-control" id="email1" placeholder="Name Product" value="<?php if(isset($detail_product)) { echo $detail_product->name_product; } ?>" required/>
                                    <div class="valid-feedback">Looks good!</div>
                                  </div>
                                  <div class="col-md-12 mb-3">
                                    <label for="email1">Price Product</label>
                                    <input type="text" name="price" class="form-control" id="email1" placeholder="price" value="<?php if(isset($detail_product)) { echo $detail_product->price; } ?>" required/>
                                    <div class="valid-feedback">Looks good!</div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-7">
                                <div class="col-md-12 mb-3">
                                  <label for="validationCustom02">Product Desc</label>
                                  <textarea class="form-control " name="product_desc" id="snow-container" cols="30" rows="10" required><?php if(isset($detail_product)) { echo $detail_product->product_desc; } ?></textarea>
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
                                  <th style="width: 5%">Tools</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($products as $product) { ?>
                                  <tr>
                                    <td><?= $product->id ?></td>
                                    <td><?= $product->code_product ?></td>
                                    <td><?= $product->name_product ?></td>
                                    <td><?= $product->price ?></td>
                                    <td><?= $product->name_product ?></td>
                                    <td>
                                        <a href="<?=base_url()?>Campaign_management/resources/get_resource_product/<?=$product->id?>" class="ml-2"><i class="icon-pencil"></i></a>
                                    </td>
                                  </tr>
                                <?php } ?>
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
                                <input type="text" name="id" class="form-control" id="email1" />
                                  <div class="col-md-12 mb-3">
                                    <label for="email1">Kriteria Name</label>
                                    <input type="text" name="kriteria_name" class="form-control" id="email1" placeholder="Kriteria Name" required/>
                                    <div class="valid-feedback">Looks good!</div>
                                  </div>
                                  <div class="col-md-12 mb-3">
                                    <label for="username1">Area</label>
                                    <select multiple data-allow-clear="1" name="area" required>
                                      <option value="Reg 1">Reg 1</option>
                                      <option value="Reg 2">Reg 2</option>
                                      <option value="Reg 3">Reg 3</option>
                                      <option value="Reg 4">Reg 4</option>
                                      <option value="Reg 5">Reg 5</option>
                                      <option value="Reg 6">Reg 6</option>
                                      <option value="Reg 7">Reg 7</option>
                                    </select>
                                  </div>
                                  <div class="col-md-12 mb-3">
                                    <label for="email1">Paket</label>
                                    <select multiple data-allow-clear="1" name="paket" required>
                                      <option value="Pkg 1">Pkg 1</option>
                                      <option value="Pkg 2">Pkg 2</option>
                                      <option value="Pkg 3">Pkg 3</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                  </div>
                                  <div class="col-md-12 mb-3">
                                    <label for="email1">History View Channel</label>
                                    <select multiple data-allow-clear="1" name="history_view_channel" required>
                                      <option value="Most Viewed 1">Most Viewed 1</option>
                                      <option value="Most Viewed 2">Most Viewed 2</option>
                                      <option value="Most Viewed 3">Most Viewed 3</option>
                                      <option value="Most Viewed 4">Most Viewed 4</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-7">
                                <div class="col-md-12 mb-3">
                                  <label for="email1">Subscription</label>
                                  <select multiple data-allow-clear="1" name="subscription" required>
                                    <option value="Sub 1">Sub 1</option>
                                    <option value="Sub 2">Sub 2</option>
                                    <option value="Sub 3">Sub 3</option>
                                    <option value="Sub 4">Sub 4</option>
                                    <option value="Sub 5">Sub 5</option>
                                  </select>
                                  <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-12 mb-3">
                                  <label for="email1">Last Campaign Time</label>
                                  <input type="number" name="last_campaign" class="form-control" id="email1" placeholder="Last Campaign Time" required/>
                                  <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-12 mb-3">
                                  <label for="email1">History Campaign Topic</label>
                                  <select multiple data-allow-clear="1" name="history_campaign_topic" required>
                                    <option value="History 1">History 1</option>
                                    <option value="History 2">History 2</option>
                                    <option value="History 3">History 3</option>
                                    <option value="History 4">History 4</option>
                                  </select>
                                  <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-12 mb-3">
                                  <label for="email1">AddOn Information</label>
                                  <select name="addon_information" required>
                                    <option value="Choose on thing">Choose on thing</option>
                                    <option value="Social Media">Social Media</option>
                                    <option value="147">147</option>
                                    <option value="Aplikasi MyindiHomea">Aplikasi MyindiHome</option>
                                    <option value="Plaza">Plaza</option>
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
                                    <input type="checkbox" checked data-toggle="toggle" data-width="50" data-size="xs" data-height="3" />
                                  </td>
                                  <td>
                                    <div class="ml-auto my-auto">
                                      <a href="#" data-toggle="modal" data-target="#newcontact" class="ml-2"><i class="icon-pencil"></i></a>
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
  <script src="<?php echo base_url() ?>assets/temp_1/vendors/jquery/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url() ?>assets/temp_1/vendors/jquery-ui/jquery-ui.min.js"></script>
  <script src="<?php echo base_url() ?>assets/temp_1/vendors/moment/moment.js"></script>
  <script src="<?php echo base_url() ?>assets/temp_1/vendors/slimscroll/jquery.slimscroll.min.js"></script>
  <!-- END: Template JS-->

  <!-- START: APP JS-->
  <script src="<?php echo base_url() ?>assets/temp_1/js/app.js"></script>
  <!-- END: APP JS-->

  <!-- START: Page Vendor JS-->
  <script src="<?php echo base_url() ?>assets/temp_1/vendors/datatable/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>assets/temp_1/vendors/datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url() ?>assets/temp_1/vendors/datatable/jszip/jszip.min.js"></script>
  <script src="<?php echo base_url() ?>assets/temp_1/vendors/datatable/pdfmake/pdfmake.min.js"></script>
  <script src="<?php echo base_url() ?>assets/temp_1/vendors/datatable/pdfmake/vfs_fonts.js"></script>
  <script src="<?php echo base_url() ?>assets/temp_1/vendors/datatable/buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url() ?>assets/temp_1/vendors/datatable/buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?php echo base_url() ?>assets/temp_1/vendors/datatable/buttons/js/buttons.colVis.min.js"></script>
  <script src="<?php echo base_url() ?>assets/temp_1/vendors/datatable/buttons/js/buttons.flash.min.js"></script>
  <script src="<?php echo base_url() ?>assets/temp_1/vendors/datatable/buttons/js/buttons.html5.min.js"></script>
  <script src="<?php echo base_url() ?>assets/temp_1/vendors/datatable/buttons/js/buttons.print.min.js"></script>

  <!-- END: Page Vendor JS-->

  <!-- START: Page JS-->

  <script src="<?php echo base_url() ?>assets/temp_1/js/datatable.script.js"></script>
  <script src="<?php echo base_url() ?>assets/temp_1/vendors/bootstrap4-toggle/js/bootstrap4-toggle.min.js"></script>
  <script src="<?php echo base_url() ?>assets/temp_1/vendors/select2/js/select2.full.min.js"></script>
  <script src="<?php echo base_url() ?>assets/temp_1/vendors/quill/quill.min.js"></script>
  <script src="<?php echo base_url() ?>assets/temp_1/js/select2.script.js"></script>
  <!-- END: Content-->
  <script>
    // var quill = new Quill('#snow-container', {
    //   theme: 'snow'
    // });
    
  </script>