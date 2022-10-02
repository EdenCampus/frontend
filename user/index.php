<?php require_once("./function/functions.php"); 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Utopia Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.css">
        <link rel="stylesheet" href="./assets/styles/general.css">
        <link rel="stylesheet" href="./assets/styles/index.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="main-body">


            <div class="nav-side">

                <?php require_once("./includes/nav.php") ?>

            </div>
            <div class="main-side">

                <?php require_once("./includes/header.php") ?>

                <div class="main-side-container">

                    <!-- main page content goes here -->

                    <div class="main-side-content">

                        <h1 class="content-header">Overview</h1>

                        <p class="last-update"><span class="update-dot"></span><span class="update-text">Updated 5 mins ago</span> </p>

                    </div>

                    <div class="main-side-content">

                        <div class="contents balance-card">

                            <p class="balance-title">Today's Balance</p>

                            <h1 class="balance"><span class="currency-icon">&#8358;</span> <span class="price"><?php echo format_price("30000"); ?></span></h1>

                            <div class="balance-actions">

                                <button class="add-button">Add Funds</button>
                                <button class="withdraw-button">Withdraw Funds</button>

                            </div>

                        </div>

                        <div class="contents action-card">

                            <div class="action-content transaction-action">

                                    <button class="action withdraw-action">

                                        <span class="icon"><i class="fa-solid fa-money-bill"></i></span>

                                        <span class="text">Withdraw</span>

                                    </button>

                                    <button class="action withdraw-action">

                                        <span class="icon"><i class="fa-solid fa-money-bill"></i></span>

                                        <span class="text">Withdraw</span>

                                    </button>

                                    <button class="action withdraw-action">

                                        <span class="icon"><i class="fa-solid fa-money-bill"></i></span>

                                        <span class="text">Withdraw</span>

                                    </button>

                                    <button class="action withdraw-action">

                                        <span class="icon"><i class="fa-solid fa-money-bill"></i></span>

                                        <span class="text">Withdraw</span>

                                    </button>

                            </div>

                            <div class="action-content transaction-history">

                                <a href="./" class="action action-link">

                                    <div class="history-image">

                                    <div class="image">

                                        <img src="./assets/images/profile_images/profile_image_1.jpeg" alt="">
                                    </div>


                                    </div>

                                    <p class="history-text">@olawale</p>

                                </a>

                                <a href="./" class="action action-link">

                                    <div class="history-image">

                                    <div class="image">

                                        <img src="./assets/images/profile_images/profile_image_1.jpeg" alt="">
                                    </div>


                                    </div>

                                    <p class="history-text">@olawale</p>

                                </a>

                                <a href="./" class="action action-link">

                                    <div class="history-image">

                                    <div class="image">

                                        <img src="./assets/images/profile_images/profile_image_1.jpeg" alt="">
                                    </div>


                                    </div>

                                    <p class="history-text">@olawale</p>

                                </a>

                                <a href="./" class="action action-link">

                                    <div class="history-image">

                                    <div class="image">

                                        <img src="./assets/images/profile_images/profile_image_1.jpeg" alt="">
                                    </div>


                                    </div>

                                    <p class="history-text">@olawale</p>

                                </a>

                                <a href="./" class="action action-link">

                                    <div class="history-image">

                                    <div class="image">

                                        <img src="./assets/images/profile_images/profile_image_1.jpeg" alt="">
                                    </div>


                                    </div>

                                    <p class="history-text">@olawale</p>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        
        <script src="" async defer></script>
    </body>
</html>