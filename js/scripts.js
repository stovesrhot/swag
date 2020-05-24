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

        // Takes all hidden favorite buttons and jams them in the drawer. On
        // click of the lesson the proper button is found and visually un-hidden
        $('[data-hidden-favorite-button]').each(function (index, button) {
            var lessonId = $(button).data('hiddenFavoriteButton');
            var categoryId = $(button).data('hiddenFavoriteButtonTo');
            var $drawer = $('#drawer-' + categoryId);

            $('.button[data-field]', $drawer).append(button);
        });

		$(".lesson-tile").click(function() {
			$(".active-tile").removeClass("active-tile");
			$(this).addClass("active-tile");
			$(".drawer").hide( "slow", function(){
				//Animation complete.
			});

            var $tile = $(event.currentTarget);
			var drawerId = $tile.data('categoryId');
            var lessonId = $tile.data('lessonId');
			var $drawer = $("#drawer-"+drawerId);
			var drawerTitle = "#drawer-"+drawerId+" .drawer-title";
			var drawerPermalink = "#drawer-"+drawerId+" a.drawer-permalink";

			$.get('/wp-json/wp/v2/posts/' + lessonId).done(function(response) {
				$(drawerTitle).html(response.title.rendered);
				$(drawerPermalink).attr("href", response.link);
			});

            $.get('/wp-json/acf/v3/posts/' + lessonId).done(function(response) {
                var fields = response.acf;
                var $fieldElement = $drawer.find('[data-field]');

                $fieldElement.each(function(index, element) {
                    var field = $(element).data('field');

                    switch(field) {
                        case 'synopsis':
                        	var fulltext = fields[field];
                        	var firstSentence = fulltext.substr(0, fulltext.indexOf('.'));
                        	fields[field]=firstSentence+".</span></p>";
                        	break;
                        case 'Included':
                            var htmlcode = '';

                            $.each(fields[field], function (index, entry) {
                                var iconSlug = entry.icon.toLowerCase();

                                htmlcode += (
                                    $('<li></li>')
                                    .append(function () {
                                        if (iconSlug === 'pdf') {
                                            return '<li class="icon-pdf">Lesson Plan</li>';
                                        }

                                        if (iconSlug === 'slides') {
                                            return '<li class="icon-slides">Slides</li>';
                                        }
                                    })
                                    .html()
                                );
                            });


                            fields[field] = $.parseHTML(htmlcode);
                        	break;
                    }

                    $(element).html(fields[field]);

                    // Finds all of the injected, hidden favorite buttons and
                    // shows the proper one, per lesson drawer expansion
                    if ($(element).is('[data-field=favorite]')) {
                        $(element)
                            .children()
                            .addClass('visually-hidden')
                                .filter('[data-hidden-favorite-button=' + lessonId + ']')
                                .removeClass('visually-hidden');
                    }
                });
            });

			$drawer.show( "slow", function(){
				//Animation complete.
			});
		});

		//Scroll thru Lessons arrows
		$(".lesson-arrow-right").click(function(){
			var $tile = $(event.currentTarget);
			var drawerId = $tile.data('categoryId');
			var $catId = ".cat"+drawerId;
			var section1 = "#cat"+drawerId+"-section1";
			var section2 = "#cat"+drawerId+"-section2";
			$(section1).animate({
				left:"-1100px"
				}, function(){
				//Animation complete.
			});
			$(section2).animate({
				left:"-1100px"
				}, function(){
				//Animation complete.
			});
			$($catId + " .lesson-arrow-left").show();
			$($catId + " .lesson-arrow-right").hide();
		});

		$(".lesson-arrow-left").click(function(){
			var $tile = $(event.currentTarget);
			var drawerId = $tile.data('categoryId');
			var $catId = ".cat"+drawerId;
			var section1 = "#cat"+drawerId+"-section1";
			var section2 = "#cat"+drawerId+"-section2";
			$(section1).animate({
				left:"0px"
				}, function(){
				//Animation complete.
			});
			$(section2).animate({
				left:"0px"
				}, function(){
				//Animation complete.
			});
			$($catId + " .lesson-arrow-left").hide();
			$($catId + " .lesson-arrow-right").show();
		});

		//Smooth-scrolling
		$(function() {
		  $('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
				$('html, body').animate({
				  scrollTop: target.offset().top
				}, 500);
				return false;
			  }
			}
		  });
		});

	});

})(jQuery, this);
