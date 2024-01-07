<!-- Vendor -->
<script src="//unpkg.com/alpinejs" defer></script>
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

{{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

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
