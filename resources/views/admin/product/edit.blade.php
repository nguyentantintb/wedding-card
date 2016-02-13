@extends('admin.master')
@section('styles')
<link rel="stylesheet" href="/assets/css/colorbox.css">
<link href="/css/dropzone.min.css" rel="stylesheet" />
@endsection
@section('content')
<div class="page-content">
    <div class="page-header position-relative">
        <h1>
            Sản phẩm
            <small>
                <i class="icon-double-angle-right">
                </i>
                Sửa {{ $product->
                name }}
            </small>
        </h1>
    </div>
    <!-- /.page-header -->
    <div class="row-fluid">
        <div class="span12">
            <!-- PAGE CONTENT BEGINS -->
            @include('admin.partials._error')
            {!! Form::open(array('route'=>array('admin.product.update', $product->id), 'method' =>'PUT', 'class' =>'form-horizontal', 'id' =>'demo-form', 'data-parsley-validate' =>"")) !!}
            <div class="row-fluid ">
                <div class="span6">
                    <div class="control-group">
                        <label class="control-label" for="form-field-1">
                            Loại thiệp
                        </label>
                        <div class="controls">
                            <select name="category_id">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->
                                    name}}
                                </option>
                                @endforeach
                            </select>
                            {!! $errors->
                            first('name') !!}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="form-field-1">
                            Tên
                        </label>
                        <div class="controls">
                            <input type="text" id="form-field-1" name="name" value="{{$product->name}}" required="" minlength="6"	/>
                            &nbsp;
                            {!! $errors->first('name') !!}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="form-field-1">
                            Giá
                        </label>
                        <div class="controls">
                            <input type="number" id="form-field-1" name="price" value="{{$product->price}}" type="number"	required="" />
                            &nbsp;
                            {!! $errors->first('price') !!}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="form-field-1">
                            Mô tả
                        </label>
                        <div class="controls">
                            <textarea name="description" cols="30"  rows="5" required="" minlength="6" maxlength="300">{{$product->description}}</textarea>
                            {!! $errors->first('description') !!}
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
                    {{-- het span 6 --}}
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="row-fluid">
                            <ul class="ace-thumbnails">
                            @foreach ($photos as $photo)
                                <li>
                                    <a data-rel="colorbox" title="{{ $product->
                name }}" href="/uploads/{{ $photo->title }}">
                                        <img src="/uploads/thumbs/{{ $photo->title }}" />
                                        <div class="tags">
                                                <span class="label label-info">breakfast</span>
                                                <span class="label label-important">fruits</span>
                                                <span class="label label-success">toast</span>
                                                <span class="label label-warning arrowed-in">diet</span>
                                            </div>
                                        <div class="text">
                                                <div class="inner">{{ $photo->title }}</div>
                                            </div>
                                    </a>
                                     <div class="tools tools-top">
                                            <a href="#">
                                                <i class="icon-link"></i>
                                            </a>

                                            <a href="#">
                                                <i class="icon-paper-clip"></i>
                                            </a>

                                            <a href="#">
                                                <i class="icon-pencil"></i>
                                            </a>

                                            <a href='{{ route("admin.photo.destroy", "$photo->id") }}' class="destroy">
                                                <i class="icon-remove red"></i>
                                            </a>
                                        </div>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                        <div class="space-10"></div>
                        <!-- Preview DROPZONE -->
                        <div id="previews" class="">
                        <div class="item-template" id="drop-zone-template">
                            {{-- <div class="span6"> --}}
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
                            {{-- </div> --}}
                        </div>
                    </div>
                    {{-- Het DropZone --}}
                        </div>
                    </div>
                    </div>
                    <div class="space-4">
                    </div>
                    <div class="form-actions">
                        <button class="start btn btn-info" type="submit">
                            <i class="icon-ok bigger-110">
                            </i>
                            Sửa
                        </button>
                        &nbsp; &nbsp; &nbsp;
                        <button class="btn" type="reset">
                            <i class="icon-undo bigger-110">
                            </i>
                            Reset
                        </button>
                    </div>
                    <div class="hr">
                    </div>
                    <div class="space-24">
                    </div>
                    {!! Form::close()!!}
                </div>
            </div>
            <!-- PAGE CONTENT ENDS -->
        </div>
        <!-- /.span -->
    </div>
    <!-- /.row-fluid -->
</div>
<!--
    /.page-content
-->
@endsection
@section('script')
<script src="/assets/js/jquery.colorbox-min.js"></script>
<script src="/js/dropzone.js"></script>
<script src="/js/validation.js"></script>

{{-- Gallery show hinh anh --}}
<script>
    var colorbox_params = {
          rel: 'colorbox',
   reposition: true,
  scalePhotos: true,
    scrolling: false,
     previous: '<i class="icon-arrow-left"></i>',
         next: '<i class="icon-arrow-right"></i>',
        close: '&times;',
      current: '{current} of {total}',
     maxWidth: '100%',
    maxHeight: '100%',

   onComplete: function(){
     $.colorbox.resize();
   }
}
 
$('[data-rel="colorbox"]').colorbox(colorbox_params);
$('#cboxLoadingGraphic').append("<i class='icon-spinner orange'></i>");
</script>

{{-- Chuc nang xoa hinh anh  --}}
<script>
   $.ajaxSetup({
                headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content')}
    });
    $(document).ready(function() {
        
        $('ul.ace-thumbnails div.tools').on('click', 'a.destroy', function(e) {
            e.preventDefault();
            var url = $(this).attr('href');
            $.ajax( {
                url: url,
                type: "POST",
                data: {_method:"DELETE"},
                success: function() {
                    location.reload()
                },
            });
        })
    }) 
</script>

{{-- Preview cho DropZone --}}
<script>
    var token = $('meta[name=csrf-token]').attr('content');
     var url = '{{ route("admin.product.update", ":product_id") }}';
        url = url.replace(':product_id', {{ $product->id }});
// Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#drop-zone-template");
    previewNode.id = "";
    var previewTemplate = previewNode.parentNode.innerHTML;
    previewNode.parentNode.removeChild(previewNode);
//Khai bao vung DROPZONE
    var myDropzone = new Dropzone("#drop-zone", {
       
        url: url,
        method: 'POST',
        paramName: "file",

        params: {
                    _token: token,
                    _method: 'PUT'
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
@endsection
