<fieldset >
  <legend style="font-size: 14px; font-weight: bold;">Ajouter les liens concernant la page : </legend>
  <div style="width: 99%; margin: auto; font-size: 12px;">
    <table class="table table-striped table-bordered table-hover table-condensed">
      <thead>
        <tr>
          <th style="width: 20%;">Libelé du lien</th>
          <th style="width: 12%;">
            <span>Type du lien</span>
            <span title="Gérer les Types" id="manage-link-types" class="green fas fa-cog" style="margin-left: 10px; font-size: 15px;"></span>
          </th>
          <th style="width: 68%;">Valeur du lien</th>
        </tr>
      </thead>
      <tbody id="link-list">
        <tr>
          <td><input type="text" name="label_1"class="links_labels form-control" placeholder="Saisir le libelé du lien"></td>
          <td class="center">
            <select id="1" class="selected-type-link" name="type_1">
              <option disabled selected>Select ...</option>
              <?php 
                if(!empty($link_types)){
                  foreach ($link_types as $type){
                    echo '<option value="'.$type['tln_id'].'">'.$type['tln_libelle'].'</option>';
                  }
                }
                else echo '<option disabled>Aucun type chargé</option>';
              ?>
            </select>
          </td>
          <td>
            <input id="file-1" class="links_values link-file" type="file" name="file_1" accept="image/*" style="display: none;">
            <input id="text-1" class="links_values link-text form-control" type="text" name="link_1" placeholder="URL : https://...." style="display: none;">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</fieldset>