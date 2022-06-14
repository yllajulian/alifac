<!doctype html>
<html lang="en">
 <head>

        <meta charset="utf-8" />
        <title>Sistema de Venta| Beta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="web/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="web/assets/css/bootstrap-v5.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- DataTables -->
        <link href="web/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="web/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="web/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- Style Css-->
        <link href="web/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
          <!-- swicherry Css-->
        <link rel="stylesheet" href="web/assets/switchery/dist/switchery.css">

    

<body>

	<style type="text/css">
		@import 'https://fonts.googleapis.com/css?family=Inconsolata';

	html {
	  min-height: 100%;
	}

	body {
	  box-sizing: border-box;
	  height: 100%;
	  background-color: #000000;
	  background-image: radial-gradient(#11581E, #041607);
	  font-family: 'Inconsolata', Helvetica, sans-serif;
	  font-size: 1.5rem;
	  color: rgba(128, 255, 128, 0.8);
	  text-shadow: 0 0 1ex rgba(51, 255, 51, 1), 0 0 2px rgba(255, 255, 255, 0.8);
	}

	.overlay {
	  pointer-events: none;
	  position: absolute;
	  width: 100%;
	  height: 100%;
	  background: repeating-linear-gradient(180deg, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0) 100%);
	  background-size: auto 4px;
	  z-index: 99;
	}

	.overlay::before {
	  content: "";
	  pointer-events: none;
	  position: absolute;
	  display: block;
	  top: 0;
	  left: 0;
	  right: 0;
	  bottom: 0;
	  width: 100%;
	  height: 100%;
	  background-image: linear-gradient(0deg, transparent 0%, rgba(32, 128, 32, 0.2) 2%, rgba(32, 128, 32, 0.8) 3%, rgba(32, 128, 32, 0.2) 3%, transparent 100%);
	  background-repeat: no-repeat;
	  animation: scan 7.5s linear 0s infinite;
	}

	@keyframes scan {
	  0% { background-position: 0 -100vh; }
	  35%, 100% { background-position: 0 100vh; }
	}

	.terminal {
	  box-sizing: inherit;
	  position: absolute;
	  height: 100%;
	  width: 1000px;
	  max-width: 100%;
	  padding: 4rem;
	  text-transform: uppercase;
	}

	.output {
	  color: rgba(128, 255, 128, 0.8);
	  text-shadow: 0 0 1ex #3f3, 0 0 2px rgba(255, 255, 255, 0.8);
	}

	.output::before {
	  content: "> ";
	}

	.input {
	  color: rgba(192, 255, 192, 0.8);
	  text-shadow: 0 0 1ex #3f3, 0 0 2px rgba(255, 255, 255, 0.8);
	}

	.input::before {
	  content: "$ ";
	}

	a {
	  color: #fff;
	  text-decoration: none;
	}

	a::before {
	  content: "[";
	}

	a::after {
	  content: "]";
	}

	.errorcode {
	  color: white;
	}

	.copyright {
	  font-size: .7rem;
	}
	</style>

	<!-- Aqui entra el Layout, // Las vistas se cargaran aqui adentro -->
	<?php  

	if(file_exists($pathView)){
		require($pathView);
	} else {
		require("./view/off.vw.php"); //Pagina Ops. Error Not Found (esto NO es 404)
	}
	?>