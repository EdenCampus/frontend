<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Utopia Campus Register</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./assets/plugins/fontawesome/css/all.css">
        <link rel="stylesheet" href="./assets/styles/index.css">
        <link rel="stylesheet" href="./assets/styles/login.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        

        <div class="main">
            

            <div class="login-container signup-container">
                

                <div class="login-form-container">

                    <div class="form-header">

                        <div class="logo"></div>

                        <div class="form-link">
                            <ul>
                                <li><a href="./index.html">Home</a></li>
                                <li><a href="./login.html">Login</a></li>
                            </ul>

                        </div>


                    </div>

                    <h2 class="login-title">Select Student Area</h2>

                    <div class="form-steps">

                        <div class="step-length">

                            <div class="step-percent"></div>

                        </div>

                        <div class="steps active-step" id="step-one" data-id="1">

                            <span>1</span>

                        </div>

                        <div class="steps" id="step-two" data-id="2">

                            <span>2</span>

                        </div>

                        <div class="steps" id="step-three" data-id="3">

                            <span>3</span>

                        </div>

                    </div>

                    <form action="" class="login-form signup-form" method="get" onsubmit="return (processSignup())">

                        <div class="school-search-container signup-container-content">

                            <div class="form-content">
    
                                <label for="school-search">Search</label>

                                <div class="form-inner-container">
                                    <input type="text" class="school-search" id="school-search" placeholder="Enter search keywords...">

                                    <!-- this shows when the email search is happening so if the email is not in db, it shows the below span element with the class value of completed search, add " active loader" to the class to make the loader show  -->
                                    <span class="loader"></span>

                                </div>
    
                            </div>
    
    
                            <div class="school-search-result">
    
                                <div class="school" data-school="Federal polytechnic Ado Ekiti" data-id="1">
                                    
                                    <div class="school-logo">
    
                                        <img src="./assets/images/fedpolad.png" alt="">
    
                                    </div>
    
                                    <div class="school-details">
    
                                        <h3 class="school-name">Federal Polytechnic Ado Ekiti</h3>
    
                                        <p class="distance"><span class="icon"><i class="fa-solid fa-location-dot"></i></span><span class="icon">5km radius</span></p>
    
                                        <p class="total-users"><span class="icon"><i class="fa-solid fa-users"></i></span><span class="icon">200 registered students</span></p>
    
                                        <div class="custom-radio-btn">
    
                                            <div class="btn"></div>
    
                                        </div>
    
                                        
                                    </div>

                                    <input type="radio" id="selected-school" name="selected-school" value="Federal polytechnic Ado">
    
                                </div>
    
                                <div class="school" data-school="Ekiti state university Ado Ekiti" data-id="2">
                                    
                                    <div class="school-logo">
    
                                        <img src="./assets/images/eksu.png" alt="">
    
                                    </div>
    
                                    <div class="school-details">
    
                                        <h3 class="school-name">Ekiti state university Ado Ekiti</h3>
    
                                        <p class="distance"><span class="icon"><i class="fa-solid fa-location-dot"></i></span><span class="icon">10km radius</span></p>
    
                                        <p class="total-users"><span class="icon"><i class="fa-solid fa-users"></i></span><span class="icon">250 registered students</span></p>
    
                                        <div class="custom-radio-btn">
    
                                            <div class="btn"></div>
    
                                        </div>
    
                                        
                                    </div>

                                    <input type="radio" id="selected-school" name="selected-school" value="Ekiti state university Ado Ekiti">
    
                                </div>

                                <div class="school" data-school="Ekiti state university Ado Ekiti" data-id="3">
                                    
                                    <div class="school-logo">
    
                                        <img src="./assets/images/eksu.png" alt="">
    
                                    </div>
    
                                    <div class="school-details">
    
                                        <h3 class="school-name">Ekiti state university Ado Ekiti</h3>
    
                                        <p class="distance"><span class="icon"><i class="fa-solid fa-location-dot"></i></span><span class="icon">10km radius</span></p>
    
                                        <p class="total-users"><span class="icon"><i class="fa-solid fa-users"></i></span><span class="icon">250 registered students</span></p>
    
                                        <div class="custom-radio-btn">
    
                                            <div class="btn"></div>
    
                                        </div>
    
                                        
                                    </div>

                                    <input type="radio" id="selected-school" name="selected-school" value="Ekiti state university Ado Ekiti">
    
                                </div>
    
    
                            </div>
    
                            <div class="form-content">
    
                                <button class="continue-btn" type="button" disabled="true"><span class="text">Continue</span><span class="icon"><i class="fa-solid fa-arrow-right"></i></span></button>
    
                            </div>


                        </div>

                        <div class="signup-container-content email-registration">


                            <div class="form-content">
    
                                <label for="email" autocapitalize="false" autocomplete="none">Email</label>

                                <div class="form-inner-container">

                                    <input type="email" class="email" id="email" placeholder="Your email">

                                    <!-- this shows when the email search is happening so if the email is not in db, it shows the below span element with the class value of completed search, add " active loader" to the class to make the loader show  -->
                                    <span class="loader"></span>

                                    <!-- this shows when the email search is completed, add " completed" to the class to make it visible-->
                                    <span class="completed-search"><i class="fa-solid fa-check-circle"></i></span>
                                </div>

                                <p class="err email-err"></p>
    
                            </div>
    
                            <div class="form-content">
    
                                <label for="password">Password  </label>

                                <div class="password-container">
                                    <input type="password" class="password" id="password" placeholder="Your password">
                                    <button type="button" class="show-password" data-class="password">
                                        <span class="eye-slash" data-class="password"><i class="fa-solid fa-eye-slash" data-class="password"></i></span>
                                        <span class="eye" data-class="password"><i class="fa-solid fa-eye" data-class="password"></i></span>
                                    </button>
    
                                </div>

                                <p class="err password-err"></p>
    
                            </div>
    
                            <div class="form-content">
    
                                <label for="password-repeat">Repeat Password</label>

                                <div class="password-container">
                                    <input type="password" class="password-repeat" id="password-repeat" placeholder="Repeat password">
                                    <button type="button" class="show-password" data-class="password-repeat">
                                        <span class="eye-slash" data-class="password-repeat">
                                            <i class="fa-solid fa-eye-slash" data-class="password-repeat"></i>
                                        </span>
                                        <span class="eye" data-class="password-repeat">
                                            <i class="fa-solid fa-eye" data-class="password-repeat"></i>
                                        </span>
                                    </button>
    
                                </div>

                                <p class="err password-repeat-err"></p>
    
                            </div>
    
                            <div class="form-content">
    
                               
    
                            </div>
    
                            <div class="form-content">
    
                                <button type="button" class="continue-btn" disabled><span class="text">Continue</span><span class="icon"><i class="fa-solid fa-arrow-right"></i></span></button>
    
                            </div>

                        </div>

                        <div class="signup-container-content final-registration">


                            <div class="form-content">
    
                                <label for="first-name">First Name</label>
                                <input type="text" class="first-name" id="first-name" placeholder="Your first name">

                                <p class="err first-name-err"></p>
    
                            </div>

                            <div class="form-content">
    
                                <label for="last-name">Last Name</label>
                                <input type="text" class="last-name" id="last-name" placeholder="Your last name">


                                <p class="err last-name-err"></p>
    
                            </div>

                            <div class="form-content">
    
                                <label for="username">username</label>


                                <div class="form-inner-container">

                                    <input type="text" class="username" id="username" placeholder="Your username">

                                    <!-- this shows when the email search is happening so if the email is not in db, it shows the below span element with the class value of completed search, add " active loader" to the class to make the loader show  -->
                                    <span class="loader"></span>

                                    <!-- this shows when the email search is completed, add " completed" to the class to make it visible-->
                                    <span class="completed-search"><i class="fa-solid fa-check-circle"></i></span>

                                </div>    
                                
                                
                                <p class="err username-err"></p>
    
                            </div>
    
                            <div class="form-content">
    
                               
    
                            </div>
    
                            <div class="form-content">
    
                                <button class="submit-btn" disabled="true"><span class="text">Register</span><span class="icon"><i class="fa-solid fa-user-plus"></i></span></button>
    
                            </div>

                        </div>


                        


                    </form>


                    <div class="total-users">

                        <div class="user-images">

                            <div class="images">

                                <img src="./assets/images/user_image.jpg" alt="">

                            </div>

                            <div class="images">

                                <img src="./assets/images/user_image_1.png" alt="">

                            </div>

                            <div class="images">

                                <img src="./assets/images/user_image_2.png" alt="">

                            </div>

                        </div>

                        <div class="user-stats">
                            <h3>400+k</h3>
                            <p>Users from all private and public schools in Nigeria </p>
                        </div>

                    </div>
                    
                </div>

                <div class="login-image">

                    <img src="./assets/images/login_banner.png" alt="">

                </div>
                
            </div>

            

        </div>


       
        
        
        <script src="./assets/scripts/functions.js" async></script>
        <script src="./assets/scripts/loader.js" async></script>
        <script src="./assets/scripts/login.js" defer></script>
        <!-- <script src="./assets/scripts/header.js" defer></script> -->
        <script src="./assets/scripts/animation.js" defer></script>
    </body>
</html>