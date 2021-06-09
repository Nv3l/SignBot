function passwordShowJeSuisEnCours() {      // montrer password de JeSuisEnCours
    var x = document.getElementById("password_two");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

  function passwordShowSignBot() {    // montrer password de Signbot
    var x = document.getElementById("password_two");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

  function passwordShowSignIn() {     // montrer password de l'inscription
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  
  function passwordShowFirstForm() {      // montrer password du premier formulaire
    var x = document.getElementById("password_one");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }