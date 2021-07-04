(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });

	// API COUNTRY_CODE_TEL
	 // $("#mobile-number").intlTelInput({
  //         initialCountry: "auto",
  //         geoIpLookup: function(callback) {
  //           $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
  //             var countryCode = (resp && resp.country) ? resp.country : "";
  //             callback(countryCode);
  //           });
  //         },
  //         utilsScript: "../../build/js/utils.js" // just for formatting/placeholders etc
  //       });

})(jQuery);
