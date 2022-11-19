$(function () {
    $('#table-rez').DataTable();
    $('#table-rez_filter').remove();
});


$('#unos-button').click(function () {

    $.ajax(
        {
            url: 'ajax-url/save.php',
            method: 'GET',
            data: {
                datum: $('#datum').val(),
                vreme: $('#vreme').val(),
                stadion: $('#stadion').val(),
                drzava_1: $('#drzava_1').val(),
                drzava_2: $('#drzava_2').val(),
                rezultat: $('#rezultat').val(),
            },

            success: function () {
                location.reload()
            }
        });
});




$('.delete').click(function () {

    $.ajax(
        {
            url: 'ajax-url/delete.php',
            method: 'GET',
            data: {
                rezultat_id: $(this).val()
            },

            success: function () {
                location.reload()
            }
        });
});



$('#naziv-stadiona').keyup(function () {

    $.ajax(
        {
            url: 'ajax-url/search.php',
            method: 'GET',
            data: {
                naziv_stadiona: $('#naziv-stadiona').val()
            },

            success: function (data) {
                $('tbody').html(data)
            }
        });
});






