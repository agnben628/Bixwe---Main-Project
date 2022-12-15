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
                        &emsp;&emsp;&emsp;&emsp;&emsp;
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link d-flex" href="./customers.php">
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
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-dark" style="width: 280px;">
                    <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                    <span class="fs-4">Properties</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                    <li>
                        <a href="manage-category.php" class="nav-link link-dark" id="category">
                        Category
                        </a>
                    </li>
                    <li>
                        <a href="manage-subcategory.php" class="nav-link link-dark" id="subcategory">
                        Sub Category
                        </a>
                    </li>
                    <li>
                        <a href="manage-colors.php" class="nav-link link-dark" id="color">
                        Colors
                        </a>
                    </li>
                    <li>
                        <a href="manage-cut.php" class="nav-link link-dark" id="cut">
                        Cut
                        </a>
                    </li>
                    <li>
                        <a href="manage-fade.php" class="nav-link link-dark" id="fade">
                        Fade
                        </a>
                    </li>
                    <li>
                        <a href="manage-features.php" class="nav-link link-dark" id="features">
                        Features
                        </a>
                    </li>
                    <li>
                        <a href="manage-fit.php" class="nav-link link-dark" id="fit">
                        Fit
                        </a>
                    </li>
                    <li>
                        <a href="manage-material.php" class="nav-link link-dark" id="material">
                        Material
                        </a>
                    </li>
                    <li>
                        <a href="manage-pattern.php" class="nav-link link-dark" id="pattern">
                        Pattern
                        </a>
                    </li>
                    <li>
                        <a href="manage-size.php" class="nav-link link-dark" id="size">
                        Size
                        </a>
                    </li>
                    <li>
                        <a href="manage-texture.php" class="nav-link link-dark" id="texture">
                        Texture
                        </a>
                    </li>
                    <li>
                        <a href="manage-wear.php" class="nav-link link-dark" id="wear">
                        Wear
                        </a>
                    </li>
                    <li>
                        <a href="manage-bodytype.php" class="nav-link link-dark" id="bodytype">
                        Body Type
                        </a>
                    </li>
                    <li>
                        <a href="manage-usergroup.php" class="nav-link link-dark" id="usergroup">
                        User Group
                        </a>
                    </li>
                    </ul>
                    <hr>
                </div>
                
            <!-- row -->
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
        $(document).ready(function(){
            $('#category').on('click', function(){
                    $.ajax({
                        url:'./manage-category.php',
                        success:function(html){
                            $('#propertyform').html(html); 
                        }
                    }); 
            })
        });
    </script>
</body>
</html>