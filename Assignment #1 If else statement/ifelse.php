

<?php


echo "<h1>Movie Rating</h1>";
echo "<hr>";
?>
<h2>Enter Your Rating</h2>
<p>
    Rate the most recent movie that you have watched in numerical values (1 - 5).
</p>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="rate">Rate:</label>
    <input type="text" id="rate" name="rate" placeholder="Enter a number (1-5)" required>
    <button type="submit" name="submit">Submit</button>
</form>

<?php

if (isset($_POST['submit'])) {
    $rate = $_POST['rate'];


    if (is_numeric($rate) && $rate >= 1 && $rate <= 5) {


        if ($rate == 1) {
            $scale = 1.0;
            $description = "Very Dissatisfied";
        } elseif ($rate == 2) {
            $scale = 2.0;
            $description = "Dissatisfied";
        } elseif ($rate == 3) {
            $scale = 3.0;
            $description = "Neutral";
        } elseif ($rate == 4) {
            $scale = 4.0;
            $description = "Satisfied";
        } elseif ($rate == 5) {
            $scale = 5.0;
            $description = "Very Satisfied";
        } else {
            $description = "Error";
        }


        echo "<h2>How satisfied are you?</h2>";
        echo "<p>Your rate is: " . $rate . "</p>";
        echo "<p>Your satisfaction is: " . $description . "</p>";


        echo "<h2>Rating Description</h2>";
        switch ($scale) {
          case 1.0:
              echo "One star... you thought this movie was terrible. <br>";
              break;
          case 2.0:
              echo "Two stars... you were disappointed by this movie. <br>";
              break;
          case 3.0:
              echo "Three stars... this movie was okay, a solid average. <br>";
              break;
          case 4.0:
              echo "Four stars... this movie was very good! <br>";
              break;
          case 5.0:
              echo "Five stars... you consider this a masterpiece! <br>";
              break;
          default:
              echo "Please enter a valid rating between 1 and 5. <br>";
        }

    } else {
        echo "<h2>Error</h2>";
        echo "<p>Please enter a valid numerical value between 1 and 5.</p>";
    }
}
?>



</p>
