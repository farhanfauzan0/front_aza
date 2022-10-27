<footer class="footer">
    <!-- Links -->
    <div class="footer-seperator">
        <div class="content-lg container">
            <div class="row">
                <div class="col-sm-4 sm-margin-b-50">
                    <!-- List -->
                    <ul class="list-unstyled footer-list">
                        <li class="footer-list-item">Hubungi Kami</li>
                        <li class="footer-list-item">Whatsapp : {{ $profile->no_telp }}</li>
                        <li class="footer-list-item">Email : {{ $profile->email }}</li>
                        <li class="footer-list-item">Alamat : {{ $profile->alamat }}</li>
                    </ul>
                    <!-- End List -->
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Links -->

    <!-- Copyright -->
    <div class="content container">
        <div class="row">
            <div class="col-xs-6">
                <img class="footer-logo"
                    src="{{ url('https://backend.ala-group.id/ala-backend/public/uploads/2022/09/21/ALA/produk/logoonly~220921034543.png') }}"
                    alt="Logo">
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Copyright -->
</footer>
<!--========== END FOOTER ==========-->

<!-- Back To Top -->
<a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

<!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- CORE PLUGINS -->
<script src="{{ asset('admin/HTML/vendor/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/HTML/vendor/jquery-migrate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/HTML/vendor/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!-- PAGE LEVEL PLUGINS -->
<script src="{{ asset('admin/HTML/vendor/jquery.easing.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/HTML/vendor/jquery.back-to-top.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/HTML/vendor/jquery.smooth-scroll.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/HTML/vendor/jquery.wow.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/HTML/vendor/swiper/js/swiper.jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/HTML/vendor/masonry/jquery.masonry.pkgd.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/HTML/vendor/masonry/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>

<!-- PAGE LEVEL SCRIPTS -->
<script src="{{ asset('admin/HTML/js/layout.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/HTML/js/components/wow.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/HTML/js/components/swiper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/HTML/js/components/masonry.min.js') }}" type="text/javascript"></script>
