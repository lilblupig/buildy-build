<?php

  // Put variables for form in a function to stop errors, return entered values as array
  function num_wanted() {
    $bricks_wanted = $_POST["bricks"];
    $doors_wanted = $_POST["doors"];
    $windows_wanted = $_POST["windows"];

    return [$bricks_wanted, $doors_wanted, $windows_wanted];
  };

  // Make an array of item categories
  $things = ["Bricks", "Doors", "Windows"];

  // Build the results table and calculate results
  function build_table($things, $num_wanted) {
    // Use form figures array from num_wanted function: bricks [0], doors [1] windows [2]
    $wanted = $num_wanted;
    // Specify Cost per unit: bricks [0], doors [1] windows [2]
    $cost = [2, 10, 15];
    // Specify Days per unit (10 units for bricks): bricks [0], doors [1] windows [2]
    $time = [0.1, 2, 3];

    echo "
      <table class=\"table\">
        <thead class=\"table-dark\">
          <td>Item</td>
          <td>Number</td>
          <td>Cost</td>
          <td>Time</td>
        </thead>";

    for ($i=0; $i<count($wanted); $i++) {
      // Work out the total cost for the item category
      $category_cost = $wanted[$i] * $cost[$i];
      // Work out the total time for the item category
      $category_time = $wanted[$i] * $time[$i];

      // Make a table row for every item category
      echo "
        <tr>
          <td>$things[$i]</td>
          <td>$wanted[$i]</td>
          <td>£$category_cost</td>
          <td>$category_time days</td>
        </tr>";
    };

    // Calculate the cost of all items categories
    $cost_total = 0;
    for ($i=0; $i<count($wanted); $i++) {
      $cost_total += $cost[$i] * $num_wanted[$i];
    };

    // Calculate the time for all items categories
    $time_total = 0;
    for ($i=0; $i<count($wanted); $i++) {
      $time_total += $time[$i] * $num_wanted[$i];
    };

    // Make the table footer and Grand Totals, and add prompt
    echo "
      <tr class=\"table-dark\">
        <td>Grand Totals</td>
        <td></td>
        <td>$cost_total</td>
        <td>$time_total</td>
      </tr>
    </table>
    <p>If you like what you see, give us a call today!</p>";
  };

 ?>
