  <!-- START: Template CSS-->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/new_theme/dist/vendors/jquery-ui/jquery-ui.min.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/new_theme/dist/vendors/jquery-ui/jquery-ui.theme.min.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/new_theme/dist/vendors/simple-line-icons/css/simple-line-icons.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/new_theme/dist/vendors/flags-icon/css/flag-icon.min.css" />
  <!-- END Template CSS-->

  <!-- START: Custom CSS-->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/new_theme/dist/css/main2.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/new_theme/dist/vendors/bootstrap4-toggle/css/bootstrap4-toggle.min.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/new_theme/dist/vendors/quill/quill.snow.css" />
   <!-- START: Pre Loader-->
    
    <!-- END: Pre Loader-->
      <div class="container-fluid site-width">
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
          <div class="col-12 col-lg-2 mt-3 todo-menu-bar flip-menu pr-lg-0">
            <a href="#" class="d-inline-block d-lg-none mt-1 flip-menu-close"
              ><i class="icon-close"></i
            ></a>
            <div class="card border h-100 document-menu-section">
              <div
                class="card-header d-flex justify-content-between align-items-center"
              >
                <a
                  href="#"
                  class="bg-primary w-100 d-block py-2 px-2 rounded text-white"
                  data-toggle="modal"
                  data-target="#composeemail"
                >
                  <i class="icon-plus align-middle text-white"></i>
                  <span>Add New Rules</span>
                </a>

                <!-- Compose Email -->
                <div class="modal fade" id="composeemail">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">
                          <i class="icon-pencil"></i> New Rules
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

                      <div class="modal-body">
                        <nav>
                          <div
                            class="nav nav-tabs font-weight-bold border-bottom"
                            id="nav-tab"
                            role="tablist"
                          >
                            <a
                              class="nav-item nav-link active"
                              id="nav-home-tab"
                              data-toggle="tab"
                              href="#nav-Products"
                              role="tab"
                              aria-controls="nav-Products"
                              aria-selected="true"
                              >Products</a
                            >
                            <a
                              class="nav-item nav-link"
                              id="nav-profile-tab"
                              data-toggle="tab"
                              href="#nav-Customers"
                              role="tab"
                              aria-controls="nav-Customers"
                              aria-selected="false"
                              >Customers</a
                            >
                            <a
                              class="nav-item nav-link"
                              id="nav-contact-tab"
                              data-toggle="tab"
                              href="#nav-Wordings"
                              role="tab"
                              aria-controls="nav-Wordings"
                              aria-selected="false"
                              >Wordings</a
                            >
                          </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                          <div
                            class="tab-pane fade show active"
                            id="nav-Products"
                            role="tabpanel"
                            aria-labelledby="nav-Products-tab"
                          >
                            <div class="py-3 border-bottom border-primary">
                              <form action="" method="post">
                                <div class="form-group">
                                  <label for="username1">Code Product</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="username1"
                                    placeholder="Code Product"
                                  />
                                </div>
                                <div class="form-group">
                                  <label for="email1">Name Product</label>
                                  <input
                                    type="email"
                                    class="form-control"
                                    id="email1"
                                    placeholder="Name Product"
                                  />
                                </div>

                                <div class="form-group">
                                  <!-- disini load snow container quill textarea -->
                                  <label for="inputState">Product Detail</label>
                                  <div id="snow-container" class="height-175"></div>
                                </div>

                                <button
                                type="submit"
                                class="btn btn-primary send-email btn-block"
                              >
                                Submit
                              </button>
                              </form>
                            </div>
                          </div>
                          <div
                            class="tab-pane fade"
                            id="nav-Customers"
                            role="tabpanel"
                            aria-labelledby="nav-Customers-tab"
                          >
                            <div class="py-3 border-bottom border-primary">
                              <form action="" method="post">
                                <div class="form-group">
                                  <label for="username1">Customer Segment</label>
                                  <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>Usage</option>
                                    <option>Package</option>
                                  </select>
                                </div>
      
                                <div class="form-group">
                                  <!-- disini load snow container quill textarea -->
                                  <label for="inputState">Customer Segment Detail</label>
                                  <div id="snow-container" class="height-175"></div>
                                </div>
      
                                <div class="form-group">
                                  <label for="inputState">Witel</label>
                                  <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>Jakarta Pusat</option>
                                    <option>Jakarta Barat</option>
                                    <option>Jakarta Timur</option>
                                  </select>
                                </div>
      
                                <div class="form-group">
                                  <label for="email1">Cust Age</label>
                                  <input
                                    type="email"
                                    class="form-control"
                                    id="email1"
                                    placeholder="24"
                                  />
                                </div>

                                <button
                                type="submit"
                                class="btn btn-primary send-email btn-block"
                              >
                                Submit
                              </button>
                              </form>
                            </div>
                          </div>
                          <div
                            class="tab-pane fade"
                            id="nav-Wordings"
                            role="tabpanel"
                            aria-labelledby="nav-Wordings-tab"
                          >
                            <div class="py-3 border-bottom border-primary">
                              <form action="" method="post">
                                <div class="form-group">
                                  <label for="username1">Wording Title</label>
                                  <input
                                    type="email"
                                    class="form-control"
                                    id="email1"
                                    placeholder="Wording Title"
                                  />
                                </div>
      
                                <div class="form-group">
                                  <!-- disini load snow container quill textarea -->
                                  <label for="inputState">Wording Desc</label>
                                  <div id="snow-container" class="height-175"></div>
                                </div>
      
                                <div class="form-group">
                                  <label for="inputState">Wording Channel</label>
                                  <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>WA</option>
                                    <option>Email</option>
                                    <option>SMS</option>
                                  </select>
                                </div>

                        <button
                        type="submit"
                        class="btn btn-primary send-email btn-block"
                      >
                        Submit
                      </button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <ul class="nav flex-column document-menu">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    href="#"
                    data-documenttype="document"
                  >
                    All
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-documenttype="product">
                    Products
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-documenttype="customer">
                    Customers
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-documenttype="wording">
                    Wording
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-lg-10 mt-3 pl-lg-0">
            <div class="card border h-100 document-list-section">
              <div class="card-header border-bottom p-1 d-flex">
                <a href="#" class="d-inline-block d-lg-none flip-menu-toggle"
                  ><i class="icon-menu"></i
                ></a>
                <input
                  type="text"
                  class="form-control border-0 p-2 w-100 h-100 document-search"
                  placeholder="Search ..."
                />
              </div>
              <div class="card-body p-0">
                <div class="documents list">
                  <div class="document product">
                    <div class="document-content">
                      <div class="document-profile">
                        <div class="document-info">
                          <p class="document-name mb-0">KodeProduct1</p>
                        </div>
                      </div>
                      <div class="document-email">
                        <p class="mb-0 small">ProductName:</p>
                        <p class="user-email">INDI20MB</p>
                      </div>

                      <div class="document-phone">
                        <p class="mb-0 small">ProductDesc:</p>
                        <p class="user-phone">Paket 20MB</p>
                      </div>
                      <div class="line-h-1 h5">
                        <a
                          class="text-success edit-document"
                          href="#"
                          data-toggle="modal"
                          data-target="#"
                          ><i class="icon-pencil"></i
                        ></a>
                        <input
                          type="checkbox"
                          checked
                          data-toggle="toggle"
                          data-size="xs"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="document wording">
                    <div class="document-content">
                      <div class="document-profile">
                        <div class="document-info">
                          <p class="mb-0 small">WordingTitle</p>
                          <p class="user-email">
                            Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit. Aspernatur, quo. Deleniti quos sit
                            reprehenderit expedita molestiae. Hic ipsa quisquam
                            cumque sed, sequi consectetur tempore inventore
                            similique harum facere vitae. Omnis!
                          </p>
                        </div>
                      </div>

                      <div class="document-phone">
                        <p class="mb-0 small">Channel:</p>
                        <p class="user-phone">WA</p>
                      </div>
                      <div class="line-h-1 h5">
                        <a
                          class="text-success edit-document"
                          href="#"
                          data-toggle="modal"
                          data-target="#"
                          ><i class="icon-pencil"></i
                        ></a>
                        <input
                          type="checkbox"
                          checked
                          data-toggle="toggle"
                          data-size="xs"
                        />
                      </div>
                    </div>
                  </div>

                  <div class="document customer">
                    <div class="document-content">
                      <div class="document-profile">
                        <div class="document-info">
                          <p class="mb-0 small">Usage</p>
                          <p class="user-email">
                            Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit. Aspernatur, quo. Deleniti quos sit
                            reprehenderit expedita molestiae. Hic ipsa quisquam
                            cumque sed, sequi consectetur tempore inventore
                            similique harum facere vitae. Omnis!
                          </p>
                        </div>
                      </div>
                      <div class="document-email">
                        <p class="mb-0 small">Witel:</p>
                        <p class="user-email">Jakarta Pusat</p>
                      </div>

                      <div class="document-phone">
                        <p class="mb-0 small">Age:</p>
                        <p class="user-phone">29th</p>
                      </div>
                      <div class="line-h-1 h5">
                        <a
                          class="text-success edit-document"
                          href="#"
                          data-toggle="modal"
                          data-target="#"
                          ><i class="icon-pencil"></i
                        ></a>
                        <input
                          type="checkbox"
                          checked
                          data-toggle="toggle"
                          data-size="xs"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="document product">
                    <div class="document-content">
                      <div class="document-profile">
                        <div class="document-info">
                          <p class="document-name mb-0">KodeProduct2</p>
                        </div>
                      </div>
                      <div class="document-email">
                        <p class="mb-0 small">ProductName:</p>
                        <p class="user-email">INDI30MB</p>
                      </div>

                      <div class="document-phone">
                        <p class="mb-0 small">ProductDesc:</p>
                        <p class="user-phone">Paket 30MB</p>
                      </div>
                      <div class="line-h-1 h5">
                        <a
                          class="text-success edit-document"
                          href="#"
                          data-toggle="modal"
                          data-target="#"
                          ><i class="icon-pencil"></i
                        ></a>
                        <input
                          type="checkbox"
                          checked
                          data-toggle="toggle"
                          data-size="xs"
                        />
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
 <!-- START: Template JS-->
 <script src="<?php echo base_url()?>assets/new_theme/dist/vendors/jquery/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url()?>assets/new_theme/dist/vendors/jquery-ui/jquery-ui.min.js"></script>
  <script src="<?php echo base_url()?>assets/new_theme/dist/vendors/moment/moment.js"></script>
  <script src="<?php echo base_url()?>assets/new_theme/dist/vendors/slimscroll/jquery.slimscroll.min.js"></script>
  <!-- END: Template JS-->

  <!-- START: APP JS-->
  <script src="<?php echo base_url()?>assets/new_theme/dist/js/app.js"></script>
  <!-- END: APP JS-->

  <!-- START: Page JS-->

  <script src="<?php echo base_url()?>assets/new_theme/dist/vendors/bootstrap4-toggle/js/bootstrap4-toggle.min.js"></script>
  <script src="<?php echo base_url()?>assets/new_theme/dist/js/app.filemanager.js"></script>
  <script src="<?php echo base_url()?>assets/new_theme/dist/vendors/quill/quill.min.js"></script>
  <script src="<?php echo base_url()?>assets/new_theme/dist/js/mail.script.js"></script>
    <!-- END: Content-->

    <!-- START: Footer-->
    