<?php

class Database{

    public function connect(){
        try{
            return new PDO('mysql:host=localhost;dbname=carlosagarexamen;charset=utf8;',
                'mycarlosag70',
                'Ft7UXAV5',
                [
                    /**
                     * Activar el manejo de errores y retornar una exception.
                     */
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    /**
                     * Cambiar el modo de gestion de datos en el software
                     * En este caso queremos que retorne objetos.
                     */
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                ]);
        }catch (Exception $e){
            die($e->getMessage());
        }
    }

}



