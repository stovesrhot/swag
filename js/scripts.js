(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		
		//Search Feature
		$( "#search-icon" ).click(function() {
		  $( "#form-wrap" ).show( "slow", function() {
			// Animation complete.
		  });
		});
		
		//Accordion Feature
		$( function() {
			$( "#accordion" ).accordion({
				heightStyle: "content",
				collapsible: true,
				active: false,
				icons: { "header": "ui-icon-plusthick", "activeHeader": "ui-icon-minusthick" }
			});
		} );
		
		$(".lesson-tile").click(function() {
			var lessonid = $(this).data('id');
			var drawer = "#drawer-"+lessonid;
			console.log(drawer);
			$( drawer ).show( "slow", function(){
				//Animation complete.
				console.log('+');
			});
		});
		
	});
	
})(jQuery, this);
