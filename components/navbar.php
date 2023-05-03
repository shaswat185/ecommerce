<style>
    input[type=text] {
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
    }

    input[type=text]:focus {
        width: 100%;
    }

    .custom-nav {
        background-color: white;
    }


    @media screen and (min-width:992px) {
        .nav-item {
            margin: 10px;
        }
    }

</style>

<nav class="navbar navbar-expand-lg  bg-white">
    <div class="container-fluid">
        <a class="navbar-brand ms-md-5 text-danger fw-bold" href="#">E-Commerce</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mx-auto mb-2 mb-lg-0">
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
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="#">Login</a>
                </li>

            </ul>
            <form>
                <input type="text" name="search" placeholder="Search..">
            </form>
            <span class="shopping-bag ms-3">
                <i class="fa-solid fa-bag-shopping fa-2x"></i>

            </span>
        </div>
    </div>
</nav>

<script>
    function openSearch() {
        var searchBar = document.getElementById("searchBar");
        var searchIcon = document.getElementById("searchIcon");
        if (searchBar.style.display === "none") {
            searchBar.style.display = "block";
            searchIcon.classList.add("clicked");
        } else {
            searchBar.style.display = "none";
            searchIcon.classList.remove("clicked");
        }
    }
</script>