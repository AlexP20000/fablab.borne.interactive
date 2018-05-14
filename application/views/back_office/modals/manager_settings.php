<!-- Modal -->
<div class="modal fade" id="manager-sttings-modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

        <form method="post" class="form-bloc" action="../manager/update">
          <label data-toggle="collapse" href="#collapse1" style="cursor: pointer; margin-bottom: 20px;">
            <span class="glyphicon glyphicon-camera"></span> Mettre à jour la photo de profil
          </label><br/>
          <div id="collapse1" class="panel-collapse collapse pref-width">
            <div class="form-group">
              <label for="pic">Choisir votre nouvelle photo de profil :</label>
              <input type="file" name="pic" accept="image/*">
            </div>
          </div>

          <label data-toggle="collapse" href="#collapse2" style="cursor: pointer; margin-bottom: 20px;">
            <span class="glyphicon glyphicon-user"></span> Mettre à jour mes informations personnelles
          </label><br/>
          <div id="collapse2" class="panel-collapse collapse pref-width">
            <div class="form-group">
              <label for="nom">Nom : </label>
              <input class="form-control height" type="text" name="nom" required="required" placeholder="Saisir votre nom">
            </div>
            <div class="form-group">
              <label for="prenom">Prénom : </label>
              <input class="form-control height" type="text" name="prenom" required="required" placeholder="Saisir votre prénom">
            </div>          
            <div class="form-group">
              <label for="contact">Contact : </label>
              <input class="form-control height" type="email" name="contact" required="required" placeholder="Saisir votre email">
            </div>
             <div class="form-group">
              <label for="pseudo">Pseudonyme : </label>
              <input class="form-control height" type="text" name="pseudo" required="required" placeholder="Saisir un Pseudonyme">
            </div>
          </div>

          <label data-toggle="collapse" href="#collapse3" style="cursor: pointer; margin-bottom: 20px;">
            <span class="glyphicon glyphicon-lock"></span> Mettre à jour mon mot de passe
          </label><br/>
          <div id="collapse3" class="panel-collapse collapse pref-width">
            <div class="form-group">
              <label for="old-password">Mot de passe actuel :</label>
              <input class="form-control height" type="password" name="old-password" required="required" placeholder="ancien mot de passe">
            </div>
            <div class="form-group">
              <label for="new-password">Votre nouveau mot de passe :</label>
              <input class="form-control height" type="password" name="new-password" placeholder="nouveau mot de passe">
            </div>
            <div class="form-group">
              <label for="new-password">Confirmer votre nouveau mot de passe :</label>
              <input class="form-control height" type="password" name="new-password" placeholder="confirmer mot de passe">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="">Changer mon mot de passe</label>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="my-btn btn btn-success" type="submit">
              <i class="fas fa-upload"> </i>
              Mettre à jour mon profil
            </button>

            <button class="my-btn btn btn-danger" data-dismiss="modal">
               <i class="fas fa-times"> </i>
              Annuler et Quitter
            </button>
          </div>
          
        </form>
      </div>
    </div>
    
  </div>
</div>