
<script src="{{asset('Main/js/jquery.min.js')}}"></script>
<script src="{{asset('Main/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Main/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('Main/js/isotope-docs.min.js?6')}}"></script>
<script src="{{asset('Main/js/main.js')}}"></script>
<script>
    $("#language").change(function () {
        window.location = '/locale/' + $("#language").val();
    });
</script>