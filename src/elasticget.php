<?php
// CONFIGURE BELOW
$esHostProtocol = 'http'; // could be https, but may require changes to CURL opts?
$esHost = '192.168.56.101';
$esPort = '9200';
$indexName = 'comicbook';
$docType = 'superhero';
$documentId = 3;

// DO NOT EDIT BELOW THIS LINE!
$endPointURL = $esHostProtocol . '://' . $esHost . ':' . $esPort . '/' . $indexName . '/' . $docType . '/' . $documentId;

function get_result($url)
{
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $url);
   //curl_setopt($ch, CURLOPT_PORT, $esPort);
   curl_setopt($ch, CURLOPT_TIMEOUT, 200);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_FORBID_REUSE, 0);
   curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
   $response = curl_exec($ch);
   echo 'RESPONSE: ' . $response . "\n\n";
   if (!$response) 
   {
       return false;
   }
}

$endPointURL = $esHostProtocol . '://' . $esHost . ':' . $esPort . '/' . $indexName . '/' . $docType . '/' . $documentId;
get_result($endPointURL);
$documentId = $documentId + 1;
$endPointURL = $esHostProtocol . '://' . $esHost . ':' . $esPort . '/' . $indexName . '/' . $docType . '/' . $documentId;
get_result($endPointURL);
$documentId = $documentId + 1;
$endPointURL = $esHostProtocol . '://' . $esHost . ':' . $esPort . '/' . $indexName . '/' . $docType . '/' . $documentId;
get_result($endPointURL);
$documentId = $documentId + 1;
$endPointURL = $esHostProtocol . '://' . $esHost . ':' . $esPort . '/' . $indexName . '/' . $docType . '/' . $documentId;
get_result($endPointURL);
$documentId = $documentId + 1;
$endPointURL = $esHostProtocol . '://' . $esHost . ':' . $esPort . '/' . $indexName . '/' . $docType . '/' . $documentId;
get_result($endPointURL);
?>
