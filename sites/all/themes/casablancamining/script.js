$(document).ready(function ()
{

	ten7.init.stuff();
		
});

ten7 = {};


ten7.init =
{

	stuff: function() {
		
		// auto slideshow of images on the main content page, if it exists    
		$('#t7cycle').before('<div id="t7cyclenav" class="t7cyclenav">').cycle({
		    fx:     'fade',
		    speed:  'slow',
		    timeout: 3000,
		    pager:  '#t7cyclenav',
		    pagerAnchorBuilder: function(idx, slide) { 
		            return '<a href="#">&nbsp;</a>';
		    }
		});

		// hash stuff so we can show the right content on load		
		hsh = window.location.hash;
		hsh = hsh.replace('#', '');
		
		if (hsh) {
			ten7.slider.klik( $('.'+hsh).attr("rel") );
		} else {
			$('.t7_vanski').fadeIn();
		}
		
		// reveals the content slider, if in the menu    
		$('.t7_closer').click(
			function() {
				ten7.slider.klik( $(this).attr("rel") );
			}
		);
		
		// reveals content slider if on the same page
		$('.t7_body a, .t7_body_full a').click(
			function() {
				var cururl = window.location.pathname;
				var hrefurl = $(this).attr('href');
				var pathn = hrefurl.split('#');
				var hache = '';
				
				if (typeof pathn[1] != 'undefined') {
					hache = pathn[1];
				}
 				
				if (cururl==pathn[0] && hache.length>0) {
					var rl = $('.'+hache).attr('rel');
					if (typeof rl != 'undefined') {
						ten7.slider.klik( rl );
					}
				}
				
			}
		)
			    
	}



};

ten7.slider =
{

	klik: function(i) {

		$('.t7_vanski').fadeOut( function() {
			$('#t7children').fadeIn();
	
	    $('#t7children').cycle({ 
		    fx:     'scrollHorz', 
		    speed:  'fast', 
		    timeout: 0, 
		    next:   '.next', 
		    prev:   '.prev', 
	    	startingSlide: i,
	    	after: function(currSlideElement, nextSlideElement, options, forwardFlag) {
	    		window.location.hash = nextSlideElement.title;
	    	}
	    });
	
		});	
		
	}

}



