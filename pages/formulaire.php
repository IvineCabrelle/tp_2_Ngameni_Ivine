<!DOCTYPE html>
<html>
<head>
    <title>Formulaire avec adresses répétées</title>  
</head>
<link rel="stylesheet" type="text/css" href="../style css/style2.css" />
<body>
    <form method='post' action='../utils/results.php'>
        <h2>Remplissez les adresses</h2>
        <hr>
        <div1 class="name-field">
        <?php
             // Formulaire permettant d'enregistrer un nouvel utilisateur en fonction des adresses entrées
        $address = $_POST['address'];
        for ($i = 1; $i <= $address; $i++) {
            echo "<br><br><h3>Address $i :</h3>
        <div>
        <label for='street'>Street:</label> 
        <input type='text' name='street $i' id='street' maxlength='50' placeholder='Veuillez entrer votre street' required /><br><br> </div>
        <div>
        <label for='street_nb'>Street Number:</label> 
        <input type='number' name='street_nb $i' id='street_nb' placeholder='Veuillez entrer votre street_nb'required /><br><br> </div>
        <div>
        <label for='type'>Type:</label>
        <select name='type $i' id='type 'placeholder=' veuillez selectionner votre type' required >
            <option value='livraison'>Livraison</option>
            <option value='facturation'>Facturation</option>
            <option value='autre'>Autre</option>
        </select><br><br> </div>
        <div>
        <div1>
        <label for='city'>City:</label><div1>
        <select name='city $i' id='city  placeholder='veuillez selectionner votre city'' required >
            <option value='Montréal'>Montréal</option>
            <option value='Laval'>Laval</option>
            <option value='Toronto'>Toronto</option>
            <option value='Québec'>Québec</option><br><br>
        </select><br><br>
        </div>
        <div><div1>
        <label for='zipcode'>Zipcode:</label></div1>
        <input
            type='text'
            name='zipcode $i'
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