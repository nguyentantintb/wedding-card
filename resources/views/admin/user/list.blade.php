@extends('admin.master')
@section('content')
<div class="page-content">
	<div class="page-header position-relative">
		<h1>
			Tables
			<small>
				<i class="icon-double-angle-right"></i>
				User List
			</small>
		</h1>
	</div><!--/.page-header-->

	<div class="row-fluid">
		<div class="span12">
			<!--PAGE CONTENT BEGINS-->
			<div class="row-fluid">
				<div class="table-header">
					Results for "List User"
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
							<th>STT</th>
							<th>User name</th>
							<th>Email</th>
							<th class="hidden-480">Level</th>
							<th class="hidden-480">Update</th>
							<th class="hidden-phone">
								<i class="icon-time bigger-110 hidden-phone"></i>
								Action
							</th>

						</tr>
					</thead>

					<tbody>
						<?php $stt = 0;?>
						@foreach($user as $users)
						<?php $stt = $stt + 1;?>
						<tr>
							<td class="center">
								<label>
									<input type="checkbox" />
									<span class="lbl"></span>
								</label>
							</td>
							<td>{{ $stt }}</td>
							<td>{{ $users->name }}</td>
							<td>{{ $users->email }}</td>
							<td class="hidden-480">Member</td>
							<td class="hidden-phone">{{ date('F d, Y', strtotime($users->updated_at)) }}</td>
							<td class="td-actions">
								<div class="hidden-phone visible-desktop action-buttons">
									<a class="blue" href="#">
										<i class="icon-zoom-in bigger-130"></i>
									</a>

									<a class="green" href="#">
										<i class="icon-pencil bigger-130"></i>
									</a>

									<a class="red" href="#" method="delete">
										<i class="icon-trash bigger-130"></i>
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