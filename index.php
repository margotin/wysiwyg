<?php
$content = "Bonjour et bienvenue sur mon site \"CV en ligne\" ! <br><br>
Je suis activement à la recherche d'un emploi dans le développement Web.<br>
Je recherche un poste idéalement sur Rambouillet et ces alentours.
<br>
Je suis disponible
<u>
  <strong>immédiatement</strong>
</u>.";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="css/cyborg/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <div class="container">
    <div class="shadow mt-5">
      <div id="toolbar" class="d-flex justify-content-between mb-2">
        <div id="buttons">
          <button type="button" class="btn btn-outline-primary" data-action="justifyFull">
            <i class="fas fa-align-justify fa-lg"></i>
          </button>
          <button type="button" class="btn btn-outline-primary" data-action="justifyLeft">
            <i class="fas fa-align-left fa-lg"></i>
          </button>
          <button type="button" class="btn btn-outline-primary" data-action="justifyCenter">
            <i class="fas fa-align-center fa-lg"></i>
          </button>
          <button type="button" class="btn btn-outline-primary" data-action="justifyRight">
            <i class="fas fa-align-right fa-lg"></i>
          </button>
          <button type="button" class="btn btn-outline-primary" data-action="bold">
            <i class="fas fa-bold fa-lg"></i>
          </button>
          <button type="button" class="btn btn-outline-primary" data-action="italic">
            <i class="fas fa-italic fa-lg"></i>
          </button>
          <button type="button" class="btn btn-outline-primary" data-action="underline">
            <i class="fas fa-underline fa-lg"></i>
          </button>
          <button type="button" class="btn btn-outline-primary" data-action="createLink">
            <i class="fas fa-link fa-lg"></i>
          </button>
          <button type="button" class="btn btn-outline-primary" data-action="unlink">
            <i class="fas fa-unlink fa-lg"></i>
          </button>
        </div>
        <div class="text-success align-self-center mr-1">
          <i class="far fa-eye fa-2x"></i>
        </div>
      </div>

      <div id="content" class="bg-light border border-primary rounded" contenteditable>
        <?= $content; ?>
      </div>
      <button type="button" class="btn btn-outline-primary mt-3">
        Valider
      </button>
      <button type="button" class="btn btn-outline-danger mt-3">
        Publier
      </button>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content border border-primary rounded">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Saisir le lien</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="text" id="link" class="w-100">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="validate">Valider</button>
        </div>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/gh/jquery/jquery@3.2.1/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha512-8qmis31OQi6hIRgvkht0s6mCOittjMa9GMqtK9hes5iEQBQE/Ca6yGE5FsW36vyipGoWQswBj/QBm2JR086Rkw==" crossorigin="anonymous"></script>
  <script src="js/app.js"></script>
</body>

</html>