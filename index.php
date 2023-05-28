<!DOCTYPE html>
<html>
  <head>
     <!--metadata-->
    <meta charset="utf-8">
    <meta name="description" content="User Input, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Savyon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--for favicon on this page-->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" /> 

 <!--Style on this page-->
    <link rel="stylesheet" href="./css/style.css">

  <title>Number Display</title>
   <script src="./js/script.js"></script>
</head>
<body>
    <h1>Prime Number Check</h1>
    <h3>This program will check if the number entered is prime or not:</h3>
    <table>
      
      <!-- area for user to enter integer -->
      <tr align="center">
        <td valign="top" align="right">
          <form action="" method="post">
            <label for="userNum">Enter a positive integer:</label><br>
            <input type="number" id="userNum" name="userNum" required><br><br>
            <input type="submit" value="Check Prime">
          </form>
        </td>
        <td valign="top" align="left">
          
          <!-- image on this page -->
          <img src="./images/primenumber.jpeg" alt="Prime" width="20%">

          <!--checkbox on this page-->
          <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
            <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
            <span class="mdl-checkbox__label">Check if number is prime!</span>
          </label>
        </td>
      </tr>
    </table>

    <br>
    <div id="display-results">
     <?

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userNum = intval($_POST['userNum']);
    echo "Numbers from 0 to $userNum:<br>";

    if ($userNum >= 0) {
        // Display numbers from 0 to userNum using a for loop for positive numbers
        for ($number = 0; $number <= $userNum; $number++) {
            echo "$number ";
        }
    } else {
        // Display numbers from 0 to userNum using a for loop for negative numbers
        for ($number = 0; $number >= $userNum; $number--) {
            echo "$number ";
        }
    }

    echo "<br>";
    checkPrime($userNum);
}

function checkPrime($userNum) {
    // Initialize the variables
    $message = "";
    $counter = 2;
    $result = 1;

    if ($userNum < 2) {
        $message = "The number $userNum is not prime.";
    } elseif ($userNum == 2) {
        $message = "The number 2 is prime";
    } else {
        // Use a while loop to determine if the number is prime
        while ($counter < $userNum) {
            $result = $userNum / $counter;

            // Statement for not a prime number
            if (is_int($result)) {
                $counter = $userNum + 1;
                $message = "The number $userNum is not a prime number.";
            }

            // Increment the counter
            $counter++;
        }
    }

    // Result for a prime number
    if ($counter == $userNum) {
        $message = "The number $userNum is a prime number.";
    }

    echo $message;
}
?>