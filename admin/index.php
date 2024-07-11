<?php 
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!------------- favicon----------- -->
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <!-- ---css link --- -->
    <link rel="stylesheet" href="css/style.css">
    <!-- -------- Bootstrap Css Link ------- -->
    <!-- <link rel="stylesheet" href="Source/css/bootstrap.min.css"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- -------- Font awesome Link ------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="d-flex" id="overallDasboard">
        <!------------------------- sidebar start --------------------------------->
        <div class="secondary-bg " id="sidebarDasboard">
            <!--------- sidebar heading ------------->
            <div class="sidebar-heading primary-text text-center py-4 fs-4 fw-bold text-uppercase border-bottom">
                <img src="images/logo.png" class="img-fluid me-2" alt="icon" width="40px" >
                    Flower<span class="span-color">Bot</span>
            </div>
            <!--------- sidebar list ------------  -->
            <div class="list-group list-group-flush mb-3 ">

                <a href="index.php" class="list-group-item list-group-item-action bg-transparent active primary-text fw-bold"
                    aria-current="true">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                </a>

                <a href="products.php" class="list-group-item list-group-item-action bg-transparent primary-text fw-bold">
                    <i class="fas fa-gift me-2"></i>Products
                </a>

                <a href="manage.php" class="list-group-item list-group-item-action bg-transparent primary-text fw-bold">
                    <i class="fas fa-chart-line me-2"></i>Manage
                </a>

                <a href="upload.php" class="list-group-item list-group-item-action bg-transparent primary-text fw-bold">
                    <i class="fas fa-shopping-cart me-2"></i>Upload New
                </a>

                <a href="remove.php" class="list-group-item list-group-item-action bg-transparent primary-text fw-bold">
                    <i class="fas fa-map-marker-alt me-2"></i>Remove
                </a>

                <a href="customer.php" class="list-group-item list-group-item-action bg-transparent primary-text fw-bold">
                    <i class="fas fa-comment-dots me-2"></i>Customer
                </a> 

                <a href="admin.php" class="list-group-item list-group-item-action bg-transparent primary-text fw-bold">
                    <i class="fas fa-user-secret me-2"></i>Admin Control
                </a>

                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                    <i class="fas fa-project-diagram me-2"></i>Logout
                </a>

            </div>
        </div>

        <!------------------------------------ sidebar end --------------------------->

        <!------------------------------------ Main right panel  --------------------------->
        <div id="mainDasboard">
            <nav class="navbar navbar-expand-lg navbar-light secondary-bg py-4 px-4 border-start ">
                <!------------- left 2item ----------->

                <div class="d-flex align-items-center primary-text">
                    <i class="fas fa-align-left main-color fs-4 me-3" id="menuSidebarToggle"></i>
                    <h2 class="fs-4 fw-bold m-0">Dashboard</h2>
                </div>
                <!------------- left 2item end----------->
                <!------------- right item ----------->

                <div class="ms-auto mb-2 mb-lg-0 primary-text fw-bold ">
                        <i class="fas fa-user me-2 main-color"></i>Ananth
                </div>
                <!------------- right item end----------->

            </nav>

            <!------------- chart details ----------->
            <div class="container-fluid px-4 details_area">

                <div class="row g-3 my-3">
                    <div class="col-md-3">
                        <div class="p-3 secondary-bg shodow-sm d-flex justify-content-around align-items-center rounded">
                            <div class="primary-text">
                                <h3 class="fs-4">400</h3>
                                <p class="fs-5">Products</p>
                            </div>
                            <i class="fas fa-gift fs-2 main-color border rounded-pill primary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 secondary-bg shodow-sm d-flex justify-content-around align-items-center rounded">
                            <div class="primary-text">
                                <h3 class="fs-4">1002</h3>
                                <p class="fs-5">Sales</p>
                            </div>
                            <i class="fas fa-hand-holding fs-2 main-color border rounded-pill primary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 secondary-bg shodow-sm d-flex justify-content-around align-items-center rounded">
                            <div class="primary-text">
                                <h3 class="fs-4">700</h3>
                                <p class="fs-5">Delivery</p>
                            </div>
                            <i class="fas fa-truck fs-2 main-color border rounded-pill primary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 secondary-bg shodow-sm d-flex justify-content-around align-items-center rounded">
                            <div class="primary-text">
                                <h3 class="fs-4">25%</h3>
                                <p class="fs-5">Increase</p>
                            </div>
                            <i class="fas fa-chart-line fs-2 main-color border rounded-pill primary-bg p-3"></i>
                        </div>
                    </div>
                </div>
                <!------------- chart details  end----------->

                <!------------- Recent update details ----------->
                <div class="row my-5">
                    <h3 class="fs-4 mb-3 second-text">Recent Updeted</h3>
                    <div class="col">
                        <table class="table  shadow-sm table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Red rose</td>
                                    <td>Dhiva</td>
                                    <td>$500</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>White rose</td>
                                    <td>Ananth</td>
                                    <td>$600</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Yellow rose</td>
                                    <td>Kavi</td>
                                    <td>$300</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Multi color</td>
                                    <td>Tharik</td>
                                    <td>$540</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Multi color</td>
                                    <td>Tharik</td>
                                    <td>$540</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Multi color</td>
                                    <td>Tharik</td>
                                    <td>$540</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Multi color</td>
                                    <td>Tharik</td>
                                    <td>$540</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Multi color</td>
                                    <td>Tharik</td>
                                    <td>$540</td>
                                </tr>
                              
                            </tbody>
                        </table>
                        <!------------- Reacent update details  end ----------->


                    </div>
                </div>
            </div>
        </div>
    </div>






    <!-- --------JS Link------- -->
    <Script src="js/script.js"></Script>
    <!-- --------Bootstrap JS Link------- -->
     <!-- <script src="Source/js/bootstrap.min.js"></script>
     <script src="Source/js/jquary.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- --------Bootstrap JQuary Link------- -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

</html>