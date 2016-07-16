$(document).ready(function () {


    $('#example').DataTable();
    

    window.setTimeout(function () {
        $("#success").fadeTo(1000, 0).slideUp(1000, function () {
            $(this).remove();
        });
    }, 4000);

});
