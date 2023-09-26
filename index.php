<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walking Wallet</title>
    <link rel="stylesheet" href="assets/dashboard.css">
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
            <h3 style="
    font-family: poppins",="" sans-serif;"="">Walking  <span>Wallet</span></h3>
        </div>
        <div class="right_area">
        <a href="login.html" class="logout_btn">Logout</a>
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
    <div id="content" class="content">
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
            <br><br>
            <!-- space for error messages -->
            <div id=" error_msg">
                                            </div>

            <br>

            <!-- display call-to-action message for new user -->
                            <div class="container">
                    <h2 class="starting_msg">Add a jar using the '+' button below.</h2>
                </div>
            
                    <!-- display plus if user can add more jars -->
        <div class="plus" id="myBtn">
            <span>+</span>
        </div>
    
    <!-- create new jar modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">×</span>

            <div id="box">
                <form id="userInput" name="initNewJar" onreset="resetCreateJarHandler();" onsubmit="return validateCreateJarForm()" method="post">
                    <!-- header  -->
                    <div style=" margin-left: 28px; color: #000; ">
                        <h1>Add a Jar</h1>
                    </div>

                    <!-- jar name input -->
                    <div id="new_jar_msg" style="padding: 10px;"></div>
                    <label for="jar_name">Jar Name</label><br>
                    <input onkeyup="this.value = this.value.toUpperCase();" style="  font-family: 'Poppins', sans-serif;" id="jar_name" class="new_jar_text" type="text" name="jar_name" autofocus=""><br><br>

                    <label for="jar_pct">Jar Percent (% / 100)</label><br>

                    <!-- side by side div -->
                    <div class="container" style="width:54%; margin-left: auto; margin-right: auto; display:flex; height: 80px;">
                        <div style="flex-grow: 1;  ">
                            <!-- jar pct input  -->
                            <input maxlength="7" style="width: 90%; font-family: 'Poppins', sans-serif;" id="jar_pct" class="new_jar_text" inputmode="decimal" name="jar_pct">
                        </div>
                        <div style="width: 20%;  margin-top: -22px;">
                            <!-- pct html code -->
                            <p style="font-size: 24px; color: #000; padding: 0;">%</p>
                        </div>
                    </div>
                    <!-- submit button -->
                    <input style="  width: 54% ;
    font-family: 'Poppins', sans-serif;" id="button" type="submit" value="Confirm"> <br>
                    <!-- reset button -->
                    <input style="width: 54%;
    font-family: 'Poppins', sans-serif;" id="button" type="reset" value="Reset"><br><br>
                </form>
            </div>
        </div>

    </div>
    </div>


    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
            document.getElementById("userInput").reset();
            var x = document.getElementById("jar_name").focus();
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <!-- include form validation js -->
    <script src="../assets/func.js"></script>




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
</div></body><!-- include sidebar active page highlight --><!-- highlight current tab in sidebar --></html>