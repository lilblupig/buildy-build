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

  //Specify Cost per unit and Days per unit (10 units for bricks)
  $brick_stats = [2,0.1];
  $door_stats = [10,2];
  $window_stats = [15,3];

  $brick_cost = num_wanted()[0] * $brick_stats[0];
  $door_cost = num_wanted()[1] * $door_stats[0];
  $window_cost = num_wanted()[2] * $window_stats[0];

  $brick_time = num_wanted()[0] * $brick_stats[1];
  $door_time = num_wanted()[1] * $door_stats[1];
  $window_time = num_wanted()[2] * $window_stats[1];

  //Calculates total cost and time required for an item and returns them as an array
  function calculate($required, $cost, $time) {
    $total_cost = $required * $cost;
    $total_time = $required * $time;

    $totals = [$total_cost, $total_time];

    return $totals;
  };

 ?>
