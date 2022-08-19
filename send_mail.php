<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!-- HeadBand -->
        <section class="headBand">
            <h1><span class="title">Mon Portfolio</span></h1>
        </section>
        <!-- NavBar -->
        <nav class="navbar nav-sticky navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link text-light active" aria-current="page" href="index.html">Accueil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Accueil -->
        <section class="accueil" id="accueil">
            <div class="container form">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                                <?php
                                    if($_POST['nom'] && $_POST['prenom'] && $_POST['mail'] &&$_POST['objet'] && $_POST['message']) {
                                        $nom=htmlspecialchars(addslashes($_POST['nom']));
                                        $prenom=htmlspecialchars(addslashes($_POST['prenom']));
                                        $mail=htmlspecialchars(addslashes($_POST['mail']));
                                        $objet=htmlspecialchars(addslashes($_POST['objet']));
                                        $message=htmlspecialchars(addslashes($_POST['message']));


                                        if(!(isset($nom) && isset($prenom) && isset($mail) && isset($objet) && isset($message))){
                                            echo '<h3>Veuillez remplir tous les champs !</h3>';
                                            header("refresh:4 ; url= index.html");
                                            exit();
                                        }


                                        echo '<h3>Succès</h3>';
                                        header("refresh:4 ; url= index.html");
                                        exit();
                                    }
                                    else {
                                        echo '<h3>Veuillez remplir tous les champs !</h3>';
                                        header("refresh:4 ; url= index.html");
                                        exit();
                                    }
                                ?>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>