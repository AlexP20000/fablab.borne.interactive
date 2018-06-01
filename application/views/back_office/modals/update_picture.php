<!-- Modal -->
<div class="modal fade" id="update-picture-modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data" method="post" class="form-bloc" action="../manager/update_picture/<?php echo $_SESSION['cmp_pseudo']; ?>">

          <label style="font-size: 15px;"><span class="glyphicon glyphicon-camera"></span> Mettre à jour la photo de votre profil</label><br/>
          <div class="pref-width" >
            <input id="file" type="file" id="setting-picture" name="picture" accept="image/*" style="display: none;">
            <div class="manager-picture">
              <img id="pic" src="../assets/back_office/profils/default.png">
            </div>
          </div>

          <button class="my-btn btn btn-info" type="submit">
            <i class="fas fa-upload"> </i>
            Mettre à jour mon la photo de profil
          </button>
        </form>
        <script type="text/javascript">
          $("#pic").on('click', function(){
            $("#file").click();
          });

          $("#file").on('change', function(e){
            var fr = new FileReader();
            fr.readAsDataURL(this.files[0]);
            fr.onloadend = function(e){
              var bin = e.target.result;
              $("#pic").attr("src", bin);
            }
          });
        </script>
      </div>
    </div>
    
  </div>
</div>