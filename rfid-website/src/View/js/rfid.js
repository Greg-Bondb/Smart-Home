const rfid = document.getElementById('rfid');
const res = document.getElementById('res');
var result = "";

// change button name
rfid.addEventListener('click', ()=>{
    if (rfid.textContent == "Start") {
        rfid.textContent = "Stop";
        res.textContent = "";
        setCookie();
    } else {
        rfid.textContent = "Start";
        res.textContent = compareDate();
    }
})

// enregistrement de la date dans le cookie
function setCookie() {
    const accDate = actDate();
    document.cookie = "TimeRFID=" + accDate + ";path=/";
}

// recuperer le cookie date
function getCookie(name) {
    const cookieName = name + "=";
    const cookies = document.cookie.split(';');
    for(let i = 0; i < cookies.length; i++) {
        let cookie = cookies[i];
        while (cookie.charAt(0) == ' ') {
            cookie = cookie.substring(1);
        }
        if (cookie.indexOf(cookieName) == 0) {
            return cookie.substring(cookieName.length, cookie.length);
        }
    }
    return null;
}

// date now
function actDate() {
    return new Date(Date.now());
}

// soustraire les dates
function sousDate(dat1, dat2) {
    return dat2.getTime() - dat1.getTime();
}

// formater une date
function formatTemps(differenceEnMillisecondes) {
    const secondes = Math.floor(differenceEnMillisecondes / 1000);
    const heures = Math.floor(secondes / 3600);
    const minutes = Math.floor((secondes % 3600) / 60);
    const secondesRestantes = secondes % 60;
    return `${heures}:${minutes < 10 ? '0' : ''}${minutes}:${secondesRestantes < 10 ? '0' : ''}${secondesRestantes}`;
}

// comparer deux dates
function compareDate() {
    const date1 = new Date(getCookie("TimeRFID"));
    const date2 = actDate();
    const diff = sousDate(date1, date2);
    return formatTemps(diff);
}
