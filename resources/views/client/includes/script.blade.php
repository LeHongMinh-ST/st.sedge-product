<script src="{{ asset('assets/client/js/jquery-3.6.3.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{ asset('assets/client/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/client/js/bootstrap.min.js')}}"></script>
<!-- magnific-popup js -->
<script src="{{ asset('assets/client/js/jquery.magnific-popup.min.js')}}"></script>
<!-- owl-carousel js -->
<script src="{{ asset('assets/client/js/owl.carousel.min.js')}}"></script>
<!-- swiper-slider js -->
<script src="{{ asset('assets/client/js/swiper-bundle.min.js')}}"></script>
<!-- slick js -->
<script src="{{ asset('assets/client/js/slick.min.js')}}"></script>
<!-- waypoints js -->
<script src="{{ asset('assets/client/js/waypoints.min.js')}}"></script>
<!-- counter js -->
<script src="{{ asset('assets/client/js/counter.js')}}"></script>
<!-- main js -->
<script src="{{ asset('assets/client/js/main.js')}}"></script>
<!-- select2 js -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- js_custom --}}
@yield('script_custom')
{{-- js_custom --}}
@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('post-created', (event) => {
            Swal.fire({
                title: "Đặt hàng thành công!",
                icon: "success",
                showConfirmButton: false,
                timer:2000,
            });
        });
    });
</script>
<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('error-quantity', (event) => {
            Swal.fire({
                icon: "error",
                title: "Thông báo",
                text: "Số lượng sản phẩm trong kho không đủ!",
            });
        });
    });
</script>

