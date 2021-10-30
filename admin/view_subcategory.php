<?php
include_once('header.php');
include_once('db.php');
?>
<div id="page-wrapper" class="gray-bg dashbard-1" style="min-height: 411px;">
       <div class="content-main">

		<!--content-->
		<div class="content-top">
			
			<div class="grid-form col-md-10">
            
            
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
<th>Sub Category Code</th>
<th> Status</th>
<th> Image</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php

$i=1;
$sql=mysqli_query($conn,"SELECT category.name,subcategory.subcategory_code, subcategory.subcategory_name, subcategory.file, subcategory.status
      FROM category, subcategory
      WHERE  category.code= subcategory.category_code");
while($row=mysqli_fetch_array($sql)){
?>
<tr>
<td><?php echo $i;$i++; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['subcategory_name']; ?></td>
<td><img src="../images/subcategory/<?php echo $row['file']; ?>" height="100" width="100"/></td>
<td><?php if($row['status']==1){echo "<p style=color:green>active</p>";}else { echo "<p style=color:red>disable</p>";}  ?></td>
<td><a href="delete_subcategory.php?code=<?php echo $row['subcategory_code']; ?> " onclick="return confirm('Are you sure?')">Delete</a></td>
<td><a href="edit_subcategory.php?code=<?php echo $row['subcategory_code']; ?>">Edit</a></td>
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

