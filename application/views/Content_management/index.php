<link rel="stylesheet" href="<?php echo base_url(); ?>assets/new_theme/dist/vendors/quill/quill.snow.css" />

<!-- START: Main Content-->
<main>
	<div class="container-fluid site-width">
		<!-- START: Breadcrumbs-->
		<div class="row">
			<div class="col-12 align-self-center">
				<div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
					<div class="w-sm-100 mr-auto">
						<h4 class="mb-0">Generator</h4>
					</div>

					<ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
						<li class="breadcrumb-item">Home</li>
						<li class="breadcrumb-item">App</li>
						<li class="breadcrumb-item active">
							<a href="#">Generator</a>
						</li>
					</ol>
				</div>
			</div>
		</div>
		<!-- END: Breadcrumbs-->

		<!-- START: Card Data-->
		<div class="row">

			<div class="col-5 mt-3">
				<div class="card">
					<div class="card-header d-flex justify-content-between align-items-center">
						<nav>
							<div class="nav nav-tabs font-weight-bold" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="nav-email-tab" data-toggle="tab" href="#nav-email" role="tab"
								aria-controls="nav-email" aria-selected="true">Email</a>

								<a class="nav-item nav-link" id="nav-whatsapp-tab" data-toggle="tab" href="#nav-whatsapp" role="tab"
								aria-controls="nav-whatsapp" aria-selected="false">Whatsapp</a>

								<a class="nav-item nav-link" id="nav-sms-tab" data-toggle="tab" href="#nav-sms" role="tab"
								aria-controls="nav-sms" aria-selected="false">SMS</a>
							</div>
						</nav>
					</div>
					<div class="card-body">
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-email" role="tabpanel" aria-labelledby="nav-email-tab">
								<form action="<?php echo base_url('Content_Management/Content_Management/save_email_template'); ?>" method="post" enctype="multipart/form-data" id="generator_template_email">
									<div class="form-group">
										<label for="inputState">Nama Campaign</label>
										<input type="text" class="form-control" id="validationCustom01" placeholder="Nama Campaign"
										value="" required name="nama_campaign" />
									</div>

									<div class="form-group">
										<label for="validationCustomUsername">Choose Campaign Image</label>
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="validatedCustomFile" required name="campaign_image" onchange="previewFile(this, 0);" >
											<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
											<div class="invalid-feedback">Example invalid custom file feedback</div>
										</div>
									</div>

									<div class="form-group">
										<!-- disini load snow container quill textarea -->
										<label for="inputState">Desc</label>
										<div id="snow-container" class="height-175 snow-container"></div>
									</div>

									<div class="form-group">
										<label for="inputState">Button Link</label>
										<input type="text" class="form-control" id="validationCustom01" placeholder="Button Link" value=""
										required name="button_for_link" />
									</div>

									<button class="btn btn-info btn-block" type="submit">Submit</button>
								</form>
							</div>

							<div class="tab-pane fade" id="nav-whatsapp" role="tabpanel" aria-labelledby="nav-whatsapp-tab">
								<form action="<?php echo base_url('Content_Management/Content_Management/save_whatsapp_template'); ?>" enctype="multipart/form-data" method="post" id="generator_template_whatsapp">
									<div class="form-group">
										<label for="inputState">Nama Campaign</label>
										<input type="text" class="form-control" id="validationCustom01" placeholder="Nama Campaign"
										value="" required name="nama_campaign" />
									</div>

									<div class="form-group">
										<label for="validationCustomUsername">Choose Image Whatsapp</label>

										<!-- choose file hanya muncul ketika dropdown wording di pilih wa -->
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="validatedCustomFile" required name="campaign_image" onchange="previewFile(this, 1);" >
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
								</form>
							</div>

							<div class="tab-pane fade" id="nav-sms" role="tabpanel" aria-labelledby="nav-sms-tab">
								<form action="<?php echo base_url('Content_Management/Content_Management/save_sms_template'); ?>" method="post" id="generator_template_sms">
									<div class="form-group">
										<label for="inputState">Nama Campaign</label>
										<input type="text" class="form-control" id="validationCustom01" placeholder="Nama Campaign"
										value="" required name="nama_campaign" />
									</div>
									<div class="form-group">
										<!-- disini load snow container quill textarea -->
										<label for="inputState">SMS Desc</label>
										<div id="snow-container2" class="height-175 snow-container"></div>
									</div>

									<button class="btn btn-info btn-block" type="submit">Submit</button>
								</form>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-7 mt-3">
			<div class="card" id="preview_div">
				<div class="card-header d-flex justify-content-between align-items-center">
					<h4 class="card-title">Preview</h4>
				</div>
				<div class="card-content">
					<div class="card-image business-card">
						<div class="background-image-maker"></div>
						<div class="holder-image">
							<img src="assets/img-landing-page.jpeg" alt="" class="img-fluid" id="preview_campaign_image">
						</div>
						<!-- <div class="like"> 10:30am to 11:00pm</div> -->
					</div>
					<div class="card-body">
						<!-- <h5 class="card-title mb-3 mt-2">Vintage Italian Restaurant</h5> -->
						<p class="card-text" id="preview_content">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit itaque officia sed molestias
							asperiores rem autem unde, cum possimus perferendis in quo nesciunt assumenda officiis laborum
							porro hic quidem odit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda nulla
							eum dolor obcaecati hic exercitationem, ut excepturi possimus cumque nemo voluptates libero
							incidunt optio at voluptatibus id totam soluta numquam?
						</p>
						<p class="text-center">
							<a href="#" class="btn btn-primary" id="preview_button_link">Go somewhere</a>
						</p>
					</div>
					<!-- footernya tidak kebaca -->
					<img src="assets/footer.jpg" class="img-fluid" alt=""> 
				</div>
			</div>
		</div>
	</div>
	<!-- END: Card DATA-->
</div>
</main>
<!-- END: Content-->

<!-- START: Template JS-->
<script src="<?php echo base_url(); ?>assets/new_theme/dist/vendors/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/new_theme/dist/vendors/moment/moment.js"></script>
<script src="<?php echo base_url(); ?>assets/new_theme/dist/vendors/slimscroll/jquery.slimscroll.min.js"></script>
<!-- END: Template JS-->

<!-- START: Page JS-->
<script src="<?php echo base_url(); ?>assets/new_theme/dist/vendors/bootstrap4-toggle/js/bootstrap4-toggle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/new_theme/dist/js/app.filemanager.js"></script>
<script src="<?php echo base_url(); ?>assets/new_theme/dist/vendors/quill/quill.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/new_theme/dist/js/mail.script.js"></script> -->
<!-- END: Page JS-->

<script type="text/javascript">
	var quill = new Quill('#snow-container', {
		theme: 'snow'
	});

	var quill1 = new Quill('#snow-container1', {
		theme: 'snow'
	});

	var quill2 = new Quill('#snow-container2', {
		theme: 'snow'
	});

	// On Form Submit nambahin hasil text Editor
	$("#generator_template_email").on("submit", function () {
		var hvalue = quill.container.firstChild.innerHTML;
		$(this).append("<textarea name='content' style='display:none'>"+hvalue+"</textarea>");
		return true;
	});
	$("#generator_template_whatsapp").on("submit", function () {
		var hvalue = quill1.container.firstChild.innerHTML;
		$(this).append("<textarea name='content' style='display:none'>"+hvalue+"</textarea>");
		return true;
	});
	$("#generator_template_sms").on("submit", function () {
		var hvalue = quill2.container.firstChild.innerHTML;
		$(this).append("<textarea name='content' style='display:none'>"+hvalue+"</textarea>");
		return true;
	});

	// Ketika ada perubahan tab active bikin preview nya jadi default wording
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	  // newly activated tab
	  // e.target 
	  // previous active tab
	  // e.relatedTarget 
	  console.log(e.target.hash)
	  $('#preview_campaign_image').attr("src", '');
	  $('#preview_content').html('');
	  $('#preview_button_link').attr("href", '');
	})

	// Ketika ada Event pada Quill di form
	quill.on('text-change', function(t) {
		// $("#preview_campaign_image").html('');
		console.log('ada yg berubah')
		$('#preview_content').html(quill.root.innerHTML);
	});
	quill1.on('text-change', function() {
		// $("#preview_campaign_image").html('');
		console.log('ada yg berubah 1')
		$('#preview_content').html(quill1.root.innerHTML);
	});
	quill2.on('text-change', function() {
		// $("#preview_campaign_image").html('');
		console.log('ada yg berubah 2')
		$('#preview_content').html(quill2.root.innerHTML);
	});

	// Ketika ada perubahan pada input button for link
	$("input[name=button_for_link]").change(function(){
		$('#preview_button_link').attr("href", $(this).val());
	});



	// Func untuk Preview Image
	function previewFile(input, idx){
		var file = $("input[type=file]").get(idx).files[0];

		if(file){
			var reader = new FileReader();

			reader.onload = function(){
				$("#preview_campaign_image").attr("src", reader.result);
			}

			reader.readAsDataURL(file);
		}
	}

</script>