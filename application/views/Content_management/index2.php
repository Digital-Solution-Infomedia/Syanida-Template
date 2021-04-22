<link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp_1/vendors/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/temp_1/vendors/bootstrap/js/bootstrap.min.js" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/summernote/summernote-lite.min.css" />
<script src="<?php echo base_url(); ?>assets/summernote/summernote-lite.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_lte/bower_components/select2/dist/css/select2.min.css" />
<script src="<?php echo base_url(); ?>assets/admin_lte/bower_components/select2/dist/js/select2.full.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_lte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.standalone.min.css" />
<script src="<?php echo base_url(); ?>assets/admin_lte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
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
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="form-group row">
                        <label for="inputState" class="col-sm-4 col-form-label">Nama Campaign</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nama_campaign" placeholder="Nama Campaign" value="" required name="nama_campaign" />
                        </div>
                        <div class="col-sm-3">
                            <button id="saveButton" class="btn btn-info" type="submit">Save</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <nav>
                        <div class="nav nav-tabs font-weight-bold flex-column flex-sm-row" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-parameter-tab" data-toggle="tab" href="#nav-parameter" role="tab" aria-controls="nav-parameter" aria-selected="false">Campaign Parameter</a>
                            <a class="nav-item nav-link" id="nav-email-tab" data-toggle="tab" href="#nav-email" role="tab" aria-controls="nav-email" aria-selected="true">Email</a>
                            <a class="nav-item nav-link" id="nav-whatsapp-tab" data-toggle="tab" href="#nav-whatsapp" role="tab" aria-controls="nav-whatsapp" aria-selected="false">Whatsapp</a>
                            <a class="nav-item nav-link" id="nav-sms-tab" data-toggle="tab" href="#nav-sms" role="tab" aria-controls="nav-sms" aria-selected="false">SMS</a>
                            <a class="nav-item nav-link" id="nav-landing_page-tab" data-toggle="tab" href="#nav-landing-page" role="tab" aria-controls="nav-landing-page" aria-selected="false">Landing Page</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-parameter" role="tabpanel" aria-labelledby="nav-parameter-tab">
                            <div class="row">
                                <div class="col my-2">
                                    <label for="typeTemplate">Template Campaign</label>
                                    <select name="typeTemplate" id="typeTemplate">
                                    </select>
                                    <div class="row">
                                        <div class="col">
                                            <input id="startTime" type="text" class="datepicker" placeholder="Start Date">
                                        </div>
                                        <div class="col">
                                            <input id="endTime" type="text" class="datepicker" placeholder="End Date">
                                        </div>
                                    </div>
                                    <div class="btn-group  btn-block my-2">
                                        <button id="addFilter" class="btn btn-info">Add Filter</button>
                                        <button id="clearFilter" class="btn btn-danger">Clear Filter</button>
                                    </div>
                                    <div id="filterContainer" class="my-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="nav-email" role="tabpanel" aria-labelledby="nav-email-tab">
                            <div class="summernote" data-id="1"><a id="unique_link" href="#" target="_blank">Link Unik Pelanggan</a></div>
                        </div>
                        <div class="tab-pane fade" id="nav-whatsapp" role="tabpanel" aria-labelledby="nav-whatsapp-tab">
                            <div class="form-group">
                                <label for="validationCustomUsername">Choose Image Whatsapp</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile" required name="campaign_image" onchange="previewFile(this, 1);">
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputState">Whatsapp Desc</label>
                                <div id="snow-container1" class="height-175 snow-container"></div>
                            </div>
                            <button class="btn btn-info btn-block" type="submit">Submit</button>
                        </div>
                        <div class="tab-pane fade" id="nav-sms" role="tabpanel" aria-labelledby="nav-sms-tab">
                            <div class="form-group">
                                <label id="labelSmsTextArea" for="smsTextArea">Char Count 0/160 (1)</label>
                                <textarea class="form-control" id="smsTextArea" rows="3">[[Link Unik Pelanggan]]</textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="nav-landing-page" role="tabpanel" aria-labelledby="nav-landing-page-tab">
                            <div class="summernote" data-id="2"><a id="unique_link" href="#" target="_blank">Link Unik Pelanggan</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-2">
                        <div class="card-header">
                            <h5 class="card-title">Parameter</h5>
                        </div>
                        <div class="card-body">
                            <div id="previewTarget">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-2">
                        <div class="card-header">
                            <h5 class="card-title">SMS</h5>
                        </div>
                        <div class="card-body">
                            <div id="previewSms">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-2">
                        <div class="card-header">
                            <h5 class="card-title">Whatsapp</h5>
                        </div>
                        <div class="card-body">
                            <div id="previewWhatsapp">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card mb-2">
                        <div class="card-header">
                            <h5 class="card-title">Email</h5>
                        </div>
                        <div class="card-body">
                            <div id="previewEmail">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card mb-2">
                        <div class="card-header">
                            <h5 class="card-title">Landing Page</h5>
                        </div>
                        <div class="card-body">
                            <div id="previewLandingPage">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#typeTemplate").select2({
        placeholder: "Pick a Template",
        ajax: {
            url: "<?= base_url() ?>Content_Management/Content_Management/getTypeTemplate",
            type: 'POST',
            dataType: 'json',
        },
    });
    $("#typeTemplate").on('select2:select', function(e) {
        let data = e.params.data;
        let formData = {
            template_id: data.id,
        };
        $.ajax({
            type: 'POST',
            url: "<?= base_url() ?>Content_Management/Content_Management/getTemplateData",
            data: formData,
            dataType: 'json',
            success: function(result) {
                updateSmsArea(result.results.sms);
                $(".summernote").eq(0).summernote('code', result.results.email);
                $(".summernote").eq(1).summernote('code', result.results.landingpage);
            },
            error: function(data) {
                console.log(data);
            }
        });
    });
    $(document).ready(function() {
        $('.summernote').summernote();
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd"
        });
        $('#typeTemplate').trigger('change.select2');
    });
    $('.summernote').each(function(i, obj) {
        $(obj).summernote({
            callbacks: {
                onChange: function() {
                    let id = $(obj).data('id');
                    if (id === 1) {
                        document.getElementById('previewEmail').innerHTML = $(obj).summernote('code');
                    } else {
                        document.getElementById('previewLandingPage').innerHTML = $(obj).summernote('code');
                    }
                }
            }
        })
    });
    $('#smsTextArea').bind('input propertychange', function() {
        updateSmsArea();
    });

    function updateSmsArea(text_input = null) {
        let tempText = '';
        if (text_input === null) {
            tempText = document.getElementById("smsTextArea").value;
        } else {
            tempText = text_input;
            document.getElementById("smsTextArea").value = text_input;
        }
        let page = Math.floor(tempText.length / 160) + 1;
        let remaining = tempText.length % 160;
        document.getElementById('labelSmsTextArea').innerHTML = 'Char Count ' + remaining + '/160 (' + page + ')';
        document.getElementById('previewSms').innerHTML = "";
        for (let index = 0; index < page; index++) {
            let newParagraph = document.createElement('p');
            newParagraph.innerHTML = tempText.substring((160 * index), (160 * index) + 160);
            document.getElementById('previewSms').appendChild(newParagraph);
        }
    }
    $('#saveButton').click(function() {
        var formData = {
            nama: document.getElementById("nama_campaign").value,
            sms_template: document.getElementById("smsTextArea").value,
            email_template: $(".summernote").eq(0).summernote('code'),
            landingpage_template: $(".summernote").eq(1).summernote('code'),
            filter_parameter: aggregateFilter(),
            tipe_content: $("#typeTemplate").select2("val"),
            starttime: document.getElementById("startTime").value,
            endtime: document.getElementById("endTime").value,
        };
        $.ajax({
            type: 'POST',
            url: "<?= base_url() ?>Content_Management/Content_Management/saveContent",
            data: formData,
            dataType: 'json',
            success: function(data) {
                // console.log(data)
            },
            error: function(data) {
                console.log(data);
            }
        });
    });
    var filterCount = 0;
    var filterField = [{
        "id": "kec_speedy",
        "text": "Kecepatan Internet"
    }, {
        "id": "payment",
        "text": "Metode Pembayaran"
    }];
    $('#addFilter').click(function() {
        filterCount++;
        let newDivRow = document.createElement('div');
        newDivRow.setAttribute('class', 'row');
        document.getElementById('filterContainer').appendChild(newDivRow);
        let newDivColLeft = document.createElement('div');
        newDivColLeft.setAttribute('class', 'col-sm-6');
        newDivRow.appendChild(newDivColLeft);
        let newDivColRight = document.createElement('div');
        newDivColRight.setAttribute('class', 'col-sm-6');
        newDivRow.appendChild(newDivColRight);
        let newSelect = document.createElement('select');
        newSelect.setAttribute('id', 'field' + filterCount);
        newSelect.setAttribute('class', 'form-control select2');
        newSelect.setAttribute('onchange', 'getFieldData(' + filterCount + ')');
        newDivColLeft.appendChild(newSelect);
        $('#field' + filterCount).prepend('<option selected=""></option>').select2({
            placeholder: "Available Filter",
            data: filterField
        });
        newSelect = document.createElement('select');
        newSelect.setAttribute('id', 'filter' + filterCount);
        newSelect.setAttribute('class', 'form-control select2');
        newDivColRight.appendChild(newSelect);
        $('#filter' + filterCount).select2();
    });
    $('#clearFilter').click(function() {
        document.getElementById('filterContainer').innerHTML = "";
        filterCount = 0;
    });

    function getFieldData(id) {
        let selectedField = document.getElementById("field" + id).value
        let formData = {
            selectedField: document.getElementById("field" + id).value
        };
        $.ajax({
            type: 'POST',
            url: "<?= base_url() ?>Content_Management/Content_Management/getFieldData",
            data: formData,
            dataType: 'json',
            success: function(result) {
                let tempData = [],
                    resultContainer = result.results;
                for (let index = 0; index < resultContainer.length; index++) {
                    let newData = [];
                    newData['id'] = resultContainer[index].result;
                    newData['text'] = resultContainer[index].result;
                    tempData[index] = newData;
                }
                // console.log(tempData);
                document.getElementById("filter" + id).setAttribute('multiple', 'multiple');
                document.getElementById("filter" + id).setAttribute('onchange', 'calculatePotentialTarget()');
                $('#filter' + id).select2({
                    data: tempData
                });
            },
            error: function(data) {
                console.log(data);
            }
        });
    }

    function aggregateFilter() {
        let tempArr = {};
        for (let index = 0; index < filterCount; index++) {
            tempArr[$('#field' + (index + 1)).select2("val")] = $('#filter' + (index + 1)).select2("val");
        }
        return tempArr;
    }

    function calculatePotentialTarget() {
        let formData = {
            filter_parameter: JSON.stringify(aggregateFilter()),
        };
        $.ajax({
            type: 'POST',
            url: "<?= base_url() ?>Content_Management/Content_Management/calculatePotentialTarget",
            data: formData,
            dataType: 'json',
            success: function(data) {
                console.log(data);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>