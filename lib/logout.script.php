<script>
function logout(){
    var id = '<?php echo $ID?>';
    if(confirm('Are you sure you want to logout?')){
        $.ajax({
			type: "POST",
			url: "LOG_SERVER.php?p=logoutLog",
			data: "ID="+id,
			success: function(data){
                window.location.href = 'logout.php'; 
            }
		});					
       
    }else{
        //do nothing
    }
}
</script>