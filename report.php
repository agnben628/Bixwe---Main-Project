<!DOCTYPE html>
<html>
<head>
	<title>Sales Report</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>

</head>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 20px;
		}
		table, th, td {
			border: 1px solid black;
			padding: 5px;
			text-align: center;
		}
		th {
			background-color: #f2f2f2;
		}
	</style>
    
</head>
<body>
<?php
include "../dbconnect.php";
session_start();
$email=$_SESSION["email"];  

// Connect to the database
// Retrieve sales data for the specified year and month
if (isset($_GET['year']) && isset($_GET['month'])) {
    $year = $_GET['year'];
    $month = $_GET['month'];
    $query1=mysqli_query($conn,"select * from users where email='$email'");
    while($row=mysqli_fetch_array($query1))
    {
    $user_id=$row['user_id'];
    $seller_id=$row['user_id'];
    $sql = "SELECT SUM(total_amount) AS total_revenue
    FROM order_items oi
    INNER JOIN orders o ON oi.order_id = o.order_id
    INNER JOIN product p ON oi.product_id = p.prod_id
    WHERE p.brand = $seller_id
    AND MONTH(o.order_date) = $month
    AND YEAR(o.order_date) = $year";
    // Calculate the sales metrics
    $result = mysqli_query($conn, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Output the total revenue for the seller for the specified month and year
    $row = mysqli_fetch_assoc($result);
    echo "<h2>Sales report for $month/$year</h2>";
    $total_revenue = $row['total_revenue'];
    echo "<p>Total Revenue : $total_revenue</p>";
} 
    }
}
    // Generate the sales report
    
  
    echo "<table>";

    $query1=mysqli_query($conn,"select * from users where email='$email'");
    while($row=mysqli_fetch_array($query1))
    {
    $user_id=$row['user_id'];
    $seller_id=$row['user_id'];
  $sql=  "SELECT p.product_name, o.order_date, oi.total_price, o.c_name
FROM order_items oi
INNER JOIN orders o ON oi.order_id = o.order_id
INNER JOIN product p ON oi.product_id = p.prod_id
WHERE p.brand = $seller_id
AND MONTH(o.order_date) = $month
AND YEAR(o.order_date) = $year";
    // Calculate the sales metrics
    $result = mysqli_query($conn, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Output the total revenue for the seller for the specified month and year
    echo "<table>";
    echo "<tr><th>Product_Name</th><th>Customer_Name</th><th>Date</th><th>Amount</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['product_name']."</td>";
        echo "<td>".$row['c_name']."</td>";
        echo "<td>".$row['order_date']."</td>";
        echo "<td>".$row['total_price']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
    }

$query1=mysqli_query($conn,"select * from users where email='$email'");
    while($row=mysqli_fetch_array($query1))
    {
    $user_id=$row['user_id'];
    
    $seller_id=$row['user_id'];
    $sql3 = "SELECT count(oi.product_id) AS number, p.product_name
    FROM order_items oi 
    JOIN orders o ON oi.order_id = o.order_id 
    JOIN product p ON oi.product_id = p.prod_id 
    WHERE  p.brand = $seller_id AND YEAR(o.order_date) = $year AND MONTH(o.order_date) = $month GROUP BY oi.product_id";
    
    $result3 = mysqli_query($conn, $sql3);
    
    // Format the sales data for use with Chart.js
    $labels = array();
    $data = array();
    while ($row = mysqli_fetch_assoc($result3)) {
        array_push($labels, $row['product_name']);
        array_push($data, $row['number']);
    }
}
   
    $labels_json = json_encode($labels);
    $data_json = json_encode($data);
    // Display the sales graph
    echo "<h2>Sales by Product for $month/$year</h2>";
    echo "<canvas id='sales-chart'></canvas>";
    echo "<script>";
    echo "var ctx = document.getElementById('sales-chart').getContext('2d');";
    echo "var salesChart = new Chart(ctx, {";
    echo "    type: 'bar',";
    echo "    data: {";
    echo "        labels: $labels_json,";
    echo "        datasets: [{";
    echo "            label: 'Sales',";
    echo "            data: $data_json,";
    echo "            backgroundColor: [";
    echo "                'rgba(255, 99, 132, 0.2)',";
    echo "                'rgba(54, 162, 235, 0.2)',";
    echo "                'rgba(255, 206, 86, 0.2)',";
    echo "                'rgba(75, 192, 192, 0.2)',";
    echo "                'rgba(153, 102, 255, 0.2)',";
    echo "                'rgba(255, 159, 64, 0.2)'";
    echo "            ],";
    echo "            borderColor: [";
    echo "                'rgba(255, 99, 132, 1)',";
    echo "                'rgba(54, 162, 235, 1)',";
    echo "                'rgba(255, 206, 86, 1)',";
    echo "                'rgba(75, 192, 192, 1)',";
    echo "                'rgba(153, 102, 255, 1)',";
    echo "                'rgba(255, 159, 64, 1)'";
    echo "            ],";
    echo "            borderWidth: 1";
    echo "        }]";
    echo "    }";
    echo "});";
    echo "</script>";

    // Calculate the balance
    $query1=mysqli_query($conn,"select * from users where email='$email'");
    while($row=mysqli_fetch_array($query1))
    {
    $user_id=$row['user_id'];
   
    $sql4 ="SELECT SUM(total_amount) AS total_revenue FROM order_items oi INNER JOIN orders o ON oi.order_id = o.order_id
    INNER JOIN product p ON oi.product_id = p.prod_id
    WHERE p.brand = $seller_id
    AND YEAR(o.order_date) = $year
    AND MONTH(o.order_date) < $month";
    // Calculate the sales metrics
    $result4 = mysqli_query($conn, $sql4);
    $previous_sales = mysqli_fetch_assoc($result4)['total_revenue'];
    $balance = $previous_sales - $total_revenue;

    // Display the balance
    echo "<h2>Revenue as of $month/$year</h2>";
    echo "<p>Previous sales: $previous_sales</p>";
    echo "<p>Total sales: $total_revenue</p>";
    if ($balance > 0) {
        echo "<p>You have a profit of $balance to carry forward.</p>";
    } elseif ($balance < 0) {
        $bal= abs($balance);
        echo "<p>You need to reach the target of $bal, to acquire profit .</p>";
    } else {
        echo "<p>You have no profit from previous months.</p>";
    }
}
    

?>
</body>
</html>