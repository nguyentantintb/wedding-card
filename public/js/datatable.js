	$(document).ready(function() {
		var oTable1 = $('#sample-table-2').DataTable(
			{
				"aoColumnDefs": [
					{ "bSortable": false, "aTargets": [-1, 0, 1] },
					{ "bSearchable": false, "aTargets": [0, -1] },
				],

				"oLanguage": {
					"sSearch": "Tìm kiếm: ",
					"sLengthMenu": "Hiển thị _MENU_ dòng mỗi trang",
					 "sInfo": "Đang hiển thị dòng _START_ đến _END_  của tất cả _TOTAL_ dòng"
				},
				"order": [[ 2, 'asc' ]]
			} );

/**
 * Ve them cot STT khong thay doi khi sort
 * @param  {[type]} ) {                         oTable1.column(1, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {                  cell.innerHTML [STT tang dan]
 */
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
      		$(this).closest('tr').toggleClass('selected');
 	});

 	$('#sample-table-2 tbody tr td').find('*').not('div').click(function(e) {
 		e.stopPropagation();
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
			});
			});