<?php
error_reporting(E_ALL);
//abre a conexão com o MYSQL

$conn = mysqli_connect('127.0.0.1', 'root', '', 'livro');



//insere vários registros

mysqli_query(
    $conn, "INSERT INTO famosos(codigo, nome) VALUES(1,'Érico Veríssimo')"
);
mysqli_query(
    $conn, "INSERT INTO famosos(codigo, nome) VALUES(2, 'John Lennon')"
);
mysqli_query(
    $conn, "INSERT INTO famosos(codigo, nome) VALUES(3,'Mahatma Gandhi')"
);
mysqli_query(
    $conn, "INSERT INTO famosos(codigo, nome) VALUES(4, 'Ayrton Senna')"
);
mysqli_query(
    $conn, "INSERT INTO famosos(codigo, nome) VALUES(5, 'Charlie Chaplin')"
);
mysqli_query(
    $conn, "INSERT INTO famosos(codigo, nome) VALUES(6, 'Anita Garibaldi')"
);
mysqli_query(
    $conn, "INSERT INTO famosos(codigo, nome) VALUES(7, 'Mario Quintana')"
);


//fecha a conexão
mysqli_close($conn);