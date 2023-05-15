/*---------------------------------------------------------------------------------------------------------------------------*/
/* Fonction changement LED blanche */

function imageledblanche() {
  var image = document.getElementById("imagewhite");
  var bouton = document.getElementById("boutonwhite");
  const xhr = new XMLHttpRequest();

  // Vérifie l'attribut src de l'image
  if (image.src.endsWith("src/View/images/icon_led_dashboard/led-origin.png")) {
    // Si l'image actuelle est image1.jpg, changez-la en image2.jpg
    image.src = "src/View/images/icon_led_dashboard/led-white.png";
    bouton.textContent = "OFF";  

    xhr.open("GET", "http://192.168.137.10/allumer_led_blanche");
    
  } else {
    // Sinon, changez-la en image1.jpg
    image.src = "src/View/images/icon_led_dashboard/led-origin.png";
    bouton.textContent = "ON";
    xhr.open("GET", "http://192.168.137.10/eteindre_led_blanche");
  }
  xhr.send();
} 

/* Fonction changement LED blanche */
/*---------------------------------------------------------------------------------------------------------------------------*/
/* Fonction changement LED ROUGE */

function imageledrouge() {
  var image = document.getElementById("imagered");
  var bouton = document.getElementById("boutonred");
  const xhr = new XMLHttpRequest();
  // Vérifie l'attribut src de l'image
  if (image.src.endsWith("src/View/images/icon_led_dashboard/led-origin.png")) {
    // Si l'image actuelle est image1.jpg, changez-la en image2.jpg
    image.src = "src/View/images/icon_led_dashboard/led-red.png";
    bouton.textContent = "OFF";
    xhr.open("GET", "http://192.168.137.10/allumer_led_rouge");
  } else {
    // Sinon, changez-la en image1.jpg
    image.src = "src/View/images/icon_led_dashboard/led-origin.png";
    bouton.textContent = "ON";
    xhr.open("GET", "http://192.168.137.10/eteindre_led_rouge");
  }
  xhr.send();
} 

/* Fonction changement LED ROUGE */
/*---------------------------------------------------------------------------------------------------------------------------*/
/* Fonction changement LED RGB */

function imageledrgb() {
  var image = document.getElementById("imagergb");
  var bouton = document.getElementById("boutonrgb");
  const xhr = new XMLHttpRequest();
  // Vérifie l'attribut src de l'image
  if (image.src.endsWith("src/View/images/icon_led_dashboard/led-origin.png")) {
    // Si l'image actuelle est image1.jpg, changez-la en image2.jpg
    image.src = "src/View/images/icon_led_dashboard/led-rgb.png";
    xhr.open("GET", "http://192.168.137.10/rgb");
    setTimeout(function() {
      image.src = "src/View/images/icon_led_dashboard/led-origin.png";
    },10000);
}
xhr.send();
} 

/* Fonction changement LED RGB */
/*---------------------------------------------------------------------------------------------------------------------------*/
/* Fonction changement LED JAUNE */

function imageledjaune() {
  var image = document.getElementById("imageyellow");
  var bouton = document.getElementById("boutonyellow");
  const xhr = new XMLHttpRequest();
  // Vérifie l'attribut src de l'image
  if (image.src.endsWith("src/View/images/icon_led_dashboard/led-origin.png")) {
    // Si l'image actuelle est image1.jpg, changez-la en image2.jpg
    image.src = "src/View/images/icon_led_dashboard/led-yellow.png";
    bouton.textContent = "OFF";
    xhr.open("GET", "http://192.168.137.10/allumer_led_jaune");
  } else {
    // Sinon, changez-la en image1.jpg
    image.src = "src/View/images/icon_led_dashboard/led-origin.png";
    bouton.textContent = "ON";
    xhr.open("GET", "http://192.168.137.10/eteindre_led_jaune");
  }
  xhr.send();
} 

/* Fonction changement LED JAUNE */
/*---------------------------------------------------------------------------------------------------------------------------*/
/* Fonction changement LED VERTE */

function imageledverte() {
  var image = document.getElementById("imagegreen");
  var bouton = document.getElementById("boutongreen");
  const xhr = new XMLHttpRequest();
  // Vérifie l'attribut src de l'image
  if (image.src.endsWith("src/View/images/icon_led_dashboard/led-origin.png")) {
    // Si l'image actuelle est image1.jpg, changez-la en image2.jpg
    image.src = "src/View/images/icon_led_dashboard/led-green.png";
    bouton.textContent = "OFF";
    xhr.open("GET", "http://192.168.137.10/allumer_led_verte");
  } else {
    // Sinon, changez-la en image1.jpg
    image.src = "src/View/images/icon_led_dashboard/led-origin.png";
    bouton.textContent = "ON";
    xhr.open("GET", "http://192.168.137.10/eteindre_led_verte");
  }
  xhr.send();
}

/* Fonction changement LED VERTE */
/*---------------------------------------------------------------------------------------------------------------------------*/
/* Fonction bordure verte buttonpush*/

const bouttonpushblue = document.getElementById("bouttonpushblue");
const couleurBordureInitialeblue = bouttonpushblue.style.borderColor;

bouttonpushblue.addEventListener("click", function() {
  bouttonpushblue.style.borderColor = "blue";

  setTimeout(function() {
    bouttonpushblue.style.borderColor = couleurBordureInitialeblue;
  }, 300);
  const xhr = new XMLHttpRequest();
  xhr.open("GET", "http://192.168.137.10/desactiver_alarme");
  xhr.send();

});

const bouttonpushred = document.getElementById("bouttonpushred");
const couleurBordureInitialered = bouttonpushred.style.borderColor;

bouttonpushred.addEventListener("click", function() {
  bouttonpushred.style.borderColor = "red";

  setTimeout(function() {
    bouttonpushred.style.borderColor = couleurBordureInitialered;
  }, 300);
  const xhr = new XMLHttpRequest();
  xhr.open("GET", "http://192.168.137.10/activer_alarme");
  xhr.send();
});

/* Fonction bordure verte buttonpush*/
/*---------------------------------------------------------------------------------------------------------------------------*/