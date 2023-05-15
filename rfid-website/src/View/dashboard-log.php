<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/View/style/dashboard.css">
    <link rel="shortcut icon" type="image/x-icon" href="src/View/images/maison.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> 
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
                <a href="dashboard-led">
                    <li class="li-mneu">
                    <class class="icon-menu">
                        <img src="src\View\images\header_dashboard\icons8-diode-led-50.png">
                    </class>
                        <div class="title-menu">LED</div>
                    </li>
                </a>
                <a href="dashboard-control">
                    <li class="li-mneu">
                    <class class="icon-menu">
                        <img src="src\View\images\header_dashboard\icons8-fonction-50.png">
                    </class>
                        <div class="title-menu">Control</div>
                    </li>
                </a>
                <li class="li-mneu Active-menu">
                  <class class="icon-menu">
                        <img src="src\View\images\header_dashboard\icons8-entrée-50.png">
                  </class>
                    <div class="title-menu">Log</div>
                </li>
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
            <div class="Box-search">
                <div class="barsearch">
                    <svg class="icon-search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g fill="none" fill-rule="evenodd"><path d="m0 0h32v32h-32z" /><path d="m15 0c8.2842712 0 15 6.71572875 15 15 0 3.7823596-1.3999424 7.2377452-3.7099407 9.8762702l5.3667949 5.3663705-1.4142135 1.4142135-5.3663705-5.3667949c-2.638525 2.3099983-6.0939106 3.7099407-9.8762702 3.7099407-8.28427125 0-15-6.7157288-15-15 0-8.28427125 6.71572875-15 15-15zm0 2c-7.17970175 0-13 5.82029825-13 13 0 7.1797017 5.82029825 13 13 13 7.1797017 0 13-5.8202983 13-13 0-7.17970175-5.8202983-13-13-13z" fill="white" fill-rule="nonzero" /></g></svg>
                    <input class="input-search" placeholder="Search" type="text">
                </div>
            </div>
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
            <div class="box-log-all">
                <div class="box-background-black">
                    <div class="search-div">
                        <?php foreach ($rows as $row) { ?>
                        <tr>    
                            <td class="balatre"><?php echo $row['date']; ?> &nbsp; : &nbsp; </td>
                            <td class="balatre" id="name">&nbsp;<?php echo $row['matricule']; ?></td>
                            <td class="balatre">&nbsp;<?php echo $row['action']; ?></td>
                            <td class="balatre">&nbsp;<?php echo$row['object']; ?></td></br>
                        </tr>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
<script src="dashboard-log.js"></script>
</body>
</html>