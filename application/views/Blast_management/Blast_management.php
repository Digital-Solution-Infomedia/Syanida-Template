<?php echo _css('datatables,icheck') ?>
<div class="container-fluid site">
  <div class="row row-eq-height">
    <div class="col-12 mt-3">
      <div class="card mb-3">
        <div class="card-content">
          <div class="card-body">
            <div class="d-flex">
              <div class="media-body pt-1 ">
                <span class="mb-0 h5 font-w-600">Summary Targetted Campaign</span>
              </div>
              <!-- <div class="ml-auto border-0 outline-badge-success circle-50"><span class="h5 mb-0">$</span></div> -->
              <form method="POST">
                <div class="form-group row">
                  <div class="col-12">
                    <select style="width:100%;" required>
                      <option label="Choose on thing">Choose Rules</option>
                      <option>Social Media</option>
                      <option>147</option>
                      <option>Aplikasi MyindiHome</option>
                      <option>Plaza</option>
                    </select>
                  </div>
                </div>
              </form>
            </div>

            <!-- akan muncul secara default jika belum memilih rules, setelah pemilihan rules langsung muncul matrix dari data rules yg dipilih -->
            <p>
            <div class="alert alert-danger text-center" role="alert">
              <h5>Silahkan pilih rules terlebih dahulu</h5>
            </div>
            </p>

            <div class="row">
              <div class="col-md-3">
                <div class="border-0 outline-badge-info p-2 rounded text-center">
                  <span class="h5 mb-0">
                    Total Channel
                  </span>
                  <br />
                  78.600
                </div>
              </div>
              <div class="col-md-3">
                <div class="border-0 outline-badge-success p-2 rounded ml-2 text-center">
                  <span class="h5 mb-0">
                    Whatsapp</span>
                  <br />
                  12.600
                </div>
              </div>
              <div class="col-md-3">
                <div class="border-0 outline-badge-primary p-2 rounded text-center">
                  <span class="h5 mb-0">
                    Email
                  </span>
                  <br />
                  4.600
                </div>
              </div>
              <div class="col-md-3">
                <div class="border-0 outline-badge-warning p-2 rounded ml-2 text-center">
                  <span class="h5 mb-0">
                    SMS
                  </span>
                  <br />
                  2.600
                </div>
              </div>
            </div>

            <hr>

            <div class="table-responsive">
              <table id="example" class="display table dataTable table-striped table-bordered">
                <thead>
                  <tr>
                    <th class="text-center align-items-center" rowspan="2">No</th>
                    <th class="text-center align-items-center" rowspan="2">NCLI</th>
                    <th class="text-center align-items-center" rowspan="2">Internet</th>
                    <th class="text-center align-items-center" rowspan="2">PSTN</th>
                    <th class="text-center align-items-center" rowspan="2">NAMA</th>
                    <th class="text-center align-items-center" colspan="2">Targetted Product</th>
                    <th class="text-center align-items-center" colspan="9">Customer Criteria</th>
                  </tr>
                  <tr>
                    <td class="font-weight-bold text-center">Cat Product</td>
                    <td class="font-weight-bold text-center">Product</td>
                    <td class="font-weight-bold text-center">Package</td>
                    <td class="font-weight-bold text-center">Area</td>
                    <td class="font-weight-bold text-center">Last View Channel</td>
                    <td class="font-weight-bold text-center">Subscription</td>
                    <td class="font-weight-bold text-center">Last Campaign Time</td>
                    <td class="font-weight-bold text-center">Last Campaign Topic</td>
                    <td class="font-weight-bold text-center">Info Package</td>
                    <td class="font-weight-bold text-center">Blast Via</td>
                    <td class="font-weight-bold text-center">Status</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>INDIKIDS10</td>
                    <td>Indimovie Kids</td>
                    <td>35.000</td>
                    <td>Paket Minipack indihome movie kids</td>
                    <td>INDIKIDS10</td>
                    <td>INDIKIDS10</td>
                    <td>INDIKIDS10</td>
                    <td>INDIKIDS10</td>
                    <td>INDIKIDS10</td>
                    <td>INDIKIDS10</td>
                    <td>INDIKIDS10</td>
                    <td>INDIKIDS10</td>
                    <td>INDIKIDS10</td>
                    <td>
                      Whatsapp
                    </td>
                    <td>
                      Waitting..
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <!-- START: Card Data-->
            <div class="row">
              <div class="col-md-12 mb-4 mt-4">
                <button class="btn btn-success btn-lg btn-block" type="submit">Blast</button>
              </div>

              <!-- matrix status blasting hidden default dan akan muncul ketika tombol blast di clik -->
              <div class="col-12 col-sm-6 col-xl-3 mt-3">
                <div class="card">
                  <div class="card-body p-0">
                    <div class='p-4 align-self-center'>
                      <h2>22.390</h2>
                      <h6 class="card-liner-subtitle">Total Blasting</h6>
                    </div>
                    <div class="barfiller" data-color="#1e3d73">
                      <div class="tipWrap">
                        <span class="tip rounded primary">
                          <span class="tip-arrow"></span>
                        </span>
                      </div>
                      <span class="fill" data-percentage="80"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-xl-3 mt-3">
                <div class="card">
                  <div class="card-body p-0">
                    <div class='p-4 align-self-center'>
                      <h2>54.768</h2>
                      <h6 class="card-liner-subtitle">Whatsapp</h6>
                    </div>
                    <div class="barfiller" data-color="#17a2b8">
                      <div class="tipWrap">
                        <span class="tip rounded info">
                          <span class="tip-arrow"></span>
                        </span>
                      </div>
                      <span class="fill" data-percentage="92"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-xl-3 mt-3">
                <div class="card">
                  <div class="card-body p-0">
                    <div class='p-4 align-self-center'>
                      <h2>4.236</h2>
                      <h6 class="card-liner-subtitle">Email</h6>
                    </div>
                    <div class="barfiller" data-color="#1ee0ac">
                      <div class="tipWrap">
                        <span class="tip rounded success">
                          <span class="tip-arrow"></span>
                        </span>
                      </div>
                      <span class="fill" data-percentage="67"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-xl-3 mt-3">
                <div class="card">
                  <div class="card-body p-0">
                    <div class='p-4 align-self-center'>
                      <h2>236</h2>
                      <h6 class="card-liner-subtitle">SMS</h6>
                    </div>
                    <div class="barfiller" data-color="#ffc107">
                      <div class="tipWrap">
                        <span class="tip rounded warning">
                          <span class="tip-arrow"></span>
                        </span>
                      </div>
                      <span class="fill" data-percentage="67"></span>
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

  <?php echo _js('datatables,icheck') ?>
  <script>
    var page_version = "1.0.8";
    $(document).ready(function() {
      $('#example').DataTable({
        "order": [
          [1, "DESC"]
        ],
        responsive: true
      });

    });
  </script>