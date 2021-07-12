<!-- header -->
<header class="header">
<div class="header__container">
            
            <a href="../../public_html/index.php" class="header__logo">Eventers</a>
            <div class="header__search">
                <input type="search" placeholder="Search event..." class="header__input">
                <i class='bx bx-search search__icon'></i>
            </div>
            <div class="header__toggle">
                <i class='bx bx-menu' id='header_toggle'></i>
            </div>
            <p class="text-center gray-400"><?php echo 'Hello ' . $_SESSION['first_name']; ?></p>
        </div>
    </header>

    <!-- Navbar -->
    <nav id="navbar" class="nav">
        <div class="nav__container">
            <a href="../../public_html/index.php" class="nav__links nav__logo">
                <i class='bx bx-disc nav__box_icons' ></i>
                <span class="nav__logo__name">Eventers</span>
            </a>

            <div class="nav__list">
                <div class="nav__items">
                    <h3 class="nav__subtitle">Details</h3>
                    
                </div>

                <a href="#" class="nav__links">
                    <i class='bx bx-home-alt nav__box_icons' ></i>
                    <span class="nav__name">Home</span>
                </a>

                <div class="nav__dropdown active">
                    <a href="#" class="nav__links">
                        <i class='bx bx-user nav__box_icons' ></i>
                        <span class="nav__name">Profile</span>
                        <i class='bx bx-chevron-down nav__icon nav__dropdown_icon' ></i>
                    </a>
                    <div class="nav__dropdown__collapse">
                        <div class="nav__dropdown__content">
                            <a href="pages/view-profile.php" class="nav__dropdown__item">Account</a>
                            <a href="#" class="nav__dropdown__item">Password</a>
                           
                        </div>
                    </div>
                </div>

                
                <a href="#" class="nav__links margin__bottom__2rem">
                    <i class='bx bx-message nav__box_icons' ></i>
                    <span class="nav__name">Messages</span>
                </a>
               
            </div>
            <div class="nav__list">
                <div class="nav__items">
                    <h3 class="nav__subtitle">Events</h3>
                
                </div>
                <a href="#" class="nav__links">
                    <i class='bx bx-compass nav__box_icons' ></i>
                    <span class="nav__name">Explore</span>
                </a>
                <a href="#" class="nav__links">
                    <i class='bx bx-calendar-event nav__box_icons' ></i>
                    <span class="nav__name">All events</span>
                </a>
                <a href="#" class="nav__links">
                    <i class='bx bx-bookmark-alt nav__box_icons' ></i>
                    <span class="nav__name">Saved</span>
                </a>
                <a href="#" class="nav__links">
                    <i class='bx bx-time nav__box_icons' ></i>
                    <span class="nav__name">Your event schedule</span>
                </a>
                <a href="#" class="nav__links nav__logout">
                    <i class='bx bx-log-out nav__box_icons' ></i>
                    <span class="nav__name">Log out</span>
                </a>
            </div>
            
        </div>
       
    </nav>