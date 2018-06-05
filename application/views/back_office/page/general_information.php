<fieldset>
  <legend style="font-size: 14px; font-weight: bold;">Saisir les informations générales de la page : </legend>
  <div style="display: flex; justify-content: space-between; flex-wrap: wrap;">
    <div class="form-group" style="width: 24%;">
      <label>Sélectionner le type de la page :</label>
      <div style="display: flex;">
        <select class="form-control" name="pag_type" required="true" style="width: 60%;">
          <option disabled selected hidden>Select ...</option>
            <?php 
              if(!empty($rubric_types)){
                foreach ($rubric_types as $type){
                  echo '<option value="'.$type['rub_id'].'">'.$type['rub_libelle'].'</option>';
                }
              }
              else echo '<option disabled>Aucun type chargé</option>';
            ?>
        </select>
        <i title="Gérer les types" style="margin: 7px;" class="purple fas fa-cog" id="manage-types"></i>
        <i title="Ajouter un type" style="margin: 7px;" class="green fas fa-plus" id="add-type"></i>
      </div>
    </div>

    <div class="form-group" style="width: 24%;">
      <label>Sélectionner le statut de la page :</label>
      <select class="form-control" required="true" name="pag_statut">
        <option disabled selected hidden>Select ...</option>
        <option value="Publiée">Publier la page</option>
        <option value="Non publiée">Ne pas publier la page</option>
      </select>
    </div>

    <div class="form-group" style="width: 24%;">
      <label>Date de la page :</label>
      <input type="text" name="pag_date" id="date" class="form-control center" placeholder="Choisir une date pour la page">
    </div>

    <div class="form-group" style="width: 24%;">
      <label>Saisir le titre de la page :</label>
      <input type="text" name="pag_titre" class="form-control" required="true" placeholder="Titre de la page">
    </div>
  </div>
</fieldset>