<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Petty Cash</title>
</head>
<body>
    <!--<div class="preloader">
        <div class="subloader">
            <img src="../assets/images/b53ab608718000227d5d9a752cbd5d5c.gif"class="loaderImage" alt="">
        </div>-->
    </div>

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
            <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
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
                                            <li><a class="dropdown-item" href="#">
                                                <span class="me-2"><i class="fas fa-users-cog"></i></span> Edit Profile</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="#">
                                               <span class="me-2"><i class="fas fa-power-off"></i></span> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
            </nav>
            <div class="container">
                <div class="row text-white d-flex justify-content-center">
                    <div class="col-md-4 mb-2 me-5">
                        <div class="bg-first container">
                            <div class="d-flex justify-content-between">

                                <div>
                                    <h4>Your Balance</h4>
                                    <p class="h5 text-uppercase">ghs 4670.88</p>
                                </div>
                                <div class="mt-auto mb-1">
                                    <i class="refresh fas fa-sync-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ms-5">
                        <div class="bg-first container">
                            <div>
                                <h4>Office Account</h5>
                                <h5>Total Expense</h5>
                            </div>
                            <div class="expense">
                                <p class="text-uppercase text-center h6">ghs 200.67</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mb-5 me-5 ms-5">
           <!-- <p class="h1">hi</p>-->
            <div class="tab-content me-3">
                        <div class="tab-pane show active" id="home1">
                            <div class="border mb-3 mt-0 rounded">
                                <div class="d-flex justify-content-between">
                                    <h5 class="header-title p-2 mb-0 text-success">Recent Requests</h5>
                                    <a href="request.php" class="mt-2 me-3 see">See all</a>
                                </div>
                                <div class="table-responsive" style="height: 300px;">
                                    <table class="table table-borderless table-striped table-nowrap mb-0">
                                        <tbody>
                                            
                                            <tr>
                                                <td style="width: 30px;">
                                                    <div class="avatar-sm rounded bg-soft-info">
                                                        <i class="fas fa-history ms-2 avatar-title text-info"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-body font-weight-semibold text-center">Stationary Item</p>
                                                </td>

                                                <td class="text-right">
                                                    GHS 90,039.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 10px;">
                                                    <div class="avatar-sm rounded bg-soft-info">
                                                        <i class="fas fa-history ms-2  font-4 avatar-title text-info"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p
                                                        class="text-body font-weight-semibold text-center">Bolt fair to Oceanic</p>
                                                    
                                                </td>

                                                <td class="text-right">
                                                    GHS 90,039.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 10px;">
                                                    <div class="avatar-sm rounded bg-soft-info">
                                                        <i class="fas fa-history ms-2 font-4 avatar-title text-info"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p
                                                        class="text-body font-weight-semibold text-center">Fuel for Company cars</p>
                                                    
                                                </td>

                                                <td class="text-right">
                                                    GHS 90,039.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 10px;">
                                                    <div class="avatar-sm rounded bg-soft-info">
                                                        <i class="fas fa-history ms-2 font-4 avatar-title text-info"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p
                                                        class="text-body font-weight-semibold text-center">Pizza for the boys</p>
                                                    
                                                </td>

                                                <td class="text-right">
                                                    GHS 90,039.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 10px;">
                                                    <div class="avatar-sm rounded bg-soft-info">
                                                        <i class="fas fa-history ms-2 font-4 avatar-title text-info"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <p
                                                        class="text-body font-weight-semibold text-center">Red Hoodie for men</p>
                                                    
                                                </td>
                                                <td class="text-right">
                                                    USD 5,700.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 10px;">
                                                    <div class="avatar-sm rounded bg-soft-info">
                                                        <i class="fas fa-history ms-2 font-4 avatar-title text-info"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p
                                                        class="text-body font-weight-semibold text-center">Designer Awesome T-Shirt</p>
                                                    
                                                </td>
                                                <td class="text-right">
                                                    SLL 888.00
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->
                            </div> <!-- end .border-->

                        </div>
                       <!-- <div class="tab-pane  " id="profile1">
                            <div class="border mt-0 rounded">
                                <h4 class="header-title p-2 mb-0 text-danger">My LOANS</h4>

                                <div class="table-responsive" style="height: 275px;">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <tbody>
                                            <tr>
                                                <td style="width: 10px;">
                                                    <div class="avatar-sm rounded bg-soft-danger">
                                                        <i class="fas fa-history font-4 avatar-title text-danger"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p
                                                        class="text-body font-weight-semibold">Savings Account</p>
                                                    
                                                </td>

                                                <td class="text-right">
                                                    GHS 90,039.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 10px;">
                                                    <div class="avatar-sm rounded bg-soft-danger">
                                                        <i class="dripicons-wallet font-4 avatar-title text-danger"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <a
                                                        class="text-body font-weight-semibold">Red Hoodie for men</a>
                                                    
                                                </td>
                                                <td class="text-right">
                                                    USD 5,700.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 10px;">
                                                    <div class="avatar-sm rounded bg-soft-danger">
                                                        <i class="dripicons-wallet font-4 avatar-title text-danger"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a
                                                        class="text-body font-weight-semibold">Designer Awesome T-Shirt</a>
                                                    
                                                </td>
                                                <td class="text-right">
                                                    SLL 888.00
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                    end table-responsive 
                            </div>  end .border


                        </div>-->

                    </div>
        </div>

    </div>

    <script src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>