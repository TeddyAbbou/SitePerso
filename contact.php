<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1">
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
    <title>Teddy ABBOU - Contact</title>
    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="contact.css" />
</head>
<body>
<!-- MENU -->
<div id="nav">
    <div id="top">
       <a href="index.html"> <h1>Teddy ABBOU <br> <h2>Etudiant</h2></h1></a>

        <div id="iconeg">
            <a href="https://fr.linkedin.com/in/teddy-abbou-1086b691" target="_blank" ><img src="linkedin.svg" class="ico"></a>
            <a href="https://twitter.com/Teddy_Abbou" target="_blank" ><img src="twitter.svg" class="ico"></a>
            <a href="https://github.com/TeddyAbbou" target="_blank" ><img src="git.svg" class="ico"></a>

        </div>

        <div id="pmenuopen" onclick="menuopen()" >
            <h6>MENU</h6>
            <img src="menu.svg" id="hamburger">
        </div>
        <div id="pmenuclose" onclick="menuclose()">
            <h6>FERMER</h6>
            <img src="croix.svg" id="croix">
        </div>
    </div>
    <div id="menu">
        <ul>
            <li><a href="index.html">Accueil</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><img src="carre.svg" id="carre"/>Contact<img src="carre.svg" id="carre"/></li>
        </ul>
    </div>

    <div id="copyg"><p>
            © Tout droit réservé 2016 by<br>
            Teddy ABBOU</p>
    </div>
</div>


<div id="menuclose">
    <ul>
        <li><a href="index.html">Accueil</a></li>
        <li><a href="portfolio.html"> Portfolio</a></li>
        <li><img src="carre.svg" class="carre"/>Contact<img src="carre.svg" class="carre"/></li>
    </ul>
</div>

<?php

$name = $_POST["name"] ;
$sujet = $_POST['sujet'] ;
$email = $_POST['email'] ;
$msg = $_POST['msg'] ;

$mail_corps  = "Message de : $name\n";
$mail_corps .= "Sujet : $sujet\n";
$mail_corps .= "Email : $email\n\n\n";
$mail_corps .= "Message : $msg";
if (mail('ted.abbou20@gmail.com',Site_Perso,$mail_corps)) {
//    echo $msg_ok;
} else {
//    echo "Une erreur est survenue lors de l'envoi du formulaire par email";
}



?>

<div id ="container">
    <img src="mail.svg" id="enveloppe">
    <img src="plane.svg" id="plane">
    <form method="post" action="contact.php">

        <div id="formulaire">
            <div class="colonne">
                <input type="text" name="name" required="required" placeholder="NOM & PRÉNOM">
                <input type="text" name="sujet" required="required" placeholder="SUJET">
                <input type="email" name="email" required="required" placeholder="EMAIL">
            </div>
            <textarea class="msg" name="msg" rows="5" cols="50" required="required" placeholder="MESSAGE"></textarea>
        </div>
        <div id="dl">
            <img src="demicarreh.svg" class="triangle">
            <div id="texte2"><img src="carre.svg" class="carre"/>
                <input type="submit" value="Envoyer" onclick="envoyer()">
                <img src="carre.svg" class="carre"/></div>
            <img src="demicarreb.svg" class="triangle">
        </div>

    </form>
    <div class="bas">
        <div id="copyp"><p>
                © Tout droit réservé 2016 by<br>
                Teddy ABBOU</p>
        </div>
    </div>
</div>

<script type="text/javascript">
    function  menuopen(){
        document.getElementById("pmenuopen").style.display="none";
        document.getElementById("container").style.display="none";
        document.getElementById("menuclose").style.display="flex";
        document.getElementById("pmenuclose").style.display="flex";
    }
    function menuclose (){
        document.getElementById("menuclose").style.display="none";
        document.getElementById("pmenuopen").style.display="flex";
        document.getElementById("pmenuclose").style.display="none";
        document.getElementById("container").style.display="flex";
    }

    function envoyer(){
        console.log("Kiwi");
        document.getElementById("enveloppe").style.display="none";
        document.getElementById("plane").style.display="flex";
    }

</script>
</body>
</html>
