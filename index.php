<?php
require('connection.inc.php');
require('functions.inc.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Buy POS - Login</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body onload="initClock()">
    <section class="dashboard">
        <div class="dash_head">
            <p><span class="head_t">Best Buy POS ->> User Site:-</span><span class="head_n"> Bbuy Jamgora Ashlia</span> <span class="head_status"> [Site Id : 12729] Status:153</span></p>
        </div>
        <div class="login_body">
            <div class="login_panel">
                <div class="log_left">
                    <div class="login_title">
                        <p> <img src="./assests/images/icons8-lock.gif" alt=""> User Login Panel</p>
                    </div>
                    <div class="alart" id="loginAlart">
                        This is Error Alert
                    </div>
                    <div class="login_form">
                        <form id="login_form" method="POST">
                            <div class="log_form_lt">
                                <label for="login_party_code">Party Code:</label>
                                <input type="text" name="login_party_code" id="login_party_code" required>
                            </div>
                            <div class="log_form_rt">
                                <label for="login_password">Password:</label>
                                <input type="password" name="login_password" id="login_password" required>
                            </div>
                            <div class="helper">
                                <a href="javascript:void(0)" onclick="document.getElementById('forgot_popup').style.visibility = 'visible'">Forgotten Password?</a>
                                <a href="javascript:void(0)" onclick="document.getElementById('register_popup').style.visibility = 'visible'">Register</a>
                            </div>
                            <input type="button" name="loginSubmit" onclick="userlogin()" value="Login">
                        </form>
                    </div>
                </div>
                <div class="log_right">
                    
                </div>
            </div>
        </div>

        <?php require './pages/footer.php' ?>

    </section>
    <div class="forgot_popup" id="forgot_popup">
        <div class="forgot_container">
            <p class="forgot_title">Forgotten Password</p>
            <form action="">
                <div class="log_form_lt">
                    <label for="username">User Name:</label>
                    <input type="text" name="username">
                </div>
                <div class="log_form_lt">
                    <label for="email">Email:</label>
                    <input type="email" name="email">
                </div>
                <div class="log_form_lt">
                    <label for="phone">Phone:</label>
                    <input type="number" name="phone">
                </div>
                <div class="log_form_rt">
                    <label for="showroom_code">Showroom Code:</label>
                    <input type="number" name="showroom_code">
                </div>
                <div class="log_form_rt">
                    <label for="party_code">Party Code:</label>
                    <input type="number" name="party_code">
                </div>
                <span class="fotgot_note"> Note: After successfully submitting, check your verified email.</span>
                <input type="button" name="forgot_submit" value="Submit">
            </form>
        </div>
        <a href="javascript:void(0)" class="forgot_close" id="forgot_close" onclick="document.getElementById('forgot_popup').style.visibility = 'hidden'"><img src="./assests/images/close.png"></a>
    </div>
    <div class="forgot_popup" id="register_popup">
        <div class="forgot_container">
            <p class="forgot_title">User Registration</p>
            <div class="alart" id="register_error">
                <p id="register_error_msg">This is Error Alert</p>
            </div>
            <form id="register_form" method="POST">
                <div class="log_form_lt">
                    <label for="registerUserName">User Name:</label>
                    <input type="text" name="registerUserName" id="registerUserName" required>
                </div>
                <div class="log_form_lt">
                    <label for="registerEmail">Email:</label>
                    <input type="email" name="registerEmail" id="registerEmail" required>
                </div>
                <div class="log_form_lt">
                    <label for="registerPhone">Phone:</label>
                    <input type="number" name="registerPhone" id="registerPhone" required>
                </div>
                <div class="log_form_rt">
                    <label for="registerShowroomCode">Showroom Code:</label>
                    <input type="number" name="registerShowroomCode" id="registerShowroomCode" required>
                </div>
                <div class="log_form_rt">
                    <label for="registerPartyCode">Party Code:</label>
                    <input type="number" name="registerPartyCode" id="registerPartyCode" required>
                </div>
                <div class="log_form_rt">
                    <label for="registerPassword">Password:</label>
                    <input type="text" name="registerPassword" id="registerPassword" required>
                </div>
                <span class="fotgot_note"> Note: After successfully submitting, Wait for Authorization.</span>
                <input type="submit" name="registerSubmit" value="Submit" onclick="userRegister()">
            </form>
        </div>
        <a href="javascript:void(0)" class="forgot_close" id="register_close" onclick="document.getElementById('register_popup').style.visibility = 'hidden'"><img src="./assests/images/close.png"></a>
    </div>
    <script src="./js/app.js"></script>
</body>

</html>