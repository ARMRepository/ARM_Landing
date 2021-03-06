<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aarnav - PROFITABLITY</title>
    <meta name="description" content=" Aarnav is a community of investors leveraging economies of scale to achieve profitable returns from cryptocurrency mining. By pooling resources, Aarnav investors save on cutting-edge equipment and professional maintenance and gain access to ultra-low-cost electricity.">
    <meta name="keywords" content=" Aarnav, Mining, Cryptocurrency, Startup, Investors">
    <meta name="author" content="Aarnav">
    <meta name="subject" content=" cryptocurrency mining ">
    <meta name="copyright" content="Aarnav">
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
    <link href="css/animate.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>
<?php
    // 'https://whattomine.com/coins/187-d-tribus&commit=Calculate?utf8=%E2%9C%93&hr=2800.0&p=607.0&fee=0.0&cost=0.1&hcost=0.0.json',
    // 'https://whattomine.com/coins/199.json',
    // 'https://whattomine.com/coins/241.json',
    // 'https://whattomine.com/coins/212.json',
    // 'https://whattomine.com/coins/197.json',
    // 'https://whattomine.com/coins/267.json',
    // 'https://whattomine.com/coins/5.json',
    // 'https://whattomine.com/coins/114.json',
    // 'https://whattomine.com/coins/67.json',
    // 'https://whattomine.com/coins/250.json',
    // 'https://whattomine.com/coins/217.json',
    // 'https://whattomine.com/coins/148.json',
    // 'https://whattomine.com/coins/73.json',
    function init_curl($url){
        if($url !=''){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            $result = json_decode($response,true);
            return $result;
        }
    }
    $coin_calculators_urls = array(
        'https://www.coincalculators.io/api.aspx?name=argoneum&hashrate=51700000&power=395&poolfee=0&powercost=0.1&difficultytime=54',
        'https://www.coincalculators.io/api.aspx?name=scriv&hashrate=2800000000&power=607&poolfee=0&powercost=0.1&difficultytime=2',
        'https://www.coincalculators.io/api.aspx?name=0xbitcoin&hashrate=21600000000&power=605&poolfee=0&powercost=0.1&difficultytime=1',
        'https://www.coincalculators.io/api.aspx?name=fonero&hashrate=314000000&power=558&poolfee=0&powercost=0.1&difficultytime=17',
        'https://www.coincalculators.io/api.aspx?name=bzlcoin&hashrate=2800000000&power=607&poolfee=0&powercost=0.1&difficultytime=188',
        'https://www.coincalculators.io/api.aspx?name=infinex&hashrate=53000000&power=590&poolfee=0&powercost=0.1&difficultytime=420',
        'https://www.coincalculators.io/api.aspx?name=absolute&hashrate=216000000&power=334&poolfee=0&powercost=0.1&difficultytime=3',
        'https://www.coincalculators.io/api.aspx?name=virtus&hashrate=2800000000&power=607&poolfee=0&powercost=0.1&difficultytime=0',
        'https://www.coincalculators.io/api.aspx?name=microbitcoin&hashrate=1540000000&power=600&poolfee=0&powercost=0.1&difficultytime=101',
        'https://www.coincalculators.io/api.aspx?name=bitcoinzero&hashrate=53000000&power=590&poolfee=0&powercost=0.1&difficultytime=160',
        'https://www.coincalculators.io/api.aspx?name=zcore&hashrate=53000000&power=590&poolfee=0&powercost=0.1&difficultytime=1',
    );
    $stats = array();
    $i= 0;
    foreach($coin_calculators_urls as $coin_calculators_url){
        $curl = init_curl($coin_calculators_url);
        //echo '<pre>';print_r($curl);echo '</pre>';exit;
        if(!empty($curl)){
            $stats[$i]['name'] = $curl['name'];
            $stats[$i]['image'] = 'https://www.coincalculators.io/'.$curl['image'];
            $stats[$i]['algorithm'] = $curl['algorithm'];
            $stats[$i]['power'] = $curl['powerWatt'];
            $stats[$i]['hash_rate'] = $curl['yourHashrate'];
            $stats[$i]['daily_revenue'] = number_format($curl['revenueInDayUSD'],2);
            $stats[$i]['daily_profit'] = number_format($curl['profitInDayUSD'],2);
        }
        $i++;
    }

    //echo '<pre>';print_r($stats);echo '</pre>';exit;


?>
<body>
    <!-- Main Wrapper Starts -->
    <div class="main-wrapper">
        <!-- <div class="telegram-sec">
            <a href="https://t.me/aarnav_token" target="_blank" class="telegram"><i class="mdi mdi-telegram"></i></a>
        </div> -->
        <!-- Header Starts -->
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
                    <a class="navbar-brand" href="." />
                    <img src="img/black-logo.png">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="menu-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="." />Home</a>
                        </li>
                        <!-- <li>
                            <a href="roadmap.html">Road Map</a>
                        </li> -->
                        <li>
                            <a href="https://investor.aarnav.io/">Token Sale</a>
                        </li>
                        <li>
                            <a href="team.html">Team</a>
                        </li>
                        <li>
                            <a href="index.php#news">News</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript: void(0)">Aarnav Statement
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="statement.html" target="_blank">Aarnav Statement</a>
                                </li>
                                <!-- <li>
                                    <a href="profitability.html" target="_blank">Aarnav ARM A1 Miner Profitability</a>
                                </li> -->
                            </ul>
                        </li>
                        <li>
                            <a href="gallery.html">Gallery</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript: void(0)">Whitepaper
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <!-- <li>
                                    <a target="_blank" href="pdf/onepager.pdf">Onepager</a>
                                </li> -->
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
        <!-- Header Ends -->
        <!-- Content Wrapper Starts -->
        <div class="content-wrapper faq">
            <div class="static-head text-center">
                <h2>Aarnav ARM A1 Miner PROFITABLITY</h2>
                <p>Currently <?php echo date('F d Y h:i a');?></p>
            </div>
            <div class="static-content">
                <div class="container">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="4">Coin</th>
                                    <th scope="col">Daily Revenue</th>
                                    <th scope="col">Daily Profit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($stats)){?>
                                    <?php foreach($stats as $vals){?>
                                        <tr>
                                            <td><img width="15px" src="<?php echo $vals['image'];?>" alt="<?php echo $vals['name'];?>"><?php echo $vals['name'];?></td>
                                            <td><?php echo $vals['algorithm'];?></td>
                                            <td><?php echo round($vals['power']);?> W</td>
                                            <td><?php echo $vals['hash_rate'] /  1000000;?> Mhz</td>
                                            <td>$<?php echo $vals['daily_revenue'];?></td>
                                            <td>$<?php echo $vals['daily_profit'];?></td>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
                                    <input type="email" class="form-control" placeholder="Subscribe Now">
                                    <span class="input-group-btn">
                                    <button class="btn btn-theme" type="submit">Get News</button>
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
                    "latitude": -25.312939,
                    "longitude": 114.478906,
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

        $("p.static-txt").hide();

        $("h5.static-tit").click(function() {
            $(this).toggleClass('active');
            $(this).parent().find(".static-txt").toggle('slow');

        });
    </script>
    <!-- End of LiveChat code -->


</body>

</html>
