<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/View/style/dashboard.css">
    <link rel="shortcut icon" type="image/x-icon" href="src/View/images/maison.png" />
    <title>Dashboard - LED</title>
</head>
<body>
    <div class="Side-bar">
        <div class="casa-connect-img"><img src="src/View/images/dashboard_casa_connect.png"></div>
        <div class="Box-logo">CASA CONNECT</div>
        <div class="Box-menu">
            <ul class="ul-menu">
                <a href="dashboard-capteurs">
                    <li class="li-mneu">
                        <class class="icon-menu">
                        <img src="src\View\images\header_dashboard\icons8-en-ligne-50.png">
                        </class>
                        <div class="title-menu">Capteurs</div>
                    </li>
                </a>
                <li class="li-mneu Active-menu">
                <class class="icon-menu">
                    <img src="src\View\images\header_dashboard\icons8-diode-led-50.png">
                </class>
                    <div class="title-menu">LED</div>
                </li>
                <a href="dashboard-control">
                    <li class="li-mneu">
                    <class class="icon-menu">
                        <img src="src\View\images\header_dashboard\icons8-fonction-50.png">
                    </class>
                        <div class="title-menu">Control</div>
                    </li>
                </a>
                <a href="dashboard-log">
                    <li class="li-mneu">
                    <class class="icon-menu">
                            <img src="src\View\images\header_dashboard\icons8-entrée-50.png">
                    </class>
                        <div class="title-menu">Log</div>
                    </li>
                </a>
                <a href="home">
                    <li class="li-mneu logout">
                        <svg class="icon-menu" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M11.476,15a1,1,0,0,0-1,1v3a3,3,0,0,1-3,3H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2H7.476a3,3,0,0,1,3,3V8a1,1,0,0,0,2,0V5a5.006,5.006,0,0,0-5-5H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H7.476a5.006,5.006,0,0,0,5-5V16A1,1,0,0,0,11.476,15Z" /><path d="M22.867,9.879,18.281,5.293a1,1,0,1,0-1.414,1.414L21.13,10.97,6,11a1,1,0,0,0,0,2H6l15.188-.03-4.323,4.323a1,1,0,1,0,1.414,1.414l4.586-4.586A3,3,0,0,0,22.867,9.879Z" /></svg>
                        <div class="title-menu">Logout</div>
                    </li>
                </a>
            </ul>
        </div>
    </div>
    <div class="Page">
        <div class="Box-header">
            <div class="box-alert-infomation">
                <div class="box-alert">
                    <svg class="svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#bfbfbf"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="User / User_03"> <path id="Vector" d="M18 19C18 16.7909 15.3137 15 12 15C8.68629 15 6 16.7909 6 19M12 12C9.79086 12 8 10.2091 8 8C8 5.79086 9.79086 4 12 4C14.2091 4 16 5.79086 16 8C16 10.2091 14.2091 12 12 12Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                </div>
                <div class="box-infomation">
                    <div class="info-name"><?php echo $name?></div>
                </div>
            </div>
        </div>
        <div class="Box-elements">
            <div class="box-ledbutton-all">
                <div class="box-led-block1">
                    <div class="box-led-box1">
                        <img id="imagewhite" src="src\View\images\icon_led_dashboard\led-origin.png">    <!--Led blanche-->
                        <button class="myButton" id="boutonwhite" onclick="imageledblanche()">ON</button>
                    </div>
                    <div class="box-led-box2">
                        <img id="imagered" src="src\View\images\icon_led_dashboard\led-origin.png">   <!--Led rouge-->
                        <button class="myButton" id="boutonred" onclick="imageledrouge()">ON</button>
                    </div>
                    <div class="box-led-box3">
                        <img id="imagergb" src="src\View\images\icon_led_dashboard\led-origin.png">   <!--Led RGB-->
                        <button class="myButton" id="boutonrgb" onclick="imageledrgb()">ON</button>
                    </div>
                    <div class="box-led-box4">
                        <img id="imageyellow" src="src\View\images\icon_led_dashboard\led-origin.png">   <!--Led jaune-->
                        <button class="myButton" id="boutonyellow" onclick="imageledjaune()">ON</button>
                    </div>
                    <div class="box-led-box5">
                        <img id="imagegreen" src="src\View\images\icon_led_dashboard\led-origin.png">   <!--Led verte-->
                        <button class="myButton" id="boutongreen" onclick="imageledverte()">ON</button>
                    </div>
                </div>
                <div class="box-pushbutton-block2">
                    <div class="box-pushbutton-button2">
                    
                        <div class="box-pushbutton-box1">
                            <button id="bouttonpushblue">
                                <img src="src\View\images\icon_led_dashboard\bouton-bleu.png">
                            </button>
                        </div>
                        <div class="box-pushbutton-box2">
                            <button id="bouttonpushred">
                                <img src="src\View\images\icon_led_dashboard\bouton-rouge.png">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script src="src\View\js\button.js"></script>
</body>
</html>