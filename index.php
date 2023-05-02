<!DOCTYPE html>

<!-- ICS20-Programming-Assign-04-PHP-SaladOrder -->
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Salad Order, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shyla Oommen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
      
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Shyla's Salads Online Order</title>
  </head>
  <body>
    
    <!-- php echo to print the html to the page -->
    <?php
      echo "<h1>Order Your Salad from Shyla’s Salads™!</h1>";
      echo "<h3>This program takes in online orders, which includes 3 different sizes, a variety of toppings as protein, and 0-2 drinks.</h3><h6>*Toppings and salad dressing are optional.</h6>";
    ?>
    <center>
    <img src="./images/green_salad.jpeg" alt="Green Salad Image" width="10%" height="10%">
      
    <!-- Table with menu items and their prices -->
      <h3>Menu and Prices:</h3>
        <center>
      <table>
        <tr>
          <th class="border">Item</th>
          <th class="border">Price</th>
        </tr>
        <tr>
          <td class="border">Green Salad</td>
          <td class="border">Small: $5.99<br>Medium: $7.99<br>Large: $10.99</td>
        </tr>
        <tr>
          <td class="border">Toppings</td>
          <td class="border">$1.50 each</td>
        </tr>
        <tr>
          <td class="border">Drinks</td>
          <td class="border">$2.50 each</td>
        </tr>
        <tr>
          <td class="border">Salad Dressing</td>
          <td class="border">$0.50</td>
        </tr>
      </table>
        </center>
      
      <!-- form for online order (user input) -->
      <form action="./results.php">
        <!-- Drop-Down Menu for size of salad -->
        <label for="salad-size"><h5>Size of salad:</h5></label>
        <select id="salad-size" name="salad-size">
          <option value="small">Small</option>
          <option value="medium">Medium</option>
          <option value="large">Large</option>
        </select><br><br>
        <h5>Toppings:</h5>
      </center>
        <!-- checkboxes for toppings -->
        <input type="checkbox" id="gr-chicken" name="gr-chicken" value="gr-chicken">
        <label for="gr-chicken"> Grilled Chicken Strips</label><br>
        <input type="checkbox" id="s-steak" name="s-steak" value="s-steak">
        <label for="s-steak"> Stirloin Steak Strips</label><br>
        <input type="checkbox" id="b-beans" name="b-beans" value="b-beans">
        <label for="b-beans"> Black Beans</label><br>
        <input type="checkbox" id="tuna" name="tuna" value="tuna">
        <label for="tuna"> Tuna</label><br>
        <input type="checkbox" id="peanuts" name="peanuts" value="peanut">
        <label for="peanuts"> Peanuts</label>
        <br><br>
        <center>
        <!-- Drop-Down Menu for Number of Drinks -->
        <label for="drinks"><h5>Number of Drinks:</h5></label>
        <select id="drinks" name="drinks">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
        </select><br><br>
        <!-- Radio Button for Salad Dressing -->
        <h5>Salad Dressing?</h5>
        <input type="radio" id="yes" name="salad-dressing" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="no" name="salad-dressing" value="no">
        <label for="no">No</label><br>
        <br><br>
        <!-- SUBMIT BUTTON -->
        <input type="submit" id="button" value="Submit Order!">
          <br>
      </form>
      <!-- iframe for the response to show on the web page. -->
      <iframe id="results" name="results"></iframe>
        </center>
  </body>
</html>