<!-- Vendor -->
<script src="{{ asset('file') }}/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('file') }}/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="{{ asset('file') }}/vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="{{ asset('file') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('file') }}/vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="{{ asset('file') }}/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="{{ asset('file') }}/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="{{ asset('file') }}/vendor/lazysizes/lazysizes.min.js"></script>
<script src="{{ asset('file') }}/vendor/isotope/jquery.isotope.min.js"></script>
<script src="{{ asset('file') }}/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="{{ asset('file') }}/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('file') }}/vendor/vide/jquery.vide.min.js"></script>
<script src="{{ asset('file') }}/vendor/vivus/vivus.min.js"></script>
<script src="{{ asset('file') }}/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

{{-- <script src="{{ asset('file') }}/vendor/particles/particles.min.js"></script> --}}

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('file') }}/js/theme.js"></script>

<!-- Demo -->
<script src="{{ asset('file') }}/js/demos/demo-medical.js"></script>

<!-- Theme Custom -->
<script src="{{ asset('file') }}/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="{{ asset('file') }}/js/theme.init.js"></script>

{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcl-u8ABDp00NpCG16G05_RA-A5CXhefk"></script> --}}

<!--(bake-start _if="contact-map")-->
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcl-u8ABDp00NpCG16G05_RA-A5CXhefk"></script> --}}
{{-- <script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- https://www.latlong.net/
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "New York, NY 10017",
				html: "<strong>Porto</strong><br>New York, NY 10017",
				icon: {
					image: "img/demos/business-consulting-4/map-pin.png",
					iconsize: [31, 40],
					iconanchor: [14, 40]
				},
				popup: false
			},{
				address: "Chicago, IL",
				html: "<strong>Porto</strong><br>Chicago, IL",
				icon: {
					image: "img/demos/business-consulting-4/map-pin.png",
					iconsize: [31, 40],
					iconanchor: [14, 40]
				},
				popup: false
			},{
				address: "Louisville",
				html: "<strong>Porto</strong><br>Louisville",
				icon: {
					image: "img/demos/business-consulting-4/map-pin.png",
					iconsize: [31, 40],
					iconanchor: [14, 40]
				},
				popup: false
			}];

			// Map Initial Location
			var initLatitude = 40.75198;
			var initLongitude = -73.96978;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: (($.browser.mobile) ? false : true),
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 5
			};

			var map = $('#googlemaps').gMap(mapSettings),
				mapRef = $('#googlemaps').data('gMap.reference');

			var mapRef = $('#googlemaps').data('gMap.reference');

			// Styles from https://snazzymaps.com/
			var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#F4F9FD"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#F4F9FD"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

			var styledMap = new google.maps.StyledMapType(styles, {
				name: 'Styled Map'
			});

			mapRef.mapTypes.set('map_style', styledMap);
			mapRef.setMapTypeId('map_style');

</script> --}}
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>
    function addSubscribe() {
        let subscriber_email = $('#newsletterEmail').val();
        let regex = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/
        if (regex.test(subscriber_email) === false) {
            alert('Please enter a valid subscriber email');
            return false
        }
        fetch("/add-subscriber-email", {
            method: "POST",
            headers: {
                "Content-type": "application/json; charset=UTF-8"
            }
        });
    }
</script>
