<!DOCTYPE html>
<html>
  <head>
    <title>Customer Interaction</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="formChecker.js"></script>
  </head>
  <body>
    <?php
    $shipping = 0;
      if($_POST['Shipping'] == "Overnight Shipping")
      {
        $shipping = 70;
      }
      elseif($_POST['Shipping'] == "3 Day Shipping")
      {
        $shipping = 5;
      }
      echo "Hello User " . $_POST['username'] . "!<br>";
      echo "Your password is currently " . $_POST['pass'] . " and your receipt for your order is below.<br>";

      echo "<table>";
      echo "<tr><td></td><td>Quantity</td><td>Cost Per Item</td><td>Subtotal</td></tr>";
      echo "<tr><td>Cube</td><td>" . $_POST['Box'] . "</td><td>$10.00</td><td>$" . money_format( "%i", ($_POST['Box'] * 10)) . "</td></tr>";
      echo "<tr><td>Circle</td><td>" . $_POST['Circle'] . "</td><td>$20.00</td><td>$" . money_format( "%i", ($_POST['Circle'] * 20)) . "</td></tr>";
      echo "<tr><td>Triangle</td><td>" . $_POST['Triangle'] . "</td><td>$30.00</td><td>$" . money_format( "%i", ($_POST['Triangle'] * 30)) . "</td></tr>";
      echo "<tr><td>Shipping</td><td colspan='2'>". $_POST['Shipping'] ."</td><td>$". money_format( "%i", $shipping). "</td></tr>";
      echo "<tr><td colspan='3'>Total Cost</td><td>$". money_format( "%i", ($_POST['Box'] * 10 + $_POST['Circle'] * 20 + $_POST['Triangle'] * 30 + $shipping)) . "</td></tr>";
      echo "</table>";
    ?>
  </body>
</html>
