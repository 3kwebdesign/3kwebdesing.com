$(document).ready(function()
{
	var home_page = $('#home-page');
	var krul_page = $('#krul-page');
	var kolcava_page = $('#kolcava-page');
	var konecny_page = $('#konecny-page');

	var currentPage = home_page;

	setPageSize();

	if(screen.width > 768)
	{
		var all = $('body *'), i;
		all.css({'opacity': '0'});
	
		for (i = 0; i < all.length; i++)
		{
			(function(index)
			{
        		window.setTimeout(function()
        		{ 
        			$(all[index]).animate({'opacity': '1'}, 400);
        		}, index * 30);
    		})(i);
		}
	}

	$('#krul-circle').on('click', function(){
		movePageLeft(home_page, krul_page);
	});

	$('#kolcava-circle').on('click', function(){
		movePageLeft(home_page, kolcava_page);
	});

	$('#konecny-circle').on('click', function(){
		movePageLeft(home_page, konecny_page);
	});

	$('.back-button').on('click', function(){
		movePageRight(home_page, currentPage);
	});


	$(window).on('resize', setPageSize);

	function setPageSize()
	{
		if(home_page.css('display') === 'block')
		{
			krul_page.css('left', home_page.width() + 'px');
			kolcava_page.css('left', home_page.width() + 'px');
			konecny_page.css('left', home_page.width() + 'px');
		}
		else
		{
			home_page.css('left', -home_page.width() + 'px');
		}
	}

	function movePageLeft(page1, page2)
	{
		var i = 0;
		page2.css('display', 'block');

		function step()
		{
			var page1Pos = Math.max(page1.position().left - 26, -window.innerWidth);
			var page2Pos = Math.max(page2.position().left - 26, 0);

			page1.css('left', page1Pos + 'px');
			page2.css('left', page2Pos + 'px');

			if(page1Pos === -window.innerWidth)
			{
				window.cancelAnimationFrame(timer);
				page1.css('display', 'none');

				currentPage = page2;
			}
			else
			{
				window.requestAnimationFrame(step);
			}
		}

		var timer = window.requestAnimationFrame(step);
	}

	function movePageRight(page1, page2)
	{
		var i = 0;
		page1.css('display', 'block');

		function step()
		{
			var page1Pos = Math.min(page1.position().left + 26, 0);
			var page2Pos = Math.min(page2.position().left + 26, window.innerWidth);

			page1.css('left', page1Pos + 'px');
			page2.css('left', page2Pos + 'px');

			if(page2Pos === window.innerWidth)
			{
				window.cancelAnimationFrame(timer);
				page2.css('display', 'none');

				currentPage = page1;
			}
			else
			{
				window.requestAnimationFrame(step);
			}
		}

		var timer = window.requestAnimationFrame(step);
	}
	
});