// on attends que la page soit chargé avant d'executer mon code

window.onload = init;

function  init(){
    console.log("coucou");
    // Met sous écoute le bouton
    // au clic, on va appeler la fonction makeajaxRequest
    $("#btn").on("click", makeAjaxRequest);
}

function makeAjaxRequest(){
    // On appel la method Ajax qui se trouve sur l'objet $
    $.ajax({
        // dans mon objet je peux spécifier plein d'options
        // A quel URL on veux faire la requette Ajax? TOUJOURS OBLIGEE DE SPECIFIER CETTE OPTION
        "url":"ajax-server.php" // URL relative au fichier
    });
}