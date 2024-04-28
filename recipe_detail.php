<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f7f7f7;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            margin-bottom: 10px;
        }
        strong {
            font-weight: bold;
        }
        .recipe-details {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <h1>Recipe Details</h1>

    <div class="recipe-details">
        <?php
        // Retrieving recipe information from URL parameters and decoding
        $name = urldecode($_GET['name'] ?? '');
        $author = urldecode($_GET['author'] ?? '');
        $difficulty = urldecode($_GET['difficulty'] ?? '');
        $duration = urldecode($_GET['duration'] ?? '');
        $description = urldecode($_GET['description'] ?? '');

        // Displaying recipe information
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Author:</strong> $author</p>";
        echo "<p><strong>Difficulty:</strong> $difficulty</p>";
        echo "<p><strong>Preparation Time:</strong> $duration</p>";
        echo "<p><strong>Description:</strong> $description</p>";
        ?>
    </div>
</body>
</html>
