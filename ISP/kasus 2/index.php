<?php
include_once "PrinterFlagship.php";
include_once "PrinterEntryLevel.php";
include_once "PrinterMidRange.php";

$printerFlagship = new PrinterFlagship();
echo "Printer Flagship:\n";
$printerFlagship->cetak();
$printerFlagship->fax();

$printerEntryLevel = new PrinterEntryLevel();
echo "\nPrinter Entry Level:\n";
$printerEntryLevel->cetak();

$printerMidRange = new PrinterMidRange();
echo "\nPrinter Mid Range:\n";
$printerMidRange->cetak();
$printerMidRange->scan();
?>