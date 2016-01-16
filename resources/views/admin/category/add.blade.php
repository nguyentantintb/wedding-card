@extends('admin.master')
@section('content')
<div class="page-content">
	<div class="page-header position-relative">
		<h1>
			Loại thiệp
			<small>
				<i class="icon-double-angle-right"></i>
				Thêm loại mới
			</small>
		</h1>
	</div><!--/.page-header-->
	<div class="row-fluid">
		<div class="span12">
			<!--PAGE CONTENT BEGINS-->
			@include('admin.partials._error')
			<form id="demo-form" data-parsley-validate="" class="form-horizontal" action="{{ route('admin.category.store') }}" method="POST">
				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
				<div class="control-group">
					<label class="control-label">Category Parent</label>

					<div class="controls">
						<select name="" id="">
							<option value=""></option>
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="form-field-1">Tên loại thiệp</label>

					<div class="controls">
						<input type="text" id="form-field-1" placeholder="Nhập tên loại thiệp" name="name" required="" minlength="6" />&nbsp;
						{!! $errors->first('name') !!}
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
@endsection