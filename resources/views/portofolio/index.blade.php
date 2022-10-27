<!DOCTYPE html>
<html lang="en" class="no-js">

@include('layout.header')

<body>
    @include('layout.navbar')
    <title>Portofolio</title>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="img-responsive" src="{{ asset('admin/HTML/img/1920x1080/01.jpg') }}" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h1 class="carousel-title"><br>Portofolio</h1>
                            <p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br /> enim minim
                                estudiat veniam siad venumus dolore</p>
                        </div>
                        <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="promo-section overflow-h">
        <div class="container">
            <div class="clearfix">
                <div class="ver-center">
                    <div class="ver-center-aligned">
                        <div class="promo-section-col">
                            <h2>Our Clients</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret
                                dolore magna aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur
                                adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam
                                exercitation</p>
                            <p>Ipsum dolor sit amet consectetur adipiscing elit sed tempor incididut ut sead laboret
                                dolore magna aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur
                                adipiscing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="promo-section-img-right">
            <img class="img-responsive" src="{{ asset('admin/HTML/img/970x970/01.jpg') }}" alt="Content Image">
        </div>
    </div>
</body>

@include('layout.footer')

</html>
