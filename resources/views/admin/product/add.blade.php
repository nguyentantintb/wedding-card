@extends('admin.master')
@section('content')
<div class="page-content">
	<div class="page-header position-relative">
		<h1>
			Thiệp cưới
			<small>
				<i class="icon-double-angle-right"></i>
				Thêm mẫu mới
			</small>
		</h1>
	</div><!--/.page-header-->
	<div class="row-fluid">
		<div class="span12">
			<!--PAGE CONTENT BEGINS-->
			@include('admin.partials._error')
			<form id="demo-form" data-parsley-validate="" class="form-horizontal" action="{{ route('admin.product.store') }}" method="POST">
				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
				<div class="control-group">
					<label class="control-label">Loại thiệp</label>

					<div class="controls">
						<select name="category" id="" required="">
						@foreach($cate as $category)
							<option value="{{ $category->id }}">{{ $category->name }}</option>
							@endforeach
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="form-field-1">Tên thiệp</label>

					<div class="controls">
						<input type="text" id="form-field-1" placeholder="Nhập tên thiệp" name="name" required="" minlength="6" />
					</div>

				</div>

				<div class="control-group">
					<label class="control-label" for="form-field-2">Giá Thiệp</label>

					<div class="controls">
						<input type="text" id="form-field-2" placeholder="Nhập giá" name="price" required="" minlength="6" />
					</div>

				</div>


				<div class="control-group">
					<label class="control-label" for="form-field-3">Mô tả thiệp</label>

					<div class="controls">
						<textarea name="description" id="form-field-3" cols="30" placeholder="Nhập mô tả"></textarea>
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

				</div>

				<div class="space-4"></div>
				<div class="form-actions">
					<button class="btn btn-info" type="submit">
						<i class="icon-ok bigger-110"></i>
						Thêm
					</button>

					&nbsp; &nbsp; &nbsp;
					<button class="btn" type="reset">
						<i class="icon-undo bigger-110"></i>
						Reset
					</button>
				</div>
				<div class="hr"></div>
				<div class="space-24"></div>
			</form>
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