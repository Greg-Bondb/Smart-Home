var body = document.body;
var headvar = document.getElementsByClassName('header')[0];
var footvar = document.getElementsByClassName('footer-copyright')[0];
var table = document.getElementsByClassName('table')[0];

// dark mode
const checkbox = document.getElementById('checkbox');

var theme = getCookie('theme');

if(theme != '') {
    body.classList.add(theme);
    headvar.classList.add(theme);
    footvar.classList.add(theme);
    table.classList.add(theme);
    if (theme == 'dark') {
        checkbox.checked = true;
    }
}

// enregistrement du theme dans le cookie
function setCookie(name, value) {
    var d = new Date();
    d.setTime(d.getTime() + (365*24*60*60*1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

// methode de recuperation du theme dans le cookie
function getCookie(cname) {
    var theme = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(theme) == 0) {
            return c.substring(theme.length, c.length);
        }
    }
    return "";
}

const burger = document.querySelector('.burger')
const bod = document.querySelector('body');
burger.addEventListener('click', ()=>{
    burger.classList.toggle('active')
    bod.classList.toggle('open')
})

//---------------------------a la fin--------------------------------
window.addEventListener("scroll",function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky",window.scrollY > 0);
})

checkbox.addEventListener('change', ()=>{
    body.classList.toggle('dark');
    headvar.classList.toggle('dark');
    footvar.classList.toggle('dark');
    table.classList.toggle('dark');
    if (body.className == "") {
        body.classList.add("light");
        headvar.classList.add("light");
        footvar.classList.add("light");
        table.classList.add('light');
        setCookie('theme', 'light');
    } else {
        body.classList.remove("light");
        headvar.classList.remove("light");
        footvar.classList.remove("light");
        table.classList.remove('light');
        setCookie('theme', 'dark');
    }
})