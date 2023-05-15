<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link rel="stylesheet" href="src/View/style/login.css">
      <link rel="stylesheet" href="src/View/style/style.css">
      <link rel="shortcut icon" type="image/x-icon" href="src/View/images/maison.png" />
      <title>Register</title>
   </head>
   <body>
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
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Création d'un nouveau compte</h3>
                        <form action="" method="post" enctype="multipart/form-data">
                           <div class="error text-danger text-center">
                           </div>
                           <div class="col-md-6 mb-4">
                              <h6 class="mb-2 pb-1">Accreditation</h6>
                              <?php if ($data['accreditation'] == "employe") {?>
                              <div class="form-check form-check-inline">
                                 <input  class="form-check-input" name='accreditation' type="radio" id="employe" value="employe" checked required/>
                                 <label class="form-check-label" for="employee">Employé</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="accreditation" id="administrateur" value="administrateur" required/>
                                 <label class="form-check-label" for="administrateur">Administrateur</label>
                              </div>
                              <?php } else { ?>
                                 <div class="form-check form-check-inline">
                                 <input  class="form-check-input" name='accreditation' type="radio" id="employe" value="employe" required/>
                                 <label class="form-check-label" for="employee">Employé</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="accreditation" id="administrateur" value="administrateur" checked required/>
                                 <label class="form-check-label" for="administrateur">Administrateur</label>
                              </div>
                              <?php } ?>
                           </div>
                           <div class="row">
                              <div class="col-md-6 mb-4">
                                 <div class="form-outline">
                                    <label class="form-label" for="matricule">Matricule</label>
                                    <input type="text" name='matricule' id="matricule" class="form-control form-control-lg grey" placeholder="Entrez votre matricule..."  value=<?php echo $data['matricule']; ?> readonly required />
                                 </div>
                              </div>
                              <div class="col-md-6 mb-4 cent">
                                 <div class="form-outline wid">
                                    <label class="form-label" for="rfid">Scan RFID</label>
                                    <input class="btn btn-dark btn-lg wid2" name='rfid' type="button" value="Scanner un nouveau badge" />
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6 mb-4">
                                 <div class="form-outline">
                                    <label class="form-label" for="firstName">Prénom</label>
                                    <input type="text" name='firstName' id="firstName" class="form-control form-control-lg" placeholder="Entrez votre prénom ..." value="<?php echo $data['first_name'];?>" required />
                                 </div>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <div class="form-outline">
                                    <label class="form-label" for="lastName">Nom</label>
                                    <input type="text" name='lastName' id="lastName" class="form-control form-control-lg" placeholder="Entrez votre nom ..." value="<?php echo $data['last_name'];?>" required/>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6 mb-4 d-flex align-items-center">
                                 <div class="form-outline datepicker w-100">
                                    <label for="birth" class="form-label">Date de Naissance</label>
                                    <input type="date" name='birth' class="form-control form-control-lg" id="birth" value="<?php echo $data['birth_date'];?>" required/>
                                 </div>
                              </div>
                              <div class="col-md-6 mb-4 pb-2">
                                 <div class="form-outline">
                                    <label class="form-label" for="digicode">Digicode</label>
                                    <input type="text" name='digicode' id="digicode" class="form-control form-control-lg" placeholder="Entrez votre digicode ..." value="<?php echo $data['digicode'];?>" required/>
                                 </div>
                              </div>
                           </div>
                           <div class="row" id="row" <?php if ($data['accreditation'] == "administrateur") {?> style="display: flex"<?php } ?> >
                              <div class="col-md-6 mb-4 pb-2">
                                 <div class="form-outline">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" name='email' id="email" class="form-control form-control-lg" placeholder="Entrez votre email ..." />
                                 </div>
                              </div>
                              <div class="col-md-6 mb-4 pb-2">
                                 <div class="form-outline">
                                    <label class="form-label" for="password">Mot de passe</label>
                                    <input type="password" name='password' id="password" class="form-control form-control-lg" placeholder="Entrez votre mot de passe ..." autocomplete="on"/>
                                 </div>
                              </div>
                           </div>
                           <div class="mt-4 pt-2">
                              <input class="btn btn-dark btn-lg" type="submit" name='submit' value="Modifier" />
                           </div>
                        </form>
                     </div>
                     <!-- Register buttons -->
                     <!-- <div class="text-center justify-content-center align-items-center text-decoration-none">
                        <p>Voues êtes déjà membre ? <a href="login" class="text-blue text-decoration-none"><strong>Se connecter</strong></a></p>
                        </div> -->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script src="src/View/js/register.js"></script>
   </body>
</html>