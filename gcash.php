<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
        function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
    </script>
  <title>GCash Barcode</title>
</head>
<body>
  <div style="max-width: 600px; margin: 0 auto; text-align: center;">
    <!-- Container for GCash barcode picture -->
    <div style="border: 1px solid #ccc; padding: 20px; margin-bottom: 20px;">
      <img src="assets/img/gcash.jpg" alt="GCash Barcode" style="max-width: 100%; height: auto;">
    </div>

    <!-- Button to redirect back to pos.php -->
    <form action="pos.php">
      <input type="submit" value="Back to POS" style="padding: 10px 20px; font-size: 16px; cursor: pointer; background-color: #4CAF50; color: white; border: none; border-radius: 5px;">
    </form>
  </div>
</body>
</html>
