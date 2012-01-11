var accountChooser = jQuery("#account-chooser");
if (accountChooser.size() == 0){
	var $header = $("#header");
	$header.css({"position": "relative"});
	$header.prepend("<div id='account-chooser' style='position: absolute; z-index:99; float:right; right:2px; top:2px;'></div>");
	// jQuery("<div id='account-chooser' style='position: absolute; z-index:99; float:right; right:16px; top:2px;'></div>").prependTo("#header");
	// var options = git_data['current'];
	$('#account-chooser').accountChooser();
}
