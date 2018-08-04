<html>
  <head>
  <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>site/template/css/dompdf.css">
  </head>

<body>

   <header>
      <table>
          <tr>
              <td id="header_logo">
                  
              </td>
              <td id="header_texto">
                  <div>ACOATL KAYAKS®</div>
                  <div>HOJA DE REPORTE DE INSCRIPCIONES.</div>
                  <div>"La vida es aquí, La vida es ahora"</div>
              </td>

              <td id="header_logos">
              </td>
          </tr>
      </table>
  </header>
  <footer>
      
  </footer>

  <table border="1" id="table_info">
       <thead>
           <tr>
               <th>Nombre de Usuario</th>
               <th>Apellido</th>
               <th>Email</th>
               <th>Estatus</th>
               <th>Privilegios</th>
           </tr>
       </thead>
       <tbody>
          <?php foreach ($usuarios as $usuario) { ?>
            <tr>
                <td><?php echo $usuario->nombre_usuario;?></td>
                <td><?php echo $usuario->apellido;?></td>
                <td><?php echo $usuario->email;?></td>
                <td><?php echo $usuario->status;?></td>
                <td><?php echo $usuario->privilegios;?></td>
            </tr>
          <?php  }?>
       </tbody>
</table>



</body>
</html>
