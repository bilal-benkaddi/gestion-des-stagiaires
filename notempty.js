
  function validateForm() {
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var email = document.getElementById("email").value;
    var filiere = document.getElementById("filiere").value;
    var dat_naiss = document.getElementById("dat_naiss").value;

    if (nom == "" || prenom == "" || email == "" || filiere == "" || dat_naiss == "") {
      alert("Tous les champs sont obligatoires.");
      return false;
    }
  }

