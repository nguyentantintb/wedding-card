@extends('admin.master')
@section('content')
<div class="page-content">
	<div class="page-header position-relative">
		<h1>
			Tables
			<small>
				<i class="icon-double-angle-right"></i>
				Category List
			</small>
		</h1>
	</div><!--/.page-header-->

	<div class="row-fluid">
		<div class="span12">
			<!--PAGE CONTENT BEGINS-->
			<div class="row-fluid">
				<div class="table-header">
					Danh sách các loại thiệp
				</div>
				<table id="sample-table-2" class="display table-bordered ">
					<thead>
						<tr>
							<th class="hidden-480 center">
								<label>
									<input type="checkbox" />
									<span class="lbl"></span>
								</label>
							</th>
							<th class="hidden-480 center">STT</th>
							<th class="center">Danh mục</th>
							<th class="hidden-480 hidden-phone center" nowrap >Ngày tạo</th>
							<th class="hidden-480 hidden-phone center " nowrap>Ngày cập nhật</th>
							<th class="center">Action</th>
						</tr>
					</thead>

					<tbody>
						@foreach($cate as $category)
						<tr>
							<td class="hidden-480 center">
								<label>
									<input type="checkbox" class="call-checkbox" value="{!! $category->id !!}" />
									<span class="lbl"></span>
								</label>
							</td>
							<td class="center hidden-480"></td>
							<td>{{ $category->name }}</td>
							<td class="hidden-480 hidden-phone">{{ date('F d, Y', strtotime($category->created_at)) }}</td>
							<td class="hidden-480 hidden-phone">{{date('F d, Y', strtotime($category->updated_at)) }}</td>
							<td class="td-actions">
								<div class="action-buttons center">
									<span>
									<a class="green" href="{{ route('admin.category.edit', $category->slug) }}">
										<i class="icon-pencil bigger-130"></i>
									</a>
									</span>
									<span>
										<a>{!! Form::open(array('route'=>array('admin.category.destroy', $category->id), 'method' => 'DELETE', 'class' => 'ajax')) !!}
										<button>
										<i class="icon-trash bigger-130"></i>
										</button>
										{!! Form::close() !!}
										</a>
									</span>
									
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div><!--/.span-->
	</div><!--/.row-fluid-->
</div><!--/.page-content-->
@endsection

@section('script')
<script src="/assets/js/jquery.dataTables.min.js"></script>
<script src="/assets/js/jquery.dataTables.bootstrap.js"></script>

<!--inline scripts related to this page-->

<script src="/js/datatable.js"></script>
<script src="/js/myscript.js"></script>
@endsection