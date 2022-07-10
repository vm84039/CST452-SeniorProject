$(document).ready(function() {
    $('#jobList').dataTable( {
        "aProcessing": true,
        "aServerSide": true,
        "ajax": "server-response.php",
    } );
} );
