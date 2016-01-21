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
				<table id="sample-table-2" class="display table-bordered responsive nowrap" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th></th>
							<th class="center hidden-phone'">
								<input type="checkbox" class="ace-checkbox-2" /><span class="lbl"></span>
							</th>
							<th class="center hidden-phone">STT</th>
							<th class="center">Danh mục</th>
							<th class="center" nowrap >Ngày tạo</th>
							<th class="center " nowrap>Ngày cập nhật</th>
							<th class="center">Action</th>
						</tr>
					</thead>
					<tbody>
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
<script src="https://cdn.datatables.net/responsive/2.0.1/js/dataTables.responsive.min.js"></script>

<!--inline scripts related to this page-->

<script src="/js/myscript.js"></script>
<script src="/js/datatable.js"></script>

<script>
// Load du lieu cho DATA TABLE

		$.ajaxSetup({
		        headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content')}
		      });
		var oTable1 = $('#sample-table-2').DataTable(
			{
				"ajax": {
					"url": "{{ route('loadcategories') }}",
					"type": 'POST',
				},
				"responsive": {
            details: {
                type: 'column'
            }
        },
		    	"columns": [
		    		//Control Column
		    			{"data": null, "defaultContent": "", className: "control", targets:   0 }, 
		    		//Checkbox Column
		    			{"data": null,  'sClass': 'hidden-phone center',
			    			"render": function ( data, type, row ) {
				                    if ( type === 'display' ) {
				                        return '<label><input type="checkbox" class=" center call-checkbox ace-checkbox-2" /><span class="lbl"></span></label>';
				                    }
				             return data;},
		                  },
		             //STT column
		    			{"data": null,    'sClass': 'center hidden-phone'},
		    		//Danh muc
			            { "data": "name",responsivePriority: 1 },
			       // Ngay tao
			            { "data": "created_at" },
			       //Ngay cap nhat
			            { "data": "updated_at" },
			       //Action Column
			            {
			            		"data": "slug", 
						"render": function ( data, type, full ) {
								var url_edit = '{{ route("admin.category.edit", ":slug") }}';
									url_edit = url_edit.replace(':slug', data);
								var html_edit = '<a class="green" href=" ' +url_edit+ ' "><i class="icon-pencil bigger-130"></i></a>&nbsp;&nbsp;';
								var url_delete = '{{route("admin.category.destroy", ":slug") }}';
									url_delete = url_delete.replace(':slug', data);
								var html_delete = '<a class="destroy" href=" '+url_delete+' "><i class="icon-trash bigger-130"></i></a>'
								var html_action = '<div class="action-buttons">'+html_edit+html_delete+'</div>' ;	
				                    	return html_action;
				             },
				             responsivePriority: 2,
				            	"className": "center",
			     		}
			     	],
				"aoColumnDefs": [
					{ "bSortable": false, "aTargets": [-1, 0, 1, 2] },
					{ "bSearchable": false, "aTargets": [-1, 0, 1, 2] },
				],

				"oLanguage": {
					"sSearch": "Tìm kiếm: ",
					"sLengthMenu": "Hiển thị _MENU_ dòng mỗi trang",
					 "sInfo": "Đang hiển thị dòng _START_ đến _END_  của tất cả _TOTAL_ dòng"
				},
				"order": [[ 3, 'asc' ]]
			} );

	
 
</script>

@endsection