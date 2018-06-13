jQuery( document ).ready(function() {
	showtab(0, 5);

	jQuery("#hero").css("margin-top", jQuery("#topnav").height() * 1.5);
});

function showtab(no, total)
{
	for(i = 0; i < total; i++) {
		if(i == no) continue;

		jQuery("#tab_" + i).hide();
	}

	jQuery("#tab_" + no).show();
}

function showmodal(content)
{
	// Show overlay in all cases
	jQuery("#overlay").show();


	var closeLink = '<br><a href="javascript:closemodal();">Close</a>';
	jQuery("#modal").html(content + closeLink);
	jQuery("#modal").show();
}

function closemodal()
{
	jQuery("#overlay").hide();

	jQuery("#modal").hide();
}

// Close modal when you click outside it
jQuery(document).click(function(event) {
	if(!jQuery(event.target).closest("#modal").length) {
		closemodal();
	}
});