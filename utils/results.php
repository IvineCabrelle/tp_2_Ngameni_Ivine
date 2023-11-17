<?php
require_once "../configuration/connexion.php";
require_once "../functions/crud.php";
require_once "../functions/validation.php";
?>
<h2>Veuillez confirmer vos informations</h2>
<div>
<?php

$data = $_POST;
echo "<form action='../pages/confirmation.php' method='post'>";
if(count($data) > 0) {
    foreach($data as $key => $value) {
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


<!-- 
<?php/*
$iMax = $_POST['address'];
if (isset($_POST)) {
  echo'<br><br>';
  var_dump($_POST);
  echo'<br><br>';
  switch ($_POST['address']) {
    case 'formulaire';
      //Validation des data dans $_POST
$isValid =true;

// username, email, pwd
    if (isset($_POST['street $i'. $i])) {
    $streetIsValid =streetIsValid ($_POST['street'. $i]);
    echo '<br><br>';
    var_dump($streetIsValid);
    }
      $newaddressData = [
        'street'=>$_POST['street'. $i],
        'street_nb'=>$_POST['street_nb'. $i],
        'type'=>$_POST['type' .$i],
        'city'=>$_POST['city'. $i],
        'zipcode'=>$_POST['zipcode'. $i],
      ];
      // creation d'un user dans la DB
    if ($isValid) {
  echo '<br><br> Ça a marché je devrai avoir un  en nouvel addresse';
  
    $createAddress($newaddressData);
    }else {
    //redirect vers signUp page
    header('Location: ../pages/formulaire.php');
    exit;
    }
    $address = getAllUsers();

    ?>
    <a href="../pages/formulaire.php">Retour a la page Enregistrement</a>
    <?php
    $showData('Mes address avec le nouveau',$address);
          break;
        case 'formulaire':
          # code...
          break;
        default:
          // redirect vers index
          break;
      }
    } else { //else de if isset $_POST
      // redirect vers index.php
      header('Location: ../index.php');
    exit;
    }
*/    
?> -->
