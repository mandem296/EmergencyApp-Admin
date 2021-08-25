
var firebaseConfig = {
    apiKey: "AIzaSyCK8P1X_XiiTW2axEBED2msGzo2yLMujg4",
    authDomain: "emergency-1d521.firebaseapp.com",
    databaseURL: "https://emergency-1d521-default-rtdb.firebaseio.com",
    projectId: "emergency-1d521",
    storageBucket: "emergency-1d521.appspot.com",
    messagingSenderId: "544959529102",
    appId: "1:544959529102:web:d688ebb825cad360bf89df",
    measurementId: "G-N8BDFSKXLE"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();

const auth= firebase.auth();