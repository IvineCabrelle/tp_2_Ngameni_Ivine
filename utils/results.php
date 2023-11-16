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
$infos = $_POST;
echo "<form action=''>";
if(count($infos) > 0) {
    foreach($infos as $key => $value) {
        echo "<input type='text' id='$key' value='$value' readonly /> <br />";
    }
}
echo "<button type='submit'>Confirmer</button>";
echo "</form>";
?>
</div>