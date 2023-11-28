function verify(){
    var messagederreurnom = document.getElementById('messagederreurnom');
    var nom = document.querySelector("#nom");
    
    if(nom.value == "" ){
        messagederreurnom.innerHTML = "Veuillez renseigner le champ 'NOM et Prénom'";
        messagederreurnom.classList.add("alert-danger");  
        messagederreurnom.style.display = "block";
    }
    else{
        messagederreurnom.style.display = "none";
    }
}

function verifytel(){
    var messagederreurtel = document.getElementById('messagederreurtel');
    var tel = document.querySelector("#tel");
    
    if(tel.value == "" ){
        messagederreurtel.innerHTML = "Veuillez renseigner le champ 'Téléphone'";
        messagederreurtel.classList.add("alert-danger");  
        messagederreurtel.style.display = "block";
    }
    else{
        messagederreurtel.style.display = "none";
    }
}

function verifymail(){
    var messagederreurmail = document.getElementById('messagederreurmail');
    var mail = document.querySelector("#mail");
    
    if(mail.value == "" ){
        messagederreurmail.innerHTML = "Veuillez renseigner le champ 'E-mail'";
        messagederreurmail.classList.add("alert-danger");  
        messagederreurmail.style.display = "block";
    }
    else{
        messagederreurmail.style.display = "none";
    }
}
function verifymess(){
    var messagederreurmess = document.getElementById('messagederreurmess');
    var mess = document.querySelector("#mess");
    
    if(mess.value == "" ){
        messagederreurmess.innerHTML = "Veuillez renseigner le champ 'mess'";
        messagederreurmess.classList.add("alert-danger");  
        messagederreurmess.style.display = "block";
    }
    else{
        messagederreurmess.style.display = "none";
    }
}