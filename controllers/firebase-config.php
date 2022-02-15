<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.6/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.6/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyCKyxdsl1VcyrG5P57S5pIkVhImM3SZWdk",
    authDomain: "varendra-spark.firebaseapp.com",
    projectId: "varendra-spark",
    storageBucket: "varendra-spark.appspot.com",
    messagingSenderId: "90150758705",
    appId: "1:90150758705:web:2670f619fd7e14bbc66810",
    measurementId: "G-3FSZ0EXK9X"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>