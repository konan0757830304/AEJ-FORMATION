page.php
<!DOCTYPE html >
< html  lang =" fr " >
< tête >
    < meta  charset =" UTF-8 " >
    < meta  http-equiv =" X-UA-Compatible " content =" IE=edge " >
    < meta  name =" viewport " content =" width=device-width, initial-scale=1.0 " >
    < link  rel =" feuille de style " href =" style1.css " >

    < titre > Document </ titre >
</ tête >
< corps >
    
<?php


essayer

{

       $ bdd = new  PDO ( 'mysql:host=localhost;dbname=apprenats_igs' , 'serge' , 'serge@0132' );

}

catch ( Exception  $ e )

{

       die ( "<p> Erreur : probleme d'accès à la base de données </p>" . $ e -> getMessage ());

}



$ réponse = $ bdd -> query ( 'SELECT * FROM apprenants' );


echo  "<table border='1'>
<tr>
<th>Nom</th>
<th>Prénom</th>
<th>Numéro AEJ</th>
<th>Téléphone</th>
<th>E-mail</th>
<th>Fonction</th>
<th>Date d'inscription</th>
</tr>" ;



while ( $ ligne   = $ réponse -> fetch ())

{

    echo  "<tr>" ;
    echo  "<td>" . $ ligne [ ' nom ' ] . "</td>" ;
    echo  "<td>" . $ ligne [ ' prenom ' ] . "</td>" ;
    echo  "<td>" . $ ligne [ 'num_aej' ] . "</td>" ;
    echo  "<td>" . $ ligne [ 'num_tel' ] . "</td>" ;
    echo  "<td>" . $ ligne [ ' e - mail' ] . "</td>" ;
    echo  "<td>" . $ ligne [ ' fonction' ] . "</td>" ;
    echo  "<td>" . $ ligne [ ' date_inscription' ] . "</td>" ; 
    
    echo  "</tr>" ;
}

echo  "</table>" ;


$ réponse -> closeCursor ();

?>

< p > < a  href =" index.php " > < input  type =" submit " value =" Retour " > </ a > </ p >


</ corps >
</ html >