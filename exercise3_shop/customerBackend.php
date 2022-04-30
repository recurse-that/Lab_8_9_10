<html>
    <head>
	<title>
		Results Page
    <link rel="stylesheet" href="styles.css">
	</title>
    </head>
	<body>
      <h3> Thank you for ordering! </h3>
      <?php
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        $itemCount[0] = $_POST['item-1-count'];
        $itemCount[1] = $_POST['item-2-count'];
        $itemCount[2] = $_POST['item-3-count'];

        $itemPrice[0] = 1900;
        $itemPrice[1] = 3200;
        $itemPrice[2] = 4800;

        $i = 0;
        // $itemCost = 0;
        $subtotal = 0;

        foreach($itemCount as $item) {
          $itemCost[$i] = $item * $itemPrice[$i];
          $subtotal = $subtotal + $itemCost[$i];
          $i++;
        }

        echo "<div> Your Password: $password </div>";
        echo"<table>
            <tr>
              <th> Items </th>
              <th>Quantity</th>
              <th>Cost Per Item </th>
              <th>Sub Total</th>
            </tr>
              <th>Item 1</th>
              <th>$itemCount[0]</th>
              <th>$itemPrice[0]</th>
              <th>$itemCost[0]</th>
            <tr>
              <th>Item 2</th>
              <th>$itemCount[1]</th>
              <th>$itemPrice[1]</th>
              <th>$itemCost[1]</th>
            </tr>
              <th>Item 3</th>
              <th>$itemCount[2]</th>
              <th>$itemPrice[2]</th>
              <th>$itemCost[2]</th>
            <tr>
              <th>Shipping</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <th>Total Cost</th>
              <th></th>
              <th></th>
              <th>$subtotal</th>
            </tr>";
          echo"</table>"

      ?>


  </body>

</html>
