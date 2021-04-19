<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" /> -->

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp_1/vendors/bootstrap/css/bootstrap.min.css" />
<!-- <script src="<?php echo base_url(); ?>assets/temp_1/vendors/bootstrap/js/bootstrap.min.js"></script> -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/summernote/summernote-lite.min.css" />
<script src="<?php echo base_url(); ?>assets/summernote/summernote-lite.min.js"></script>
<div class="container-fluid site">
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
	<div class="row">
		<div class="col-6">
			<div class="card">
				<div class="card-header d-flex justify-content-between align-items-center">
                    <div class="form-group">
                        <label for="inputState">Nama Campaign</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Nama Campaign" value="" required name="nama_campaign" />
                    </div>
				</div>
				<div class="card-body">
					<nav>
						<div class="nav nav-tabs font-weight-bold flex-column flex-sm-row" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="nav-email-tab" data-toggle="tab" href="#nav-email" role="tab" aria-controls="nav-email" aria-selected="true">Email</a>
							<a class="nav-item nav-link" id="nav-whatsapp-tab" data-toggle="tab" href="#nav-whatsapp" role="tab" aria-controls="nav-whatsapp" aria-selected="false">Whatsapp</a>
							<a class="nav-item nav-link" id="nav-sms-tab" data-toggle="tab" href="#nav-sms" role="tab" aria-controls="nav-sms" aria-selected="false">SMS</a>
							<a class="nav-item nav-link" id="nav-sms-tab" data-toggle="tab" href="#nav-sms" role="tab" aria-controls="nav-sms" aria-selected="false">Landing Page</a>
						</div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-email" role="tabpanel" aria-labelledby="nav-email-tab">
							<div id="summernote">Hello Summernote</div>
						</div>
						<div class="tab-pane fade" id="nav-whatsapp" role="tabpanel" aria-labelledby="nav-whatsapp-tab">
                            <div class="form-group">
                                <label for="validationCustomUsername">Choose Image Whatsapp</label>

                                <!-- choose file hanya muncul ketika dropdown wording di pilih wa -->
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile" required name="campaign_image" onchange="previewFile(this, 1);">
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <!-- disini load snow container quill textarea -->
                                <label for="inputState">Whatsapp Desc</label>
                                <div id="snow-container1" class="height-175 snow-container"></div>
                            </div>

                            <button class="btn btn-info btn-block" type="submit">Submit</button>
						</div>

						<div class="tab-pane fade" id="nav-sms" role="tabpanel" aria-labelledby="nav-sms-tab">
                            <div class="form-group">
                                <!-- disini load snow container quill textarea -->
                                <label for="inputState">SMS Desc</label>
                                <div id="snow-container2" class="height-175 snow-container"></div>
                            </div>

                            <button class="btn btn-info btn-block" type="submit">Submit</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-6">
			</div>
		</div>
	</div>
<script>
	$(document).ready(function() {
		$('#summernote').summernote();
	});
</script>