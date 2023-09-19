<?php

include 'reg.php';

$hor = "SELECT * FROM horario";

$query = $conn->query($hor);

$xml = new SimpleXMLElement('<root_contact/>');

if($query){

while ($r = $query->fetch_object()) {
    
        $contact = $xml->addChild('contact', '');
        $contact->addAttribute('I.D', $r->Hor_id);
        $contact->addAttribute('Nombre', $r->Hor_name);
        $contact->addAttribute('Lunes', $r->Hor_lunes);
        $contact->addAttribute('Martes', $r->Hor_martes);
        $contact->addAttribute('Miercoles', $r->Hor_miercoles);
        $contact->addAttribute('Jueves', $r->Hor_jueves);
        $contact->addAttribute('Viernes', $r->Hor_viernes);
        $contact->addAttribute('Id_Empleado', $r->emp_id);

 }
}

$dom = new DOMDocument('1.0');
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml->asXML());

header('Content-Type: text/xml Charset="utf8"');
header('Content-Disposition: attachment; filename="Horarios.xml";');
echo $dom->saveXML();
?>