<?php
require 'inc/bootstrap.php';
$auth = App::getAuth();
$db = App::getDatabase();
$auth->connectFromCookie($db);
if ($auth->user()) {
    App::redirect('account.php');
}
if (!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])) {
    $user = $auth->login($db, $_POST['username'], $_POST['password'], isset($_POST['remember']));
    $session = Session::getInstance();
    if ($user) {
        $session->setFlash('success', 'Vous êtes maintenant connecté');
        App::redirect('account.php');
    } else {
        $session->setFlash('danger', 'Identifiant ou mot de passe incorrecte');
    }
}
?>
<?php require 'inc/header.php'; ?>

<style>
    .ranger {
        text-align: center;
    }

    #boutton {
        background-color: rgb(79, 223, 35);
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
        display: none;
        background-color: blueviolet;
        border-radius: 200px;
    }

    .ranger2 {
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        background-color: rgba(202, 197, 197, 0.2);
    }

    .ranger1 svg {
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(50deg);
        transform: rotate(-50deg);
    }

    .ranger {
        margin-top: 25px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 30px;
    }

    .ranger button {
        margin: auto;
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
<div class="ranger">
    <div class="ranger1">
        <svg xmlns="http://www.w3.org/2000/svg" width="300" height="300" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
            <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
        </svg>
    </div>
    <div class="ranger2">


        <form action="" method="POST">
            <!-- <h1>Se connecter</h1> -->
            <div class="form-group">

                <input type="text" name="username" class="form-control" placeholder="adresse mail ou nom d'utilisateur" />
            </div>

            <div class="form-group">

                <input type="password" name="password" class="form-control" placeholder="Mot de passe" />
            </div>

            <a href="forget.php">(J'ai oublié mon mot de passe)</a>
            <div class="form-groupa">
                <label>
                    <input type="checkbox" name="remember" value="1" /> Se souvenir de moi
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Se connecter</button>

        </form>
        <button type="submit" id="boutton" class="btn btn-primary"><a href="./register.php">Créer nouveau compte</a> </button>
        <?php require 'inc/footer.php'; ?>
    </div>

</div>

<?php require 'inc/footer.php'; ?>