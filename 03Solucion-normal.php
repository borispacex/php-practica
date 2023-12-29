<?php
$dns = "mysql:host=localhost;dbname=cursounivalle";
$usuario = "root";
$clave = "";
try{
	$conexion = new PDO($dns,$usuario,$clave);
	echo "Conexion exitosa <br>";
}catch(PDOException $e){
	echo "Error de conexion: ".$e->getMessage()."<br>";
}
echo "Continuando<br>";
//Lectura de usuario
try{
	$consulta = $conexion->prepare("select * from personas");
	$consulta->execute();
	$resultados = $consulta->fetchAll();
	foreach($resultados as $d){
		echo "{$d['paterno']} {$d['materno']} {$d['nombre']} {$d['direccion']}<br> ";
	}
}catch(PDOException $e){
	echo "Error al obtener personas <br>";
}
//Insert into CREATE Person
try{
	$paterno = "Monzon";
	$materno = "Pinto";
	$nombre = "Jose";
	$direccion = "xyz";
	$consulta = $conexion->prepare("insert into personas(paterno,materno,nombre,direccion)values(:paterno,:materno,:nombre,:direccion)");
	$consulta->bindParam(':paterno',$paterno,PDO::PARAM_STR);
	$consulta->bindParam(':materno',$materno,PDO::PARAM_STR);
	$consulta->bindParam(':nombre',$nombre,PDO::PARAM_STR);
	$consulta->bindParam(':direccion',$direccion,PDO::PARAM_STR);
	$consulta->execute();
	echo "Registro creado <br>";
}catch(PDOException $e){
	echo "Error al crear un registro <br>";
}
//UPDATE
/*
try{
	$materno = "PQR";
	$id = '5';
	$consulta = $conexion->prepare("update personas set materno = :materno where id = :id");
	$consulta->bindParam(':materno',$materno,PDO::PARAM_STR);
	$consulta->bindParam(':id',$id,PDO::PARAM_INT);
	$consulta->execute();
	echo "Actualizacion realizada <br>";
}catch(PDOException $e){
	echo "Error al actualizar registro <br>";
}
*/
try{
	$materno = "YYYY";
	$id = '5';
	$consulta = $conexion->prepare("update personas set materno = '$materno' where id = '$id'");
	$consulta->execute();
	echo "Actualizacion realizada <br>";
}catch(PDOException $e){
	echo "Error al actualizar registro <br>";
}
//DELETE
/*
try{
	$id = '7';
	$consulta = $conexion->prepare("delete from personas where id='$id'");
	$consulta->execute();
	echo "REgistro eliminado <br>";
}catch(PDOException $e){
	echo "Error al borrar <br>";
}
*/
echo "Fin"
?>