<!-- Modal -->
<div class="modal fade" id="manage-types-modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <h4><i class="fas fa-list"></i> Liste des Types : </h4>
        <table class="table table-striped table-bordered table-hover table-condensed">
          <thead>
            <tr>
              <th style="width: 3%;" class="center">id</th>
              <th style="width: 30%;">Libellé du Type</th>
              <th style="width: 50%;">Description du Type</th>
              <th style="width: 10%;" class="center">Supprimer</th>
            </tr>
          </thead>
          <tbody id="myTable">
            <?php 
              if(!empty($rubric_types)){
                foreach($rubric_types as $type){
                  echo '
                    <tr>
                      <td>'.$type['rub_id'].'</td>
                      <td>'.$type['rub_libelle'].'</td>
                      <td>'.$type['rub_description'].'</td>
                      <td class="center"><a href="../rubric/delete/'.$type['rub_id'].'"><i class="red fas fa-trash-alt"></i></a></td>
                    </tr>
                  ';
                }
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    
  </div>
</div>