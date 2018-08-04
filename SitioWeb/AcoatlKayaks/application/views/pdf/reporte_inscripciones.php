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
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Email</th>
               <th>Dirección</th>
               <th>Ciudad</th>
               <th>Estado</th>
               <th>Código Potal</th>
               <th>Teléfono</th>
               <th>Total</th>
               <th>Identificador del método de pago</th>
               <th>Identificador del Usuario</th>
               <th>Identificador del Tour</th>
           </tr>
       </thead>
       <tbody>
          <?php foreach ($inscripciones as $item) { ?>
            <tr>
                <td><?php echo $item->nombre;?></td>
                <td><?php echo $item->apellido;?></td>
                <td><?php echo $item->email;?></td>
                <td><?php echo $item->direccion;?></td>
                <td><?php echo $item->ciudad;?></td>
                <td><?php echo $item->estado;?></td>
                <td><?php echo $item->cp;?></td>
                <td><?php echo $item->telefono;?></td>
                <td><?php echo $item->precio;?></td>
                <td><?php echo $item->metodo_pago_id_metodo_pago;?></td>
                <td><?php echo $item->usuarios_id_usuario;?></td>
                <td><?php echo $item->tours_id_tour;?></td>
            </tr>
          <?php  }?>
       </tbody>
</table>



</body>
</html>
