<html>
    <head>
        <meta charset=utf-8 />
        <title>Eastwood Car Show!</title>
        <style>
            body {
                font-family: 'Conv_arial', Helvetica, sans-serif;
                font-size: 20px;
                background: url(https://cdn.eastwood.com/skin/frontend/eastwood/eastwood/images/body_bg.png) repeat-x #abafb2;
                /*color: #000;*/
                line-height: 21px;
                letter-spacing: 1px;
                font-family: 'Roboto Condensed', sans-serif;
                text-shadow: 1px 1px 2px #000;
                color: #fff;
                text-align: center;
                margin-top: 2%;
                text-transform: uppercase;
            }
            /* BIG */
            @media only screen and (min-width: 600px) {
                .car-img {
                    background-image: url("nova-op-cut.png");
                    background-size: 70%;
                    z-index: 5;
                    background-position: bottom;
                    background-repeat: no-repeat;
                    position: absolute;
                    top: 200;
                }
                .image-cl {
                    width: 100%;
                    top: -200;
                    position: relative;
                }
                .img2 {
                    width:30%
                }
                .big-hide {
                    display: none;
                }
                .big-only {
                    font-size: 30px;   
                }
            }
            /* SMALL */
            @media only screen and (max-width: 600px) {
                .car-img {
                    background-image: url("nova-op-cut.png");
                    background-size: 100%;
                    z-index: 5;
                    background-position: 50% 25%; 
                    background-repeat: no-repeat;
                    position: absolute;
                    top: 100;
                }
                .words {
                    display: none;
                }
                .image-cl {
                    width: 100%;
                    top: -100;
                    position: relative;
                }
                .img2 {
                    width:60%
                }
                .small-hide {
                    display: none;
                }
            }

        </style>
    </head>
    <body>
        <div class="car-img">
            <div class="image-cl" style=" ">
                <div style="width:100%">
                    <img style="" src="logo.png" alt="eastwood logo">  
                </div>
                <div style="text-align: center;">
                    <h1>Welcome!</h1>
                    <h2 class="small-hide">Summer Classic Car Show</h2>
                    <h2 class="big-hide">
                        <div class="sml-title">Summer</div><br>
                        <div class="sml-title">Classic</div><br>
                        <div class="sml-title">Car Show</div><br>
                    </h2>
                </div>
                <p class="big-only">You guys spoke, and we listened. </p>
                <p class="big-only">The Summer classic is back!
                <p class="big-only">All Thanks to requests from our faithful customers. </p>
                <p class="words big-only">You have yourselves to thank for this.</p>
                <p class="big-only">Admission is $8 per family to see the show, $30 to register a car.</p>
            </div>
        </div>
    </body>
</html>