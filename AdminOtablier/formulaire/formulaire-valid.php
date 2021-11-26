<?php $servname = "localhost";
$dbname = "bdotablier2";
$username = "root";
$password = "root";

//declaration variable

$NomRecette = valid_donnees($_POST["NomRecette"]);
$biographie = valid_donnees($_POST["biographie"]);
// $photo = $_POST["photo"];
$photo = valid_donnees($_FILES['photo']['name']);
$difficulte = valid_donnees($_POST["difficulte"]);
$cout = valid_donnees($_POST["cout"]);
$pays = valid_donnees($_POST["pays"]);
$temps = valid_donnees($_POST["temps"]);
$temps1 = valid_donnees($_POST["temps1"]);
$temps2 = valid_donnees($_POST["temps2"]);
$temps3 = valid_donnees($_POST["temps3"]);
$temps4 = valid_donnees($_POST["temps4"]);
$temps5 = valid_donnees($_POST["temps5"]);
$NBPersonne = valid_donnees($_POST["NBPersonne"]);
$etape1 = valid_donnees($_POST["etape1"]);
$etape2 = valid_donnees($_POST["etape2"]);
$etape3 = valid_donnees($_POST["etape3"]);
$etape4 = valid_donnees($_POST["etape4"]);
$etape5 = valid_donnees($_POST["etape5"]);
$etape6 = valid_donnees($_POST["etape7"]);
$etape8 = valid_donnees($_POST["etape8"]);
$conseil = valid_donnees($_POST["conseil"]);
$message = valid_donnees($_POST["message"]);

function valid_donnees($donnees)
{
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}

/*Si les champs NomRecetteet, biographie ,difficulte ..........ne sont pas vides et si les donnees ont
     *bien la forme attendue...*/
if (
    !empty($NomRecette)
    && strlen($NomRecette) <= 20
    && preg_match("^[A-Za-z '-]+$", $NomRecette)
    && !empty($biographie)
    && strlen($biographie) <= 20
    && preg_match("^[A-Za-z '-]+$", $biographie)
    && !empty($difficulte)
    && strlen($difficulte) <= 20
    && preg_match("^[A-Za-z '-]+$", $difficulte)
    && !empty($cout)
    && strlen($cout) <= 20
    && preg_match("^[A-Za-z '-]+$", $cout)
) {

    try {
        //On se connecte à la BDD
        $connect = new PDO("mysql:host=$servname;dbname=$dbname", 'root', 'root');
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //On insère les données reçues si les champs sont remplis

        $sql = $connect->prepare(" INSERT INTO 
                recettes(NomRecette, biographie, photo, difficulte, cout, pays, temps, temps1, temps2, temps3, temps4, temps5, NBPersonne, etape1, etape2, etape3, etape4, etape5, etape6, etape7, etape8, conseil, message)
                VALUES(:NomRecette, :biographie, :photo, :difficulte, :cout, :pays, :temps, :temps1, :temps2, :temps3, :temps4, :temps5, :NBPersonne, :etape1, :etape2, :etape3, :etape4, :etape5, :etape6, :etape7, :etape8, :conseil, :message)");



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
        print_r($_POST);

        //On renvoie l'utilisateur vers la page de remerciement
        header("Location:form-merci.html");
    } catch (PDOException $e) {
        echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
    }
} else {
    header("location:index_html.php");
}
