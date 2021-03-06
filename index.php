                        <?php include 'top.php'; ?>
                        <link rel="stylesheet" type="text/css" href="banner.css" media="all" />
                        <div class="bg-white">
                            <div id="make-space">
                                <form method="POST" name="RegisterForm" action="/payment.php" >
                                    <?php include 'banner.php'; ?>
                                    <div class="col-xs-12">
                                        <h2 class="big-title" style="">Register for the Summer Classic!</h2>
                                    </div>

                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-10">
                                        <div class="sub-title">
                                            Back by popular demand, we're excited to announce the return of the 2018 Eastwood Summer Classic. Join us for a day of classic cars, good friends, swap meet, and drinks from Sly Fox Brewery. <b> Admission is $8 per family to see the show, $30 to register a car.</b>
                                        </div>
                                    </div>
                                    <div class="col-xs-1"></div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-sm-5 col-xs-12">
                                        <div class="form-group">
                                            <label class="font-co">First Name</label>
                                            <input name="first_name" type="text" class="form-control" id="InputFormItem2" required >
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-xs-12">
                                        <div class="form-group">
                                            <label class="font-co">Last Name</label>
                                            <input name="last_name" type="text" class="form-control" id="InputFormLicense" aria-describedby="emailHelp" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-xs-1"></div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-sm-5 col-xs-12">
                                        <div class="form-group">
                                            <label class="font-co" for="InputFormItem2">Email Address</label>
                                            <input name="email" type="email" class="form-control" id="InputFormItem2" required >
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-xs-12">
                                        <div class="form-group">
                                            <label class="font-co" for="InputFormItem2">Re-enter Email Address</label>
                                            <input name="reemail" type="email" class="form-control" id="InputFormItem2" required >
                                        </div>
                                    </div>
                                    <div class="col-xs-1"></div>
                                </div>

                                 <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-sm-5 col-xs-12">
                                        <div class="form-group">
                                            <label class="font-co" for="InputFormItem2">Street Address</label>
                                        <input name="address" type="text" class="form-control" id="InputFormItem2" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="form-group">
                                            <label class="font-co" for="InputFormItem2">City</label>
                                            <input name="city" type="text" class="form-control" id="InputFormItem2" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-xs-12">
                                        <div class="form-group">
                                            <label class="font-co" for="InputFormItem2">State</label>
                                            <select name="state" class="form-control">
                                                <option selected value="PA">Pennsylvania</option>
                                                <option value="MD">Maryland</option>
                                                <option value="VA">Virginia</option>
                                                <option value="DC">Washington DC</option>
                                                <option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option>
                                                    <option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option>
                                                    <option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option>
                                                    <option value="ME">Maine</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option>
                                                    <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option>
                                                    <option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option>
                                                    <option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option>
                                                    <option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-1"></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-sm-5 col-xs-12">
                                        <div class="form-group">
                                            <label class="font-co" for="InputFormItem2">Zipcode</label>
                                            <input name="zipcode" type="text" class="form-control" id="InputFormItem2" required />
                                        </div>
                                    </div>
                                    <div class="col-xs-1"></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                        <div class="col-xs-10">
                                        <div class="form-group">
                                            <div class="radio">
                                                <label class="font-rad">
                                                    <input name="registertype" type="radio" id="optionsRadios1" value="no" checked>
                                                    I'm here to see some cool cars! 
                                                </label>
                                            </div>
                                            <div id="" class="radio">
                                                <label class="font-rad">
                                                    <input name="registertype" type="radio" id="optionsRadios2" value="car">
                                                    I'm here to show my cool car!
                                                </label>
                                            </div>
                                            <div class="col-xs-12">
                                                <div id="Cars-car" class="desc form-group" style="display: none;">
                                                    <label class="font-co" for="InputFormItem2">What year and model car?</label>
                                                    <input name="cartype" type="text" class="form-control" id="InputFormItem2" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-1"></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-10">
                                        <div class="form-group">
                                            <hr>
                                            <label class="font-co" for="InputFormItem2">Special Offers</label>
                                            <div class="radio">
                                                <label class="font-rad">
                                                    <input type="radio" name="emaillist" id="optionsRadios1" value="both" checked>
                                                    I would like to receive more great offers from Eastwood&trade; in Email alerts and Monthly Catalog!
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label class="font-rad">
                                                    <input type="radio" name="emaillist" id="optionsRadios2" value="emails">
                                                    Emails only!
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label class="font-rad">
                                                    <input type="radio" name="emaillist" id="optionsRadios3" value="catalog">
                                                    Monthly Catalog only!
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label class="font-rad">
                                                    <input type="radio" name="emaillist" id="optionsRadios4" value="nothing">
                                                    No thank you, I would NOT like to save money and know about the hottest Eastwood&trade; products. 
                                                </label>
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <div class="col-xs-1"></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-10">
                                        <div class="form-group">
                                            <button style="margin-bottom:30px; float: right; background-color: #1B4985; padding: 8px" action="submit" type="submit" title="Create an Account" class="btn btn-info">NEXT -></button>
                                        </div>
                                    </div>
                                    <div class="col-xs-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                    <?php include 'bottom.php'; ?>