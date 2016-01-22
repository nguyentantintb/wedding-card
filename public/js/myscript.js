$(document).ready(function() {
  
    $('#sample-table-2 tbody').on('click', 'a.destroy', function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'You will not be able to recover this imaginary file!',
             type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel plx!',
            confirmButtonClass: 'confirm-class',
            cancelButtonClass: 'cancel-class',
            closeOnConfirm: false,
            closeOnCancel: false
        },
          function(isConfirm){
            if (isConfirm) {
                $.ajax({
                    // type:method,
                    url: url,
                    type:"post",
                  data: { _method:"DELETE" },
                    success: function(){
                        swal({
                          title: "Deleted Success",
                          text: "You deleted this record!",
                          type: "success",
                      },
                      function() {
                        var table = $('#sample-table-2').DataTable();
                          table.ajax.reload();
                      });
                    }
                });
            } else {
                swal('Cancelled','Your imaginary file is safe :)','error');
            }
        });
});
});