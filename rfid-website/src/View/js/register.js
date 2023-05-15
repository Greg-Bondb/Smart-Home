var administrateur = document.getElementById('administrateur');
var employe = document.getElementById('employe');
var row = document.getElementById('row');
var email = document.getElementById('email');
var pass = document.getElementById('password');
var badge = document.getElementById("badge");

// vérification de l'enregistrement
administrateur.addEventListener('click', () => {
    if (administrateur.checked) {
        administrateur.checked = true;
        row.style.display = "flex";
        employe.checked = false;
        email.required = true;
        pass.required = true;
    }
});

employe.addEventListener('click', () => {
    if (employe.checked) {
        employe.checked = true;
        row.style.display = "none";
        administrateur.checked = false;
        email.required = false;
        pass.required = false;
    }
});

function scanBadge() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let responsetxt = this.responseText;
            document.getElementsByClassName("badges")[0].value = responsetxt;
            if (responsetxt == "Aucun badge détecté") {
                document.getElementById("badgeValue").value = "";
            } else {
                document.getElementById("badgeValue").value = responsetxt;
            }
            
            
        }
    };
    xhttp.open("GET", "http://192.168.137.10/scan-badge", true);
    xhttp.send();
}

badge.addEventListener('click', ()=>{
    scanBadge();
})