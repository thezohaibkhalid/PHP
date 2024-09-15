<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Slider with Autoplay and Text</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="assets/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'assets/components/top.php'?>
    
    <?php include 'assets/components/nav.php'?>

    <div class="container-fluid p-0">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner  ">
                <div class="carousel-item active">
                    <img src="assets/img/image.png" class="d-block w-100" alt="Slide 1">
                    <div class="justify-content-center carousel-caption  mt-2">
                        <h1 class="sfont1">Find the House of your <br> Dream at the best</h1>
                        <p class=" spara1 d-sm-block d-none ">Home is more than just a physical space it's a place where <br> comfort, security, and It's where we feel most ourselves, <br> surrounded by familiar sights, sounds</p>
                        <button class=" text-white border-0  sbtnclr1">Learn more</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/image (1).png" class="d-block w-100" alt="Slide 2">
                    <div class="justify-content-center carousel-caption smargin1  mt-2">
                        <h1 class="sfont1">Find the House of your <br> Dream at the best</h1>
                        <p class="spara1  d-none d-sm-block">Home is more than just a physical space it's a place where <br> comfort, security, and It's where we feel most ourselves, <br> surrounded by familiar sights, sounds</p>
                        <button class=" text-white border-0  sbtnclr1">Learn more</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/image (2).png" class="d-block w-100" alt="Slide 3">
                    <div class="justify-content-center carousel-caption mt-2 ">
                        <h1 class="sfont1">Find the House of your <br> Dream at the best</h1>
                        <p class="spara1 d-sm-block d-none ">Home is more than just a physical space it's a place where <br> comfort, security, and It's where we feel most ourselves, <br> surrounded by familiar sights, sounds</p>
                        <button class="  text-white border-0  sbtnclr1">Learn more</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/image (3).png" class="d-block w-100" alt="Slide 3">
                    <div class="justify-content-center carousel-caption mt-2 ">
                        <h1 class="sfont1">Find the House of your <br> Dream at the best</h1>
                        <p class="spara1 d-sm-block d-none ">Home is more than just a physical space it's a place where <br> comfort, security, and It's where we feel most ourselves, <br> surrounded by familiar sights, sounds</p>
                        <button class=" text-white border-0  sbtnclr1">Learn more</button>
                    </div>
                </div>
                
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        </div>
    </div>
    <div class="container  sproperty-section">
        <h2 class="property-title fs-2 text-black">Property <span class="sspan2">Types</span></h2>
        <div class="property-title-underline"></div>
        <div class="row justify-content-center ">
            <div class="col-md-3 col-sm-6 mb-4 ">
                <div class="sproperty-card sbox1">
                    <div class="sborder1 rounded-circle">
                        <!-- Placeholder for icon image -->
                        <img src="assets/img/Vector (2).png" alt="Office" class="img-fluid  simg1" >
                    </div>
                    <div class="sproperty-title">Appartment</div>
                    <div class="sproperty-count">150+</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4 ">
                <div class="sproperty-card sbox1">
                    <div class="sborder1 rounded-circle">
                        <!-- Placeholder for icon image -->
                        <img src="assets/img/Vector (3).png" alt="Office" class="img-fluid  simg1" >
                    </div>
                    <div class="sproperty-title">Villa</div>
                    <div class="sproperty-count">150+</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="sproperty-card sbox1">
                    <div class="sborder1 rounded-circle">
                        <!-- Placeholder for icon image -->
                        <img src="assets/img/Vector (4).png" alt="Office" class="img-fluid  simg1" >
                    </div>
                    <div class="sproperty-title">Home</div>
                    <div class="sproperty-count">150+</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 ">
                <div class="sproperty-card sbox1">
                    <div class="sborder1 rounded-circle">
                        <!-- Placeholder for icon image -->
                        <img src="assets/img/Vector (7).png" alt="Office" class="img-fluid  simg1" >
                    </div>
                    <div class="sproperty-title">Office</div>
                    <div class="sproperty-count">150+</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container  sproperty-section1">
        <div class="row justify-content-center ">
            <div class="col-md-3 col-sm-6 mb-4 ">
                <div class="sproperty-card sbox1">
                    <div class="sborder1 rounded-circle">
                        <!-- Placeholder for icon image -->
                        <img src="assets/img/Vector (5).png" alt="Office" class="img-fluid  simg1" >
                    </div>
                    <div class="sproperty-title">Appartment</div>
                    <div class="sproperty-count">150+</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4 ">
                <div class="sproperty-card sbox1">
                    <div class="sborder1 rounded-circle">
                        <!-- Placeholder for icon image -->
                        <img src="assets/img/spotlight-icon 1.png" alt="Office" class="img-fluid  simg1" >
                    </div>
                    <div class="sproperty-title">Villa</div>
                    <div class="sproperty-count">150+</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="sproperty-card sbox1">
                    <div class="sborder1 rounded-circle">
                        <!-- Placeholder for icon image -->
                        <img src="assets/img/Vector (6).png" alt="Office" class="img-fluid  simg1" >
                    </div>
                    <div class="sproperty-title">Home</div>
                    <div class="sproperty-count">150+</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="sproperty-card sbox1">
                    <div class="sborder1 rounded-circle">
                        <!-- Placeholder for icon image -->
                        <img src="assets/img/property-agent-icon 1.png" alt="Office" class="img-fluid  simg1" >
                    </div>
                    <div class="sproperty-title">Office</div>
                    <div class="sproperty-count">150+</div>
                </div>
            </div>
        </div>
    </div>


    <!-- card section -->

    <div class="container listing-section">
        <h2 class="listing-title">Display Featured & <span class="sspan1">Listing</span></h2>
        <div class="listing-title-underline"></div>
        <div class="row justify-content-center">
            <!-- Property Card 1 -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="property-card">
                    <div class="sproperty-image">
                        <img src="assets/img/image1.png" alt="House">
                        <div class="badge-overlay">For Sale</div>
                        <div class="type-badge" style="background-color: #007bff;">House</div>
                    </div>
                    <div class="property-content text-start ms-2">
                        <div class="d-flex ">
                            <div class="d-block col-xl-11 col-xxl-11 col-lg-11 col-md-10 col-sm-10 col-11  justify-content-start">
                                <div class="property-price">$34,677</div>
                                <div class="property-title">Golden House For Sale</div>
                                <div class="property-location">Street No 20 Near Emirate Lhr</div>
                                <div class="property-availability">Available</div>
                            </div>
                            <div class="">
                                <div class="property-heart">
                                    <i class="bi bi-heart-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="property-footer">
                            <div class="ms-1 mb-2">
                                <img src="assets/img/meet 2.png" alt="User1" class="">
                                <img src="assets/img/meet3.png" alt="User2" class="simg3">
                            </div>
                            <div class="property-time me-2">2 Weeks Ago</div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Property Card 2 -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="property-card">
                    <div class="sproperty-image">
                        <img src="assets/img/image2.png" alt="Villa">
                        <div class="badge-overlay" style="background-color: #ff5733;">For Rent</div>
                        <div class="type-badge" style="background-color: #28a745;">Villa</div>
                    </div>
                    <div class="property-content text-start ms-2">
                        <div class="d-flex ">
                            <div class="d-block col-xl-11 col-xxl-11 col-lg-11 col-md-10 col-sm-10 col-11  justify-content-start">
                                <div class="property-price">$34,677</div>
                                <div class="property-title">Golden House For Sale</div>
                                <div class="property-location">Street No 20 Near Emirate Lhr</div>
                                <div class="property-availability">Available</div>
                            </div>
                            <div class="">
                                <div class="property-heart">
                                    <i class="bi bi-heart-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="property-footer">
                            <div class="ms-1 mb-2">
                                <img src="assets/img/meet 2.png" alt="User1" class="">
                                <img src="assets/img/meet3.png" alt="User2" class="simg3">
                            </div>
                            <div class="property-time me-2">2 Weeks Ago</div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Property Card 3 -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="property-card">
                    <div class="sproperty-image">
                        <img src="assets/img/image3.png" alt="Shop">
                        <div class="badge-overlay">For Sale</div>
                        <div class="type-badge" style="background-color: #dc3545;">Shop</div>
                    </div>
                    <div class="property-content text-start ms-2">
                        <div class="d-flex ">
                            <div class="d-block col-xl-11 col-xxl-11 col-lg-11 col-md-10 col-sm-10 col-11 justify-content-start">
                                <div class="property-price">$34,677</div>
                                <div class="property-title">Golden House For Sale</div>
                                <div class="property-location">Street No 20 Near Emirate Lhr</div>
                                <div class="property-availability">Available</div>
                            </div>
                            <div class="">
                                <div class="property-heart">
                                    <i class="bi bi-heart-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="property-footer">
                            <div class="ms-1 mb-2">
                                <img src="assets/img/meet 2.png" alt="User1" class="">
                                <img src="assets/img/meet3.png" alt="User2" class="simg3">
                            </div>
                            <div class="property-time me-2">2 Weeks Ago</div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container listing-section1">
        <div class="row justify-content-center">
            <!-- Property Card 1 -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="property-card">
                    <div class="sproperty-image">
                        <img src="assets/img/image1.png" alt="House">
                        <div class="badge-overlay">For Sale</div>
                        <div class="type-badge" style="background-color: #007bff;">House</div>
                    </div>
                    <div class="property-content text-start ms-2">
                        <div class="d-flex ">
                            <div class="d-block col-xl-11 col-xxl-11 col-lg-11 col-md-10 col-sm-10 col-11 justify-content-start">
                                <div class="property-price">$34,677</div>
                                <div class="property-title">Golden House For Sale</div>
                                <div class="property-location">Street No 20 Near Emirate Lhr</div>
                                <div class="property-availability">Available</div>
                            </div>
                            <div class="">
                                <div class="property-heart">
                                    <i class="bi bi-heart-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="property-footer">
                            <div class="ms-1 mb-2">
                                <img src="assets/img/meet 2.png" alt="User1" class="">
                                <img src="assets/img/meet3.png" alt="User2" class="simg3">
                            </div>
                            <div class="property-time me-2">2 Weeks Ago</div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Property Card 2 -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="property-card">
                    <div class="sproperty-image">
                        <img src="assets/img/image2.png" alt="Villa">
                        <div class="badge-overlay" style="background-color: #ff5733;">For Rent</div>
                        <div class="type-badge" style="background-color: #28a745;">Villa</div>
                    </div>
                    <div class="property-content text-start ms-2">
                        <div class="d-flex ">
                            <div class="d-block col-xl-11 col-xxl-11 col-lg-11 col-md-10 col-sm-10 col-11 justify-content-start">
                                <div class="property-price">$34,677</div>
                                <div class="property-title">Golden House For Sale</div>
                                <div class="property-location">Street No 20 Near Emirate Lhr</div>
                                <div class="property-availability">Available</div>
                            </div>
                            <div class="">
                                <div class="property-heart">
                                    <i class="bi bi-heart-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="property-footer">
                            <div class="ms-1 mb-2">
                                <img src="assets/img/meet 2.png" alt="User1" class="">
                                <img src="assets/img/meet3.png" alt="User2" class="simg3">
                            </div>
                            <div class="property-time me-2">2 Weeks Ago</div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Property Card 3 -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="property-card">
                    <div class="sproperty-image">
                        <img src="assets/img/image3.png" alt="Shop">
                        <div class="badge-overlay">For Sale</div>
                        <div class="type-badge" style="background-color: #dc3545;">Shop</div>
                    </div>
                    <div class="property-content text-start ms-2">
                        <div class="d-flex ">
                            <div class="d-block col-xl-11 col-xxl-11 col-lg-11 col-md-10 col-sm-10 col-11 justify-content-start">
                                <div class="property-price">$34,677</div>
                                <div class="property-title">Golden House For Sale</div>
                                <div class="property-location">Street No 20 Near Emirate Lhr</div>
                                <div class="property-availability">Available</div>
                            </div>
                            <div class="">
                                <div class="property-heart">
                                    <i class="bi bi-heart-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="property-footer">
                            <div class="ms-1 mb-2">
                                <img src="assets/img/meet 2.png" alt="User1" class="">
                                <img src="assets/img/meet3.png" alt="User2" class="simg3">
                            </div>
                            <div class="property-time me-2">2 Weeks Ago</div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="background1 mb-4">
        <div class="container text-white text-center pt-5 pb-5">
            <h1 class="pt-5 sfont2"> Find Best Place  <br> For Leaving </h1>
            <button class="px-4 py-3 fs-3 mt-3  text-white  mb-5 sbtn2">GET INTO TOUCH</button>
        </div>
    </div>


    <!-- testimonials -->
    <div class="container testimonial-section">
        <div class="testimonial-header">
            <p class="section-title">TESTIMONIAL</p>
            <h2 class="sh2">Client We <span class="sspan3">Help</span></h2>
        </div>
        <div class="row justify-content-center">
            <!-- Testimonial Card 1 -->
            <div class="col-md-4 col-sm-6 ">
                <div class="testimonial-card ">
                    <div class="testimonial-icon">
                        <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <p class="testimonial-text mt-2">
                        Working with Company Person has been an absolute pleasure. From start to process was seamless and exceeded.
                    </p>
                    <div class="testimonial-author">
                        <img src="assets/img/meet3.png" alt="Author">
                        <div>
                            <div class="testimonial-author-name">Marlki Nuokil</div>
                            <div class="testimonial-author-title">MARKET MANAGER</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Card 2 -->
            <div class="col-md-4 col-sm-6">
                <div class="testimonial-card">
                    <div class="testimonial-icon">
                        <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <p class="testimonial-text mt-2">
                        Working with Company Person has been an absolute pleasure. From start to process was seamless and exceeded.
                    </p>
                    <div class="testimonial-author">
                        <img src="assets/img/meet3.png" alt="Author">
                        <div>
                            <div class="testimonial-author-name">Marlki Nuokil</div>
                            <div class="testimonial-author-title">MARKET MANAGER</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Card 3 -->
            <div class="col-md-4 col-sm-6">
                <div class="testimonial-card">
                    <div class="testimonial-icon">
                        <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <p class="testimonial-text mt-2">
                        Working with Company Person has been an absolute pleasure. From start to process was seamless and exceeded.
                    </p>
                    <div class="testimonial-author">
                        <img src="assets/img/meet3.png" alt="Author">
                        <div>
                            <div class="testimonial-author-name">Marlki Nuokil</div>
                            <div class="testimonial-author-title">MARKET MANAGER</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background: #050D21;">
        <section class="agents-section text-white py-5">
        <div class="container">
            <h2 class="text-center">Meet Our Agents</h2>
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6">
                    <div class="card agent-card text-center">
                        <img src="assets/img/image6.png" class="card-img-top" alt="Agent 1">
                        <div class="card-body">
                            <h5 class="card-title">William Worth</h5>
                            <p class="card-text ">Listing 10 Properties</p>
                            <div class="social-icons">
                                <a href="#" class=" rounded-circle" style="background: #050D21; padding: 7px 10px 7px 10px;"><i class="bi bi-facebook"></i></a>
                                <a href="#" class=" rounded-circle" style="background: #050D21; padding: 7px 10px 7px 10px;"><i class="bi bi-twitter"></i></a>
                                <a href="#" class=" rounded-circle" style="background: #050D21; padding: 7px 10px 7px 10px;"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class=" rounded-circle" style="background: #050D21; padding: 7px 10px 7px 10px;"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card agent-card text-center">
                        <img src="assets/img/image7.png" class="card-img-top" alt="Agent 2">
                        <div class="card-body">
                            <h5 class="card-title">William Worth</h5>
                            <p class="card-text">Listing 10 Properties</p>
                            <div class="social-icons">
                                <a href="#" class=" rounded-circle" style="background: #050D21; padding: 7px 10px 7px 10px;"><i class="bi bi-facebook"></i></a>
                                <a href="#" class=" rounded-circle" style="background: #050D21; padding: 7px 10px 7px 10px;"><i class="bi bi-twitter"></i></a>
                                <a href="#" class=" rounded-circle" style="background: #050D21; padding: 7px 10px 7px 10px;"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class=" rounded-circle" style="background: #050D21; padding: 7px 10px 7px 10px;"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card agent-card text-center">
                        <img src="assets/img/image5.png" class="card-img-top" alt="Agent 3">
                        <div class="card-body">
                            <h5 class="card-title">William Worth</h5>
                            <p class="card-text">Listing 10 Properties</p>
                            <div class="social-icons">
                                <a href="#" class=" rounded-circle" style="background: #050D21; padding: 7px 10px 7px 10px;"><i class="bi bi-facebook"></i></a>
                                <a href="#" class=" rounded-circle" style="background: #050D21; padding: 7px 10px 7px 10px;"><i class="bi bi-twitter"></i></a>
                                <a href="#" class=" rounded-circle" style="background: #050D21; padding: 7px 10px 7px 10px;"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class=" rounded-circle" style="background: #050D21; padding: 7px 10px 7px 10px;"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="row container-fluid  justify-content-center align-items-center mt-5">
    <div class="col-6 col-sm-4  col-md-3 col-lg-2 text-center mb-4">
        <img src="assets/img/image (11).png" alt="" class="img-fluid">
    </div>
    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center mb-4">
        <img src="assets/img/image (12).png" alt="" class="img-fluid">
    </div>
    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center mb-4">
        <img src="assets/img/image (13).png" alt="" class="img-fluid">
    </div>
    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center mb-4">
        <img src="assets/img/image (14).png" alt="" class="img-fluid">
    </div>
    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center mb-4">
        <img src="assets/img/image (4).png" alt="" class="img-fluid">
    </div>
    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center mb-4">
        <img src="assets/img/image (12).png" alt="" class="img-fluid">
    </div>
</div>
    <!-- Footer -->
    <?php  include 'assets/components/footer.php'?>

<!-- Copyright -->
<div class="bg-dark text-center text-white py-3">
    <p class="mb-0">Copyright &copy;2024 All right reserved</p>
</div>



    <script src="assets/bootstrap.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var carouselElement = document.querySelector('#carouselExample');
            var carousel = new bootstrap.Carousel(carouselElement, {
                interval: 3000, // Autoplay interval in milliseconds
                ride: 'carousel'
            });
        });
    </script>
</body>
</html>
