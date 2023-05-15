<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link rel="stylesheet" href="src/View/style/login.css">
      <link rel="stylesheet" href="src/View/style/style.css">
      <link rel="shortcut icon" type="image/x-icon" href="src/View/images/maison.png" />
      <title>Login</title>
   </head>
   <body>
      <!-----------------------formulaire----------------------->
      <section class="gradient-custom change2">
         <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100 change">
               <div class="col-12 col-lg-9 col-xl-7 change">
                  <div class="card shadow-2-strong card-registration change" style="border-radius: 15px;">
                     <div class="card-body p-4 p-md-5 change">
                        <!-- Header principal -->
                        <div class="container d-flex justify-content-center mb-xl-5">
                           <a href="login" class="d-flex align-items-center col-md-3 mb-2 mb-md-0  justify-content-center text-decoration-none">
                           <img class="bi me-2" width="156" height="128" role="img" aria-label="Bootstrap" src="src/View/images/maison.png">
                           </a>
                        </div>
                        <!-- Header principal -->
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Connexion à la maison</h3>
                        <div class="error text-danger text-center">
                           <?php
                              if (isset($_POST['submit'])) {
                                echo $error;
                              }
                            ?>
                        </div>
                        <form  class="form" action="" method="POST">
                           <div class="container-all">
                              <div class="col-md-6 mb-4">
                                 <div class="form-outline">
                                    <label class="form-label" for="email">Email :</label>
                                    <input type="text" name="email" id="email" class="form-control form-control-lg" placeholder="Entrez votre email / pseudo ..." />
                                 </div>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <div class="form-outline">
                                    <label class="form-label" for="password">Mot de passe :</label>
                                    <input type="password" name='password' id="password" class="form-control form-control-lg" placeholder="Entrez votre mot de passe ..." />
                                 </div>
                              </div>
                           </div>
                           <div class="mt-4 pt- all">
                              <input class="btn btn-dark btn-lg" type="submit" name='submit' value="Se connecter" />
                           </div>
                        </form>
                     </div>
                     <!-- Register buttons -->
                     <!-- <div class="text-center justify-content-center align-items-center text-decoration-none">
                        <p>Vous n'êtes pas membre ? <a href="register" class="text-decoration-none text-blue"><strong>S'Inscrire</strong></a></p>
                        </div> -->
                  </div>
               </div>
            </div>
         </div>
      </section>
   </body>
</html>