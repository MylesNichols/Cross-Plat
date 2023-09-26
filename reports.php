<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <link rel="stylesheet" href="assets/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
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
        .content h2 {
            text-align: left;
            margin-left: 8%;
        }

        /*the container must be positioned relative:*/
        .custom-select {
            position: relative;

            font-family: 'Poppins', sans-serif;
        }

        .custom-select select {
            display: none;
            /*hide original SELECT element:*/
        }

        .select-selected {
            background-color: #f2f2f2;
            border-radius: 8px;
            border: 1px solid #000;
            outline: none;
            height: 22px;
            color: #000;
            font-size: 16px;
            margin: 1px;
            padding-left: 5px;
            padding-right: 5px;
            width: 250px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        /*style the arrow inside the select element:*/
        .select-selected:after {
            position: absolute;
            content: "";
            top: 17px;
            right: 72px;
            width: 0;
            height: 0;
            border: 6px solid transparent;
            border-color: #000 transparent transparent transparent;

        }

        /*point the arrow upwards when the select box is open (active):*/
        .select-selected.select-arrow-active:after {
            border-color: transparent transparent #000 transparent;
            top: 10px;
        }

        /*style the items (options), including the selected item:*/
        .select-items div,
        .select-selected {
            color: #000;
            padding: 8px 10px;
            border: 1px solid transparent;
            border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
            cursor: pointer;
            user-select: none;
        }

        /*style items (options):*/
        .select-items {
            position: absolute;
            background-color: #fff;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 99;
            width: 270px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        /*hide the items when the select box is closed:*/
        .select-hide {
            display: none;
        }

        .select-items div:hover,
        .same-as-selected {
            background-color: rgba(0, 0, 0, 0.1);
        }

        #ahov {
            color: #3CB371;
            text-decoration: none;
        }

        #ahov:hover {
            color: #267349;
        }


        /* end of timeframe dropdown styles */
    </style>
</head>

<body style="
    font-family: 'Poppins', sans-serif;">
    <input type="checkbox" id="check">
    <!-- standard dashboard header  -->

  <!-- header area start -->
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3 style="
    font-family: " poppins",="" sans-serif;"="">Walking  <span>Wallet</span></h3>
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
    <div class="content" style="text-align: center;">

        <!-- header -->
        <h1 style="margin-top: 40px;">View Reports</h1>
        <!-- end of header -->

        <!-- jar dropdown -->
                    <div id="dep_box2" class="no_jars_msg trans" style=" padding-top: 0.001rem;  margin-top: 0;margin-bottom: 0;">
                <p>Add a jar to your Walking Wallet to start viewing reports.<br>Go to the <a id="ahov" href="index.php">Dashboard</a>.</p>
            </div>
                <br><br>
    </div>
    <!-- end of content -->

    <!-- end of chart.js -->
    <!-- highlight current tab in sidebar -->
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

</body></html>