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
        $nbAdresses = $_POST['nb_adresses'];
        for ($i = 1; $i <= $nbAdresses; $i++) {
            echo "<br><br><h3>Address $i :</h3>
            <div>
        <label for='id'>id:</label>
        <input type='number' name='id $i' id='id' maxlength='50' required /><br><br></div>
        <div>
        <label for='street'>Street:</label> 
        <input type='text' name='street $i' id='street' maxlength='50' required /><br><br> </div>
        <div>
        <label for='street_nb'>Street Number:</label> 
        <input type='number' name='street_nb $i' id='street_nb' required /><br><br> </div>
        <div>
        <label for='type'>Type:</label>
        <select name='type' id='type $i' required >
            <option value='livraison'>Livraison</option>
            <option value='facturation'>Facturation</option>
            <option value='autre'>Autre</option>
        </select><br><br> </div>
        <div>
        <label for='city'>City:</label>
        <select name='city' id='city $i' required >
            <option value='Montréal'>Montréal</option>
            <option value='Laval'>Laval</option>
            <option value='Toronto'>Toronto</option>
            <option value='Québec'>Québec</option><br><br>
        </select><br><br>
        </div>
        <div>
        <label for='zipcode'>Zipcode:</label>
        <input
            type='text'
            name='zipcode $i'
            id='zipcode'    
        />
        <br><br> </div>
        ";
        }?>
        <button type="submit">S'inscrire</button>
        </div1>
    </form>  
</body>
</html>