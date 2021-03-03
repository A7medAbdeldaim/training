@extends('layouts.app')
@section('title', 'Home Page')

@section('content')
    <!-- MENU SECTION END-->

    <div class="tm-paging-links">
        <nav>
            <ul>
                <li class="tm-paging-item"><a href="#" class="tm-paging-link active">Cars</a></li>
                <li class="tm-paging-item"><a href="#" class="tm-paging-link">Bikes</a></li>
            </ul>
        </nav>
    </div>

    <!-- Gallery -->
    <div class="row tm-gallery">
        <!-- gallery page 1 -->
        <div id="tm-gallery-page-cars" class="tm-gallery-page">
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <img src="{{ asset('images/car1.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
                    <figcaption>
                        <h4 class="tm-gallery-title">Fusce dictum finibus</h4>
                        <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
                        <p class="tm-gallery-price">$45 / $55</p>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <img src="{{ asset('images/car2.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
                    <figcaption>
                        <h4 class="tm-gallery-title">Aliquam sagittis</h4>
                        <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
                        <p class="tm-gallery-price">$65 / $70</p>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <img src="{{ asset('images/car3.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
                    <figcaption>
                        <h4 class="tm-gallery-title">Sed varius turpis</h4>
                        <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
                        <p class="tm-gallery-price">$30.50</p>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <img src="{{ asset('images/car2.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
                    <figcaption>
                        <h4 class="tm-gallery-title">Aliquam sagittis</h4>
                        <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
                        <p class="tm-gallery-price">$25.50</p>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <img src="{{ asset('images/car1.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
                    <figcaption>
                        <h4 class="tm-gallery-title">Maecenas eget justo</h4>
                        <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
                        <p class="tm-gallery-price">$80.25</p>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <img src="{{ asset('images/car3.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
                    <figcaption>
                        <h4 class="tm-gallery-title">Quisque et felis eros</h4>
                        <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
                        <p class="tm-gallery-price">$20 / $40 / $60</p>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <img src="{{ asset('images/car3.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
                    <figcaption>
                        <h4 class="tm-gallery-title">Sed ultricies dui</h4>
                        <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
                        <p class="tm-gallery-price">$94</p>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <img src="{{ asset('images/car2.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
                    <figcaption>
                        <h4 class="tm-gallery-title">Donec porta consequat</h4>
                        <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
                        <p class="tm-gallery-price">$15</p>
                    </figcaption>
                </figure>
            </article>
        </div> <!-- gallery page 1 -->

        <!-- gallery page 2 -->
        <div id="tm-gallery-page-bikes" class="tm-gallery-page hidden">
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <img src="{{ asset('images/bike1.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
                    <figcaption>
                        <h4 class="tm-gallery-title">Salad Menu One</h4>
                        <p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
                        <p class="tm-gallery-price">$25</p>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <img src="{{ asset('images/bike2.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
                    <figcaption>
                        <h4 class="tm-gallery-title">Second Title Salad</h4>
                        <p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
                        <p class="tm-gallery-price">$30</p>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <img src="{{ asset('images/bike3.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
                    <figcaption>
                        <h4 class="tm-gallery-title">Third Salad Item</h4>
                        <p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
                        <p class="tm-gallery-price">$45</p>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <img src="{{ asset('images/bike2.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
                    <figcaption>
                        <h4 class="tm-gallery-title">Superior Salad</h4>
                        <p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
                        <p class="tm-gallery-price">$50</p>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <img src="{{ asset('images/bike1.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
                    <figcaption>
                        <h4 class="tm-gallery-title">Sed ultricies dui</h4>
                        <p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
                        <p class="tm-gallery-price">$55 / $60</p>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <img src="{{ asset('images/bike3.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
                    <figcaption>
                        <h4 class="tm-gallery-title">Maecenas eget justo</h4>
                        <p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
                        <p class="tm-gallery-price">$75</p>
                    </figcaption>
                </figure>
            </article>
        </div> <!-- gallery page 2 -->

        <!-- gallery page 3 -->
    </div>

    <div class="tm-section tm-container-inner">
        <div class="row">
            <div class="col-md-6">
                <figure class="tm-description-figure">
                    <img src="{{ asset('images/slider1.jpg') }}" alt="Image" class="img-fluid" />
                </figure>
            </div>
            <div class="col-md-6">
                <div class="tm-description-box">
                    <h4 class="tm-gallery-title">Car</h4>
                    <p class="tm-mb-45">Car Description for additional comments. Thank you.</p>
                    <a href="#" class="tm-btn tm-btn-default tm-right">Read More</a>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="content-wrapper">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <h2 style="padding-left: 15px">Bikes</h2>--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-3">--}}
{{--                            <div class="col-item">--}}
{{--                                <a class="text-decoration-none" href="#">--}}
{{--                                    <img src="{{ asset('images/1.jpg') }}" width="100%" height="200px">--}}
{{--                                    <div style="padding: 0 10px">--}}
{{--                                        <h4>Bike Name</h4>--}}
{{--                                        <p>Bike Describtion....</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-3">--}}
{{--                            <div class="col-item">--}}
{{--                                <a class="text-decoration-none" href="#">--}}
{{--                                    <img src="{{ asset('images/2.jpg') }}" width="100%" height="200px">--}}
{{--                                    <div style="padding: 0 10px">--}}
{{--                                        <h4>Bike Name</h4>--}}
{{--                                        <p>Bike Describtion....</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-3">--}}
{{--                            <div class="col-item">--}}
{{--                                <a class="text-decoration-none" href="#">--}}
{{--                                    <img src="{{ asset('images/bike2.jpg') }}" width="100%" height="200px">--}}
{{--                                    <div style="padding: 0 10px">--}}
{{--                                        <h4>Bike Name</h4>--}}
{{--                                        <p>Bike Describtion....</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-3">--}}
{{--                            <div class="col-item">--}}
{{--                                <a class="text-decoration-none" href="#">--}}
{{--                                    <img src="{{ asset('images/3.jpg') }}" width="100%" height="200px">--}}
{{--                                    <div style="padding: 0 10px">--}}
{{--                                        <h4>Bike Name</h4>--}}
{{--                                        <p>Bike Describtion....</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <br>--}}
{{--                    <h2>Cars</h2>--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-md-3">--}}
{{--                            <div class="col-item">--}}
{{--                                <a class="text-decoration-none" href="#">--}}
{{--                                    <img src="{{ asset('images/1.jpg') }}" width="100%" height="200px">--}}
{{--                                    <div style="padding: 0 10px">--}}
{{--                                        <h4>Cars Name</h4>--}}
{{--                                        <p>Cars Describtion....</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-3">--}}
{{--                            <div class="col-item">--}}
{{--                                <a class="text-decoration-none" href="#">--}}
{{--                                    <img src="{{ asset('images/2.jpg') }}" width="100%"--}}
{{--                                         height="200px">--}}
{{--                                    <div style="padding: 0 10px">--}}
{{--                                        <h4>Cars Name</h4>--}}
{{--                                        <p>Cars Describtion....</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-3">--}}
{{--                            <div class="col-item">--}}
{{--                                <a class="text-decoration-none" href="#">--}}
{{--                                    <img src="{{ asset('images/bike2.jpg') }}" width="100%"--}}
{{--                                         height="200px">--}}
{{--                                    <div style="padding: 0 10px">--}}
{{--                                        <h4>Cars Name</h4>--}}
{{--                                        <p>Cars Describtion....</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-3">--}}
{{--                            <div class="col-item">--}}
{{--                                <a class="text-decoration-none" href="#">--}}
{{--                                    <img src="{{ asset('images/3.jpg') }}" width="100%"--}}
{{--                                         height="200px">--}}
{{--                                    <div style="padding: 0 10px">--}}
{{--                                        <h4>Cars Name</h4>--}}
{{--                                        <p>Cars Describtion....</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
