<?php 
	class enrutador{
		public function cargarVista($vista){
 
			switch ($vista) {
			    case "1": 
			        include_once("../view/hackaton.php");
			         
			        break;
			    case "2": 
			        include_once("../view/Vertical.php");
			         
			        break;
			    case "3": 
			        include_once("../view/confHackaton.php");			         
			        break;
		        case "4": 
			        include_once("../view/Rubricas.php");			         
		        break;
			    case "error":
			    	include_once("../view/".$vista.".php");
			    break;	

			    default:	
					include_once("../view/error.php");
			}

		}

		public function validarGET($variable){ 
			if (empty($variable)) {
				 include_once("../view/index.php");
			}
			else{
				return true;
			}
		} 
	}


?>