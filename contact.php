<?php
$showForm = true;
$successMessage = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('submit_contact.php');
}

$servername = "localhost";
$username = "root";
$db_password = "";
$database = "vegetable";

// Create a connection
$conn = mysqli_connect($servername, $username, $db_password, $database);

// Check the connection
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}

if ($showForm && $_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve customer_id from the registration table based on the provided email
    $email = $_POST['email'];

    $select_query = "SELECT id FROM registration WHERE email = '$email'";
    $result = mysqli_query($conn, $select_query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch the customer_id
        $row = mysqli_fetch_assoc($result);
        $cust_id = $row['id'];

        // Now, insert into the contact table using the retrieved cust_id
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $insert_query = "INSERT INTO contact (cust_id, fname, lname, email, subject, message) VALUES ('$cust_id', '$fname', '$lname', '$email', '$subject', '$message')";
        $insert_result = mysqli_query($conn, $insert_query);

        if ($insert_result) {
            $showForm = false;
            header("Location: contact.php");
            exit;
			
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Unable to submit the contact form, please check your input.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Customer not found with the provided email.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fruitables - Vegetable Website FruVegHub</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--  Stylesheet -->
    <link href="css/style2.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-danger" role="status"></div>
    </div>
    <!-- Spinner End -->


    <?php include 'header.php' ?>


    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->


    <!-- Single Page Header start -->
    <div class="container-fluid page-header3 py-5">
        <h1 class="text-center text-white display-6">Contact</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Contact</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid contact py-5 ">
        <div class="container py-5 ">
            <div class="p-5 light-red-bg rounded ">
                <div class="row g-4">
                    <div class="col-12">
                        <form action="" method="post" role="form" class="contact-form">
                            <div class="text-center mx-auto " style="max-width: 700px;">
                                <h1 class="text-warning">Get in touch</h1>
                                <p class="mb-4 text-dark">Feel free to get in touch with us using the form below.</p>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12">
                        <div class="h-100 rounded">
                            <iframe class="rounded w-100" style="height: 400px;" src="https://maps.google.com/maps?width=1260&amp;height=493&amp;hl=en&amp;q=pakistan karachi street 123&amp;t=p&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <form action="" class="">
                            <input type="text" class="w-100 form-control border-0 py-3 mb-4" placeholder="Your Name">
                            <input type="email" class="w-100 form-control border-0 py-3 mb-4" placeholder="Enter Your Email">
                            <textarea class="w-100 form-control border-0 mb-4" rows="5" cols="10" placeholder="Your Message"></textarea>
                            <button class="w-100 btn form-control  py-3 bg-white text-danger " type="submit">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-5">
                        <div class="d-flex p-4 rounded mb-4 bg-white">
                            <i class="fas fa-map-marker-alt fa-2x text-danger me-4"></i>
                            <div>
                                <h4>Address</h4>
                                <p class="mb-2">123 Street Karachi,Pakistan</p>
                            </div>
                        </div>
                        <div class="d-flex p-4 rounded mb-4 bg-white">
                            <i class="fas fa-envelope fa-2x text-danger me-4"></i>
                            <div>
                                <h4>Mail Us</h4>
                                <p class="mb-2">Fruveghub@Example.com</p>
                            </div>
                        </div>
                        <div class="d-flex p-4 rounded bg-white">
                            <i class="fa fa-phone-alt fa-2x text-danger me-4"></i>
                            <div>
                                <h4>Telephone</h4>
                                <p class="mb-2">(+92) 3456 7890</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <?php include 'footer.php' ?>



    <!-- Back to Top -->
    <a href="#" class="btn btn-danger border-3 border-secondary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- FruVegHub Javascript -->
    <script src="js/main.js"></script>
</body>

</html>