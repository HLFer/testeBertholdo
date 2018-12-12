<?php

class Address
{
    function __construct()
    {

    }
    //Sugestão de nomenclatura para o método get_address - Utilizar o estilo camel case, por exemplo: function getAddress()
    function get_address($cep)
    {
        /** @param string
         *
         * Recebe o cep digitado pelo usuario e retorna o xml para preenchimento dos campos(CEP, Rua, Bairro, Estado)
         *
         * @return xml
         */


         
	    /*
         *Necessário criação das variáveis para exibição na index.php
         * $logradouro, $bairro, $uf
         */

        $cep = preg_replace("/[^0-9]/", "", $cep);
        $url = "http://viacep.com.br/ws$cep/xml/";

        $xml = simplexml_load_file($url);
        //Logradouro, bairro, uf estão em $xml?
        var_dump($xml);
        exit;
        return $xml;
    }

}