
// Fonction qui permet de proposer une autocompletion en fonction de ce qui a été rentré dans l'input. 

$(document).ready(function(){
    $('#rechercher_titre').keyup(function(){
        var valeur = $(this).val();
        $('#resultat_recherche').html('');
        if(valeur != ""){
            $.ajax({
                type : 'POST',
                url : 'recherche_musique.php',
                data : 'titres=' + encodeURIComponent(valeur),
                success : function(data){
                    if(data != ""){
                        $('#resultat_recherche').append(data);
                    }else{
                        document.getElementById('resultat_recherche').innerHTML = "Aucun resultat"
                    }
                }
            });
            
        }
    });
});