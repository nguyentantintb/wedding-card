@extends('admin.master')
@section('content')
<div class="page-content">
	<div class="page-header position-relative">
		<h1>
			Tables
			<small>
				<i class="icon-double-angle-right"></i>
				Danh sách sản phẩm
			</small>
		</h1>
	</div><!--/.page-header-->

	<div class="row-fluid">
		<div class="span12">
			<!--PAGE CONTENT BEGINS-->
			<div class="row-fluid">
				<div class="table-header">
					Kết quả cho Danh sách sản phẩm
				</div>
				<table id="sample-table-2" class="display table-bordered ">


					<thead>
						<tr>
							<th class="center hidden-480">
								<label>
									<input type="checkbox" />
									<span class="lbl"></span>
								</label>
							</th>
							<th class="hidden-480 hidden-phone center" >STT</th>
							<th class="center" >Sản phẩm</th>
							<th class="center" >Giá</th>
							<th>Mô tả</th>
							<th class="hidden-480 hidden-phone">Loại thiệp</th>
							<th class="hidden-480 hidden-phone center">Ngày cập nhật</th>

							<th>Action</th>
						</tr>
					</thead>

					<tbody>
						@foreach($products as $product)
							<tr>
								<td class="center hidden-480">
									<label>
										<input type="checkbox" />
										<span class="lbl"></span>
									</label>
								</td>
								<td class="hidden-480 hidden-phone center"></td>
								<td class="center">
									<a href="#">{{ $product->name }}</a>
								</td>
								<td><div class="align-right">{{ $product->price }}</div></td>
								<td>{{ $product->description }}</td>
								<td class="hidden-480 hidden-phone">{{ $product->category->name }}</td>
								<td class="hidden-480 hidden-phone center">{{ date('F d, Y', strtotime($product->updated_at))  }}</td>

								<td class="td-actions" nowrap>
									<div class="action-buttons">

										<a class="green" href="{{ route('admin.product.edit', $product->slug) }}">
											<i class="icon-pencil bigger-130"></i>
										</a>

										<a>
											{!! Form::open(array('route'=>array('admin.product.destroy', $product->id), 'method' => 'DELETE', 'class'=>'ajax')) !!}
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
		var oTable1 = $('#sample-table-2').DataTable( {
			"aoColumnDefs": [
				{ "bSortable": false, "aTargets": [-1, 0, 1] },
				{ "bSortable": false, "aTargets": [0. -1] },
			],

			"oLanguage": {
				"sSearch": "Tìm kiếm: ",
				"sLengthMenu": "Hiển thị _MENU_ dòng mỗi trang",
				 "sInfo": "Đang hiển thị dòng _START_ đến _END_  của tất cả _TOTAL_ dòng"
			},
			"order": [[ 1, 'asc' ]]
		 } );

		oTable1.on( 'order.dt search.dt', function () {
             	oTable1.column(1, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                  		cell.innerHTML = i+1;
              	} );
          	} ).draw();


/**
 * Checkbox va to mau row khi click vao row do
 */

 	$('#sample-table-2 tbody').on('click', 'tr', function() {
 		var cb = $(this).find(':checkbox');

 		cb.prop('checked', !cb.prop('checked')); //Tick vao checkbox khi tick vao row
		$(this).toggleClass('selected', cb.prop('checked')) ; //To mau row theo trang thai cua checkbox
 	});

	$('#sample-table-2 tbody :checkbox').click(function(e) {
 		e.stopPropagation();
      		$(this).closest('tr').toggleClass('selected');
 	});


/**
 * Check tat ca
 */
		$('table th input:checkbox').on('click' , function(){
			var that = this;
			$(this).closest('table').find('tr > td:first-child input:checkbox')
			.each(function(){
				this.checked = that.checked;
				$(this).closest('tr').toggleClass('selected', $(this).prop('checked'));
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

<script src="/js/datatable.js"></script>


@endsection