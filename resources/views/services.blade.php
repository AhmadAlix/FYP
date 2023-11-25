<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite(['resources/css/bootstrap.min.css'])
</head>
<body>

@include('components.header')
    
        <!-- Service Start -->
        <div class="container-fluid service py-6 mt-10">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Services</small>
                    <h1 class="display-5 mb-5">What We Offer</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-cheese fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3">Wedding Services</h4>
                                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-pizza-slice fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3">Corporate Catering</h4>
                                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-hotdog fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3">Cocktail Reception</h4>
                                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.7s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-hamburger fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3">Bento Catering</h4>
                                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Service End -->

        @include('components.footer')
</body>
</html>