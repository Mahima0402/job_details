<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>About</title>
   
  <!--swiper css link-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

  <!--font awesome cdn link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <!--custom css file link-->
  <link rel="stylesheet" href="css/style.css">
  
  <!-- Google Maps API script -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCvF3KicnetFHt6Ilv8lAwsJojSKe-g3s&libraries=places"></script>

  <style>
    #map {
        height: 400px;
            width: 80%;
            margin: 0 auto; /* Center the map horizontally */
            margin-bottom: 20px;
        }
    
  </style>
</head>
<body>
  <!--header section starts-->
  <section class="header">
    <a href="home.php" class="logo">Details</a>

    <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <?php
        if (isset($_SESSION['username'])) {
          echo '<a href="profile.php">' . $_SESSION['username'] . '</a>';
        } else {
          echo '<a href="login.php">Login</a>';
        }
      ?>     
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
  </section>
  <!--header section ends-->

  <div class="heading">
    <h1>Job details!</h1>
  </div>

  <!-- Form to take city name as input -->
  <form id="cityForm" onsubmit="handleFormSubmit(event)">
    <input type="text" id="cityInput" placeholder="Enter city name" required>
    <button type="submit">Submit</button>
  </form>

  <!-- Map container -->
  <div id="map" style="height: 400px;"></div>

  <!--Footer section starts-->
  <section class="footer">
    <div class="box-container">
      <!-- Footer content here -->
      <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
        </div>

        <div class="box">
            <h3>Extra Links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>Ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i>About us</a>
            <a href="#"><i class="fas fa-angle-right"></i>Privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i>Terms of use</a>
        </div>

        <div class="box">
            <h3>Contact</h3>
            <a href="#"><i class="fas fa-phone"></i> +91 9446-7511235</a>
            <a href="#"><i class="fas fa-phone"></i> +91 8765-544478</a>
            <a href="#"><i class="fas fa-envelope"></i> nihongo@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> Bangalore, India - 530085</a>
        </div>

        <div class="box">
            <h3>Follow</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
        </div>
    </div>
    <div class="credit">Created by <span>Designer</span> | All rights reserved!</div>
  </section>
  <!--Footer section ends-->

  <!--swiper js link-->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <script>
    // Function to handle form submission
    function handleFormSubmit(event) {
      event.preventDefault();

      // Get the city input value
      var city = document.getElementById('cityInput').value;

      // Send an AJAX request to fetch IT company details
      var xhr = new XMLHttpRequest();
      xhr.open('GET', 'fetch_companies.php?city=' + encodeURIComponent(city), true);
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          var response = JSON.parse(xhr.responseText);
          var companyDetails = response.results;
          // Process the IT company details here
          console.log('IT Company Details for ' + city + ':', companyDetails);
          displayMapWithMarkers(companyDetails);
        } else if (xhr.readyState === 4) {
          // Handle the error here
          console.error('Error fetching company details for ' + city + ':', xhr.status);
        }
      };
      xhr.send();
    }

    // Function to display the map with company markers
    // Function to display the map with company markers
// Function to display the map with company markers
function displayMapWithMarkers(companyDetails) {
  // Create a map centered on the specified city
  var map = new google.maps.Map(document.getElementById('map'), {
    center: { lat: companyDetails[0].geometry.location.lat, lng: companyDetails[0].geometry.location.lng },
    zoom: 12
  });

  // Add markers for each company in the companyDetails array
  for (var i = 0; i < companyDetails.length; i++) {
    var company = companyDetails[i];
    var marker = new google.maps.Marker({
      position: { lat: company.geometry.location.lat, lng: company.geometry.location.lng },
      map: map,
      title: company.name,
      label: {
        text: (i + 1).toString(), // Use labels with numbers for markers
        color: 'white',
        fontSize: '14px',
        fontWeight: 'bold'
      }
    });

    // Create a closure to associate each marker with its corresponding info window
    (function(marker, company) {
      // Create an info window for each marker
      var infoWindow = new google.maps.InfoWindow({
        content: `<h2>${company.name}</h2>
                  <p><strong>Location:</strong> ${company.formatted_address}</p>
                  <p><strong>Phone:</strong> ${company.formatted_phone_number}</p>
                  <p><strong>Website:</strong> <a href="${company.website}">${company.website}</a></p>`
      });

      // Add event listener to display the info window when the marker is clicked
      marker.addListener('click', function() {
        infoWindow.open(map, marker);
      });
    })(marker, company);
  }
}


    
  </script>
</body>
</html>