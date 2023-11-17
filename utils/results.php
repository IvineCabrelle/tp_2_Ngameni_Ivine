<?php
require_once "../configuration/connexion.php";
require_once "../functions/crud.php";
require_once "../functions/validation.php";
?>
<h2>Veuillez confirmer vos informations</h2>
<div>
<?php
echo $_SESSION['addressnb'];
var_dump($_POST);
for ($i = 1; $i <= $_SESSION['addressnb']; $i++){
    $_SESSION["formData"]=$_POST;
    var_dump($_SESSION["formData"]);
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
}else{
    echo "error";
}

echo "<br/> <br />";
echo "<a href ='addToDB.php'><button type='submit'>Confirmer</button></a>";
echo "<br/>";
echo "<button type='reset'>Effacer</button>";
echo "<br/> <br />";

?>
<!-- <a href ="../pages/formulaire.php">Retour</a>; -->
</form>;

</div>


