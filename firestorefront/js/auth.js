const formLogin = document.getElementById('productoForm');

const login = async () => {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    let user = await firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        //alert('No se ha iniciado');
    });

    if(user){
        console.log('logeado', user);
        localStorage.setItem('user', JSON.stringify(user));
        window.location.href = '/proceso1.html';
    }else{
        console.log('no logueado', user);
    }
    
    //localStorage.setItem('user', JSON.stringify(user));
}

formLogin.addEventListener('submit', async(e) => {
    e.preventDefault();

    login();

});


const logout = () => {
    localStorage.removeItem('user');
    window.location.href = 'index.html';
};


/*firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;
    
    //console.log(error);
  }); */