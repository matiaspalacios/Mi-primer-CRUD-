<!DOCTYPE html>
  <?php
  session_start();
  if (@!$_SESSION['user']) {
    header("Location:../index.php");
  }elseif ($_SESSION['tipo_usuario']==1) {
    header("Location:../usuario/admin.php");
  }
  ?>


<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Frutosdelvallegeneroso</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <div class="container">
      <?php
      include("../include/barradesession.php");
      ?>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                      <h2><b>Productos</b> en Bodega</h2>
                    </div>
                    <br>
                    <div class="col-sm-5">
                     <a href="#addProductModal" class="btn btn-primary" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Nuevo producto</span></a>
                     </div>
                </div>
            </div>
            <div class='col-sm-4 pull-right'>
              <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="form-control" placeholder="Buscar"  id="q" onkeyup="load(1);" />
                                <span class="input-group-btn">
                                    <button class="btn btn-info" type="button" onclick="load(1);">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
              </div>
          </div>
          <div class='clearfix'></div>
          <hr>
          <div id="loader"></div><!-- Carga de datos ajax aqui -->
          <div id="resultados"></div><!-- Carga de datos ajax aqui -->
          <div class='outer_div'></div><!-- Carga de datos ajax aqui -->    
        </div>
    </div>
  <!-- Edit Modal HTML -->
  <?php include("../php/modal_agregar.php");?>
  <!-- Edit Modal HTML -->
  <?php include("../php/modal_modificar.php");?>
  <!-- Delete Modal HTML -->
  <?php include("../php/modal_eliminar.php");?>
  <script src="../js/myjs.js"></script>
</body>
</html>