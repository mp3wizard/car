(function() 
{
	
	var cloud1 = document.getElementById('cloud1');
	var cloud1_img = document.getElementById('cloud1_img');
	var isFadeOut = false;

	function onStart1() 
	{
		TweenLite.to(cloud1_img, 0, {css:{alpha:0}});
		TweenLite.to(cloud1_img, 1, {delay:1, css:{alpha:.5}});

		isFadeOut = false;
	}

	function onUpdate1()
	{
		if(cloud1.offsetLeft > 750)
		{
			if(isFadeOut)
				return;

			isFadeOut = true;

			TweenLite.to(cloud1_img, 1, {css:{alpha:0}});
		}
	}

	function play1() 
	{
		cloud1.style.marginLeft = "400px";
		cloud1.style.marginTop = "100px";

		var t1 = new TimelineLite({repeats:-1});
		t1.to(cloud1, 48, {css:{marginLeft:800, ease:Linear.easeNone}, onStart:onStart1, onUpdate:onUpdate1})
		.call(play1);
	}
	play1();

	var cloud2 = document.getElementById('cloud2');
	var cloud2_img = document.getElementById('cloud2_img');
	var isFadeOut = false;

	function onStart2() 
	{
		TweenLite.to(cloud2_img, 0, {css:{alpha:0}});
		TweenLite.to(cloud2_img, 1, {delay:1, css:{alpha:.5}});

		isFadeOut = false;
	}

	function onUpdate2()
	{
		if(cloud2.offsetLeft > 750)
		{
			if(isFadeOut)
				return;

			isFadeOut = true;

			TweenLite.to(cloud2_img, 2, {css:{alpha:0}});
		}
	}

	function play2() 
	{
		cloud2.style.marginLeft = "400px";
		cloud2.style.marginTop = "-20px";
		cloud2.style.width = "100px";

		var t2 = new TimelineLite({repeats:-1});
		t2.to(cloud2, 16, {css:{marginLeft:800, marginTop:-20, ease:Linear.easeNone}, onStart:onStart2, onUpdate:onUpdate2})
		.call(play2);
	}
	play2();
})();