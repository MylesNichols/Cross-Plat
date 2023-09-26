<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit Paystub</title>
    <link rel="stylesheet" href="./assets/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <!-- @import Google Font (site-wide) -->

<link rel="icon" href="https://www.walkingwalletapp.com/assets/favicon.png">
<link rel="apple-touch-icon" sizes="128x128" href="https://www.walkingwalletapp.com/assets/apple_touch_icon.png">
<link rel="apple-touch-startup-image" href="https://www.walkingwalletapp.com/assets/apple_launch_icon.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta content="yes" name="mobile-web-app-capable">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

input[type='submit'] {
  -webkit-appearance: none;
  opacity: 1;
}

</style>
    <style>
        #ahov {
            color: #3CB371;
            text-decoration: none;
        }

        #ahov:hover {
            color: #267349;
        }

        /* categories */
        input[list]:focus {
            outline: none;
        }

        input[list]+div[list] {
            display: none;
            position: absolute;
            max-height: 164px;
            overflow-y: auto;
            width: 220px;
            background: #FFF;
            border: 1px solid #333;
            border-top: none;
            border-radius: 8px;
            box-shadow: 0 3px 3px -3px #333;
            z-index: 100;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            margin-left: 46px;
        }


        input[list]+div[list] span {
            display: block;
            position: relative;
            padding: 7px 5px 7px 20px;
            color: #000;
            text-decoration: none;
            cursor: pointer;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        input[list]+div[list] span:not(:last-child) {
            border-bottom: 1px solid #eee;
        }

        input[list]+div[list] span:hover {
            background: rgba(100, 120, 140, .2);
        }

        /* end of categories */
    </style>
</head>

<body>
    <input type="checkbox" id="check">
    <!-- standard dashboard header  -->

  <!-- header area start -->
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3 style="font-family: poppins",="" sans-serif;="">Walking  <span>Wallet</span></h3>
        </div>
        <div class="right_area">
        <a href="logout.php" class="logout_btn">Logout</a>
        </div>
    </header>
    <!-- header area end -->
    <!-- sidebar start -->
    <!-- display sidebar avatar -->
    <div class="sidebar">
        <center>
        <a id="pfp" href="index.php?hello=true">
            <img src="assets/apple_touch_icon.png" class="profile_image" width="200px" alt="">        
            </a>
            <h4>Mylesnichols21</h4>
    </center>

    <!-- one place for sidebar navigation links -->
<a class="link" href="https://walkingwalletapp.com/welcome-internal" target="_blank"><img src="assets/start-here.png" width="28px" alt="" class="i"> <span style="position:relative; top:-7px;">Start</span></a>  <a class="link" href="index.html"><img src="assets/home.png" width="28px" alt="" class="i"> <span style="position:relative; top:-4px;">Dashboard</span></a> 
<a class="link" href="deposit.php"><img src="assets/arrow.png" width="28px" alt="" class="i"> <span style="position:relative; top:-4px;">Deposit</span></a>

        <a class="link" href="transactions.php"><img src="assets/transaction.png" width="28px" alt="" class="i"> <span style="position:relative; top:-4px;">Transactions</span></a>
        <a class="link" href="reports.php"><img src="assets/analytics.png" width="28px" alt="" class="i"> <span style="position:relative; top:-4px;">Reports</span></a> 
        <a class="link" href="settings.php"><img src="assets/settings.png" width="28px" alt="" class="i"> <span style="position:relative; top:-4px;">Wallet Manager</span></a>     </div>
    <!-- sidebar end -->
    <div class="content">
        <!-- falling class -->
        <div>
            <!-- falling -->
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <!-- end of falling -->
            <!-- header -->
            <h1 style="margin-top: 40px;">Deposit Income</h1>

            <!-- success msg -->
            <div id="dep_success_msg" style="width: 85%; margin-left: auto; margin-right: auto;">
                            </div>

            <!-- space for error msgs -->
            <div id="dep_err_msg" style="width: 85%; margin-left: auto; margin-right: auto;">
            </div>

            <!-- msg for new users -->
                            <div id="dep_box2" class="no_jars_msg" style="   padding-top: 0.001rem; margin-top: 0;margin-bottom: 0;">
                    <p>Add a jar to your Walking Wallet to unlock deposits.<br>Go to the <a id="ahov" href="index.php">Dashboard</a>.</p>
                </div>
                    </div>
    </div>
    <!--  -->
    <script src=" ../assets/func.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script>
        $(document).on('dblclick', 'input[list]', function(event) {
            event.preventDefault();
            var str = $(this).val();
            $('div[list=' + $(this).attr('list') + '] span').each(function(k, obj) {
                if ($(this).html().toLowerCase().indexOf(str.toLowerCase()) < 0) {
                    $(this).hide();
                }
            })
            $('div[list=' + $(this).attr('list') + ']').toggle(100);
            $(this).focus();
        })

        $(document).on('blur', 'input[list]', function(event) {
            event.preventDefault();
            var list = $(this).attr('list');
            setTimeout(function() {
                $('div[list=' + list + ']').hide(100);
            }, 100);
        })

        $(document).on('click', 'div[list] span', function(event) {
            event.preventDefault();
            var list = $(this).parent().attr('list');
            var item = $(this).html();
            $('input[list=' + list + ']').val(item);
            $('div[list=' + list + ']').hide(100);
        })

        $(document).on('keyup', 'input[list]', function(event) {
            event.preventDefault();
            var list = $(this).attr('list');
            var divList = $('div[list=' + $(this).attr('list') + ']');
            if (event.which == 27) { // esc
                $(divList).hide(200);
                $(this).focus();
            } else if (event.which == 13) { // enter
                if ($('div[list=' + list + '] span:visible').length == 1) {
                    var str = $('div[list=' + list + '] span:visible').html();
                    $('input[list=' + list + ']').val(str);
                    $('div[list=' + list + ']').hide(100);
                }
            } else if (event.which == 9) { // tab
                $('div[list]').hide();
            } else {
                $('div[list=' + list + ']').show(100);
                var str = $(this).val();
                $('div[list=' + $(this).attr('list') + '] span').each(function() {
                    if ($(this).html().toLowerCase().indexOf(str.toLowerCase()) < 0) {
                        $(this).hide(200);
                    } else {
                        $(this).show(200);
                    }
                })
            }
        })
    </script>





<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script>
    $(function() {
        $('a').each(function() {
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('current');
            }
        });
    });
</script>
</body><!-- include form validation js --><!-- highlight current tab in sidebar --></html>