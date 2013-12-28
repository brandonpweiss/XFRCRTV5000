/* ###### MOBILE NAV ###### */
		$(window).resize(function()
		{
			if ($(window).width() > 640)
			{
				$('#sticky_navigation_wrapper').css('display', 'block');
				$('#sticky_navigation_wrapper').removeClass('open');
			}
			else if ($(window).width() < 640)
			{
				$('#sticky_navigation_wrapper').css('display', 'none');
			}
		});

		$(document).ready(function()
		{
			$('#navbttn').click(function()
			{
				$('#sticky_navigation_wrapper').toggleClass('open');
				$('#sticky_navigation_wrapper').slideToggle(250);
			});
		});

/*###### MOBILE SLIDE UP NAV ON CLICK #######*/
		$(document).ready(function()
		{
				$('nav ul li').click(function()
				{
					if (($(window).width() < 640)&&($('#sticky_navigation_wrapper').hasClass('open'))) {
						$('#sticky_navigation_wrapper').removeClass('open');
						$('#sticky_navigation_wrapper').slideToggle(250);
					};
				});
		});

	</script>
<script>
/*####### STICKY NAV SCRIPT ##########*/
	var nav_pos = $('nav').offset().top;
	var i = 0;
	var sticky_nav = function()
	{
		var top_pos = $(window).scrollTop(); // our current vertical position from the top

		if ( (top_pos > nav_pos) && ($(window).width() > 640) )
		{
			$('#sticky_navigation').css({ 'position': 'fixed', 'top':0, 'left':0, 'z-index':999});
		}
		else
		{
			$('#sticky_navigation').css({ 'position': 'relative', 'top':0, 'left':0 });
		}
	};

	$(window).scroll(function()
	{
		if (i <= 0)
		{
			nav_pos = $('nav').offset().top - 0;
			i = 1;
		};
		 sticky_nav();
	});

	$(window).resize(function()
	{
			nav_pos = $('nav').offset().top - 0;
	});
