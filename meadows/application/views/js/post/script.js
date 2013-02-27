Meadows.Post = {};

$(function() {
	Meadows.Post.WysiwygInit();
	Meadows.Post.EventFieldManager();
	Meadows.Post.DeleteHandler();
});

Meadows.Post.WysiwygInit = function() {
	$('#post-body').wysiwyg({
		initialContent: '',
	});
};

Meadows.Post.EventFieldManager = function() {
	// Event fields display init.
	$('#post-form-event-info').hide();
	if ($('#field-is-event:checked').length > 0) {
		$('#post-form-event-info').show();
	}
	
	// Hide/show the event fields depending on the is-event checkbox.
	$('#field-is-event').click(function() {
		if ($('#field-is-event:checked').length > 0) {
			$('#post-form-event-info').slideDown();
		} else {
			$('#post-form-event-info').slideUp();
		}
	});
	
	// Date picker.
	$("#event-start-date").datepicker();
	$("#event-end-date").datepicker();
	$("#publish-date").datepicker();
};

Meadows.Post.DeleteHandler = function() {
	$('#post-delete-button').click(function() {
		if (confirm('Are you sure you want to delete this post?')) {
			return true;
		}
		return false;
	});
};