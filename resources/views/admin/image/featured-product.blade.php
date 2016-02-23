@extends('admin.master')
@section('content')
	<div class="page-content">
		<div class="page-header position-relative">
			<h1>Quản lý hình ảnh
				<small>
					<i class="icon-double-angle-right"></i>
					Chọn sản phẩm nổi bật
				</small>
			</h1>
		</div>
		{{-- PAGE HEADER --}}
		<div class="row-fluid">
			<div class="span12">
				{{-- PAGE CONTENT BEGIN --}}
				@include('admin.partials._error')
				<form action="{{ route('admin.featured-product.store') }}" id="form1" method="POST" class="form-inline" >
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
					@foreach ($data as $key=>$dt)
					<div class="block">
						<h5>Sản phẩm {{ $key+1 }}:</h5>
						<label for="exampleInputName2">Loại thiệp</label>
						<select class="_select1">
							@foreach($categories as $category)
							<option value="{{$category->id}}" <?php if($category->id == $dt['product']['category_id'])echo 'selected' ;?> >{{$category->name}}</option>
							@endforeach
						</select>
						<label for="exampleInputEmail2">Sản phẩm</label>
						<select name="product_id[]" class="_select2">
							@foreach($products as $product)
							<option value="{{$product->id}}" <?php if($product->id == $dt->product_id) echo 'selected' ;?> data-category-id="{{$product->category_id}}" >{{$product->name}}
							</option>
							@endforeach
						</select><br>
					</div>
					@endforeach
					<button type="submit" class="btn btn-default">Save</button>
				</form>
			</div>
		</div>
		{{--  --}}
	</div>
@endsection
@section('script')
<script>
	$('document').ready(function() {
			$('.block').on('change', 'select._select1', function() {
				var CategoryVal = $(this).val();
				$(this).closest('div').find('select._select2 option').each(function() {
					var that = $(this);
					var OptionVal = $(this).attr('data-category-id');
					if (OptionVal !== CategoryVal) {
						that.prop('hidden', true) 
					} else {
						that.prop('hidden', false)
					};
				});
				$(this).closest('div').find('select._select2 option:not([hidden]):first').prop('selected', true);
			});
	})
</script>
@endsection