    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../app-assets/vendors/js/ui/jquery.sticky.js"></script>
    
     <script src="../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>

    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <script src="../app-assets/js/scripts/components.js"></script>
    <script src="../app-assets/js/scripts/tooltip/tooltip.js"></script>
    <script src="../app-assets/js/scripts/popover/popover.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- script src="../app-assets/js/scripts/datatables/datatable.js"></script> -->
    <!-- END: Page JS-->

    <script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-firestore.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-auth.js"></script>
    <script>
	    // Your web app's Firebase configuration
	    var firebaseConfig = {
            apiKey: "AIzaSyA784Oz5Mb_6yGB7ZtfWY3Oms5cw_Z2pzU",
    authDomain: "prueba-tiyapuy.firebaseapp.com",
    projectId: "prueba-tiyapuy",
    storageBucket: "prueba-tiyapuy.appspot.com",
    messagingSenderId: "854994069948",
    appId: "1:854994069948:web:cc3721ba9a17d0f39b63b9",
    measurementId: "G-QDKWWZ131J"
        };
        
	    // Initialize Firebase
	    firebase.initializeApp(firebaseConfig);
        
        const db = firebase.firestore();
    
        



        const getUserAuth = () => {
            firebase.auth().onAuthStateChanged(function(user) {
                if (user) {
                    // User is signed in.
                    var displayName = user.displayName;
                    var email = user.email;
                    var emailVerified = user.emailVerified;
                    var photoURL = user.photoURL;
                    var isAnonymous = user.isAnonymous;
                    var uid = user.uid;
                    var providerData = user.providerData;
                    
                    $('.user-name').empty().append(email);
                } else {
                    // User is signed out.
                    // ...
                }
            });
        }

        const logout = () => {
            localStorage.removeItem('user');
            window.location.href = 'login.php';
        };
    </script>
