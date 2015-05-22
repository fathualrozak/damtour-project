$('.linked-row').click(function(){
    window.location = $(this).attr('route');
});

$('.bootstrap-select').on('open', function(){
    alert(1);
});

console.log($('#jamaah-select-group'));

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

$('.select-picker')
.selectpicker({
    liveSearch: true
})
.ajaxSelectPicker({
    ajax: {
        url: '/jamaah',
        data: function () {
            var params = {
                q: '{{{q}}}'
            };
            if(gModel.selectedGroup().hasOwnProperty('ContactGroupID')){
                params.GroupID = gModel.selectedGroup().ContactGroupID;
            }
            return params;
        }
    },
    locale: {
        emptyTitle: 'Search for contact...'
    },
    preprocessData: function(data){
        var contacts = [];
        if(data.hasOwnProperty('Contacts')){
            var len = data.Contacts.length;
            for(var i = 0; i < len; i++){
                var curr = data.Contacts[i];
                contacts.push(
                    {
                        'value': curr.ContactID,
                        'text': curr.FirstName + ' ' + curr.LastName,
                        'data': {
                            'icon': 'icon-person',
                            'subtext': 'Internal'
                        },
                        'disable': false
                    }
                );
            }
        }
        return contacts;
    },
    preserveSelected: false
});