<!-- Modal -->
<div class="modal fade" id="add-rubric-modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

        <form method="post" class="form-bloc" action="../manager/update">
          <div class="form-group">
            <label>Sélectionner le type de saisie :</label>
            <select class="form-control">
              <option>Saisir Manuellement</option>
              <option>Saisir à partir d'un fichier</option>
            </select>
          </div>
          
          <div class="form-group">
            <label>Saisir l'intitulé de la rubrique :</label>
            <input type="text" name="intitule" class="form-control" required="true" placeholder="Intitulé de la rubrique">
          </div>

          <div class="form-group">
            <label>Sélectionner le type de la rubrique :</label>
            <select class="form-control">
              <option>Actualité</option>
              <option>Evenement</option>
              <option>Projet</option>
              <option>Stage</option>
              <option>U.E</option>
            </select>
          </div>

          <div class="form-group">
            <label>Saisir la description courte de la rubrique :</label>
            <textarea rows="5" class="form-control"></textarea>
          </div>

          <div class="form-group">
            <label>Saisir la description complete de la rubrique :</label>
            <textarea rows="5" class="form-control"></textarea>
          </div>

          <div class="form-group">
            <label>Sélectionner le responsable / auteur de la rubrique :</label>
            <select class="form-control">
              <option>Alexendre</option>
              <option>Anne</option>
              <option>Claire</option>
              <option>Jean-Ive</option>
              <option>Mathieu</option>
              <option>Tomy</option>
              <option>Sonia</option>
            </select>
          </div>

          <div class="form-group" style="margin-top: 30px; display: flex; justify-content: space-between;">
            <button class="btn btn-success" type="submit">
              <i class="fas fa-upload"> </i>
              Ajouter la rubrique
            </button>

            <button class="btn btn-danger" data-dismiss="modal">
               <i class="fas fa-times"> </i>
              Annuler et Quitter
            </button>
          </div>
          
        </form>
      </div>
    </div>
    
  </div>
</div>

