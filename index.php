<!-- 𝕨𝕨𝕨.𝔹𝕠𝕜𝕠𝕟𝕫𝕚.𝕔𝕠𝕞  𝖞𝖉𝖊𝖓𝖌𝖆 𝕿𝖚𝖛𝖚𝖒𝖇𝖚   ★☆♨♫✈❤
    //  ★   =   début de l'information
    //  ☆   =   fin de l'information
    //  ♨   =   Code de l'information premier letre du fichier et dernier lettre du fichier suivi du numéro du commentaire.
    //  ♫   = connexion css all suivi du nom du fichier 
    //  ✈   ♨=#ix   Je suis dans la racine du fichier   ♨=#ix  
    //  
    //
𝕨𝕨𝕨.𝔹𝕠𝕜𝕠𝕟𝕫𝕚.𝕔𝕠𝕞  𝖞𝖉𝖊𝖓𝖌𝖆 𝕿𝖚𝖛𝖚𝖒𝖇𝖚   ★☆♨♫✈❤   -->
<?php 
   session_start() ; 
   $name_bdd = "app.bdd.php"; // création de la variable à verifier pour le bon fonctionnement de la page 
 
// echo $_SERVER['REMOTE_ADDR']  adresse ip ; 
/*
$ip = $_SERVER['REMOTE_ADDR']; // Recuperation de l'IP du visiteur
$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip)); //connection au serveur de ip-api.com et recuperation des données
if($query && $query['status'] == 'success') 
{
	//code avec les variables
	echo "Bonjour visiteur de " . $query['country'] . "," . $query['city'];
}
*/
?>
<link rel="shortcut icon" type="image/png" href="img/bokonzi.png">
<div id="name_bdd" class="<?php  echo $name_bdd; ?>">
<link rel="stylesheet" href="src/app/all/function/css/police.css">
<link rel="stylesheet" href="src/app/all/function/css/margin.css">
<link rel="stylesheet" href="src/app/all/function/css/padding.css">
<link rel="stylesheet" href="src/app/all/function/css/police.css">
<link rel="stylesheet" href="src/app/all/function/css/forms.css">
<link rel="stylesheet" href="src/app/all/function/css/general.css">
<!-- prend la valeur de la variable du div pour le re utiliser dans les fichier check.bdd.php" -->
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
<!DOCTYPE html>
   <html lang="fr">
      <head>         
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">                      
        </head>
      <title>Document</title>
         <body id="body">          
            <?php                
                $filename = 'src/app/all/function/'.$name_bdd; // localisation du fichier $name_bdd
                $file_existe = false ; // verification si le fichier existe 
                if (file_exists($filename)) 
                {
                    $file_existe= true ;   // si le fichier existe changer la valeur de la variable par true                  
                }                                      
                  if(  $file_existe ==true)
                     {
                        require "src/app/all/function/".$name_bdd;  // demande ajouter les elements dans l'emplacement du fichier $name_bdd
                        require "src/app/all/app.php"; // demande d'aouter les valeur ce cet emplacement
                       // Si la basse de donne existe executer ce code                                 
                     }
                       else 
                          {
                             if(isset($_SESSION["newsession"] ))
                                { 
                                   echo '<div class="error"><h1>ERROR</h1></div>'; // si nous avons une eereur indiquer a l'utilisateur cette erreur 
                                } 
                             require 'src/app/all/function/first.form.php' ;  // lors que la variable $name_bdd n'existe pas afficher cette partie du code c'est a dire le premier formulaire qui de mande le nom de la basse de donne ete le mot de passe                  
                          }               
                //    ★   Ajoute le fichier app.php ♨=#ix0002 ☆    
            ?>
    <script src="src/app/all/function/app.js"></script>  
        </body>
    </html>
