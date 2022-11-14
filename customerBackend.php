<html>

<head>
	<title>Checkout</title>
</head>

<body>
	<div id="page-wrap">

		<h1>Checkout</h1>
    <h2>
    <script>


    </script>
  </h2>
        <?php
            $email = $_POST['email'];
            $password = $_POST['password'];
            echo "Welcome to checkout, ";
            echo $email;
            echo "<br>";
            echo "Password: ";
            echo $password;
            echo "<br><br>";



            $mediterranean = $_POST['mediterranean'];
            echo "Mediterranean: ";
            echo $mediterranean;
            echo "<br>";

            $modern = $_POST['modern'];
            echo "Modern: ";
            echo $modern;
            echo "<br>";

            $tropical = $_POST['tropical'];
            echo "Tropical: ";
            echo $tropical;
            echo "<br>";

            $neoclassical = $_POST['neoclassical'];
            echo "Neoclassical: ";
            echo $neoclassical;

            echo "<br>";
            $shipping = $_POST['shipping'];

            $total = 0.00;

            if ($shipping == "7day"){$total+=0.00; echo "Shipping = $0.00";}
            if ($shipping == "50.00"){$total+=50.00; echo "Shipping = $50.00";}
            if ($shipping == "5.00"){$total+=5.00; echo "Shipping = $5.00";}
            echo "<br><br>";

            $total = 40000000*$mediterranean + 30000000*$modern + 20000000*$tropical + 10000000*neoclassical + $total;

            echo "Total: $";
            echo $total;
            echo ".00"

        ?>

	</div>

</body>

</html>
