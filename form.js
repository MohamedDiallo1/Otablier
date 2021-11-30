

let myform = document.getElementById('myform');
myform.addEventListener('submit', function (e) {
    let myInput = document.getElementById('users');
    // "regex"expression reguliere pour forcé le formulaire à accepter juste......./   / 
    let myRegex = /[a-zA-z-\s+$]/;
    // trim()"retire les espace vide "
    if (myInput.value.trim() == "") {
        myError = document.getElementById('error');
        myError.innerHTML = "Le champs nom est requis";
        myError.style.color = 'red';
        myError.style.font = '36px';
        e.preventDefault();

    }
    if (myInput.value.trim() == "") {
        myError = document.getElementById('error1');
        myError.innerHTML = "Le champs biograpgie est requis";
        myError.style.color = 'yellow';
        e.preventDefault();

    }
    if (myInput.value.trim() == "") {
        myError = document.getElementById('error2');
        myError.innerHTML = "Le champs pays d'origine est requis";
        myError.style.color = 'green';
        e.preventDefault();
    }
    if (myInput.value.trim() == "") {
        myError = document.getElementById('error3');
        myError.innerHTML = "Le champs biograpgie est requis";
        myError.style.color = 'red';
        e.preventDefault();


    } else if (myRegex.test(myInput.value) == false) {
        myError = document.getElementById('error');
        myError.innerHTML = "Le nom ne doit contenir que des lettre des tirets uniquement";
        myError.style.color = 'yellow';
        e.preventDefault();

    }


});


