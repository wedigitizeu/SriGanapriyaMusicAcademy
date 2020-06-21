$("document").ready(function(){
	var num=1;
	$.post("../admin/scripts/select-mybookings.php",{num:num},function(data)
	{

		$("#result").html(data);

	});
});