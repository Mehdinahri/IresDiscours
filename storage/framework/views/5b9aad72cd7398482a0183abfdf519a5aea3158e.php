<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet" >
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <style>
      .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .show>.nav-link {
          border-bottom: 1px solid rgba(0,0,0,.9);
      }
      .info-box {
          box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px 3px rgb(0 0 0 / 20%);
          border-radius: .25rem;
          background: #fff;
          display: -ms-flexbox;
          display: flex;
          margin-bottom: 1rem;
          min-height: 80px;
          padding: .5rem;
          position: relative;
      }
      .info-box .info-box-icon {
          border-radius: .25rem;
          -ms-flex-align: center;
          align-items: center;
          display: -ms-flexbox;
          display: flex;
          font-size: 1.875rem;
          -ms-flex-pack: center;
          justify-content: center;
          text-align: center;
          width: 70px;
      }
      .info-box .info-box-content {
          -ms-flex: 1;
          flex: 1;
          padding: 5px 10px;
      }
      .info-box .info-box-text, .info-box .progress-description {
          display: block;
          overflow: hidden;
          text-overflow: ellipsis;
          white-space: nowrap;
      }
      .info-box .info-box-number {
          display: block;
          font-weight: 700;
      }
    </style>
    <?php echo $__env->yieldContent('css'); ?>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="https://ires.ma/images/centered_logo-1.png" alt="IRES" style=" HEIGHT: 50px;"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" id="Home" aria-current="page" href="/dashboard">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="Discours" href="<?php echo e(route('discour.index')); ?>">Discours</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="URL" href="<?php echo e(route('listeUrl.index')); ?>">Discours URL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="Sahara" href="<?php echo e(route('sahara.index')); ?>">Discours Sahara</a>
              </li>
            </ul>
            <ul class="nav justify-content-end" style=" margin-right: 5%; ">
                <li class="nav-item">
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-outline-secondary btn-sm" type="submit"><i class="fas fa-sign-out-alt"></i> Logout</button>
                    </form>
                </li>
              </ul>
          </div>
        </div>
      </nav>
    <div class="container">
        <div class="row p-2 mt-3" style="border-radius: 15px;background-color: #f8f9fa!important; min-height: 80vh;">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
      </div>
    
</body>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script>
    //
    $(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 3, "desc" ]],
        "language": {
          "zeroRecords": "Rien trouvé - désolé",
          "info": "Affichage de la page _PAGE_ sur _PAGES_",
          "infoEmpty": "Aucun enregistrement disponible",
          "paginate": {
            "next":       "Suivant",
            "previous":   "Retour"
          },
        }
    } );
} );
  </script>
<?php echo $__env->yieldContent('js'); ?>
</html><?php /**PATH C:\xampp\htdocs\Discours\resources\views/layouts/app.blade.php ENDPATH**/ ?>