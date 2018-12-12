<?php

class Address
{
    function __construct()
    {

    }
    //Sugestão de nomenclatura para o método get_address - Utilizar a prática CamelCase, por exemplo: function getAddress()
    function get_address($cep)
    {
        /** @param string
         *
         * Recebe o cep digitado pelo usuario e retorna em forma de objeto o xml para preenchimento dos campos(CEP, Rua, Bairro, Estado)
         *
         * @return object
         */
        //Pesquisa na string(text) $cep a expressão regular diferente de números e remove, por exemplo: '.', '-', '_'.
        $cep = preg_replace("/[^0-9]/", "", $cep);
        //Necessário incluir uma '/' na url
        $url = "http://viacep.com.br/ws/$cep/xml/";
        //Interpreta um arquivo XML em forma de objeto
        $xml = simplexml_load_file($url);
        //logradouro, bairro, uf estão em $xml
        return $xml;
    }

}