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

		//Toolkit Lesson Plan browser
		$(".lesson-tile").click(function() {
            var $tile = $(event.currentTarget);
			var drawerId = $tile.data('categoryId');
            var lessonId = $tile.data('lessonId');
			var $drawer = $("#drawer-"+drawerId);

            $.get('/wp-json/acf/v3/posts/' + lessonId).done(function(response) {
                var fields = response.acf;
                var $fieldElement = $drawer.find('[data-field]');

                $fieldElement.each(function(index, element) {
                    var field = $(element).data('field');

                    switch(field) {
                        case 'synopsis':
                        	var fulltext = fields[field];
                        	var firstSentence = fulltext.substr(0, fulltext.indexOf('.'));
                        	fields[field]=firstSentence+".</span></p>";
                        	break;
                        case 'Included':
                            var html = '';

                            $.each(fields[field], function (index, entry) {
                                var iconSlug = entry.icon.toLowerCase();

                                html += (
                                    $('<li />')
                                    .addClass('icon-' + iconSlug)
                                    .text(function () {
                                        if (iconSlug === 'pdf') {
                                            return 'Lesson Plan';
                                        }

                                        if (iconSlug === 'slides') {
                                            return 'Slides';
                                        }
                                    })
                                    .html()
                                );
                            });

                            fields[field] = html;
                        	break;
                    }

                    $(element).html(fields[field]);
                });

                //console.log(fields)

            });

			$drawer.show( "slow", function(){
				//Animation complete.
			});
		});

	});

})(jQuery, this);
