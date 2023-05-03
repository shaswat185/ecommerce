<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home-page</title>
    <?php include 'links.php' ?>
    <?php include 'components/navbar.php' ?>
    <style>
        @media screen and (min-width:992px) {
            .laptop {
                width: 450px;
                height: auto;
            }
        }

        @media screen and (min-width:992px) {
            .console {
                /* width: 100%; */
                height: 250px;
            }
        }

        .small-text {
            font-size: 12px;
        }
    </style>
</head>

<body>


    <div class="container">
        <img src="assets/images/banner.jpg" class="img-fluid banner" alt="" srcset="">


    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="product card border-0 m-2 shadow p-2 px-5 bg-dark">
                    <div class="card-body">
                        <img src="assets/images/earphone.png" class="img-fluid product-img" alt="" srcset="">
                        <!-- <p class="text-white">earphone</p> -->
                        <p class="text-white btn btn-danger py-2 my-4 rounded-pill text-center p-3 px-4">Browse</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="product card border-0 m-2 shadow p-2 px-5 bg-warning">
                    <div class="card-body">
                        <img src="assets/images/watch.png" class="img-fluid product-img" alt="" srcset="">
                        <p class="text-warning btn btn-light py-2 my-4 rounded-pill text-center p-3 px-4">Browse</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="product card border-0 m-2 shadow px-5" style="background-color: #DD233F;">
                    <div class="card-body">
                        <img src="assets/images/laptop.png" style="" class="laptop img-fluid float-end" alt="" srcset="">
                        <p class="text-danger btn btn-light py-2 rounded-pill text-center p-3 px-4">Browse</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="product card border-0 shadow-sm" style="background-color:#ededed;">
                    <div class="card-body">
                        <img src="assets/images/console.png" style="" class="console product img-fluid" alt="" srcset="">

                        <br>
                        <p class="text-center h3">Gameing <span class="text-white h1 fw-bold">Console</span></p>
                        <p class="text-white btn btn-danger py-2 rounded-pill text-center p-3 px-4 ms-md-5">Browse</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="product card border-0 m-2 shadow-sm p-2 px-5 bg-secondary">
                    <div class="card-body">
                        <img src="assets/images/vr.png" class="img-fluid m-4" alt="" srcset="">
                        <p class="text-white h4">Play</p>
                        <p class="text-white fw-bold h2">Games</p>
                        <p class="text-success btn btn-light py-2 my-4 rounded-pill text-center p-3 px-4">Browse</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="product card border-0">
                    <div class="card-body">
                        <img src="assets/images/sound.jpg" class="shadow-sm img-fluid" alt="" srcset="">
                        <p class="text-primary btn btn-light py-2 my-4 rounded-pill text-center p-3 px-4">Browse</p>
                    </div>
                </div>
            </div>

        </div>



        <div class="row my-5">

            <div class="col-12 col-lg-3">
                <i class=" fa-solid fa-truck-fast fa-2x text-danger"></i>&emsp;<span class=" fw-bold">Free Shipping </span> <br><span class="text-secondary small-text ms-md-5">Free Shipping On All Order</span>
            </div>
            <div class="col-12 col-lg-3">
                <i class=" fa-solid fa-certificate fa-2x text-danger"></i></i>&emsp;<span class=" fw-bold">Money Guarantee </span> <br><span class="text-secondary small-text ms-md-5">30 Day Money Back</span>
            </div>
            <div class="col-12 col-lg-3">
                <i class=" fa-solid fa-headphones fa-2x text-danger"></i>&emsp;<span class=" fw-bold">Online Support 24/7 </span> <br><span class="text-secondary small-text ms-md-5">Technical Support 24/7</span>
            </div>
            <div class="col-12 col-lg-3">
                <i class=" fa-solid fa-wallet fa-2x text-danger"></i>&emsp;<span class=" fw-bold">Secure Payment </span> <br><span class="text-secondary small-text ms-md-5">All Card Accecpted</span>
            </div>

        </div>


        <div class="card" style="background-color: red; border-radius:14px;">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <span class="text-white ms-md-5" style="font-size:12px;">20% OFF</span> <br>
                        <span class="text-white ms-md-5" style="font-size:3rem;"> FIT</span> <br>
                        <span class="text-white ms-md-5" style="font-size:3rem;"> SMART</span>
                    </div>
                    <div class="col-12 col-lg-6">
                        <span class="text-white" style="font-size:12px;">Beat Solo Air</span> <br>
                        <span class="text-white" style="font-size:3rem;">Summer Sale</span> <br>
                        <span class="text-white" style="font-size:12px;">Compant That's grown 270 to 480 employees in the last 12 month</span>

                    </div>
                </div>
            </div>
        </div>


        <h2 class="text-center my-5 fw-bold">Best Seller Products</h2>

        <div class="row">
            <div class="col-6 col-lg-3">
                <div class="card m-3 seller-product">
                    <div class="card-body">
                        <img src="assets/images/headphone.png"  class="img-fluid" alt="">
                    </div>
                </div>
                <span class="ms-5">Beats</span> <br>
                <span class="ms-5"><i class="fa-solid fa-indian-rupee-sign"></i>&nbsp;995</span>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card m-3 seller-product">
                    <div class="card-body">
                        <img src="assets/images/headphone.png"  class="img-fluid" alt="">
                    </div>
                </div>
                <span class="ms-5">Beats</span> <br>
                <span class="ms-5"><i class="fa-solid fa-indian-rupee-sign"></i>&nbsp;995</span>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card m-3 seller-product">
                    <div class="card-body">
                        <img src="assets/images/headphone.png"  class="img-fluid" alt="">
                    </div>
                </div>
                <span class="ms-5">Beats</span> <br>
                <span class="ms-5"><i class="fa-solid fa-indian-rupee-sign"></i>&nbsp;995</span>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card m-3 seller-product">
                    <div class="card-body">
                        <img src="assets/images/headphone.png"  class="img-fluid" alt="">
                    </div>
                </div>
                <span class="ms-5">Beats</span> <br>
                <span class="ms-5"><i class="fa-solid fa-indian-rupee-sign"></i>&nbsp;995</span>
            </div>
        </div>


        <div class="row my-5">
            <div class="col-6 col-lg-3">
                <div class="card m-3 seller-product">
                    <div class="card-body">
                        <img src="assets/images/headphone.png"  class="img-fluid" alt="">
                    </div>
                </div>
                <span class="ms-5">Beats</span> <br>
                <span class="ms-5"><i class="fa-solid fa-indian-rupee-sign"></i>&nbsp;995</span>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card m-3 seller-product">
                    <div class="card-body">
                        <img src="assets/images/headphone.png"  class="img-fluid" alt="">
                    </div>
                </div>
                <span class="ms-5">Beats</span> <br>
                <span class="ms-5"><i class="fa-solid fa-indian-rupee-sign"></i>&nbsp;995</span>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card m-3 seller-product">
                    <div class="card-body">
                        <img src="assets/images/headphone.png"  class="img-fluid" alt="">
                    </div>
                </div>
                <span class="ms-5">Beats</span> <br>
                <span class="ms-5"><i class="fa-solid fa-indian-rupee-sign"></i>&nbsp;995</span>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card m-3 seller-product">
                    <div class="card-body">
                        <img src="assets/images/headphone.png"  class="img-fluid" alt="">
                    </div>
                </div>
                <span class="ms-5">Beats</span> <br>
                <span class="ms-5"><i class="fa-solid fa-indian-rupee-sign"></i>&nbsp;995</span>
            </div>
        </div>

    </div>


    <?php include 'components/footer.php' ?>
    <?php include 'scripts.php' ?>
</body>

</html>