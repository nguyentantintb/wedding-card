@extends('admin.master')
@section('content')
<div class="page-content">
	<div class="page-header position-relative">
		<h1>
			Sản phẩm
			<small>
				<i class="icon-double-angle-right"></i>
				Sửa {{ $product->name }}
			</small>
		</h1>
	</div><!--/.page-header-->
	<div class="row-fluid">
		<div class="span12">
			<!--PAGE CONTENT BEGINS-->
			@include('admin.partials._error')
			{!! Form::open(array('route'=>array('admin.product.update', $product->id), 'method' => 'PUT', 'class' => 'form-horizontal', 'id' => 'demo-form', 'data-parsley-validate' => "")) !!}

				<div class="control-group">
					<label class="control-label" for="form-field-1">Loại thiệp</label>

					<div class="controls">
						<select name="category_id">
							@foreach($categories as $category)
							<option value="{{ $category->id }}"> {{ $category->name}} </option>
							@endforeach
						</select>
						{!! $errors->first('name') !!}
					</div>
				</div>


				<div class="control-group">
					<label class="control-label" for="form-field-1">Tên</label>

					<div class="controls">
						<input type="text" id="form-field-1" name="name" value="{{$product->name}}" required="" minlength="6"	/>&nbsp;
						{!! $errors->first('name') !!}
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="form-field-1">Gía </label>

					<div class="controls">
						<input type="number" id="form-field-1" name="price" value="{{$product->price}}" type="number"	required="" />&nbsp;
						{!! $errors->first('price') !!}
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="form-field-1">Mô tả</label>

					<div class="controls">
						<textarea name="description" cols="30" required="" minlength="6" maxlength="300">{{$product->description}}</textarea>
						{!! $errors->first('description') !!}

					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="form-field-4">Hình ảnh</label>

					<div class="controls">

					<div class="ace-file-input" style="width: 223px;" >
					<input type="file" id="id-input-file-2">
					<label data-title="Choose">
						<span data-title="No File ...">
							<i class="icon-upload-alt"></i>
						</span>
					</label>
					<a class="remove" href="#"><i class="icon-remove"></i></a>
				</div>
</div>
				<div class="space-4"></div>
				<div class="form-actions">
					<button class="btn btn-info" type="submit">
						<i class="icon-ok bigger-110"></i>
						Sửa
					</button>

					&nbsp; &nbsp; &nbsp;
					<button class="btn" type="reset">
						<i class="icon-undo bigger-110"></i>
						Reset
					</button>
				</div>
				<div class="hr"></div>
				<div class="space-24"></div>
			{!! Form::close()!!}
		</div>
	</div><!--PAGE CONTENT ENDS-->
</div><!--/.span-->
</div><!--/.row-fluid-->
</div><!--/.page-content-->
@endsection
@section('script')
<script>$("div.alert").delay(3000).slideUp();</script>
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
	$('#id-input-file-2').ace_file_input({
		no_file:'No File ...',
		btn_choose:'Choose',
		btn_change:'Change',
		droppable:false,
		onchange:null,
		thumbnail:false //| true | large
		//whitelist:'gif|png|jpg|jpeg'
		//blacklist:'exe|php'
		//onchange:''
		//
	});

</script>
@endsection	
