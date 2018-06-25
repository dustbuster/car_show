<!doctype html>
<html lang="en">
    <head>
       <?php include 'links.php'; ?>
               <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
        
         <!-- Include jQuery -->
  <!-- <script src="https://code.jquery.com/jquery-1.8.2.min.js"></script> -->

  <!-- Include jQuery Popup Overlay -->
  <!-- <script src="https://cdn.rawgit.com/vast-engineering/jquery-popup-overlay/1.7.13/jquery.popupoverlay.js"></script> -->
          <!-- Add an optional button to open the popup -->
        <style>
            
        </style>
    </head>
    <body class="bgc">
        <div id="main-wrapper">
            <div id="wrapper1">
                <div class="wrap">
                    <?php include 'header.php'; ?>
                    <div id="mobile-side-menu" class="">
                        <div class="inner ">
                            <div class="close-wrapper">
                                <img src="https://cdn.eastwood.com/skin/frontend/eastwood/eastwood/images/icons/close.svg" alt="close" class="close-mobile-menu close-mobile-button">
                            </div>

                            <div class="top">
                                <h5>Find Anything, Fast!</h5>
                                <div class="search">
                                    <form class="search-form-mobile" action="//search.eastwood.com/search" method="get">
                                        <div class="search-mobile-inner">
                                            <div class="search-input">
                                                <input type="text" class="input-text" autocomplete="off" name="w" placeholder="Search...">
                                            </div>
                                            <div class="search-button">
                                                <input type="image" src="https://cdn.eastwood.com/skin/frontend/eastwood/eastwood/images/icons/mag.svg" onclick="$(this.form).submit();">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <hr>
                                <h5>Need Support or Have a Question?</h5>
                                <div class="call"><a href="tel:+1-800-343-9353">Press To Call 800-343-9353</a></div>
                                <hr>
                            </div>
                            <div class="menu">
                                <ul>
                                    <li><a href="https://garage.eastwood.com" alt="Garage How To">Garage How To<img class="mobile-slide-icon"
                                        src="https://cdn.eastwood.com/skin/frontend/eastwood/eastwood/images/icons/right-blue.svg"
                                        alt="Click Here">
                                        </a>
                                    </li>
                                    <li><a href="https://www.eastwood.com/stores/" alt="Stores">Stores<img class="mobile-slide-icon"
                                        src="https://cdn.eastwood.com/skin/frontend/eastwood/eastwood/images/icons/right-blue.svg"
                                        alt="Click Here"></a></li>
                                    <li><a href="https://www.eastwood.com/customer/account/" title="Account" >Account<img class="mobile-slide-icon"
                                        src="https://cdn.eastwood.com/skin/frontend/eastwood/eastwood/images/icons/right-blue.svg"
                                        alt="Click Here"></a></li>
                                    <li><a href="https://www.eastwood.com/checkout/onepage/" title="Checkout" >Checkout<img class="mobile-slide-icon"
                                        src="https://cdn.eastwood.com/skin/frontend/eastwood/eastwood/images/icons/right-blue.svg"
                                        alt="Click Here"></a></li>
                                </ul>
                            </div>
                            <div class="seal">
                                <img class="mobile-slide-seal" src="https://cdn.eastwood.com/skin/frontend/eastwood/eastwood/images/icons/guarantee.png" alt="Click Here">
                            </div>
                        </div>
                        <div class="right-close-strip close-mobile-menu">
                        </div>
                    </div>
                    <?php include 'nav.php'; ?>
                    <?php include 'subnav.php'; ?>
                </div>