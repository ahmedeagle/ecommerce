/*=========================================================================================
    File Name: users-contacts.js
    Description: Users contacts configurations
    ----------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Version: 1.0
    Author: GeeksLabs
    Author URL: http://www.themeforest.net/user/geekslabs
==========================================================================================*/

$(document).ready(function() {

    var userDataTable = $('#users-contacts').DataTable();
    // Set the search textbox functionality in sidebar
    $('#search-contacts').on( 'keyup', function () {
        userDataTable.search( this.value ).draw();
    });
    
    // Checkbox & Radio 1
    $('.input-chk').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
    });
        
    userDataTable.on( 'draw.dt', function () {
        // Checkbox & Radio 1
        $('.input-chk').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
        });
    });

});