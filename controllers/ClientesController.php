<?php

require_once $_SERVER['DOCUMENT_ROOT'] . './Models/Clientes';

class ClientesController{

    function index(){
        $clientes = new Clientes;
    }
}