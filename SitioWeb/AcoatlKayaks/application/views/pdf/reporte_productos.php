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
               <th>Producto</th>
               <th>Descripción</th>
               <th>Precio</th>
               <th>Stock</th>
               <th>Status</th>
           </tr>
       </thead>
       <tbody>
          <?php foreach ($productos as $item) { ?>
            <tr>
                <td><?php echo $item->nombre_producto;?></td>
                <td><?php echo $item->descricion;?></td>
                <td><?php echo $item->precio;?></td>
                <td><?php echo $item->stock;?></td>
                <td><?php echo $item->status;?></td>
            </tr>
          <?php  }?>
       </tbody>
</table>



</body>
</html>
