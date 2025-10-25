<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    <div class="d-flex">
        <aside class="side-bar">
            <div class="logo text-center pt-1">
                <a class="logo" href="#">
                    <img src="{{ asset('propertia-logo.png') }}" style="width: 100px;" alt="">
                </a>
            </div>
            {{-- profile img --}}
            <div>
                <div class="text-center mt-5">
                    <img src="{{ asset('default-profile.jpg') }}" class="rounded-circle" alt="Profile Image"
                        width="80" height="80">
                    <h5 class="mt-2">John
                </div>

                {{-- Sidebar Menu --}}
                <div class="sidebar-menu">
                    <ul class="nav  flex-column mt-4">
                        <li class="nav-item">
                            <a class="nav-link active d-flex" href="#"><span class="me-auto">Dashboard</span> <i class="fa-solid fs-5 fa-chart-column"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex" href="#" ><span class="me-auto">Property</span> <i class="fa-solid fa-city fs-5"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Employees</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Customers</a>
                        </li>
                </div>

        </aside>
        <div class="main">
            <nav class="navbar top-nav navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown">
                                    Properties
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Buy a Property</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Sell Yours</a></li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="container-fluid content-area">
                <h1>Hi</h1>
            </div>

        </div>




    </div>






    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
