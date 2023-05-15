<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/View/style/dashboard.css">
    <link rel="shortcut icon" type="image/x-icon" href="src/View/images/maison.png" />
    <script src="https://unpkg.com/zdog@1/dist/zdog.dist.min.js"></script>
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
                        <img src="src/View/images/header_dashboard/icons8-en-ligne-50.png">
                    </class>
                        <div class="title-menu">Capteurs</div>
                    </li>
                </a>
                <a href="dashboard-led">
                    <li class="li-mneu">
                    <class class="icon-menu">
                        <img src="src\View\images\header_dashboard\icons8-diode-led-50.png">
                    </class>
                        <div class="title-menu">LED</div>
                    </li>
                </a>
                <li class="li-mneu Active-menu">
                <class class="icon-menu">
                    <img src="src\View\images\header_dashboard\icons8-fonction-50.png">
                </class>
                    <div class="title-menu">Control</div>
                </li>
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
            <div class="box-elements-fonctionnality">
                <div class="box-elements-fonctionnality-primary">
                    <div class="box-elements-digicode">
                        <div class="keypad_wrapper">

                            <div class="divscreen">
                                <div class="screen"></div>
                                <div class="flasher"></div>
                                <div class="error notification">ERROR</div>
                                <div class="success notification">SUCCESS</div>
                            </div>
                            
                            <div class="divkey">
                                <div class="key">1</div>
                                <div class="key">2</div>
                                <div class="key">3</div>
                                <div class="key">4</div>
                                <div class="key">5</div>
                                <div class="key">6</div>
                                <div class="key">7</div>
                                <div class="key">8</div>
                                <div class="key">9</div>
                                <div class="key">#</div>
                                <div class="key">0</div>
                                <div class="key" id="reset">C</div>
                            </div>
                        </div>
                    </div>
                    <div class="box-elements-motor" style="display:flex;align-items:center;justify-content:center;flex-direction:column">
                        <canvas class="zdog-canvas" width="340" height="340"></canvas>
                        <button class="myButton" id="boutonmoteur">ON</button>
                    </div>
                    <div class="box-elements-rfid">
                        <p style="text-align:center; color:white; font-size: 25px;">value</p>
                        <img class="rfimage" src="src/View/images/rfid.png" alt="image rfid">
                        <button id="rfid">Start</button>
                        <p id="res"></p>
                    </div>
                </div>
            </div>
        </div>

        <script> var pass = "<?php echo $digicode; ?>"; </script>
        <script src="src/View/js/rfid.js"></script>
        <script src="src/View/js/motor.js"></script>
        <script src="src/View/js/digicode.js"></script>
</body>
</html>