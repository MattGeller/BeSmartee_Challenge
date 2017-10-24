<?php
header('Content-Type: text/xml');

//load the file as a SimpleXMLElement. LIBXML_NOCDATA converts cdata into a string
$credit_report_SXE = simplexml_load_file('target.xml', null, LIBXML_NOCDATA);

//get the document out of the xml file
$document = $credit_report_SXE->xpath('//DOCUMENT');

//can I get the string inside document?

$html_string = $document[0];
////
exit($html_string);

//get the just the body with class "reportbody"
//select first body node with class attribute equal to "reportbody"
//$report_body = $credit_report_SXE->xpath("//body/html[@class='reportbody'][1]");

//send the output to the client
//print($credit_report_SXE->asXML());

//woo! This part works!
$test = new SimpleXMLElement('<xml><div><info>hello there!</info></div><div><info>another div</info></div></xml>');
$value = $test->div[1]->info;
//exit($value);


//exit($output->asXML());

print($document[0]->asXML());
//print($report_body[0]->asXML());