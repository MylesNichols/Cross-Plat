<html><head>
    <title>Renew Access</title>
    <link rel="stylesheet" href="assets/renew.css">
    <!-- @import Google Font (site-wide) -->

<link rel="icon" href="https://www.walkingwalletapp.com/assets/favicon.png">
<link rel="apple-touch-icon" sizes="128x128" href="assets/apple_touch_icon.png">
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
        .new-name-container input[type="submit"] {
            margin-top: 6px;
            border: none;
            outline: none;
            height: 40px;
            background: #3CB371;
            color: #000;
            font-size: 18px;
            border-radius: 10px;
            margin-bottom: 2px;
            width: 160px;
            font-family: 'Poppins', sans-serif;
            -webkit-appearance: none;
            opacity: 1;
            margin-left: auto;
            margin-right: auto;
            transition: 0.1s;
        }

        .new-name-container input[type="submit"]:hover {
            cursor: pointer;
            background: #267349;
            color: #fff;
        }

        #not-now-submit {
            background: #eee;
            color: #000;
            transition: 0.1s;
        }

        #not-now-submit:hover {
            background: #333;
            color: #fff;
        }
    </style>
</head>

<body>
    <!-- add signup form with payment boxes + code -->
    <!-- step 1 of create account -->
    <!-- animated bg -->
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>

    <!-- checkout.php -->
    <div class="loginbox" style="margin-top: 86px; height:534px;">
        <a href="https://walkingwalletapp.com"><img src="assets/apple_touch_icon.png" class="avatar" style="top: calc(-50% + 196px);"></a>

        <h1 style=" margin-top: 12px; margin-bottom: -12px;">Upgrade to PRO</h1>

        <!-- header -->
        <h3 style="padding-top: 10px; text-align: center; margin-left: auto; margin-right: auto; font-size: 18px;">Have An Affiliate Code?</h3>
        <!-- end of header -->

        <!-- display option to provide CODE or skip -->
        <!-- affiliate code container -->
        <div class="code-container" style="text-align:center;">
            <form method="post" name="code-submit">
                <div class="new-name-container" style="text-align: center; margin-left: auto; margin-right: auto;">
                    <input style="width: 160px;" onkeyup="this.value = this.value.toUpperCase();" maxlength="12" id="text" class="new-code" type="text" name="code-input" fdprocessedid="h6ekhs">
                    <input style=" font-family: 'Poppins' , sans-serif;  width: 100px;" id="code-submit" name="code-submit" type="submit" value="Apply" fdprocessedid="l7l0vz"><br>
                </div>
                <!-- error messages -->
                                    <div>
                        <p style="text-align: center; margin-left: auto; margin-right: auto;" class="error">&nbsp;</p>
                    </div>
                                <!-- end of error messages -->
                                    <input style="text-align: center; margin-left: auto; margin-right: auto; font-family: 'Poppins' , sans-serif; width: 270px;" id="not-now-submit" href="settings.html" name="not-now-submit" type="submit" value="Not Now" fdprocessedid="lzh6fl"><br>
                            </form>

        </div>

        <!-- if step one was completed.. display payment options -->
        
    </div>
    <br><br><br><br>
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">×</span>
            <p style="text-align: center;">Walking Wallet PRO is $17.00 / year (auto-renewal). Credit card required. Cancel any time to stop future charges.</p>
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


</body></html>