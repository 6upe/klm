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
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log in as Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="db_con.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" name="product-name" placeholder="Product Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="product-price" placeholder="Product Price">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Select an image for your Product</label>
                <input type="file" class="form-control-file" name="product-image">
            </div> 
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="upload">Post Product</button>
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
                <h3 class="m-0 text-primary"><img src="img/KLM LOGO.jpg" width="15%" alt=""> <span class="title"><span class="text-secondary">K</span><span class="text-primary">L</span><span class="text-warning">M </span> Contractors Limited</span> </h3>
            </a>
            <button type="button" class="p-0 navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="#" class="nav-item nav-link active">You're an Admin Now</a>
                    <!-- <a href="course.html" class="nav-item nav-link">Courses</a> -->
                    <a href="#" class="nav-item nav-link " data-toggle="modal" data-target="#exampleModal">Post Product</a>
                </div>
                <a href="index.php" class="btn btn-danger py-2 px-4 d-none d-lg-block">Log Out</a>
                
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <div class="container-fluid px-0 py-0">
        <div class="row mx-0 justify-content-center pt-5">
            <div class="col-lg-6">
                <div class="section-title text-center position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Products available</h6>
                    <!-- <h1 class="display-4">Checkout New products on the Market</h1> -->
                </div>
            </div>
        </div>


    <div class="owl-carousel courses-carousel" id="products">


<?php
    

    for($i = 0; $i < count($productsArray); $i++){

        if(count($productsArray)<1){
            echo `<h4 class="text-center text-white px-3">NO PRODUCTS IN THE INVENTORY</h4>`;
        }
?>
            <form action="admin.php" method="post">
            <div class="courses-item position-relative">
                <img class="img-fluid" src="<?php echo $productsArray[$i]['image_path']?>" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3"><?php echo $productsArray[$i]['product_name']?></h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>K <small><?php echo $productsArray[$i]['product_price']?></small> </span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i><small><?php echo $productsArray[$i]['product_time']?></small> </span>
                        </div>
                    </div>
                    
                        <div class="w-100 bg-white text-center p-4" >
                        <input class="btn btn-danger" type="submit" name="delete<?php echo $productsArray[$i]['product_id']?>" value="Delete Product">
                    </div>
                    

                    <?php
                        
                    ?>
                    
                </div>
            </div>
            </form>
<?php
        $deleteName = 'delete' . $productsArray[$i]['product_id'];
        if(ISSET($_POST[$deleteName])){
            $deleteId = $productsArray[$i]['product_id'];
            $file = $productsArray[$i]['image_path'];
            unlink($file);
            
            $del = $con->prepare("DELETE FROM products WHERE product_id = '$deleteId';");
            $del->execute();
        
            if(!$del){
                echo 'delete query failed';
            }else{
                // echo 'Insert query success';
            }
            echo "<script>alert('" . $productsArray[$i]['product_name'] . "Deleted!')</script>";
			echo "<script>window.location='admin.php'</script>";
        }
    }
?>  
        </div>

</div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


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