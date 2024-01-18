<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Add your modal styles here */
    .modal {
      display: none;
    }
  </style>
  <title>Toggle Buttons</title>
</head>
<body>

  <!-- Add this HTML for the modal popup -->
  <div id="paymentModal" class="modal">
      <div class="modal-content">
          <button id="gcashButton">GCASH</button>
          <button id="cashButton">Cash</button>
      </div>
  </div>

  <!-- Add a button to toggle enable/disable state -->
  <button id="toggleButton">Toggle Buttons</button>

  <!-- Add this JavaScript to handle the modal display -->
  <script>
    document.getElementById('toggleButton').addEventListener('click', function() {
        // Get the buttons
        var gcashButton = document.getElementById('gcashButton');
        var cashButton = document.getElementById('cashButton');

        // Toggle the disabled state of the buttons
        gcashButton.disabled = !gcashButton.disabled;
        cashButton.disabled = !cashButton.disabled;
    });
  </script>
</body>
</html>
