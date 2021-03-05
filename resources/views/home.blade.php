@extends('layouts.app')
@section('title', 'Home Page')

@section('content')
    <!-- MENU SECTION END-->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>About</h2>
                <p>Who we are</p>
            </div>

            <div class="row content" data-aos="fade-up">
                <div class="col-lg-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat
                        </li>
                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate
                            velit
                        </li>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <a href="{{ route('about') }}" class="btn-learn-more">Learn More</a>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Services</h2>
                <p>What we do offer</p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box" data-aos="zoom-in-left">
                        <div class="icon"><i class="las la-basketball-ball" style="color: #ff689b;"></i></div>
                        <h4 class="title"><a href="">Cars Rental</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident</p>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
                        <div class="icon"><i class="las la-book" style="color: #e9bf06;"></i></div>
                        <h4 class="title"><a href="">Bikes Rental</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat tarad limino ata</p>
                    </div>
                </div>

                <div class="col-md-6 mt-5 ">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
                        <div class="icon"><i class="las la-file-alt" style="color: #3fcdc7;"></i></div>
                        <h4 class="title"><a href="">Cars Selling</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur</p>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
                        <div class="icon"><i class="las la-tachometer-alt" style="color:#41cf2e;"></i></div>
                        <h4 class="title"><a href="">Bikes Selling</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Selling & Rental</h2>
                <p>Latest Coming</p>
            </div>

            <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-car2">Cars</li>
                <li data-filter=".filter-bike2">Bikes</li>
            </ul>

            <div class="row portfolio-container" data-aos="fade-up">

                <div class="col-lg-4 col-md-6 portfolio-item filter-car2">
                    <div class="portfolio-img"><img src="{{ asset('new/img/portfolio/portfolio-2.jpg') }}"
                                                    class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="{{ asset('new/img/portfolio/portfolio-2.jpg') }}" data-gall="portfolioGallery"
                           class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-car2">
                    <div class="portfolio-img"><img src="{{ asset('new/img/portfolio/portfolio-2.jpg') }}"
                                                    class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="{{ asset('new/img/portfolio/portfolio-2.jpg') }}" data-gall="portfolioGallery"
                           class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-car2">
                    <div class="portfolio-img"><img src="{{ asset('new/img/portfolio/portfolio-2.jpg') }}"
                                                    class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="{{ asset('new/img/portfolio/portfolio-2.jpg') }}" data-gall="portfolioGallery"
                           class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-car2">
                    <div class="portfolio-img"><img src="{{ asset('new/img/portfolio/portfolio-2.jpg') }}"
                                                    class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="{{ asset('new/img/portfolio/portfolio-2.jpg') }}" data-gall="portfolioGallery"
                           class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-car2">
                    <div class="portfolio-img"><img src="{{ asset('new/img/portfolio/portfolio-2.jpg') }}"
                                                    class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="{{ asset('new/img/portfolio/portfolio-2.jpg') }}" data-gall="portfolioGallery"
                           class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-car2">
                    <div class="portfolio-img"><img src="{{ asset('new/img/portfolio/portfolio-2.jpg') }}"
                                                    class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="{{ asset('new/img/portfolio/portfolio-2.jpg') }}" data-gall="portfolioGallery"
                           class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-bike2">
                    <div class="portfolio-img"><img src="{{ asset('new/img/portfolio/portfolio-2.jpg') }}"
                                                    class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="{{ asset('new/img/portfolio/portfolio-2.jpg') }}" data-gall="portfolioGallery"
                           class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-bike2">
                    <div class="portfolio-img"><img src="{{ asset('new/img/portfolio/portfolio-2.jpg') }}"
                                                    class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="{{ asset('new/img/portfolio/portfolio-2.jpg') }}" data-gall="portfolioGallery"
                           class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-bike2">
                    <div class="portfolio-img"><img src="{{ asset('new/img/portfolio/portfolio-2.jpg') }}"
                                                    class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="{{ asset('new/img/portfolio/portfolio-2.jpg') }}" data-gall="portfolioGallery"
                           class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-bike2">
                    <div class="portfolio-img"><img src="{{ asset('new/img/portfolio/portfolio-2.jpg') }}"
                                                    class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="{{ asset('new/img/portfolio/portfolio-2.jpg') }}" data-gall="portfolioGallery"
                           class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-bike2">
                    <div class="portfolio-img"><img src="{{ asset('new/img/portfolio/portfolio-2.jpg') }}"
                                                    class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="{{ asset('new/img/portfolio/portfolio-2.jpg') }}" data-gall="portfolioGallery"
                           class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div>

            <div class="row mt-5">

                <div class="col-lg-4" data-aos="fade-right">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                       data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Your Email" data-rule="email"
                                       data-msg="Please enter a valid email"/>
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                   data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                      data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

@endsection
