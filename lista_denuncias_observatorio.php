<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="jquery.dataTables.min.css">
    <script src="jquery.js" charset="utf-8"></script>
    <script src="jquery.dataTables.min.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="cont_tabla">
      <table class="tabla" >
          <thead>
            <tr>
            <th>LUGAR</th>
            <th>FECHA</th>
            <th>INSTITUCIÓN</th>
            <th>PROBLEMA</th>
            <th>DESCRIPCIÓN</th>
            <th>ESTADO</th>
            </tr>
            </thead>
            <tr>
              <?php
              //$response = array();
              require_once __DIR__ . '/db_config.php';
              $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
              if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }
              $cedula=$_REQUEST['cedula'];
              $consulta=mysqli_query($conn,"SELECT *,P.nombre parro,I.nombre nombre_inst from tb_denuncia D inner join parroquia P on P.idparroquia=D.parroquia inner join tb_instituciones I on I.id=D.insitucion where D.denunciante='$cedula' ORDER BY D.fecha DESC");
               while($row=mysqli_fetch_array($consulta)){
              ?>
                    <td><?php echo "Guayaquil - ".$row['parro']; ?> </td>
                    <td><?php echo substr($row['fecha'],0,-9); ?> </td>
                    <td><?php echo $row['nombre_inst'] ?> </td>
                    <td><?php echo $row['problema']; ?> </td>
                    <td><?php echo $row['Descripcion'] ?> </td>
                    <td><?php echo $row['proceso_denuncia'] ?> </td>
        </tr>

              <?php
                    }
              ?>
      </table>
    </div>
    <script>
      $(document).ready( function () {
      $('.tabla').DataTable();
        } );
    </script>
  </body>
</html>
