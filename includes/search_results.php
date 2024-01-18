<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results</title>
    <style>
        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .back-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
<h1>Search Results</h1>
    <a href="../index.php" class="back-button">Back</a>
    <?php
    if (isset($_GET['query'])) {
        $searchQuery = $_GET['query'];

        // Your search logic goes here
        // For demonstration, just displaying the search query
        echo '<h1>Search Results for: ' . htmlspecialchars($searchQuery) . '</h1>';
    } else {
        echo '<h1>No search query provided</h1>';
    }

    // Display the back button in both cases
    echo '<a href="../index.php" class="back-button">Back</a>';
    ?>
    <!-- Add your HTML structure for displaying search results here -->
</body>
</html>
