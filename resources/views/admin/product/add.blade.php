@extends('admin.master')
@section('styles')
<link href="/css/dropzone.min.css" rel="stylesheet" />
@endsection
@section('content')
<div class="page-content">
    <div class="page-header position-relative">
        <h1>
            Thiệp cưới
            <small>
                <i class="icon-double-angle-right">
                </i>
                Thêm mẫu mới
            </small>
        </h1>
    </div>
    <!-- /.page-header -->
    <div class="row-fluid">
        <div class="span12">
            <!-- PAGE CONTENT BEGINS -->
            @include('admin.partials._error')
            <form id="demo-form" data-parsley-validate="" action="{{ route('admin.product.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                <div class="row-fluid ">
                    <div class="span6">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                        <div class="control-group">
                            <label class="control-label">
                                Loại thiệp
                            </label>
                            <div class="controls">
                                <select name="category_id" id="" required="">
                                    @foreach($cate as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->
                                        name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="form-field-1">
                                Tên thiệp
                            </label>
                            <div class="controls">
                                <input type="text" id="form-field-1" placeholder="Nhập tên thiệp" name="name"  minlength="6" required="" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="form-field-2">
                                Giá Thiệp
                            </label>
                            <div class="controls">
                                <input type="number"  id="form-field-2" placeholder="Nhập giá" name="price" required=""  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="form-field-3">
                                Mô tả thiệp
                            </label>
                            <div class="controls">
                                <textarea name="description" id="form-field-3" cols="30" placeholder="Nhập mô tả">
                                </textarea>
                            </div>
                        </div>
                        <div class="control-group" >
                            <label class="control-label">
                                Hình ảnh
                            </label>
                            <div  id="drop-zone" class="controls" style="width: 220px;">
                                <div class="ace-file-input ace-file-multiple drop-zone-clickable">
                                    <label data-title="Chọn hình ảnh cho sản phẩm">
                                        <span>
                                            <i class="icon-cloud-upload">
                                            </i>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="previews" class="">
                        <div class="item-template" id="drop-zone-template">
                            <div class="span6">
                                <div class="row-fluid">
                                    <div class="span4 ace-file-input ace-file-multiple">
                                        <label class="hide-placeholder selected">
                                            <span>
                                                <img data-dz-thumbnail />
                                            </span>
                                        </label>
                                        <a data-dz-remove class="remove" href="#">
                                            <i class="icon-remove">
                                            </i>
                                        </a>
                                    </div>
                                    <div class="span8">
                                        <div class="space-4">
                                        </div>
                                        <div id="total-progress">
                                            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width:70%;">
                                                <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="name" data-dz-name>
                                            </p>
                                            <strong class="error text-danger" data-dz-errormessage>
                                            </strong>
                                            <p class="size" data-dz-size>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- The global file processing state -->
                <div>
                    <span class="fileupload-process">
                        <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                            <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress>
                            </div>
                        </div>
                    </span>
                </div>
                <div class="space-4">
                </div>
                <div class="form-actions">
                    <button class="start btn btn-info" >
                        Thêm
                    </button>
                    &nbsp; &nbsp; &nbsp;
                    <button class="btn" type="reset">
                        Reset
                    </button>
                </div>
                <div class="hr">
                </div>
                <div class="space-24">
                </div>
            </form>
        </div>

    </div>
    <!-- PAGE CONTENT ENDS -->
</div>
<!--
    /.span
-->
</div>
<!--
/.row-fluid
-->
</div>
<!--
/.page-content
-->
@endsection
@section('script')
<script>
	$("div.alert").delay(3000).slideUp();
</script>

<script src="/js/dropzone.js"></script>
{{--
<script src="/js/image.js">
</script>
--}}

<script>
	var token = $('meta[name=csrf-token]').attr('content');
// Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
	var previewNode = document.querySelector("#drop-zone-template");
	previewNode.id = "";
	var previewTemplate = previewNode.parentNode.innerHTML;
	previewNode.parentNode.removeChild(previewNode);
//Khai bao vung DROPZONE
	var myDropzone = new Dropzone("#drop-zone", {
		url: '{{ route("admin.product.store") }}',
		paramName: "file",

		params: {
                    _token: token
                  },
		thumbnailWidth: 200,
		thumbnailHeight: 150,
		parallelUploads: 20,
		maxFilesize:20,
		uploadMultiple: true,
		previewTemplate: previewTemplate,
		autoQueue: false,
		autoDiscover: false,
		previewsContainer: "#previews", // Define the container to display the previews
		clickable: ".drop-zone-clickable"    // Define the element that should be used as click trigger to select files.
	});

//Chuc nang cho Dropzone
//
//Start upload khi click submit
	document.querySelector(".start").onclick = function(e) {
		if( $('#demo-form').parsley().isValid() ) {
	      		if (myDropzone.files.length > 0) {               
				e.preventDefault();
       			 myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
                    };                       
		};
	};	

	myDropzone.on("addedfile", function(file) {
		document.querySelector(".remove").onclick = function() {
			myDropzone.removeFile(true);
		};
	});
//Update the total progress bar
	myDropzone.on("totaluploadprogress", function(progress) {
		document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
	});
//Show the total progress bar when upload starts
	myDropzone.on("sending", function(file, xhr, formData) {
		document.querySelector("#total-progress").style.opacity = "1";
		//disable the start button
		var CategoryIdInput = $('form select option:selected').val();	
		var NameInput = $('form input[name="name"]').val();		
		var PriceInput = $('form input[name="price"]').val();		
		var DescriptionInput = $('form').find('textarea').val();
		document.querySelector(".start").setAttribute("disabled", "disabled");
		formData.append('category_id', CategoryIdInput);
		formData.append('name', NameInput);
		formData.append('price', PriceInput);
		formData.append('description', DescriptionInput);
	});
//Hide the total progress bar when nothing's upload anymore
	myDropzone.on("queuecomplete", function(progress) {
		document.querySelector("#total-progress").style.opacity = "0";
		document.querySelector(".start").removeAttribute("disabled");
	});

</script>
<script src="/js/validation.js"></script>
@endsection
