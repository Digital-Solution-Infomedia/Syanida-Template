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
                <h4 class="mb-0">Dashboard</h4>
              </div>

              <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">App</li>
                <li class="breadcrumb-item active">
                  <a href="#">Campaign Management</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
        <div class="row">
          <div class="col-12 mt-3">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <nav>
                    <div
                      class="nav nav-tabs font-weight-bold"
                      id="nav-tab"
                      role="tablist"
                    >
                      <a
                        class="nav-item nav-link active"
                        id="nav-add-rules-tab"
                        data-toggle="tab"
                        href="#nav-add-rules"
                        role="tab"
                        aria-controls="nav-add-rules"
                        aria-selected="true"
                        >Add Rules</a
                      >
                      <a
                        class="nav-item nav-link"
                        id="nav-list-rules-tab"
                        data-toggle="tab"
                        href="#nav-list-rules"
                        role="tab"
                        aria-controls="nav-list-rules"
                        aria-selected="false"
                        >List Rules</a
                      >
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div
                      class="tab-pane fade show active"
                      id="nav-add-rules"
                      role="tabpanel"
                      aria-labelledby="nav-add-rules-tab"
                    >
                      <div class="py-3 border-bottom border-primary">
                        <div class="row">
                          <div class="col-12">
                            <form class="needs-validation" novalidate>
                              <div class="form-row">
                                <div class="col-md-6 mb-3">
                                  <label for="validationCustom01"
                                    >Rules Name</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="validationCustom01"
                                    placeholder="Rules Name"
                                    value=""
                                    required
                                  />
                                  <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom02"
                                    >Periode From</label
                                  >
                                  <input
                                    type="date"
                                    class="form-control"
                                    id="dt"
                                    required
                                  />
                                  <div class="valid-feedback">Looks good!</div>
                                </div>

                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom02"
                                    >Periode Until</label
                                  >
                                  <input
                                    type="date"
                                    class="form-control"
                                    id="dt"
                                    required
                                  />
                                  <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustomUsername"
                                    >Cust Segment</label
                                  >
                                  <select
                                    multiple
                                    data-allow-clear="1"
                                    required
                                  >
                                    <option>Segment 1</option>
                                    <option>Segment 2</option>
                                  </select>
                                  <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustomUsername"
                                    >Product</label
                                  >
                                  <select
                                    multiple
                                    data-allow-clear="1"
                                    required
                                  >
                                    <option label="Choose Product">
                                      Choose Product
                                    </option>
                                    <optgroup label="Group A">
                                      <option>A1</option>
                                      <option>A2</option>
                                      <option>A3</option>
                                    </optgroup>
                                    <optgroup label="Group B">
                                      <option>B1</option>
                                      <option>B2</option>
                                      <option>B3</option>
                                    </optgroup>
                                  </select>
                                  <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustomUsername"
                                    >Wording</label
                                  >
                                  <select
                                    multiple
                                    data-allow-clear="1"
                                    required
                                  >
                                    <option label="Choose Wording">
                                      Choose Wording
                                    </option>
                                    <optgroup label="WA">
                                      <option>WA 1</option>
                                      <option>WA 2</option>
                                    </optgroup>
                                    <optgroup label="Email">
                                      <option>Email 1</option>
                                      <option>Email 2</option>
                                    </optgroup>
                                  </select>
                                  <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustomUsername"
                                    >Choose File</label
                                  >
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                                  <div class="invalid-feedback">
                                    Please provide a valid city.
                                  </div>
                                </div>
                              </div>
                              
                              <button class="btn btn-primary float-right" type="submit">
                                Submit form
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="tab-pane fade"
                      id="nav-list-rules"
                      role="tabpanel"
                      aria-labelledby="nav-list-rules-tab"
                    >
                      <div class="py-3 border-bottom border-primary">
                        <div class="table-responsive">
                          <table
                            id="example"
                            class="display table dataTable table-striped table-bordered"
                          >
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Rules Name</th>
                                <th>Periode</th>
                                <th>Cust Segment</th>
                                <th>Product</th>
                                <th>Wording</th>
                                <th>Attachment</th>
                                <th style="width: 10%">Status</th>
                                <th style="width: 5%">Tools</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Rules 1</td>
                                <td>2021-02-28 - 2021-02-30</td>
                                <td>USAGE</td>
                                <td>INDI20MB</td>
                                <td>
                                  <span class="badge p-1 badge-info mb-1"
                                    >WordingTitle</span
                                  >
                                  |
                                  <span class="badge p-1 badge-info mb-1"
                                    >WordingTitle</span
                                  >
                                </td>
                                <td>
                                  <button class="btn btn-primary btn-sm">
                                    Preview
                                  </button>
                                </td>
                                <td>
                                  <input
                                    type="checkbox"
                                    checked
                                    data-toggle="toggle"
                                    data-width="50"
                                    data-size="xs"
                                    data-height="3"
                                  />
                                </td>
                                <td>
                                  <div class="ml-auto my-auto">
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#newcontact"
                                      class="ml-2"
                                      ><i class="icon-pencil"></i
                                    ></a>
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

            <!-- Add Contact -->
            <div class="modal fade" id="newcontact">
              <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">
                      <i class="icon-pencil"></i> Add Contact
                    </h5>
                    <button
                      type="button"
                      class="close"
                      data-dismiss="modal"
                      aria-label="Close"
                    >
                      <i class="icon-close"></i>
                    </button>
                  </div>
                  <form class="add-contact-form">
                    <div class="modal-body">
                      <form class="needs-validation" novalidate>
                        <div class="form-row">
                          <div class="col-md-6 mb-3">
                            <label for="validationCustom01"
                              >Rules Name</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="validationCustom01"
                              placeholder="Rules Name"
                              value=""
                              required
                            />
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="validationCustom02"
                              >Periode From</label
                            >
                            <input
                              type="date"
                              class="form-control"
                              id="dt"
                              required
                            />
                            <div class="valid-feedback">Looks good!</div>
                          </div>

                          <div class="col-md-3 mb-3">
                            <label for="validationCustom02"
                              >Periode Until</label
                            >
                            <input
                              type="date"
                              class="form-control"
                              id="dt"
                              required
                            />
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="validationCustomUsername"
                              >Cust Segment</label
                            >
                            <select
                              multiple
                              data-allow-clear="1"
                              required
                            >
                              <option>Segment 1</option>
                              <option>Segment 2</option>
                            </select>
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="validationCustomUsername"
                              >Product</label
                            >
                            <select
                              multiple
                              data-allow-clear="1"
                              required
                            >
                              <option label="Choose Product">
                                Choose Product
                              </option>
                              <optgroup label="Group A">
                                <option>A1</option>
                                <option>A2</option>
                                <option>A3</option>
                              </optgroup>
                              <optgroup label="Group B">
                                <option>B1</option>
                                <option>B2</option>
                                <option>B3</option>
                              </optgroup>
                            </select>
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="validationCustomUsername"
                              >Wording</label
                            >
                            <select
                              multiple
                              data-allow-clear="1"
                              required
                            >
                              <option label="Choose Wording">
                                Choose Wording
                              </option>
                              <optgroup label="WA">
                                <option>WA 1</option>
                                <option>WA 2</option>
                              </optgroup>
                              <optgroup label="Email">
                                <option>Email 1</option>
                                <option>Email 2</option>
                              </optgroup>
                            </select>
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="validationCustomUsername"
                              >Choose File</label
                            >
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                              <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                              <div class="invalid-feedback">Example invalid custom file feedback</div>
                          </div>
                            <div class="invalid-feedback">
                              Please provide a valid city.
                            </div>
                          </div>
                        </div>
                        
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary add-todo">
                        Add Contact
                      </button>
                    </div>
                  </form>
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
  <script src="<?php echo base_url()?>assets/temp_1/js/select2.script.js"></script>
    <!-- END: Content-->