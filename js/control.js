window.onload = function () {
    var navbar = document.getElementById("nav");
    window.onscroll = function () {
        if (window.scrollY > 0) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled')
        }
    }
};
function lettre(ch) {
    ok = true;
    i = 0
    while ((i < ch.length) && (ok)) {
        if ((ch.charAt(i).toUpperCase() < "A") || (ch.charAt(i).toUpperCase() > "Z"))
            ok = false
    }
    return ok;
}

function verify() {
    if ((f.T2.value.length < '3') || (f.T2.value.length > '30') || (/[a-zA-Z]/).test(f.T2.value.length) || (f.T2.value == "")) {
        nom.innerHTML = "wrong bitch";
        return false;
    }
}

function verif() {
    var nom = document.getElementById('nom');
    if ((f.T1.value.length != 8) || (isNaN(f.T1.value))) {
        alert('cin incorrect');
        return false;
    }

    else if ((f.T2.value.length < '3') || (f.T2.value.length > '30') || (/[a-zA-Z]/).test(f.T2.value.length) || (f.T2.value == "")) {
        nom.innerHTML = "wrong bitch";
        return false;
    }

    else if ((f.T3.value.length < '3') || (f.T3.value.length > '30') || (lettre(f.T3.value) == false) || (f.T3value == "")) {
        alert('prenom incorrect');
        return false;
    }

    else if ((f.T4.value.length != 8) || (f.T4.value == "") || (isNaN(f.T1.value)) || (f.T4.value.charAt(0) == 0)) {
        alert('votre telephone incorrect');
        return false;
    }

    else if ((f.R1[0].checked == false) && (f.R1[1].checked == false) && (f.R1[2].checked == false)) {
        alert('choisir votre sexe');
        return false;
    }

    else if (f.D1.selectedIndex == 0) {
        alert("Gouvernement invalide");
        return false;
    }

    else if (f.T5.value == "");
    {
        alert("votre sujet est vide");
        return false;
    }
}