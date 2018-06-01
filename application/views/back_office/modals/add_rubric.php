<!-- Modal -->
<div class="modal fade" id="add-type-modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

        <form method="post" class="form-bloc" action="../rubric/add">
          <div class="form-group">
            <label for="label">Libellé du type :</label>
            <input type="text" class="form-control" name="label" required="true" placeholder="Saisir le libellé de la rubrique">
          </div>

          <div class="form-group">
            <label for="description">Libellé du type :</label>
            <textarea class="form-control" name="description" placeholder="Saisir la description de la rubrique" required="true"></textarea>
          </div>

          <button class="my-btn btn btn-success" type="submit" style="width: 100%; margin: 0px;">
            <i class="fas fa-plus"> </i>
            <span class="space-large">Ajouter le Type</span>
          </button>
          
        </form>
      </div>
    </div>
    
  </div>
</div>