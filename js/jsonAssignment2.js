
$.ajax({
    url: 'assignment2.json',
    dataType: 'json',
    success: function (person) {
        for (var i = 0; i < person.length; i++) {
            var row = $('<tr><td>' + person[i].firstname + '</td><td>' + person[i].lastname + '</td><td>' + person[i].dob + '</td></tr>');
            $('#tbody').append(row);
        }
    },
    error: function (jqXHR, textStatus, errorThrown) {
        alert('Error: ' + textStatus + ' - ' + errorThrown);
    }
});
