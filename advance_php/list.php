

<div style="container">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<?php
 include('menubar.php');
 include('db.php');

 $qur="select * from `ansh`";
 $result= mysqli_query($con,$qur);


?>
<table border="1">
	<thead>
		
		<th>id</th>
		<th>name</th>
		<th>email</th>
		<th>contact</th>
    <th>password</th>
		<th>delet</th>
    <th>update</th>
	</thead>
	<tbody>
    
		<?php foreach($result as $key => $value) {?>
           <tr id ="rowid_<?php echo $value['id'];?>">
           	    <td><?php echo $value['id'];?></td>
           	    <td><?php echo $value['name'];?></td>
           	    <td><?php echo $value['email'];?></td>
           	    <td><?php echo $value['contact'];?></td>
                <td><?php echo $value['password'];?></td>
           	    <td>
           	    	<a onclick="deleteData(<?php echo $value['id'];?>)" href="#">delete</a>
           	     </td>
           	     <td>
           	    	<a href="user_edit.php?id=<?php echo $value['id'];?>">update </a>
           	    </td>
           	<?php } ?>
           </tr>


	</tbody>
</table>

<script type="text/javascript">
      function deleteData(id){
        
        $.ajax({
          url:'controller.php?user_id_delet='+id,
          type:'GET',
          success: function(data){
            console.log(data);
            if(data == "true"){
              $('#rowid_'+id).remove();

            }else{
              alert('not delete');
            }
           
            },
             error:function(errorMessge){

              alert('Error =>'+errorMessge);
              }
        }); 
      }
    
</script>
    
</div>