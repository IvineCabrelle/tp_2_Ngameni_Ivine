<?php
function create($data){
    global $conn;
    $query ="INSERT INTO 'address' ('id','street','street_nb','type','city','zipcode') VALUES (NULL,".$data['street'].", ".$data['street_nb'].", ".$data['type'].",".$data['city']."".$data['zipcode'].");";
    $result =mysqli_query($conn,$query);

}
// Lecture des marqueurs (les 3 "?" dans la query)
function createUser($data){
    global $conn;
    $query = "INSERT INTO address VALUES (NULL,?,?,?,?,?)";


// en indiquant leur type ( s = string, i = integer)
    if ($stmt=mysqli_prepare($conn,$query)){
        mysqli_stmt_bind_param($stmt,"sisss",$data['street'],$data['street_nb'],$data['type'],$data['city'] ,$data['zipcode']);
        $result = mysqli_stmt_execute($stmt);
        echo "</br></br>";
        echo "</br></br>";
        var_dump($result);
        echo "</br></br>";
    
    }
}
function updateUser($data){
   // fonction pour changer la valeur intiale d'un utilisateur par une autre
        global $conn;
        $query = "UPDATE address set 
                    street = ?,
                    street_nb = ?,
                    type = ?, 
                    city = ?,
                    zipcode = ?
                    where id = ?";
         if ($stmt=mysqli_prepare($conn,$query)){
           
            mysqli_stmt_bind_param($stmt,"sisss",$data['street'],$data['street_nb'],$data['type'],$data['city'],$data['zipcode'],$data['id']);
            
            $result = mysqli_stmt_execute($stmt);
            echo "</br></br>";
            echo "La valeur initiale a été changé";
            echo "</br></br>";
            var_dump($result);
            return $result;
            echo "</br></br>";
         }
}

function deleteUser(int $id)
{
    // fonction permettant de supprimer les informations d'un utilisateur juste en ayant son id
    global $conn;

    $query = "DELETE FROM address
                WHERE address.id = ?;";

    if ($stmt = mysqli_prepare($conn, $query)) {

        mysqli_stmt_bind_param(
            $stmt,
            "i",
            $id,
        );
        $result = mysqli_stmt_execute($stmt);
    }
}
function getUserById(int $id)
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM address WHERE id = " . $id);

    // avec fetch row : tableau indexé
    $data = mysqli_fetch_assoc($result);

    return $data;
}
