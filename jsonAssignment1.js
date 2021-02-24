$.ajax({
    url: 'assignment1.json',
    dataType: 'json',
    success: function (person) {
        for (var i = 0; i < person.length; i++) {
            var row = $('<div class="row"><div class="col-md-5"><h2>' + person[i].firstname + '</h2><div><h2>' + person[i].lastname + '</h2></div><div><h4>' + person[i].dob + '</h4></div></div>');
            $('.container').append(row);
        }
    },
    error: function (jqXHR, textStatus, errorThrown) {
        alert('Error: ' + textStatus + ' - ' + errorThrown);
    }
});