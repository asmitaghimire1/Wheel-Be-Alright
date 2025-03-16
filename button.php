<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <style>
            box-sizing:border-box

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('your-background-image.jpg'); /* Add your background image URL */
            background-size: cover;
            background-position: center;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 83%;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
        }

        form {
            display: flex;
            flex-direction: column;
            align-items:left;
            width: 60%;
        }

        label {
            margin-top: 0px;
        }

        input, select, textarea {
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        .location-container {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .location-input {
            position: relative;
            display: flex;
        }

        input#location {
            padding-right: 30px; /* Space for the icon */
        }

        button.location-button {
            background: none;
            border: none;
            cursor: pointer;
            margin-left: -30px; /* Adjust the margin based on your design */
        }

        button {
            padding: 10px;
            background-color: #e74c3c;
            color:black;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s, transform 0.3s;
        }

        button:hover {
            
            color: black;
            transform: translateY(-5px);
        }
</style>
<script>
  openform();
    function submitForm(event) {
            event.preventDefault();

            const fullName = document.getElementById('fullName').value;
            const vehicleType = document.getElementById('vehicleType').value;
            const problemDescription = document.getElementById('problemDescription').value;
            const address = document.getElementById('address').value;
            const email = document.getElementById('email').value;
            const phoneNumber = document.getElementById('phoneNumber').value;
            const location = document.getElementById('location').value;

           
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }

           
            const phoneRegex = /^[0-9]{10}$/;
            if (!phoneRegex.test(phoneNumber)) {
                alert('Please enter a valid phone number (10 digits only).');
                return;
            }

            
            alert('Form submitted successfully!');
            // Additional logic for form submission can be added here
        }

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            const locationInput = document.getElementById('location');
            locationInput.value = `Latitude: ${position.coords.latitude}, Longitude: ${position.coords.longitude}`;
        }
    function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

    </head>

    <body>
      <!-- A button to open the popup form -->
      <button class="open-button" onclick="openForm()">Open Form</button>

<!-- The form -->
<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <label for="fullName">Full Name:</label>
    <input type="text" id="fullName" name="fullName" required>

    <label for="vehicleType">Vehicle Type:</label>
    <select id="vehicleType" name="vehicleType" required>
        <option value="car">Car</option>
        <option value="bike">Bike</option>
    </select>

    <label for="problemDescription">Problem Description:</label>
    <textarea id="problemDescription" name="problemDescription" rows="4" required></textarea>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="phoneNumber">Phone Number:</label>
    <input type="tel" id="phoneNumber" name="phoneNumber" pattern="[0-9]{10}" required>

  
   
        <label for="location">Location:</label>
        <div class="location-container">
        <div class="location-input">
            <input type="text" id="location" name="location" readonly>
            <button type="button" class="location-button" onclick="getLocation()">
                <i class="fas fa-map-marker-alt"></i>
            </button>
            <br>
            </div>
    
  </form>
  </div>
  
  <button type="button" class="btn cancel" onclick="closeForm()">Close</button>

    </body>
</html>