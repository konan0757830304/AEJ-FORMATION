traite.php
<!DOCTYPE html >
< html  lang =" fr " >
< tête >
    < meta  charset =" UTF-8 " >
    < meta  http-equiv =" X-UA-Compatible " content =" IE=edge " >
    < meta  name =" viewport " content =" width=device-width, initial-scale=1.0 " >
    < titre > Document </ titre >
</ tête >
< corps >
<?php
  // Vérifie la provenance du formulaire
  if ( $ _SERVER [ "REQUEST_METHOD" ] == "POST" ) {

    $ nom = $ _POST [ "nom" ];
    $ prenom = $ _POST [ "prénom" ];
    $ num_aej = $ _POST [ "num_aej" ];
    $ num_tel = $ _POST [ "num_tel" ];
    $ email = $ _POST [ "email" ];
    $ fonction = $ _POST [ "fonction" ];
    $ date_inscription = $ _POST [ "date_inscription" ];


    if (! isset ( $ nom )){
      die ( " entrez votre nom" );
    }
     
    if (! isset ( $ email ) || ! filter_var ( $ email , FILTER_VALIDATE_EMAIL )){
      die ( " votre adresse e-mail" );
    }


              //Ouvrir une nouvelle connexion au serveur MySQL


              $ servname = 'localhost' ;
              $ dbname = 'apprents_igs' ;
              $ utilisateur = 'serge' ;
              $ pass = 'serge@1234' ;
              
              essayez {
                  $ dbco = new  PDO ( "mysql:host=$servname;dbname=$dbname" , $ user , $ pass );
                  $ dbco -> setAttribute ( PDO :: ATTR_ERRMODE , PDO :: ERRMODE_EXCEPTION );
                  
                  $ sql = "INSERER DANS les apprenants (nom,prenom,num_aej,num_tel,email,fonction,date_inscription)
                                      VALEURS ('$nom','$prenom','$num_aej','$num_tel','$email','$fonction','$date_inscription')" ;
                  
                  $ dbco -> exec ( $ sql );
                  echo  'Super !!! vous êtes enregistré ' ;
              }
              
              catch ( PDOException  $ e ){
                echo  "<p> Erreur : probleme d'acces a la base de donnees </p>" . $ e -> getMessage ();
              }




  }
?>

< p > < a  href =" index.php " > < input  type =" submit " value =" Retour " > </ a > </ p >

</ corps >
</ html >