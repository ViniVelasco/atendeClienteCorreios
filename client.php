<?php

$address = 'https://apps.correios.com.br/SigepMasterJPA/AtendeClienteService/AtendeCliente?wsdl';

$client = new SoapClient($address);
try {
    $cep = $client->consultaCEP(["cep" => '74055100']);
    echo json_encode($cep);
} catch (SoapFault $ex){
    echo json_encode('CEP NÃO ENCONTRADO');
}
