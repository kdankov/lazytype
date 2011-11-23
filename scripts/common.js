jQuery(function(){
	jQuery(".home #site-title").fitText(0.8);
	jQuery(".home #site-description").fitText(3);
});

jQuery(window).load(function() {
	jQuery('span[data-gravatar-hash]').prepend(function(index){
		var hash = jQuery(this).attr('data-gravatar-hash')
		return '<img src="http://www.gravatar.com/avatar.php?size=50&amp;gravatar_id=' + hash + '">'
	})
});
