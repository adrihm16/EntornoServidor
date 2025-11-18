<?php
    $alumnos = [
        "1ESO" => [
            "Alumno 1" => ["lengua" => ["nota" => 8, "faltas" => 3], "mates" => ["nota" => 9, "faltas" => 3], "ingles" => ["nota" => 8, "faltas" => 3]],
            "Alumno 2" => ["lengua" => ["nota" => 8, "faltas" => 3], "mates" => ["nota" => 9, "faltas" => 3], "ingles" => ["nota" => 8, "faltas" => 3]]
        ],
        "2ESO" => [
            "Alumno 3" => ["lengua" => ["nota" => 8, "faltas" => 3], "mates" => ["nota" => 9, "faltas" => 3], "ingles" => ["nota" => 8, "faltas" => 3]],
            "Alumno 4" => ["lengua" => ["nota" => 8, "faltas" => 3], "mates" => ["nota" => 9, "faltas" => 3], "ingles" => ["nota" => 8, "faltas" => 3]]
        ],
    ];
    foreach ($alumnos as $curso => $alumnos) {
        foreach ($alumnos as $nombre => $datos) {
            foreach ($datos as $asignatura => $datos) {
                foreach ($datos as $dato => $valor) {

                }
            }
        }
    }