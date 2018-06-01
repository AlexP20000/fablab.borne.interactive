<!DOCTYPE html>
<html>
	<head>
		<title>Ajouter une Page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet"> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">


	  <link rel="stylesheet" href="../../assets/back_office/css/content_panel_style.css">
	  <link rel="stylesheet" href="../../assets/back_office/css/prefered_modal_settings.css">
	  <link rel="stylesheet" href="../../assets/back_office/css/edit_rubric.css">

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script src="../../assets/back_office/ckeditor/ckeditor.js"></script>

		<!-- Bootstrap Date-Picker Plugin -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

		<script>
	    $(document).ready(function(){
        var date_input=$('input[name="pag_date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        });

        /* The textarea editor */
			    CKEDITOR.replace('description');
	    });
		</script>
	</head>
	
	<body>
		<form method="post" class="form-bloc" action="../../page/update" enctype="multipart/form-data">
			<div style="min-height: 1200px;">
		    <fieldset>
		      <legend style="font-size: 14px; font-weight: bold;">Informations générales de la page : </legend>
		      <div style="display: flex; justify-content: space-between; flex-wrap: wrap;">
		        <div class="form-group" style="width: 24%;">
		          <label>Type de la page :</label>
	            <select name="rub_id" required="true" style="display: block;">
	              <option selected hidden value="<?php echo $page['rub_id'] ?>"><?php echo $page['rub_libelle'] ?></option>
	                <?php 
	                  if(!empty($rubric_types)){
	                    foreach ($rubric_types as $type){
	                      echo '<option value="'.$type['rub_id'].'">'.$type['rub_libelle'].'</option>';
	                    }
	                  }
	                  else echo '<option disabled>Aucun type chargé</option>';
	                ?>
	            </select>
	            <input type="text" name="pag_id" required="true" hidden value="<?php echo $page['pag_id']; ?>">
							<input type="text" name="res_id" required="true" hidden value="<?php echo $page['res_id']; ?>">
		        </div>

		        <div class="form-group" style="width: 24%;">
		          <label>Statut de la page :</label>
		          <select required="true" name="pag_statut">
		            <option selected hidden value="<?php echo $page['pag_statut'] ?>"><?php echo $page['pag_statut'] ?></option>
		            <option value="publiée">Publier la page</option>
		            <option value="non publiée">Ne pas publier la page</option>
		          </select>
		        </div>

		        <div class="form-group" style="width: 24%;">
		          <label>Date de la page :</label>
		          <input type="text" name="pag_date" id="date" class="form-control center" required="true" placeholder="Date pour la page" value="<?php echo $page['pag_date'] ?>">
		        </div>

		        <div class="form-group" style="width: 24%;">
		          <label>Titre de la page :</label>
		          <input type="text" name="pag_titre" class="form-control" required="true" placeholder="Titre de la page" value="<?php echo $page['pag_titre'] ?>">
		        </div>
		      </div>
		    </fieldset>
		    <fieldset style="display: block;">
				  <legend style="font-size: 14px; font-weight: bold;">Image de la page : </legend>
				  <div class="form-group">
				  	<input id="file-input" type="file" name="pag_picture" style="display: none;" accept="image/*">
				  	<div style="height: 400px; text-align: center;">
				  		<img id="picture" src="../../images/<?php echo $page_image; ?>" style="border-radius: 10px; cursor: pointer; max-width: 800px; max-height: 400px; height: 400px;">
				  	</div>
				  </div>
				</fieldset>

		    <fieldset style="display: block;">
		      <legend style="font-size: 14px; font-weight: bold;">Description de la page : </legend>
		      <div class="form-group">
		        <textarea id="description" class="form-control" placeholder="Description de la page" name="pag_description" required><?php echo $page['pag_description'] ?></textarea>
		      </div>
		    </fieldset>

		    <fieldset >
		      <legend style="font-size: 14px; font-weight: bold;">Liens concernant la page : </legend>
		      <div style="width: 99%; margin: auto; font-size: 12px;">
		        <table class="table table-striped table-bordered table-hover table-condensed">
		          <thead>
		            <tr>
		              <th style="width: 20%;">Libelé du lien</th>
		              <th style="width: 15%;">Type du lien</th>
		              <th style="width: 47%;">Valeur du lien</th>
		              <th style="width: 10%;" class="center">Actions</th>
		            </tr>
		          </thead>
		          <tbody id="link-list">
		          	<?php
		          		if(!empty($page_links)){
		          			foreach($page_links as $link){
		          				echo '
											<tr>
					              <td><span class="space">'.$link['lie_libelle'].'</span></td>
					              <td><span class="space">'.$link['tln_libelle'].'</span></td>
					              <td><a href="#" class="space">'.$link['lie_valeur'].'</a></td>
					              <td class="center"><a href="../../page/delete_link/'.$link['lie_id'].'/'.$page['pag_id'].'"><i class="red fas fa-trash-alt"></i></a></td>
					            </tr>
			          		';
		          			}
		          		}
		          	?>
		          </tbody>
		        </table>
		      </div>
		    </fieldset>
	  	</div>
	    <div class="btn-container" style="margin:auto; margin-top: 0px;">
	    	<button id="add-new-link" class="my-btn btn btn-primary" type="button"><i class="fas fa-plus"> </i><span class="space">Ajouter un nouveau lien</span></button>
	    	<button class="my-btn btn btn-success" type="submit"><i class="fas fa-upload"> </i><span class="space">Mettre à jour la page</span></button>
	    </div>
	  </form>

	  <script type="text/javascript">
	  	var types = <?php echo json_encode($link_types); ?>;
	  	$(document).ready(function(){
				var link_cpt = 1;
				var types_str = "";
				for(var cpt=0; cpt<types.length; cpt++){
					types_str += "<option value="+types[cpt]['tln_id']+">"+types[cpt]['tln_libelle']+"</option>";
				}

				$("#add-new-link").on('click', function(){
					var row = "<tr id=\"row-"+link_cpt+"\">\
				    <td><input type=\"text\" name=\"label_"+link_cpt+"\" class=\"form-control\" placeholder=\"Saisir le libelé du lien\"></td>\
				    <td class=\"center\">\
				      <select id=\""+link_cpt+"\" class=\"selected-type-link\" name=\"type_"+link_cpt+"\">\
				        <option disabled selected>Select ...</option>"+types_str+
				      "</select>\
				    </td>\
				    <td>\
				      <input id=\"file-"+link_cpt+"\" class=\"link-file\" type=\"file\" name=\"file_"+link_cpt+"\" accept=\"image/*\" style=\"display: none;\">\
				      <input id=\"text-"+link_cpt+"\" class=\"link-text form-control\" type=\"text\" name=\"link_"+link_cpt+"\" placeholder=\"URL : https://....\" style=\"display: none;\">\
				    </td>\
				    <td class=\"center\"><i id=\""+link_cpt+"\" class=\"delete red fas fa-trash-alt\"></i></td>\
				  </tr>";
				  
					$("#link-list").append(row);
					link_cpt++;
				});

				$("body").on('click', '.delete', function(){
					var id = $(this).attr("id");
					$("#row-"+id).remove();
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
	  </script>
	  <script type="text/javascript">
		  $("#picture").on('click', function(){
		    $("#file-input").click();
		  });
		  $("#file-input").on('change', function(e){
		    var fr = new FileReader();
		    fr.readAsDataURL(this.files[0]);
		    fr.onloadend = function(e){
		      var bin = e.target.result;
		      $("#picture").attr("src", bin);
		      $("#picture-icon").css('display', 'none');
		    }
		  });
		</script>
	</body>
</html>