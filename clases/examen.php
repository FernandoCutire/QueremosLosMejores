<?php

class Examen{
    private $respu;
    private $preguntas = array(
      array("¿Nunca deja para mañana lo que puede hacer hoy?", 
        "¿Se enfada alguna vez?", 
        "¿Alguna vez ha exagerado sus méritos?", 
        "¿Ha mentido alguna vez?",
        "¿Habla mal algunas veces de persona que conoce?", 
        "¿Solamente habla de lo que conoce?",
        "¿Siempre llega a tiempo a su trabajo/Universidad?", 
        "¿Se avergüenza de algo que haya hecho alguna vez?", 
        "¿Le son simpáticas todas las personas que conoce?", 
        "¿Tiene los mismos modales de casa que cuando va de visita?"),
      array(10, 10, 5, 10, 5, 10, 5 ,10, 5, 10, 10),
      array("Sí", "Sí", "Sí", "Sí", "Sí", "Sí", "No", "Sí", "No", "No", "No"));

    public function asignar($answ) {
        $this->respu = $answ;
    }

    public function evaluar(){
        $puntaje = 0;
        for($j=0; $j<10; $j++){
            if($this->respu[$j] == $this->preguntas[2][$j]){
                $puntaje = $puntaje + $this->preguntas[1][$j];
            }
        }
        return $puntaje;
    }

    public function traerPreguntas() {
        return $this->preguntas;
    }
}
?>