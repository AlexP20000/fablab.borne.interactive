<!-- Modal -->
<div class="modal fade" id="manage-link-types-modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div>
          <h4><i class="fas fa-list"></i> Liste des Types : </h4>
          <table class="table table-striped table-bordered table-hover table-condensed">
            <thead>
              <tr>
                <th style="width: 8%;" class="center">id</th>
                <th style="width: 80%;">Libellé du Type</th>
                <th style="width: 10%;" class="center">Supprimer</th>
              </tr>
            </thead>
            <tbody id="myTable">
              <?php 
                if(!empty($link_types)){
                  foreach($link_types as $type){
                    echo '
                      <tr>
                        <td>'.$type['tln_id'].'</td>
                        <td>'.$type['tln_libelle'].'</td>
                        <td class="center"><a href="../rubric/delete_link/'.$type['tln_id'].'"><i class="red fas fa-trash-alt"></i></a></td>
                      </tr>
                    ';
                  }
                }
              ?>
            </tbody>
          </table>
        </div>

        <div style="margin-top: 20px;">
          <h4><i class="fas fa-cogs"></i> Ajouter un Type : </h4>
          <form method="post" action="../rubric/add_link">
            <div class="form-group">
              <label>Saisir le libellé du type :</label>
              <input type="text" name="link_label" class="form-control" placeholder="Saisir le libellé du type à ajouter" required>
            </div>
            
            <div class="form-group">
              <button class="my-btn btn btn-primary" type="submit" style="width: 100%; margin: 0px;">
                <i class="fas fa-plus"></i>
                <span class="space-large">Ajouter le Type</span>
              </button>
            </div>

          </form>
        </div>
      </div>
    </div>
    
  </div>
</div>