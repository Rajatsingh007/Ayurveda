<?php
include_once('header.php');
include_once('db.php');
?>
<div id="page-wrapper" class="gray-bg dashbard-1" style="min-height: 411px;">
       <div class="content-main">

		<!--content-->
		<div class="content-top">
			
			<div class="grid-form col-md-12">
            
            
       <div>
       <!DOCTYPE html>
<html>
<head>
<title>veiw category</title>
</head>
<body>
<div class="table-responsive">
<table class="table table-bordered">
<tr>
<th>Sr.No.</th>
<th>Category Name</th>
<th>Sub Category Name</th>
<th>Product Number</th>
<th>Product Name</th>
<th>Product Image</th>
<th>Product price</th>
<th>Product status</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php

$i=1;
 $sql=mysqli_query($conn,"SELECT category.name, products.product_name,subcategory.subcategory_name,products.product_no,products.product_image,
  products.product_code,products.product_price,products.product_status FROM products INNER JOIN subcategory ON 
  products.subcategory_code=subcategory.subcategory_code INNER JOIN category on products.category_code=category.code");
  
while($row=mysqli_fetch_array($sql)){
?>
<tr>
<td><?php echo $i;$i++; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['subcategory_name']; ?></td>
<td><?php echo $row['product_no']; ?></td>
<td><?php echo $row['product_name']; ?></td>
<td><img src="../images/product/<?php echo $row['product_image']; ?>" height="100" width="100"/></td>
<td><?php echo $row['product_price']; ?></td>
<td><?php if($row['product_status']==1){echo "<p style=color:green>active</p>";}else { echo "<p style=color:red>disable</p>";}  ?></td>
<td><a href="delete_product.php?code=<?php echo $row['product_code']; ?> " onclick="return confirm('Are you sure?')">Delete</a></td>
<td><a href="edit_product.php?code=<?php echo $row['product_code']; ?>">Edit</a></td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>
       
       </div>
 </div>           
            
        </div>
		<div class="clearfix"> </div>
       </div>
     </div>    
            
            
            
 

<?php include_once('footer.php');?>

