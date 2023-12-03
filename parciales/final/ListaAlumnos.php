<?php
class ListaAlumnos
{
    public $lista = array();
    public function insertarAlumno($alumno)
    {
        array_push($this->lista, $alumno);
    }
    public function mostrarLista()
    {
        return $this->lista;
    }
}
?>
