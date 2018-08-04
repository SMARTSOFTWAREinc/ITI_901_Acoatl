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
               <th>Productos</th>
               <th>Total</th>
               <th>Email</th>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Dirección</th>
               <th>País</th>
               <th>Estado</th>
               <th>Ciudad</th>
               <th>Código Postal</th>
               <th>Teléfono</th>
               <th>Estatus</th>
               <th>Identificador de método de envío</th>
               <th>Identificador de método de pago</th>
               <th>Identificador de Usuario</th>
           </tr>  
       </thead>
       <tbody>
          <?php foreach ($pedidos as $item) { ?>
            <tr>
                <td><?php echo $item->productos;?></td>
                <td><?php echo $item->total;?></td>
                <td><?php echo $item->email;?></td>
                <td><?php echo $item->nombre;?></td>
                <td><?php echo $item->apellido;?></td>
                <td><?php echo $item->direccion;?></td>
                <td><?php echo $item->pais;?></td>
                <td><?php echo $item->estado;?></td>
                <td><?php echo $item->ciudad;?></td>
                <td><?php echo $item->cp;?></td>
                <td><?php echo $item->telefono;?></td>
                <td><?php echo $item->status;?></td>
                <td><?php echo $item->metodo_envio_id_envio;?></td>
                <td><?php echo $item->metodo_pago_id_metodo_pago;?></td>
                <td><?php echo $item->usuarios_id_usuario;?></td>
            </tr>
          <?php  }?>
       </tbody>
</table>



</body>
</html>
