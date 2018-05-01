// start delete alert 
$('button.delete-btn').on('click', function(e){
    e.preventDefault();
    var self = $(this);
    swal({
        title             : "Are you sure?",
        text              : "You will not be able to recover this!",
        type              : "warning",
        showCancelButton  : true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText : "Yes, Delete it!",
        cancelButtonText  : "No, Cancel delete!",
        closeOnConfirm    : false,
        closeOnCancel     : false
    },
    function(isConfirm){
        if(isConfirm){
            swal("Deleted!","It has been deleted", "success");
            setTimeout(function() {
                self.parents(".delete_form").submit();
            }, 2000); //2 second delay (2000 milliseconds = 2 seconds)
        }
        else{
              swal("Cancelled","It is safe", "error");
        }
    });
});
//  delete alert end
