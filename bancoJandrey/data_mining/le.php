<?php

// activar Error reporting
error_reporting(E_ALL);
 
// carregar a classe PHPExcel
require_once 'PHPExcel.php';
require_once 'PHPExcel\IOFactory.php';
 
// iniciar o objecto para leitura
// definir a abertura do ficheiro em modo só de leitura
$objReader = PHPExcel_IOFactory::createReader('Excel2007');
$objReader->setReadDataOnly(true);
$objPHPExcel = $objReader->load("alunos.xlsx");

 

echo "<table border='1'>";
// navegar na linha
for ($sheet=60; $sheet <= 91; $sheet++){
  echo "<br>Página=".$sheet;
for($linha=2; $linha<=150; $linha++){
	$objPHPExcel->setActiveSheetIndex($sheet);
  
    echo "<tr>";
 
    

	// navegar nas colunas da respectiva linha
	// $col=1;
  $valores = "'";
	echo "<br>";
    for($coluna=0; $coluna<=9; $coluna++){
   	$data = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($coluna, $linha)->getValue();

 		 if($coluna==0 && strlen($data)==0) {

 		 	$linha++;
 		 	break;
 		}	
    
    
     if($coluna==3||$coluna==9){
     	$dado_fmt = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP( $data ) );
      $valores .= $dado_fmt."'";
    }else{
      $valores .= $data."'";
    }
    if($coluna < 9){
      $valores .= ",'";
    }
    // 	echo $col."-".$data;
    //   $valores .= $data;
    //   if($coluna > 0){
    //     $valores .= ","
    //   }
    // 	$stm->bindParam($col, $data );
 		
    //   echo "<td>". $data ."</td>";
    // }else{
    // 	echo "<td>".  $data  ."</td>";
    	
    // 	echo $col."-".$data;
    // 	$stm->bindParam($col, $data );
 			
    // }
    
    //   $col++;
    }
    //if($col==11){

    if(strlen($valores) > 1){
      include_once("conexao.class.php");
    $valores = utf8_decode($valores);
    $sql = "insert into aluno (numero, cgm, nome, data_nascimento,idade, sexo, telefone, rg, situacao, data_matricola) values ($valores)";
    echo $sql;  
    $con = new Conexao();
      
    $stm = $con->prepare($sql);

      if($stm->execute()){
        echo "Executou";
      }
      else{
        echo "Nao exectuou";
      }
    }
    echo "</tr>";

}
}
echo "</table>";
?>

