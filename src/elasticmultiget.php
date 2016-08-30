<?php
// CONFIGURE BELOW
$esHostProtocol = 'http'; // could be https, but may require changes to CURL opts?
$esHost = '192.168.56.101';
$esPort = '9200';
$indexName = 'comicbook';
$docType = 'superhero';
$documentId = 1;

// DO NOT EDIT BELOW THIS LINE!
$row = 1;
$endPointURL = $esHostProtocol . '://' . $esHost . ':' . $esPort . '/' . $indexName . '/' . $docType . '/_search';

//ok summary <===>
//$json_data = array(
//    "query" => array
//    (
//      "match" => array("summary" => "Trimpe")
//    )
//);


$json_data = array(
   "query" => array
   (
     "match" => array("name" => "Dredd")
   )
);

$jsonData = json_encode($json_data);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $endPointURL);
curl_setopt($ch, CURLOPT_PORT, $esPort);
curl_setopt($ch, CURLOPT_TIMEOUT, 200);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FORBID_REUSE, 0);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

$response = curl_exec($ch);
echo 'RESPONSE: ' . $response . "\n\n";
if (!$response) 
{
    return false;
}
?>
