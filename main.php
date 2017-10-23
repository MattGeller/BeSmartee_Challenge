<?php
//TODO: Create XML request from scratch (using SimpleXML) instead of just including the ready-made one

//require the request file. in it, the xml string is stored to $req_str
require_once('request.php');

//turn the xml string into a Simple XML Element
$req_xml = new SimpleXMLElement($req_str);


//TODO: submit request using cURL

//make a curl resource
$ch = curl_init();

//set the url
curl_setopt($ch, CURLOPT_URL, 'https://credit.meridianlink.com/inetapi/AU/get_credit_report.aspx');

//tell it to return the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

curl_setopt($ch, CURLOPT_VERBOSE, true);
//curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

//make it a post request
curl_setopt( $ch, CURLOPT_POST, true );

curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));

////turn simplexmlelement into an array?
//$json = json_encode($req_str);
//$array = json_decode($json);



//add in the xml request
//curl_setopt($ch, CURLOPT_POSTFIELDS, $req_xml);

//execute
//$resp = curl_exec($ch);

curl_close($ch);

//pretend to get back a good response (for now)
include('example_response.php');

//TODO: save response to file
file_put_contents('target.txt', $resp); // should create new file instead of always putting in target.txt

//TODO: create table of credit liabilities, with these columns: Name of Creditor, Date, Outstanding Balance, Monthly Payment, Account Type
//make an 'empty' SimpleXMLElement
$output_xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><xml></xml>');

//set up the parent table
$the_table = $output_xml->addChild('table');

//make whole table text-center too?
$the_table->addAttribute('class', 'table');


//set up the head of the table
$thead = $the_table->addChild('thead');
$tr = $thead->addChild('tr');
$tr->addChild('th', 'Name of Creditor');
$tr->addChild('th', 'Date');
$tr->addChild('th', 'Outstanding Balance');
$tr->addChild('th', 'Monthly Payment');
$tr->addChild('th', 'Account Type');

//set up the body of the table
$table_body = $the_table->addChild('tbody');

//populate the body of the table

//turn the response into a SimpleXMLElement
$resp_SXE = new SimpleXMLElement($resp);

//select all CREDIT_LIABILITY elements no matter where they are in the document
$liabilities = $resp_SXE->xpath('//CREDIT_LIABILITY');
//var_dump($liabilities);
foreach ($liabilities as $liability) {
//    $output_xml->addChild('div', 'count');
    //create a new row in the table body
    $row = $table_body->addChild('tr');

    //look for any _CREDITOR within this particular liability, and get the value of the _Name attribute from the first one
    $creditor_name = $liability->xpath('//_CREDITOR')[0]['_Name'];

    //now just look at the attributes of the liability itself for the rest of the information
    //I'll assume we want _AccountReportedDate
    $date = $liability['_AccountReportedDate'];

    $outstanding_balance = $liability['_UnpaidBalanceAmount'];

    $monthly_payment = $liability['_MonthlyPaymentAmount'];

    $account_type = $liability['_AccountType'];

    $row->addChild('td', $creditor_name);
    $row->addChild('td', $date);
    //Outstanding Balance and Monthly Payment columns look nicer with their contents centered
    $row->addChild('td', $outstanding_balance)->addAttribute('class', 'text-center');;
    $row->addChild('td', $monthly_payment)->addAttribute('class', 'text-center');;
    $row->addChild('td', $account_type);

    //put text-center on the entire row
//    $row->addAttribute('class', 'text-center');

}


//TODO: send to front end
//print($req_xml->asXML());
//print($resp_SXE->asXML());
print($output_xml->asXML());
