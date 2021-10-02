<?php
error_reporting(E_ALL ^ E_STRICT); //Para mostrar los errores de php en pantalla
ini_set('display_errors', 'On');

include('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LLantera</title>

  <!-- Custom fonts for this template -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
    integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="40" height="40"
viewBox="0 0 172 172"
style=" fill:#fff;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" 
stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" 
stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" 
style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#fff">
  <path d="M76.23765,7.57875c-4.40476,-0.12056 -7.30849,0.13083 -7.76687,0.17469c-1.376,0.13416 -2.53673,1.08091 -2.94953,2.40531c-0.4128,1.32096 0.00876,2.76404 1.06828,3.655c0.09632,0.08256 9.62797,8.35286 5.75797,13.88094c-2.91024,4.15552 -5.0368,3.45242 -12.87313,-1.37734c-5.94776,-3.67048 -13.36257,-8.228 -22.29281,-6.47016c-12.12944,2.3908 -17.67193,-2.07239 -25.34313,-8.25062c-0.92192,-0.74304 -1.86523,-1.50054 -2.83531,-2.26422c-1.09048,-0.85656 -2.5785,-0.83221 -3.78938,-0.15453c-1.21088,0.68112 -1.8784,2.16134 -1.71328,3.54078c1.30032,10.98736 4.34198,36.72426 24.19422,42.47594c6.34336,1.83696 10.4641,4.59675 11.91234,7.9886c1.47576,3.45376 -0.01027,6.97261 -0.7189,8.32453c-0.86,1.64776 -3.36583,2.88116 -6.53063,3.21828c-5.51432,0.58824 -14.14705,-1.50795 -20.56609,-9.26515c-0.97008,-1.1696 -2.59102,-1.56918 -3.98422,-0.98094c-1.40008,0.59168 -2.24793,2.03062 -2.08281,3.54078c2.10528,19.50136 8.15366,23.88709 15.1575,28.96453c4.76096,3.45032 10.15794,7.36203 15.78234,17.89875c3.00312,5.48336 1.81922,10.58246 -0.55094,13.00078c-2.30136,2.34608 -5.79113,2.4717 -9.82281,0.3561c-1.23152,-0.64672 -2.72281,-0.4844 -3.79609,0.40312c-1.0664,0.89096 -1.4978,2.3306 -1.08844,3.655c6.81464,22.17424 21.74075,29.58787 38.55891,32.08875c-9.37744,-12.96536 -15.24485,-33.5687 -15.24485,-57.71406c0,-40.13792 16.15768,-70.57778 37.84,-72.12578v-0.14781h48.1936c-14.59248,-22.74528 -41.30166,-26.45957 -54.51594,-26.82125zM101.59422,41.28c6.622,5.60376 12.1339,14.37383 16.01078,25.45063l21.94344,8.90234c-5.762,-20.81888 -16.737,-34.35297 -26.88844,-34.35297zM128.3886,41.28c7.88448,7.12424 14.35141,19.31571 18.21453,34.25219l13.6525,-11.31437c-6.2608,-13.69464 -15.55418,-22.40456 -26.14938,-22.79672c0.00344,-0.04816 -0.00672,-0.09294 -0.00672,-0.1411zM84.28,41.28672c-18.32488,0 -32.68,28.71992 -32.68,65.38688c0,36.6704 14.35512,65.39359 32.68,65.39359c18.32488,0 32.68,-28.72663 32.68,-65.39359c0,-36.66696 -14.35512,-65.38688 -32.68,-65.38688zM79.7314,68.8739c10.89104,0 16.5886,19.03696 16.5886,37.84c0,18.80304 -5.69756,37.84 -16.5886,37.84c-10.89104,0 -16.58859,-19.03696 -16.58859,-37.84c0,-18.80304 5.69755,-37.84 16.58859,-37.84zM162.94985,70.9164l-14.66031,12.16094c1.40352,7.46824 2.21047,15.42415 2.21047,23.68359c0,0.946 -0.0567,1.86932 -0.0739,2.80844l17.78453,-11.80484c-0.70176,-9.86248 -2.52254,-18.97053 -5.26078,-26.84813zM120.10437,75.16937c1.93672,7.67808 3.18222,16.14435 3.57438,25.20875l19.84047,10.17219c0.0344,-1.25904 0.10078,-2.50282 0.10078,-3.78938c0,-8.17344 -0.81792,-15.85485 -2.1836,-22.93781zM79.7314,75.7539c-3.86656,0 -9.70859,12.34616 -9.70859,30.96c0,18.61384 5.84203,30.96 9.70859,30.96c3.86656,0 9.7086,-12.3496 9.7086,-30.96c0,-18.6104 -5.84204,-30.96 -9.7086,-30.96zM168.53985,105.80015l-18.57735,12.33563c-0.73272,8.34888 -2.22063,16.25884 -4.36719,23.44844l20.49219,-10.48797c1.5824,-7.50952 2.47922,-15.71338 2.47922,-24.38906c0,-0.3096 -0.02343,-0.60087 -0.02687,-0.90703zM123.79969,108.17187c-0.09288,9.12976 -1.01974,17.7346 -2.66062,25.59844l16.90437,9.37265c2.4596,-7.28592 4.23722,-15.73805 5.0525,-25.0811zM163.7561,140.02547l-21.52688,11.01875c-3.71864,8.90616 -8.49621,16.16209 -13.92797,21.02969h5.06594c13.12704,0 24.33451,-12.75004 30.38891,-32.04844zM119.45937,140.71078c-3.85968,13.83912 -10.08484,24.77568 -17.82484,31.3564h10.32672c0.23392,-0.0516 0.44435,-0.14109 0.69203,-0.14109c8.1528,0 16.81886,-8.31265 22.90422,-22.29281z"></path></g></g></svg>
        </div>
        <div class="sidebar-brand-text mx-3 font-family-sans-serif">LLantera</div>
      </a>     
   
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item active">               
          <a class="nav-link" href="includes/logout.php"><i class="fas fa-fw fa-user"></i> <span>Salir</span></a>        
      </li>
       <!-- Divider -->
       <hr class="sidebar-divider d-none d-md-block">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
   
      <!-- Main Content -->
      <div id="content">    
         <!-- Topbar -->
         <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
  <i class="fa fa-bars"></i>
</button>
<h1 style='font-family: "Arial Black", Gadget, sans-serif;
font-size: 31px;
letter-spacing: -0.6px;
word-spacing: -0.8px;
color: gray;
font-weight: 400;
text-decoration: none solid rgb(68, 68, 68);
font-style: normal;
font-variant: small-caps;
text-transform: capitalize;'>LLantera</h1>
<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

  <div class="topbar-divider d-none d-sm-block"></div>
  <!-- Nav Item - User Information -->
  <li class="nav-item dropdown no-arrow">
   <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
 Agregar
</button>
</li>
</ul>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar llanta</h5>
        <button type="button" id="cerrar" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>     
      <div class="modal-body">                  
         <div class="input-group mb-3">
          <div class="input-group-prepend"> 
          <span class="input-group-text" id="inputGroup-sizing-default">Numero de rin:</span>                
          </div>          
          <input type="text" class="form-control" id="nrin" maxlength="2" placeholder="13,14,15.." aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
         </div> 
         <div class="input-group mb-3">           
          <div class="input-group-prepend">      
          <span class="input-group-text" id="inputGroup-sizing-default">Serie:</span>                           
          </div>          
          <input type="text" class="form-control" id="nserie"  placeholder="Serie" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
         </div>           
         <div class="input-group mb-3">           
          <div class="input-group-prepend">      
          <span class="input-group-text" id="inputGroup-sizing-default">Marca:</span>
          </div>          
          <input type="text" class="form-control" id="nmarca" placeholder="Marca" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
         </div>  
         <div class="input-group mb-3">
          <div class="input-group-prepend">
           <span class="input-group-text">$</span>
          </div>
          <input type="text" class="form-control" id="nprecio"  placeholder="Precio" aria-label="Amount (to the nearest dollar)">
          <div class="input-group-append">
            <span class="input-group-text">.00</span>
          </div>
        </div> 
        
      <!--  <div class="input-group">
         <div class="input-group-prepend">
           <span class="input-group-text">Comentarios</span>
         </div>
         <textarea class="form-control" aria-label="With textarea"></textarea>
       </div>-->

      </div>      
      <div class="modal-footer">
        <button type="button" id="cerrar" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="agregar">Agregar nueva llanta</button>
      </div>
    </div>
  </div>
</div> 

<!--Modal editar-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar llanta</h5>
        <button type="button" id="cerrar" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>     
      <div class="modal-body">                  
         <div class="input-group mb-3">
          <div class="input-group-prepend"> 
          <span class="input-group-text" id="inputGroup-sizing-default">Numero de rin:</span>                
          </div>          
          <input type="text" class="form-control" id="rin" maxlength="2" placeholder="13,14,15.." aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
         </div> 
         <div class="input-group mb-3">
          <div class="input-group-prepend"> 
          <span class="input-group-text" id="inputGroup-sizing-default">Ubicacion:</span>                
          </div>          
          <input type="text" class="form-control" id="rin" placeholder="Ubicacion" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
         </div>
         <div class="input-group mb-3">           
          <div class="input-group-prepend">      
          <span class="input-group-text" id="inputGroup-sizing-default">Serie:</span>                           
          </div>          
          <input type="text" class="form-control" id="serie" maxlength="7" placeholder="Serie" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
         </div>           
         <div class="input-group mb-3">           
          <div class="input-group-prepend">      
          <span class="input-group-text" id="inputGroup-sizing-default">Marca:</span>
          </div>          
          <input type="text" class="form-control" id="marca" placeholder="Marca" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
         </div>  
         <div class="input-group mb-3">
          <div class="input-group-prepend">
           <span class="input-group-text">$</span>
          </div>
          <input type="text" class="form-control" id="precio" aria-label="Amount (to the nearest dollar)">
          <div class="input-group-append">
            <span class="input-group-text">.00</span>
          </div>
        </div>         
      </div>      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="guardar">Guardar cambios</button>
      </div>
    </div>
  </div>
</div> 

<!-- Modal eliminar-->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar registro de llanta?</h5>
        <button type="button" id="cerrar" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Seguro quieres eliminar esta llanta?
        <input type="text" class="form-control" hidden id="oculto" aria-label="Amount (to the nearest dollar)">
      </div>
      <div class="modal-footer">
        <button type="button" id="cerrar" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="elim">Eliminar</button>
      </div>
    </div>
  </div>
</div>

<!--End Modals-->
<!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid mt-3">        
          <!-- DataTales Example -->
          <div class="card shadow mb-4">          
            <div class="card-body">          
              <div class="table-responsive">                          
                <table class="table table-bordered table-striped table-m" id="dataTable" width="100%" cellspacing="0">                            
                  <thead>                  
                    <tr>                    
                      <th width="5%">Num_rin</th>
                      <th>Ubicacion</th>
                      <th>Serie</th>
                      <th>Marca</th>
                      <th>Precio</th>                                          
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>                 
                  <tbody>
                  <?php
                  $resultado = mysqli_query($resultado, "SELECT * FROM `llantas`");                                                                               
                       while ($fila = mysqli_fetch_array($resultado)) {
                        ?>
                        <tr id="id_llanta" value='<?php echo utf8_encode($fila['id_llanta']) ?>'>
                            <td width="1%" id="num_rin" >
                                <?php echo utf8_encode($fila['num_rin']) ?>
                            </td>
                            <td width="1%" id="comentarios" >
                                <?php echo utf8_encode($fila['comentarios']) ?>
                            </td>
                            <td width="10%" id="serie">
                                <?php echo utf8_encode($fila['serie']) ?>
                            </td>
                            <td width="12%" id="marca">
                                <?php echo utf8_encode($fila['marca']) ?>
                            </td>  
                            <td width="12%" id="precio">
                                <?php echo utf8_encode($fila['precio']) ?>
                            </td>                                                    
                            <td width="5%">                                                  
                          <button type="button" class="btn btn-primary" onclick="editar(<?php echo utf8_encode($fila['id_llanta']) ?>,<?php echo utf8_encode($fila['num_rin']) ?>,<?php echo utf8_encode($fila['serie'])?>,<?php echo utf8_encode($fila['precio'])?>,'<?php echo utf8_encode($fila['marca'])?>')" id="editar" data-toggle="modal" data-target="#exampleModal2"> 
                              Editar</button>                            
                            </td>
                            <td width="5%">
                            <button type="button" class="btn btn-danger" onclick="eliminar(<?php echo utf8_encode($fila['id_llanta'])?>)" data-toggle="modal" data-target="#exampleModal3">
                              Eliminar</button>   
                            </td>
                        </tr>   
                        <?php
                    }
                    ?>                                     
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy;<a target="_blank" href="http://www.edwinrm.com/"> EdwinRM<a></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
  </div>
  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script>   
    
$("#agregar").click(function() {    
    var nrin = $("#nrin").val(); 
    var nserie = $("#nserie").val(); 
    var nmarca = $("#nmarca").val(); 
    var nprecio = $("#nprecio").val();
  
    var sendInfo = {            
            data_rin: nrin,
            data_serie: nserie,
            data_marca: nmarca,
            data_precio: nprecio
        };
        
       $.ajax({
           type: "POST",
           url: "./modal/insert.php",
           dataType: "json",
           success: function(response) {
            alert(response);
            location.reload(true);
            },error: function(){
            alert(response);
         },
           data: sendInfo
       });

 });



 $("#guardar").click(function() {
   console.log('guardar');
  var id =$("#oculto").val(); 
  var rin = $("#rin").val(); 
  var serie = $("#serie").val(); 
  var marca = $("#marca").val(); 
  var precio = $("#precio").val();
        var sendInfo = {
            data_id: id,
            data_rin: rin,
            data_serie: serie,
            data_marca: marca,
            data_precio: precio
        };
        
       $.ajax({
           type: "POST",
           url: "./modal/update.php",
           dataType: "json",
           success: function(response) {
            alert(response);
            location.reload(true);
            },error: function(){
            alert(response);
         },
           data: sendInfo
       });

 });

 $("#elim").click(function() {
  var e = $("#oculto").val();
  var sendInfo = {
            data_id: e,            
        };        
       $.ajax({
           type: "POST",
           url: "./modal/delete.php",
           dataType: "json",
           success: function(response) {
            alert(response);
            location.reload(true);
            },error: function(){
            alert(response);
         },
           data: sendInfo
       });
 });


function editar(idllanta,num_rin,serie,precio,marca){ 
$("#oculto").val(idllanta);
$("#rin").val(num_rin); 
$("#serie").val(serie); 
$("#marca").val(marca); 
$("#precio").val(precio);  
}
function eliminar(idllanta){   
  $("#oculto").val(idllanta); 
}

</script>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>

  <!--<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->
  
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

  <!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>


