<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="paho pankoue">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="../Votre_FavIcon.png" type="image/x-icon">
    <title>formulaire O'Tablier</title>
</head>

<body>
    <div class="myImage">
        <img src="<?php echo "ImagesRecette/" . $_FILES['photo']['name'] ?>">
    </div>
    <!-- <div class="myImage">
        <img src="<?php
                    echo $photo; ?>">
    </div> -->
    <?php
    // print_r($_POST);



    //Etape Nom
    if (isset($_POST['NomRecette'])) //On regarde si les variables existent, sinon la condition ne sera pas validée
    {
        echo htmlentities($_POST['NomRecette']) . '<br>';
    }
    // Etape biographie
    if (isset($_POST['biographie'])) {
        echo htmlentities($_POST['biographie']) . '<br>';
    }
    //etape photo
    // if (isset($_FILES['photo'])) {
    //     echo htmlentities($_FILES['photo']['name']) . '<br>';
    // }
    // Etape difficulte
    if (isset($_POST['difficulte'])) {
        echo htmlentities($_POST['difficulte']) . '<br>';
    }
    // Etape cout
    if (isset($_POST['cout'])) {
        echo htmlentities($_POST['cout']) . '<br>';
    }
    // Etape pays

    if (isset($_POST['pays'])) {
        echo htmlentities($_POST['pays']) . '<br>';
    }
    // Etape temps
    if (isset($_POST['temps'])) {
        echo htmlentities($_POST['temps']) . '<br>';
    }
    // Etape temps
    if (isset($_POST['temps1'])) {
        echo htmlentities($_POST['temps1']) . '<br>';
    }
    // Etape temps
    if (isset($_POST['temps2'])) {
        echo htmlentities($_POST['temps2']) . '<br>';
    }

    if (isset($_POST['NBPeronne'])) {
        echo htmlentities($_POST['NBPersonne']) . '<br>';
    }
    // Etape etape curson
    if (isset($_POST['etape1'])) {
        echo htmlentities($_POST['etape1']) . '<br>';
    }
    if (isset($_POST['etape2'])) {
        echo htmlentities($_POST['etape2']) . '<br>';
    }

    if (isset($_POST['etape3'])) {
        echo htmlentities($_POST['etape3']) . '<br>';
    }

    if (isset($_POST['etape4'])) {
        echo htmlentities($_POST['etape4']) . '<br>';
    }

    if (isset($_POST['etape5'])) {
        echo htmlentities($_POST['etape5']) . '<br>';
    }
    if (isset($_POST['etape6'])) {
        echo htmlentities($_POST['etape6']) . '<br>';
    }

    if (isset($_POST['etape7'])) {
        echo htmlentities($_POST['etape7']) . '<br>';
    }
    if (isset($_POST['etape8'])) {
        echo htmlentities($_POST['etape8']) . '<br>';
    }
    // Etape conseil
    if (isset($_POST['conseil'])) {
        echo htmlentities($_POST['conseil']) . '<br>';
    }
    // Etape comment
    if (isset($_POST['message'])) {
        echo htmlentities($_POST['message']);
    }
    // fin isset


    //
    // Il ya des photos à télécharger vers le serveur

    if (isset($_POST['submit'])) {
        // 1-nom de l'image
        // $_FILES['photo'];
        $name_photo = $_FILES['photo']['name'];

        // 2-le dossier ou se trouve la photo
        $tmp_photo = $_FILES['photo']['tmp_name'];
        $temporaire = $_FILES['photo']['tmp_name'];

        // $extens = strrchr($name_photo, '.');

        //var_dump pour voir si la photo passe
        // var_dump($name_photo);
        // var_dump($extens);

        // 3-extension image
        $extens = strrchr($name_photo, '.');

        //   4-extensions autoriser
        $autoriser = array('.png', '.PNG', '.jpg', '.JPG', '.jpeg', 'JPEG');
        // 5.dossier de destination
        $destination = 'ImagesRecette/' . $name_photo;


        if (in_array($extens, $autoriser)) {
            // ********************
            // *******telechargement de l'image*********
            //   le nombre de point d'interrogation(?) correspond au nombre d'element dans la table image
            if (move_uploaded_file($temporaire, $destination)) {
                // $add = $dbco->prepare("INSERT INTO images(
                //  photo) VALUE(?)");
                // $add->execute($name_photo);


                // echo "telechargement avec succes";
            } else {
                echo "impossible..............";
            }
        } else {
            echo "le fichier n'est pas une image";
        }
    }


    ?>
</body>

</html>