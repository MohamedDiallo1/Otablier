<?php
// header("Location:form-merci.html");

$servname = "localhost";
$dbname = "bdotablier2";
$username = "root";
$password = "root";
// test 

//voir si les données passe dans le tableau
// echo "<pre>";
// print_r($_POST);
// print_r($_FILES);
// echo "</pre>";





try {
    //On se connecte à la BDD
    $connect = new PDO("mysql:host=$servname;dbname=$dbname", 'root', 'root');
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //On insère les données reçues si les champs sont remplis

    $sql = $connect->prepare(" INSERT INTO 
        recettes(NomRecette, biographie, photo, difficulte, cout, pays, temps, temps1, temps2, temps3, temps4, temps5, NBPersonne, etape1, etape2, etape3, etape4, etape5, etape6, etape7, etape8, conseil, message)
        VALUES(:NomRecette, :biographie, :photo, :difficulte, :cout, :pays, :temps, :temps1, :temps2, :temps3, :temps4, :temps5, :NBPersonne, :etape1, :etape2, :etape3, :etape4, :etape5, :etape6, :etape7, :etape8, :conseil, :message)");


    //declaration variable

    $NomRecette = $_POST["NomRecette"];
    $biographie = $_POST["biographie"];
    // $photo = $_POST["photo"];
    $photo = $_FILES['photo']['name'];

    $difficulte = $_POST["difficulte"];
    $cout = $_POST["cout"];
    $pays = $_POST["pays"];
    $temps = $_POST["temps"];
    $temps1 = $_POST["temps1"];
    $temps2 = $_POST["temps2"];
    $temps3 = $_POST["temps3"];
    $temps4 = $_POST["temps4"];
    $temps5 = $_POST["temps5"];
    $NBPersonne = $_POST["NBPersonne"];
    $etape1 = $_POST["etape1"];
    $etape2 = $_POST["etape2"];
    $etape3 = $_POST["etape3"];
    $etape4 = $_POST["etape4"];
    $etape5 = $_POST["etape5"];
    $etape6 = $_POST["etape6"];
    $etape7 = $_POST["etape7"];
    $etape8 = $_POST["etape8"];
    $conseil = $_POST["conseil"];
    $message = $_POST["message"];

    //On insère les données ds la bd

    $sql->bindParam(':NomRecette', $NomRecette);
    $sql->bindParam(':biographie', $biographie);
    $sql->bindParam(':photo', $photo);
    $sql->bindParam(':difficulte', $difficulte);
    $sql->bindParam(':cout', $cout);
    $sql->bindParam(':pays', $pays);
    $sql->bindParam(':temps', $temps);
    $sql->bindParam(':temps1', $temps1);
    $sql->bindParam(':temps2', $temps2);
    $sql->bindParam(':temps3', $temps3);
    $sql->bindParam(':temps4', $temps4);
    $sql->bindParam(':temps5', $temps5);
    $sql->bindParam(':NBPersonne', $NBPersonne);
    $sql->bindParam(':etape1', $etape1);
    $sql->bindParam(':etape2', $etape2);
    $sql->bindParam(':etape3', $etape3);
    $sql->bindParam(':etape4', $etape4);
    $sql->bindParam(':etape5', $etape5);
    $sql->bindParam(':etape6', $etape6);
    $sql->bindParam(':etape7', $etape7);
    $sql->bindParam(':etape8', $etape8);
    $sql->bindParam(':conseil', $conseil);
    $sql->bindParam(':message', $message);


    $sql->execute();

    echo '<h2>Valeurs Enregistrées pour verrification</h2>';
    echo 'NomRecette: ' . $NomRecette . '<br>';
    echo 'biographie: ' . $biographie . '<br>';
    echo 'photo: ' . $photo . '<br>';
    echo 'difficulte : ' . $difficulte . '<br>';
    echo 'cout : ' . $cout . '<br>';
    echo 'pays : ' . $pays . '<br>';
    echo 'temps : ' . $temps . '<br>';
    echo 'temps1 : ' . $temps1 . '<br>';
    echo 'temps2 : ' . $temps2 . '<br>';
    echo 'temps3 : ' . $temps3 . '<br>';
    echo 'temps4 : ' . $temps4 . '<br>';
    echo 'temps5 : ' . $temps5 . '<br>';
    echo 'NBPersonne : ' . $NBPersonne . '<br>';
    echo 'etape1 : ' . $etape1 . '<br>';
    echo 'etape2 : ' . $etape2 . '<br>';
    echo 'etape3 : ' . $etape3 . '<br>';
    echo 'etape4 : ' . $etape4 . '<br>';
    echo 'etape5 : ' . $etape5 . '<br>';
    echo 'etape6 : ' . $etape6 . '<br>';
    echo 'etape7 : ' . $etape7 . '<br>';
    echo 'etape8 : ' . $etape8 . '<br>';
    echo 'conseil : ' . $conseil . '<br>';
    echo 'conseil : ' . $conseil . '<br>';









    //On renvoie l'utilisateur vers la page de remerciement
    // header("Location:form-merci.html");
} catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}

// require('interface.php');
