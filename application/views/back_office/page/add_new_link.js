var types = <?php echo json_encode($link_types); ?>;
$(document).ready(function(){
	var link_cpt = 2;
	var types_str = "";
	for(var cpt=0; cpt<types.length; cpt++){
		types_str += "<option value="+types[cpt]['tln_id']+">"+types[cpt]['tln_libelle']+"</option>";
	}

	$("#add-new-link").on('click', function(){
		var row = "<tr>\
    <td><input type=\"text\" name=\"label_"+link_cpt+"\" class=\"links_labels form-control\" placeholder=\"Saisir le libelé du lien\"></td>\
    <td class=\"center\">\
      <select id=\""+link_cpt+"\" class=\"selected-type-link\" name=\"type_"+link_cpt+"\">\
        <option disabled selected>Select ...</option>"+types_str+
      "</select>\
    </td>\
    <td>\
      <input id=\"file-"+link_cpt+"\" class=\"link-file\"type=\"file\" name=\"file_"+link_cpt+"\" accept=\"image/*\" multiple style=\"display: none;\">\
      <input id=\"text-"+link_cpt+"\" class=\"link-text form-control\" type=\"text\" name=\"link_"+link_cpt+"\" placeholder=\"URL : https://....\" style=\"display: none;\">\
    </td>\
  </tr>";

		$("#link-list").append(row);
		link_cpt++;
	});

 $('body').on('change', '.selected-type-link', function(){
 		var id = $(this).attr("id");
		var val= $(this).val();
		if(val == 1){
			$("#file-"+id).css('display', 'none');
			$("#file-"+id).val(null);
			$("#text-"+id).css('display', 'block');
		}
		else{
			$("#file-"+id).css('display', 'inline');
			$("#text-"+id).css('display', 'none');
			$("#text-"+id).val(null);
		}
	});
});
