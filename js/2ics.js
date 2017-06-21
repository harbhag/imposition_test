$(document).ready(function() {

   $("#flat_height").focusout(function() {
	   //Remove the extra options from Grain Way dropdown
	   $('#grain_way option').each(function() {
			if ( ($(this).val() != $("#flat_width").val()) &&  ($(this).val() != $("#flat_height").val())) {
				$(this).remove();
			}
		});
	   
	   //Add the options from entered value
	   if(!isNaN(this.value) && this.value!=''){
		  
		  if($('#grain_way option[value='+this.value+']').length == 0){
			  $("#grain_way").append('<option value='+this.value+'>'+this.value+'</option>');
		  }
	   }
   });
   
   $("#flat_width").focusout(function() {
	   //Remove the extra options from Grain Way dropdown
	   $('#grain_way option').each(function() {
			if ( ($(this).val() != $("#flat_width").val()) &&  ($(this).val() != $("#flat_height").val())) {
				$(this).remove();
			}
		});
	   //Add the options from entered value
	   if(!isNaN(this.value) && this.value!=''){
		   if($('#grain_way option[value='+this.value+']').length == 0){
			  $("#grain_way").append('<option value='+this.value+'>'+this.value+'</option>');
		  }
	   }
   });
   
   //Remove the extra options from Grain Way dropdown
   $('#grain_way').focus(function() {
	   $('#grain_way option').each(function() {
			if ( ($(this).val() != $("#flat_width").val()) &&  ($(this).val() != $("#flat_height").val())) {
				$(this).remove();
			}
		});
	});
   
   $("#calculate_values").click(function() {
	   //alert($("#grain_way").val());
	   if($("#grain_way").val()==$("#flat_width").val()) {
		   $("#grain_direction").val("Grain Width");
	   }
	   else{
		 $("#grain_direction").val("Grain Height");  
	   }
	   
	   var sheet_width = $("#sheet_width").val();
	   var sheet_height = $("#sheet_height").val();
	   var flat_width = $("#flat_width").val();
	   var flat_height = $("#flat_height").val();
	   
	   //calucate imposition1 and imposition2
	   var imposition1 = parseInt(sheet_height/flat_width)*parseInt(sheet_width/flat_height);
	   var imposition2 = parseInt(sheet_width/flat_width)*parseInt(sheet_height/flat_height);
	   
	   $("#imposition1").val(imposition1);
	   $("#imposition2").val(imposition2);
	   
	   
	   if($("#grain_direction").val()=="Grain Width"){
		   $("#chosen_imposition").val(imposition1);
	   }
	   else{
		   $("#chosen_imposition").val(imposition2);
	   }
   
   });
	
});
