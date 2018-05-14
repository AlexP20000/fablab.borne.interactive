<!-- the content of the html web page -->
<content class="content-panel-container table-cell">
	<div class="content-panel-top">
		<h2>Bienvenue dans l'assistant d'ajout d'une rubrique</h2>
	</div>

	<div class="content-panel-bottom">
		<div class="add-rubric-form-container">
      <form method="post" class="form-bloc" action="../manager/update">
        <div>
          <fieldset>
            <legend>Informations générale de la rubrique : </legend>
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
              <label>Sélectionner le statut de la rubrique :</label>
              <select class="form-control">
                <option>Publier la rubrique</option>
                <option>Ne pas publier la rebrique</option>
              </select>
            </div>
            <div class="form-group">
              <label>Saisir l'intitulé de la rubrique :</label>
              <input type="text" name="intitule" class="form-control" required="true" placeholder="Intitulé de la rubrique">
            </div>
          </fieldset>
          <fieldset>
            <legend>Saisir la description courte de la rubrique : </legend>
            <textarea rows="5" class="form-control" placeholder="Description courte de la rubrique"></textarea>
          </fieldset>

          <fieldset>
            <legend>Liens concernant la rubrique : </legend>
            <div class="form-group">
              <label>Imagettes de la rubrique :</label>
              <input type="file" name="pictures[]" class="" accept="image/*">
              <input type="file" name="pictures[]" class="" accept="image/*">
              <input type="file" name="pictures[]" class="" accept="image/*">
              <input type="file" name="pictures[]" class="" accept="image/*">
            </div>
            <div class="form-group">
              <label>Image de la rubrique :</label>
              <input type="file" name="" class="" accept="image/*">
            </div>
            <div class="form-group">
              <label>Video de la rubrique :</label>
              <input type="file" name="" class="" accept="video/*" >
            </div>
            <div class="form-group">
              <label>Liens de la rubrique :</label>
              <input type="text" name="" class="form-control" placeholder="Lien 1">
              <input type="text" name="" class="form-control" placeholder="Lien 2">
              <input type="text" name="" class="form-control" placeholder="Lien 3">
              <input type="text" name="" class="form-control" placeholder="Lien 4">
            </div>
          </fieldset>
          <fieldset style="display: block;">
            <legend>Saisir la description complete de la rubrique : </legend>
            <textarea class="form-group" id="description" placeholder="Description complete de la rubrique"></textarea>
          </fieldset>
        </div>
        <div class="form-group btn-container">
          <button class="my-btn btn btn-primary">
            <i class="fas fa-download"> </i>
            Importer à partir d'un fichier
          </button>

          <button class="my-btn btn btn-warning">
            <i class="fas fa-reply-all"> </i>
            Vider tous les champs de saisie
          </button>

          <button class="my-btn btn btn-success" type="submit">
            <i class="fas fa-upload"> </i>
            Ajouter la rubrique
          </button>
        </div>
      </form>
    </div>
	</div>
</content>


<!-- to complete the html web page tags -->
			</div>
		</div>
	</body>
</html>