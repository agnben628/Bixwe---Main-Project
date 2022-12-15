<?php    
    include "../dbconnect.php";
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="../adfontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="../adfullcalendar.min.css">
    <!-- https://fullcalendar.io/ -->
    <link rel="stylesheet" href="../adbootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="../admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="../style.css"></link>
       <script type="text/javascript" src="../ajaxWork.js"></script>    
    <script type="text/javascript" src="../script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</head>

<body id="reportsPage">
    <div class="" id="home">
        <div class="container">
        <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl navbar-light bg-light">
                        <a class="navbar-brand" href="admin_index.php">
                            <h3 class="tm-site-title mb-0">Dashboard</h3>
                        </a>
                        <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link d-flex" href="customers.php">
                                        <span>Customers</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex" href="./sellers.php">
                                        <span>Sellers</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex" href="./properties.php">
                                        <span>Properties</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex" href="./product.php">
                                        <span>Product</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex" href="./orders.php">
                                        <span>Orders</span>
                                    </a>
                                </li>
                                &emsp;&emsp;&emsp;&emsp;
                                <li class="nav-item">
                                    <a class="nav-link d-flex" href="../logout.php">
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row tm-content-row tm-mt-big">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <h2 class="tm-block-title d-inline-block" style="color:white;">Customers</h2>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table mt-3">
                        <thead>
                            <tr class="tm-bg-white">
                            <th scope="col">S.N</th>
                            <th scope="col" class="text-center">Username</th>
                            <th scope="col" class="text-center">Email</th>
                            <th scope="col">Contact Number</th>
                            </tr>
                        </thead>
                        <?php
                            include_once "../dbconnect.php";
                            $sql="SELECT * from users where role='Seller'";
                            $result=$conn-> query($sql);
                            $count=1;
                            if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                        ?>
                            <tr>
                            <td><?=$count?></td>
                            <td><?=$row["username"]?></td>
                            <td><?=$row["email"]?></td>
                            <td><?=$row["contact_no"]?></td>
                            </tr>
                            <?php
                            $count=$count+1;

                            }
                            }
                        ?>
                    </table>
                </div>
            </div>
            <footer class="row tm-mt-small">
                <div class="col-12 font-weight-light">
                
                </div>
            </footer>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/utils.js"></script>
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/fullcalendar.min.js"></script>
    <!-- https://fullcalendar.io/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <script>
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            updateChartOptions();
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart
            drawCalendar(); // Calendar

            $(window).resize(function () {
                updateChartOptions();
                updateLineChart();
                updateBarChart();
                reloadPage();
            });
        })
    </script>
</body>
</html>