$(document).ready(function()
{
	var page = $('#page');
	var slick_menu_btn = $('#slick-menu-btn');

	normalisePage();

	slick_menu_btn.on('click', function()
	{
		page.toggleClass('slick-menu-off slick-menu-on');
	});

	$(window).on('resize', function()
	{
		if($(this).width() > 768 && page.attr('class') === 'slick-menu-on')
		{
			page.toggleClass('slick-menu-off slick-menu-on');
		}

		normalisePage();
	});

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