$(document).ready(function() {
    var table = $('#tab').DataTable( {
        scrollY:        "400px",
        scrollX:        true,
        scrollCollapse: false,
        paging:         false,
        fixedColumns:   {
            leftColumns: 1,
        }
    } );
});
