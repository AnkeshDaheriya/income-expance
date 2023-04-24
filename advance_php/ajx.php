

<style type="text/css">
	#result {
    background: gray;
    width: 200px;
    margin-left: 30px;
}
 a:hover {
		text-decoration:none;
		background: red;
}
ul li:hover {
		background: white;
}
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
 <h1>Ajax autocomlpate</h1>
 <label>keyup</label>
 <input type="text" name="keyword" placeholder="enter your kye" id="autocomlpate">

 <div class="dropdown-content" id="result">
   
 </div>

<script type="text/javascript">
	    $(document).on('keyup','#autocomlpate',function(){
            var val = $(this).val();
	  
        $.ajax({
          url:'controller.php?user_search='+val,
          type:'GET',
          success: function(data){
            console.log(data);
            $('#result').html(data);
            $('#autocomlpate').val();

            },
             error:function(errorMessge){

              alert('Error =>'+errorMessge);
              }
        }); 
    });
</script>
