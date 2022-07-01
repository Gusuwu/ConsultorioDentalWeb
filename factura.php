<?php
  
function getPlantilla($turnos, $cliente){
$precio=0;
$cantidad=1;
$fecha = date("Y-m-d"); 
$plantilla='
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="img/logosonrisa.png">
      </div>
      <h1>CONSULTORIO SONRISA</h1>
      <div id="company" class="clearfix">
        <div>Consultorio Sonrisa</div>
        <div>Gabriel Carrasco 1646<br /> CHACO 3500, ARG</div>
        <div>3624 904235</div>
        <div><a href="mailto:drasonrisa@gmail.com"></a>drasonrisa@gmail.com</div>
      </div>
      <div id="project">';
      foreach($cliente as $c){
        $plantilla.='
        <div><span>CLIENTE</span> '. $c["nombre"] . " " . $c["apellido"].'</div>
        <div><span>EMAIL</span> '. $c["email"] .'</div>
        <div><span>FECHA DE NACIMIENTO</span> '. $c["fecha"] .'</div>
        <div><span>REDACTADO</span> '. $fecha .'</div>';
      }
      $plantilla.='
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">FECHA</th>
            <th class="desc">PRESTACION</th>
            <th>PRECIO</th>
            <th>CANTIDAD</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>';
        foreach ($turnos as $turno){
     
         $plantilla.= '<tr>
            <td class="service">'.$turno["fecha_turno"].'</td>
            <td class="desc">'.$turno["prestacion"].'</td>
            <td class="unit">$'.$turno["precio"].'</td>
            <td class="qty">1</td>
            <td class="total">$'.(($total = (int) $turno['precio']) * $cantidad).'</td>
            </tr>';
            $precio = $precio + (int) $turno['precio'];
        }
  
         
       $plantilla.= '
          <tr>
            <td colspan="4" class="grand total">TOTAL</td>
            <td class="grand total">$'. $precio .'</td>
          </tr>';

       
$plantilla.='</tbody>
      </table>
    
    </main>
    <footer>
      
    </footer>
  </body>';

  return $plantilla;
  }
?>