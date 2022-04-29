var identifiants = document.getElementById("identifiants");
var coordonnées = document.getElementById("coordonnées");
var identifiantsButton = document.getElementById("identifiantsButton");
var coordonnéesButton = document.getElementById("coordonnéeButton");

document.getElementById("identifiantsButton").addEventListener("click", function() {
    coordonnées.classList.add("d-none");
    identifiants.classList.remove("d-none");
    identifiantsButton.classList.add("text-primary", "fw-bold");
    coordonnéesButton.classList.remove("text-primary", "fw-bold");
});

document.getElementById("coordonnéeButton").addEventListener("click", function() {
    identifiants.classList.add("d-none");
    coordonnées.classList.remove("d-none");
    coordonnéesButton.classList.add("text-primary", "fw-bold");
    identifiantsButton.classList.remove("text-primary", "fw-bold");
});

document.getElementById("modifierEmail").onclick = function(event) {
    document.getElementById("MonEmail").select();
}