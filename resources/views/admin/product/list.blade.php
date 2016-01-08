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
							<th>Domain</th>
							<th>Price</th>
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

							<td>
								<a href="#">fair.com</a>
							</td>
							<td>$35</td>
							<td class="hidden-480">3,900</td>
							<td class="hidden-phone">Mar 26</td>

							<td class="hidden-480">
								<span class="label label-inverse arrowed-in">Flagged</span>
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

						<tr>
							<td class="center">
								<label>
									<input type="checkbox" />
									<span class="lbl"></span>
								</label>
							</td>

							<td>
								<a href="#">year.com</a>
							</td>
							<td>$48</td>
							<td class="hidden-480">3,990</td>
							<td class="hidden-phone">Feb 15</td>

							<td class="hidden-480">
								<span class="label label-warning">Expiring</span>
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

						<tr>
							<td class="center">
								<label>
									<input type="checkbox" />
									<span class="lbl"></span>
								</label>
							</td>

							<td>
								<a href="#">day.com</a>
							</td>
							<td>$55</td>
							<td class="hidden-480">5,600</td>
							<td class="hidden-phone">Jan 29</td>

							<td class="hidden-480">
								<span class="label label-info arrowed arrowed-righ">Sold</span>
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

						<tr>
							<td class="center">
								<label>
									<input type="checkbox" />
									<span class="lbl"></span>
								</label>
							</td>

							<td>
								<a href="#">light.com</a>
							</td>
							<td>$40</td>
							<td class="hidden-480">3,100</td>
							<td class="hidden-phone">Feb 17</td>

							<td class="hidden-480">
								<span class="label label-success">Registered</span>
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

						<tr>
							<td class="center">
								<label>
									<input type="checkbox" />
									<span class="lbl"></span>
								</label>
							</td>

							<td>
								<a href="#">sight.com</a>
							</td>
							<td>$58</td>
							<td class="hidden-480">6,100</td>
							<td class="hidden-phone">Feb 19</td>

							<td class="hidden-480">
								<span class="label label-inverse arrowed-in">Flagged</span>
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

						<tr>
							<td class="center">
								<label>
									<input type="checkbox" />
									<span class="lbl"></span>
								</label>
							</td>

							<td>
								<a href="#">right.com</a>
							</td>
							<td>$50</td>
							<td class="hidden-480">4,400</td>
							<td class="hidden-phone">Apr 01</td>

							<td class="hidden-480">
								<span class="label label-warning">Expiring</span>
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

						<tr>
							<td class="center">
								<label>
									<input type="checkbox" />
									<span class="lbl"></span>
								</label>
							</td>

							<td>
								<a href="#">once.com</a>
							</td>
							<td>$20</td>
							<td class="hidden-480">1,400</td>
							<td class="hidden-phone">Apr 04</td>

							<td class="hidden-480">
								<span class="label label-info arrowed arrowed-righ">Sold</span>
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

			<div id="modal-table" class="modal hide fade" tabindex="-1">
				<div class="modal-header no-padding">
					<div class="table-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						Results for "Latest Registered Domains"
					</div>
				</div>

				<div class="modal-body no-padding">
					<div class="row-fluid">
						<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
							<thead>
								<tr>
									<th>Domain</th>
									<th>Price</th>
									<th>Clicks</th>

									<th>
										<i class="icon-time bigger-110"></i>
										Update
									</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>
										<a href="#">ace.com</a>
									</td>
									<td>$45</td>
									<td>3,330</td>
									<td>Feb 12</td>
								</tr>

								<tr>
									<td>
										<a href="#">base.com</a>
									</td>
									<td>$35</td>
									<td>2,595</td>
									<td>Feb 18</td>
								</tr>

								<tr>
									<td>
										<a href="#">max.com</a>
									</td>
									<td>$60</td>
									<td>4,400</td>
									<td>Mar 11</td>
								</tr>

								<tr>
									<td>
										<a href="#">best.com</a>
									</td>
									<td>$75</td>
									<td>6,500</td>
									<td>Apr 03</td>
								</tr>

								<tr>
									<td>
										<a href="#">pro.com</a>
									</td>
									<td>$55</td>
									<td>4,250</td>
									<td>Jan 21</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="modal-footer">
					<button class="btn btn-small btn-danger pull-left" data-dismiss="modal">
						<i class="icon-remove"></i>
						Close
					</button>

					<div class="pagination pull-right no-margin">
						<ul>
							<li class="prev disabled">
								<a href="#">
									<i class="icon-double-angle-left"></i>
								</a>
							</li>

							<li class="active">
								<a href="#">1</a>
							</li>

							<li>
								<a href="#">2</a>
							</li>

							<li>
								<a href="#">3</a>
							</li>

							<li class="next">
								<a href="#">
									<i class="icon-double-angle-right"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div><!--PAGE CONTENT ENDS-->
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