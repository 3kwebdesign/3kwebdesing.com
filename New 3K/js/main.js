$(document).ready(function()
{
	normalisePage();
	$(window).on('resize', normalisePage);

	/*var all = $('body *'), i;
	all.css({'opacity': '0'});
	
	for(i = 0; i < all.length; i++)
	{
		(function(index)
		{
			window.setTimeout(function()
			{
				$(all[index]).animate({'opacity': '1'}, 400);
			}, index * 30);
		})(i);
	}*/
});

function normalisePage()
{
	var item = $('.mainWrap');
	item.width('80%');
	item.width(Math.floor(item.width()));
}