<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $titre ?></title>
        <style type="text/css">
            @import url("css/base.css");
            @import url("css/form.css");
            @import url("css/cgu.css");
            @import url("css/corps.css");
        </style>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    </head>
    <body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary ms-1 px-2">
        <a class="navbar-brand" href="#">
            <img src="images/logo_musees.png" alt="Bootstrap" width="50" height="44">
        </a>
        <?php
        if(isLoggedOn()){?>
            <a class="navbar-brand" href="#">Anibi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./?action=nouvelleEntree">Nouvelle entrée</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Visites en cours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Paramétrage des expos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./?action=deconnexion">Deconnexion</a>
                    </li>
                </ul>  <?php }

                else
                {?>
                <a class="navbar-brand" href="#">Anibi</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./?action=nouvelleEntree">Nouvelle entrée</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Visites en cours</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Paramétrage des expos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./?action=connexion">Connexion</a>
                        </li>
                    </ul> <?php }?>
                }
                }
            </div>
        </div>
    </nav>
    <div class="container">