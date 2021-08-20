index.php
<!DOCTYPE html>
< html  lang = " fr " >
< tête >
    < meta  charset = " UTF-8 " >
    < meta  http-equiv = " X-UA-Compatible "  content = " IE=edge " >
    < meta  name = " viewport "  content = " width=device-width, initial-scale=1.0 " >
    < link  rel = " feuille de style "  href = " style.css " >
    < title >Formulaire Inscription Ivoire Geek School</ title >
</ tête >
< corps >
< h2 >Formulaire d'inscription Ivoire geek School</ h2 >
< form   action = " traitement.php "  method = " post "   >
    < p >< i >Complétez le formulaire. Les champs marqués par </ i >< em >*</ em > sont < em >obligatoires</ em ></ p >
  < ensemble de champs >
    < legend >Informations personnelles</ legend >
        <!--      
        //espace réservé : indication grise 
        //obligatoire : il faut renseigner le champs sinon la validation est bloqué
        //autofocus: le curseur est recherché dans cette case au chargement de la page -->
      < label  for = " nom " >Nom < em >*</ em ></ label >
      < input  id = " nom "  name = " nom "  type = " text "  placeholder = " ex: serge "  autofocus = " "  required = " " >< br >
      < label  for = " prenom " >Prénom</ label >
      < input  id = " prenom "  name = " prenom "  type = " text "  placeholder = " ex: kouassi "  autofocus = " " >< br >
      
      
      < label  for = " num_aej " >Numéro AEJ < em >*</ em ></ label >
      < input  id = " num_aej "  name = " num_aej "  type = " nombre "  placeholder = " ex: 85334568778 "  autofocus = " "  requis = " " >< br >
      
    
      < label  for = " num_tel " >Téléphone </ label >
      < input  id = " num_tel "  name = " num_tel "  type = " tel "  placeholder = " ex: 05xxxxxxxx " >< br >
      <!-- // type="tel": bascule le clavier sur un smartphone
      // modèle : expression régulière à vérifier pour valider
       -->
      < label  for = " email " >Email < em >*</ em ></ label >
      < input  id = " email "  name = " email "  type = " email "  placeholder = " sergekouassi@gmail.com "  requis = " " >< br >
 
    
         < label  for = " fonction " >Fonction < em >*</ em ></ label >
        < select  id = " fonction "   name = " fonction "  obligatoire = " "   >
            < option  value = " "  désactivé  sélectionné  masqué >Choisissez votre fonction</ option >
            < option  value = " ref_dig " >référent </ option >
            < option  value = " dev_web " >Développeur Web</ option >
            < option  value = " data_ia " >Data IA</ option >
               
          </ sélectionnez >< br >
          < div >
          < label  for = " date_inscription " >Date d'inscription </ label >
          < input  id = " date_inscription "  name = " date_inscription "  type = " date " />
          </ div >
  
    </ fieldset >
  < p >< type d' entrée  = " soumettre " valeur = " Soummettre " ></ p > 
</ formulaire >
< form  action = " affichage.php "  method = " post " >
    < ensemble de champs >
    < label  for = " afficher " >Afficher la liste des apprenants </ label >
    < input  id = " afficher "  type = " soumettre "  valeur = " Afficher " >
    </ fieldset >
</ formulaire d'inscription >
</ corps >
</ html >