const formLogin = document.getElementById("productoForm");

const login = async () => {
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  let user = await firebase
    .auth()
    .signInWithEmailAndPassword(email, password)
    .catch(function (error) {
      // Handle Errors here.
      var errorCode = error.code;
      var errorMessage = error.message;
      //alert('No se ha iniciado');
    });

  if (user) {
    console.log("logeado", user);
    localStorage.setItem("user", JSON.stringify(user));
    loginApi(email, password);
    window.location.href = "index.php";
  } else {
    console.log("no logueado", user);
  }

  //localStorage.setItem('user', JSON.stringify(user));
};

 async function loginApi(email, password) {
   let response = await fetch("https://stampiz.eu/login", {
     method: "POST",
     headers: {
       "Content-Type": "application/json",
     },
     body: JSON.stringify({
       email: email,
       password: password,
     }),
   });
   let result = await response.json();
   if (result && result.accessToken) {
     sessionStorage.setItem("token_data", JSON.stringify(result.accessToken));
     return result;
   } else throw Error("Invalid AccesToken");
 }

formLogin.addEventListener("submit", async (e) => {
  e.preventDefault();
  login();
});
/*firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;
    
    //console.log(error);
  }); */
