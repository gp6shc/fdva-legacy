setTimeout(function(){
	(function($) { // Functions go before onReady
		function equalize(){
			var maxHeight = -1;
			$('.home .grid').each(function(index){
				$(this).height('auto');
				maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
			});
			$('.home .grid').each(function() {
				$(this).height(maxHeight);
			});
		}
		$(function() { // onReady code goes in here:
			equalize();
			$(window).resize(function() {
				equalize();
			});
			$('#slideshow').bjqs({
				'rotationSpeed' : 6000,
				'width' : 970,
				'height' : 290,
				'showMarkers' : true,
				'showControls' : true,
				'centerMarkers' : false
			});
		})
	})(jQuery);
},500);