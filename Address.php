<?php

class Address
{
    function __construct()
    {

    }
    function get_address($cep)
    {
        /** @param string
         *
         * Recebe o cep digitado pelo usuario e retorna o xml para preenchimento dos campos(CEP, Rua, Bairro, Estado)
         *
         * @return xml
         */

        $cep = preg_replace("/[^0-9]/", "", $cep);
        $url = "http://viacep.com.br/ws$cep/xml/";

        $xml = simplexml_load_file($url);
        return $xml;
    }

}