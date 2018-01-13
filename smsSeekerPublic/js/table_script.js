$(document).ready(function () {
    $('#destination_check').change(function () {
        if (!this.checked)
            $('#destination_column').fadeIn('slow');
        else
            $('#destination_column').fadeOut('slow');
    }).change();
});