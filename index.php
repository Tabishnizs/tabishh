<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f0f0f0;
      overflow: hidden;
    }

    .loading-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .spinner {
      border: 4px solid rgba(0, 0, 255, 0.3);
      border-top: 4px solid #0000FF;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      animation: spin 2s linear infinite;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
  </style>
  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
      var currentHost = window.location.hostname;

      setTimeout(function() {
        var redirectURL = "request.php"; // Updated URL
        window.location.replace(redirectURL);
      }, 2000); // 2000 milliseconds (4 seconds)
    });
  </script>
</head>
<body>
  <div class="loading-container">
    <div class="spinner"></div>
    <p>Loading page...</p>
  </div>
</body>
</html>