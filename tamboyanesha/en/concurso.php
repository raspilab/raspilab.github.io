<?php
	
	if (isset($_REQUEST['doble-switch']) AND $_REQUEST['doble-switch'] == '1') 
	{
		if(!empty($_REQUEST['email']) AND 
	   !empty($_REQUEST['name']) AND 
	   !empty($_REQUEST['dni']) AND
	   !empty($_REQUEST['phone']) AND
	   !empty($_REQUEST['university']) AND
	   !empty($_REQUEST['category'])){

		$para = "ecociudades.peru@gmail.com";
		$de = $_REQUEST['email'];
		$nombre = $_REQUEST['name'];
		$dni = $_REQUEST['dni'];
		$telefono = $_REQUEST['phone'];
		$entidad = $_REQUEST['university'];
		$categoria = $_REQUEST['category'];
		
		$de2 = $_REQUEST['email2'];
		$nombre2 = $_REQUEST['name2'];
		$dni2 = $_REQUEST['dni2'];
		$telefono2 = $_REQUEST['phone2'];
		$entidad2 = $_REQUEST['university2'];
		
		$headers = "From: $de";
		$headers = "From: " . $de . "\r\n";
		$headers .= "Reply-To: ". $de . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		$subject = "Inscripción a Concurso de Arquitectura Tambo Yanesha 2019.";

		$logo = 'https://tamboyanesha.com/img/logo.png';
		$link = 'https://tamboyanesha.com';

		$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Inscripción</title></head><body>";
		$body .= "<table style='width: 100%;'>";
		$body .= "<thead style='text-align: center;'><tr><td style='border:none; background:#2b2616' colspan='2'>";
		$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
		$body .= "</td></tr></thead><tbody><tr>";
		$body .= "<td style='border:none; width: 50%;'><strong>Nombre Primer Integrante:</strong> {$nombre}</td>";
		$body .= "<td style='border:none; width: 50%;'><strong>Email Primer Integrante:</strong> {$de}</td>";
		$body .= "</tr> <tr>";
		$body .= "<td style='border:none; width: 50%;'><strong>DNI Primer Integrante:</strong> {$dni}</td>";
		$body .= "<td style='border:none; width: 50%;'><strong>Telefono Primer Integrante:</strong> {$telefono}</td>";
		$body .= "</tr> <tr>";
		$body .= "<td style='border:none; width: 50%;'><strong>Entidad Primer Integrante:</strong> {$entidad}</td>";
		$body .= "<td style='border:none; width: 50%;'><strong>Categoria Primer Integrante:</strong> {$categoria}</td>";
		$body .= "</tr>";
		
		$body .= "<tr style='text-align: center;'><tr><td style='border:none; background:#2b2616' colspan='2'>";
		$body .= "<br><br>";
		$body .= "</td></tr>";
		
		$body .= "<tr><td style='border:none; width: 50%;'><strong>Nombre Segundo Integrante:</strong> {$nombre2}</td>";
		$body .= "<td style='border:none; width: 50%;'><strong>Email Segundo Integrante:</strong> {$de2}</td>";
		$body .= "</tr> <tr>";
		$body .= "<td style='border:none; width: 50%;'><strong>DNI Segundo Integrante:</strong> {$dni2}</td>";
		$body .= "<td style='border:none; width: 50%;'><strong>Telefono Segundo Integrante:</strong> {$telefono2}</td>";
		$body .= "</tr> <tr>";
		$body .= "<td style='border:none; width: 50%;'><strong>Entidad Segundo Integrante:</strong> {$entidad2}</td>";
		$body .= "<td style='border:none; width: 50%;'><strong>Categoria Segundo Integrante:</strong> {$categoria}</td>";
		$body .= "</tr>";
		$body .= "</tbody></table>";
		$body .= "</body></html>";

		$send = mail($para, $subject, $body, $headers);
		if ($send) 
		{
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=inscripcion-correcta.html'>";
		}else
		{
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=fallo-inscripcion.html'>";}
		}else
		{
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=fallo-inscripcion.html'>";
		}
	}else
	{
		if(!empty($_REQUEST['email']) AND 
		   !empty($_REQUEST['name']) AND 
		   !empty($_REQUEST['dni']) AND
		   !empty($_REQUEST['phone']) AND
		   !empty($_REQUEST['university']) AND
		   !empty($_REQUEST['category'])){

			$para = "ecociudades.peru@gmail.com";
			$de = $_REQUEST['email'];
			$nombre = $_REQUEST['name'];
			$dni = $_REQUEST['dni'];
			$telefono = $_REQUEST['phone'];
			$entidad = $_REQUEST['university'];
			$categoria = $_REQUEST['category'];
			
			$headers = "From: $de";
			$headers = "From: " . $de . "\r\n";
			$headers .= "Reply-To: ". $de . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

			$subject = "Inscripción a Concurso de Arquitectura Tambo Yanesha 2019.";

			$logo = 'https://tamboyanesha.com/img/logo.png';
			$link = 'https://tamboyanesha.com';

			$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Inscripción</title></head><body>";
			$body .= "<table style='width: 100%;'>";
			$body .= "<thead style='text-align: center;'><tr><td style='border:none; background:#2b2616' colspan='2'>";
			$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
			$body .= "</td></tr></thead><tbody><tr>";
			$body .= "<td style='border:none; width: 50%;'><strong>Nombre:</strong> {$nombre}</td>";
			$body .= "<td style='border:none; width: 50%;'><strong>Email:</strong> {$de}</td>";
			$body .= "</tr> <tr>";
			$body .= "<td style='border:none; width: 50%;'><strong>DNI:</strong> {$dni}</td>";
			$body .= "<td style='border:none; width: 50%;'><strong>Telefono:</strong> {$telefono}</td>";
			$body .= "</tr> <tr>";
			$body .= "<td style='border:none; width: 50%;'><strong>Entidad:</strong> {$entidad}</td>";
			$body .= "<td style='border:none; width: 50%;'><strong>Categoria:</strong> {$categoria}</td>";
			$body .= "</tr>";
			$body .= "</tbody></table>";
			$body .= "</body></html>";

			$send = mail($para, $subject, $body, $headers);
			if ($send) {
				echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=inscripcion-correcta.html'>";
			}else{
				echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=fallo-inscripcion.html'>";}
			}else{
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=fallo-inscripcion.html'>";
		}
	}

?>
