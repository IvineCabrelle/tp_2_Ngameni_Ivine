<?php
require_once "../configuration/connexion.php";
require_once "../functions/crud.php";
require_once "../functions/validation.php";
?>
<h2>Veuillez confirmer vos informations</h2>
<div>
<?php
var_dump($_POST);
$infos = $_POST;
echo "<form action='../pages/essaie.php' method='post'>";
if(count($infos) > 0) {
    foreach($infos as $key => $value) {
        echo "<input type='text' name='$key' value='$value' readonly /> <br />";
    }
}
echo "<br/> <br />";
echo "<button type='submit'>Confirmer</button>";
echo "<br/>";
echo "<button type='reset'>Effacer</button>";
echo "<br/> <br />";
?>
<!-- <a href ="../pages/formulaire.php">Retour</a>; -->
</form>;

</div>
