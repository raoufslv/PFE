var segments = window.location.pathname.split('/');
var result = segments[segments.length - 1];

console.log(result);

if(result == "MonCompte.html"){
    var identifiants = document.getElementById("identifiants");
    var coordonnées = document.getElementById("coordonnées");
    var identifiantsButton = document.getElementById("identifiantsButton");
    var coordonnéesButton = document.getElementById("coordonnéeButton");
    
    identifiantsButton.addEventListener("click", function() {
        coordonnées.classList.add("d-none");
        identifiants.classList.remove("d-none");
        identifiantsButton.classList.add("text-primary", "fw-bold");
        coordonnéesButton.classList.remove("text-primary", "fw-bold");
    });
    
    coordonnéesButton.addEventListener("click", function() {
        identifiants.classList.add("d-none");
        coordonnées.classList.remove("d-none");
        coordonnéesButton.classList.add("text-primary", "fw-bold");
        identifiantsButton.classList.remove("text-primary", "fw-bold");
    });
    
    document.getElementById("modifierEmail").onclick = function(event) {
        document.getElementById("MonEmail").select();
    }
    
    document.querySelectorAll(".compte-buttons").forEach(function(element) {
        element.addEventListener("click", function() {
            document.querySelectorAll(".compte-buttons").forEach(function(element) {
                element.classList.remove("fw-bold","text-primary");
            });
            document.querySelectorAll(".compte-content").forEach(function(element) {
                element.classList.add("d-none");
            });
            switch (element.id) {
                case "InfoPersoButton":
                    document.getElementById("infoPerso-content").classList.remove("d-none");
                    break;
                case "NotificationButton":
                    document.getElementById("notification-content").classList.remove("d-none");
                    break;
                case "MessagesButton":
                    document.getElementById("Messages-content").classList.remove("d-none");
                    break;
                case "FavorisButton":
                    document.getElementById("Favoris-content").classList.remove("d-none");
                    break;
                case "AnnVuButton":
                    document.getElementById("AnnVue-content").classList.remove("d-none");
                    break;
                case "AnnDepButton":
                    document.getElementById("AnnDep-content").classList.remove("d-none");
                    break;
                default:
                    break;
            }
    
            element.classList.add("fw-bold","text-primary");
        });
    });
}

