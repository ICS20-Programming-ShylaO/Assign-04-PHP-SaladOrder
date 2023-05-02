<?php

  //setting constants for tax and prices of sizes, toppings, drinks, and salad dressing
  define("HST", 0.13);
  define("PRICE_SMALL", 5.99);
  define("PRICE_MEDIUM", 7.99);
  define("PRICE_LARGE", 10.99);
  define("PRICE_TOPPINGS", 1.50);
  define("PRICE_DRINKS", 2.50);
  define("PRICE_DRESSING", 0.50);

  //initializing size and salad dressing cost for later if... else if...else statement
  $sizeCost = 0;
  $dressingCost = 0;

  //declaring variables for size, drinks, and dressing
  $size = $_POST["salad-size"];
  $nOfDrinks = isset($_POST["drinks"]) ? $_POST["drinks"] : 0;
  $userDressing = isset($_POST["salad-dressing"]) ? $_POST["salad-dressing"] : "no";

  //initializing variable for the number of toppings
  $nOfToppings = 0;

  //Changing the number of toppings based on the number of checkboxes checked
if (!empty($_POST["checkboxes"])) {
    $nOfToppings = count($_POST["checkboxes"]);
}

  //calculating the total cost of toppings
  $toppingsCost = $nOfToppings * PRICE_TOPPINGS;

  //determining the cost of the size using a if...else if...else statement
  //cost for small size
if ($size == "small") {
    $sizeCost = PRICE_SMALL;
}
  //cost for medium size
elseif ($size == "medium") {
    $sizeCost = PRICE_MEDIUM;
}
  //cost for large size
elseif ($size == "large") {
    $sizeCost = PRICE_LARGE;
}
  //else user did not put a size
else {
    echo "Please enter a size.";
    exit();
}

  //determining the cost of drinks
  $drinksCost = $nOfDrinks * PRICE_DRINKS;
  //to check if the user wanted salad dressing, adds 0.50 to the subtotal
if ($userDressing == "yes") {
    $dressingCost = PRICE_DRESSING;
}
else {
    $dressingCost = 0;
}

  //calculating the totals
  $subtotal = $sizeCost + $toppingsCost + $drinksCost + $dressingCost;
  $tax = $subtotal * HST;
  $total = $subtotal + $tax;

  //displaying the cost (totals) to the screen
  echo "Your subtotal is $" . number_format($subtotal, 2) . ".<br>The amount of HST added is $" . number_format($tax, 2) . ".<br>Your total is $" . number_format($total, 2) . ".";
