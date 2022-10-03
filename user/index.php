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

                    <div class="main-side-content d-mobile-none">

                        <h1 class="content-header">Overview</h1>

                        <p class="last-update"><span class="update-dot"></span><span class="update-text"><?php echo date("d F Y") ?></span> </p>

                    </div>

                    <div class="main-side-content">

                        <div class="contents balance-card">

                            <p class="balance-title">Balance</p>

                            <h1 class="balance"><span class="currency-icon">&#8358;</span> <span class="price"><?php echo format_price("3000") ?></span></h1>

                            <div class="balance-actions">

                                <button class="add-button">Add Funds</button>
                                <button class="withdraw-button">Withdraw</button>

                            </div>

                        </div>

                        <div class="contents action-card">

                            <div class="action-content transaction-action">

                                    <a class="action bills-action">

                                        <span class="icon"><i class="fa-solid fa-money-bill"></i></span>

                                        <span class="text">Bills</span>

                                    </a>

                                    <a class="action chores-action">

                                        <span class="icon"><i class="fa-solid fa-socks"></i></span>

                                        <span class="text">Chores</span>

                                    </a>

                                    <a class="action food-action">

                                        <span class="icon"><i class="fa-solid fa-utensils"></i></span>

                                        <span class="text">Food</span>

                                    </a>

                                    <a class="action store-action">

                                        <span class="icon"><i class="fa-solid fa-store"></i></span>

                                        <span class="text">Store</span>

                                    </a>

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

                    <div class="main-side-content">

                        <div class="contents transaction-list">

                            <div class="transaction-list-header">

                                <h3>Recent transactions</h3>

                                <div class="header-action-btn">

                                    <button class="navigation-btn left-btn"><i class="fa-solid fa-arrow-left"></i></button>
                                    <button class="navigation-btn right-btn"><i class="fa-solid fa-arrow-right"></i></button>
                                </div>

                            </div>

                            <p class="count"><span class="present">1</span>/<span class="total">3</span></p>

                            <div class="transactions">
                                    
                                <a href="./" class="transaction-card">

                                    <div class="transaction-card-details">

                                        <div class="transaction-card-image">
                                            <img src="./assets/images/mtn_logo.jpg" alt="">
                                        </div>
                                        
                                        <div class="transaction-card-text">

                                            <h4>MTN Data</h4>
                                            <p>Now</p>

                                        </div>


                                    </div>

                                    <span class="price-tag withdrawn">-&#8358;<?php echo format_price("250") ?></span>


                                </a>

                                <a href="./" class="transaction-card">

                                    <div class="transaction-card-details">

                                        <div class="transaction-card-image">
                                            <img src="./assets/images/First_Bank_of_Nigeria_logo.png" alt="">
                                        </div>
                                        
                                        <div class="transaction-card-text">

                                            <h4>Credit (Firstbank)</h4>
                                            <p>5 mins ago</p>

                                        </div>


                                    </div>

                                    <span class="price-tag received">+&#8358;<?php echo format_price("250") ?></span>


                                </a>


                            </div>

                        </div>

                        <div class="contents transaction-notification">


                            <div class="notification-header">

                                <h4>Notifications</h4>

                                <button class="edit-notification-btn"><i class="fa-solid fa-pen"></i></button>

                            </div>

                            <div class="notification-list">

                                <div class="notification-card">

                                    <div class="notification-icon">

                                        <i class="fa-solid fa-arrow-down"></i>

                                    </div>

                                    <div class="notification-message">

                                        <p class="message"><a href="./">Hooli</a> sent you a sum of &#8358; <?php echo format_price("1000"); ?></p>

                                    </div>

                                </div>

                                <div class="notification-card">

                                    <div class="notification-icon">

                                        <i class="fa-solid fa-arrow-up"></i>

                                    </div>

                                    <div class="notification-message">

                                        <p class="message">you sent a sum of &#8358; <?php echo format_price("1000"); ?> to <a href="./">Hooli</a> </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        
        <script src="../assets/scripts/functions.js" async></script>
        <script src="./assets/scripts/index.js" defer></script>
    </body>
</html>