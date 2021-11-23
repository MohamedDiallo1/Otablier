<?php
require_once 'inc/bootstrap.php';

// Je veux récupérer le premier utilisateur

if (!empty($_POST)) {

    $errors = array();

    $db = App::getDatabase();
    $validator = new Validator($_POST);
    $validator->isAlpha('username', "Votre pseudo n'est pas valide (alphanumérique)");
    if ($validator->isValid()) {
        $validator->isUniq('username', $db, 'users', 'Ce pseudo est déjà pris');
    }
    $validator->isEmail('email', "Votre email n'est pas valide");
    if ($validator->isValid()) {
        $validator->isUniq('email', $db, 'users', 'Cet email est déjà utilisé pour un autre compte');
    }
    $validator->isConfirmed('password', 'Vous devez rentrer un mot de passe valide');

    if ($validator->isValid()) {

        App::getAuth()->register($db, $_POST['username'], $_POST['password'], $_POST['email']);
        Session::getInstance()->setFlash('success', 'Un email de confirmation vous a été envoyé pour valider votre compte');
        App::redirect('login.php');
    } else {
        $errors = $validator->getErrors();
    }
}
?>

<?php require 'inc/header.php'; ?>

<style>
    form {
        gap: 10px;
        width: 400px;
        margin: 50px auto;
        text-align: center;
        border-radius: 30px;

    }

    .ranger {
        text-align: center;
        padding-bottom: 50px;
    }

    #boutton {
        background-color: blueviolet;
        border: none;
        margin-bottom: 10px;
    }

    #boutton a {
        text-decoration: none;
        color: white;
    }

    form {
        gap: 10px;
        width: 400px;
        margin: 50px auto;
        text-align: center;
        border-radius: 30px;
    }

    .ranger1 {
        margin-top: 90px;
        display: none;
        background-color: rgb(79, 223, 35);
        border-radius: 150px;
        height: 400px;
    }

    .ranger2 {
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        background-color: rgba(202, 197, 197, 0.2);
    }



    .ranger {
        margin-top: 25px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 70px;
    }

    .form-group input {
        width: 280px;
        margin: 6px auto 16px;
    }

    @media screen and (min-width: 995px) {
        .ranger1 {
            display: block;
        }
    }
</style>

<?php if (!empty($errors)) : ?>
    <div class="alert alert-danger">
        <p>Vous n'avez pas rempli le formulaire correctement</p>
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<div class="ranger">
    <div class="ranger1">
        <svg xmlns="http://www.w3.org/2000/svg" width="300" height="300" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
            <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
            <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z" />
        </svg>
    </div>
    <div class="ranger2">
        <form action="" method="POST">
            <h1>S'inscrire</h1>

            <div class="form-group">
                <label for="">Pseudo</label>
                <input type="text" name="username" class="form-control" />
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" />
            </div>

            <div class="form-group">
                <label for="">Mot de passe</label>
                <input type="password" name="password" class="form-control" />
            </div>

            <div class="form-group">
                <label for="">Confirmez votre mot de passe</label>
                <input type="password" name="password_confirm" class="form-control" />
            </div>

            <div class="form-group">
                <label for="photo">Ajouter une photo: </label>
                <input type="file" accept="image/png, image/jpeg" name="photo[]" id="photo" multiple>
            </div>

            <button type="submit" class="btn btn-primary">M'inscrire</button>

        </form>
        <button type="submit" id="boutton" class="btn btn-primary"><a href="./login.php">J'ai déjà un compte</a> </button>
    </div>


    <?php require 'inc/footer.php'; ?>