<?php
header('Content-Type: text/html');

//load the file as a SimpleXMLElement. LIBXML_NOCDATA converts cdata into a string
$credit_report_SXE = simplexml_load_file('target.xml', null, LIBXML_NOCDATA);

//get the document out of the xml file
$document = $credit_report_SXE->xpath('//DOCUMENT');

//an html string is the value of the first and only element within the $document array. Send it to the front end.
$html_string = $document[0];
print($html_string);