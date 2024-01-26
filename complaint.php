<!DOCTYPE html>
<html>
<head>
  <title>Complaint Lodging place</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    #messages {
      border: 1px solid #ddd;
      padding: 10px;
      max-height: 300px;
      overflow-y: auto;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Lodge Your Complaint </h1> <br><br>
    Username: <span id="username">Anonymous</span><br> 
    <p id="userLocation">Location: Fetching...</p>
    <div id="messages"></div>
    <textarea id="messageInput" rows=5 cols=75> Type your Complaint here...  </textarea><br><br>
    <button onclick="sendMessage()">Send</button>
  </div>

  <script>
    function updateUserInfo(name, location) {
      const usernameElement = document.getElementById("username");
      const userLocationElement = document.getElementById("userLocation");

      usernameElement.textContent = name;
      userLocationElement.textContent = `Location: ${location}`;
    }

    function fetchUserLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
          position => {
            const location = `Latitude: ${position.coords.latitude}, Longitude: ${position.coords.longitude}`;
            updateUserInfo("John Doe", location);
          },
          error => {
            console.error("Geolocation error:", error.message);
            updateUserInfo("John Doe", "Location Not Available");
          }
        );
      } else {
        console.error("Geolocation is not supported by this browser.");
        updateUserInfo("John Doe", "Location Not Available");
      }
    }

    function sendMessage() {
      const messageInput = document.getElementById("messageInput");
      const message = messageInput.value;

      if (message.trim() === "") {
        return;
      }

      const dateTime = new Date().toLocaleString();
      const user = document.getElementById("username").textContent;

      const messageDiv = document.createElement("div");
      messageDiv.className = "message";
      messageDiv.innerHTML = `<strong>${user}:</strong> ${message} <span class="time">${dateTime}</span>`;
      document.getElementById("messages").appendChild(messageDiv);

      messageInput.value = "";
    }

    // Fetch user location and update information
    fetchUserLocation();
  </script>
</body>
</html>
