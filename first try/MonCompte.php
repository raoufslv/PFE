<?php
include 'includes/header.php';
?>
    
<main>
    <section class="d-flex container my-5">
        
        <div class="border p-3 rounded mt-5 shadow h-100">
            <h5 class="fw-normal text-center pt-2">Bonjour <span class="fw-bolder text-decoration-underline">Raouf</span></h5>
            <img src="images/profl pircure.svg" class="rounded-circle d-block mx-auto" alt="photo de profile">
            <hr>
            <ul class="no-decoration m-0 p-0">
                <li class="py-2 ps-2">
                    <a href="" class="no-decoration text-reset">
                        <img src="images/icons/account.svg" alt="icon">
                        Information personnelle
                    </a>
                </li>
                <li class="py-2 ps-2">
                    <a href="" class="no-decoration text-reset">
                        <img src="images/icons/notification.svg" alt="icon">
                        Notifications
                    </a>
                </li>
                <li class="py-2 ps-2">
                    <a href="" class="no-decoration text-reset">
                        <img src="images/icons/messages.svg" alt="icon">
                        Messages
                    </a>
                </li>
                <li class="py-2 ps-2">
                    <a href="" class="no-decoration text-reset">
                        <img src="images/icons/favorite.svg" alt="icon">
                        Favoris
                    </a>
                </li>
                <li class="py-2 ps-2">
                    <a href="" class="no-decoration text-reset">
                        <img src="images/icons/Annonce.svg" alt="icon">
                        Annonces vues
                    </a>
                </li>
                <li class="py-2 ps-2">
                    <a href="" class="no-decoration text-reset">
                        <img src="images/icons/Annonce.svg" alt="icon">
                        Annonces déposées
                    </a>
                </li>
                <hr>
                <li class="py-2 ps-2">
                    <a href="" class="no-decoration text-reset">
                        <img src="images/icons/log-out.svg" alt="icon">
                        Se déconnecter
                    </a>
                </li>
            </ul>
        </div>
        <div class="flex-grow-1 ms-5">
            <h1 class="">Information <span class="text-primary">personnelle</span></h1>
            <hr class="w-10 h-2 show-opacity text-primary rounded mt-0">
            <div class="contain d-flex gap-5">
                <button class="btn-lg border-0 bg-body text-primary fw-bold" id="coordonnéeButton">Mes coordonnées</button>
                <button class="btn-lg border-0 bg-body" id="identifiantsButton">Mes identifiants</button>             
            </div>
            <hr class="mt-0 w-75">
            <div class="container mt-5 ms-5" id="coordonnées">
                <div class="row">
                    <div class="col-3">
                        <label for="MonNom" class="mt-1 fs-5 fw-semibold">Nom</label>
                    </div>
                    <div class="col-2 position-relative">
                        <input type="text" class="form-control-plaintext" id="MonNom" value="Abdallah">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-3">
                        <label for="MonPrénom" class="mt-1 fs-5 fw-semibold">Prénom</label>
                    </div>
                    <div class="col-2">
                        <input type="text" class="form-control-plaintext" id="MonPrénom" value="Raouf">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-3">
                        <label for="MaDateNaissance" class="mt-1 fs-5 fw-semibold">Date de naissance</label>
                    </div>
                    <div class="col-2">
                        <input type="text" class="form-control-plaintext" id="MaDateNaissance" value="2001-12-18">
                    </div>
                </div>
                <hr class="w-50">
                <div class="row">
                    <div class="col-3">
                        <label for="MonPays" class="mt-1 fs-5 fw-semibold">Pays</label>
                    </div>
                    <div class="col-2">
                        <input type="text" class="form-control-plaintext" id="MonPays" value="Algérie">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-3">
                        <label for="MaVille" class="mt-1 fs-5 fw-semibold">Ville/CP</label>
                    </div>
                    <div class="col-2">
                        <input type="text" class="form-control-plaintext" id="MaVille" value="Blida">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-3">
                        <label for="MaAdresse" class="mt-1 fs-5 fw-semibold">Adresse</label>
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control-plaintext" id="MaAdresse" value="Blida,Bouarfa rue Mohamed Oukrif n°29">
                    </div>
                </div>
                <div class="col-5 d-md-flex mt-5 justify-content-around">
                    <button class="d-flex gap-1 align-items-center btn btn-primary" id="modifierCoordonnéesbutton" type="button">
                        <p class="fw-bold mb-0">Modifier</p>
                        <img src="images/icons/edit-pen.svg" class="" alt="">
                    </button> 
                    <button class="px-3 btn btn-primary" id="" type="button" disabled>Appliquer</button> 
                </div>
            </div>
            <div class="d-none container mt-5 ms-5" id="identifiants">
                <div class="col-3">
                    <label for="MonEmail" class="mt-1 fs-4 fw-semibold Poppins">E-mail:</label>
                </div>                    
                <div class="row">
                    <div class="col-3">
                        <input type="text" class="form-control-plaintext" id="MonEmail" value="raoufslv09@gmail.com" disabled>
                    </div>
                    <div class="col-3">
                        <button class="border-0 bg-body text-primary fw-semibold mt-1" id="modifierEmail" data-bs-toggle="modal" data-bs-target="#changerEmail">
                            Modifier
                            <img src="images/icons/edit-pen-purple.svg" class="" alt="">
                        </button>
                    </div>
                </div>
                <hr class="my-4 w-50">
                <div class="col-3">
                    <label for="MonMotDePasse" class="mt-1 fs-4 fw-semibold Poppins">Mot de passe:</label>
                </div>
                <div class="row">
                    <div class="col-3">
                        <input type="text" class="form-control-plaintext" id="MonMotDePasse" value="••••••••" disabled>
                    </div>
                    <div class="col-3">
                        <button class="border-0 bg-body text-primary fw-semibold mt-1" id="modifierMotDePasse" data-bs-toggle="modal" data-bs-target="#changerMotDePasse">
                            Modifier
                            <img src="images/icons/edit-pen-purple.svg" class="" alt="">
                        </button>
                    </div>
                    <hr class="d-none w-75 my-1 ms-2">                        
                </div>                    
                <div class="modal fade" id="changerMotDePasse" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class=" modal-dialog modal-dialog-centered">
                        <div class="w-75 modal-content mx-auto">
                            <h5 class="mt-4 Roboto fw-bold text-center">modifier mot de passe</h5>
                            <hr class="w-25 show-opacity text-primary rounded mt-0 d-block mx-auto h-3">
                            <div class="mb-3 mx-5 px-4">
                                <input type="password" class="form-control" id="MonActuelMotDePasse" placeholder="Mot de passe actuel" required> 
                            </div>
                            <div class="mb-3 mx-5 px-4">
                                <input type="password" class="form-control" id="MonNouveauMotDePasse" placeholder="Nouveau mot de passe" required>
                            </div>
                            <div class="mb-3 mx-5 px-4">
                                <input type="password" class="form-control" id="MonConfirmationMotDePasse" placeholder="Confirmation mot de passe" required>
                            </div>
                            <div class="">
                                <button class="btn btn-primary d-block mx-auto mb-3 mt-1" type="button">Appliquer</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="changerEmail" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class=" modal-dialog modal-dialog-centered">
                        <div class="modal-content w-75  mx-auto">
                            <h5 class="mt-4 Roboto fw-bold text-center">modifier votre E-mail</h5>
                            <hr class="w-25 show-opacity text-primary rounded mt-0 d-block mx-auto h-3">
                            <div class="mb-3 mx-5 px-4">
                                <input type="email" class="form-control" id="MonActuelEmail" placeholder="E-mail actuel" value="" required>
                            </div>
                            <div class="mb-3 mx-5 px-4">
                                <input type="email" class="form-control" id="MonNouveauEmail" placeholder="Nouveau E-mail" value="" required>
                            </div>
                            <div class="mb-3 mx-5 px-4">
                                <input type="password" class="form-control" id="MonConfirmationEmail" placeholder="mot de passe" value="" required>
                            </div>
                            <div class="">
                                <button class="btn btn-primary d-block mx-auto mb-3 mt-1" type="button">Appliquer</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="index.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>
</html>