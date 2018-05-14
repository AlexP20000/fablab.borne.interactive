$(document).ready(function(){
	$("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

  $("#manager-sttings").click(function(){
      $("#manager-sttings-modal").modal();
  });

  $("#log-out").click(function(){
  	document.location.href = "../compte/logout";
  });

  $("#born-sttings").click(function(){
  	$("#born-sttings-modal").modal();
  });

  CKEDITOR.replace('description');
});