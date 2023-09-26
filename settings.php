<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallet Manager</title>
    <link rel="stylesheet" href="assets/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="../assets/func.js"></script>
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
        .confirmBtn:hover {
            cursor: pointer;
            background: #267349;
            color: #fff;
        }

        .resetBtn:hover {
            cursor: pointer;
            background: #c2160a;
            color: #fff;
        }

        #ahov {
            color: #3CB371;
            text-decoration: none;
        }

        #ahov:hover {
            color: #267349;
        }

        /* wallet manager link styles */
        #ans_link {
            color: #3CB371;
            text-decoration: none;
        }

        #ans_link:hover {
            color: #267349;
            text-decoration: none;
        }

        .confirmBtn {
            background: #3CB371;
            color: #000;
            cursor: pointer;
        }

        .resetBtn {
            background: #f44336;
            color: #000;
            cursor: pointer;
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
    font-family: " poppins",="" sans-serif;"="">Walking  <span>Wallet</span></h3>
        </div>
        <div class="right_area">
        <a href="logout.php" class="logout_btn">Logout</a>
        </div>
    </header>
    <!-- header area end -->
    <!-- sidebar start -->
    <!-- display sidebar avatar -->
    <<div class="sidebar">
        <center>
        <a id="pfp" href="index.php?hello=true">
            <img src="assets/apple_touch_icon.png" class="profile_image" width="200px" alt="">        
            </a>
            <h4>Mylesnichols21</h4>
    </center>

    <!-- one place for sidebar navigation links -->
<a class="link" href="https://walkingwalletapp.com/welcome-internal" target="_blank"><img src="assets/start-here.png" width="28px" alt="" class="i"> <span style="position:relative; top:-7px;">Start</span></a>  <a class="link" href="index.php"><img src="assets/home.png" width="28px" alt="" class="i"> <span style="position:relative; top:-4px;">Dashboard</span></a> 
<a class="link" href="deposit.php"><img src="assets/arrow.png" width="28px" alt="" class="i"> <span style="position:relative; top:-4px;">Deposit</span></a>

        <a class="link" href="transactions.php"><img src="assets/transaction.png" width="28px" alt="" class="i"> <span style="position:relative; top:-4px;">Transactions</span></a>
        <a class="link" href="reports.php"><img src="assets/analytics.png" width="28px" alt="" class="i"> <span style="position:relative; top:-4px;">Reports</span></a> 
        <a class="link" href="settings.php"><img src="assets/settings.png" width="28px" alt="" class="i"> <span style="position:relative; top:-4px;">Wallet Manager</span></a>     </div>
    <!-- sidebar end -->
    <div class="content">
        <!-- header -->
        <h1 style="margin-top: 40px;">Wallet Manager</h1>

        <!-- space for error checking -->
        <div id="reset_acc_msg">
                    </div>

        <!-- space for confirmation messages -->
        <div class="confirm">
            <div class="confirm_window">
            </div>
        </div>

        <!-- subtitle header -->
        <h2>Jars</h2>


                    <!-- msg for new users -->
            <div id="dep_box2" class="no_jars_msg settings" style="padding-top: 0.001rem; margin-top: 0;margin-bottom: 0;">
                <p>Add a jar to your Walking Wallet to unlock your Jar Manager.<br>Go to the <a id="ahov" href="index.php">Dashboard</a>.</p>
            </div>
        
        <!-- The Reset Account Modal -->
        <div id="myResetModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content" style="margin-left: auto; margin-right: auto;">
                <span class="close">×</span>

                <div id="resetAccountBox">
                    <!-- reset account form -->
                    <form id="resetAccountForm" name="resetAccountConfirmation" onsubmit="return validateResetAccount()" method="post">
                        <!-- disclaimer  -->
                        <div style="font-size: 20px;margin: 10px; color: #f44336;">Are you sure?<br>Your transactions and wishlist items will be lost forever.<br>Continue by confirming your password.</div>
                        <div id="reset_account_msg" style="padding: 10px;"></div>
                        <label for="pwd1">Password</label><br>
                        <!-- prompt for current pwd -->
                        <input style="margin-bottom: 3px;" id="pwd1" class="reset_account_text" type="password" name="pwd1" autofocus=""><br>
                        <label style="margin-top: 3px;" for="pwd2">Confirm Password</label><br>
                        <!-- prompt for confirmation of current pwd -->
                        <input id="text" class="reset_account_text" type="password" name="pwd2"><br><br>
                        <input style=" height: 38px;
    font-family: 'Poppins', sans-serif;" id="submit-reset-account" name="submit-reset-account" type="submit" value="Confirm"> <br><br>
                    </form>
                </div>
            </div>
        </div>
        <!-- end of reset account modal -->

        <!-- The Change Pwd Modal -->
        <div id="myChangePwdModal" class="modal myChangePwdModal">
            <!-- Modal content -->
            <div class="modal-content" id="change-pwd-modal-content">
                <span class="close">×</span>

                <div id="changePwdBox">
                    <!-- reset account form -->
                    <form id="changePwdForm" name="changePwdConfirmation" onsubmit="return validateChangePwd()" method="post">
                        <div style="font-size: 20px;margin: 10px; color: #000;"><strong>Change Your Password</strong></div>
                        <div id="change_pwd_msg" style="padding: 10px;">
                        </div>
                        <label style="margin-bottom: 20x; font-weight: bold;" for="old_pwd">Old Password</label><br>

                        <!-- old pwd input -->
                        <input id="first" class="reset_account_text" type="password" name="old_pwd" autofocus=""><br>
                        <div style="padding: 1px;">
                            <p style="font-size: 2px;">&nbsp;</p>
                        </div>
                        <label style="font-weight: bold;" for="new_pwd1">New Password</label><br>

                        <!-- new pwd 1 input -->
                        <input id="text" class="reset_account_text" type="password" name="new_pwd1"><br>
                        <div style="padding: 1px;">
                            <p style="font-size: 2px;">&nbsp;</p>
                        </div>
                        <label style="font-weight: bold;" for="new_pwd2">Confirm New Password</label><br>

                        <!-- new pwd 2 input -->
                        <input id="text" class="reset_account_text" type="password" name="new_pwd2"><br><br>

                        <!-- submit (confirmation) btn -->
                        <input style = "margin-top: 6px;
                        border: none;
                        outline: none;
                        height: 36px;
                         
                        font-size: 18px;
                        border-radius: 10px;
                        margin-bottom: 2px;
                        width: 216px;  -webkit-appearance: none;
                        opacity: 1;
                            font-family: 'Poppins', sans-serif;" id="submit-change-pwd" type="submit" name="submit-change-pwd" class="confirmBtn" value="Confirm"><br>

                        <!-- reset btn -->
                        <input style="  margin-top: 6px;
                        border: none;
                        outline: none;
                        height: 36px;
                        font-size: 18px;
                        border-radius: 10px;
                        margin-bottom: 2px;
                        width: 216px;  -webkit-appearance: none;
                        opacity: 1;
                            font-family: 'Poppins', sans-serif;" id="reset_btn" type="reset" class="resetBtn" value="Reset"><br><br>

                    </form>
                </div>
            </div>
        </div>
        <!-- end of change pwd modal -->

        <!-- The Change Email Modal -->
        <div id="myChangeEmailModal" class="modal myChangeEmailModal">
            <!-- Modal content -->
            <div class="modal-content" id="change-email-modal-content">
                <span class="close">×</span>

                <div id="changeEmailBox">
                    <!-- reset account form -->
                    <form id="changeEmailForm" name="changeEmailConfirmation" onsubmit="return validateChangeEmail()" method="post">
                        <div style="font-size: 20px;margin: 10px; color: #000;"><strong>Change Your Email</strong></div>
                        <!-- reset_account_msg -->
                        <div id="change_email_msg" style="padding: 10px;"></div>
                        <label style="font-weight: bold;" for="new_email1">New Email</label><br>
                        <!-- new email input -->
                        <input style="          border: 1px solid #000;
                        background: transparent;
                        outline: none;
                        height: 36px;
                        color: #000;
                        font-size: 16px;
                        margin: 1px;
                        padding-left: 5px;
                        padding-right: 5px;
                        border-radius: 8px;" id="first1" class="reset_account_text" type="text" name="new_email1"><br>
                        <div style="padding: 1px;">
                            <p style="font-size: 2px;">&nbsp;</p>
                        </div>
                        <label style="font-weight: bold;" for="new_email2">Confirm New Email</label><br>
                        <!-- new email confirmation input -->
                        <input style="          border: 1px solid #000;
                        background: transparent;
                        outline: none;
                        height: 36px;
                        color: #000;
                        font-size: 16px;
                        margin: 1px;
                        padding-left: 5px;
                        padding-right: 5px;
                        border-radius: 8px;" id="text" class="reset_account_text" type="text" name="new_email2"><br><br>
                        <!-- submit (confirmation) btn -->
                        <input style="  margin-top: 6px;
                        border: none;
                        outline: none;
                        height: 36px;
                        
                        font-size: 18px;
                        border-radius: 10px;
                        margin-bottom: 2px;
                        
                            -webkit-appearance: none;
                        opacity: 1;
                            font-family: 'Poppins', sans-serif;" class="confirmBtn" id="submit-change-email" name="submit-change-email" type="submit" value="Confirm"><br>
                        <!-- reset btn -->
                        <input style="  margin-top: 6px;
                        border: none;
                        outline: none;
                        height: 36px; 
                        font-size: 18px;
                        border-radius: 10px;
                        margin-bottom: 2px;
                        
                            -webkit-appearance: none;
                        opacity: 1;
                            font-family: 'Poppins', sans-serif;" id="reset_btn" type="reset" class="resetBtn" value="Reset"><br><br>
                    </form>
                </div>
            </div>
        </div>

        <!-- end of change email modal -->


        <!-- all error messages -->

        <!-- error messages on reset account form invalidation -->
        <script>
            // clear errors on reset button press 
            function clearErrors() {
                let element = document.getElementById('reset_account_msg');
                element.innerHTML = "";
            }

            function validateResetAccount() {
                let element = document.getElementById('reset_account_msg');
                let content;
                let pwd1 = document.forms["resetAccountForm"]["pwd1"].value;
                let pwd2 = document.forms["resetAccountForm"]["pwd2"].value;

                // if pwd1 field blank
                if (pwd1 == "") {
                    content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Password must be filled out.</div>';
                    element.innerHTML = "";
                    element.insertAdjacentHTML('afterbegin', content);
                    return false;
                }
                // if pwd2 field blank
                if (pwd2 == "") {
                    content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Confirm Password must be filled out.</div>';
                    element.innerHTML = "";
                    element.insertAdjacentHTML('afterbegin', content);
                    return false;
                }
                // if confirmation does not validate
                if (pwd1 !== pwd2) {
                    content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Passwords do not match.</div>';
                    element.innerHTML = "";
                    element.insertAdjacentHTML('afterbegin', content);
                    return false;
                }
            }
        </script>
        <!-- end of error messages for reset account form invalidation -->

        <!-- error messages for change pwd form invalidation -->
        <script>
            // clear errors on reset button press 
            function clearErrors() {
                let element = document.getElementById('reset_account_msg');
                element.innerHTML = "";
            }

            function validateChangePwdAccount() {
                let element = document.getElementById('reset_account_msg');
                let content;
                let old_pwd = document.forms["changePwdForm"]["old_pwd"].value;
                let new_pwd1 = document.forms["changePwdForm"]["new_pwd1"].value;
                let new_pwd2 = document.forms["changePwdForm"]["new_pwd2"].value;

                // if pwd1 field blank
                if (new_pwd1 == "") {
                    content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Password must be filled out.</div>';
                    element.innerHTML = "";
                    element.insertAdjacentHTML('afterbegin', content);
                    return false;
                }
                // if pwd2 field blank
                if (new_pwd2 == "") {
                    content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Confirm Password must be filled out.</div>';
                    element.innerHTML = "";
                    element.insertAdjacentHTML('afterbegin', content);
                    return false;
                }
                // if confirmation does not validate
                if (new_pwd1 !== new_pwd2) {
                    content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Passwords do not match.</div>';
                    element.innerHTML = "";
                    element.insertAdjacentHTML('afterbegin', content);
                    return false;
                }
            }
        </script>
        <!-- end of error messages for change pwd form invalidation -->

        <!-- begin error messages for change email form invalidation -->
        <script>
            // clear errors on reset button press 
            function clearErrors() {
                let element = document.getElementById('reset_account_msg');
                element.innerHTML = "";
            }

            function validateChangePwdAccount() {
                let element = document.getElementById('reset_account_msg');
                let content;
                let email = document.forms["changeEmailForm"]["email"].value;
                let confirm_email = document.forms["changeEmailForm"]["confirm_email"].value;

                // if pwd1 field blank
                if (email == "") {
                    content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Password must be filled out.</div>';
                    element.innerHTML = "";
                    element.insertAdjacentHTML('afterbegin', content);
                    return false;
                }
                // if pwd2 field blank
                if (confirm_email == "") {
                    content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Confirm Password must be filled out.</div>';
                    element.innerHTML = "";
                    element.insertAdjacentHTML('afterbegin', content);
                    return false;
                }
                // if confirmation does not validate
                if (email !== confirm_email) {
                    content = '<div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times; </span> <strong>Error!</strong> Passwords do not match.</div>';
                    element.innerHTML = "";
                    element.insertAdjacentHTML('afterbegin', content);
                    return false;
                }
            }
        </script>
                    <a href="renew.html"> <button id="tutorials-nav" class="accordion" style="background-color: #FFD700;" fdprocessedid="tepczq">Upgrade to Walking Wallet PRO</button> </a>
                <!-- end error messages for change email form invalidation -->
        <!-- subtitle header -->
        <h2>Learn More</h2>
                <a href="https://walkingwalletapp.com/tutorials-internal" target="_blank"> <button id="tutorials-nav" class="accordion" fdprocessedid="v34vg">Tutorials</button> </a>
        <a href="https://walkingwalletapp.com/feedback-internal" target="_blank"> <button id="feedback-nav" class="accordion" fdprocessedid="3q3k6j">Contact Support</button> </a>

        <!-- subtitle header -->
        <h2>Account</h2>

        <!-- overflow scroll -->
                    <p class="display_email" style=" padding: 10px; margin-left: auto; margin-right: auto;"><strong>Email Address:</strong> Mylesnichols21@yahoo.com </p>
                        <a class="affiliate_code" href="https://walkingwalletapp.com/affiliate-program" target="_blank">
                    <p class="display_code" style="  padding: 10px; margin-left: auto; margin-right: auto; ">Request Affiliate Code</p>
                </a>
                <br>
        

        <!-- success msg -->
        <div id="change_success">

                                </div>

        <!-- pwd error msg -->
        <div id="change_msg">
                                    
            <!-- email error msg -->
                        
                                </div>

        <!-- profile options -->
        <!-- change password -->
        <button id="change_pwd_btn" class="accordion" fdprocessedid="phsgm">Change Your Password</button>

        <!-- begin change your password modal -->
        <script>
            // Get the modal
            var change_pwd_modal = document.getElementById("myChangePwdModal");

            // Get the button that opens the modal
            var btn = document.getElementById("change_pwd_btn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[1];

            // When the user clicks the button, open the modal 
            btn.onclick = function() {
                change_pwd_modal.style.display = "block";
                var x = document.getElementById("first").focus();
            }
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                change_pwd_modal.style.display = "none";
                document.getElementById("changePwdForm").reset();
            }

            var change_email_modal = document.getElementById("myChangeEmailModal");
            var modal = document.getElementById("myResetModal");

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == change_pwd_modal) {
                    change_pwd_modal.style.display = "none";
                    document.getElementById("resetAccountForm").reset();
                }
                if (event.target == modal) {
                    modal.style.display = "none";
                    document.getElementById("resetAccountForm").reset();
                }
                if (event.target == change_email_modal) {
                    change_email_modal.style.display = "none";
                    document.getElementById("resetAccountForm").reset();
                }

            }
        </script>
        <!-- end change your password modal -->


        <!-- change email -->
        <button id="change_email_btn" class="accordion" fdprocessedid="qfkck8">Change Your Email</button>

        <!-- begin change your password modal -->
        <script>
            // Get the modal
            var change_email_modal = document.getElementById("myChangeEmailModal");

            // Get the button that opens the modal
            var change_email_btn = document.getElementById("change_email_btn");

            // Get the <span> element that closes the modal
            var change_email_span = document.getElementsByClassName("close")[2];

            // When the user clicks the button, open the modal 
            change_email_btn.onclick = function() {
                change_email_modal.style.display = "block";
                var x = document.getElementById("first1").focus();
            }
            // When the user clicks on <span> (x), close the modal
            change_email_span.onclick = function() {
                change_email_modal.style.display = "none";
                document.getElementById("changeEmailForm").reset();
            }
        </script>
        <!-- end of change email action -->
        <br><br>

                    <!-- disabled reset account btn (nothing to reset) -->
            <button class="accordion" style="background-color: #cecece; color: #333; cursor: default;margin-top: 10px;" fdprocessedid="bh8r1m">Reset Account</button>
            <br><br>
            </div>




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

</body><!-- highlight current tab in sidebar --></html>