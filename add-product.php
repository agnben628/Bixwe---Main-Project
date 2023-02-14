<?php    
    include "../dbconnect.php";
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="d-flex p-2">
                            <form enctype='multipart/form-data' action="./seller-product-view.php" method="POST" class="tm-edit-product-form">
                                <div class="input-group mb-3 d-flex">
                                    <label for="category" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Category</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="category" id="category">
                                        <option disabled selected>Select Category</option>
                                            <?php
                                            $sql="SELECT * from category";
                                            $result = $conn-> query($sql);

                                            if ($result-> num_rows > 0){
                                            while($row = $result-> fetch_assoc()){
                                            echo "<option value='".$row['category_id']."'>".$row['category_name'] ."</option>";
                                            }
                                            }
                                            ?>
                                    </select>
                                </div>
                                <div class="input-group mb-3 d-flex">
                                    <label for="subcategory" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Sub Category</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="subcategory" id="subcategory">
                                        <option disabled selected>Select Sub Category</option>
                                        
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Name</label>
                                    <input id="p_name" name="p_name" type="text"class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" required pattern="^\S[a-zA-Z\s]*$">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="description" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Description</label>
                                    <textarea id="p_desc" name="p_desc" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" rows="3" required pattern="^\S[a-zA-Z\s]*$"></textarea>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="price" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label" >Price</label>
                                    <input id="p_price" name="p_price" type="number" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" min="1" required pattern="^\-[0-9]+">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="qty" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Quantity</label>
                                    <input id="qty" name="qty" type="number" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" min="1" required pattern="^[0-9]+">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="cut" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Cut</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="cut" id="cut">
                                        <option disabled selected>Select Cut</option>
                                            <?php
                                            $sql="SELECT * from cut";
                                            $result = $conn-> query($sql);

                                            if ($result-> num_rows > 0){
                                            while($row = $result-> fetch_assoc()){
                                            echo "<option value='".$row['cut_id']."'>".$row['cut_name'] ."</option>";
                                            }
                                            }
                                            ?>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="brand" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Brand</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="brand" id="brand">
                                        <option disabled selected>Select Brand</option>
                                            <?php
                                            $sql="SELECT * from users where role='Seller'";
                                            $result = $conn-> query($sql);

                                            if ($result-> num_rows > 0){
                                            while($row = $result-> fetch_assoc()){
                                            echo "<option value='".$row['user_id']."'>".$row['username'] ."</option>";
                                            }
                                            }
                                            ?>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="bodytype" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Body Type</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="bodytype" id="bodytype">
                                        <option disabled selected>Select Body Type</option>
                                            <?php
                                            $sql="SELECT * from body_type";
                                            $result = $conn-> query($sql);

                                            if ($result-> num_rows > 0){
                                            while($row = $result-> fetch_assoc()){
                                            echo "<option value='".$row['type_id']."'>".$row['body_type_name'] ."</option>";
                                            }
                                            }
                                            ?>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="fade" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Fade</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="fade" id="fade">
                                        <option disabled selected>Select Fade</option>
                                            <?php
                                            $sql="SELECT * from fade";
                                            $result = $conn-> query($sql);

                                            if ($result-> num_rows > 0){
                                            while($row = $result-> fetch_assoc()){
                                            echo "<option value='".$row['entry_id']."'>".$row['fade_name'] ."</option>";
                                            }
                                            }
                                            ?>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="fit" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Fit</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="fit" id="fit">
                                        <option disabled selected>Select Fit</option>
                                            <?php
                                            $sql="SELECT * from fit";
                                            $result = $conn-> query($sql);

                                            if ($result-> num_rows > 0){
                                            while($row = $result-> fetch_assoc()){
                                            echo "<option value='".$row['fit_id']."'>".$row['fit_name'] ."</option>";
                                            }
                                            }
                                            ?>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="feature" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Feature</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="feature" id="feature" multiple="multiple">
                                        <option disabled selected>Select Feature</option>
                                            <?php
                                            $sql="SELECT * from features";
                                            $result = $conn-> query($sql);

                                            if ($result-> num_rows > 0){
                                            while($row = $result-> fetch_assoc()){
                                            echo "<option value='".$row['entry_id']."'>".$row['feature_name'] ."</option>";
                                            }
                                            }
                                            ?>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="material" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Material</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="material" id="material">
                                        <option disabled selected>Select Material</option>
                                            <?php
                                            $sql="SELECT * from material";
                                            $result = $conn-> query($sql);

                                            if ($result-> num_rows > 0){
                                            while($row = $result-> fetch_assoc()){
                                            echo "<option value='".$row['material_id']."'>".$row['material_name'] ."</option>";
                                            }
                                            }
                                            ?>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="pattern" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Pattern</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="pattern" id="pattern">
                                        <option disabled selected>Select Pattern</option>
                                            <?php
                                            $sql="SELECT * from pattern";
                                            $result = $conn-> query($sql);

                                            if ($result-> num_rows > 0){
                                            while($row = $result-> fetch_assoc()){
                                            echo "<option value='".$row['pattern_id']."'>".$row['pattern_name'] ."</option>";
                                            }
                                            }
                                            ?>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="material" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Texture</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="texture" id="texture">
                                        <option disabled selected>Select Texture</option>
                                            <?php
                                            $sql="SELECT * from texture";
                                            $result = $conn-> query($sql);

                                            if ($result-> num_rows > 0){
                                            while($row = $result-> fetch_assoc()){
                                            echo "<option value='".$row['entry_id']."'>".$row['texture_name'] ."</option>";
                                            }
                                            }
                                            ?>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="wear" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Wear</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="wear" id="wear">
                                        <option disabled selected>Select Wear</option>
                                            <?php
                                            $sql="SELECT * from wear";
                                            $result = $conn-> query($sql);

                                            if ($result-> num_rows > 0){
                                            while($row = $result-> fetch_assoc()){
                                            echo "<option value='".$row['wear_id']."'>".$row['wear_name'] ."</option>";
                                            }
                                            }
                                            ?>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="usergroup" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">User Group</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="usergroup" id="usergroup">
                                        <option disabled selected>Select Usergroup</option>
                                            <?php
                                            $sql="SELECT * from usergroup";
                                            $result = $conn-> query($sql);

                                            if ($result-> num_rows > 0){
                                            while($row = $result-> fetch_assoc()){
                                            echo "<option value='".$row['group_id']."'>".$row['group_name'] ."</option>";
                                            }
                                            }
                                            ?>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="file1"class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Image 1</label>
                                    <input type="file" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7-file" id="file1" name="file1">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="file2"class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Image 2</label>
                                    <input type="file" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7-file" id="file2" name="file2">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="file3"class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Image 3</label>
                                    <input type="file" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7-file" id="file3" name="file3">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                        <button type="submit" class="btn btn-primary" id="upload" name="upload">Add</button>
                                    </div>
                                </div>
                            </form>
                         
                    </div>
                
        <footer class="row tm-mt-big">
            <div class="col-12 font-weight-light">
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
       
       
        $(document).ready(function(){
            $('#category').on('change', function(){
                var catID = $(this).val();
                if(catID){
                    $.ajax({
                        type:'POST',
                        url:'dispsubcat.php',
                        data:'catid='+catID,
                        success:function(html){
                            $('#subcategory').html(html); 
                        }
                    }); 
                }else{
                    $('#subcategory').html('<option value="">Select category first</option>');
                }
            });
            
        });

    </script>
    
</body>

</html>
