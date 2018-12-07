// $('#countdown-2').timeTo({
//     timeTo: new Date(new Date('Mon April 15 2018 17:00:00 ')),
//     displayDays: 2,
//     theme: "black",
//     displayCaptions: true,
//     fontSize: 50,
//     fontFamily: "Roboto, sans-serif",
//     captionSize: 14
// });

var discount = 10;
var coinpercent = 129;
var realestate = 20;
var breakdown = 20000;  

$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $(".nav-scroll").addClass("scroll");
    } else {
        $(".nav-scroll").removeClass("scroll");
    }
});

// 
// $(".map-sec").mapael({
//     map : {
//         name : "world_countries"
//     }
// });

$(document).ready(function() {
    //smoothscroll
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        $(document).off("scroll");

        $('a').each(function() {
            $(this).removeClass('active');
        })
        $(this).addClass('active');

        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top + 2
        }, 500, 'swing', function() {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

$('.road-map').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1800
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

// $('.team-slider').slick({
//     dots: false,
//     infinite: false,
//     speed: 300,
//     slidesToShow: 4,
//     slidesToScroll: 4,
//     responsive: [{
//             breakpoint: 1024,
//             settings: {
//                 slidesToShow: 3,
//                 slidesToScroll: 3,
//                 infinite: true,
//                 dots: true
//             }
//         },
//         {
//             breakpoint: 600,
//             settings: {
//                 slidesToShow: 2,
//                 slidesToScroll: 2
//             }
//         },
//         {
//             breakpoint: 480,
//             settings: {
//                 slidesToShow: 1,
//                 slidesToScroll: 1,
//                 autoplay: true,
//                 autoplaySpeed: 1800
//             }
//         }
//         // You can unslick at a given breakpoint now by adding:
//         // settings: "unslick"
//         // instead of a settings object
//     ]
// });

$('.news-slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1800
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

$('.country-slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 7,
    slidesToScroll: 7,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1800
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

// Clock
$('.flipclock').FlipClock(getSecondsTillDate('07-14'), {
    clockFace: 'DailyCounter',
    countdown: true
});

function getSecondsTillDate(date) {
    var t1 = new Date();
    var t2 = new Date(t1.getFullYear() + '-' + date);
    var dif = t1.getTime() - t2.getTime();
    var Seconds_from_T1_to_T2 = dif / 1000;
    var Seconds_Between_Dates = Math.abs(Seconds_from_T1_to_T2);
    return Seconds_Between_Dates;
}

function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('mdi-plus mdi-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);

// Scroll To Div Add Class
function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

$(window).scroll(function() {
    $('.sec-tit-in').each(function() {
        if (isScrolledIntoView(this) === true) {
            $(this).addClass('in-view')
        }
    });

});

// Wow Animation
new WOW().init();

// show more content
$(document).ready(function() {
    $('.nav-toggle').click(function() {
        var collapse_content_selector = $(this).attr('href');
        var toggle_switch = $(this);
        $(collapse_content_selector).toggle(function() {
            if ($(this).css('display') == 'none') {
                toggle_switch.html('Read More');
            } else {
                toggle_switch.html('Read Less');
            }
        });
    });

});
// calculator
// JavaScript Document

var p3 = {
    0: "20K",
    1: "25K",
    2: "30K",
    3: "35K",
    4: "40K",
    5: "45K",
    6: "50K",
    7: "55K",
    8: "60K",
    9: "65K",
    10: "70K",
    11: "75K",
    12: "80K",
    13: "85K",
    14: "90K",
    15: "92K",
    16: "95K",
    17: "98K",
    18: "100K",
    19: "150K", 
    20: "200K", 
    21: "250K", 
    22: "300K", 
    23: "350K", 
    24: "400K", 
    25: "450K", 
    26: "500K",  
    27: "550K",
    28: "600K", 
    29: "650K", 
    30: "700K", 
    31: "750K", 
    32: "800K", 
    33: "850K", 
    34: "900K", 
    35: "950K",  
    36: "960K",
    37: "970K",
    38: "980K",
    39: "1M"  
};

var t3 = {
    0: "20000",
    1: "25000",
    2: "30000",
    3: "35000",
    4: "40000",
    5: "45000",
    6: "50000",
    7: "55000",
    8: "60000",
    9: "65000",
    10: "70000",
    11: "75000",
    12: "80000",
    13: "85000",
    14: "90000",
    15: "92000",
    16: "95000",
    17: "98000",
    18: "100000",
    19: "150000",
    20: "200000",
    21: "250000",
    22: "300000",
    23: "350000",
    24: "400000",
    25: "450000",
    26: "500000", 
    27: "550000", 
    28: "600000", 
    29: "650000", 
    30: "700000", 
    31: "750000", 
    32: "800000", 
    33: "850000", 
    34: "900000", 
    35: "950000", 
    36: "960000", 
    37: "970000", 
    38: "980000", 
    39: "1000000"
}

var obj3 = {
    '12': {
        'semimonthly': '1.66',
        'monthly': '1.28',
        'weekly': '1.2'
    },
};

$(document).ready(function() {

    $("#b_total").val("50000");
    $("#slider_amirol3").slider({
        range: "min",
        animate: true,
        value: 18,
        min: 0,
        max: 39,    
        step: 1,
        slide: function(event, ui) {
            update3(1, ui.value); //changed
            calcualtePrice3(ui.value);
        }
    });

    $('.month3').on('click', function(event) {
        var id = $(this).attr('id');

        $('.month3').removeClass('selected-month');
        $(this).addClass('selected-month');
        $(".month3").removeClass("active-month");
        $(this).addClass("active-month");

        $('#month3').val(id);

        calcualtePrice3()
    });

    $('.term3').on('click', function(event) {
        var id = $(this).attr('id');

        $('.term3').removeClass('selected-term');
        $(this).addClass('selected-term');
        $(".term3").removeClass("active-term");
        $(this).addClass("active-term");
        $('#term3').val(id);

        calcualtePrice3()
    });

    update3();
    calcualtePrice3();
});

function update3(slider, val) {

    if (undefined === val) val = 0;
    var amount = p3[val];
    $('#sliderVal3').val(val);

    $('#slider_amirol3 a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> ' + amount + ' <span class="glyphicon glyphicon-chevron-right"></span></label>');
}

setTimeout(function  (){$('#slider_amirol3 a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> 100K <span class="glyphicon glyphicon-chevron-right"></span></label>'); 
    
   calcualtePrice3("18");},2000)

function calcualtePrice3(val) {

    if (undefined === val)
        val = $('#sliderVal3').val();

    var month = $('#month3').val();
    var term = obj3[month][$('#term3').val()];

    var term = 1;
    
    var totalPrice = t3[val] * term;
    var totalPrice1 = 0;
    var totalPrice2 = 0;

    var disprice = 0;
    var disprice1 = 0;
    var disprice2 = 0;
 
    var invest = totalPrice.toFixed(2);

    totalPrice = (totalPrice * coinpercent) / 100;
    totalPrice1 = (totalPrice * coinpercent) / 100;
    totalPrice2 = (totalPrice1 * coinpercent) / 100;


    disprice += (totalPrice * discount) / 100;
    disprice1 += (totalPrice1 * discount) / 100;
    disprice2 += (totalPrice2 * discount) / 100;

    var first_height = Math.round(totalPrice).toFixed(2);    
    var second_height = Math.round(totalPrice1).toFixed(2);
    var third_height = Math.round(totalPrice2).toFixed(2);

    // var retur = Math.round(parseFloat(third_height)+parseFloat(Math.round(disprice2).toFixed(2))).toFixed(2) - invest;
    var retur = Math.round(
        parseFloat(first_height)+parseFloat(disprice)
            +
        parseFloat(second_height)+parseFloat(disprice1)
            +
        parseFloat(third_height)+parseFloat(disprice2)
            );
 
    $("#first-year").val(Math.round(parseFloat(first_height)+parseFloat(Math.round(disprice).toFixed(2))).toFixed(2));
    $("#second-year").val(Math.round(parseFloat(second_height)+parseFloat(Math.round(disprice1).toFixed(2))).toFixed(2));
    $("#third-year").val(Math.round(parseFloat(third_height)+parseFloat(Math.round(disprice2).toFixed(2))).toFixed(2));


    // $("#profit").html(profit.toFixed(2));

    $("#profit").html(retur.toFixed(2));

    $(".chart-section1").css('height', (disprice / breakdown) + (first_height / breakdown) + 100 + 'px');
    $(".chart-section2").css('height', (disprice / breakdown) + (first_height / breakdown) + 160 + 'px');
    $(".chart-section3").css('height', (disprice / breakdown) + (first_height / breakdown) + 190 + 'px');

    $("#common_chart1 .top-chart").css('height', (disprice / breakdown) + (first_height / breakdown) + 80 + 'px');
    $("#common_chart1 .bottom-chart").css('height', (first_height / breakdown) + 40 + 'px');

    $("#common_chart2 .top-chart1").css('height', (disprice1 / breakdown) + (second_height / breakdown) + 100 + 'px');
    $("#common_chart2 .bottom-chart1").css('height', (second_height / breakdown) + 50 + 'px');

    $("#common_chart3 .top-chart2").css('height', (disprice2 / breakdown) + (third_height / breakdown) + 75 + 'px');
    $("#common_chart3 .bottom-chart2").css('height', (third_height / breakdown) + 38 + 'px');
}

// Token chart
// Highcharts.setOptions({
//     colors: ['#F8F9F9', '#545659', '#ABB2B9', '#D5D8DC']
// });
// Highcharts.chart('token-chart', {
//     chart: {
//         type: 'pie',
//         options3d: {
//             enabled: true,
//             alpha: 45,
//             beta: 0
//         }
//     },
//     title: {
//         text: ''
//     },
//     tooltip: {
//         pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
//     },
//     plotOptions: {
//         pie: {
//             allowPointSelect: true,
//             cursor: 'pointer',
//             depth: 35,
//             dataLabels: {
//                 enabled: true,
//                 format: '{point.name}'
//             }
//         }
//     },
//     series: [{
//         type: 'pie',
//         name: 'Token',
//         data: [
//             ['Crowd Sale 80%', 80.0],
//             ['Founders allocation 10%', 10.0],
//             ['R & D 7%', 7],
//             ['ICO Bountry Program 3%', 3]
//         ]
//     }]
// });


$(document).ready(function() {


            var time = 15;
            var scale = 1;

            var video_obj = null;

            document.getElementById('video').addEventListener('loadedmetadata', function() {
                 this.currentTime = time;
                 video_obj = this;

            }, false);

            document.getElementById('video').addEventListener('loadeddata', function() {
                 var video = document.getElementById('video');

                 var canvas = document.createElement("canvas");
                 canvas.width = video.videoWidth * scale;
                 canvas.height = video.videoHeight * scale;
                 canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);

                 var img = document.createElement("img");
                img.src = canvas.toDataURL();
                $('#thumbnail').append(img);

                video_obj.currentTime = 0;

            }, false);

        });