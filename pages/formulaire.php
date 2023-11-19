<!DOCTYPE html>
<html>
<head>
    <title>Formulaire avec adresses répétées</title>  
</head>
<link rel="stylesheet" type="text/css" href="../style css/style2.css" />
<body>
    <form method='post' action='../utils/results.php'>
        <h2>Remplissez les adresses</h2>
        <hr><?php
        session_start();
         $iMax = $_POST['address'];
         
         $_SESSION['addressnb']=$_POST['address'];
    
         ?>
        <div1 class="name-field"></div1>
            <label for='valeur' ><b>Nombre de champs</b></label>
            <input type='number' name='valeur' id='valeur' value= "<?php echo"$iMax"?>"
        <?php
// Formulaire permettant d'enregistrer un nouvel utilisateur en fonction des adresses entrées
        for ($i = 1; $i <= $iMax; $i++) {
            echo "<br><br><h3><b>Address $i </b>:</h3> 
        <div>
        <label for='street'><b>Street :</b></label> 
        <input type='text' name='street$i' id='street' maxlength='50' placeholder='Veuillez entrer votre street' required /><br><br> </div>
        <div>
        <label for='street_nb'><b>Street Number:</b></label> 
        <input type='number' name='street_nb$i' id='street_nb' placeholder='Veuillez entrer votre street_nb'required /><br><br> </div>
        <div>
        <label for='type'><b>Type :</b></label>
        <select name='type$i' id='type 'placeholder=' veuillez selectionner votre type' required >
            <option value='livraison'>Livraison</option>
            <option value='facturation'>Facturation</option>
            <option value='autre'>Autre</option>
        </select><br><br> </div>
        <div>
        <div1>
        <label for='city'> <b> City:</b></label><div1>
        <select name='city$i' id='city  placeholder='veuillez selectionner votre city'' required >
            <option value='Montréal'>Montréal</option>
            <option value='Laval'>Laval</option>
            <option value='Toronto'>Toronto</option>
            <option value='Québec'>Québec</option><br><br>
        </select><br><br>
        </div>
        <div><div1>
        <label for='zipcode'> <b> Zipcode:</b></label></div1>
        <input
            type='text'
            name='zipcode$i'
            id='zipcode'  
            placeholder='Veuillez entrer votre zipcode '  
        />
        <br><br> </div>
        ";
        }?>
        <a href="../index.php">Retour</a>
        <button type="submit">S'inscrire</button>
        
        </div1>
    </form>  
</body>
</html>