<?php
    $fichero = '[
 {
 "dni": "12345678A",
 "nombre": "María López",
 "edad": 21,
 "asignaturas": {
 "Programación": 8,
 "Bases de Datos": 7,
 "Entornos de Desarrollo": 6
 }
 },
 {
 "dni": "87654321B",
 "nombre": "Juan Pérez",
 "edad": 22,
 "asignaturas": {
 "Programación": 5,
 "Lenguajes de Marcas": 9
 }
 },
 {
 "dni": "11223344C",
 "nombre": "Laura Gómez",
 "edad": 20,
 "asignaturas": {
 "Programación": 9,
 "Bases de Datos": 8,
 "Sistemas Informáticos": 7,
 "Entornos de Desarrollo": 6
 }
 }
]';
    $obj = json_decode($fichero);
    foreach ($obj as $fila) {
    }
