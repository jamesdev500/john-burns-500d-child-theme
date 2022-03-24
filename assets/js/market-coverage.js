! function($) {

    "use strict";

    $(document).ready(function() {

        let dataGroup = ['mrkt-covrge-1', 'mrkt-covrge-2', 'mrkt-covrge-3', 'mrkt-covrge-4', 'mrkt-covrge-5'];

        $(document).on('change', '#mapplic-id2934 :checkbox', function() {
            var groupId = $(this).attr('data-group');
            $('#mapplic-id2934 .mapplic-toggle > input').prop('checked', false);
            $('#mapplic-id2934 .mapplic-toggle > input[data-group="' + groupId + '"]').prop('checked', true);


            $('#mapplic-id2934 a.mapplic-pin').each(function() {
                var attr = $(this).attr('data-category');
                if (attr == groupId) $(this).toggle(true);
                else { // multi-group support
                    var groups = attr.split(','),
                        show = false;
                    groups.forEach(function(g) { if ($('.mapplic-toggle > input[data-group="' + g + '"]')[0].checked) show = true; });
                    $(this).toggle(show);
                }
            });

        });

    });

}(jQuery);