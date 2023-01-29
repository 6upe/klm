<?php
    $con = new PDO("sqlite:klm.db");
    if(!$con){
        echo 'Database NOT Connected';
        
    }

  
    if (isset($_POST['submit'])) {
        $to = "admin@klm.com";
        $subject = $_POST['subject'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $appMessage = 'this message is intended for ' . $to . ' Subject: ' . $subject . ' Name: ' . $name . ' email: ' . $name . ' message: ' . $message;

        echo "<script>alert('Send message Now?')</script>";
        header('Location: https://wa.me/260962893773?text=From website: Hi, ' . $appMessage);
		echo "<script>window.location='index.php'</script>";
    }


    $selectProductsQuery = $con->prepare("SELECT * FROM products");
    $selectProductsQuery->execute();
    $productsArray = $selectProductsQuery->fetchAll(PDO::FETCH_ASSOC);

    if(ISSET($_POST['auth'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email == 'admin@kamulegion.com' && $password == 'admin@kamulegion'){
            echo "<script>alert('Log in Success!')</script>";
			echo "<script>window.location='admin.php'</script>";
        }else{
            echo "<script>alert('Log in Failed!')</script>";
            echo "<script>window.location='index.php'</script>";
        }
    }
    
    if(ISSET($_POST['upload'])){
        $product_name = $_POST['product-name'];
        $product_price = $_POST['product-price'];
		$file_name = $_FILES['product-image']['name'];
		$file_temp = $_FILES['product-image']['tmp_name'];
        $today = date("F j, Y, g:i a");
		
		$exp = explode(".", $file_name);
		$ext = end($exp);
		$image = time().'.'.$ext;
		$ext_allowed = array("png", "gif", "jpeg", "jpg");
		$location = "uploads/".$image;

        echo $product_name;
        echo $product_price;
        echo $today;
        echo $image;
        echo $location;

		if(in_array($ext, $ext_allowed)){
			// if(move_uploaded_file($file_temp, $location)){

                $move = move_uploaded_file($file_temp, $location);
				// $insertQuery = "INSERT INTO products (product_name, product_price, product_time, image_name, image_path) VALUES ('$product_name,'$product_price', '$today' ,'$image', '$location')";
                $result = $con->prepare("INSERT INTO products (product_name, product_price, product_time, image_name, image_path) VALUES ('$product_name','$product_price', '$today' ,'$image', '$location');");
				$result->execute();

                if(!$result){
                    echo 'Insert query failed';
                }else{
                    // echo 'Insert query success';
                }
			
				echo "<script>alert('Image uploaded!')</script>";
				echo "<script>window.location='admin.php'</script>";
			// }
		}else{
			echo "<script>alert('Only image to upload!')</script>";
			echo "<script>window.location='admin.php'</script>";
		}
	}

    $total = count($productsArray);
    $resetSequenceProperty = $con->prepare("UPDATE SQLITE_SEQUENCE SET SEQ='$total' WHERE NAME='products'");
    $resetSequenceProperty->execute();

?>

