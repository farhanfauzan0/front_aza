<!DOCTYPE html>
<html lang="en" class="no-js">

@include('layout.header')

<body>
    @include('layout.navbar')
    <title>Katalog</title>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="img-responsive" src="{{ asset('admin/HTML/img/1920x1080/01.jpg') }}" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h1 class="carousel-title"><br>Katalog</h1>
                            <p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br /> enim minim
                                estudiat veniam siad venumus dolore</p>
                        </div>
                        <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-color-sky-light" data-auto-height="true">
        <div class="content-lg container">
            <div class="row row-space-1 margin-b-2">
                <div class="col-sm-4 sm-margin-b-2">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-chemistry"></i>
                            </div>
                            <div class="service-info">
                                <h3>Art Of Coding</h3>
                                <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat
                                    dolor</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 sm-margin-b-2">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-screen-tablet"></i>
                            </div>
                            <div class="service-info">
                                <h3>Responsive Design</h3>
                                <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat
                                    dolor</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-badge"></i>
                            </div>
                            <div class="service-info">
                                <h3>Feature Reach</h3>
                                <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat
                                    dolor</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--// end row -->

            <div class="row row-space-1">
                <div class="col-sm-4 sm-margin-b-2">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-notebook"></i>
                            </div>
                            <div class="service-info">
                                <h3>Useful Documentation</h3>
                                <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat
                                    dolor</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 sm-margin-b-2">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-speedometer"></i>
                            </div>
                            <div class="service-info">
                                <h3>Fast Delivery</h3>
                                <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat
                                    dolor</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".6s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-badge"></i>
                            </div>
                            <div class="service-info">
                                <h3>Free Plugins</h3>
                                <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat
                                    dolor</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
</body>

@include('layout.footer')

</html>
