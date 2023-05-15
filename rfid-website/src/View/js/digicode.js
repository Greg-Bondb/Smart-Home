valid = false;
window.tries = 0;

document.addEventListener('DOMContentLoaded', start);

function start() {
    var refreshIntervalId = setInterval(() => {

        document.querySelectorAll('.key').forEach(function(key) {
            key.addEventListener('click', function() {
                if (this.id == 'reset') {
                    document.querySelector('.screen').innerHTML = '';
                    window.tries = 0;
                    document.querySelector('.flasher').style.left = '28px';
                } else {
                    var n = this.innerHTML;
                    document.querySelector('.screen').innerHTML += n;
                    window.tries++;
                    updateFlasher();
                    validate();
                }
            });
        });
        clearInterval(refreshIntervalId);
    }, 100);
}

function updateFlasher() {
    if (window.tries <= 3) {
        var dis = window.tries * 55;
        document.querySelector('.flasher').style.left = dis + 'px';
    } else {
        document.querySelector('.flasher').style.left = '28px';
        document.querySelector('.flasher').style.display = 'none';
    }
}

function validate() {
    if (window.tries >= 4) {
        checkWin();
        document.querySelector('.screen').innerHTML = '';
        window.tries = 0;
        document.querySelector('.flasher').style.display = 'block';
    } else {

    }
}

function checkWin() {
    var code = document.querySelector('.screen').innerHTML;
    if (code == pass) {
        document.querySelector('.success').style.display = 'block';
        setTimeout(function() {
            document.querySelector('.success').style.display = 'none';
        }, 2000);
    } else {
        document.querySelector('.error').style.display = 'block';
        setTimeout(function() {
            document.querySelector('.error').style.display = 'none';
        }, 2000);
    }
}