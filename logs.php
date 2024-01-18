<!DOCTYPE html>
<html>
<head>
  <title>Logout</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f0f0f0;
    }

    button {
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      border: none;
      border-radius: 5px;
      background-color: #e74c3c;
      color: white;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #c0392b;
    }
  </style>
  <script type="text/javascript">
    function disableBack() { window.history.forward(); }
    setTimeout("disableBack()", 0);
    window.onunload = function () { null };
</script>
</head>
<body>
  <button id="logoutButton">Logout</button>

  <script>
    // Add event listener to the logout button
    document.getElementById('logoutButton').addEventListener('click', function () {
      // Redirect to the logout PHP script to clear sessions
      window.location.href = 'logout.php';
    });

    // Attempt to prevent going back after logout
    setTimeout(function () {
      history.replaceState(null, null, window.location.origin + window.location.pathname);
    }, 0);
  </script>
</body>
</html>
