<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .btn-cart {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 10px;
            border: none;
            background-color: transparent;
            position: relative;
        }
        
        .btn-cart::after {
            content: attr(data-quantity);
            width: fit-content;
            height: fit-content;
            position: absolute;
            font-size: 15px;
            color: white;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            opacity: 0;
            visibility: hidden;
            transition: .2s linear;
            top: 115%;
        }
        
        .icon-cart {
            width: 24.38px;
            height: 30.52px;
            transition: .2s linear;
        }
        
        .icon-cart path {
            fill: rgb(28,75,73);
            transition: .2s linear;
        }
        
        .btn-cart:hover > .icon-cart {
            transform: scale(1.2);
        }
        
        .btn-cart:hover > .icon-cart path {
            fill: rgb(65,129,122);
        }
        
        .btn-cart:hover::after {
            visibility: visible;
            opacity: 1;
            top: 105%;
        }
        
        .quantity {
            display: none;
        }


    
            /* logoText */
            .shine {
                font-size: 2rem;
                font-weight: 900;
                color: rgba(255, 255, 255, 0.3);
                background: #222 -webkit-gradient(
                    linear,
                    left top,
                    right top,
                    from(#222),
                    to(#222),
                    color-stop(0.5, #fff)
                    ) 0 0 no-repeat;
                background-image: -webkit-linear-gradient(
                    -40deg,
                    transparent 0%,
                    transparent 40%,
                    #fff 50%,
                    transparent 60%,
                    transparent 100%
                );
                -webkit-background-clip: text;
                -webkit-background-size: 50px;
                -webkit-animation: zezzz;
                -webkit-animation-duration: 5s;
                -webkit-animation-iteration-count: infinite;
                }
                @-webkit-keyframes zezzz {
                0%,
                10% {
                    background-position: -200px;
                }
                20% {
                    background-position: top left;
                }
                100% {
                    background-position: 200px;
                }
                }

                /* Logo */
                .Itlogo{
                    transform: rotate(-30deg);
                    position: absolute; /* Set the image to absolute positioning */
                    top: -1; /* Position the image at the top */
                    left: 45px; 
                }
                .navbar-brand {
                    position: relative; 
                }
                .shine{
                    margin-left: 100px;
                }
    </style>
    <title>Document</title>

</head>
<body>
    <nav class=" opacity-75 navbar navbar-expand-lg bg-secondary-subtle sticky-top border-bottom border-info ">
        <div class="container-fluid">
            <div class="navbar-brand d-flex align-items-center">
                <img class="Itlogo me-2" src="img/logo-removebg-preview.png" alt="Logo" width="70" height="70" >
                <div class="shine">ITshoeStore</div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mt-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#profileModal">
                                    Profile <img src="img/profile.png" width="25" height="24">
                                </a>
                            </li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Settings <img src="img/settings.png" width="20" height="20"></a></li>
                        </ul>

                        <!--Modal-->
                        <div class="modal fade" id="profileModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 align-item-center" id="profileModalLabel">Edit Profile </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="row g-3 needs-validation" novalidate>
                                            <div class="col-md-4">  
                                                <label for="validationCustom01" class="form-label">First name</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Set Now" required>
                                                <div class="valid-feedback">
                                                Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom02" class="form-label">Last name</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Set Now" required>
                                                <div class="valid-feedback">
                                                Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustomUsername" class="form-label">Username</label>
                                                <div class="input-group has-validation">
                                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                    <input type="text" class="form-control" id="validationCustomUsername"  aria-describedby="inputGroupPrepend" required>
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom03" class="form-label">City</label>
                                                <input type="text" class="form-control" id="validationCustom03" placeholder="Set Now" required>
                                                <div class="invalid-feedback">
                                                Please provide a valid city.
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom04" class="form-label">State</label>
                                                <select class="form-select" id="validationCustom04" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option>...</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                Please select a valid state.
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom05" class="form-label">Zip</label>
                                                <input type="text" class="form-control" id="validationCustom05" placeholder="Set Now" required>
                                                <div class="invalid-feedback">
                                                Please provide a valid zip.
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                <label class="form-check-label" for="invalidCheck">
                                                    Agree to terms and conditions
                                                </label>
                                                <div class="invalid-feedback">
                                                    You must agree before submitting.
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary" type="submit">Submit form</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Form.php">Login</a>
                    </li>
                </ul>

                
                <!-- Cart -->
                <a class="navbar-brand me-2" href="CRUD/shopping_cart.php">
                    <button data-quantity="0" class="btn-cart">
                        <svg class="icon-cart" viewBox="0 0 24.38 30.52" height="30.52" width="24.38" xmlns="http://www.w3.org/2000/svg">
                            <title>icon-cart</title>
                            <path transform="translate(-3.62 -0.85)" d="M28,27.3,26.24,7.51a.75.75,0,0,0-.76-.69h-3.7a6,6,0,0,0-12,0H6.13a.76.76,0,0,0-.76.69L3.62,27.3v.07a4.29,4.29,0,0,0,4.52,4H23.48a4.29,4.29,0,0,0,4.52-4ZM15.81,2.37a4.47,4.47,0,0,1,4.46,4.45H11.35a4.47,4.47,0,0,1,4.46-4.45Zm7.67,27.48H8.13a2.79,2.79,0,0,1-3-2.45L6.83,8.34h3V11a.76.76,0,0,0,1.52,0V8.34h8.92V11a.76.76,0,0,0,1.52,0V8.34h3L26.48,27.4a2.79,2.79,0,0,1-3,2.44Zm0,0"></path>
                        </svg>
                        <span class="quantity"></span>
                    </button>                
                </a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>