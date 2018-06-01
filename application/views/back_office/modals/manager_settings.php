<!-- Modal -->
<div class="modal fade" id="manager-sttings-modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

        <form enctype="multipart/form-data" method="post" action="">
          <label><span class="glyphicon glyphicon-user"></span> Mettre à jour les informations personnelles</label><br/>
          <div class="pref-width">
            <div class="form-group text-feild-container">
              <label class="text-feild">Nom :</label>
              <input style="width: 80%;" class="form-control" type="text" id="setting-name" name="name" required="required" placeholder="Saisir votre nom" value="<?php echo$_SESSION['res_nom'];?>">
            </div>

            <div class="form-group text-feild-container">
              <label class="text-feild">Prénom :</label>
              <input style="width: 80%;" class="form-control" type="text" id="setting-firstname" name="firstname" required="required" placeholder="Saisir votre prénom" value="<?php echo$_SESSION['res_prenom'];?>">
            </div>

            <div class="form-group text-feild-container">
              <label class="text-feild">Contact :</label>
              <input style="width: 80%;" class="form-control" type="email" id="setting-contact" name="contact" required="required" placeholder="Saisir votre adresse mail" value="<?php echo$_SESSION['res_contact'];?>">
            </div>


            <div class="form-group text-feild-container">
              <label class="text-feild">Pseudo :</label>
              <input style="width: 80%;" class="form-control" type="text" id="setting-pseudo" name="pseudo" required="required" placeholder="Saisir un Pseudonyme" value="<?php echo$_SESSION['cmp_pseudo'];?>">
            </div>

            <input name="status" id="setting-status" required="required" value="Actif" hidden="true">
            <input type="text" name="pseudo-old" id="setting-pseudo-old" required="required" hidden="true" value="<?php echo$_SESSION['cmp_pseudo'];?>">
          </div>

          <label><span class="glyphicon glyphicon-lock"></span> Mettre à jour mon mot de passe</label><br/>
          <div class="pref-width">
            <div class="form-group"><input class="form-control" type="password" id="setting-password" name="old_password" required="required" placeholder="Saisir votre mot de passe actuel" autocomplete="off"></div>
            <div class="form-group"><input class="form-control" type="password" id="setting-password-new-1" name="new_password" placeholder="Saisir votre nouveau mot de passe"  autocomplete="off"></div>
            <div class="form-group"><input class="form-control" type="password" id="setting-password-new-2" name="new_password" placeholder="Confirmer votre nouveau mot de passe"  autocomplete="false"></div>
            <div class="checkbox"><label><input type="checkbox" id="change-state" name="change_state"><span class="large-space">Changer le mot de passe</span></label></div>
          </div>
          <button class="my-btn btn btn-primary form-control" id="go">
            <i class="fas fa-upload"> </i>
            <span class="space">Mettre à jour mon profil</span>
          </button>

          <script type="text/javascript">
            $(document).ready(function(){
              /* Refrech the page while clicking on close */
                $('.close').on('click', function(){
                  document.location.href = "";
                });
                
              /* Get the forms values and post them */
                $("#go").on('click', function(event){
                  event.preventDefault();
                  /* validate the formular */
                    if(validate_formular()){
                    /* Retreiv the formular values */
                      var datas = new Object();
                      datas['pseudo'] = $("#setting-pseudo").val();
                      datas['pseudo-old'] = $("#setting-pseudo-old").val();
                      datas['old_password'] = $("#setting-password").val();
                      datas['name'] = $("#setting-name").val();
                      datas['firstname'] = $("#setting-firstname").val();
                      datas['status'] = $("#setting-status").val();
                      datas['contact'] = $("#setting-contact").val();
                      datas['new_password'] = $("#setting-password-new-1").val();
                      datas['change_state'] = $('#change-state').is(':checked');
                    /* Post the value with ajax request */
                      $.ajax({
                        url: '../manager/update_settings',
                        type: 'POST',
                        data: {posted_datas: datas},
                        dataType : 'text',
                        success: function(data){ alert(data); document.location.href = ""; },
                        error: function(data){ alert("error -> "+data); }
                      });
                    }
                });

              /* formular validation */
                function validate_formular(){
                  if($("#setting-name").val() == ""){
                    $("#setting-name").css("border", "1px solid red");
                    return false;
                  }
                  else{
                    $("#setting-name").css("border", "1px solid green");
                  }
                  if($("#setting-firstname").val() == ""){
                    $("#setting-firstname").css("border", "1px solid red");
                    return false;
                  }
                  else{
                    $("#setting-firstname").css("border", "1px solid green");
                  }
                  if($("#setting-contact").val() == ""){
                    $("#setting-contact").css("border", "1px solid red");
                    return false;
                  }
                  else{
                    $("#setting-contact").css("border", "1px solid green");
                  }
                  if($("#setting-pseudo").val() == ""){
                    $("#setting-pseudo").css("border", "1px solid red");
                    return false;
                  }
                  else{
                    $("#setting-pseudo").css("border", "1px solid green");
                  }
                  if($("#setting-password").val() == ""){
                    $("#setting-password").css("border", "1px solid red");
                    return false;
                  }
                  else{
                    $("#setting-password").css("border", "1px solid green");
                  }

                  var val = $('#change-state').is(':checked');
                  if(val){
                    // Require the new password
                      if($("#setting-password-new-1").val() != $("#setting-password-new-2").val() || $("#setting-password-new-1").val() == "" || $("#setting-password-new-2").val() == ""){
                        $("#setting-password-new-1").css("border", "1px solid red");
                        $("#setting-password-new-2").css("border", "1px solid red");
                        return false;
                      }
                      else{
                        $("#setting-password-new-1").css("border", "1px solid green");
                        $("#setting-password-new-2").css("border", "1px solid green");
                      }
                  }
                  if(!val){
                      $("#setting-password-new-1").css("border", "1px solid grey");
                      $("#setting-password-new-2").css("border", "1px solid grey");
                    }

                  /* if all is fine return true */
                  return true;
                }

            });
          </script>

        </form>
      </div>
    </div>
    
  </div>
</div>