
$(document).ready(function() {
    $('form.ajax').on('submit',function(e){
        e.preventDefault();
        var form = $(this);
        var method = form.find('input[name="_method"]').val() || 'POST';
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
        },function(isConfirm){
            if (isConfirm) {
                $.ajax({
                    type:method,
                    url:form.prop('action'),
                    success: function(){
                        swal({
                          title: "Deleted Success",
                          text: "You deleted this record!",
                          type: "success",
                      },
                      function() {
                          location.reload();
                      });
                    }
                });
            }else {
                swal('Cancelled','Your imaginary file is safe :)','error');
            }
        });
});
});