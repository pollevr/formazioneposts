(function() {
	tinymce.create('tinymce.plugins.formazioneposts', {
		init : function(ed, url) {
			ed.addCommand('formazioneposts', function() {
				ed.windowManager.open({
					//file : '/wp-admin/admin-ajax.php?action=window_settings',
					file : url + '/tinymce/window.php',
					width : 500,
					height : 300,
					inline : 1
				}, {
					plugin_url : url
				});
			});
			ed.addButton('formazioneposts', {title : 'Formazione Posts', cmd : 'formazioneposts', image: url + '/images/formazionepostsbutton.png' });
		},
		getInfo : function() {
			return {
	            longname : "Formazione Posts",
	            author : 'Polle',
	            authorurl : 'http://wordpress.org',
	            infourl : 'http://wordpress.org',
				version : tinymce.majorVersion + "." + tinymce.minorVersion
			};
		}
	});
	tinymce.PluginManager.add('formazioneposts', tinymce.plugins.formazioneposts);
})();