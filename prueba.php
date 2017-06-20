<?php
 /* Ejemplo 1 generando excel desde mysql con PHP
    @Autor: Carlos Hernan Aguilar Hurtado
 */
 

 $conexion = mysql_connect ("localhost", "root", "");
 mysql_select_db ("ica", $conexion);    
 $sql = "SELECT * FROM cities ORDER BY name ASC";
 $resultado = mysql_query ($sql, $conexion) or die (mysql_error ());
 $registros = mysql_num_rows ($resultado);
 
 if ($registros > 0) {
   require_once 'Classes/PHPExcel.php';
   $objPHPExcel = new PHPExcel();
   
   //Informacion del excel
   $objPHPExcel->
    getProperties()
        ->setCreator("ingenieroweb.com.co")
        ->setLastModifiedBy("ingenieroweb.com.co")
        ->setTitle("Exportar excel desde mysql")
        ->setSubject("Ejemplo 1")
        ->setDescription("Documento generado con PHPExcel")
        ->setKeywords("ingenieroweb.com.co  con  phpexcel")
        ->setCategory("ciudades");    

   $i = 1;    
   while ($registro = mysql_fetch_object ($resultado)) {
       
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, $registro->name);
 
      $i++;
      
   }
}
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="ejemplo1.xlsx"');
header('Cache-Control: max-age=0');

$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
$objWriter->save('php://output');
exit;
mysql_close ();


                            if(!$ejecutar1){
                              
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
                              else
                              {

                              echo '
                              <script>
                              swal({
                              title: "Buen Trabajo!",
                              text: "Elementos Exportados correctamente",
                              type: "success",
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

   /*EXCEL*/
                          $select = "SELECT * FROM ct_equipos_rep WHERE id = '".$id_reporte."' ORDER BY id ASC";
                          $resultado = mysql_query ($select, $cn) or die (mysql_error ());
                          $registros = mysql_num_rows ($resultado);
 
                          if ($registros > 0) {
                          require_once 'Classes/PHPExcel.php';
                          $objPHPExcel = new PHPExcel();
   
                          //Informacion del excel
                          $objPHPExcel->
                           getProperties()
                               ->setCreator("ingenieroweb.com.co")
                               ->setLastModifiedBy("ingenieroweb.com.co")
                               ->setTitle("Exportar excel desde mysql")
                               ->setSubject("Ejemplo 1")
                               ->setDescription("Documento generado con PHPExcel")
                               ->setKeywords("ingenieroweb.com.co  con  phpexcel")
                               ->setCategory("ciudades");

                             $i = 1;   
                                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A0', 'Folio'
                                ->setCellValue('B0', 'Nombre de quien llama')
                                ->setCellValue('C0', 'CURP')
                                ->setCellValue('D0', 'No Serie')
                                ->setCellValue('E0', 'hardwareID')
                                ->setCellValue('F0', 'Boot tik')
                                ->setCellValue('G0', 'Provisional Number')
                                ->setCellValue('H0', 'Estado')
                                ->setCellValue('I0', 'Municipio')
                                ->setCellValue('J0', 'Localidad')
                                ->setCellValue('K0', 'Parentesco')
                                ->setCellValue('L0', 'Nombre del Niño')
                                ->setCellValue('M0', 'Escuela')
                                ->setCellValue('N0', 'Asunto')
                                ->setCellValue('O0', 'Correo Electronico')
                                ->setCellValue('P0', 'Telefono') 
                                ->setCellValue('Q0', 'Codigo de desbloqueo') 
                                ->setCellValue('R0', 'Observaciones'); 
                             while ($registro = mysql_fetch_object ($resultado)) {
       
                                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, $registro->id);
                                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$i, $registro->nombrecon_sol);
                                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$i, $registro->curp);
                                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, $registro->no_serie);
                                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$i, $registro->hardware_id);
                                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$i, $registro->boot_tik);
                                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$i, $registro->provisional_num);
                                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$i, 'SONORA');
                                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$i, $registro->nombre_mun);
                                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$i, $registro->nombre_loc);
                                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K'.$i, 'PADRE');
                                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$i, $registro->nombre_nino);
                                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$i, $registro->nombre_escuela);
                                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('N'.$i, 'DESBLOQUEO');
                                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('O'.$i, $registro->correo);
                                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('P'.$i, $registro->tel_cel);

                           
                                $i++;
      
                             }
                             }
                             header('Content-Type: application/vnd.ms-excel');
                             header('Content-Disposition: attachment;filename="ejemplo1.xlsx"');
                             header('Cache-Control: max-age=0');

                             $objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
                             $objWriter->save('php://output');
                             exit;

                             ?>