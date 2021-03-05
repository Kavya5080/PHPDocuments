$(document).ready(function() {
    console.log("d");
	$('#save').on('click', function() {
	console.log("d");
    	$("#save").attr("disabled", "disabled");
		var bloodGroup = $('#bloodGroup').val();
		var unit = $('#unit').val();
		if(unit!="" && bloodGroup!=""){
			$.ajax({
				url: "save.php",
				type: "POST",
				data: {
					bloodGroup: bloodGroup,
					unit: unit,
		
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#save").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('Data added successfully !'); 
                        						
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});