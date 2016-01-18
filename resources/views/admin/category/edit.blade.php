@extends('admin.master')
@section('content')
<div class="page-content">
	<div class="page-header position-relative">
		<h1>
<<<<<<< HEAD
			Category
			<small>
				<i class="icon-double-angle-right"></i>
				Create new category
=======
			Loại thiệp
			<small>
				<i class="icon-double-angle-right"></i>
				Sửa loại thiệp
>>>>>>> 7be3ca5525b9aca4a6d1e63e6f0d48145dfa84c4
			</small>
		</h1>
	</div><!--/.page-header-->
	<div class="row-fluid">
		<div class="span12">
			<!--PAGE CONTENT BEGINS-->
			@include('admin.partials._error')
<<<<<<< HEAD
			<form class="form-horizontal" action="#" method="POST">
				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
=======
			{!! Form::open(array('route'=>array('admin.category.update', $cate->id), 'method' => 'PUT', 'class' => 'form-horizontal')) !!}
>>>>>>> 7be3ca5525b9aca4a6d1e63e6f0d48145dfa84c4
				<div class="control-group">
					<label class="control-label">Category Parent</label>

					<div class="controls">
						<select name="" id="">
							<option value=""></option>
						</select>
					</div>
				</div>

				<div class="control-group">
<<<<<<< HEAD
					<label class="control-label" for="form-field-1">Category Name</label>

					<div class="controls">
						<input type="text" id="form-field-1" placeholder="Category name" name="name" />
=======
					<label class="control-label" for="form-field-1">Tên mới</label>

					<div class="controls">
					
						<input type="text" id="form-field-1" name="name" value="{{$cate->name}}" />&nbsp;
						{!! $errors->first('name') !!}

						
>>>>>>> 7be3ca5525b9aca4a6d1e63e6f0d48145dfa84c4
					</div>
				</div>

				<div class="space-4"></div>
				<div class="form-actions">
					<button class="btn btn-info" type="submit">
						<i class="icon-ok bigger-110"></i>
<<<<<<< HEAD
						Submit
=======
						Sửa
>>>>>>> 7be3ca5525b9aca4a6d1e63e6f0d48145dfa84c4
					</button>

					&nbsp; &nbsp; &nbsp;
					<button class="btn" type="reset">
						<i class="icon-undo bigger-110"></i>
						Reset
					</button>
				</div>
				<div class="hr"></div>
				<div class="space-24"></div>
<<<<<<< HEAD
			</form>
=======
			{!! Form::close()!!}
>>>>>>> 7be3ca5525b9aca4a6d1e63e6f0d48145dfa84c4
		</div>
	</div><!--PAGE CONTENT ENDS-->
</div><!--/.span-->
</div><!--/.row-fluid-->
</div><!--/.page-content-->
@endsection
@section('script')
<script>$("div.alert").delay(3000).slideUp();</script>
<<<<<<< HEAD
@endsection
=======
@endsection	
>>>>>>> 7be3ca5525b9aca4a6d1e63e6f0d48145dfa84c4
