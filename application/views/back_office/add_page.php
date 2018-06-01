<?php include 'modals/add_rubric.php'; ?>
<?php include 'modals/manage_rubrics.php'; ?>
<?php include 'modals/manage_link_types.php'; ?>

<!-- the content of the html web page -->
<content class="content-panel-container table-cell">
	<div class="content-panel-top">
		<h2>Bienvenue dans l'assistant d'ajout d'une page</h2>
	</div>

	<div class="content-panel-bottom">
		<div class="add-rubric-form-container">
      <form id="my-form" method="post" class="form-bloc" action="../page/add" enctype="multipart/form-data">
        <div>
          <?php include 'page/general_information.php'; ?>
          <?php include 'page/picture.php'; ?>
          <?php include 'page/description.php'; ?>
          <?php include 'page/links.php'; ?>
        </div>
        <div class="form-group btn-container">
          <button id="add-new-link" class="my-btn btn btn-info" type="button">
            <i class="fas fa-plus"> </i>
            Ajouter un autre lien
          </button>

          <button class="my-btn btn btn-primary">
            <i class="fas fa-download"> </i>
            Importer à partir d'un fichier
          </button>

          <a class="my-btn btn btn-warning" href="../rubric/manage">
            <i class="fas fa-reply-all"> </i>
            Vider tous les champs de saisie
          </a>

          <button id="add" class="my-btn btn btn-success" type="submit">
            <i class="fas fa-upload"> </i>
            Ajouter la page
          </button>
        </div>
      </form>
    </div>
	</div>
</content>

<script type="text/javascript">
  $(document).ready( function () {
    /* The textarea editor */
    CKEDITOR.replace('description');
  });

  <?php include 'page/add_new_link.js'; ?>
</script>
<!-- to complete the html web page tags -->
			</div>
		</div>
	</body>
</html>