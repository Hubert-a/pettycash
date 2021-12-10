<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="stylesheet" href="../assets/css/topup.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .form-div{
    border: 3px solid purple;
    border-radius: 10px;
    outline: none;
    background:linear-gradient(35deg, #4442A6,rgba(119, 119, 255, 0.8));
    height: 40vh;
    width:50%;
    margin-left: 20%;
    margin-top: 10%;
    
    }
    form{
        margin-top: 10%;
    }
    </style>
    <title>Petty Cash</title>
</head>
<body>

    <div class="page">
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-logo-container">
                    <div class="logo-container">
                        <img src="../assets/images/USG.jpg" alt="logoimage" class="logo-sidebar">
                    </div>
                    <div class="brand-name-container">
                        <p class="brand-name">Union<br>
                            <span class="brand-subname">Systems Global</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="navigation-list">
                    <li class="navigation-list-item">
                        <a href="home.php" class="navigation-link active" >
                            <div class="row">
                                <div class="col-2">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="col-10">
                                Home
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item">
                        <a href="request.php" class="navigation-link ">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fas fa-spinner"></i>
                                </div>
                                <div class="col-10">
                                Request
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item">
                        <a href="history.php" class="navigation-link ">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fas fa-history"></i>
                                </div>
                                <div class="col-10">
                                History
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item">
                        <a href="topup.php" class="navigation-link">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fas fa-money-bill-alt"></i>
                                </div>
                                <div class="col-10">
                                Top Up Balance
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item">
                        <a href="contacts.php" class="navigation-link">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fas fa-address-book"></i>
                                </div>
                                <div class="col-10">
                                Contacts
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item">
                        <a href="settings.php" class="navigation-link">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fas fa-users-cog"></i>
                                </div>
                                <div class="col-10">
                                Settings
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item">
                        <a href="#" class="navigation-link">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fas fa-power-off"></i>
                                </div>
                                <div class="col-10">
                                Logout
                                </div>
                            </div>
                        </a>
                    </li>

                </ul>

            </div>
        </div>
        <div class="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid ms-5">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            
                            <ul class="navbar-nav me-5 ms-auto mb-2 mb-lg-0 ">
                                <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Hubert
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="#">Logout</a></li>
                                            </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
            </nav>
                    <div class="form-div">
                        <form action="home.php" class="me-3 ms-3">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control input" id="amount" placeholder="GHS 100.00">
                                <label for="amount">Enter Amount</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Top Up</button>

                                <p class="mt-3 text-white">Amount is in Ghana cedis</p>
                            </div>
                        </form> 
                    </div>
        </div>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>