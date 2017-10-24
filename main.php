<?php
//TODO: Create XML request from scratch (using SimpleXML) instead of just including the ready-made one

//require the request file. in it, the xml string is stored to $req_str
require_once('request.php');

//turn the xml string into a Simple XML Element
$request_SXE = new SimpleXMLElement($req_str);


//get the request xml started
$request_SXE = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><REQUEST_GROUP MISMOVersionID="2.3.1"></REQUEST_GROUP>');

function make_party(&$sxe_ref, $party_node, $name, $street_address, $city, $state, $postal_code){
    $new_party = $sxe_ref->addChild($party_node);
    $new_party->addAttribute('_Name', $name);
    $new_party->addAttribute('_StreetAddress', $street_address);
    $new_party->addAttribute('_City', $city);
    $new_party->addAttribute('_State',$state);
    $new_party->addAttribute('_PostalCode', $postal_code);

    //return a reference to $new_party
    return $new_party;

};

//REQUESTING_PARTY
make_party($request_SXE, 'REQUESTING_PARTY',  'ACG Funding', '1661 Hanover Road Suite 216', 'City of Industry', 'CA', '91748');

//RECEIVING_PARTY
$rec_party = make_party($request_SXE, 'RECEIVING_PARTY', 'Credit Plus', '31550 Winterplace Parkway', 'Salisbury', 'MD', '21804');
$rec_party->addAttribute('_Identifier', 'AV');

//SUBMITTING_PARTY
$sub_party = make_party($request_SXE, 'SUBMITTING_PARTY', 'BeSmartee', '16892 Bolsa Chica Street 201', 'Huntington Beach', 'CA', '92649');
$sub_party->addAttribute('LoginAccountIdentifier', 'besmartee');
$sub_party->addAttribute('LoginAccountPassword', '263nx848');
$sub_party->addAttribute('_Identifier', 'BeSmartee07272015');

$req = $request_SXE->addChild('REQUEST');
$req->addAttribute('RequestDatetime', date('Y-m-d\TH:i:s'));
$req->addAttribute('InternalAccountIdentifier', '');
$req->addAttribute('LoginAccountIdentifier', 'TNGUYEN3');
$req->addAttribute('LoginAccountPassword', 'CHECKm@te1');

$credit_request = $req->addChild('REQUEST_DATA')->addChild('CREDIT_REQUEST');
$credit_request->addChild('MISMOVersionID', '2.3.1');
$credit_request->addChild('LenderCaseIdentifier', 'LME8BW68');
$credit_request->addChild('RequestingPartyRequestedByName', 'Benson Pang');

$credit_request_data = $credit_request->addChild('CREDIT_REQUEST_DATA');
$credit_request_data->addAttribute('CreditRequestID', 'CreditRequest1');
$credit_request_data->addAttribute('BorrowerID', 'Borrower');
$credit_request_data->addAttribute('CreditReportRequestActionType', 'Submit');
$credit_request_data->addAttribute('CreditReportType', 'Merge');
$credit_request_data->addAttribute('CreditRequestType', 'Individual');
$credit_request_data->addAttribute('CreditRequestDateTime', date('Y-m-d\TH:i:s'));

$credit_repository_included = $credit_request_data->addChild('CREDIT_REPOSITORY_INCLUDED');

$credit_repository_included->addAttribute('_EquifaxIndicator', 'Y');
$credit_repository_included->addAttribute('_ExperianIndicator', 'Y');
$credit_repository_included->addAttribute('_TransUnionIndicator', 'Y');

$borrower = $credit_request->addChild('LOAN_APPLICATION')->addChild('BORROWER');
$borrower->addAttribute('_FirstName', 'Tim');
$borrower->addAttribute('_LastName', 'Testcase');
$borrower->addAttribute('_BirthDate', '1999-01-01');
$borrower->addAttribute('_HomeTelephoneNumber', '714-235-7114');
$borrower->addAttribute('_SSN', '123456789');
$borrower->addAttribute('_PrintPositionType', 'Borrower');

$residence = $borrower->addChild('_RESIDENCE');
$residence->addAttribute('_StreetAddress', '4053 Aladdin Dr');
$residence->addAttribute('_City', 'Huntington Beach');
$residence->addAttribute('_State', 'CA');
$residence->addAttribute('_PostalCode', '92649');
$residence->addAttribute('BorrowerResidencyType', 'Current');


//exit($request_SXE->asXML());

//TODO: submit request using cURL

//make a curl resource
$ch = curl_init();

//set the url
curl_setopt($ch, CURLOPT_URL, 'https://credit.meridianlink.com/inetapi/AU/get_credit_report.aspx');

//tell it to return the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

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
//curl_setopt($ch, CURLOPT_POSTFIELDS, "$req_str");
curl_setopt($ch, CURLOPT_POSTFIELDS, $request_SXE->asXML());


//execute
//$resp = curl_exec($ch);

curl_close($ch);

//var_dump($resp);

//pretend to get back a good response (for now)
include('example_response.php');

//TODO: save response to file
//file_put_contents('target.txt', $resp); // should create new file instead of always putting in target.txt

//putting it in xml file instead
file_put_contents('target.xml', $resp);

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

    //the Name of Creditor is a button pretending to be a link
    $row->addChild('td')->addChild('button', $creditor_name)->addAttribute('class','btn btn-link credit-report-button');
    $row->addChild('td', $date);
    //Outstanding Balance and Monthly Payment columns look nicer with their contents centered
    $row->addChild('td', $outstanding_balance)->addAttribute('class', 'text-center');
    $row->addChild('td', $monthly_payment)->addAttribute('class', 'text-center');
    $row->addChild('td', $account_type);

    //put text-center on the entire row
//    $row->addAttribute('class', 'text-center');

}


//TODO: send to front end
//print($req_xml->asXML());
//print($resp_SXE->asXML());
print($output_xml->asXML());
