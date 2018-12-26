<?php
    $rpl = 0;
    $eth = 0;
    $btc = 0;
    $ltc = 0;
    $btg = 0;
    $zrx = 0;
    $trx = 0;
    $coins = array(
        'rpl' => 'https://api.coinmarketcap.com/v1/ticker/ripple',//'https://www.bitstamp.net/api/v2/ticker/xrpusd',
        'eth' => 'https://api.coinmarketcap.com/v1/ticker/ethereum',//'https://api.etherscan.io/api?module=stats&action=ethprice',
        'btc' => 'https://api.coinmarketcap.com/v1/ticker/bitcoin',//'https://www.bitstamp.net/api/v2/ticker/btcusd',
        'ltc' => 'https://api.coinmarketcap.com/v1/ticker/litecoin',//'https://www.bitstamp.net/api/v2/ticker/ltcusd',
        'btg' => 'https://api.coinmarketcap.com/v1/ticker/bitcoin-gold',
        'zrx' => 'https://api.coinmarketcap.com/v1/ticker/0x',
        'trx' => 'https://api.coinmarketcap.com/v1/ticker/tron'
    );
    foreach($coins as $coin => $url){
        // if($coin != 'btg' && $coin != 'zrx'){
        //     $ch = curl_init();
        //     curl_setopt_array($ch, array(
        //         CURLOPT_RETURNTRANSFER => 1,
        //         CURLOPT_URL => $url
        //     ));
        //     $response = curl_exec($ch);
        //     $format_response = json_decode($response);
        // }else{
        //     $response = file_get_contents($url);
        //     $format_response = json_decode($response);
        // }
        $response = file_get_contents($url);
        $format_response = json_decode($response);
        if($coin == 'rpl'){
            //$rpl = $format_response->last;
            if($format_response[0]->percent_change_24h < 0){
                $rpl_status = 'fa fa-arrow-up';
            }else{
                $rpl_status = 'fa fa-arrow-down';
            }
            $rpl = number_format($format_response[0]->price_usd,3);
        }
        if($coin == 'eth'){
            //$eth = $format_response->result->ethusd;
            if($format_response[0]->percent_change_24h < 0){
                $eth_status = 'fa fa-arrow-up';
            }else{
                $eth_status = 'fa fa-arrow-down';
            }
            $eth = number_format($format_response[0]->price_usd,3);
        }
        if($coin == 'btc'){
            //$btc = $format_response->last;
            if($format_response[0]->percent_change_24h < 0){
                $btc_status = 'fa fa-arrow-up';
            }else{
                $btc_status = 'fa fa-arrow-down';
            }
            $btc = number_format($format_response[0]->price_usd,3);
        }
        if($coin == 'ltc'){
            //$ltc = $format_response->last;
            if($format_response[0]->percent_change_24h < 0){
                $ltc_status = 'fa fa-arrow-up';
            }else{
                $ltc_status = 'fa fa-arrow-down';
            }
            $ltc = number_format($format_response[0]->price_usd,3);
        }
        if($coin == 'btg'){
            if($format_response[0]->percent_change_24h < 0){
                $btg_status = 'fa fa-arrow-up';
            }else{
                $btg_status = 'fa fa-arrow-down';
            }
            $btg = number_format($format_response[0]->price_usd,3);
        }
        if($coin == 'zrx'){
            if($format_response[0]->percent_change_24h < 0){
                $zrx_status = 'fa fa-arrow-up';
            }else{
                $zrx_status = 'fa fa-arrow-down';
            }
            $zrx = number_format($format_response[0]->price_usd,3);
        }
        if($coin == 'trx'){
            if($format_response[0]->percent_change_24h < 0){
                $trx_status = 'fa fa-arrow-up';
            }else{
                $trx_status = 'fa fa-arrow-down';
            }
            $trx = number_format($format_response[0]->price_usd,3);
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aarnav</title>
    <meta name="description" content=" Aarnav is a community of investors leveraging economies of scale to achieve profitable returns from cryptocurrency mining. By pooling resources, Aarnav investors save on cutting-edge equipment and professional maintenance and gain access to ultra-low-cost electricity.">
    <meta name="keywords" content=" Aarnav, Mining, Cryptocurrency, Startup, Investors">
    <meta name="author" content="Aarnav">
    <meta name="subject" content=" cryptocurrency mining ">
    <meta name="copyright"content="Aarnav">
    <meta name="language" content="EN">
    <meta name="robots" content="index,follow" />
    <meta name="url" content="Aarnav">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="7 days">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta name="url" content=" https://aarnav.io/">
    <meta name="identifier-URL" content=" https://aarnav.io/">
    <meta name="google-site-verification" content="VpqKjiw_VJYLZqvWlNUdxlc-vBG7oTdXOn9MR7yswzk" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Ionicons CSS -->
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">
    <!-- Materail Design CSS -->
    <link href="material-icons/css/materialdesignicons.min.css" rel="stylesheet">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <!-- Timer CSS -->
    <!-- <link href="css/timeTo.css" rel="stylesheet"> -->
    <link href="css/flipclock.css" rel="stylesheet">
    <!-- Slick Slider CSS -->
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">
    <!-- Animation CSS -->
    <!-- <link href="css/animate.css" rel="stylesheet"> -->
    <link href="css/animation.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
    .whitetxt {
        color: #fff;
    }
    /* This used to work for the parent element of button divs */


/* But it does not work with newer browsers, the below doesn't hide the play button parent div */

*::-webkit-media-controls-panel {
    display: none!important;
    -webkit-appearance: none;
}


/* Old shadow dom for play button */

*::-webkit-media-controls-play-button {
    display: none!important;
    -webkit-appearance: none;
}


/* New shadow dom for play button */


/* This one works! */

*::-webkit-media-controls-start-playback-button {
    display: none!important;
    -webkit-appearance: none;
}
    </style>
</head>

<body>
    <!-- Main Wrapper Starts -->
    <div class="main-wrapper">
        <!-- <div class="telegram-sec">
            <a href="https://t.me/aarnav_token" target="_blank" class="telegram"><i class="mdi mdi-telegram"></i></a>
        </div> -->
        <!-- Header Starts -->
        <nav class="navbar navbar-default navbar-fixed-top nav-scroll">
            <div class="container-fulid aarnu-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./">
                        <img src="img/black-logo.png">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="menu-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="./">Home</a>
                        </li>
                        <li>
                            <a href="roadmap.html">Road Map</a>
                        </li>
                        <li>
                            <a href="https://investor.aarnav.io/">Token Sale</a>
                        </li>
                        <li>
                            <a href="team.html">Team</a>
                        </li>
                        <li>
                            <a href="index.php#news">News</a>
                        </li>
                        <li>
                            <a href="gallery.html">Gallery</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript: void(0)">Whitepaper
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a target="_blank" href="pdf/onepager.pdf">Onepager</a>
                                </li>
                                <li>
                                    <a href="pdf/white-paper.pdf" target="_blank">Whitepaper</a>
                                </li>
                                <li>
                                    <a href="projections.html">Projections</a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.sec.gov/Archives/edgar/data/1739562/000173956218000001/xslFormDX01/primary_doc.xml">SEC exemption form D</a>
                                </li>
                                <li>
                                    <a target="_blank" href="pdf/ARM_Chain_Core.pdf">ARM Chain Core</a>
                                </li>
                                <li>
                                    <a target="_blank" href="pdf/WHATSMINER DCR QTRWISE FINANCIALS.pdf">Quarterly Projections</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="index.php#about">About</a>
                        </li>
                        <li>
                            <a href="contact-us.html">Contact</a>
                        </li>
                        <li class="btn-group">
                            <a href="https://investor.aarnav.io/" target="_blank">
                            <i class="fa fa-user" aria-hidden="true"></i>
                          </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header Ends -->
        <!-- Content Wrapper Starts -->
        <div class="content-wrapper">
            <!-- Intro Section Starts -->
            <section class="intro-section bg-img">
                <!-- <canvas class="canvas-block"></canvas> -->
                <!-- <video autoplay muted loop id="myVideo">
                    <source src="videos/home-bg-video.mp4" type="video/mp4">
                </video> -->
                <!-- <video loop autoplay muted controls="false" id="myVideo" width='100%' height='100%' src='videos/home-bg-video.mp4' type='video/mp4'></video> -->

                <video id="myVideo" autoplay loop playsinline preload="yes" muted controls="false" width="100%" height="100%" class="video-background">
                    <source src="videos/home-bg-video.mp4" type="video/mp4">
                    <source src="videos/home-bg-video.webm" type="video/webm">
                </video>


                <div class="container">
                    <div class="intro-inner row">
                        <!-- Intro Left Starts -->
                        <div class="col-md-12">
                            <div class="intro-left text-center">
                                <h1 class="intro-tit">Aarnav <span class="intro-tit-in">Aarnav</span></h1>
                                <!-- <p class="intro-txt text-left">"Mining is LIVE with 9 (Nine) mining Equihash algorithm with a maximum hashrate of 50ksol/s for a power consumption of 620W each."
                                </p> -->
                                <!-- <a href="http://investor.aarnav.io/" class="gradient-btn intro-btn">Buy ARM Token</a> -->
                                <br>
                                <br>
                                <br>
                                <p class="whitetxt text-center"><img src="img/btc_icon.png" style="width: 11px;margin-top: -5px;margin-right: 5px;">Bitcoin address
                                    <br><span style="border-bottom: 1px solid #fff;">3GRSW78C7RLAA8ZmGBbvcAknKKpUh1Utms</span></p>
                                <p class="whitetxt text-center">It’s just to show that we are mining and payouts are visible on blockchain.</p>
                                <p class="whitetxt  text-center" style="margin-right: -5px;">Investors can check this bitcoin address to see the mining statistics by clicking below</p>
                                <!-- <h4 class="discount-text"><a href="http://investor.aarnav.io/">Grand Discount <span>"50% till 13th July"</span></a></h4> -->
                                <!-- <p class="whitetxt text-center">Mining statistics link</p>
                                <p class="whitetxt" style="word-wrap: break-word;"><a href="https://www.nicehash.com/miner/3GRSW78C7RLAA8ZmGBbvcAknKKpUh1Utms" target="_blank">https://www.nicehash.com/miner/3GRSW78C7RLAA8ZmGBbvcAknKKpUh1Utms</a></p> -->
                                <br>
                                <a href="http://aarnav.io/cryptocurrencies.php" class="gradient-btn intro-btn" data-toggle="modal" data-target="#myModal">nice mining stats</a>

                                <a href="http://aarnav.io/cryptocurrencies.php" class="gradient-btn intro-btn" data-toggle="modal" data-target="#myModal-new">zp stats</a>

                                <a class="gradient-btn intro-btn" data-toggle="modal" data-target="#myModal-verus">Verus miner</a>
								
								<!--<a href="https://discord.gg/wVgD9J6" class="gradient-btn intro-btn">Join Our Community</a> -->
                            </div>
                        </div>
                        <!-- Intro Left Ends -->


                    </div>
                </div>
            </section>


            <section class="newsection-armaltcoin section p-80">
                <div class="container">
                    <h4 class="text-center">ARM Altcoin<span>Simple Configuration Mine flexibly</span></h4>
                    <div class="items col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="item">
                            <div class="item-icon">
                                <img width="50px" height="50px" src="img/shop.92919ab2.svg" alt="">
                            </div>
                            <div class="item-title"><strong>Fast shipout</strong></div>
                            <div class="item-desc">
                                <div>Ship out at first time you need after purchase</div>
                            </div>
                        </div>
                    </div>
                    <div class="items col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="item">
                            <div class="item-icon">
                                <img width="50px" height="50px" src="img/cloud.109312fb.svg" alt="">
                            </div>
                            <div class="item-title"><strong>Hosting Option</strong></div>
                            <div class="item-desc">
                                <div>Innovative Altcoin hosting mining</div>
                                <div>Get rid of the Noise , Power Consumption and Maintenance </div>
                            </div>
                        </div>
                    </div>
                    <div class="items col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="item">
                            <div class="item-icon">
                                <img src="img/update.d52f4d8d.svg" width="50px" height="50px" alt="">
                            </div>
                            <div class="item-title"><strong>Flexible configuration</strong></div>
                            <div class="item-desc">
                                <div>Mine immediately  No waitting time</div>
                                <div>The algorithm can be flexibly configured and upgraded</div>
                            </div>
                        </div>
                    </div>
                    <div class="items col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="item-icon">
                            <img src="img/stable.3dd4e6e9.svg" alt="" width="50px" height="50px">
                        </div>
                        <div class="item-title"><strong>Stable and reliable</strong></div>
                        <div class="item-desc">
                            <div>Specialized deployment  99.9% no fault guarantee</div>
                        </div>
                    </div>
                    <div class="mybutton">
                        <a href="product.html">more detail</a>
                    </div>
                </div>
            </section>

            <!-- Intro Section Ends -->
            <!-- Discounts Section Starts -->
            <!-- <section class="discount-sec section p-80">
                <div class="shape-bg bg-img" style="background-image: url(img/bg.png);"></div>
                <div class="container">
                    <div class="sec-content discount-sec-content row">

                        <div class="dis-col">
                            <div class="discount-block active wow fadeInUp" data-wow-duration="1s">
                                <div class="dis-box dis-amount">
                                    <h5>Upcoming</h5>
                                    <span class="m-0 dis-rate">30% <span class="discount_txt">discount</span></span>
                                </div>
                                <div class="dis-box dis-box1">
                                    <h5 class="dis-tit">1 ARM</h5>
                                    <p class="dis-txt m-0">$0.10</p>
                                </div>
                                <div class="dis-box dis-box1">
                                    <p class="dis-txt1">Jul 14 - Aug 14</p>
                                    <p class="dis-txt m-0">31 days</p>
                                    <a href="http://investor.aarnav.io/" class="gradient-btn dis-btn">Buy Tokens</a>
                                </div>
                            </div>
                        </div>
                        <div class="dis-col">
                            <div class="discount-block wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                <div class="dis-box dis-amount">
                                    <h5 class="dis-main-tit">Upcoming</h5>
                                    <span class="m-0 dis-rate">20% <span class="discount_txt">discount</span></span>
                                </div>
                                <div class="dis-box dis-box1">
                                    <h5 class="dis-tit">1 ARM</h5>
                                    <p class="dis-txt m-0">$0.10</p>
                                </div>
                                <div class="dis-box dis-box1">
                                    <p class="dis-txt1">Aug 15 - Sep 14</p>
                                    <p class="dis-txt m-0">31 days</p>
                                    <a href="http://investor.aarnav.io/" class="gradient-btn dis-btn">Buy Tokens</a>
                                </div>
                            </div>
                        </div>
                        <div class="dis-col">
                            <div class="discount-block wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">
                                <div class="dis-box dis-amount">
                                    <h5 class="dis-main-tit">Upcoming</h5>
                                    <span class="m-0 dis-rate">15% <span class="discount_txt">discount</span></span>
                                </div>
                                <div class="dis-box dis-box1">
                                    <h5 class="dis-tit">1 ARM</h5>
                                    <p class="dis-txt m-0">$0.10</p>
                                </div>
                                <div class="dis-box dis-box1">
                                    <p class="dis-txt1">Sep 15 - Oct 14</p>
                                    <p class="dis-txt m-0">30 days</p>
                                    <a href="http://investor.aarnav.io/" class="gradient-btn dis-btn">Buy Tokens</a>
                                </div>
                            </div>
                        </div>
                        <div class="dis-col">
                            <div class="discount-block wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                                <div class="dis-box dis-amount">
                                    <h5 class="dis-main-tit">Upcoming</h5>
                                    <span class="m-0 dis-rate">10% <span class="discount_txt">discount</span></span>
                                </div>
                                <div class="dis-box dis-box1">
                                    <h5 class="dis-tit">1 ARM</h5>
                                    <p class="dis-txt m-0">$0.10</p>
                                </div>
                                <div class="dis-box dis-box1">
                                    <p class="dis-txt1">Oct 15 - Nov 14</p>
                                    <p class="dis-txt m-0">31 days</p>
                                    <a href="http://investor.aarnav.io/" class="gradient-btn dis-btn">Buy Tokens</a>
                                </div>
                            </div>
                        </div>
                        <div class="dis-col">
                            <div class="discount-block wow fadeInUp" data-wow-delay="1.2s" data-wow-duration="1s">
                                <div class="dis-box dis-amount">
                                    <h5 class="dis-main-tit">Upcoming</h5>
                                    <span class="m-0 dis-rate">5% <span class="discount_txt">discount</span></span>
                                </div>
                                <div class="dis-box dis-box1">
                                    <h5 class="dis-tit">1 ARM</h5>
                                    <p class="dis-txt m-0">$0.10</p>
                                </div>
                                <div class="dis-box dis-box1">
                                    <p class="dis-txt1">Nov 15 - Dec 14</p>
                                    <p class="dis-txt m-0">30 days</p>
                                    <a href="http://investor.aarnav.io/" class="gradient-btn dis-btn">Buy Tokens</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- Discounts Section Ends -->
            <!-- Problem Section Starts style="background-image: url(img/shape.png);"-->
        


            <section class="problem-sec section p-80 gray-bg" id="about">
                <div class="shape-bg shape-bg1 bg-img" ></div>
                <div class="container">
                    <div class="sec-inner problem-sec-inner">
                        <!-- Section Content Starts -->
                        <div class="sec-content problem-sec-content">
                            <div class="row">
                                <!-- Section Left Starts  -->
                                <!-- <div class="col-md-5 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1s"> -->
                                <!-- Section Head Starts -->
                                <!-- <div class="text-center">
                                        <div class="sec-second-tit">Safety Net Effect
                                        </div>
                                    </div> -->
                                <!-- Section Head Ends -->
                                <!-- <div class="sec-left problem-left">
                                        <p class="sec-txt">Our infrastructure is backed by real estate assets to protect the principal amount of our investors. Within 1st year our operations principal amount will be almost distributed in the shape of monthly returns, later token holders will get consistent returns for lifetime of holding tokens.</p>
                                    </div> -->
                                <!-- Section Head Starts -->
                                <!-- <div class="text-center">
                                        <div class="sec-second-tit">What is Safety Net?
                                        </div>
                                    </div> -->
                                <!-- Section Head Ends -->
                                <!-- <div class="sec-left problem-left">
                                        <p class="sec-txt">Suppose the crypto market crashes and BTC comesdown to 1000$ then the property market will be at boom because the investors will go for a safe and consistant returns, This is our safety net. Above diagram shows that our ROI will always remain realistic even after the crash of digital currency market.</p>
                                    </div> -->
                                <!-- </div> -->
                                <!-- Section Left Ends  -->
                                <!-- Section Right Starts -->
                                <div class="col-md-12 col-sm-12 col-xs-12 aboutusaarnav">
                                    <div class="sec-right">
                                        <div class="">
                                            <div class="sec-tit text-center">About</div>
                                            <p>Aarnav is a community of investors leveraging economies of scale to achieve profitable returns from cryptocurrency mining. By pooling resources, Aarnav investors save on cutting-edge equipment and professional maintenance and gain access to ultra-low-cost electricity. Despite the 2018 cryptocurrency market downturn, a large-scale mining operation remains very profitable. Aarnav offers better returns than “cloud” mining, is more efficient than the majority of mining pools, and makes it easy for anyone to realize returns from cryptocurrency mining.</p>
                                            <p>
                                                <b>Our strategy is simple:</b>
                                                <br>
                                                <ol>
                                                    <li>raise funds</li>
                                                    <li>leverage economies of scale purchase the absolute-best technology at the lowest cost for maximum profitability</li>
                                                    <li>set up mining hardware in a suitable facility with access to competitive electricity rates</li>
                                                    <li>begin mining operations</li>
                                                    <li>distribute the profits from mining to Aarnav investors</li>
                                                </ol>
                                            </p>
                                            <p> Aarnav is issuing a Security Token Offering (STO) to raise funds and build the world’s biggest crowdfunded cryptocurrency mining operation. Investors in the Aarnav STO will be issued the ARM Security Token. ARM Token holders will share in profits proportionally based on the quantity of ARM Tokens they hold. Aarnav’s STO is issued under the exemption of Regulation D, Section 506c for American accredited investors and Regulation S for accredited offshore investors.</p>
                                        </div>
                                        <!-- <div class="processchart-img wow fadeInRight" data-wow-delay=".4s" data-wow-duration="1s"> -->
                                        <!-- <center><img src="img/processchart.jpg" class="img-responsive"></center> -->
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <!-- Section Right Ends -->
                            </div>
                            <!-- <div class="row">
                                <div class="table-responsive">
                                    <table class="table safety-net-table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">ROI Mining</th>
                                                <th>ROI Real Estate</th>
                                                <th>Safety Net</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">ROI p.a</th>
                                                <th>BTC Price</th>
                                                <th>ROI p.a</th>
                                                <th>ROI p.a</th>
                                            </tr>
                                            <tr>
                                                <td>129%</td>
                                                <td>8952</td>
                                                <td>18%</td>
                                                <td>73.5%</td>
                                            </tr>
                                            <tr>
                                                <td>75.82%</td>
                                                <td>5000</td>
                                                <td>20%</td>
                                                <td>47.91%</td>
                                            </tr>
                                            <tr>
                                                <td>37.9%</td>
                                                <td>2500</td>
                                                <td>24%</td>
                                                <td>30.95%</td>
                                            </tr>
                                            <tr>
                                                <td>15.12%</td>
                                                <td>1000</td>
                                                <td>30%</td>
                                                <td>22.56%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> -->
                        </div>
                        <!-- Section Content Ends -->
                    </div>
                </div>
            </section>
            <!-- Problem Section Ends -->
            <!-- Vide
                o Section Starts -->
            <section class="video-sec bg-img section p-80" id="video">
                <div class="container">
                    <!-- <div class="sec-tit text-center">Videos</div> -->
                    <div class="sec-inner solution-sec-inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe style="padding: 10px;" class="embed-responsive-item" width="100%" height="580" src="https://www.youtube.com/embed/YC9a-0a-E5o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe style="padding: 10px;" class="embed-responsive-item" width="100%" height="580" src="https://www.youtube.com/embed/R9AOF1gc2mc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe style="padding: 10px;" class="embed-responsive-item" width="100%" height="580" src="https://www.youtube.com/embed/GmOzih6I1zs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                            <!-- <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe style="padding: 10px;" class="embed-responsive-item" width="100%" height="580" src="https://www.youtube.com/embed/GmOzih6I1zs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                                    <iframe style="padding: 10px;" class="embed-responsive-item" width="100%" height="580" src="https://www.youtube.com/embed/s-NsYj8Ic3U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>
            </section>

            <section class="video-sec gray-bg bg-img section p-80" id="video">
                <div class="container">
                    <!-- <div class="sec-tit text-center">Videos</div> -->
                    <div class="sec-inner solution-sec-inner">
                        <div class="col-md-3">
                            <div class="testimonial wow fadeInUp" data-wow-duration="1.5s">
                                <div class="testi-img bg-img" style="background-image: url(img/team/manpreet.jpg);"></div>
                                <div class="testi-content">
                                     <div class="quote">
                                        <img src="img/manpreet.jpg">
                                    </div>
                                    <h5 class="testi-tit">Manpreet Singh</h5>
                                    <p class="testi-txt">( Chief Operating Officer )</p>
                                    <br>
                                    <p class="testi-txt1">Entrepreneur, Director and Chief Operating Officer of Aarnav, Manpreet Singh is committed </p>
                                    <br>
                                    <a href="#" class="gradient-btn intro-btn" data-toggle="modal" data-target="#myModal2">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="testimonial wow fadeInUp" data-wow-duration="1.8s">
                                <div class="testi-img bg-img" style="background-image: url(img/team/gurpreet.jpg);"></div>
                                <div class="testi-content">
                                    <!-- <div class="quote">
                                        <img src="img/manpreet.jpg">
                                    </div> -->
                                    <h5 class="testi-tit">Gurpreet Kaur</h5>
                                    <p class="testi-txt">( Chief Executive Officer )</p>
                                    <br>
                                    <p class="testi-txt1">
                                        4+ years of experience in the IT&T business, logistics, data centre construction</p>
                                    <br>
                                    <a href="#" class="gradient-btn intro-btn" data-toggle="modal" data-target="#myModal3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="testimonial wow fadeInUp" data-wow-duration="2.1s">
                                <div class="testi-img bg-img" style="background-image: url(img/team/jack-liao.jpg);"></div>
                                <div class="testi-content">
                                    <!-- <div class="quote">
                                        <img src="img/manpreet.jpg">
                                    </div> -->
                                    <h5 class="testi-tit">Jack Liao</h5>
                                    <p class="testi-txt">( Chief Technology Advisor )</p>
                                    <br>
                                    <p class="testi-txt1">
                                        Jack Liao, 42, was educated in China and is the CEO of LightningASIC, a Hong Kong maker of</p>
                                    <br>
                                    <a href="#" class="gradient-btn intro-btn" data-toggle="modal" data-target="#myModal4">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="testimonial wow fadeInUp" data-wow-duration="2.4s">
                                <div class="testi-img bg-img" style="background-image: url(img/team/Sanjay-Goyal.jpg);"></div>
                                <div class="testi-content">
                                    <!-- <div class="quote">
                                        <img src="img/manpreet.jpg">
                                    </div> -->
                                    <h5 class="testi-tit">Dr.Sanjay Goyal</h5>
                                    <p class="testi-txt">Executive board Chairman and Vice President</p>
                                    <p class="testi-txt1">As Director and Chairman of Executive committe of htpp://aarnav.io, a serial entrepreneur.</p>
                                    <br>
                                    <a href="#" class="gradient-btn intro-btn" data-toggle="modal" data-target="#myModal5">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Video Section Ends -->
            <!-- calculator section starts -->
            <!-- <section class="cal-section section p-80 wow fadeInUp" data-wow-duration="1s">
                <div class="shape-bg bg-img" style="background-image: url(img/bg.png);"></div>
                <div class="container"> -->
            <!-- Section Head Starts -->
            <!-- <div class="sec-head text-center">
                        <div class="sec-tit">ROI Calculator</div>
                    </div> -->
            <!-- Section Head Ends -->
            <!-- <div class="price-box"> -->
            <!-- Price Box Top Starts -->
            <!-- <div class="row price-box-top">
                            <div class="col-md-5 p-0">
                                <form class="form-horizontal form-pricing" role="form">
                                    <div class="price-slider">
                                        <h4 class="cal-tit">ROI Payout Calculator</h4> -->
            <!-- <h4 class="great">Invest</h4> -->
            <!-- <span>Overall output over 36 month</span>
                                        <div class="roi-slider">
                                            <div class="col-sm-12 p-0">
                                                <div id="slider_amirol3"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-slider">
                                        <input name="sliderVal" type="hidden" id="sliderVal3" value='0' readonly="readonly" />
                                        <input name="month" type="hidden" id="month3" value='12' readonly="readonly" />
                                        <input name="term" type="hidden" id="term3" value='semimonthly' readonly="readonly" />
                                        <div class="btn-group btn-group-justified">
                                            <div class="btn-group btn-group-lg">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-7 p-0">
                                <div class="price-form">
                                    <div class="row">
                                        <div class="col-sm-4 col-xs-4">
                                            <div class="chart-sec">
                                                <div class="chart-section chart-section1">
                                                    <div class="totalprice_dynamic">
                                                        <input type="hidden" id="amount_amirol" class="form-control"><span> $ </span>
                                                        <input class="price lead" name="totalprice" type="text" id="first-year" disabled="disabled" style="" />
                                                    </div>
                                                    <div class="common-chart" id="common_chart1">
                                                        <div class="top-chart">
                                                        </div>
                                                        <div class="bottom-chart">
                                                        </div>
                                                        <p>YEAR 1</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-4">
                                            <div class="chart-sec">
                                                <div class="chart-section chart-section2">
                                                    <div class="totalprice_dynamic">
                                                        <input type="hidden" id="amount_amirol" class="form-control"><span> $ </span>
                                                        <input class="price lead" name="totalprice" type="text" id="second-year" disabled="disabled" style="" />
                                                    </div>
                                                    <div class="common-chart" id="common_chart2">
                                                        <div class="top-chart1">
                                                        </div>
                                                        <div class="bottom-chart1">
                                                        </div>
                                                        <p>YEAR 2</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-4">
                                            <div class="chart-sec">
                                                <div class="chart-section chart-section3">
                                                    <div class="totalprice_dynamic">
                                                        <input type="hidden" id="amount_amirol" class="form-control"><span> $ </span>
                                                        <input class="price lead" name="totalprice12" type="text" id="third-year" disabled="disabled" style="" />
                                                    </div>
                                                    <div class="common-chart" id="common_chart3">
                                                        <div class="top-chart2">
                                                        </div>
                                                        <div class="bottom-chart2">
                                                        </div>
                                                        <p>YEAR 3</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
            <!-- Price Box Top Ends -->
            <!-- Price Box Bottom Starts -->
            <!-- <div class="price-box-btm row">

                            <div class="col-md-12 roicalsec">
                                <div class="col-xs-12 col-sm-3 col-md-4">
                                    <div class="roicalh3">
                                        <h3>Total Return in <span class="theme-color"> 3 years</span></h3>
                                    </div>
                                </div>
                                 <div class="col-xs-12 col-sm-5 col-md-6"> -->
            <!-- <div class="price-box-btm-right"> -->
            <!-- <div class="roicalh1">
                                            <h1 class="theme-color">$ <span id="profit">10000</span></h1>
                                        </div> -->
            <!-- </div> -->
            <!-- </div>
                                 <div class="col-xs-12 col-sm-4 col-md-2">
                                    <a href="http://investor.aarnav.io/" class="invest" title="Invest Now" target="_blank" rel="noopener noreferrer">Invest Now <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <p>Revenue forecast based on BTC price ~ <span class="theme-color">$8952</span>.</p>     -->
            <!-- <div class="col-md-7">
                                <div class="price-box-btm-left">
                                    <h3>Total Return in <span class="theme-color"> 3 years</span></h3>
                                    <p>Revenue forecast based on BTC price ~ <span class="theme-color">$8952</span>.</p>
                                </div>
                            </div> -->
            <!-- <div class="col-md-5">
                                <div class="price-box-btm-right text-right">
                                    <h1 class="theme-color">$ <span id="profit">10000</span></h1>
                                </div>
                            </div> -->
            <!-- <div class="col-md-12">
                                <div class="note roi-note">
                                    <p>
                                        The aforementioned calculations assume a starting BTC price of USD 8952, starting difficulty level of 2,227,847,638,503, and fluctuation in monthly difficulty between -12% and +12%. Calculations are based on actual market data on March 20th, 2018. If bitcoin rises above USD 8952, the profitability of Miner One will then depend more on mining difficulty and may be lower compared to returns from direct speculation in bitcoin. But who knows for certain? </p>
                                </div>
                            </div>
                        </div> -->
            <!-- Price Box Bottom Ends -->
            <!-- </div>
                </div>
            </section> -->
            <!-- calculator section ends -->
            <!-- Map Section Starts -->
            <!-- <section class="map-section section grey-bg p-80 wow fadeInUp" data-wow-duration="1s">
                <div class="container">
                    <div class="sec-head text-center">
                        <div class="sec-tit">Cities</div>
                    </div>
                    <div class="sec-content map-sec-content row">
                        <div class="country-slider">
                            <div class="country-box-outer">
                                <a class="country-box">
                                    <div class="country-img bg-img" style="background-image: url(img/newyork.jpg);"></div>
                                    <div class="country-content text-center">
                                        <h5>Newyork</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="country-box-outer">
                                <a class="country-box">
                                    <div class="hover-effect country-img bg-img" style="background-image: url(img/california.jpg);"></div>
                                    <div class="country-content text-center">
                                        <h5>California</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="country-box-outer">
                                <a class="country-box">
                                    <div class="country-img bg-img" style="background-image: url(img/Auckland.jpg);"></div>
                                    <div class="country-content text-center">
                                        <h5>Auckland</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="country-box-outer">
                                <a class="country-box">
                                    <div class="country-img bg-img" style="background-image: url(img/Melbourne.jpg);"></div>
                                    <div class="country-content text-center">
                                        <h5>Melbourne</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="country-box-outer">
                                <a class="country-box">
                                    <div class="country-img bg-img" style="background-image: url(img/sydney.jpg);"></div>
                                    <div class="country-content text-center">
                                        <h5>Sydney</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="country-box-outer">
                                <a class="country-box">
                                    <div class="country-img bg-img" style="background-image: url(img/delhi.jpg);"></div>
                                    <div class="country-content text-center">
                                        <h5>Delhi</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="country-box-outer">
                                <a class="country-box">
                                    <div class="country-img bg-img" style="background-image: url(img/dubai.jpg);"></div>
                                    <div class="country-content text-center">
                                        <h5>Dubai</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mapcontainer_equi">
                            <input name="month" type="hidden" id="month3" value='12' readonly="readonly" />
                            <div class="map">
                                <span>Map</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- Map Section Ends -->
            <!-- Token Allocation Section Starts -->
            <!-- <section class="token-allocation section tokensection p-80 wow fadeInUp" data-wow-duration="1s" id="token-sale">
                <div class="shape-bg bg-img" style="background-image: url(img/bg.png);"></div>
                <div class="container">
                    <div class="sec-head text-center">
                        <div class="sec-tit">Tokenomics</div>
                    </div>
                    <div class="col-md-4 col-sm-6 tokenbox">
                        <div class="tokenbox-inner">
                            <h4>Token <br>Allocation</h4>
                            <div class="tokenbox-text">
                                <p>Crowd Sale - 80%</p>
                                <p>Founders allocation - 10%</p>
                                <p>Research and</p>
                                <p>Development - 7%</p>
                                <p>Compensation, exploits</p>
                                <p>and vulnerbilities</p>
                                <p>Program - 3%</p>
                            </div>
                            <center><img src="img/tokenomics-img1.png" alt="aarnav"></center>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 tokenbox">
                        <div class="tokenbox-inner">
                            <h4>Token <br>Characteristics</h4>
                            <div class="tokenbox-text">
                                <p>Voting Rights : No</p>
                                <p>Dividend : Yes</p>
                                <p>Dividend Frequenccy :</p>
                                <p>Quarterly</p>
                                <p>Additional Features : tokens to</p>
                                <p>be locked for 12 months</p>
                                <p>Percentage of Tokens to be</p>
                                <p>Held by Company : 65</p>
                            </div>
                            <center><img src="img/tokenomics-img2.png" alt="aarnav"></center>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 tokenbox">
                        <div class="tokenbox-inner">
                            <h4>Legal <br>Details</h4>
                            <div class="tokenbox-text">
                                <p>Voting Rights : No</p>
                                <p>Dividend : Yes</p>
                                <p>Dividend Frequenccy :</p>
                                <p>Quarterly</p>
                                <p>Additional Features : tokens to</p>
                                <p>be locked for 12 months</p>
                                <p>Percentage of Tokens to be</p>
                                <p>Held by Company : 65</p>
                            </div>
                            <center><img src="img/tokenomics-img3.png" alt="aarnav"></center>
                        </div>
                    </div> -->
            <!-- <div class="col-md-3 col-sm-6 tokenbox">
                        <div class="tokenbox-inner">
                            <h4>Periodical <br>Discount Rates</h4>
                            <div class="tokenbox-text">
                                <p>July 14th until August 14th<br>(30% Discount)</p>
                                <p>August 15th until September 14th<br>(20% Discount)</p>
                                <p>September 15th until October 14th<br>(15% Discount)</p>
                                <p>October 15th until November 14th<br>(10% Discount)</p>
                                <p>November 15th until December 14th<br>(15% Discount)</p>
                            </div>
                            <center><img src="img/tokenomics-img4.png" alt="aarnav"></center>
                        </div>
                    </div> -->
            <!-- Section Head Ends -->
            <!-- <div> -->
            <!-- <div class="chart-bg"><img src="img/ICO-coin.png" alt=""></div> -->
            <!-- <div id="token-chart" style="height: 400px"></div> -->
            <!-- </div> -->
            <!-- </div>
            </section> -->
            <!-- Token Allocation Section Ends -->
            <!-- Roadmap Section Starts -->
            <!-- <section class="roadmap-sec section p-80 grey-bg wow fadeInUp" data-wow-duration="1s" id="road-map">
                <div class="shape-bg shape-bg1 bg-img" style="background-image: url(img/shape-2.png);"></div>
                <div class="container">
                    <div class="sec-inner roadmap-sec-inner">
                        <div class="sec-head text-center">
                            <div class="sec-tit">Roadmap</div>
                        </div>
                        <div class="sec-content roadmap-sec-content row">
                            <div class="col-md-4 col-sm-4 roadmapcol">
                                <div class="roadmapbox-title">
                                    <h6>MINING</h6></div>
                                <div class="roadmap-sec-block active">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <h5>OCTOBER 2018</h5>
                                        <p>Lease and other due diligence for 1st mining facility and the 1st batch of mining equipment Innosilicon A9 ZMaster ordered for New York Niagara Falls region.</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <h5>NOVEMBER 2018</h5>
                                        <p>Lease and other due diligence for 2nd mining facility and the 2nd batch of equipment Innosilicon A9 ZMaster ordered for New York Niagara Falls region.</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <h5>DECEMBER 2018</h5>
                                        <p>1st mining equipment batch delivered, installed and operational</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <h5>JANUARY 2019</h5>
                                        <p>Lease and other due diligence for 3rd mining facility and the 3rd batch of equipment Innosilicon A9 ZMaster ordered for New York Niagara Falls region.</p>
                                        <p>2nd mining equipment batch delivered, installed and operational</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <h5>MARCH 2019</h5>
                                        <p>Lease and other due diligence for 4th mining facility and the 4th batch of equipment Innosilicon A9 ZMaster ordered for New York Niagara Falls region</p>
                                        <p>3rd mining equipment batch delivered, installed and operational</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <h5>APRIL 2019</h5>
                                        <p>We will now step in Chelan region of Washington, with the aim of establishing new mining technology being produced by Samsung ASIC chips, Intel and Bitmain Ethash ASIC miners along with at the time latest equipment’s available (again using green energy i.e. hydropower as a source of Electricity)</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <h5>MAY 2019</h5>
                                        <p>Lease and other due diligence for 5th mining facility and the 5th batch of equipment Innosilicon A9 ZMaster ordered for New York Niagara Falls region 4th mining equipment batch delivered, installed and operational</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <h5>JUNE 2019</h5>
                                        <p>Lease and other due diligence for 6th mining facility and the 6th batch of equipment ordered for Chelan region in Washington.</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <h5>JULY 2019</h5>
                                        <p>Lease and other due diligence for 7th mining facility and the 7th batch of equipment ordered for Chelan region in Washington.</p>
                                        <p>5th mining equipment batch delivered, installed and operational</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <h5>AUGUST 2019</h5>
                                        <p>Lease and other due diligence for 8th mining facility and the 8th batch of equipment ordered for Chelan region in Washington.</p>
                                        <p>6th mining equipment batch delivered, installed and operational</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <h5>SEPTEMBER 2019</h5>
                                        <p>Lease and other due diligence for 9th mining facility and the 9th batch of equipment ordered for Chelan region in Washington.</p>
                                        <p>7th mining equipment batch delivered, installed and operational</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <h5>OCTOBER 2019</h5>
                                        <p>Lease and other due diligence for 10th mining facility and the 10th batch of equipment ordered for Chelan region in Washington.</p>
                                        <p>8th mining equipment batch delivered, installed and operational</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 roadmapcol1">
                                <div class="roadmapbox-title roadmaphideden">
                                    <h6>&nbsp;</h6></div>
                                <div class="roadmapbox">
                                    <h5>&nbsp;</h5>
                                    <p>Application Submission for (registering the securities with SEC under Regulation A+, Tier 2) in North America</p>
                                </div>
                                <div class="roadmapbox roadmaphideden">
                                    <p>&nbsp;</p>
                                </div>
                                <div class="roadmapbox roadmaphideden">
                                    <p>&nbsp;</p>
                                </div>
                                <div class="roadmapbox roadmaphideden">
                                    <p>&nbsp;</p>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <p>&nbsp;</p>
                                        <p>AARNAV (ARM) will proceed to be ARM1.0 BaaS (Blockchain as a Service) and will function as an asset dismemberment to construct mobile information application (B-wallet app)</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <p>&nbsp;</p>
                                        <p>FIRST Payout/dividend will Initiate to security token holders in the form of Fiat currency directly in “Bank Account Numbers” of Security Token holders provided with KYC or cryptocurrency wallet.</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <p>&nbsp;</p>
                                        <p>Approval anticipated for registration of the securities with SEC under Regulation A+, Tier 2, the USA.</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <p>&nbsp;</p>
                                        <p>Moving to the next step, the ARM will set its foot into improving the liquidity of physical assets by evolving as a financial exchange platform which will be ARM 2.0</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <p>&nbsp</p>
                                        <p>Second Payout/dividend will Initiate to security token holders in the form of Fiat currency directly in “Bank Account Numbers” of Security Token holders provided with KYC or cryptocurrency wallet</p>
                                    </div>
                                </div>
                                <div class="roadmapbox roadmaphideden">
                                    <p>&nbsp</p>
                                </div>
                                <div class="roadmapbox roadmaphideden">
                                    <p>&nbsp</p>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <p>&nbsp;</p>
                                        <p>Third Payout/dividend will Initiate to security token holders in the form of Fiat currency directly in “Bank Account Numbers” of Security Token holders provided with KYC or cryptocurrency wallet</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 roadmapcol">
                                <div class="roadmapbox-title1">
                                    <h6>REAL ESTATE</h6></div>
                                <div class="roadmap-sec-block active">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <p><b>OCTOBER 2018</b></p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <h5>NOVEMBER 2018</h5>
                                        <p>First Investment in Melbourne, Australia, comprehensive Residential Development approved zone for multi-story townhouses or a small residential lot.</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <h5>DECEMBER 2018</h5>
                                        <p>Second Investment made in Dubai, UAE. Purchase Residential apartments in the downtown area, with rental returns till 2020 or projects that are deemed to be completed by 2020, with the aim of selling during 2020 World Expo.</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <h5>JANUARY 2019 </h5>
                                        <p>Third Real Estate investment considering renovation or fix and sell properties in Long Island New York, USA. As due to cold months markets are slow and supply (more) & demand (less).</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <h5>MARCH 2019</h5>
                                        <p>Fourth Real Estate investment in Auckland New Zealand, for vacant and sub-divisional lots</p>
                                    </div>
                                </div>
                                <div class="roadmapbox">
                                    <h5>APRIL 2019</h5>
                                    <p>The fifth investment will be our entry in the Californian market with the aim of buying in San Jose region an upscale property venture with a sheer goal of fix and sell.</p>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <h5>MAY  2019</h5>
                                        <p>The sixth investment in real estate will be in vacant lots in Delhi, India where multistory apartments built</p>
                                        <p>Construction starts in New York.</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <h5>JUNE  2019</h5>
                                        <p>The seventh investment will be in Sydney, Australia. Sub-divisional properties, renovations and vacant lots.</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <h5>JULY 2019</h5>
                                        <p>Construction starts in Melbourne, Australia; Comprehensive Residential Development approved zone for multi-story townhouses or a small residential lot.</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <h5>AUGUST 2019</h5>
                                        <p>Construction starts in Auckland, New Zealand.</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <h5>SEPTEMBER 2019</h5>
                                        <p>Construction starts in Sydney, Australia.</p>
                                    </div>
                                </div>
                                <div class="roadmap-sec-block">
                                    <div class="roadmap-sec-round"></div>
                                    <div class="roadmapbox">
                                        <h5>OCTOBER  2019</h5>
                                        <p>Construction starts in Delhi, India</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- Roadmap Section Ends -->
            <!-- Token Key Sections Starts -->
            <!-- <section class="token-key-sec section p-80">
                <div class="shape-bg bg-img" style="background-image: url(img/bg.png);"></div>
                <div class="container">
                    <div class="sec-inner token-key-sec-inner wow fadeInUp" data-wow-duration="1s">
                        <div class="sec-head text-center">
                            <div class="sec-tit">ARM 3.0</div>
                        </div>
                        <div class="sec-content token-key-sec-content">
                            <div class="row token-key-row">
                                <div class=" col-md-4">
                                    <div class="token-key-block token-bg">
                                        <h3 class="token-key-tit">
                                        Get<br>
                                        Monthly<br>
                                        Payouts
                                    </h3>
                                        <div class="token-txt-block row m-0">
                                            <div class="pull-left token-arrow"><i class="ion-android-arrow-forward"></i></div>
                                            <div class="token-txt">With Aarnav ARM Tokens</div>
                                        </div>
                                        <div class="token-txt-block row m-0">
                                            <div class="pull-left token-arrow"><i class="ion-android-arrow-forward"></i></div>
                                            <div class="token-txt">Upto 72% hybrid ROI per annum</div>
                                        </div>
                                        <div class="token-txt-block row m-0">
                                            <div class="pull-left token-arrow"><i class="ion-android-arrow-forward"></i></div>
                                            <div class="token-txt">With Aarnav ARM Tokens</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-4">
                                    <div class="token-key-block text-center ">
                                        <img src="img/arm-logo.png" class="token-key-img">
                                    </div>
                                </div>
                                <div class=" col-md-4">
                                    <div class="token-key-block token-bg">
                                        <h3 class="token-key-tit">
                                        Smart<br>
                                        Contracts
                                    </h3>
                                        <div class="token-txt-block row m-0">
                                            <div class="pull-left token-arrow"><i class="ion-android-arrow-forward"></i></div>
                                            <div class="token-txt">Automatic payout distribution</div>
                                        </div>
                                        <div class="token-txt-block row m-0">
                                            <div class="pull-left token-arrow"><i class="ion-android-arrow-forward"></i></div>
                                            <div class="token-txt">Ethereum-based</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row token-key-row">
                                <div class="col-md-4"></div>
                                <div class=" col-md-4">
                                    <div class="token-key-block token-bg">
                                        <h3 class="token-key-tit">
                                        Save it<br>
                                        Sell it<br>
                                        Exchange it
                                    </h3>
                                        <div class="token-txt-block row m-0">
                                            <div class="pull-left token-arrow"><i class="ion-android-arrow-forward"></i></div>
                                            <div class="token-txt">Payouts are yours to save or sell</div>
                                        </div>
                                        <div class="token-txt-block row m-0">
                                            <div class="pull-left token-arrow"><i class="ion-android-arrow-forward"></i></div>
                                            <div class="token-txt">ERC20 tradeable token</div>
                                        </div>
                                        <div class="token-txt-block row m-0">
                                            <div class="pull-left token-arrow"><i class="ion-android-arrow-forward"></i></div>
                                            <div class="token-txt">Valid for life</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- Token Key Sections Ends -->
            <!-- ICO Details Section Starts -->
            <!-- <section class="ico-sec section grey-bg p-80" id="ico">
                <div class="shape-bg shape-bg1 bg-img" style="background-image: url(img/shape-2.png);"></div>
                <div class="container">
                    <div class="sec-inner ico-sec-inner wow fadeInUp" data-wow-duration="1s"> -->
            <!-- Section Head Starts -->
            <!-- <div class="sec-head text-center">
                            <div class="sec-tit">Compare Mining Options</div>
                        </div> -->
            <!-- Section Head Ends -->
            <!-- Section Content Starts -->
            <!-- <div class="sec-content ico-sec-content wow fadeInUp" data-wow-duration="1s">
                            <div class="table-responsive">
                                <table class="table mining-table">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">
                                                <h6 class="mining-tit">Electricity</h6>
                                                <p class="mining-txt">USD/kWh</p>
                                            </th>
                                            <th scope="col">
                                                <h6 class="mining-tit">Output</h6>
                                                <p class="mining-txt">Expected 3Y ROI</p>
                                            </th>
                                            <th scope="col">
                                                <h6 class="mining-tit">Scam Risk</h6>
                                                <p class="mining-txt">Operational Transparency</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="mining-active">
                                            <th scope="row"><span class="mining-th1">Aarnav</span></th>
                                            <td>Ultra Low 0.06USD</td>
                                            <td>614%</td>
                                            <td><span class="mining-th2">No risk / Audited</span></td>
                                        </tr>
                                        <tr>
                                            <th>Minerone</th>
                                            <td>High 0.078-0.085</td>
                                            <td>471%</td>
                                            <td>No Risk / Audited</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ASIC @ Home</th>
                                            <td>High 0.098-0.28</td>
                                            <td>113%-244%</td>
                                            <td>No Risk</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Mining Pool</th>
                                            <td>High 0.098-0.28</td>
                                            <td>108%-239%</td>
                                            <td>@Low or medium</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Genesis mining</th>
                                            <td>Undisclosed</td>
                                            <td>222%</td>
                                            <td>Low</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">HashFlare</th>
                                            <td>Undisclosed</td>
                                            <td>143%-150%</td>
                                            <td>Very low</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> -->
            <!-- Section Content Ends -->
            <!-- <div class="note wow fadeInUp" data-wow-duration="1s">
                            <p>
                                The aforementioned calculations assume a starting BTC price of USD 14000, starting difficulty level of 2,227,847,638,503, and fluctuation in monthly difficulty between -12% and +12%. Calculations are based on actual market data on January 15, 2018. If bitcoin rises above USD 14000, the profitability of Miner One will then depend more on mining difficulty and may be lower compared to returns from direct speculation in bitcoin. But who knows for certain? </p>
                        </div>
                    </div>
                    <div class="graph-sec wow fadeInUp" data-wow-duration="1s">
                        <img src="img/graph.png">
                    </div>
                </div>
            </section> -->
            <!-- ICO Details Section Ends -->
            <!-- News Section Starts -->

            <section class="news-sec bg-img section p-80">
                <div class="container">
                    <div class="sec-inner news-sec-inner m-b-80">
                        <div class="sec-head text-center">
                            <h4 class="raised-tit sales-tit black">Something New <span> &</span><span> Exciting Coming Up...</span></h4>
                            <div class="sec-tit"><p>Engineers currently working on </p>FPGA ACCELERATION HUB</div>
                        </div>
                    </div>
                    <div class="sec-content">
                        <h4>For Aarnav Data centers,</h4>
                        <p>FPGAs are silicon devices that can be dynamically reprogrammed with a datapath that exactly matches workloads, such as data analytics, image inference, encryption, and compression. This versatility enables the provisioning of a faster processing, more power efficient, and lower latency service – lowering your total cost of ownership, and maximizing compute capacity within the power, space, and cooling constraints of data centers.</p>

                        <h4 class="m-t-50">Benefits or advantages of FPGA</h4>
                        <p>Following are the benefits or advantages of FPGA:</p>
                        <ul>
                            <li>
                                <p>FPGAs can be programmed at logic level. Hence it can implement faster and parallel processing of signals. This is difficult to be executed by processor. </p>
                            </li>
                            <li>
                                <p>Unlike ASIC which are fixed once programmed, FPGAs are programmable at software level at any time. Hence FPGA IC can be re-programmed or reused any number of times. FPGA can also be programmed from remote locations. </p>
                            </li>
                            <li>
                                <p>FPGA ICs are readily available which can be programmed using HDL code in no time. Hence the solution is available faster to the market. </p>
                            </li>
                            <li>
                                <p>Unlike ASIC which requires huge NRE (Non Recurring Expenses) and costly tools, FPGA development is cheaper due to less costly tools and no NRE. </p>
                            </li>
                            <li>
                                <p>In FPGA design, software takes care of routing, placement and timing. This makes lesser manual intervention. The design flow eliminates complex and time consuming place and router, floor planning and timing analysis.</p>
                            </li>
                        </ul>
                    </div>
                </div
>            </section>

            <div class="cryptocurrencies">
            <div class="container">
                <div class="text-center sec-title col-lg-12 col-md-12 col-sm-12 col-xs-12 mb40">
                        <h4>Live Cryptocurrencies Price</h4>
                    </div>
                <div class="grid-tokens">
                    <div class="token-details">
                        <div class="token-info">
                            <a href="https://www.buybitcoinach.com/learn/what-is-bitcoin" target="_blank">
                            <img width="30" height="30" src="svg/bitcoin.svg" alt="bitcoin">
                            <h4>bitcoin</h4>

                            <h6><strong>$<?php echo $btc;?></strong><span class="<?php echo $btc_status;?>"></h6>
                            </a>
                        </div>
                    </div>
                    <div class="token-details">
                        <div class="token-info">
                            <img width="30" height="30" src="svg/Ethereum.svg" alt="Ethereum">
                            <h4>etherium</h4>

                            <h6><strong>$<?php echo $eth;?></strong><span class="<?php echo $eth_status;?>"></h6>
                        </div>
                    </div>
                    <div class="token-details">
                        <div class="token-info">
                            <img width="30" height="30" src="svg/Ripple.svg" alt="Ripple">
                            <h4>ripple</h4>

                            <h6><strong>$<?php echo $rpl;?></strong><span class="<?php echo $rpl_status;?>"></h6>
                        </div>
                    </div>
                    <div class="token-details">
                        <div class="token-info">
                            <img width="30" height="30" src="svg/Bitcoin-Gold.svg" alt="Bitcoin Gold">
                            <h4>bitcoin gold</h4>

                            <h6><strong>$<?php echo $btg;?></strong><span class="<?php echo $btg_status;?>"></h6>
                        </div>
                    </div>
                    <div class="token-details">
                        <div class="token-info">
                            <img width="30" height="30" src="svg/Litecoin.svg" alt="Litecoin">
                            <h4>litecoin</h4>

                            <h6><strong>$<?php echo $ltc;?></strong><span class="<?php echo $ltc_status;?>"></h6>
                        </div>
                    </div>
                    <div class="token-details">
                        <div class="token-info">
                            <img width="30" height="30" src="svg/zrx.svg" alt="zrx">
                            <h4>Zrx</h4>

                            <h6><strong>$<?php echo $zrx;?></strong><span class="<?php echo $zrx_status;?>"></h6>
                        </div>
                    </div>
                    <div class="token-details">
                        <div class="token-info">
                            <img width="30" height="30" src="svg/Tron.svg" alt="Tron">
                            <h4>Tron</h4>

                            <h6><strong>$<?php echo $trx;?></strong><span class="<?php echo $trx_status;?>"></h6>
                        </div>
                    </div>
                    <div class="token-details">
                        <div class="token-info">
                            <img width="30" height="30" src="img/newlogo.png" alt="zrx">
                            <h4>ARM</h4>

                            <h6><strong>$0.10</strong><span class="fa fa-arrow-up"></span></h6>
                        </div>
                    </div>
                </div>
            </div>
    </div>

            <section class="news-sec gray-bg bg-img section p-80" id="news">
                <div class="container">
                    <!-- News Section Inner Starts -->
                    <div class="sec-inner news-sec-inner m-b-80">
                        <!-- Section Head Starts -->
                        <div class="sec-head text-center">
                            <div class="sec-tit">News</div>
                        </div>
                        <!-- Section Head Ends -->
                        <!-- Section Content Starts -->
                        <div class="sec-content news-sec-content row wow fadeInUp" data-wow-duration="1s">
                            <!-- News Slider Starts -->
                            <div class="news-slider">
                                
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://www.coindesk.com/india-may-legalize-cryptos-but-under-strong-rules-report" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/IndiaMayLegalize.jpg);"></div>
                                        <h5 class="news-tit">India May Legalize Cryptos But Under ‘Strong’ Rules: Report</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->

                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://www.cnbc.com/amp/2018/12/21/facebook-reportedly-working-on-a-cryptocurrency-for-transfering-money-through-whatsapp-.html" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/Facebookwillreportedly.jpg);"></div>
                                        <h5 class="news-tit">Facebook will reportedly use cryptocurrency for transferring money through WhatsApp</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->

                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://cryptonews.net/70605/?utm_source=CryptoNews&utm_medium=app&utm_campaign=shared" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/USLawmakersLook.jpg);"></div>
                                        <h5 class="news-tit">US Lawmakers Look to Exclude Cryptocurrency From Definition of a Security and Limit SEC’s Role in Crypto Regulation</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->

                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://www.ccn.com/bitcoin-surges-18-in-3-days-as-it-nears-3800-whats-next-for-the-market/" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/WhyCryptocurrencies.jpg);"></div>
                                        <h5 class="news-tit">Why cryptocurrencies are here to stay</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="http://www.cityam.com/270906/why-cryptocurrencies-stay" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/BitcoinSurges.jpg);"></div>
                                        <h5 class="news-tit">Bitcoin Surges 18% in 3 Days as it Nears $3,800: What’s Next For the Market?</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->

                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://cryptonews.net/69159/?utm_source=CryptoNews&utm_medium=app&utm_campaign=shared" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/WesternUnionCEO.jpg);"></div>
                                        <h5 class="news-tit">Western Union CEO Says Company is Prepared to Add Cryptocurrencies When It's Necessary</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->

                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://cryptonews.net/68619/?utm_source=CryptoNews&utm_medium=app&utm_campaign=shared" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/MorethanBillionUSD.jpeg);"></div>
                                        <h5 class="news-tit">More than $2 Billion USD Poured Into Bitcoin (BTC) within 45 Minutes</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->

                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://www.ccn.com/new-us-chief-of-staff-bitcoin-is-good-not-manipulable-by-any-government" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/NewUSChief.jpg);"></div>
                                        <h5 class="news-tit">New US Chief of Staff: Bitcoin is Good, ‘Not Manipulable by Any Government’</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->

                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://www.finextra.com/newsarticle/33095/currencies-direct-switches-on-xcurrent-from-ripple-for-indian-remittances" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/CurrenciesDirect.jpg);"></div>
                                        <h5 class="news-tit">Currencies Direct switches on xCurrent from Ripple for Indian remittances</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->

                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://finance.yahoo.com/news/bullion-giant-apmex-partners-bitpay-222106295.html" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/BullionGiant.jpg);"></div>
                                        <h5 class="news-tit">Bullion Giant APMEX Partners with BitPay to Let Investors Buy Gold with Bitcoin</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->

                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://finance.yahoo.com/news/g20-countries-regulate-cryptocurrencies-line-191710160.html" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/g20countries.jpg);"></div>
                                        <h5 class="news-tit">G20 Countries to Regulate Cryptocurrencies in Line with FATF Standards</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->

                                    <!-- News Slide Box Starts -->
                                    <div class="news-slide-box">
                                    <a href="https://news.bitcoin.com/report-bitcoin-mining-doesnt-fuel-climate-change-it-benefits-the-global-economy/" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/bitcoinmining.jpg);"></div>
                                        <h5 class="news-tit">Bitcoin Mining Doesn’t Fuel Climate Change, It Benefits the Global Economy</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->

                                    <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://www.ccn.com/breaking-what-crypto-winter-nasdaq-to-launch-bitcoin-futures-market/" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/Nasdaq-760x400.jpg);"></div>
                                        <h5 class="news-tit">What Crypto Winter? Nasdaq to Launch Bitcoin Futures Market: Report</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->

                            <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://www.ccn.com/susquehanna-exec-bakkt-and-fidelity-could-solve-bitcoins-liquidity-issue/" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/glass-of-water-bitcoin-sidechain-liquid-cryptocurrency.jpg);"></div>
                                        <h5 class="news-tit">Susquehanna Exec: Bakkt and Fidelity Could Solve Bitcoin’s Liquidity Issue</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->

                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://insidebitcoins.com/news/vanecks-mvis-debuts-first-ever-bitcoin-otc-index/195129" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/iftseo.jpg);"></div>
                                        <h5 class="news-tit">VanEck’s MVIS Debuts First Ever Bitcoin OTC Index</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->

                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://www.ccn.com/could-switzerlands-crypto-etp-increase-the-chance-of-a-bitcoin-etf-approval/" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/switzerland-bitcoin-etf-crypto.jpg);"></div>
                                        <h5 class="news-tit">Could Switzerland’s Crypto ETP Increase the Chance of a Bitcoin ETF Approval?</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://www.ccn.com/worlds-first-crypto-etp-gets-green-light-in-switzerland/" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/switzerland-bitcoin.jpg);"></div>
                                        <h5 class="news-tit">World's First Crypto ETP Gets Green Light in Switzerland</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->

                                 <!-- News Slide Box Starts --> 
                                 <div class="news-slide-box">
                                    <a href="https://www.ccn.com/worlds-first-crypto-etp-gets-green-light-in-switzerland/" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/Singapore-Exchange.webp);"></div>
                                        <h5 class="news-tit">Singapore Exchange Successfully Trials Blockchain for Tokenized Assets Settlement</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->

                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://blockmanity.com/news/ron-paul-calls-for-exempting-cryptocurrencies-from-capital-gains-tax/" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/RonPaul-news.jpg);"></div>
                                        <h5 class="news-tit">Ron Paul Calls for Exempting Cryptocurrencies from Capital Gains Tax</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->

                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://www.ccn.com/crypto-exchange-bithumb-u-s-with-security-token-exchange-deal/" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/KoreanCrypto-news.jpg);"></div>
                                        <h5 class="news-tit">Korean Crypto Giant Bithumb Makes U.S. Foray with Security Token Exchange Deal</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->

                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://www.dfs.ny.gov/about/press/pr1810231.htm" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/nygov-logo.png);"></div>
                                        <h5 class="news-tit">DFS Authorizes Coinbase Global, INC.</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://blockchainflashnews.com/nasdaq-to-create-cryptocurrency-security-tokens-platform/" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/Nasdaq.jpg);"></div>
                                        <h5 class="news-tit">Nasdaq to Create Cryptocurrency Security Tokens Platform</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://www.ccn.com/indias-govt-considers-allowing-crypto-tokens-for-metro-cards-airline-tickets-report/" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/news17.png);"></div>
                                        <h5 class="news-tit"> India’s Govt Considers Allowing Crypto Tokens for Metro Cards, Airline Tickets: Report</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://www.cnbc.com/2018/08/04/brian-kelly-bitcoin-could-come-to-your-401k-with-starbucks-bakkt.html" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/news16.png);"></div>
                                        <h5 class="news-tit"> Bitcoin could come to your retirement account, thanks to Starbucks' crypto venture</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://www.ccn.com/88-of-cryptocurrency-exchanges-want-industry-regulation-new-study-reveals/" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/news15.png);"></div>
                                        <h5 class="news-tit"> 88% Of Crypto Exchanges Want Industry Regulation, New Study Reveals</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://twitter.com/NiceHashMining" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/news14.png);"></div>
                                        <h5 class="news-tit"> It’s nice to know: Bitcoins are created each time a user discovers a new block</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://www.ccn.com/mastercard-wins-a-patent-to-link-cryptocurrency-with-fiat-accounts/" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/news11.png);"></div>
                                        <h5 class="news-tit"> Mastercard Wins a Patent to Link Cryptocurrency</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://cointelegraph.com/news/litecoin-founder-says-in-best-case-recent-bank-stake-could-result-in-crypto-services" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/news12.png);"></div>
                                        <h5 class="news-tit"> Litecoin Founder Says in ‘Best Case’ Recent Bank</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://www.coindesk.com/american-express-thinks-blockchains-could-help-prove-payments/" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/news13.png);"></div>
                                        <h5 class="news-tit"> American Express Thinks Blockchains Could</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://www.crowdfunder.com/aarnav/invest" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/news10.png);"></div>
                                        <h5 class="news-tit"> AARNAV Inc - Investing Globally Mining Cryptocurrency</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://blog.icoalert.com/sto-is-the-new-ipo-6b194a9b57cb" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/news2.png);"></div>
                                        <h5 class="news-tit"> ICO Alert does not endorse or recommend participating in any offerings.</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://moneymorning.com/2018/04/09/forget-icos-security-token-offerings-are-a-10-trillion-opportunity/" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/news3.png);"></div>
                                        <h5 class="news-tit"> Forget ICOs; Security Token Offerings Are a $10 Trillion Opportunity</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://twitter.com/Aarnavtoken" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/news4.png);"></div>
                                        <h5 class="news-tit"> People are earning and spending #money without ever touching it. In fact,</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://medium.com/@aarnavinc/with-more-than-3-25-d5450ce1442e" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/news6.png);"></div>
                                        <h5 class="news-tit"> With more than $3.25 Billion funds raised in 2017, ICO’s still have not been able to</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://medium.com/@aarnavinc/internet-has-been-changing-the-way-people-have-been-behaving-for-over-a-decade-c13268856571" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/news7.png);"></div>
                                        <h5 class="news-tit"> Internet has been changing the way people have been behaving for over a decade.</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://www.crowdfunder.com/aarnav/invest" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/news8.png);"></div>
                                        <h5 class="news-tit"> AARNAV Inc Investing Globally Mining Cryptocurrency</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://www.crunchbase.com/organization/aarnav-arm-token#section-overview" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/news9.png);"></div>
                                        <h5 class="news-tit">(INITIAL COIN OFFERING)** = IPO 2.0 = STO (SECURITY TOKEN OFFEREING) </h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="http://bitcoinist.com/now-over-3000-bitcoin-atms-worldwide/" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/shutterstock_749475805.jpg);"></div>
                                        <h5 class="news-tit">THERE ARE NOW OVER 3,000 BITCOIN ATMS WORLDWIDE</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="http://www.worldusheadlines.com/2018/09/06/coinbase-is-exploring-a-bitcoin-etf-and-it-has-sought-help-from-6-trillion-wall-street-giant-blackrock/" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/gettyimages-457582872201-1.jpg);"></div>
                                        <h5 class="news-tit">Coinbase is exploring a bitcoin ETF, and it has sought help from $6 trillion Wall Street giant BlackRock</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://cointelegraph.com/news/malta-stock-exchange-signs-mou-with-binance-to-launch-security-tokens-trading-platform" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/MaltaStockExchange.jpg);"></div>
                                        <h5 class="news-tit">Malta Stock Exchange Signs MOU with Binance to Launch Security Tokens Trading Platform</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://cryptonews.net/47268/?utm_source=CryptoNews&utm_medium=app&utm_campaign=shared" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/Over_news1.jpg);"></div>
                                        <h5 class="news-tit">Over 100,000 ATMs now let you buy bitcoin with a debit card in the U.S</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->
                                <!-- News Slide Box Starts -->
                                <div class="news-slide-box">
                                    <a href="https://cryptonews.net/47309/?utm_source=CryptoNews&utm_medium=app&utm_campaign=shared" target="_blank">
                                        <div class="news-img bg-img" style="background-image: url(img/Over_news2.jpg);"></div>
                                        <h5 class="news-tit">Make mine a double: How to get more from your mining</h5>
                                    </a>
                                </div>
                                <!-- News Slide Box Ends -->

                            </div>
                            <!-- News Slider Ends -->
                        </div>
                        <!-- Section Content Ends -->
                    </div>
                    <!-- News Section Inner Ends -->
                    <div class="sec-button-sec text-center m-t-50">
                        <a href="http://investor.aarnav.io/register" class="white-btn">Signup &amp; Buy Tokens</a>
						<a href="https://discord.gg/wVgD9J6" class="gradient-btn intro-btn">Join Our Community</a>
                    </div>
                </div>
            </section>
            <!-- News Section Ends -->

            

            <!-- Whitepaper Section Starts style="background-image: url(img/bg.png);-->
            <section class="whitepaper-sec section p-80">
                <div class="shape-bg bg-img"></div>
                <div class="container">
                <h4 class="raised-tit sales-tit black text-center mb40">“First payout to our investors is <span>decided by the board,</span> <span>will be distributed on</span> <span>31st of December 2018”</span></h4>
                    <div class="sec-inner whitepaper-sec-inner">
                        <!-- Section Content Starts -->
                        <div class="sec-content whitepaper-sec-content wow fadeInUp" data-wow-duration="1s">
                            <div class="whitepaper row">
                                <!-- Whitepaper Block Starts -->
                                <div class="col-md-6">
                                    <div class="whitepaper-block text-center" style="border: 0px;">
                                        <h5 class="whitepaper-tit">Read our Whitepaper</h5>
                                        <a href="pdf/white-paper.pdf" target="_blank" class="whitepaper-link"><span>Whitepaper</span></a>
                                    </div>
                                </div>
                                <!-- Whitepaper Block Ends -->
                                <!-- Whitepaper Block Starts -->
                                <!-- <div class="col-md-4">
                                    <div class="whitepaper-block text-center">
                                        <h5 class="whitepaper-tit">Read Our Onepager</h5>
                                        <a href="pdf/onepager.pdf" target="_blank" class="whitepaper-link"><span>Onepager</span></a>
                                    </div>
                                </div> -->
                                <!-- Whitepaper Block Ends -->
                                <!-- Whitepaper Block Starts -->
                                <div class="col-md-6">
                                    <div class="whitepaper-block text-center">
                                        <h5 class="whitepaper-tit">Register for Token sales</h5>
                                        <a href="http://investor.aarnav.io" class="whitepaper-link"><span>Buy Tokens</span></a>
                                    </div>
                                </div>
                                <!-- Whitepaper Block Ends -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Whitepaper Section Ends -->
        </div>
        <!-- Content Wrapper Ends -->
        <!-- Footer Starts -->
        <footer class="footer bg-img p-80">
            <div class="container">
                <!-- Foot Top Starts -->
                <div class="foot-top row">
                    <div class="newsletter">
                        <div class="col-sm-12">
                            <div class="single">
                                <h2>Stay Informed!</h2>
                                <div class="input-group">
                                    <input type="email" id="js-email" class="form-control" placeholder="Subscribe Now">
                                    <span class="input-group-btn">
                                        <button class="btn btn-theme" id="js-subscribe" type="submit">Get News</button>
                                    </span>
                                </div>
                                <p><span>32435</span> community members have already joined the interest list.</p>
                            </div>
                        </div>
                    </div>
                    <div class="foot-top-right col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center">
                        <ul class="list-unstyled list-inline social-list">
                            <li><a target="_blank" href="https://www.linkedin.com/company/aarnav/" class="social-item"><i class="mdi mdi-linkedin"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/Aarnavtoken" class="social-item"><i class="mdi mdi-twitter"></i></a></li>
                            <!-- <li><a href="https://t.me/aarnav_token" class="social-item"><i class="mdi mdi-telegram"></i></a></li> -->
                            <li><a target="_blank" href="https://www.facebook.com/Aarnav-1724687394261783" class="social-item"><i class="mdi mdi-facebook"></i></a></li>
                            <li><a href="https://medium.com/@aarnavtoken" class="social-item"><i class="mdi mdi-medium"></i></a></li>
                            <!-- <li><a href="#" class="social-item"><i class="mdi mdi-bitcoin"></i></a></li> -->
                            <li><a href="https://www.instagram.com/aarnavinc/" class="social-item" target="_blank"><i class="mdi mdi-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Foot Top Ends -->
                <!-- Foot Bottom Starts -->
                <div class="foot-btm row text-center">
                    <ul class="foot-btm-list list-unstyled list-inline">
                        <li>
                            <a href="privacy-policy.html" class="foot-link">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="terms.html" class="foot-link">Terms of Service</a>
                        </li>
                        <li>
                            <a href="contact-us.html" class="foot-link">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <p class="text-center white-txt">Operating <img src="img/usa_icon.png" style="width:20px;"> in US</p>
                </div>
                <!-- Foot Bottom Ends -->
            </div>
        </footer>
        <!-- Footer Ends -->
    </div>
    <!-- Main Warapper Ends -->
    <!-- Video Modal Starts -->
    <div class="modal fade" id="video-modal" tabindex="-1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="mdi mdi-window-close"></i></button>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/bY2SqLTefEg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal Ends -->
    <!-- Slider Button Modal Start -->
    <!-- Modal_1 Start-->
	<div class="modal fade" id="myModal-new" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
				
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="color: #000 !important">&times;</button>
                    <div class="modal-title text-center"><img src="img/black-logo.png" alt="logo" width="20%" class="img-responsive"></div>
                </div>
            <div class="modal-body modelz">
			<a href="https://www.google.com/url?q=https://zp.leafpool.com/miners/zen1qa9ttmrt43l9h5h7fdllk3lx5j090yc7lm42226nt63f4jd2rksnqa4s0gv&sa=D&source=hangouts&ust=1544558399285000&usg=AFQjCNHqEK6UPdbDk7tGt691U_Z82Keb7g" class="modal-link">https://www.google.com/url?q=https://zp.leafpool.com/miners/zen1qa9ttmrt43l9h5h7fdllk3lx5j090yc7lm42226nt63f4jd2rksnqa4s0gv&sa=D&source=hangouts&ust=1544558399285000&usg=AFQjCNHqEK6UPdbDk7tGt691U_Z82Keb7g</a>
                <!--    <p><b>Mining statistics link</b></p>
                    <p><a href="https://www.nicehash.com/miner/3GRSW78C7RLAA8ZmGBbvcAknKKpUh1Utms" target="_blank" style="word-wrap: break-word;color: #797777 !important;">https://www.nicehash.com/miner/3GRSW78C7RLAA8ZmGBbvcAknKKpUh1Utms</a></p>
                </div> -->
			<!--	<div class="row overflow modal-body">
					<div id="chartContainer" style="height: 600px; width: 100%;"></div>
					<div class="row closer">
					<table class="light new-table">
						<thead>
							<tr>
								<th>ZP</th>
								<th class="rmv2" style="text-align: right;">USD</th>
							</tr>
						</thead>
						<tbody id="miningStats">
							<tr>
								<td><div class="shw"><b>28.6500</b> ZP</div></td>
								<td class="rmv2" style="text-align: right;">26.02</td>
							</tr>
							<tr>
								<td>Lyra2Z<div class="shw"><b>200.5848</b> ZP</div></td>
								<td class="rmv2" style="text-align: right;">182.14</td>
							</tr>
							<tr>
								<td>Equihash<div class="shw"><b>859.6491</b> ZP</div></td>
								<td class="rmv2" style="text-align: right;">806.62</td>
							</tr>
						</tbody>
					</table>
					</div>
				</div> -->
            </div>
        </div>
    </div>
</div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
				
               <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="color: #000 !important">&times;</button>
                    <div class="modal-title text-center"><img src="img/black-logo.png" alt="logo" width="20%" class="img-responsive"></div>
                </div>
            <div class="modal-body modelz">
			<a href="https://www.nicehash.com/miner/3GRSW78C7RLAA8ZmGBbvcAknKKpUh1Utms" class="modal-link">https://www.nicehash.com/miner/3GRSW78C7RLAA8ZmGBbvcAknKKpUh1Utms</a>
                 <!--   <p><b>Mining statistics link</b></p>
                    <p><a href="https://www.nicehash.com/miner/3GRSW78C7RLAA8ZmGBbvcAknKKpUh1Utms" target="_blank" style="word-wrap: break-word;color: #797777 !important;">https://www.nicehash.com/miner/3GRSW78C7RLAA8ZmGBbvcAknKKpUh1Utms</a></p>-->
        <!--        </div> 
				<div class="row overflow modal-body">
					<div class="frame">
						<h1>3GRSW78C7RLAA8ZmGBbvcAknKKpUh1Utms</h1>
						<div class="select right">
							<select>
								<option value="AUD">AUD</option>
								<option value="BGN">BGN</option>
								<option value="BRL">BRL</option>
								<option value="CAD">CAD</option>
							</select>
						</div>
					</div>
					<div class="divider"></div>
					<div id="stats-cntnt">
						<div class="col_4">
							<h2>Profitability</h2>
							<div class="content" id="statsProfitability">0.0313 <small>BTC/day</small><sub><span class="fiatAmount">101.71</span> <small><span class="fiatCurrency">USD</span>/day</small></sub></div>
						</div>
						<div class="col_4">
							<h2>Efficiency</h2>
							<div class="content" id="statsEfficiency">99.88% <sub>0.12% rejected</sub></div>
						</div>
						<div class="col_4">
							<h2>Workers</h2>
							<div class="content" id="totalWorkers">1</div>
						</div>
					</div>
					
					<div class="row closer">
						<div class="col_2_3">
							<div>
							<h2>Mining stats</h2>
							<table class="light">
								<thead>
									<tr>
										<th>Algorithm</th>
										<th class="rmv2" style="text-align: right;">Accepted speed</th>
										<th class="rmv" style="text-align: right;">Rejected speed<br>(BTC/day)</th>
										<th class="rmv" style="text-align: right;">Profitability</th>
										<!--<th class="rmv2" style="text-align: right;">Unpaid balance<br>(BTC)</th>-->
					<!--				</tr>
								</thead>
								<tbody id="miningStats">
									<tr>
										<td>Equihash<!--<div class="shw"><b>Accepted speed:</b> 783344.00 Sol/s<br><b>Unpaid balance:</b> 0.00838217 BTC</div>--></td>
					<!--					<td class="rmv2" style="text-align: right;">723015.00 Sol/s</td>
										<td class="rmv" style="text-align: right;">1856.83 Sol/s (0.26%)</td>
										<td class="rmv" style="text-align: right;">0.062</td>
										<!--<td class="rmv2" style="text-align: right;">0.00838217</td>-->
					<!--				</tr>
									<tr>
										<td>Lyra2Z<!--<div class="shw"><b>Accepted speed:</b> 0.00 MH/s<br><b>Unpaid balance:</b> 0.00000000 BTC</div>--></td>
					<!--					<td class="rmv2" style="text-align: right;">0.00 MH/s</td>
										<td class="rmv" style="text-align: right;">0.00 MH/s (0.00%)</td>
										<td class="rmv" style="text-align: right;">0.0000</td>
										<!--<td class="rmv2" style="text-align: right;">0.00000000</td>-->
					<!--				</tr>
									<tr class="rmv"><td></td><td></td>
										<td class="results" style="text-align: right;"><div style="margin-bottom: 5px;">Total BTC</div><span class="text-muted">Total USD</span></td>
										<td class="results" style="text-align: right;"><div style="margin-bottom: 5px;">0.062 BTC/day</div><span class="text-muted"><span class="fiatAmount">210 USD</span>/day</span></td>
										<!--<td class="results"><div style="margin-bottom: 5px;">0.00838217</div><span class="text-muted"><span class="fiatAmount">27.21</span></span></td>-->
					<!--				</tr>
								</tbody>
							</table>
							
							</div>
						</div>
						<div class="col_1_3">
							<div>
							<h2>Projected payout</h2>
								<div class="payout">
									<div class="payout_header">
										<div class="line">
											<div class="title">Next payout</div>
											<div class="value">2018-12-31 17:00</div>
										</div>
										<!--<div class="line">
											<div class="title">Payout amount</div>
											<div class="value"><span id="nextPayoutBalanceBTC">0.03067990</span> BTC<sub><span class="fiatAmount" id="nextPayoutBalanceFIAT">99.59 </span><span class="fiatCurrency">USD</span></sub></div>
										</div>-->
						<!--			</div>
									<div class="payout_content">
										<div class="line">
											<div class="title">Daily income</div>
											<div class="value"><span id="dailyIncomeBTC">0.062</span> BTC<sub><span id="dailyIncomeFIAT" class="fiatAmount">210</span><span class="fiatCurrency">USD</span></sub></div>
										</div>
										<div class="line">
											<div class="title">Weekly income</div>
											<div class="value"><span id="weeklyIncomeBTC">0.43</span> BTC<sub><span id="weeklyIncomeFIAT" class="fiatAmount">1470</span><span class="fiatCurrency">USD</span></sub></div>
										</div>
										<div class="line">
											<div class="title">Monthly income</div>
											<div class="value"><span id="monthlyIncomeBTC">1.86</span> BTC<sub><span id="monthlyIncomeFIAT" class="fiatAmount">6300</span><span class="fiatCurrency">USD</span></sub></div>
										</div>
									</div>
									<div class="payout_content" style="border-top: 1px solid rgb(219, 219, 219); position: relative; top: -3px; background: white;"><div class="line text-center"><a href="/help/when-and-how-do-you-get-paid" target="_blank" style="text-transform: uppercase; color: rgb(136, 136, 136); text-decoration: underline;">When and how do you get paid?</a></div></div>
									<small>Please note that these values are only estimations on the basis of your current mining tempo and they can change over time. Exchange rate of 1 BTC = <span class="fiatAmountExchange">3246.00</span> <span class="fiatCurrency">USD</span> was used.</small>
								</div>
							</div>
						</div>
					</div>-->
				</div> 
            </div>
        </div>
    </div>
    <!-- Modal_1 End -->
    <!-- Modal_2 Start -->
    <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog">
            
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="color: #000 !important">&times;</button>
                    <div class="modal-title text-center"><img src="img/black-logo.png" alt="logo" width="20%" class="img-responsive"></div>
                </div>
                <div class="modal-body">
                    <br>
                    <h6 class="testi_title">Manpreet Singh <span>Chief Operating Office</span></h6>
                    <p>Entrepreneur, Director and Chief Operating Officer of Aarnav, Manpreet Singh is committed to the development of technology innovation for various algorithms in crypto mining.</p>
                    <p>A blockchain evangelist, Manpreet is committed to developing a top-class investment solution for the crypto world leveraging his experience in wealth creation, real estate investment and working with private organizations, governments, and multilateral organizations across five continents.</p>
                    <p>Manpreet’s brings over 16 years’ experience in IT Management, IT Operations, and IT Project Management working for some of the largest, globally renowned retail, manufacturing, and IT companies. </p>
                    <p>Manpreet acquired a broad range of experience in Executive leadership positions in sales, business development, and marketing in New Zealand, Australia, India, and the USA. He has conducted business across national borders, regulatory environments, and cultures. </p>
                    <p>Manpreet has also helped numerous companies, educational institutions, non-profit organizations to raise funds and develop, communicate their brand’s mission and message more effectively.</p>
                    <p>Manpreet has been involved in FX, CFDs, stocks, bonds, and innovative technologies with companies such as IG, Oanda FX Trade, Verizon, Common Wealth Bank of Australia, Bank of Melbourne, ASB Bank, and the real estate industry.</p>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal_2 End -->
    <!-- Modal_3 Start -->
    <div class="modal fade" id="myModal3" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="color: #000 !important">&times;</button>
                    <div class="modal-title text-center"><img src="img/black-logo.png" alt="logo" width="20%" class="img-responsive"></div>
                </div>
                <div class="modal-body">
                    <br>
                    <h6 class="testi_title">Gurpreet Kaur <span>Chief Executive Officer</span></h6>
                    <p>4+ years of experience in the IT&T business, logistics, data centre construction and management</p>
                    <p>Gurpreet is a results-oriented leader with a strong track record of delivering in high-paced organizations. She is recognized by peers for her keen analysis, strategic insights and a team-centricapproach to drive organizational growth. </p>
                    <p>Gurpreet has executive experience in the supply chain, logistics and restaurants sectors, having held the positions of CFO of Sam Sikka Enterprises and CEO of Bolero fine dining restaurant in New Zealand. </p>
                    <p>Gurpreet also brings a diverse skillset from her rich experiences in real estate development and Forex at IG Australia, including negotiating acquisitions, dispositions, and capital expenditures and performing due diligence, as well as developing and delivering real estate strategies and transaction services. </p>
                    <p>With exceptional interpersonal skills, she is capable of resolving various challenges spanning the organization – including financial, operational, sales, human resources, and legal issues. </p>
                    <p>Gurpreet is a Bitcoin enthusiast & a women in Blockchain advocate. She has mined Bitcoin since 2016 and is passionate about building a company that allows investors to benefit from the growth of this innovative technology</p>
                    <p>Since the very beginning, Gurpreet’s vision for AARNAV has been to steer the company locally in the USA. Under the leadership of Gurpreet, AARNAV will launch as a fully SEC-compliant Security Token on the Ethereum network, leveraging smart contracts to ensure the ARM token complies with all characteristics of the SECs Regulation D section 506c exemption. </p>
                    <p>As Director and Chief Executive Officer of Aarnav Inc , Gurpreet takes pride in what she has achieved and has set her sights on taking this venture to a billion dollar valuation.</p>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal_3 End -->
    <!-- Modal_4 Start -->
    <div class="modal fade" id="myModal4" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="color: #000 !important">&times;</button>
                    <div class="modal-title text-center"><img src="img/black-logo.png" alt="logo" width="20%" class="img-responsive"></div>
                </div>
                <div class="modal-body">
                    <br>
                    <h6 class="testi_title">Jack Liao BIO <span>Chief Technology Advisor</span></h6>
                    <p>Jack Liao, 42, was educated in China and is the CEO of LightningASIC, a Hong Kong maker of specialty cryptocurrency mining equipment for Bitcoin and other coins. Jack has been investing in Bitcoin since 2013, and has been an angel investor in a variety companies in the space, including mining hardware and software, wallet hardware and software, cryptocurrency ATM systems, exchanges, and transaction services. Jack sponsored BitcoinNewyork.org; is one of the six core Bitcoin Gold team members and is a Founder of Bitcoin Gold. He presents to Bitcoin enthusiasts and Bitcoin-related enterprises around the world.</p>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal_4 End -->
    <!-- Modal_5 Start -->
    <div class="modal fade" id="myModal5" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="color: #000 !important">&times;</button>
                    <div class="modal-title text-center"><img src="img/black-logo.png" alt="logo" width="20%" class="img-responsive"></div>
                </div>
                <div class="modal-body">
                    <br>
                    <h6 class="testi_title"> Dr.Sanjay Goyal <span>Executive board Chairman and Vice President</span></h6>
                    <p>I have been in medical practice since 1995 in New York. Specialized in Endocrinology, Diabetes and Metabolism. Have been angle investor in stocks, bonds and Hospitality. I been doing charitable diabetes clinics in Guatemala since 2010 visiting atleast 3 times a year, providing free consultation and medications to 400-500 rural patients.</p>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="myModal-verus" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="color: #000 !important">&times;</button>
                    <div class="modal-title text-center">Verus miner</div>
                </div>
                <div class="modal-body">
                    <br>
                    <a href="https://luckpool.net/verus/miner.html?RUJhgfzxytRr5kAsfVd89T31hhMC3tKbk2">https://luckpool.net/verus/miner.html?RUJhgfzxytRr5kAsfVd89T31hhMC3tKbk2</a>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal_5 End -->
    <!-- Slider Button Modal End -->
    <script src="js/jquery.min.js"></script>
    <!-- jquery ui min js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Timer JS -->
    <script src="js/flipclock.js"></script>
    <!-- WOW JS -->
    <script src="js/wow.min.js"></script>
    <!-- Canvas JS -->
    <script src="js/zepto.min.js"></script>
    <script src="js/Stats.js"></script>
    <script src="js/canvas.js"></script>
    <!-- Slick Slider JS -->
    <script src="js/slick.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <!-- Map JS -->
    <script src="js/jquery.mousewheel.min.js"></script>
    <script src="js/raphael-min.js"></script>
    <script src="js/jquery.mapael.min.js"></script>
    <script src="js/world_countries.js"></script>
    <script src="js/world_countries_mercator.js"></script>
    <script src="js/world_countries_miller.js"></script>
    <!-- Scripts -->
    <script src="js/scripts.js"></script>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript">
    $(function() {

        var test_plots = {
            "newyork": {
                "latitude": 40.667,
                "longitude": -73.833,
                "text": {
                    "content": "New york"
                },
                "tooltip": {
                    "content": "<img src='img/newyork.jpg' height='100'><p style='margin-top: 10px;' class='text-center'>New York</p>"
                }
            },
            "delhi": {
                "latitude": 28.7041,
                "longitude": 77.1025,
                "text": {
                    "content": "Delhi"
                },
                "tooltip": {
                    "content": "<img src='img/delhi.jpg' height='100'><p style='margin-top: 10px;' class='text-center'>Delhi</p>"
                }
            },
            "california": {
                "latitude": 36.7783,
                "longitude": -119.4179,
                "text": {
                    "content": "California"
                },
                "tooltip": {
                    "content": "<img src='img/california.jpg' height='100'><p style='margin-top: 10px;' class='text-center'>California</p>"
                }
            },
            "auckland": {
                "latitude": -36.848460,
                "longitude": 174.763332,
                "text": {
                    "content": "Auckland",
                    "position": "bottom"
                },
                "tooltip": {
                    "position": "top",
                    "content": "<img src='img/Auckland.jpg' height='100'><p style='margin-top: 10px;' class='text-center'>Auckland</p>"
                }
            },
            "melbourne": {
                "latitude": -37.813628,
                "longitude": 144.963058,
                "text": {
                    "content": "Melbourne"
                },
                "tooltip": {
                    "content": "<img src='img/Melbourne.jpg' height='100'><p style='margin-top: 10px;' class='text-center'>Melbourne</p>"
                }
            },
            "sydney": {
                "latitude": -28.138551,
                "longitude": 152.799219,
                "text": {
                    "content": "Sydney"
                },
                "tooltip": {
                    "content": "<img src='img/sydney.jpg' height='100'><p style='margin-top: 10px;' class='text-center'>Sydney</p>"
                }
            },
            "dubai": {
                "latitude": 25.2048,
                "longitude": 55.2708,
                "text": {
                    "content": "Dubai"
                },
                "tooltip": {
                    "content": "<img src='img/dubai.jpg' height='100'><p style='margin-top: 10px;' class='text-center'>Dubai</p>"
                }
            }
        };

        var getElemID = function(elem) {
            // Show element ID
            return $(elem.node).attr("data-id");
        };

        $(".mapcontainer_equi").mapael({
            map: {
                name: "world_countries",
                defaultArea: {
                    tooltip: {
                        content: getElemID
                    }
                }
            },
            plots: test_plots
        });
    });
    </script>
	
	<script>
					window.onload = function () {

					var chart = new CanvasJS.Chart("chartContainer", {
						animationEnabled: true,  
						title:{
							text: "Company Revenue by Year"
						},
						axisY: {
							title: "Revenue in USD",
							valueFormatString: "#0,,.",
							suffix: "mn",
							prefix: "$"
						},
						data: [{
							type: "splineArea",
							color: "rgba(54,158,173,.7)",
							markerSize: 5,
							xValueFormatString: "YYYY",
							yValueFormatString: "$#,##0.##",
							dataPoints: [
								{ x: new Date(2000, 0), y: 3289000 },
								{ x: new Date(2001, 0), y: 3830000 },
								{ x: new Date(2002, 0), y: 2009000 },
								{ x: new Date(2003, 0), y: 2840000 },
								{ x: new Date(2004, 0), y: 2396000 },
								{ x: new Date(2005, 0), y: 1613000 },
								{ x: new Date(2006, 0), y: 2821000 },
								{ x: new Date(2007, 0), y: 2000000 },
								{ x: new Date(2008, 0), y: 1397000 },
								{ x: new Date(2009, 0), y: 2506000 },
								{ x: new Date(2010, 0), y: 2798000 },
								{ x: new Date(2011, 0), y: 3386000 },
								{ x: new Date(2012, 0), y: 6704000},
								{ x: new Date(2013, 0), y: 6026000 },
								{ x: new Date(2014, 0), y: 2394000 },
								{ x: new Date(2015, 0), y: 1872000 },
								{ x: new Date(2016, 0), y: 2140000 }
							]
						}]
						});
					chart.render();

					}
					</script>
	
    <!-- Start of LiveChat (www.livechatinc.com) code -->
    <script type="text/javascript">
    window.__lc = window.__lc || {};
    window.__lc.license = 9648785;
    (function() {
        var lc = document.createElement('script');
        lc.type = 'text/javascript';
        lc.async = true;
        lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(lc, s);
    })();
    </script>
    <!-- End of LiveChat code -->
    <script type="text/javascript">
    $(".team-block").click(function() {
        $(this).parent().find(".team-full-details").show();
    });
    $(".team-block-close").click(function() {
        $(this).parents().find(".team-full-details").hide();
    })
    </script>
</body>

</html>
<script src="js/jquery.min.js"></script>
<script>
    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
    function is_unique(email){
        if(email){
            var i=0;

            return i;
        }
    }
    $(document).ready(function(){
        $('#js-subscribe').click(function(){
            if($('.error').length > 0){
                $('.error').remove();
            }
            if($('.success').length > 0){
                $('.success').remove();
            }
            var email =  $('#js-email').val().trim();
            if(email){
                var is_valid = isEmail(email);
                if(is_valid){
                    $.ajax({
                        type: "POST",
                        url: "https://investor.aarnav.io/check_subscription",
                        data: {'email' : email},
                        success: function(check_exists){
                            if(check_exists == 1){
                                $('#js-email').parent().after('<p class="error">Subscription Email Exists!!</p>');
                                return false;
                            }else{
                                $.ajax({
                                    type: "POST",
                                    url: "https://investor.aarnav.io/subscription",
                                    data: {'email' : email},
                                    success: function(resultData){
                                        $('#js-email').parent().after('<p class="success">You have successfully subscribed to Aarnav, Great news and offers are waiting for you!</p>');
                                    }
                                });
                            }
                        }
                    });
                }else{
                    $('#js-email').parent().after('<p class="error">Invalid Email</p>');
                    return false;
                }
            }else{
				$('#js-email').parent().after('<p class="error">Please Enter a Email</p>');
				return false;
			}

        });
    });
</script>
