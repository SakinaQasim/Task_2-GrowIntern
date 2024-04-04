<?php
$conn = mysqli_connect("localhost", "root", "", "vegetable") or die("Connection failed");

$limit_per_page = 9;
$page = isset($_GET['page_no']) ? $_GET['page_no'] : 1;

$page = "";
if (isset($_POST["page_no"])) {
    $page = $_POST["page_no"];
} else {
    $page = 1;
}

$offset = ($page - 1) * $limit_per_page;

$sql = "SELECT * FROM product LIMIT {$offset},{$limit_per_page}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
$output = "";

if (mysqli_num_rows($result) > 0) {
    $output .= '<div class="row g-4 justify-content-center">';

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= '<div class="col-md-6 col-lg-6 col-xl-4">
            <div class="rounded position-relative fruite-item">
                <div class="fruite-img">
                    <img src="' . $row['image_url'] . '" class="img-fluid w-100 rounded-top" alt="">
                </div>
                <div class="text-white bg-danger px-3 py-1 rounded position-absolute" id="type" name="type" style="top: 10px; left: 10px;">' . $row['type_name'] . '</div>
                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                    <h4 class="text-danger" id="name" name="name">' . $row['name'] . '</h4>
                    <p id="description_file_path" name="description_file_path">' . $row['description_file_path'] . '</p>
                    <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0" id="price" name="price">Rs.' . $row['price'] . ' / kg</p>
                        <a href="" class="btn border border-secondary rounded-pill px-3 text-danger addToCartBtn" data-id="' . $row['id'] . '"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                    </div>
                </div>
            </div>
        </div>';
    }
    echo '</div>';
    $output .= '</div></div>';

    $sql_total = "SELECT * FROM product";
    $records = mysqli_query($conn, $sql_total) or die("Query Unsuccessful");
    $total_record = mysqli_num_rows($records);
    $total_pages = ceil($total_record / $limit_per_page);
    $output .= '<div id= "pagination">
    <div class="col-12">
        <div class="pagination d-flex justify-content-center mt-5 text-danger">';

    for ($i = 1; $i <= $total_pages; $i++) {
        $output .= "<a  id='{$i}'  href='' class='active rounded'>{$i}</a>";
    }
    $output .='</div>';


    echo $output;
} else {
    echo "<h2>No Record Found</h2>";
}
