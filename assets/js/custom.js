$(document).ready(function () {
	$(".remove-link").click(function (){
		return confirm('Are you sure remove this note?');
		/*swal({
				title:"Are you sure Delete?",
				icon:"warning",
				buttons:true,
				dangerMode:true,
			});*/
	});
});