<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if(isset($_SESSION['Username'])){
    header("location: home");
}
$getLang = trim(filter_var(htmlentities($_GET['lang']),FILTER_SANITIZE_STRING));
if (!empty($getLang)) {
$_SESSION['language'] = $getLang;
}
// ========================= config the languages ================================
error_reporting(E_NOTICE ^ E_ALL);
if (is_file('home.php')){
    $path = "";
}elseif (is_file('../home.php')){
    $path =  "../";
}elseif (is_file('../../home.php')){
    $path =  "../../";
}
include_once $path."langs/set_lang.php";
?>
<html dir="<? echo lang('html_dir'); ?>">
<head>
    <title><? echo lang('login'); ?> | Social Icon</title>
    <meta charset="UTF-8">
    <meta name="description" content="Social Icon is a social network platform helps you meet new friends and stay connected with your family and with who you are interested anytime anywhere.">
    <meta name="keywords" content="login,social network,social media,Social Icon,meet,free platform">
    <meta name="author" content="nsit cse 8th sem major project">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head_imports_main.php";?>
    <style type="text/css">
         .modal_developer1
        {
            height: 170px;
            width: 130px;

        }
        .modal-title
        {
            background:#00FFFF;    
        }
    </style>
</head>
    <body class="login_signup_body" style="background-image: url('imgs/back.jpg');">
    <!--============[ Nav bar ]============-->
        <div class="login_signup_navbar">
                <a href="index"><img src="imgs/socialicon.jpeg" style="height: 80px;width: 80px;"></a>
                <a href="index.html" class="login_signup_navbarLinks" style="font-size: 20px;"><? echo lang('help'); ?></a>
                
                <a href="privacy_policy.php" class="login_signup_navbarLinks" style="font-size: 20px;"><? echo lang('privacyPolicy'); ?></a>

                <a href="#" class="login_signup_navbarLinks" style="font-size: 20px;">

                    <button type="button" data-toggle="modal" data-target="#myModal" style="background: none;border: none;">Developers</button>

<!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog">

    <!-- Modal content-->
                        <div class="modal-content">
                           <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                             <center><h4 class="modal-title">OUR TEAM</h4></center>
                           </div>
                           <div class="modal-body">
                              <div class="modal-box">
                                  <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-6">
                                            <img class="modal_developer1"  >
                                        </div>
                                        <div class="col-sm-6">
                                            <p>VILSON KUAMR</p><hr>
                                            <p>COMPUTER SCIENCE DEPARTMENT</p><hr>
                                            <p>contact-1234567890</p>
                                        </div>
                                    </div>
                                  </div>
                              </div>
                              <hr>
                              <div class="modal-box">
                                  <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-6">
                                            <img class="modal_developer1" src="imgs/IMG-20180127-WA0051.jpg" >
                                        </div>
                                        <div class="col-sm-6">
                                            <p>ABHISHEK KUAMR</p><hr>
                                            <p>COMPUTER SCIENCE DEPARTMENT</p><hr>
                                            <p>contact-45678987</p>
                                        </div>
                                    </div>
                                  </div>
                    
                              </div>
                              <hr>
                              <div class="modal-box">
                                  <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-6">
                                            <img class="modal_developer1"  >
                                        </div>
                                        <div class="col-sm-6">
                                            <p>PRIYA TIWARI</p><hr>
                                            <p>COMPUTER SCIENCE DEPARTMENT</p><hr>
                                            <p>contact-000000000</p>
                                        </div>
                                    </div>
                                  </div>
                    
                              </div>
                              <hr>
                              <div class="modal-box">
                                  <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-6">
                                            <img class="modal_developer1"  >
                                        </div>
                                        <div class="col-sm-6">
                                            <p>ANJANA BHARTI</p><hr>
                                            <p>COMPUTER SCIENCE DEPARTMENT</p><hr>
                                            <p>contact-1232445</p>
                                        </div>
                                    </div>
                                  </div>
                    
                              </div>
                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                           </div>
                        </div>

                      </div>
                    </div>

                </a>



                <div style="float: <? echo lang('float2'); ?>;">
                    <a href="login" class="login_signup_btn1" style="margin: 30px;"><? echo lang('login'); ?></a>
                    <a href="signup" class="login_signup_btn2"><? echo lang('signup'); ?></a>
                </div>
        </div>
        <!--============[ main contains ]============-->
        <div align="center">
            <div class="login_signup_box2" style="text-align:<? echo lang('textAlign'); ?>">
                <h4 align="center"><? echo lang('login_now'); ?></h4><br/>
                <p><input type="text" name="login_username" id="un" class="login_signup_textfield" placeholder="<? echo lang('email_or_username'); ?>" required=""/></p><br>
                <p><input type="password" name="login_password" id="pd" class="login_signup_textfield" placeholder="<? echo lang('password'); ?>" reqiured=""/></p>
                <!-- <p><a href="#" style="color: #a2a2a2; font-size: 11px; float: <? echo lang('float2'); ?>;"> <? echo lang('forgot_password'); ?></a></p> --><br>
                <button type="submit" class="login_signup_btn1" id="loginFunCode"><? echo lang('login'); ?></button>
                <p id="login_wait" style="margin: 0px;"></p>
            </div>
            <div style="background: #fff; border-radius: 3px; max-width: 420px; padding: 15px; margin:auto;margin-top: 15px;color: #7b7b7b;" align="center">
                <? echo lang('dont_have_an_account'); ?> <a href="signup"><? echo lang('signup'); ?></a> <? echo lang('for_free'); ?>.<hr style="margin: 8px;">
                <a href="?lang=english">English</a> &bull; 
            </div>
        </div>

<script type="text/javascript">
function loginUser(){
var username = document.getElementById("un").value;
var password = document.getElementById("pd").value;
$.ajax({
type:'POST',
url:'includes/login_signup_codes.php',
data:{'req':'login_code','un':username,'pd':password},
beforeSend:function(){
$('.login_signup_btn1').hide();
$('#login_wait').html("<? echo lang('loading'); ?>...");
},
success:function(data){
$('#login_wait').html(data);
if (data == "Welcome...") {
    $('#login_wait').html("<p class='alertGreen'><? echo lang('welcome'); ?>..</p>");
    setTimeout(' window.location.href = "home"; ',2000);
}else{
    $('.login_signup_btn1').show();
}
},
error:function(err){
alert(err);
}
});
}
$('#loginFunCode').click(function(){
loginUser();
});
$(".login_signup_textfield").keypress( function (e) {
    if (e.keyCode == 13) {
        loginUser();
    }
});
</script>
</body>
</html>
