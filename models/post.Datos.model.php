<?php 

include_once "../db/conection.php";

class PostDatos{
    static public function postDataEncuesta($PR1PrimeraVisita, $PR2RangoEdad, $PR3DondeVisitas, $PR4ComoConociste, $PR5Limpieza, $PR5Servicio, $PR5Comida, $PR5CalidadPrecio, $PR6VolverVisita, $PR7Comentario) {
        
        $sql = "INSERT INTO encuesta (PR1PrimeraVisita, PR2RangoEdad, PR3DondeVisitas, PR4ComoConociste, PR5Limpieza, PR5Servicio, PR5Comida, PR5CalidadPrecio, PR6VolverVisita, PR7Comentario) 
                VALUES ($PR1PrimeraVisita, $PR2RangoEdad, $PR3DondeVisitas, $PR4ComoConociste, $PR5Limpieza, $PR5Servicio, $PR5Comida, $PR5CalidadPrecio, $PR6VolverVisita, '$PR7Comentario')";
        $stmt = connection::connect()->prepare($sql);
        try{
            $stmt -> execute();
        } catch(PDOException $exception){
            return null;
        }
        return $stmt->fetchAll(PDO::PARAM_STR);
    }
}

?>