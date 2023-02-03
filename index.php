<?php
    include 'db_con.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KLM - Contractors Ltd | Official</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/KLM LOGO.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ADMIN LOGIN START-->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Log in as Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="db_con.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="auth">Log in</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ADMIN LOGIN END -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+260 968 494 921</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>info@klm.com</small>
                    <small class="px-3">|</small>
                    <div id="google_translate_element"></div>

                    <script type="text/javascript">
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement(
                                { pageLanguage: 'en' },
                                'google_translate_element'
                            );
                        }
                    </script>

                    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                    </script>

                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.php" class="navbar-brand ml-lg-3">
                <h3 class="m-0 text-primary"><img src="img/KLM LOGO.jpg" width="15%" alt=""> <span class="title"><span
                            class="text-secondary">K</span><span class="text-primary">L</span><span
                            class="text-warning">M </span> Contractors Limited</span> </h3>
            </a>
            <button type="button" class="p-0 navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="#about-us" class="nav-item nav-link">About us</a>
                    <a href="#products" class="nav-item nav-link">Our Products</a>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Our Products</a>
                        <div class="dropdown-menu m-0">
                            <a href="#products" class="dropdown-item" >Minerals</a>
                            <a href="#products" class="dropdown-item" >Gemstones</a>
                            <a href="#products" class="dropdown-item" >Hardware</a>
                            <a href="#products" class="dropdown-item" >Other</a>
                            <a href="tes/timonial.html" class="dropdown-item"></a>
                        </div>
                    </div> -->
                    <a href="" class="nav-item nav-link " data-toggle="modal" data-target="#exampleModal">Admin</a>
                </div>
                <a onclick="sendMessage()" class="btn btn-primary py-2 px-4 d-none d-lg-block">Chat with us!</a>
                <script>
                    function sendMessage() {
                        // let message = prompt();

                        window.location.href = 'https://wa.me/260962893773?text=From website: Hi, ';
                    }
                </script>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <!-- <div class="jumbotron jumbotron-fluid position-relative overlay-bottom " style="margin-bottom: 90px;">
        <div class="container text-center my-5 py-5">
            <h1 class=" mt-4 mb-4 text-white">Welcome to</h1>
            <h1 class="text-white display-1 mb-5"><span class="text-secondary">Kamu </span><span class="text-white">Legion </span><span class="text-warning">Mining </span>Contractors Limited </h1>
            
        </div>
    </div> -->
    <!-- Header End -->

    <hr>

    <!-- Testimonial Start -->
    <div class="container-fluid py-0">
        <div class="container py-3">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <b>
                        <h4 class="text-primary">Welcome to</h4>
                    </b>
                    <div class="section-title position-relative mb-4">

                        <h1 class="display-4"><span class="text-secondary">Kamu </span><span class="text-primary">Legion
                            </span><span class="text-warning">Mining </span> <br>
                            <h5> <b>Contractors Limited</b> </h5>
                        </h1>

                    </div>
                    <!-- <p class="m-0">Dolor est dolores et nonumy sit labore dolores est sed rebum amet, justo duo ipsum sanctus dolore magna rebum sit et. Diam lorem ea sea at. Nonumy et at at sed justo est nonumy tempor. Vero sea ea eirmod, elitr ea amet diam ipsum at amet. Erat sed stet eos ipsum diam</p> -->
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel">

                        <div class="bg-light p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>

                            <h5>07.00 – 17.00 hours Mondays to Fridays</h5>
                            <h5>07.00 – 12.00 hours on Saturdays</h5>
                            <p>However in all instances the provisions of the contract will override the above working
                                hours In case of emergency, the contact persons can be contacted at any time.</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/testimonial-1.jpg" alt="">
                                <div>
                                    <h5>Working Hours</h5>
                                    <span>Read more</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-light p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>Performance of the company’s contract services is direct at the customer’s work site. The
                                customer pays according to contractual terms and conditions. Clients may also be given a
                                30 day credit period depending on their credit worth.</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/testimonial-1.jpg" alt="">
                                <div>
                                    <h5>Selling & Distribution</h5>
                                    <span>Read more</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-light p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>The company serves a range of Customers including:</p>
                            <ol>
                                <li>Mining Companies</li>
                                <li>Local Authorities</li>
                                <li>Government Departments</li>
                                <li>Mining Contractors</li>
                                <li>Security Firms</li>
                                <li>General Public</li>
                            </ol>

                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/testimonial-1.jpg" alt="">
                                <div>
                                    <h5>Our Clients</h5>
                                    <span>Read more</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Start -->

    <hr>


    <!-- About Start -->
    <div class="container-fluid py-0" id="about-us">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="img/abt2.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/abt3.jpg" alt="First slide">
                                </div>
                                <!-- <div class="carousel-itemactive">
                                <img class="d-block w-100" src="img/abt4.jpg" alt="First slide">
                              </div> -->
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/abt5.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/abt1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/abt7.jpg" alt="First slide">
                                </div>

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>


                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">About Us</h6>
                        <h1 class="display-4">About KLM Contractors Limited</h1>
                    </div>
                    <p>Kamu Legion Mining Contractors Limited was incorporated on the 5th of October, 2021 as a company
                        limited by shares. We are specialized in; Mining, buying and selling of all types of
                        gemstones, base metal, precious metal, import
                        and export, supplier of timber, hardware and
                        consultancy. Our company has satisfied all the legal requirements to enable it conduct its
                        chosen business. Our staff has the necessary experience in their fields of specialization.</p>
                    <!-- <div class="row pt-3 mx-0">
                        <div class="col-3 px-0">
                            <div class="bg-success text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">123</h1>
                                <h6 class="text-uppercase text-white">Available<span class="d-block">Subjects</span></h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-primary text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">1234</h1>
                                <h6 class="text-uppercase text-white">Online<span class="d-block">Courses</span></h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-secondary text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">123</h1>
                                <h6 class="text-uppercase text-white">Skilled<span class="d-block">Instructors</span></h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-warning text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">1234</h1>
                                <h6 class="text-uppercase text-white">Happy<span class="d-block">Students</span></h6>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <hr>


    <!-- Feature Start -->
    <div class="container-fluid bg-image" style="margin: 90px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 my-2 pt-5 pb-lg-5">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Why Choose Us?
                        </h6>
                        <h1 class="display-4">Principal Nature of Company Business</h1>
                    </div>
                    <p class="mb-4 pb-2">The principal reason for the formation of the company was to deal in:</p>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-certificate text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Mining</h4>
                            <p>Mining has long been a significant primary sector industry and contributor to the Zambian
                                economy by providing export income, royalty payments and employment. The geology and
                                mineral resource distribution covers a large portion of Zambia's square area stretching
                                across all 10 provinces of the country.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-secondary mr-4">
                            <i class="fa fa-2x fa-certificate text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Gemstones</h4>
                            <p>The main gemstones of Zambia are emerald, aquamarine, amethyst, tourmaline, rose quartz,
                                garnet amazonite, smoky quartz, crystal quartz, feldspar, malachite, azurite, jasper,
                                cherty, chalcedony, hematite, sodalities etc. Zambia's gemstone resource is substantial
                                and exploitation is carried out on small and large scale.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="btn-icon bg-warning mr-4">
                            <i class="fa fa-2x fa-certificate text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Hardware</h4>
                            <p class="m-0">Having reliable equipment makes mining easier, safer, and more productive.
                                The right equipment can also improve the mine site’s productivity and help your keep
                                cost per ton low.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->


    <!-- Products Start -->
    <div class="container-fluid px-0 py-0" id="products">
        <div class="row mx-0 justify-content-center pt-5">
            <div class="col-lg-6">
                <div class="section-title text-center position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Our Products</h6>
                    <h1 class="display-4">Checkout New products on the Market</h1>

                </div>
            </div>
        </div>

        <center>
            <h6><- swipe to view more -></h6>
        </center>
        <div class="owl-carousel courses-carousel">


            <?php


    for($i = 0; $i < count($productsArray); $i++){
        if(count($productsArray)<1){
            echo `<h4 class="text-center text-white px-3">NO PRODUCTS IN THE INVENTORY</h4>`;
        }
?>

            <?php
    $buyId = 'buy' . $productsArray[$i]['product_id'];
    if(isset($_POST[$buyId])){
        $product_name = $productsArray[$i]['product_name'];
        $product_price = $productsArray[$i]['product_price'];
        $appMessage = 'I want to buy ' . $product_name . ' Price: ' . $product_price;

        echo "<script>window.document.location.href = 'https://wa.me/260962893773?text=From website: Hi, " . $appMessage . "';</script>";
        // header('Location: https://wa.me/260962893773?text=From website: Hi, ' . $appMessage);

        // echo "<script>window.location = 'index.php'</script>";
    }
?>
            <form action="index.php" method="post">
                <div class="courses-item position-relative">
                    <img class="img-fluid" src="<?php echo $productsArray[$i]['image_path']?>" alt="">
                    <div class="courses-text">
                        <h4 class="text-center text-white px-3">
                            <?php echo $productsArray[$i]['product_name']?>
                        </h4>
                        <div class="border-top w-100 mt-3">
                            <div class="d-flex justify-content-between p-4">
                                <span class="text-white"><i class="fa fa-user mr-2"></i>K <small>
                                        <?php echo $productsArray[$i]['product_price']?>
                                    </small> </span>
                                <span class="text-white"><i class="fa fa-star mr-2"></i><small>
                                        <?php echo $productsArray[$i]['product_time']?>
                                    </small> </span>
                            </div>
                        </div>

                        <div class="w-100 bg-white text-center p-4">
                            <input type="submit" name="buy<?php echo $productsArray[$i]['product_id']?>"
                                class="btn btn-primary" value="Buy Product">
                        </div>


                    </div>
                </div>
            </form>


            <?php
    }
?>
        </div>


        <script>
            function sale() {

                let name = document.forms["saleform"]["name"].value;
                let email = document.forms["saleform"]["email"].value;
                let desc = document.forms["saleform"]["desc"].value;

                let message = 'My name is ' + name + ', email: ' + email + ' Product Descption: ' + desc;

                alert(message);

                window.open('https://wa.me/260962893773?text=From website: Hi, ' + message);

                return true;
            }
        </script>

        <div class="row justify-content-center bg-image mx-0 mb-5">
            <div class="col-lg-6 py-5">
                <div class="bg-white p-5 my-5">
                    <h1 class="text-center mb-4">Do you have a product to Sale?</h1>
                    <form name="saleform" onsubmit="return sale()" method="post">
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control bg-light border-0"
                                        placeholder="John Doe" style="padding: 30px 20px;">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="desc" class="form-control bg-light border-0"
                                        placeholder="Product description" style="padding: 30px 20px;">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control bg-light border-0"
                                        placeholder="john@xyz.com" style="padding: 30px 20px;">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <input class="btn btn-primary btn-block" type="submit" style="height: 60px;"
                                    value="Send request Now">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="section-title text-center position-relative mb-5">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Our Management</h6>
                <h1 class="display-4">Meet Our Team</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/user.png" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Kalawa B. Kisimba</h5>
                        <p class="mb-2">Director General</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/user.png" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Mwengwe C. Amazuwa</h5>
                        <p class="mb-2">Adm/Fin Director</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/user.png" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Frank Mulu</h5>
                        <p class="mb-2">Marketing Director</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/user.png" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Mwamba William</h5>
                        <p class="mb-2">Consultant</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/user.png" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Esther Lember</h5>
                        <p class="mb-2">Secretary General</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->





    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-primary mr-4">
                                <i class="fa fa-2x fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Our Location</h4>
                                <p class="m-0">170 Intambalukuta Road, Lubengele, Chililabombwe – Zambia.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-secondary mr-4">
                                <i class="fa fa-2x fa-phone-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Call Us</h4>
                                <p class="m-0">+260 968 494 921</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-icon bg-warning mr-4">
                                <i class="fa fa-2x fa-envelope text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Email Us</h4>
                                <p class="m-0">info@klm.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Need Help?</h6>
                        <h1 class="display-4">Send Us A Message</h1>
                    </div>
                    <div class="contact-form">
                        <form action="db_con.php" method="post">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input name="name" type="text"
                                        class="form-control border-top-0 border-right-0 border-left-0 p-0"
                                        placeholder="Your Name" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input name="email" type="email"
                                        class="form-control border-top-0 border-right-0 border-left-0 p-0"
                                        placeholder="Your Email" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject"
                                    class="form-control border-top-0 border-right-0 border-left-0 p-0"
                                    placeholder="Subject" required="required">
                            </div>
                            <div class="form-group">
                                <textarea name="message"
                                    class="form-control border-top-0 border-right-0 border-left-0 p-0" rows="5"
                                    placeholder="Message" required="required"></textarea>
                            </div>
                            <div>
                                <button name="submit" class="btn btn-primary py-3 px-5" type="submit">Send
                                    Message</button>
                            </div>
                        </form>




                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <a href="index.php" class="navbar-brand">
                        <h1 class="mt-n2 text-uppercase text-white">KLM CONTRACTORS LTD</h1>
                    </a>
                    <p class="m-0">Since there is a lot of construction work going around, the timber sales are not
                        influenced by the period of the year. We also supply a range of goods and services.</p>
                </div>
                <div class="col-md-6 mb-5">
                    <h3 class="text-white mb-4">Newsletter</h3>
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control border-light" style="padding: 30px;"
                                placeholder="Your Email Address">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-4">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>170 Intambalukuta Road, Lubengele</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+260 968 494 921</p>
                    <p><i class="fa fa-envelope mr-2"></i>info@klm.com</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-twitter"></i></a>
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-facebook-f"></i></a>
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-linkedin-in"></i></a>
                        <a class="text-white" href="#"><i class="fab fa-2x fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Our Services</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Heavy Equipment</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Mining
                            Equipment</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Machinery</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Gemstones</a>
                        <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Minerals</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Privacy Policy</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Terms &
                            Condition</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Regular FAQs</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Help & Support</a>
                        <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 border-top py-4"
        style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0">Customized by <a class="text-white" href="#">Piko Tech Solutions</a>. All Rights
                        Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <p class="m-0">Designed by <a class="text-white" href="https://htmlcodex.com">HTML Codex</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i
            class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script src="js/index.js"></script>




</body>

</html>