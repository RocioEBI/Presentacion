//This is a code to validate the tokenData
let accessToken = JSON.parse(sessionStorage.getItem('token_data'));
console.log("acccessToken", accessToken);

//Function to validate the tokendata
if(!accessToken){
    loginApi('anthoni@blockchainebi.com', 'elenayel5A');
    console.log("acccessToken", accessToken);
}else if(accessToken){
    console.log(`Ya existe un accesToken que es ${accessToken}`);
}

//Login Function
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