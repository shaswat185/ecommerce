<style>
    /* input[type=text] {
        width: 130px;
        height: 40px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        background-color: white;
        background-image: url('searchicon.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
        -webkit-transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in-out;
    } */

    /* input[type=text]:focus {
        width: 100%;
    } */

    .custom-nav {
        background-color: white;
    }


    @media screen and (min-width:992px) {
        .nav-item {
            margin: 10px;
        }
    }

    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
        display: none;
    }

    .popup {
        position: fixed;
        width: 300px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 5px #000;
        text-align: center;
    }

    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 24px;
        cursor: pointer;
    }

    /* 
    input[type="text"],
    input[type="password"] {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
        font-size: 14px;
    } */

    /* input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 14px;
    } */

    .cart-icon {
        position: relative;
        display: inline-block;
    }

    .cart-icon i {
        font-size: 20px;
        color: #000000;
    }

    .cart-count {
        position: absolute;
        top: -10px;
        right: -10px;
        background-color: red;
        color: #fff;
        padding: 5px;
        border-radius: 50%;
        font-size: 14px;
    }

    .search-bar {
        width: 100%;
        height: 40px;
        font-size: 20px;
        padding: 10px;
    }

    @media screen and (min-width: 768px) {
        .search-bar {
            width: 500px;
            font-size: 14px;
        }
    }

  
</style>

<nav class="navbar navbar-expand-lg  bg-white">
    <div class="container-fluid">
        <a class="navbar-brand ms-md-5 text-danger fw-bold shado" href="#">E-Commerce</a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto  mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Shop </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark">Contact Us</a>
                </li>
            </ul>
            <form>
                <input type="text" class="form-control search-bar" name="search" placeholder="Search...">
            </form>

            <ul class="navbar-nav">
                <li class="nav-item">

                    <button id="login-btn" class="btn ">Login</button>

                    <div class="overlay">
                        <div class="popup">
                            <span class="close-btn">&times;</span>
                            <h2 class="">Login</h2>
                            <form id="login-form my-3">
                                <div class="mb-4">
                                    <input type="text" class="form-control" placeholder="Email & Number" name="username" required>
                                </div>
                                <div class="mb-4">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                </div>
                                <input type="submit" class="btn btn-primary" value="Login">
                            </form>
                        </div>
                    </div>
                </li>

            </ul>

            <div class="cart-icon">
                <i class="fa fa-shopping-cart"></i>
            </div>

        </div>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {

        // Show login popup form on button click
        $("#login-btn").click(function(e) {
            e.preventDefault();
            $(".overlay").fadeIn();
        });

        // Hide login popup form on close button click
        $(".close-btn").click(function() {
            $(".overlay").fadeOut();
        });

        // Submit login form using AJAX
        $("#login-form").submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "login.php", // Replace with your login script URL
                data: $(this).serialize(),
                success: function(response) {
                    if (response == "success") {
                        alert("Login successful!");
                        $(".overlay").fadeOut();
                    } else {
                        alert("Invalid username or password!");
                    }
                }
            });
        });

    });
</script>