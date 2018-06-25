<?php
// Anyone can hack a front end, i just wanna be sure our values are safe.
if(!empty($_POST)):
    // var_dump($_POST);
    if(isset($_POST['first_name'])){$first_name = $_POST['first_name'];}else{$first_name = '';}
    if(isset($_POST['last_name'])){$last_name = $_POST['last_name'];}else{$last_name = '';}
    if(isset($_POST['email'])){$email = $_POST['email'];}else{$email = '';}
    if(isset($_POST['address'])){$address = $_POST['address'];}else{$address = '';}
    if(isset($_POST['city'])){$city = $_POST['city'];}else{$city = '';}
    if(isset($_POST['state'])){$state = $_POST['state'];}else{$state = '';}
    if(isset($_POST['zipcode'])){$zipcode = $_POST['zipcode'];}else{$zipcode = '';}
    if(isset($_POST['registertype'])){$registertype = $_POST['registertype'];}else{$registertype = '';}
    if(isset($_POST['cartype'])){$cartype = $_POST['cartype'];}else{$cartype = '';}
    if(isset($_POST['emaillist'])){$emaillist = $_POST['emaillist'];}else{$emaillist = '';}
    if($registertype == 'car'){
        $price = 30;
        $message = 'Thank you for entering your car in the show!';
        $mess2 = 'You are registering a '.$cartype;
    }else{
        $price = 8;
        $message = 'Enjoy the show!';
        $mess2 = 'You are not registering a car';
    }
endif;
                    ?>
                    <?php include 'top.php'; ?>
                        <style>
                            .col-xs-12, .col-sm-6 {
                                /*border: 5px solid #fff;
                                background: #fff;*/
                            }
                            /* BIG */
                            @media only screen and (min-width: 600px) {
                                .banner-row {
                                    background-image: url("/banner.jpg");
                                    background-size: cover; 
                                    background-position:center;
                                    min-height: 300px;
                                    margin-left: 3px;
                                }
                            }
                            /* SMALL */
                            @media only screen and (max-width: 600px) {
                                .banner-row {
                                    background-image: url("/banner.jpg");
                                    background-size: cover; 
                                    background-position:center;
                                    min-height: 175px;
                                }
                            }


                            .row {
                                
                            }
                            .bg-white {
                                background: #fff;
                                clear:both;
                            }
                            img.banner {
                                margin-left: 4px; 
                                width: 100%; 
                                height: 100%;
                            }
                            /* BIG */
                            @media only screen and (min-width: 600px) {
                                .xlwords {
                                    color: #fff;
                                    position: absolute;
                                    margin-top: 70px;
                                    margin-left: 80px;
                                    
                                }
                            }
                            /* SMALL */
                            @media only screen and (max-width: 600px) {
                                .xlwords {
                                    color: #fff;
                                    position: absolute;
                                    margin-top: 50px;
                                    margin-left: 20px;
                                    
                                }
                            }
                            /* BIG */
                            @media only screen and (min-width: 600px) {
                                .super {
                                    font-family: "Open Sans";
                                    font-style: italic;
                                    font-size: 35;
                                    font-weight: 600;
                                }
                            }
                            /* SMALL */
                            @media only screen and (max-width: 600px) {
                                .super {
                                    font-family: "Open Sans";
                                    font-style: italic;
                                    font-size: 28;
                                    font-weight: 600;
                                }
                            }

                        </style>
                        <div class="bg-white">
                            <div id="make-space">
                                <form method="POST" name="RegisterForm" action="" >
                                <div class="row">
                                    <div class="banner-row">
                                        <div class="col-xs-1"></div>
                                            <div class="xlwords">
                                                <div class="super-date">
                                                    SATURDAY, JULY 28th
                                                </div>
                                                <h1 class="super">
                                                    2018 EASTWOOD<br>
                                                    SUMMER CLASSIC
                                                </h1>
                                            </div>
                                        <div class="col-xs-1"></div>
                                    </div>
                                    <div class="col-xs-12">
                                        <h2 class="big-title" style="">Enter your Credit Card information</h2>
                                    </div>

                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-10">
                                        <div class="sub-title">
                                            <b>Admission is $8 per family to see the show, $30 to register a car.</b>
                                        </div>
                                    </div>
                                    <div class="col-xs-1"></div>
                                </div>
                            <?php if(!isset($_POST['submitted'])): ?>
                                <form method="POST" name="RegisterForm" action="" >
                                
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <div class="card-js space">
                                                <input style="border: 1px solid #ccc;" class="card-number my-custom-class" name="card_number">
                                                <input style="border: 1px solid #ccc;" class="name" id="the-card-name-id" name="card_holders_name" value="<?=$first_name.' '.$last_name?>" placeholder="Name on card">
                                                <input style="border: 1px solid #ccc;" class="expiry-month" name="expiry_month">
                                                <input style="border: 1px solid #ccc;" class="expiry-year" name="expiry_year">
                                                <input style="border: 1px solid #ccc;" class="cvc" name="cvc">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-1"></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <div id="showaddress" class="maadd form-group">
                                                <label class="font-co">Billing Address</label>
                                                <input name="billing_address" type="text" class="form-control" id="InputFormItem2"  value="<?=$address?>" required />
                                            </div>
                                            <div class="form-group">
                                                <label class="font-co">City</label>
                                                <input name="billing_city" type="text" class="form-control" id="InputFormItem2" value="<?=$city?>" required />
                                            </div>
                                            <div class="form-group">
                                                <label class="font-co">State</label>
                                                <input name="billing_state" type="text" class="form-control" id="InputFormItem2"  value="<?=$state?>" required />
                                            </div>
                                            <div class="form-group">
                                                <label class="font-co">Zipcode</label>
                                                <input name="billing_zipcode" type="text" class="form-control" id="InputFormItem2"  value="<?=$zipcode?>" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-sm-6 col-xs-10">
                                        <div class="form-group">
                                            <label class="font-co">
                                                Your card will be charged: <h2>$<?=$price?></h2>Thank you! <br><?=$message?>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <button action="submit" type="submit" title="Create an Account" class="btn btn-space buttons_newaccount">Register me!</button>
                                        </div>
                                    </div>
                                    <input type="hidden" value="<?=$RegisterForm?>" name="RegisterForm">
                                    <input type="hidden" value="<?=$first_name?>" name="first_name">
                                    <input type="hidden" value="<?=$last_name?>" name="last_name">
                                    <input type="hidden" value="<?=$email?>" name="email">
                                    <input type="hidden" value="<?=$address?>" name="address">
                                    <input type="hidden" value="<?=$city?>" name="city">
                                    <input type="hidden" value="<?=$state?>" name="state">
                                    <input type="hidden" value="<?=$zipcode?>" name="zipcode">
                                    <input type="hidden" value="<?=$registertype?>" name="registertype">
                                    <input type="hidden" value="<?=$cartype?>" name="cartype">
                                    <input type="hidden" value="<?=$emaillist?>" name="emaillist">
                                    <input type="hidden" value="true" name="submitted">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                            <div class="container">
                                <div class="row">
                                    <div style="text-align: left;" class="col-xs-9">
                                        <a style="color: orange" href="index.php">Back To home!</a>
                                        <h2 class="font-co">Thank you for your payment!</h2>
                                        <h2 class="font-co">You entered the following values:</h2>
                                        <ul>
                                            <li class="font-co"><?='card_holders_name: <span class="done-list">'.$_POST['card_holders_name']?></span></li>
                                            <li class="font-co"><?='card_number: <span class="done-list">'.$_POST['card_number']?></span></li>
                                            <li class="font-co"><?='expiry_month: <span class="done-list">'.$_POST['expiry_month']?></span></li>
                                            <li class="font-co"><?='expiry_year: <span class="done-list">'.$_POST['expiry_year']?></span></li>
                                            <li class="font-co"><?='cvc: <span class="done-list">'.$_POST['cvc']?></span></li>
                                            <li class="font-co"><?='billing_address: <span class="done-list">'.$_POST['billing_address']?></span></li>
                                            <li class="font-co"><?='billing_city: <span class="done-list">'.$_POST['billing_city']?></span></li>
                                            <li class="font-co"><?='billing_state: <span class="done-list">'.$_POST['billing_state']?></span></li>
                                            <li class="font-co"><?='billing_zipcode: <span class="done-list">'.$_POST['billing_zipcode']?></span></li>
                                            <li class="font-co"><?='first_name: <span class="done-list">'.$_POST['first_name']?></span></li>
                                            <li class="font-co"><?='last_name: <span class="done-list">'.$_POST['last_name']?></span></li>
                                            <li class="font-co"><?='email: <span class="done-list">'.$_POST['email']?></span></li>
                                            <li class="font-co"><?='address: <span class="done-list">'.$_POST['address']?></span></li>
                                            <li class="font-co"><?='city: <span class="done-list">'.$_POST['city']?></span></li>
                                            <li class="font-co"><?='state: <span class="done-list">'.$_POST['state']?></span></li>
                                            <li class="font-co"><?='zipcode: <span class="done-list">'.$_POST['zipcode']?></span></li>
                                            <li class="font-co"><?=$mess2?></li>
                                            <li class="font-co"><?='cartype: <span class="done-list">'.$_POST['cartype']?></span></li>
                                            <li class="font-co"><?='emaillist: <span class="done-list">'.$_POST['emaillist']?></span></li>
                                            <li class="font-co"><?='submitted: <span class="done-list">'.$_POST['submitted']?></span></li>
                                        </ul>
                                        <h2 class="font-co">All the data right here for easy insert to a database </h2>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php include 'bottom.php'; ?>

<?php 
// RegisterForm
// first_name
// last_name
// email
// address
// city
// state
// zipcode
// registertype
// cartype
// emaillist
?>