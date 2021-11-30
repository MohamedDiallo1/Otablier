
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
        recettes(NomRecette, biographie, photo, difficulte, cout, pays, temps, temps1, temps2, NBPersonne, etape, conseil, message)
        VALUES(:NomRecette, :biographie, :photo, :difficulte, :cout, :pays, :temps, :temps1, :temps2, :NBPersonne, :etape, :conseil, :message)");


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
    $NBPersonne = $_POST["NBPersonne"];
    $etape = $_POST["etape"];
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
    $sql->bindParam(':NBPersonne', $NBPersonne);
    $sql->bindParam(':etape', $etape);
    $sql->bindParam(':conseil', $conseil);
    $sql->bindParam(':message', $message);


    $sql->execute();

    echo '<font style="font-weight:bold;font-size:28px;color:#58ACFA">Valeurs Enregistrées pour verrification</font>' . '<br>';
    echo 'NomRecette: ' . $NomRecette . '<br>';
    echo 'biographie: ' . $biographie . '<br>';
    echo 'photo: ' . $photo . '<br>';
    echo 'difficulte : ' . $difficulte . '<br>';
    echo 'cout : ' . $cout . '<br>';
    echo 'pays : ' . $pays . '<br>';
    echo 'temps : ' . $temps . '<br>';
    echo 'temps1 : ' . $temps1 . '<br>';
    echo 'temps2 : ' . $temps2 . '<br>';
    echo 'NBPersonne : ' . $NBPersonne . '<br>';
    echo 'etape : ' . $etape . '<br>';
    echo 'conseil : ' . $conseil . '<br>';
    echo 'conseil : ' . $conseil . '<br>';

    // header("location:index_html.php");
    //On renvoie l'utilisateur vers la page de remerciement
} catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}

// require('interface.php');
