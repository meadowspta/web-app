var Meadows = {};

$(function() {
	Meadows.statusMessageManager();
	Meadows.wysiwygInit();
});

Meadows.statusMessageManager = function() {
	if (_displayStatusMessage) {
		$('#status-message').slideDown(750);

		setTimeout(function() {
			$('#status-message').slideUp(1500);
		}, 5000);
	}
};

Meadows.wysiwygInit = function() {
	$('#page-body, #post-body, #announcement-body').wysiwyg({
		initialContent: '',
	});
}