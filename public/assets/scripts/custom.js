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


$('[data-toggle="tooltip"]').tooltip();

$('button').click(function(e) {
    e.preventDefault();
    alert("This is a demo.\n :-)");
});


/*
 * Jamaah Selector
 * ==========================
 * */
$(".jamaah-selector").select2({
    ajax: {
        url: "http://admin.damtour.co.id/jamaah",
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
        '<div clas="col-sm-10">' +
        '<div class="clearfix">' +
        '<div class="col-sm-6">' + jamaah.firstname + ' ' + jamaah.lastname + '</div>' +
        '<div class="col-sm-6"><i class="fa fa-credit-card"></i> ' + jamaah.idcard_number + '</div>' +
        '</div>';

    markup += '</div></div>';

    return markup;
}

function formatJamaahSelection (jamaah) {
    return jamaah.firstname + ' ' + jamaah.lastname + ' - ' + jamaah.idcard_number;
}

/*
 * Program Selector
 * ==========================
 * */
$(".program-selector").select2({
    ajax: {
        url: "http://admin.damtour.co.id/program",
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
        '<div class="col-sm-12"><h4>' + program.service + ' ' + program.category + '</h4></div>' +
        '<div class="col-sm-6">' + program.name + '</div>' +
        '<div class="col-sm-6"><i>' + program.price + '</i></div>' +
        '<div class="col-sm-6">' + program.package + '</div>' +
        '<div class="col-sm-6"><i>' + program.schedule + ' (' + program.days_length + ')</i></div>' +
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
$(".parent-selector, .sponsor-selector").select2({
    ajax: {
        url: "http://admin.damtour.co.id/network",
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
        '<div class="col-sm-12"><h4>' + parent.name + '</h4></div>' +
        '</div>';
    markup += '</div>';

    return markup;
}

function formatParentSelection (parent) {
    return parent.id;
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