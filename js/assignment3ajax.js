$(document).ready(function () {
    var $pagination = $('#pagination'),
        totalRecords = 0,
        records = [],
        displayRecords = [],
        recPerPage = 5,
        page = 1,
        totalPages = 0;
    $.ajax({
        url: 'assignment3.json',
        dataType: 'json',
        success: function (person) {
            records = person;
            console.log(records);
            totalRecords = records.length;
            totalPages = Math.ceil(totalRecords / recPerPage);
            apply_pagination();
        },
    });
    function generate_table() {
        var tr;
        $('#tbody').html('');
        for (var i = 0; i < displayRecords.length; i++) {
            tr = $('<tr/>');
            tr.append("<td>" + displayRecords[i].name + "</td>");
            tr.append("<td>" + displayRecords[i].email + "</td>");
            tr.append("<td>" + displayRecords[i].message + "</td>");
            tr.append("<td>" + displayRecords[i].date + "</td>");
            $('#tbody').append(tr);
        }
    }
    function apply_pagination() {
        $pagination.twbsPagination({
            totalPages: totalPages,
            visiblePages: 6,
            onPageClick: function (event, page) {
                displayRecordsIndex = Math.max(page - 1, 0) * recPerPage;
                endRec = (displayRecordsIndex) + recPerPage;

                displayRecords = records.slice(displayRecordsIndex, endRec);
                generate_table();
            }
        });
    }
});
