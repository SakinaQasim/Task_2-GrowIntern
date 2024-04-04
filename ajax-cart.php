<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$conn = mysqli_connect("localhost", "root", "", "vegetable") or die("Connection failed");

if (isset($_POST['id'])) {
    $productId = $_POST['id'];

    $sql = "SELECT 
                product.image_url, 
                product.name, 
                product.price,
                desk.quality
            FROM 
                product
            INNER JOIN 
                desk ON product.id = desk.id
            WHERE 
                product.id = $productId;";

    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if (mysqli_num_rows($result) > 0) {
        $output = '';

        while ($row = mysqli_fetch_assoc($result)) {
            $output .= '<tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    <img src="' . $row['image_url'] . '" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="">
                                </div>
                            </th>
                            <td>
                                <p class="mb-0 mt-4">' . $row['name'] . '</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-4">' . $row['price'] . 'Rs</p>
                            </td>
                            <td>
                                <div class="input-group quantity mt-4" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-minus rounded-circle bg-light border">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm text-center border-0" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0 mt-4">2.99 $</p>
                            </td>
                            <td>
                                <button class="btn btn-md rounded-circle bg-light border mt-4">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                            </td>
                        </tr>';
        }

        echo $output; 
    } else {
        echo "<h2>No Record Found</h2>";
    }

    mysqli_close($conn);
} else {
    echo "<h2>No ID Provided</h2>";
}
?>
