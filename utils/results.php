<?php
require_once "../configuration/connexion.php";
require_once "../functions/crud.php";
require_once "../functions/validation.php";
//La page résults va permettre de faire le traitement de tous les formulaires  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmations des informations</title>
</head>
<body>
<h2>Veuillez confirmer vos informations</h2>
<head>
<link rel="stylesheet" type="text/css" href="../style css/style3.css" /></head>
<body>
<div>
<?php
echo "<b><center> Le nombre d'adresse que vous avez saisi est :</br>";
echo $_SESSION['addressnb'];
?>
<form method='post' action='addToDB.php'>
<?php
for ($i = 1; $i <= $_SESSION['addressnb']; $i++){
    $_SESSION["formData"]=$_POST;
    $streetIsValid=streetIsValid($_POST["street$i"]);
    $zipCodeIsValid =zipCodeIsValid($_POST["zipcode$i"]);
}
$infos = $_POST;
echo "<form action='addToDB.php' method='post'>";
if ($streetIsValid["isValid"] &&$zipCodeIsValid["isValid"]){
if(count($infos) > 0) {
    foreach($infos as $key => $value) {
        echo "<input type='text' name='$key' value='$value' readonly /> <br />";
    }
}
}else {
    echo "<b> erreur de connexion</b>";
    //redirige vers la page du formulaire
    header('Location: ../pages/formulaire.php');
    exit;}
        
echo "<br/> <br />";
echo "<button type='submit'>Confirmer</button>";
echo "<br/>";

?>
</div>
</form>;
</body>
</html>



