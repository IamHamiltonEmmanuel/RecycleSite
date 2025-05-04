<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>ewasterecyclinggroup.net</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid fixed-top px-0">
            <div class="container px-0">
                <div class="topbar">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8">
                            <div class="topbar-info d-flex flex-wrap">
                                <a href="#" class="text-light me-4"><i class="fas fa-envelope text-white me-2"></i>hamiltonsmart30@gmail.com</a>
                                <a href="#" class="text-light"><i class="fas fa-phone-alt text-white me-2"></i>+234-708-475-3087</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="topbar-icon d-flex align-items-center justify-content-end">
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-pinterest"></i></a>
                                <a href="#" class="btn-square text-white me-0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-light bg-light navbar-expand-xl">
                    <a href="index.html" class="navbar-brand ms-3">
                        <h1 class="text-primary display-5">EWRA-SITE</h1>
                    </a>
                    <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-light" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="index.html" class="nav-item nav-link">Home</a>
                            <a href="about.html" class="nav-item nav-link">About</a>
                            <a href="service.html" class="nav-item nav-link">Services</a>
                            <a href="events.html" class="nav-item nav-link">Events</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    <a href="blog.html" class="dropdown-item">Blog</a>
                                    <a href="gallery.html" class="dropdown-item">Gallery</a>
                                    <a href="volunteer.html" class="dropdown-item">Volunteers</a>
                                    <a href="donation.html" class="dropdown-item active">Donation</a>
                                    <a href="404.html" class="dropdown-item">404 Error</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap pt-xl-0" style="margin-left: 15px;">
                            <a href="" class="btn-hover-bg btn btn-primary text-white py-2 px-4 me-3">Recycle Now</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Recycle Today</h1>
                <p class="fs-5 text-white mb-4">Recycle today, rescue tomorrow. Every little act counts!</p>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Recycle Now</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Donation Start -->
            <div class="col-12">
<!-- Embed this after the last <div class="col-12">...All Donation button -->
<div class="container mt-5">
    <div class="text-center mx-auto pb-4" style="max-width: 700px;">
        <h4 class="text-uppercase text-primary mb-3">Choose Waste to Be Recycled</h4>
        <form action="donate.php" method="POST" class="p-4 bg-light rounded">
            <select name="electronic_item" class="form-select form-select-lg mb-3" required>
                <option value="">-- Select Electronic Waste --</option>
                <option value="Mobile Phones">Mobile Phones</option>
                <option value="Laptops">Laptops</option>
                <option value="Televisions">Televisions</option>
                <option value="Refrigerators">Refrigerators</option>
                <option value="Batteries">Batteries</option>
                <option value="Printers">Printers</option>
                <option value="Microwaves">Microwaves</option>
                <option value="Washing Machines">Washing Machines</option>
                <option value="DVD Players">DVD Players</option>
                <option value="Monitors">Monitors</option>
            </select>
            <button type="submit" class="btn btn-primary text-white px-4 py-2">Find Recycle Location</button>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['electronic_item'])) {
        $item = $_POST['electronic_item'];
        $locations = [
            "Mobile Phones" => ["TechHub Center, Uromi", "Drop your mobile e-waste here. We refurbish and recycle!"],
            "Laptops" => ["eCycle Station, Benin City", "Secure disposal and data destruction for old laptops."],
            "Televisions" => ["GreenVision Depot, Ekpoma", "CRT and flat screens accepted. Eco-safe recycling."],
            "Refrigerators" => ["CoolCycle Spot, Auchi", "We handle refrigerants and metals with care."],
            "Batteries" => ["BatterySafe Bin, Uromi", "Dispose of household or car batteries safely."],
            "Printers" => ["PrintEco Facility, Benin", "Ink, toners, plastics—sorted and reused."],
            "Microwaves" => ["WaveRecycle Hub, Igueben", "Appliance-grade recycling done right."],
            "Washing Machines" => ["SpinGreen Center, Irrua", "Bulky e-waste? No worries—we handle it."],
            "DVD Players" => ["MediaRecycle, Sapele", "Digital media hardware goes green here."],
            "Monitors" => ["DisplayCycle, Asaba", "Monitors of all kinds recycled responsibly."]
        ];

        if (array_key_exists($item, $locations)) {
            $loc = $locations[$item][0];
            $desc = $locations[$item][1];
            echo "
            <div class='alert alert-success mt-4 text-center'>
                <h5 class='text-success'>Disposal Location for: <strong>$item</strong></h5>
                <p><strong>Location:</strong> $loc</p>
                <p><strong>Description:</strong> $desc</p>
            </div>";
        } else {
            echo "<div class='alert alert-danger mt-4 text-center'>No disposal information available.</div>";
        }
    }
    ?>
</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donation End -->


        <!-- Footer Start -->
        <div class="container-fluid footer bg-dark text-body py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="mb-4 text-white">Newsletter</h4>
                            <p class="mb-4">We're thrilled to introduce ewasterecyclinggroup.net, your trusted platform for discovering certified e-waste recycling centers nearby.</p>
                            <div class="position-relative mx-auto">
                                <input class="form-control border-0 bg-secondary w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                <button type="button" class="btn-hover-bg btn btn-primary position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Our Services</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i>E-Waste Collection Centers</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i>Awareness Campaign Drives</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i>Certified Recycler Directory</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i>Recycling Event Coordination</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i>Eco Disposal Guidance</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i>Community Volunteer Network</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Volunteer</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i>Hamilton Emmanuel</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i>Ogenyi Ekpereamaka Francisca</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i>Akhelumele Noel Onosetale</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i>Oaikhena Jesusemen Odion</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i>Bekom Onyibe David</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i>Ahmed Buhari</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="mb-4 text-white">Our Gallery</h4>
                            <div class="row g-2">
                                <div class="col-4">
                                    <div class="footer-gallery">
                                        <img src="img/work-5.jpg" class="img-fluid w-100" alt="">
                                        <div class="footer-search-icon">
                                            <a href="img/work-5.jpg" data-lightbox="footerGallery-1" class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                        </div>
                                    </div>
                               </div>
                               <div class="col-4">
                                    <div class="footer-gallery">
                                        <img src="img/work-4.jpg" class="img-fluid w-100" alt="">
                                        <div class="footer-search-icon">
                                            <a href="img/work-4.jpg" data-lightbox="footerGallery-2" class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                        </div>
                                    </div>
                               </div>
                                <div class="col-4">
                                    <div class="footer-gallery">
                                        <img src="img/work-3.jpg" class="img-fluid w-100" alt="">
                                        <div class="footer-search-icon">
                                            <a href="img/work-3.jpg" data-lightbox="footerGallery-3" class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                        </div>
                                    </div>
                               </div>
                                <div class="col-4">
                                    <div class="footer-gallery">
                                        <img src="img/work-2.jpg" class="img-fluid w-100" alt="">
                                        <div class="footer-search-icon">
                                            <a href="img/work-2.jpg" data-lightbox="footerGallery-4" class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                        </div>
                                    </div>
                               </div>
                                <div class="col-4">
                                    <div class="footer-gallery">
                                        <img src="img/work-1.jpg" class="img-fluid w-100" alt="">
                                        <div class="footer-search-icon">
                                            <a href="img/work-1.jpg" data-lightbox="footerGallery-5" class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                        </div>
                                    </div>
                               </div>
                               <div class="col-4">
									<div class="footer-gallery">
										<img src="img/work-4.jpg" class="img-fluid w-100" alt="">
                                        <div class="footer-search-icon">
                                            <a href="img/work-4.jpg" data-lightbox="footerGallery-6" class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                        </div>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        

        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-4 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#"><i class="fas fa-copyright text-light me-2"></i>ewasterecyclinggroup.net</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-pinterest"></i></a>
                            <a href="#" class="btn-hover-color btn-square text-white me-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://web.facebook.com/hamilton.emmanuel.984?_rdc=3&_rdr#">Hamilton Emmanuel</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

    </body>

</html>