function passShowjs() {
    if (document.getElementById('inp-pass').type == "password") {
        document.getElementById('inp-pass').type = "text";
    } else {
        document.getElementById('inp-pass').type = "password";
    }
}

function passShowjs1(name) {
    if (document.getElementsByName(name).type == "password") {
        //alert('if');
        document.getElementsByName(name).type = "text";
    } else {
        //alert('else');
        document.getElementsByName(name).type = "password";
    }
}