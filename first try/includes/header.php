<?php include 'config/database.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Saas/compile.css">
    <link rel="stylesheet" href="costumeStyle.css">
    <title>La Maison</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark py-3">
        <div class="container">
            <a href="#" class="navbar-brand">
            <img class="img-fluid w-60" src="./images/Logo.svg" alt="logo">
            </a>
            
            <button class="navbar-toggler btn-primary bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item pe-4">
                        <a href="" class="nav-link fw-bold ">
                            <img class="pb-05" src="images/icons/plus.svg" alt="icon">
                            Déposer une annonce
                        </a>
                    </li>
                    <li class="nav-item pe-4">
                        <a href="" class="nav-link fw-bold">
                            <img class="pb-05" src="images/icons/hart.svg" alt="icon">
                            Favoris
                        </a>
                    </li>
                    <li class="nav-item pe-4">
                        <a href="" class="nav-link fw-bold">
                            <img class="pb-05" src="images/icons/Bell.svg" alt="icon">
                            Notifications
                        </a>
                    </li>
                    <li class="nav-item ps-2">
                        <button type="button" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">Se Connecter</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>