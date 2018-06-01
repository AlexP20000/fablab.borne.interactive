<!-- Modal -->
<div class="modal fade" id="edit-manager-modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

        <form enctype="multipart/form-data" method="post" class="form-bloc" action="../manager/update">
          <div class="form-group">
            <label for="picture">Choisir votre nouvelle photo de profil :</label>
            <input type="file" name="picture" accept="image/*">
          </div>

          <div class="form-group">
            <label for="name">Nom : </label>
            <input class="form-control height" type="text" name="name" id="edit-name" required="required" placeholder="Saisir le nom du manager">
          </div>
          <div class="form-group">
            <label for="firstname">Prénom : </label>
            <input class="form-control height" type="text" name="firstname" id="edit-firstname" required="required" placeholder="Saisir le prénom du manager">
          </div>          
          <div class="form-group">
            <label for="contact">Contact : </label>
            <input class="form-control height" type="email" name="contact" id="edit-contact" required="required" placeholder="Saisir l'email du manager">
          </div>
          <div class="form-group">
            <label for="status">Statut du Manager :</label>
            <select class="form-control" name="status" id="edit-status" required="required">
              <option value="Actif">Actif</option>
              <option value="Inactif">Inactif</option>
            </select>
          </div>
           <div class="form-group">
            <label for="pseudo">Pseudonyme : </label>
            <input class="form-control height" type="text" name="pseudo" id="edit-pseudo" required="required" placeholder="Saisir le Pseudonyme du manager">
            <input type="text" name="pseudo-old" id="edit-pseudo-old" required="required" hidden="true">
          </div>

          <button class="my-btn btn btn-success form-control" type="submit">
            <i class="fas fa-upload"> </i> 
            <span class="space">Mettre à jour les données du Manager</span>
          </button>
        </form>
      </div>
    </div>
    
  </div>
</div>