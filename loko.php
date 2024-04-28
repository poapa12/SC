<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMARTCOOK</title>
  <style>
    body {
    background-image: url('https://img.freepik.com/free-photo/design-space-paper-textured-background_53876-42312.jpg?w=1380&t=st=1708281520~exp=1708282120~hmac=828d4f4fadceb1f8f5aeb58517182745dfb2c4f534d5b8f65dcbad5fd2a0a51a;');
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #d4d4d4;
  }
  
  
  header {
    background-image: url('https://d1di2lzuh97fh2.cloudfront.net/files/1w/1wn/1wn1s7.jpg?ph=262f4c5cd1'); /* Path to the image */
    background-size: cover; /* The image will try to fill the entire header */
    background-position: center; /* The image will be centered */
    text-align: center;
    padding: 20px;
    color: #fff; /* Text color */
    backdrop-filter: blur(10px); /* Blur only the background */
  }
  
  
  #filter-section {
    margin-top: 10px;
  }
  
  #logo {
    font-size: 36px;
    margin: 0;
    padding: 0;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-family: 'Arial Black', sans-serif;
  }
  
  /* Minimalism */
  .filter {
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 10px;
  background-color: #f0f0f0;
  color: #333;
  font-family: Arial, sans-serif;
  }
  
  /* Flat Design */
  .filter {
  border: none;
  border-radius: 3px;
  padding: 8px 12px;
  background-color: #3498db;
  color: #fff;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  cursor: pointer;
  transition: background-color 0.3s ease;
  }
  
  .filter:hover {
  background-color: #2980b9;
  }
  
  /* Material Design */
  .filter {
  border: none;
  border-radius: 2px;
  padding: 10px;
  background-color: #e0e0e0;
  color: #333;
  font-family: 'Roboto', sans-serif;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  transition: background-color 0.3s ease, box-shadow 0.3s ease;
  }
  
  .filter:hover {
  background-color: #bdbdbd;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }
  
  
  #search-bar {
    margin-top: 20px; /* Adjust as needed */
    margin-bottom: 20px; /* Adjust as needed */
    text-align: center;
  }
  
  #search-input {
    padding: 8px 15px; /* Adjust padding as needed */
    border-radius: 15px; /* Make the input rounded */
    border: 1px solid #ccc;
    font-size: 14px; /* Adjust font size as needed */
    width: 250px; /* Adjust width as needed */
    margin-right: 10px; /* Adjust as needed */
  }
  
  #search-button {
    padding: 8px 15px; /* Adjust padding as needed */
    border-radius: 15px; /* Make the button rounded */
    border: none;
    background-color: #007bff; /* Adjust color as needed */
    color: white;
    font-size: 14px; /* Adjust font size as needed */
    cursor: pointer;
  }
  
  #search-button:hover {
    background-color: #0056b3; /* Adjust color as needed */
  }
  
  main {
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  
  .recipe {
    border: 1px solid #ccc;
    margin: 10px;
    width: 400px;
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
  }
  
  .recipe img {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }
  
  .recipe-content {
    padding: 20px;
  }
  
  .recipe h2 {
    margin-top: 0;
    margin-bottom: 10px;
  }
  
  .recipe p {
    margin: 0;
  }
  
  .recipe:hover {
    transform: scale(1.05); /* Enlarge the recipe by 5% on hover */
    transition: transform 0.3s ease; /* Smooth transition for enlargement */
  }
  
  #banner {
    background-color: #f0f0f0;
    text-align: center;
    margin-bottom: 20px;
    overflow: hidden; /* Hide content overflow */
  }
  
  #banner img {
    width: 100%; /* Set image width to 100% of parent element width */
    height: 150px; /* Fixed height for the image */
    object-fit: cover; /* Ensure the image fills the parent element */
    filter: blur(3px); /* Blur the image */
  }
  
  #banner .banner-text {
    position: absolute; /* Absolute position for text */
    top: 200px; /* Distance of text from top edge of banner */
    left: 50%; /* Center text horizontally */
    transform: translateX(-50%); /* Shift text left by half its width */
    color: #fff; /* Text color */
    font-family: 'Dancing Script', cursive; /* Romantic font */
    font-size: 36px; /* Larger font size */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Text shadow */
  }
  
  .recipe-cards {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.recipe-card {
  width: 200px; /* Width of each card */
  margin: 10px; /* Spacing between cards */
  border: 1px solid #ccc;
  border-radius: 8px;
  overflow: hidden;
}

.recipe-details {
  padding: 10px;
}

.recipe-details h2 {
  margin-top: 0;
  margin-bottom: 5px;
}

.recipe-details p {
  margin: 0;
}



  @media only screen and (max-width: 768px) {
    header {
      flex-direction: column;
      align-items: flex-start;
    }
  
    #search-bar {
      margin-top: 20px;
    }
  }
  </style>
</head>
<body>
<header>
  <a href="Smartcook.com"></a>
  <h1 id="logo">SMARTCOOK</h1>
  
  <div id="search-bar">
    <input type="text" id="search-input" placeholder="Search...">
    <button id="search-button">Search</button>
  </div>
  
  <div id="filter-section">
    <label for="meal-type-filter">Meal type:</label>
    <select id="meal-type-filter">
      <option value="all">All</option>
      <option value="breakfast">Breakfast</option>
      <option value="lunch">Lunch</option>
      <option value="dinner">Dinner</option>
    </select>

    <label for="ingredient-filter">Ingredients:</label>
    <select id="ingredient-filter">
      <option value="all">All</option>
      <option value="oatmeal">Oatmeal</option>
      <option value="chicken">Chicken</option>
      <option value="vegetables">Vegetables</option>
      <option value="pasta">Pasta</option>
      <option value="fish">Fish</option>
      <option value="tomatoes">Tomatoes</option>
      <option value="eggs">Eggs</option>
      <option value="spinach">Spinach</option>
      <option value="salmon">Salmon</option>
      <option value="strawberries">Strawberries</option>
      <option value="avocado">Avocado</option>
      <option value="lettuce">Lettuce</option>
      <option value="bananas">Bananas</option>
      <option value="kiwi">Kiwi</option>
    </select>

    <label for="allergen-filter">Restrictions:</label>
    <select id="allergen-filter">
      <option value="none">None</option>
      <option value="nuts">Nuts</option>
      <option value="gluten">Gluten</option>
      <option value="lactose">Lactose</option>
      <option value="shellfish">Shellfish</option>
    </select>
  </div>
</header>

<main id="recipes-list" class="recipe-cards">
<?php
require_once("SmartCookClient.php");

$request_data = [
    "attributes" => ["name", "author", "difficulty", "duration", "description"], // Remove ingredients from the request attributes
    "filter" => [
        "author" => [],
        "dish_category" => [],
    ]
];

try {
    $client = new SmartCookClient;
    $client->setRequestData($request_data);
    $response = $client->sendRequest("recipes")->getResponseData();

    if (!empty($response['data'])) {
        foreach ($response['data'] as $recipe) {
            // Add data-* attribute to store recipe information
            echo "<div class='recipe-card' onclick='redirectToRecipeDetail(\"" . urlencode($recipe['name']) . "\", \"" . urlencode($recipe['author']) . "\", \"" . urlencode($recipe['difficulty']) . "\", \"" . urlencode($recipe['duration']) . "\", \"" . urlencode($recipe['description']) . "\")'>";
            echo "<div class='recipe-details'>";
            echo "<h2>" . $recipe['name'] . "</h2>";
            echo "<p><strong>Author:</strong> " . $recipe['author'] . "</p>";
            echo "<p><strong>Difficulty:</strong> " . $recipe['difficulty'] . "</p>"; // Display difficulty
            echo "<p><strong>Preparation Time:</strong> " . $recipe['duration'] . "</p>"; // Display duration
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "No recipes found.";
    }
} catch (Exception $e) {
    echo "Error fetching data: " . $e->getMessage();
}
?>



<script>
    // JavaScript function to redirect to recipe detail page
    function redirectToRecipeDetail(name, author, difficulty, duration, description) {
        // Redirect to recipe_detail.php and pass recipe information through URL parameters
        window.location.href = "recipe_detail.php?name=" + encodeURIComponent(name) + "&author=" + encodeURIComponent(author) + "&difficulty=" + encodeURIComponent(difficulty) + "&duration=" + encodeURIComponent(duration) + "&description=" + encodeURIComponent(description);
    }
    </script>
</main>





</body>
</html>