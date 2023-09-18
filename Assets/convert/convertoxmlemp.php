<?php

include 'reg.php';

$hor = "SELECT * FROM empleado";

$query = $conn->query($hor);

$xml = new SimpleXMLElement('<root_contact/>');

if($query){

while ($r = $query->fetch_object()) {
    
        $contact = $xml->addChild('contact', '');
        $contact->addAttribute('I.D', $r->emp_id);
        $contact->addAttribute('Cédula', $r->emp_cc);
        $contact->addAttribute('Nombre', $r->emp_nombre);
        $contact->addAttribute('Apellido', $r->emp_apellido);
        $contact->addAttribute('Cargo', $r->emp_cargo);
        $contact->addAttribute('Correo', $r->emp_email);
        $contact->addAttribute('Contraseña', $r->emp_password);
        $contact->addAttribute('Rol', $r->id_cargo);
        $contact->addAttribute('Fecha_Registro', $r->fecha_registro);

 }
}

$dom = new DOMDocument('1.0');
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml->asXML());

header('Content-Type: text/xml Charset="utf8"');
header('Content-Disposition: attachment; filename="Empleados.xml";');
echo $dom->saveXML();
?>