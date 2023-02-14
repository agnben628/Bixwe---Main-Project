<?php 
// Include the database config file 
include_once '../dbconnect.php'; 
 
if(!empty($_POST["catid"])){ 
    // Fetch state data based on the specific country 
    $catid= $_POST['catid'];
    $query = "SELECT * FROM subcategory WHERE category_id = $catid";
    $result = $conn->query($query); 
      
    if($result->num_rows > 0){ 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['sub_category_id'].'">'.$row['sub_category'].'</option>';
        } 
    }else{ 
        echo '<option >Sub category not available</option>'; 
    } 
}
?>