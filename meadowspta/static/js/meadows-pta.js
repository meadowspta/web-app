var MeadowsPTA = {};

$(function() {
    MeadowsPTA.eventAdminForm();
});

/*
Meadows.statusMessageManager = function() {
    if (_displayStatusMessage) {
        $('#status-message').slideDown(750);

        setTimeout(function() {
            $('#status-message').slideUp(1500);
        }, 5000);
    }
};
*/

MeadowsPTA.eventAdminForm = function() {
  $('#id_is_all_day').change(function() {
    if ($(this).prop('checked')) {
      $('#id_start_date_1').val('00:00:00');
      $('#id_end_date_1').val('00:00:00');
    } else {
      $('#id_start_date_1').val('');
      $('#id_end_date_1').val('');
    }
  });
}