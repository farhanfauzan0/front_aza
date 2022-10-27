<!DOCTYPE html>
<html lang="en" class="no-js">

@include('layout.header')

<body>
    @include('layout.navbar')
    <title>Visi Misi</title>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="img-responsive" src="{{ asset('admin/HTML/img/1920x1080/01.jpg') }}" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h1 class="carousel-title"><br>Visi Misi</h1>
                            <p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br /> enim minim
                                estudiat veniam siad venumus dolore</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-lg container">
        <div class="row margin-b-20">
            <div class="col-sm-6">
                <h2>Visi Misi</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-7 sm-margin-b-50">
                <div class="margin-b-30">
                    <p>{{ $visi_misi->visi }}</p>
                </div>
                {{-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret tempor
                    incididunt dolore magna consequat siad minim aliqua. Lorem ipsum dolor sit amet consectetur
                    adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua. Ut enim minim veniam
                    exercitation laboris ut siad consequat siad minim enum esqudiat dolore.</p> --}}
            </div>
            <div class="col-sm-4 col-sm-offset-1">
                <img class="img-responsive" src="{{ asset('admin/HTML/img/640x380/01.jpg') }}" alt="Our Office">
            </div>
        </div>

    </div>
</body>

@include('layout.footer')

</html>
