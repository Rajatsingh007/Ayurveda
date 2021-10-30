<?php
include_once('header.php');

?>
<div id="page-wrapper" class="gray-bg dashbard-1" style="min-height: 411px;">
       <div class="content-main">

		<!--content-->
		<div class="content-top">
			
			<div class="grid-form col-md-8">
            
            
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
<th>id</th>
<th>category name</th>
<th>status</th>
<th>Image</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
include_once('db.php');
$i=1;
$sql=mysqli_query($conn,"SELECT * FROM `category` ORDER BY `id` DESC");
while($row=mysqli_fetch_array($sql)){

?>
<tr>
<td><?php echo $i;$i++;?></td>
<td><?php echo $row['name']; ?></td>
<td><?php  if($row['status']==1){echo "<p style=color:green;>Activated</p>";}else { echo "<p style=color:red;>disabled</p>";} ?></td>
<td><img src="../images/category/<?php echo $row['file']; ?>" height="100px" width="100px"/></td>
<td><a href="deletecategory.php?code=<?php echo $row['code']; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
<td><a href="editcategory.php?code=<?php echo $row['code']; ?>">Edit</a></td>
</tr>
<?php  } ?>
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