<script>
$(function() {
       $("#btnUserUpdate").on('click',function(){
		
			if(document.getElementById('fullname').value == ""){
				alert('Fullname is required!');
				document.getElementById('fullname').focus();
				return false
			}

            if(document.getElementById('contactno').value == ""){
				alert('Contact number is required!');
				document.getElementById('contactno').focus();
				return false
			}

            if(document.getElementById('address').value == ""){
				alert('Address is required!');
				document.getElementById('address').focus();
				return false
			}

			var _data = $('form').serialize();
			$.post("<?php echo SITE_URL ?>/admin/user_account/ajax/updateUser",_data, function(data){
				data = $.trim(data);
				console.log(data);
				if(data=="1"){		
					alert('Success! Your account has been updated!');
					setTimeout(function(){ location.reload(); }, 500);
				}else{
					alert('Error! Please Contact System Administrator!');	
				}
			});
			return false;
		 });


});
</script>

 