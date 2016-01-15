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
				<table id="sample-table-2" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th class="center">
								<label>
									<input type="checkbox" />
									<span class="lbl"></span>
								</label>
							</th>
							<th class="hidden-480">STT</th>
							<th>Loại</th>
							<th class="hidden-480">Ngày tạo</th>
							<th class="hidden-480">Ngày cập nhật</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
						<?php $stt = 0;?>
						@foreach($cate as $category)
						<?php $stt = $stt + 1;?>
						<tr>
							<td class="center">
								<label>
									<input type="checkbox" />
									<span class="lbl"></span>
								</label>
							</td>
							<td>{{ $stt }}</td>
							<td>{{ $category->name }}</td>
							<td class="hidden-phone">{{ date('F d, Y', strtotime($category->created_at)) }}</td>
							<td class="hidden-phone">{{ date('F d, Y', strtotime($category->updated_at)) }}</td>
							<td class="td-actions">
								<div class="hidden-phone visible-desktop action-buttons">
									<a class="blue" href="#">
										<i class="icon-zoom-in bigger-130"></i>
									</a>

									<a class="green" href="{{ route('admin.category.edit', $category->slug) }}">
										<i class="icon-pencil bigger-130"></i>
									</a>

									<a>
										{!! Form::open(array('route'=>array('admin.category.destroy', $category->id), 'method' => 'DELETE')) !!}
										<button><i class="icon-trash bigger-130"></i></button>
										{!! Form::close() !!}
									</a>
									
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
<script type="text/javascript">
	$(function() {
		var oTable1 = $('#sample-table-2').dataTable( {
			"aoColumns": [
			{ "bSortable": false },
			null, null,null, null, null,
			{ "bSortable": false }
			] } );


		$('table th input:checkbox').on('click' , function(){
			var that = this;
			$(this).closest('table').find('tr > td:first-child input:checkbox')
			.each(function(){
				this.checked = that.checked;
				$(this).closest('tr').toggleClass('selected');
			});

		});


		$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
		function tooltip_placement(context, source) {
			var $source = $(source);
			var $parent = $source.closest('table')
			var off1 = $parent.offset();
			var w1 = $parent.width();

			var off2 = $source.offset();
			var w2 = $source.width();

			if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
			return 'left';
		}
	})
</script>
@endsection