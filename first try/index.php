<?php
include 'includes/header.php';
?>



<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <form class="modal-content">
            <div class="modal-body">
                <h3 class="text-center Saira" id="staticBackdropLabel">Se Connecter</h3>
                <hr class="w-25 mx-auto mt-0 text-primary show-opacity h-3 rounded">
                <p class="text-center">Vous n'avez pas encore de compte ?  <button class=" text-primary border-0 bg-body" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Créer un compte</button></p>   
                <button class="btn btn-outline-secondary d-flex gap-1 align-items-center mx-auto d-block bg-body rounded py-2 px-3 mb-3">
                    <img class="img-fluid" src="images/icons/Google icon.svg" alt="icon">
                    <p class="Poppins text-secondary mb-0">Se connecter avec Google</p>
                </button>
                <div class="d-flex align-items-center justify-content-center my-3">
                    <hr class="w-25">
                    <p class="mx-2 my-0">ou</p>
                    <hr class="w-25">
                </div>
                <div class="mb-3 mx-5 px-5">
                    <input type="email" class="form-control bg-light" id="floatingInput" placeholder="Votre E-mail" required>
                </div>
                <div class="mb-3 mx-5 px-5">
                    <input type="password" class="form-control bg-light" id="floatingPassword" placeholder="Mot de passe" required>
                    <p class="text-end fs-7">mot de passe oublié ?</p>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-lg btn-primary rounded-pill">Se connecter</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <form class="modal-content">
            <div class="modal-body">
                <h3 class="text-center Roboto" id="staticBackdropLabel">Créer un compte</h3>
                <hr class="w-25 mx-auto mt-0 text-primary show-opacity h-3 rounded">
                <p class="text-center">Vous avez déjà un compte ?<button class=" text-primary border-0 bg-body" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Se connecter</button></p>   
                <button class="btn btn-outline-secondary d-flex gap-1 align-items-center mx-auto d-block bg-body rounded py-2 px-3 mb-3">
                    <img class="img-fluid" src="images/icons/Google icon.svg" alt="icon">
                    <p class="Poppins text-secondary mb-0">Inscrivez-vous avec Google</p>
                </button>
                <div class="d-flex align-items-center justify-content-center my-3">
                    <hr class="w-25">
                    <p class="mx-2 my-0">ou</p>
                    <hr class="w-25">
                </div>
                <div class="d-flex gap-2 mb-3 mx-5 px-5">
                    <input type="text" class="form-control bg-light w-50" id="floatingInput" placeholder="Nom" required>
                    <input type="text" class="form-control bg-light w-50" id="floatingInput" placeholder="Prénom" required>
                </div>
                <div class="mb-3 mx-5 px-5">
                    <input type="email" class="form-control bg-light" id="floatingInput" placeholder="Votre E-mail" required> 
                </div>
                <div class="mb-3 mx-5 px-5">
                    <input type="password" class="form-control bg-light" id="floatingPassword" placeholder="Mot de passe" required>
                </div>
                <div class="form-check ms-5 fs-6 mb-3">
                    <input class="form-check-input" type="checkbox" name="ConditionsBox" id="term&Privacy" checked required>
                    <label class="form-check-label" for="term&Privacy">
                    Acceptez nos <a class="no-decoration fw-semibold" href="">Conditions d'utilisation et Confidentialité.</a>
                    </label>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-lg btn-primary rounded-pill">Créer un compte</button>
                </div>
            </div>
        </form>
    </div>
</div>
<header class="text-center text-md-start mt-3">
    <div class="container">
        <div class="d-sm-flex align-items-center">
            <div class="">
                <h1 class="text-primary">ECHRI & EKRI</h1>
                <p class="fs-4 w-lg-75 pe-md-5 text-secondary">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.                    
                </p>
            </div>
            <img class="img-fluid w-40 d-none d-md-block" src="images/hero pic.png" alt="photo">
        </div>      
    </div>
</header>
<main>
    <div class="container mt-4">
        <div class="container ps-0">
            <button class="btn btn-secondary" type="button">
                <img src="images/icons/rechercher icon.svg" alt="">
                Rapide
            </button>
            <button class="btn btn-primary" type="button">
                <img src="images/icons/advanced icon.svg" alt="">
                Avancée
            </button>
        </div>
        <div class=" d-md-inline-block pt-1 mt-1 pb-2 px-4 bg-secondary rounded text-light">
            <div class="container d-md-flex px-0 ">
                <div class=" me-md-4">
                    <label class="" for="wilayaDropDown">Wilaya</label>
                    <select class="form-select rounded w-md-180 w-xl-200 w-xxl-200" id="wilayaDropDown">
                    <option selected>Wilaya...</option>
                    <option value="1">Alger</option>
                    <option value="2">Blida</option>
                    <option value="3">Tbessa</option>
                    </select>
                </div>
    
                <div class="me-md-4">
                    <label class="" for="TypeDropDown">Type</label>
                    <select class="form-select rounded w-md-180 w-xl-200 w-xxl-200" id="TypeDropDown">
                    <option selected>Type de bien...</option>
                    <option value="1">Maison/Villa</option>
                    <option value="2">Appartement</option>
                    <option value="3">Studio</option>
                    </select> 
                </div>
                
                <div class="me-md-4">
                    <label class="" for="prix">Prix</label>
                    <input type="text" class="form-control rounded w-md-180 w-xl-200 w-xxl-200" id="prix" placeholder="Budget max">
                </div>
    
                <div class="align-self-md-end text-end  pt-3 p-md-0">
                    <button class="btn btn-secondary bg-primary pb-2" type="button">
                        <img src="images/icons/rechercher icon.svg" alt="">
                    </button>     
                </div>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <div class="form-check  fs-55">
                    <input class="form-check-input" type="radio" name="radiobox" id="louerbox">
                    <label class="form-check-label" for="louerbox">
                    Louer
                    </label>
                </div>
                <div class="form-check ms-5 fs-55">
                    <input class="form-check-input" type="radio" name="radiobox" id="acheterbox" checked>
                    <label class="form-check-label" for="acheterbox">
                    Acheter
                    </label>
                </div>
            </div>
        </div>
        
        
    </div>
    <section class="container my-5 py-5">           
        <h6 class="text-center Roboto">notre proposition</h6> 
        <h1 class="text-center mb-5">Top wilaya</h1>
        <div class="row">
            
            <div class="col-md-3 text-light">
                <div class="card">
                    <img class="card-img-top card-img-bottom position-relative" src="images/Wilaya/Alger.svg" alt="Card image cap">
                    <div class="card-img-overlay">
                        <h3 class="card-title position-absolute bottom-15 Roboto">Alger</h3>
                        <p class="card-text position-absolute bottom-10 Poppins fs-7">42 annonces</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mt-4 mt-md-0 text-light">
                <div class="card">
                    <img class="card-img-top card-img-bottom position-relative" src="images/Wilaya/Oran.svg" alt="Card image cap">
                    <div class="card-img-overlay">
                        <h3 class="card-title position-absolute bottom-15 Roboto">Oran</h3>
                        <p class="card-text position-absolute bottom-10 Poppins fs-7">38 annonces</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mt-4 mt-md-0 text-light">
                <div class="card">
                    <img class="card-img-top card-img-bottom position-relative" src="images/Wilaya/Annaba.svg" alt="Card image cap">
                    <div class="card-img-overlay">
                        <h3 class="card-title position-absolute bottom-15 Roboto">Annaba</h3>
                        <p class="card-text position-absolute bottom-10 Poppins fs-7">30 annonces</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mt-4 mt-md-0 text-light">
                <div class="card">
                    <img class="card-img-top card-img-bottom position-relative" src="images/Wilaya/Constantine.svg" alt="Card image cap">
                    <div class="card-img-overlay">
                        <h3 class="card-title position-absolute bottom-15 Roboto">Constantine</h3>
                        <p class="card-text position-absolute bottom-10 Poppins fs-7">19 annonces</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container my-5">
        <div class="accordion accordion-flush w-50" id="accordionFlushExample">
            <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                comment pour avoir une bonne annonce de vente ?
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Vous devez siter toutes les caractéristique de vos bien a fin d'avoir une annonce qui est bien réaliser </div>
            </div>
            </div>
            <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                commen a vendre ou louer ?
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">raha kolch bayn barka maetmag3er sahbyyy !</div>
            </div>
            </div>
            <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                pourquoi les prix sont elvée ?
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Aaaa hadik manich 3aref</div>
            </div>
            </div>
        </div>
    </section>
</main>



<?php include 'includes/footer.php'; ?>
