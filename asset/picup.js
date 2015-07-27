$(document).ready(function() {

	dialog = $("#dialog-create").dialog({
		autoOpen : false,
		height : 300,
		width : 350,
		modal : true,
		buttons : {
			"Create gallery" : function(){
				alert("Created");
				dialog.dialog("close");
			},
			Cancel : function() {
				dialog.dialog("close");
			}
		},
		close : function() {
			//form[0].reset();
			//allFields.removeClass("ui-state-error");
		}
	});
	
	$("#view-source").click(function(event) {
			
		dialog.dialog("open");
		
	});

});