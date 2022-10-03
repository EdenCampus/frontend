<nav>

    <div class="nav-header">

        <div class="logo"></div>

        <button class="adjust-nav-btn">

            <span class="open-icon"><i class="fa-solid fa-angle-left"></i></span>
            <span class="close-icon"><i class="fa-solid fa-angle-right"></i></span>

        </button>

    </div>

    <div class="nav-profile">

        <a href="./" class="profile-details">

            <div class="profile-details-image">

                <div class="image">

                    <img src="./assets/images/profile_images/profile_image.jpg" alt="">
                </div>


            </div>

            <div class="profile-details-text">
                <p class="name">Duyil Ayomid</p>
                <p class="time"><?php echo date("d.m.Y") ?></p>
            </div>
        </a>

    </div>


    <div class="nav-link">

        <ul>

            <div class="link background-link">

                <li class="link-container">


                    <a href="#" class="dropdown-btn" data-id="1">
                        
                        <span class="link-text">

                            <span class="icon"><i class="fa-solid fa-cube"></i></span><span class="text">Overview</span>

                        </span>

                        <span class="link-icon">


                            <span class="open-icon"><i class="fa-solid fa-caret-down"></i></span>
                            <span class="close-icon"><i class="fa-solid fa-caret-up"></i></span>

                        </span>
                    
                    </a>

                </li>


                <div class="dropdown-container" data-id="1">

                    <li><a href="./" class="dropdown-link">Notification</a></li>
                    <li><a href="./" class="dropdown-link">Transactions</a></li>

                </div>

            </div>

            <div class="link">

                <li class="link-container">


                    <a href="./">
                        <span class="link-text">

                            <span class="icon"><i class="fa-solid fa-clock"></i></span><span class="text">History</span>

                        </span>

                        
                    
                    </a>

                </li>



            </div>

            <div class="link">

                <li class="link-container">


                    <a href="./">
                        <span class="link-text">

                            <span class="icon"><i class="fa-solid fa-cog"></i></span><span class="text">Settings</span>

                        </span>

                        
                    
                    </a>

                </li>



            </div>
            

            

            

        </ul>

    </div>

</nav>