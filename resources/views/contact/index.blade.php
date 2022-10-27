<!DOCTYPE html>
<html lang="en" class="no-js">

@include('layout.header')

<body>
    @include('layout.navbar')
    <title>Hubungi Kami</title>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="img-responsive" src="{{ asset('admin/HTML/img/1920x1080/01.jpg') }}" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h1 class="carousel-title"><br>Hubungi Kami</h1>
                            <p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br /> enim minim
                                estudiat veniam siad venumus dolore</p>
                        </div>
                        {{-- <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Explore</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-seperator">
        <div class="content-lg container">
            <div class="row">
                <!-- Contact List -->
                <div class="col-sm-6 sm-margin-b-50">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <h3><a href="#">Bogor</a></h3>
                        <p>{{ $profile->alamat }}</p>
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-call-out"></i> {{ $profile->no_telp }}</li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i> {{ $profile->email }}</li>
                        </ul>
                    </div>
                </div>
                <!-- End Contact List -->
            </div>
            <!--// end row -->
        </div>
    </div>
</body>

@include('layout.footer')

</html>
