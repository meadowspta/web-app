Meadows.Page = {};

$(function() {
	Meadows.Page.WysiwygInit();
});

Meadows.Page.WysiwygInit = function() {
	$('#page-body').wysiwyg({
		initialContent: '',
	});
};