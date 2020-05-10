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
            var $tile = $(event.currentTarget);
			var drawerId = $tile.data('categoryId');
            var lessonId = $tile.data('lessonId');
			var $drawer = $("#drawer-"+drawerId);

            $.get('/wp-json/acf/v3/posts/' + lessonId).done(function(response) {
                var fields = response.acf;
                var $fieldElement = $('[data-field]');

                $fieldElement.each(function(index, element) {
                    var field = $(element).data('field');

                    //switch(field) {
                    //    case '':
                    //}
                    $(element).html(fields[field]);
                });

                console.log(fields)

            });

			$drawer.show( "slow", function(){
				//Animation complete.
				console.log('+');
			});
		});

	});

})(jQuery, this);
