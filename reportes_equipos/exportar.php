<?php
 include("../conexion.php");
 $cn = Conectarse();
 $sql = "SELECT * FROM ct_equipos_rep WHERE cancelada = 0 AND exportar = 1 ORDER BY id ASC";
 $resultado = mysql_query ($sql, $cn) or die (mysql_error ());
 $registros = mysql_num_rows ($resultado);

 $update = "UPDATE ct_equipos_rep SET exportar = 2 WHERE exportar = 1 ";
 $resultado1 = mysql_query ($update, $cn) or die (mysql_error ());

 date_default_timezone_set('America/Hermosillo');
 $today = getdate();

 if ($registros > 0) {
   require_once '../Classes/PHPExcel.php';
   $objPHPExcel = new PHPExcel();
   
   //Informacion del excel
   $objPHPExcel->
    getProperties()
        ->setCreator("Aula de Medios Sonora")
        ->setLastModifiedBy("Aula de Medios Sonora")
        ->setTitle("Equipo a reportar")
        ->setSubject("Equipo a reportar")
        ->setDescription("Aula de Medios Sonora")
        ->setKeywords("Aula de Medios Sonora")
        ->setCategory("Equipo a Reportar");    

   $i = 2;    
   $objPHPExcel->setActiveSheetIndex(0)

     ->setCellValue('A1',"Folio")
     ->setCellValue('B1',"Nombre Solicitante")
     ->setCellValue('C1',"CURP")
     ->setCellValue('D1',"Numero Serie")
     ->setCellValue('E1',"Hardware id")
     ->setCellValue('F1',"Boot Tik")
     ->setCellValue('G1',"Provisional Num")
     ->setCellValue('H1',"Estado")
     ->setCellValue('I1',"Municipio")
     ->setCellValue('J1',"Localidad")
     ->setCellValue('K1',"Parentesco")
     ->setCellValue('L1',"Nombre Niño")
     ->setCellValue('M1',"Nombre Escuela")
     ->setCellValue('N1',"Motivo")
     ->setCellValue('O1',"Correo")
     ->setCellValue('P1',"Telefono");

    while ($registro = mysql_fetch_object ($resultado)) {
       
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, $registro->id)
     ->setCellValue('B'.$i, $registro->nombrecon_sol)
     ->setCellValue('C'.$i, $registro->curp)
     ->setCellValue('D'.$i, $registro->no_serie)
     ->setCellValue('E'.$i, $registro->hardware_id)
     ->setCellValue('F'.$i, $registro->boot_tik)
     ->setCellValue('G'.$i, $registro->provisional_num)
     ->setCellValue('H'.$i, 'SONORA')
     ->setCellValue('I'.$i, $registro->nombre_mun)
     ->setCellValue('J'.$i, $registro->nombre_loc)
     ->setCellValue('K'.$i, 'PADRE')
     ->setCellValue('L'.$i, $registro->nombre_nino)
     ->setCellValue('M'.$i, $registro->nombre_escuela)
     ->setCellValue('N'.$i, 'DESBLOQUEO')
     ->setCellValue('O'.$i, $registro->correo)
     ->setCellValue('P'.$i, $registro->tel_cel);
      $i++;
      
   }
}else{

   echo '
        <script>
        swal({
        title: "Algo Anda Mal!",
        text: "Elemento no pudo exportarse.",
        type: "warning",
        showCancelButton: false,
        confirmButtonColor: "#ff0000",
        confirmButtonText: "Aceptar",
        closeOnConfirm: true
        },
        function(){
        window.location.href="";
        });
        </script> 
        ';

}
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Equipoareportar"'.$today['mday']."/".$today['mon']."/".$today['year'].'".xls"');
header('Cache-Control: max-age=0');

$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
$objWriter->save('php://output');
exit;
mysql_close (); 

?>