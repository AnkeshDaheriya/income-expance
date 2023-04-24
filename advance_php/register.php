
<form action="controller.php" method="POST" enctype ="multipart/form-data">
Name <span>*</span> : <input type="text" name="name"> 
	<br>
	Email <span>*</span>: <input type="email" name="email">
	 <br>
	Contact: <span>*</span><input type="number" name="contact">
	<br>
	
	Password <span>*</span>: <input type="password" name="password">
	 <br>
	bill <span>*</span>:<br> <input type="file" name="file"><br>
    <input type="button" name="register" id="btn" value="submit"><br>
</form>
<script type="text/javascript">
	$(document).on('click','#btn'function(){
		$.ajax({
          url:'controller.php',
          type:'POST',
          data: $('from').serialize(),
          success: function(data){
          	alert(data);
             
            },
             error:function(errorMessge){

              alert('Error =>'+errorMessge);
              }
        }); 
	})
	
</script>