<?php 


        require_once"../../model/Login_model.php";
        require_once"../../controller/Login_controller.php"; 
       

	$funcion = new Login();


	//Con este codigo hago logout

	if(isset($_GET['logout']) && $_GET['logout']=="true")
	{
		#destruyo las sesiones muajajaja
		unset($_SESSION['user_name']);
		unset($_SESSION['user_tipo']);
		unset($_SESSION['user_name']);

		if(session_destroy())
		{
			echo "<script>window.location.href = '../../?View=Logout'</script>";
		}
	}

	//Con este codigo hago logout


	if(isset($_POST['usuario']) && isset($_POST['password']) && isset($_POST['proceso'])){
		
		try {
			$proceso = trim($_POST['proceso']);
			$usuario = trim($_POST['usuario']);
			$password = trim($_POST['password']);

			switch($proceso)
			{

				case 'login':
					$funcion->Login_Usuario($usuario,base64_decode($password));
				break;

			}


			
	
		} catch (Exception $e) {
			
			$data = "Fake";
 	   		echo json_encode($data);
		}

	}

	



 ?>