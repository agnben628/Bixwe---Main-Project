<?php 
// Include the database config file 
include_once '../dbconnect.php'; 
 
if(!empty($_POST["catid"])){ 
    // Fetch state data based on the specific country 
    $catid= $_POST['catid'];
    $query = "SELECT * FROM subcategory,category WHERE subcategory.category_id = $catid and subcategory.category_id = category.category_id ";
    $result = $conn->query($query); 
    $count=1;
    ?>
    <thead>
        <tr class="tm-bg-white">
        <th scope="col">S.N</th>
        <th scope="col" class="text-center">Sub Category</th>
        <th scope="col" class="text-center">Category</th>
        <th scope="col" class="text-center">Action</th>
        </tr>
    </thead>
    <?php
    if($result->num_rows > 0){ 
        while($row = $result->fetch_assoc()){ 
            ?> 
            
            <tr>
                                    <td><?=$count?></td>
                                    <td><?=$row['sub_category']?></td>
                                    <td><?=$row["category"]?></td>   
                                    <td><div class="d-flex align-items-center">
                            <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                              Edit
                              <i class="typcn typcn-edit btn-icon-append"></i>                          
                            </button>
                            <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                              Delete
                              <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
                            </button>
                          </div></td>
                                    </tr>
                                    
            <?php
            $count=$count+1;
    } 
    }else{ 
        echo '<option >Sub category not available</option>'; 
    } 
}
?>
