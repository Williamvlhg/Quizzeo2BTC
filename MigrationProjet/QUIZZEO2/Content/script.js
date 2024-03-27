
var options = document.getElementsByClassName("option");
for (var i = 0; i < options.length; i++) {
  options[i].addEventListener("click", function() {
    document.getElementById("welcome").style.display = "none";
  });
}

function validateForm() {
    var password = document.forms["update-user"]["password"].value;
    var confirmPassword = document.forms["update-user"]["password-confirm"].value;

    // Check if passwords match
    if (password !== confirmPassword) {
      alert("Les deux mots de passes sont différents");
      return false; // Prevent form submission
    } else if (confirm('Etes-vous sur de vouloir enregistrer vos modifications ? ')){
        return true; 
    } else {
        return false;
    }
// Allow form submission
  }
  
function deconnexion(){
    if (confirm('Etes-vous sur de vouloir vous déconnecter ?')){
        window.location.href = '../processus/signout.php'
    }
}
