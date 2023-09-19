<?php

include 'reg.php';

$hor = "SELECT * FROM factura";

$query = $conn->query($hor);

$xml = new SimpleXMLElement('<root_contact/>');

if($query){

while ($r = $query->fetch_object()) {
    
        $contact = $xml->addChild('contact', '');
        $contact->addAttribute('I.D', $r->fac_id);
        $contact->addAttribute('Tienda_UP', $r->fac_tienda);
        $contact->addAttribute('Producto', $r->fac_nombreprod);
        $contact->addAttribute('Cantidad', $r->fac_cantidad);
        $contact->addAttribute('Pago_unidad', $r->fac_pagunit);
        $contact->addAttribute('Pago_Total', $r->fac_pagototal);
        $contact->addAttribute('Cliente', $r->fac_nombrecli);
        $contact->addAttribute('Dirección', $r->fac_direccioncli);
        $contact->addAttribute('Fecha_Registro', $r->fac_fecha);
                  
 }
}

$dom = new DOMDocument('1.0');
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml->asXML());

header('Content-Type: text/xml Charset="utf8"');
header('Content-Disposition: attachment; filename="Facturas.xml";');
echo $dom->saveXML();
?>