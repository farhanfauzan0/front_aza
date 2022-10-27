<!DOCTYPE html>
<html lang="en" class="no-js">

@include('layout.header')

<body>
    @include('layout.navbar')
    <title>Produk</title>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="img-responsive" src="{{ asset('admin/HTML/img/1920x1080/01.jpg') }}" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h1 class="carousel-title"><br>Produk</h1>
                            <p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br /> enim minim
                                estudiat veniam siad venumus dolore</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-lg container">
        <div class="row margin-b-40">
            <div class="col-sm-6">
                <h2>Produk</h2>
                {{-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna
                    aliqua enim minim veniam exercitation</p> --}}
            </div>
        </div>
        <!--// end row -->

        @foreach ($product as $value)
            <div class="row margin-b-50">
                <!-- Our Exceptional Solutions -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive"
                                src="{{ url('https://backend.ala-group.id/ala-backend/public/uploads/2022/09/19/ALA/produk/WhatsApp%20Image%202022-09-15%20at%2014.14.16~220919102253.jpeg') }}"
                                alt="Our Exceptional Solutions Image">
                        </div>
                    </div>
                    <h3><a href="#">{{ $value->nama }}</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor
                            magna ut
                            consequat siad esqudiat dolor</p>
                </div>
                <!-- End Our Exceptional Solutions -->

                <!-- Our Exceptional Solutions -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive"
                                src="{{ url('https://backend.ala-group.id/ala-backend/public/uploads/2022/09/21/ALA/produk/logoonly~220921034543.png') }}">
                        </div>
                    </div>
                    <h4><a href="#">{{ $value->nama }}</a> <span class="text-uppercase margin-l-20">Design</span>
                    </h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor
                        magna ut
                        consequat siad esqudiat dolor</p>
                    {{-- <a class="link" href="#">Read More</a> --}}
                </div>
                <!-- End Our Exceptional Solutions -->

                <!-- Our Exceptional Solutions -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive"
                                src="{{ url('https://backend.ala-group.id/ala-backend/public/uploads/2022/09/19/ALA/produk/WhatsApp%20Image%202022-09-15%20at%2014.14.16~220919102253.jpeg') }}"
                                alt="Our Exceptional Solutions Image">
                        </div>
                    </div>
                    <h3><a href="#">{{ $value->nama }}</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor
                            magna ut
                            consequat siad esqudiat dolor</p>
                </div>
                <!-- End Our Exceptional Solutions -->
            </div>
        @endforeach

        <!--// end row -->

    </div>
</body>

@include('layout.footer')

</html>
