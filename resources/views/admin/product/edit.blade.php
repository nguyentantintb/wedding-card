@extends('admin.master')
@section('styles')
<link rel="stylesheet" href="/assets/css/colorbox.css">
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
            {!! Form::open(array('route'=>
            array('admin.product.update', $product->
            id), 'method' =>
            'PUT', 'class' =>
            'form-horizontal', 'id' =>
            'demo-form', 'data-parsley-validate' =>
            "")) !!}
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
                            Gía
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
                            <textarea name="description" cols="30" required="" minlength="6" maxlength="300">
                                {{$product->description}}
                            </textarea>
                            {!! $errors->first('description') !!}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="form-field-4">
                            Hình ảnh
                        </label>
                        <div class="controls">
                            <div class="ace-file-input" style="width: 223px;" >
                                <input type="file" id="id-input-file-2"/>
                                <label data-title="Choose">
                                    <span data-title="No File ...">
                                        <i class="icon-upload-alt">
                                        </i>
                                    </span>
                                </label>
                                <a class="remove" href="#">
                                    <i class="icon-remove">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                    </div> 
                    {{-- het span 6 --}}
                    <div class="row-fluid">
                        <div class="span6">
                            <ul class="ace-thumbnails">
                            @foreach ($photos as $photo)
                                <li>
                                    <a data-rel="colorbox" title="Phuoc dep trai" href="/uploads/{{ $photo->title }}">
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

                                            <a href="#">
                                                <i class="icon-remove red"></i>
                                            </a>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    </div>
                    <div class="space-4">
                    </div>
                    <div class="form-actions">
                        <button class="btn btn-info" type="submit">
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
<script src="/assets/js/jquery.colorbox-min.js" />
<script>
    $("div.alert").delay(3000).slideUp();
</script>
<script type="text/javascript">
    $(function () {
    $('#demo-form').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
    })
    .on('form:submit', function() {
    return true;
    });
    });
</script>
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
@endsection
