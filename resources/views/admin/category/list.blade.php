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
					Results for "List Category"
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
							<th>Category Name</th>
							<th>Slug</th>
							<th class="hidden-480">Clicks</th>

							<th class="hidden-phone">
								<i class="icon-time bigger-110 hidden-phone"></i>
								Update
							</th>
							<th class="hidden-480">Status</th>

							<th>Action</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td class="center">
								<label>
									<input type="checkbox" />
									<span class="lbl"></span>
								</label>
							</td>
							<td></td>
							<td></td>
							<td class="hidden-480"></td>
							<td class="hidden-phone"></td>

							<td class="hidden-480">
								<span class="label label-inverse arrowed-in"></span>
							</td>

							<td class="td-actions">
								<div class="hidden-phone visible-desktop action-buttons">
									<a class="blue" href="#">
										<i class="icon-zoom-in bigger-130"></i>
									</a>

									<a class="green" href="#">
										<i class="icon-pencil bigger-130"></i>
									</a>

									<a class="red" href="#">
										<i class="icon-trash bigger-130"></i>
									</a>
								</div>

								<div class="hidden-desktop visible-phone">
									<div class="inline position-relative">
										<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
											<i class="icon-caret-down icon-only bigger-120"></i>
										</button>

										<ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
											<li>
												<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
													<span class="blue">
														<i class="icon-zoom-in bigger-120"></i>
													</span>
												</a>
											</li>

											<li>
												<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
													<span class="green">
														<i class="icon-edit bigger-120"></i>
													</span>
												</a>
											</li>

											<li>
												<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
													<span class="red">
														<i class="icon-trash bigger-120"></i>
													</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</td>
						</tr>
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