var Meadows = {};

$(function() {
	Meadows.statusMessageManager();
	Meadows.wysiwygInit();
	Meadows.homepage();
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
	if ($('#page-body, #post-body, #announcement-body').length > 0) {
		$('#page-body, #post-body, #announcement-body').wysiwyg({
			initialContent: '',
		});
	}
}

Meadows.homepage = function() {
	$('.list-news .details').hide();
	$('.list-news button').removeClass('hide');
	$('.list-news-read-more').click(function() {
		$('.list-news .hook').hide();
		$('.list-news .details').slideDown();
	});
}