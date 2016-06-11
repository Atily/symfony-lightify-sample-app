/**
 * Created by robin on 11.06.16.
 */

$('input[data-lightify-action="toggleOnOff"]').on('switchChange.bootstrapSwitch', function(event, state) {
    $.ajax({
        type: "PUT",
        url: "/app_dev.php/api/devices/" + $(this).attr('data-lightify-device') + "/powers/" + (state ? 1 : 0),
        success: function(data) {
            console.log(data);
        },
        dataType: "json"
    });
});