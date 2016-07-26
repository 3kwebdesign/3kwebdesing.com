var cfg = {
	transitionEnd: 'webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend'
};

$(document).ready(function()
{
	var page = $('#page');
	var header = $('#header');
	var slick_menu_btn = $('#slick-menu-btn');
	var logo = $('#page #header .logo a img');

	normalisePage();

	slick_menu_btn.on('click', function()
	{
		page.toggleClass('slick-menu-off slick-menu-on');
	});

	$(window).on('resize', function()
	{
		if($(this).width() > 768 && page.hasClass('slick-menu-on'))
		{
			page.toggleClass('slick-menu-off slick-menu-on');
		}

		normalisePage();
	});

	document.addEventListener('scroll', function(e)
	{
		if((window.pageYOffset > header.height() && page.hasClass('over-header-off')) ||
		   (window.pageYOffset < header.height() && page.hasClass('over-header-on' )))
		{
			page.toggleClass('over-header-off over-header-on');
		}
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