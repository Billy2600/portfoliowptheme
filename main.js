jQuery( document ).ready(function() {
	showtab(0, 5);
});

function showtab(no, total)
{
	for(i = 0; i < total; i++) {
		if(i == no) continue;

		jQuery("#tab_" + i).hide();
	}

	jQuery("#tab_" + no).show();
}