$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('.linked-row').click(function(){
    window.location = $(this).attr('route');
});

$('.bootstrap-select').on('open', function(){
    alert(1);
});

var panels = $('.user-infos');
var panelsButton = $('.dropdown-user');
panels.hide();

//Click dropdown
panelsButton.click(function() {
    //get data-for attribute
    var dataFor = $(this).attr('data-for');
    var idFor = $(dataFor);

    //current button
    var currentButton = $(this);
    idFor.slideToggle(400, function() {
        //Completed slidetoggle
        if(idFor.is(':visible'))
        {
            currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
        }
        else
        {
            currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
        }
    })
});


/*
 * Jamaah Selector
 * ==========================
 * */
var jamaah_api_route = $('#jamaah_api_route').val();
$(".jamaah-selector").select2({
    ajax: {
        url: jamaah_api_route,
        method: 'GET',
        dataType: 'json',
        delay: 100,
        data: function (params) {
            return {
                q: params.term,
                page: params.page
            };
        },
        processResults: function (data, params) {
            params.page = params.page || 1;

            return {
                results: data,
                pagination: {
                    more: (params.page * 30) < data.length
                }
            };
        },
        cache: true
    },
    escapeMarkup: function (markup) { return markup; },
    minimumInputLength: 2,
    templateResult: formatJamaah,
    templateSelection: formatJamaahSelection
});

function formatJamaah (jamaah) {
    if (jamaah.loading) return jamaah.text;
    var markup = '<div class="clearfix">' +
        '<div clas="col-sm-12">' +
        '<div class="clearfix">' +
        '<div class="col-sm-6">' + jamaah.firstname + ' ' + jamaah.lastname + '</div>' +
        '<div class="col-sm-6">' + jamaah.address.district.name + ' - ' + jamaah.address.city.name + '</div>' +
        '</div>';

    markup += '</div></div>';

    return markup;
}

function formatJamaahSelection (jamaah) {
    return jamaah.firstname + ' ' + jamaah.lastname + ' (' + jamaah.address.district.name + ' - ' + jamaah.address.city.name +')';
}

/*
 * Program Selector
 * ==========================
 * */

var program_api_route = $('#program_api_route').val();
$(".program-selector").select2({
    ajax: {
        url: program_api_route,
        method: 'GET',
        dataType: 'json',
        delay: 100,
        data: function (params) {
            return {
                q: params.term,
                page: params.page
            };
        },
        processResults: function (data, params) {
            params.page = params.page || 1;

            return {
                results: data,
                pagination: {
                    more: (params.page * 30) < data.length
                }
            };
        },
        cache: true
    },
    escapeMarkup: function (markup) { return markup; },
    minimumInputLength: 2,
    templateResult: formatProgram,
    templateSelection: formatProgramSelection
});

function formatProgram (program) {
    if (program.loading) return program.text;
    var markup = '<div class="clearfix">' +
        '<div clas="col-sm-10">' +
        '<div class="clearfix">' +
        '<div class="col-sm-12"><h4>' + program.name + '</h4></div>' +
        '<div class="col-sm-6">Layanan: ' + program.service + ' ' + program.category + '</div>' +
        '<div class="col-sm-6"><i>' + program.price + '</i></div>' +
        '<div class="col-sm-6">Paket: ' + program.package + '</div>' +
        '<div class="col-sm-6"><i>' + program.schedule + ' s/d ' + program.schedule_end + '</i></div>' +
        '</div>';

    markup += '</div></div>';

    return markup;
}

function formatProgramSelection (program) {
    return program.service + ' ' + program.name + ' - ' + program.price;
}

/*
 * Parent & Sponsor Selector
 * ==========================
 * */
var network_api_route = $('#network_api_route').val();
$(".parent-selector, .sponsor-selector").select2({
    ajax: {
        url: network_api_route,
        method: 'GET',
        dataType: 'json',
        delay: 100,
        data: function (params) {
            return {
                list: true,
                q: params.term,
                page: params.page
            };
        },
        processResults: function (data, params) {
            params.page = params.page || 1;

            return {
                results: data,
                pagination: {
                    more: (params.page * 30) < data.length
                }
            };
        },
        cache: true
    },
    escapeMarkup: function (markup) { return markup; },
    minimumInputLength: 1,
    templateResult: formatParent,
    templateSelection: formatParentSelection
});

function formatParent (parent) {
    if (parent.loading) return parent.text;
    var markup = '<div class="clearfix">' +
        '<div clas="col-sm-10">' +
        '<div class="clearfix">' +
        '<div class="col-sm-12"><h4>' + parent.name + '-' + parent.id + '</h4></div>' +
        '</div>';
    markup += '</div>';

    return markup;
}

function formatParentSelection (parent) {
    return parent.name + '-' + parent.id;
}


/*
* Invoice Selector
* =====================
* */
$(".invoice-selector").select2({
    ajax: {
        url: "http://admin.damtour.co.id/invoice",
        dataType: 'json',
        delay: 100,
        data: function (params) {
            return {
                q: params.term,
                page: params.page
            };
        },
        processResults: function (data, params) {
            params.page = params.page || 1;

            return {
                results: data,
                pagination: {
                    more: (params.page * 30) < data.length
                }
            };
        },
        cache: true
    },
    escapeMarkup: function (markup) { return markup; },
    minimumInputLength: 1,
    templateResult: formatInvoice,
    templateSelection: formatInvoiceSelection
});

function formatInvoice (invoice) {
    if (invoice.loading) return invoice.text;
    var markup = '<div class="clearfix">' +
        '<div clas="col-sm-10">' +
        '<div class="clearfix">' +
        '<div class="col-sm-12"><h4>' + invoice.code + '</h4></div>' +
        '</div>';
    markup += '</div>';

    return markup;
}

function formatInvoiceSelection (invoice) {
    return '#'+invoice.code;
}

/*
 * Program table ajax
 * =====================
 * */
function programAjax(params) {
    var result;
    $.get(params.url, function(data) {
        result =  data;
    });
    setTimeout(function () {
        params.success(result);
        params.complete();
    }, 1000);
}

var program_edit_route = $('#table-program').attr('data-edit-route');

function programOperateFormatter(value, row, index) {
    return [
        '<a class="edit ml10" href="' + program_edit_route + '/' + row.id + '/edit' + '" title="Edit">',
        '<i class="fa fa-edit fa-fw"></i>',
        '</a>'
    ].join('');
}

/*
 * Form create & edit program
 * service_id :
 * 1 = Umroh
 * 2 = Haji
 * =====================
 * */
if ($('form#create-program').length || $('form#edit-program').length ) {
    if ($('#service_id').val() == 1) {
        $('#schedule-input, #schedule-end-input, #payment-before-input').show();
    } else if ($('#service_id').val() == 2) {
        $('#schedule-input, #schedule-end-input, #payment-before-input').hide();
    }

    $('#service_id').change(function(){
        if ($('#service_id').val() == 1) {
            $('#schedule-input, #schedule-end-input, #payment-before-input').show();
        } else if ($('#service_id').val() == 2) {
            $('#schedule-input, #schedule-end-input, #payment-before-input').hide();
            $('#schedule, #schedule-end, #payment_before').val('');
        }
    });
}

/*
 * Jamaah table ajax
 * =====================
 * */
var jamaah_route = $('#table-jamaah').attr('data-route')+'/';
 function jamaahAjax(params) {
    var result;
    $.get(params.url, function(data) {
        result =  data;
    });
    setTimeout(function () {
        params.success(result);
        params.complete();
    }, 1000);
}

$('#table-jamaah').on('click-row.bs.table', function(e, row, $element){
    window.location = jamaah_route + row.id;
});

function jamaahAddressFormatter(value, row, index) {
    return [row.address.district.name, row.address.city.name].join(' - ');
}

function jamaahNameFormatter(value, row, index) {
    return [row.firstname, row.lastname].join(' ');
}

function jamaahGenderFormatter(value, row, index) {
    return (row.gender == 'male') ? 'Laki-laki' : 'Perempuan';
}


//function jamaahOperateFormatter(value, row, index) {
//    return [
//        '<a class="edit ml10" href="' + jamaah_edit_route + '/' + row.id + '/edit' + '" title="Edit">',
//        '<i class="fa fa-edit fa-fw"></i>',
//        '</a>'
//    ].join('');
//}

$("#btn-register-modal").click(function(){
    $("#startWizardModal").modal("hide");
    $("#registrationModal").modal("show");
});
$("#btn-registered-modal").click(function(){
    $("#startWizardModal").modal("hide");
    $("#bookingModal").modal("show");
});