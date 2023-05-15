<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/View/style/account.css">
    <link rel="stylesheet" href="src/View/style/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="src/View/images/maison.png" />
    <script src="https://kit.fontawesome.com/157324e58a.js" crossorigin="anonymous"></script>
    <title>Account</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>
<body>
    <!-----------------------navbar----------------------->
    <header class="header">
        <nav>
            <div class="header-logo">
               <a href="" class="href-logo">
                  <img src="src/View/images/Casa_Connect.png" alt="">
                  <p>Casa Connect</p>
                  <hr>
               </a>
            </div>
            <div class="burger">
               <span></span>
            </div>
            <div class="header-navbar">
               <ul>
                  <li><a href="home">HOME</a></li>
                  <li><a href="register">REGISTER</a></li>
                  <li><a href="dashboard-capteurs">DASHBOARD</a></li>
                  <li><a href="account">ACCOUNT</a></li>
                  <li><a class="alogout" href="logout"><img class="logout" src="src/View/images/exit-red.png" alt="logout"></a></li>
               </ul>
            </div>
        </nav>
    </header>
    <!-----------------------searchbar----------------------->
    <div class="barsearch">
        <input class="input" id="searchInput" type="text" placeholder="Search..."/>
    </div>  
    <table>
        <thead>
            <tr class="table">
                <td>Matricule</td>
                <td>Prénom</td>
                <td>Nom</td>
                <td>Accreditation</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            <div class="search-div">
                <?php foreach ($rows as $row) { ?>
                <tr>    
                    <td class="giromagny"><?php echo $row['matricule']; ?></td>
                    <td class="giromagny"><?php echo $row['first_name']; ?></td>
                    <td class="giromagny"><?php echo$row['last_name']; ?></td>
                    <td class="giromagny"><?php echo $row['accreditation']; ?></td>
                    <td class="model">
                        <form action="changeAccount?id_employee=<?php echo $row["id_employee"];?>" method="post">
                            <!-- <td><button class="button-1" type="button" href="home"> View</button> <input type="submit" name="delete" class="btn btn-secondary btn-sm mx-1 mb-2" value="Supprimer"></td> -->
                            <input type="submit" name="modif" class="btn btn-secondary btn-sm mx-1 mb-2 green" value="Modifier">
                        </form>
                        <form action="account?id_employee=<?php echo $row["id_employee"];?>" method="post">
                            <!-- <td><button class="button-1" type="button" href="home"> View</button> <input type="submit" name="delete" class="btn btn-secondary btn-sm mx-1 mb-2" value="Supprimer"></td> -->
                            <input type="submit" name="delete" class="btn btn-secondary btn-sm mx-1 mb-2 red" value="Supprimer">
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </div>
        </tbody>
    </table>
    <!-----------------------footer----------------------->
    <footer>
        <div class="dark-container">
            <input type="checkbox" class="checkbox" id="checkbox">
            <label for="checkbox" class="label">
                <i class="fas fa-moon"></i>
                <i class='fas fa-sun'></i>
                <div class='ball'></div>
            </label>
        </div>
        <div>
            <ul class="menu">
                <li><a href="home">Home</a></li>
                <li><a href="register">Register</a></li>
                <li><a href="dashboard-capteurs">Dashboard</a></li>
                <li><a href="account">Account</a></li>
            </ul>
            <div class="footer-copyright">
                <p>Copyright @2023 All Rights Reserved.</p>
            </div>
        </div>
    </footer>

<script src="src/View/js/account.js"></script>
<script src="src/View/js/main.js"></script>
</body>
</html>