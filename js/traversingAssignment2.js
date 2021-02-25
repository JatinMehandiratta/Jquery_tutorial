$(document).ready(function () {
    addRow();
    const localCount = window.localStorage.getItem('count');
    let counter = localCount;

    function addRow() {
        $('#addAnother').click(function () {
            counter++;
            var newrow = $('#myform').append('<div class="row mt-1 mb-1 p-1" id="row' + counter + '"><div class="col-md-5"><input type="file" id="image" class="form-control"></div> <div class="col-md-5"><select class="form-control" id="select"><option selected disabled>Choose an Option</option><option>Primary Image</option><option>Secondary Image</option></select></div><span class="col-md-2"><input type="button" id="' + counter + '" value="Remove" class="btn btn-danger btn-sm remove"></span></div>');
            window.localStorage.setItem('count', counter);
        });
    }

    $(document).on('click', ".remove", function () {
        var button_id = $(this).attr("id");
        $('#row' + button_id).remove();
        const localCount = window.localStorage.getItem('count');
        let counter = localCount;
        counter--;
        window.localStorage.setItem('count', counter);
    });
});
$(window).on('load', function () {
    const localCount = window.localStorage.getItem('count');
    if (localCount) {
        for (let i = 1; i != localCount; i++) {
            $('#myform').append('<div class="row mt-1 mb-1 p-1" id="row' + i + '"><div class="col-md-5"><input type="file" id="image" class="form-control"></div> <div class="col-md-5"><select class="form-control" id="select"><option selected disabled>Choose an Option</option><option>Primary Image</option><option>Secondary Image</option></select></div><span class="col-md-2"><input type="button" id="' + i + '" value="Remove" class="btn btn-danger btn-sm remove"></span></div>');
        }
    } else {
        console.log('not present in storage. Find a tactic to handle this');
    }
});