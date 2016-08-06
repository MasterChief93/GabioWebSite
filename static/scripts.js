$(function () {
    $('select').material_select();
    $('#service_date').pickadate({
        monthsFull: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
        weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'],
        monthsShort: ['GEN', 'FEB', 'MAR', 'APR', 'MAG', 'GIU', 'LUG', 'AGO', 'SET', 'OTT', 'NOV', 'DIC'],
        weekdaysFull: ['Domenica', 'Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato'],
        labelMonthNext: 'Mese successivo',
        labelMonthPrev: 'Mese precedente',
        labelMonthSelect: 'Seleziona un mese',
        labelYearSelect: 'Seleziona un anno',
        weekdaysLetter: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'],
        format: 'dd/mm/yyyy',
        formatSubmit: 'dd/mm/yyyy',
        clear: '',
        today: '',
        close: '',
        min: true,
        closeOnSelect: true,
        closeOnClear: true,
        onSet: function (arg) {
            if ('select' in arg) { //prevent closing on selecting month/year
                this.close();
            }
        }
    });
    $('#service_hour').pickatime({
        twelvehour: false,
        donetext: '',
        autoclose: true
    });
    $('#service_type').change(function () {
        $('#service_info').show('slide');
        if ($(this).val() == "discharge") {
            $('#home-icon-from').hide();
            $('#hospital-icon-from').show();
            $('#home-icon-to').show();
            $('#hospital-icon-to').hide();
            $('#section_to').hide();
            $('#section_from').show();
            $('#same_address_from').hide();
            $('#same_address_to').show();
        } else if ($(this).val() == "admission") {
            $('#home-icon-from').show();
            $('#hospital-icon-from').hide();
            $('#home-icon-to').hide();
            $('#hospital-icon-to').show();
            $('#section_to').show();
            $('#section_from').hide();
            $('#same_address_from').show();
            $('#same_address_to').hide();
        } else {
            $('#home-icon-from').hide();
            $('#hospital-icon-from').show();
            $('#home-icon-to').hide();
            $('#hospital-icon-to').show();
            $('#section_to').show();
            $('#section_from').show();
            $('#same_address_from').hide();
            $('#same_address_to').hide();
        }
    });

    var patient_address = document.getElementById('patient_address');
    var place_from = document.getElementById('place_from');
    var place_to = document.getElementById('place_to');
    var options = {
        types: ['address'],
        componentRestrictions: {country: 'it'}
    };
    var search1 = new google.maps.places.Autocomplete(patient_address, options);
    var search2 = new google.maps.places.Autocomplete(place_from, options);
    var search3 = new google.maps.places.Autocomplete(place_to, options);

    $('#same_address_to_check').change(function () {
        var place_to = $('#place_to');
        if (!place_to.prop("disabled")) {
            var address = $('#patient_address').val();
            place_to.val(address);
            place_to.prop('disabled', true);
            $('#place_to_label').addClass('active');
        } else {
            place_to.prop('disabled', false);
            place_to.val('');
            $('#place_to_label').removeClass('active');
        }
    });
    $('#same_address_from_check').change(function () {
        var place_from = $('#place_from');
        if (!place_from.prop("disabled")) {
            var address = $('#patient_address').val();
            place_from.val(address);
            place_from.prop('disabled', true);
            $('#place_from_label').addClass('active');
        } else {
            place_from.prop('disabled', false);
            place_from.val('');
            $('#place_from_label').removeClass('active');

        }
    });
    $('#service_form').submit(function () {
        $.post("http://www.crocerossagabio.it/Public/sendPDF.php", $("#service_form").serialize());
        return false;
    });


    $('#patient_address').focusout(function () {
        $('#patient_address').addClass('showplaceholder');
    });
    $('#place_from').focusout(function () {
        $('#place_from').addClass('showplaceholder');
    });
    $('#place_to').focusout(function () {
        $('#place_to').addClass('showplaceholder');
    });

    //Feature da considerare:
    //se un campo non è compilato scriverà un messaggio di errore
    //ma si incastra con alcuni input come quelli per la ricerca degli indirizzi
    //o per la data e l'ora
    
    // $('input').each(function () {
    //     $(this).blur(function () {
    //         if ($(this).val().length == 0) {
    //             var x = $(this).closest('.input-field');
    //             console.log('tutto va');
    //             x.children('label').attr('data-error','Compila il campo');
    //             x.children('label').addClass('active');
    //             x.children('i').addClass('active');
    //             $(this).addClass('invalid');
    //             console.log('anche qui');
    //         }
    //     });
    // });
});