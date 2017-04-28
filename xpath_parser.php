<?php
echo "0";

$html = file_get_contents('https://russian.alibaba.com/f/%d0%b0%d1%80%d0%bc%d0%b5%d0%b9%d1%81%d0%ba%d0%b8%d0%b5-%d1%88%d1%82%d0%b0%d0%bd%d1%8b.html');
echo "5";
echo "12365";
$dom = new DOMDocument();
echo "sdf";
$dom->loadHTML( $html );
echo "dsf";
$xpath = new DOMXPath($dom);
echo "asd";
$phones = $xpath->query('.//*[@id=\'J-m-gallery-product-items\']/div');
$temp_dom = new DOMDocument();
foreach($phones as $n) $temp_dom->appendChild($temp_dom->importNode($n,true));

$file = 'file.xml';
if (file_exists($file)) {
    $xml = simplexml_load_file('file.xml');
    $xml = $temp_dom->saveXML();
    file_put_contents($file, $xml);
}
