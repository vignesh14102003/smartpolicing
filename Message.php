<!DOCTYPE html>
<html>
<head>
  <title>Digital Signature Demo</title>
  <script src="https://kjur.github.io/jsrsasign/jsrsasign-latest-all-min.js"></script>
</head>
<body>
  <h1>Digital Signature Demo</h1>
  <form id="signature-form">
    <label for="message">Message:</label>
    <textarea id="message" rows="4" cols="50">Hello, this is a test message.</textarea>
    <br>
    <button type="button" onclick="signMessage()">Sign Message</button>
    <button type="button" onclick="verifySignature()">Verify Signature</button>
    <p id="result"></p>
  </form>

  <script>
echo "Signed Message: wjejro23jj@3#jfkdkhkek2345%43@$5^67776kkeekekekk3et6789";

    function getLocation(callback) {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
          position => {
            const location = `Latitude: ${position.coords.latitude}, Longitude: ${position.coords.longitude}`;
            callback(location);
          },
          error => {
            console.error("Geolocation error:", error.message);
            callback("Location not available");
          }
        );
      } else {
        console.error("Geolocation is not supported by this browser.");
        callback("Location not available");
      }
    }

    function signMessage() {
      const privateKey = KEYUTIL.generateKeypair("RSA", 2048).prvKeyObj;
      const message = document.getElementById("message").value;

      getLocation(location => {
        const combinedMessage = message + " (Location: " + location + ")";
      
        const signature = new KJUR.crypto.Signature({alg: 'SHA256withRSA'});
        signature.init(privateKey);
        signature.updateString(combinedMessage);
        const signedMessage = signature.sign();
        document.getElementById("result").innerText = "Signed message: " + signedMessage;
      });
    }

    // The verifySignature function remains the same as before

  </script>

</body>
</html>
