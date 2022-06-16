    document.getElementById('register-form').style.display = "block";
    document.getElementById('cs-form').style.display = "none";
    document.getElementById('ingenieria-form').style.display = "none"; 
    document.getElementById('humanidades-form').style.display = "none";  

function CargarFormularioRegistro(){
    document.getElementById('register-form').style.display = "block";
    document.getElementById('cs-form').style.display = "none";
    document.getElementById('ingenieria-form').style.display = "none";
    document.getElementById('humanidades-form').style.display = "none";
}

    function CargarFormularioCiencias(){
    document.getElementById('register-form').style.display = "none";
    document.getElementById('cs-form').style.display = "block";
    document.getElementById('ingenieria-form').style.display = "none";
    document.getElementById('humanidades-form').style.display = "none";
}

function CargarFormularioIngenierias(){
    document.getElementById('register-form').style.display = "none";
    document.getElementById('cs-form').style.display = "none";
    document.getElementById('ingenieria-form').style.display = "block";
    document.getElementById('humanidades-form').style.display = "none";
} 

function CargarFormularioHumanidades(){
    document.getElementById('register-form').style.display = "none";
    document.getElementById('cs-form').style.display = "none";
    document.getElementById('ingenieria-form').style.display = "none";
    document.getElementById('humanidades-form').style.display = "block";
}    