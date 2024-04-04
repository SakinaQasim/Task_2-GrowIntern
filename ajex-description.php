<?php
$conn = mysqli_connect("localhost", "root", "", "vegetable") or die("Connection failed");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['id'])) {

    $productId = $_POST['id'];



    $sql = "SELECT 
    product.image_url, 
    product.name, 
    product.type_name, 
    product.price, 
    product.description_file_path,
    desk.ds1, 
    desk.ds2, 
    desk.Weight, 
    desk.Country_of_Origin,
    desk.Quality, 
    desk.qut,  -- Use backticks around Check 
    desk.Min_Weight
FROM 
    product
INNER JOIN 
    desk ON product.id = desk.id
WHERE 
    product.id = $productId;";


    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if (mysqli_num_rows($result) > 0) {

        $output = '<div class="container py-5">
                        <div class="row g-4 mb-5">';

        while ($row = mysqli_fetch_assoc($result)) {
            $output .= ' <div class="row g-4 mb-5">
            <div class="col-lg-8 col-xl-9">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="border rounded">
                            <a href="#">
                            <img src="' . $row['image_url'] . '"  class="img-fluid rounded" alt="Image">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <h4 class="fw-bold mb-3 text-danger">' . $row['name'] . '</h4>
                        <p class="mb-3 text-warning">Category:' . $row['type_name'] . '</p>
                        <h5 class="fw-bold mb-3">' . $row['price'] . ' </h5>
                        <div class="d-flex mb-4">
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p class="mb-4">' . $row['description_file_path'] . '</p>
                        <div class="input-group quantity mb-5" style="width: 100px;">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-minus rounded-circle bg-light border" onclick="decreaseQuantity()">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control form-control-sm text-center border-0" value="1">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-plus rounded-circle bg-light border" onclick="increaseQuantity()">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <a href="" class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-danger addToCartBtn" data-id="' . $productId . '" ><i class="fa fa-shopping-bag me-2 text-danger "></i> Add to cart</a>
                       
                    </div>
                    <div class="col-lg-12">
                        <nav>
                            <div class="nav nav-tabs mb-3">
                                <button class="nav-link active border-white border-bottom-0" type="button" role="tab" id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about" aria-controls="nav-about" aria-selected="true">Description</button>
                            </div>
                        </nav>
                        <div class="tab-content mb-5">
                            <div class="tab-pane active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                <p> ' . $row['ds1'] . '</p>
                                <p>' . $row['ds2'] . '</p>
                                <div class="px-2">
                                    <div class="row g-4">
                                        <div class="col-6">
                                            <div class="row bg-light align-items-center text-center justify-content-center py-2">
                                                <div class="col-6">
                                                    <p class="mb-0">Weight</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">' . $row['Weight'] . ' kg</p>
                                                </div>
                                            </div>
                                            <div class="row text-center align-items-center justify-content-center py-2">
                                                <div class="col-6">
                                                    <p class="mb-0">Country of Origin</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">' . $row['Country_of_Origin'] . '</p>
                                                </div>
                                            </div>
                                            <div class="row bg-light text-center align-items-center justify-content-center py-2">
                                                <div class="col-6">
                                                    <p class="mb-0">Quality</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">' . $row['Quality'] . '</p>
                                                </div>
                                            </div>
                                            <div class="row text-center align-items-center justify-content-center py-2">
                                                <div class="col-6">
                                                    <p class="mb-0">Сheck</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">' . $row['qut'] . '</p>
                                                </div>
                                            </div>
                                            <div class="row bg-light text-center align-items-center justify-content-center py-2">
                                                <div class="col-6">
                                                    <p class="mb-0">Min Weight</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">' . $row['Min_Weight'] . 'Kg</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>';
            $output .= '</div>';
        }


        echo $output;
    } else {
        echo "<h2>No Record Found</h2>";
    }
}


mysqli_close($conn);
?>
<script type="text/JavaScript" src="js/jquery.js"></script>

<script type="text/javascript">
   
   $(document).ready(function() {
    function loadProduct(page) {
        $.ajax({
                    url: "ajax-pagination.php",
                    type: "POST",
                    data: { page_no : page},
                    success: function(data){
                        $("#product-display").html(data);

                        $('.addToCartBtn').click(function(e) {
                            e.preventDefault();
                            var productId = $(this).data('id');
                            

                            
                            window.location.href = "cart.php?id=" + productId;
                            
                        });
                    }

                });
    }
    loadProduct();
});

</script>