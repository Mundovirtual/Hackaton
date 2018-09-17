<?php 
    class visualizar{
    	public function visualizarDatos(){
    		
    		?>
    		<table class="table table-hover text-center">
    			<thead>
    				 <tr>
			           <th scope="col">#</th>
			           <th scope="col">Edicion</th>
			           <th scope="col">Inicio</th>
			           <th scope="col">Limite de registro</th>
			           <th scope="col">Fin</th>
			           <th scope="col">Acciones</th>
			         </tr>
    			</thead>
    		<tbody>
    		<?php
            require_once 'conectar.php';
            $esqueleto = new esqueleto();
            $resultado = $esqueleto->setVisualizar("SELECT `id`, `Edicion`, `InicioHackaton`, `FechLimiteRegProy`, `TerminoHack` FROM `hackatonedicion`");
    		if($resultado->num_rows > 0){
                $i = 1;
    			while($row = $resultado->fetch_assoc()){
    			 echo "<tr>";
    		     echo "<td>".$i."</td>";
    		     echo "<td>".$row['Edicion']."</td>";
    		     echo "<td>".$row['InicioHackaton']."</td>";
    		     echo "<td>".$row['FechLimiteRegProy']."</td>";
    		     echo "<td>".$row['TerminoHack']."<td>";
                 $Editar  = "'".$row['id']."','".$row['Edicion']."','".$row['InicioHackaton']."','".$row['FechLimiteRegProy']."','".$row['TerminoHack']."'";
                 $id="'".$row['id']."','".$row['Edicion']."'";
    		     ?>
    		     <button type="button" class="btn btn-success fas fa-edit" data-toggle="modal" data-target="#EditarHackaton" onclick="EditarHackaton(<?php echo $Editar; ?>)">	 
			     </button>	

			     <button type="button" class="btn btn-danger fas fa-trash-alt" data-toggle="modal"data-target="#EliminarHackaton" onclick="EliminarHackaton(<?php echo $id;?>)"></button>  
    		     <?php
    		     echo "</tr>";
                 $i = $i+1;
    			}
                
    		     
    		}else{
                  $b = 2;
    			?>
                <tr>
                    <td colspan="6">
    			<div class="alert alert-danger alert-dismissible fade show text-center" role="alert"><i class="fas fa-times"></i>
                 <strong> No hay registros !</strong>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
               </div>
                    </td>
                <tr>
               <?php
    		}
    		?>
    		</tbody>
           </table>
    		<?php

    	}
    }

    $vis = new visualizar();
    $vis->visualizarDatos();

?>