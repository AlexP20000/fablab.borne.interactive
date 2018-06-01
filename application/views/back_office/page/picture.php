 <fieldset style="display: block;">
  <legend style="font-size: 14px; font-weight: bold;">Sélectionner l'image de la page : </legend>
  <div class="form-group">
  	<input id="file-input" type="file" name="pag_picture" style="display: none;" accept="image/*">
  	<div style="height: 400px; text-align: center;">
  		<i id="picture-icon" class="fas fa-image" style="font-size: 300px; color: #ccc;"></i>
  		<img id="picture" src="" height="400" style="border-radius: 10px; cursor: pointer;">
  	</div>
  </div>
</fieldset>
<script type="text/javascript">
  $("#picture-icon").on('click', function(){
    $("#file-input").click();
  });
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