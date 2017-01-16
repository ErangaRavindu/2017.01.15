
$('#radio').hide();

$('#adv').change(ab);
function ab(){
	$('#adv option:selected').each(function(){
		var mat=$(this).val();
		if(mat=="post" | mat == "publication" ){
			//parent.document.getElementById('radio').innerHTML="";
			$('#radio').show();
			$('#search_result').hide();
		}
		if(mat=="staff" | mat== "general"){
			//parent.document.getElementById('radio').innerHTML="";
			$('#radio').hide();
			$('#search_result').hide();
		}
	});
}