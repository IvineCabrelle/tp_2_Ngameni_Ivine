<?php
require_once "../configuration/connexion.php";
require_once "../functions/crud.php";
require_once "../functions/validation.php";
//var_dump($_POST);
?>
<h2>Veuillez confirmer vos informations</h2>
<div>
<?php
var_dump($_POST);
$data = $_POST;
echo "<form action='../pages/confirmation.php' method='post'>";
if(count($data) > 0) {
    foreach($data as $key => $value) {
        echo "<input type='text' name='$key' value='$value' readonly /> <br />";
    }
}
echo "<br/> <br />";
echo "<button type='submit'>Confirmer</button>";
echo "<br/> <br />";
echo "<button type='reset'>Effacer</button>";
echo "<br/> <br />";
echo "<a href = ../pages/formulaire.php'>Retour</a>";
echo "</form>";
?>
</div>
