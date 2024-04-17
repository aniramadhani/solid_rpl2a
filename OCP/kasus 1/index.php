<?php
include_once "MetodePembayaran.php";
include_once "Kredit.php";
include_once "Cash.php";
include_once "Debit.php";
include_once "PembayaranCustomer.php";

// Contoh penggunaan untuk pembayaran dengan kredit
$kredit = new Kredit();
$pembayaranKredit = new PembayaranCustomer($kredit);
$pembayaranKredit->prosesPembayaran();

// Contoh penggunaan untuk pembayaran dengan cash
$cash = new Cash();
$pembayaranCash = new PembayaranCustomer($cash);
$pembayaranCash->prosesPembayaran();

// Contoh penggunaan untuk pembayaran dengan debit
$debit = new Debit();
$pembayaranDebit = new PembayaranCustomer($debit);
$pembayaranDebit->prosesPembayaran();
?>