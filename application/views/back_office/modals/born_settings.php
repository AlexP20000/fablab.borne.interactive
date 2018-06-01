<!-- Modal -->
<div class="modal fade" id="born-sttings-modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

        <form method="post" class="form-bloc" action="../manager/update">
          <div class="form-group">
            <label for="pic">Sélectionner les images qui vont défiler en arrière-plan : </label>
            <input type="file" name="pic" accept="image/*" multiple>
          </div>

          <button class="my-btn btn btn-success" type="submit">
            <i class="fas fa-upload"> </i>
            Mettre à jour mon profil
          </button>
          
        </form>
      </div>
    </div>
    
  </div>
</div>