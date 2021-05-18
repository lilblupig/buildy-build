<?php

// If form data is submitted, get it and return it as an array, otherwise use nil values to stop stoopid errors on load
  function num_wanted() {
    $bricks_wanted = $_POST["bricks"];
    $doors_wanted = $_POST["doors"];
    $windows_wanted = $_POST["windows"];

    return [$bricks_wanted, $doors_wanted, $windows_wanted];
  };

  if (isset($_POST["submit"])) {
    num_wanted();
  } else {
    $bricks_wanted = "0";
    $doors_wanted = "0";
    $windows_wanted = "0";
  };

  //Calculates total cost and time required for an item and returns them as an array
  function calculate($what, $num_wanted) {
    // Specify Cost per unit: bricks [0], doors [1] windows [2]
    $cost = [2, 10, 15];
    // Specify Days per unit (10 units for bricks): bricks [0], doors [1] windows [2]
    $time = [0.1, 2, 3];
    // Use form figures array from num_wanted function: bricks [0], doors [1] windows [2]
    $wanted = $num_wanted;

    // Determine value retrieved from array by called type indicator in HTML page
    $total_cost = $cost[$what] * $wanted[$what];
    $total_time = $time[$what] * $wanted[$what];

    $totals = [$total_cost, $total_time];

    return $totals;
  };

  function grand_total ($num_wanted) {
    // Specify Cost per unit: bricks [0], doors [1] windows [2]
    $cost = [2, 10, 15];
    // Specify Days per unit (10 units for bricks): bricks [0], doors [1] windows [2]
    $time = [0.1, 2, 3];
    // Use form figures array from num_wanted function: bricks [0], doors [1] windows [2]
    $wanted = $num_wanted;

    $cost_total = 0;
    for ($i=0; $i<3; $i++) {
      $cost_total += $cost[$i] * $num_wanted[$i];
    };

    $time_total = 0;
    for ($i=0; $i<3; $i++) {
      $time_total += $time[$i] * $num_wanted[$i];
    };

    $grand_totals = [$cost_total, $time_total];

    return $grand_totals;
  };

 ?>
