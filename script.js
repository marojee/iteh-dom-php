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


$('#del-button').click(function () {

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









