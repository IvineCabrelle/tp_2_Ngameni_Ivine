<?php
require_once ('functions/functions.php');
require_once "functions/crud.php";
require_once "./configuration/connexion.php";
?>
/* $server = 'localhost';
<select name="user_id">
<?php
foreach ($addresses as $address) {
    ?>

    <option value="<?php echo $address['id']?>"><?php echo $address['street']?></option>

<?php
}
?>

</select>
<?php

$showData('My address',$address);

?>