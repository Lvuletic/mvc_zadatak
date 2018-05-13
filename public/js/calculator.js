$(document).ready(function() {

    $('#calculate-circle').on('click', function () {

        var radius = $('#radius').val();

        $.ajax({
            url: 'circle/' + radius,
            success: function (response) {
                $('#circle-surface').val(response.surface);
                $('#circle-circumference').val(response.circumference);
            }
        });

    });

    $('#calculate-triangle').on('click', function () {

        var a = $('#triangle-a').val();
        var b = $('#triangle-b').val();
        var c = $('#triangle-c').val();

        $.ajax({
            url: 'triangle/' + a + '/' + b + '/' + c,
            success: function (response) {
                $('#triangle-surface').val(response.surface);
                $('#triangle-circumference').val(response.circumference);
            }
        });

    });

});