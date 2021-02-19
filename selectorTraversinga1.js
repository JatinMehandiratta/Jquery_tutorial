
$(document).ready(function () {
    $('.nested input[type=checkbox]').click(function () {
        $(this).parent().find('li input[type=checkbox]').prop('checked', $(this).is(':checked'));
        var sibs = false;
        $(this).closest('ul').children('li').each(function () {
            if ($('input[type=checkbox]', this).is(':checked')) sibs = true;
        })
        $(this).parents('ul').prev().prop('checked', sibs);
    });

    $('input[type=checkbox]').click(function () {
        if (this.checked) { // if checked - check all parent checkboxes
            $(this).parents('li').children('input[type=checkbox]').prop('checked', true);
        }
        // children checkboxes depend on current checkbox
        $(this).parent().find('input[type=checkbox]').prop('checked', this.checked);
    });
    $.each($('.nested ul li').find(':checkbox'), function () {
        $(this).change(function () {
            if ($(this).is(':checked')) {
                $(this).parentsUntil('.nested').siblings().filter('input:checkbox').attr('checked', true).trigger('change');
            } else {
                $(this).parents('ul:first').siblings('input:checkbox').prop('checked', $(this).parent().siblings().children('input:checked').length).trigger('change');
            }
        });
    });
});