<?php
require("fpdf/fpdf.php");
require("tFPDF.php");


if(isset($_POST['create']))
{
    define('EURO',chr(128));

	$rekina_san=$_POST['rekina-sanemejs'];
	$rekina_nr=$_POST['rekina-nr'];
    $san_datums=$_POST['san-datums'];
    $apm_datums=$_POST['apm-datums'];
    $reg_numurs=$_POST['reg-nr'];
   // $adress = $_POST['adrese'];
    $adress_iela = $_POST['adrese-iela'];
    $pasta_ind = $_POST['pasta-indeks'];
    $banka = $_POST['banka'];
    $swift = $_POST['swift'];
    $konts = $_POST['konts'];
    $tele = $_POST['tele'];
    $stundas = $_POST['stundas'];
    $stundas_likme = $_POST['stundas-likme'];
    $emails = $_POST['email'];
    $kontaktpersona = $_POST['kontakt-persona'];
    $rekins_par = $_POST['rekins-par'];




    $rez = $stundas * $stundas_likme;





$fpdf=new tFPDF();
$fpdf->AddPage('P','A4');
    $fpdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
    $fpdf->AddFont('DejaVuBold','','DejaVuSans-Bold.ttf',true);
    $fpdf->SetFont('DejaVuBold','',7);


/*
$fpdf->Cell(0,10,"Create Dynamic PDF using PHP and FPDF Library",1,1,"C");
$fpdf->Cell(95,10,"First Name:",1,0,"C");
$fpdf->Cell(95,10,$f_name,1,1,"C");
$fpdf->Cell(95,10,"Last Name:",1,0,"C");
$fpdf->Cell(95,10,$l_name,1,1,"C");
$fpdf->Cell(95,10,"Email:",1,0,"C");
$fpdf->Cell(95,10,$email,1,1,"C");
$fpdf->Cell(95,10,"Gender:",1,0,"C");
$fpdf->Cell(95,10,$gender,1,1,"C");
*/
$fpdf-> Image("Capture.png",10,5,50,40);
    $fpdf->SetDrawColor(224,224,224);
    ////////////////////////////// 1 DALA //////////////////////////////////////
// VIRSRAKSTI
    $fpdf->Line(10, 45, 220 -20, 45);
    $fpdf->SetY(50);
    $fpdf->Write(2,"Rēķinu izrakstīja:");
    $fpdf->SetY(62);
    $fpdf->Write(2,"Reģistrācijas nr:");
    $fpdf->SetY(74);
    $fpdf->Write(2,"Adrese:");
    $fpdf->SetY(86);
    $fpdf->Write(2,"Bankas dati:");
    $fpdf->SetY(50);
    $fpdf->SetX(100);
    $fpdf->Write(2,"PAKALPOJUMA RĒĶINS");
    $fpdf->SetY(62);
    $fpdf->SetX(95);
    $fpdf->Write(2,"Tālrunis:");
    $fpdf->SetY(74);
    $fpdf->SetX(95);
    $fpdf->Write(2,"E-pasts:");
    $fpdf->SetY(86);
    $fpdf->SetX(95);
    $fpdf->Write(2,"Kontaktpersona:");

//INFO


    $fpdf->SetFont('DejaVu','',7);
    // 1 dalas laba puse (virsraksti)
    $fpdf->SetY(50);
    $fpdf->SetX(143);
    $fpdf->Write(2,"Rēķina Nr:");
    $fpdf->SetY(62);
    $fpdf->SetX(143);
    $fpdf->Write(2,"Saņemšanas datums:");
    $fpdf->SetY(74);
    $fpdf->SetX(143);
    $fpdf->Write(2,"Apmaksas datums:");
    //////
    /// 1dalas labas puses info
    $fpdf->SetY(50);
    $fpdf->SetX(175);
    $fpdf->Write(2,$rekina_nr);
    $fpdf->SetY(62);
    $fpdf->SetX(175);
    $fpdf->Write(2,$san_datums);
    $fpdf->SetY(74);
    $fpdf->SetX(175);
    $fpdf->Write(2,$apm_datums);
    ///
    ///
    $fpdf->SetY(50);
    $fpdf->SetX(40);
    $fpdf->Write(2,"naked CORE,SIA");
    $fpdf->SetY(62);
    $fpdf->SetX(40);
    $fpdf->Write(2,"44103116859");
    $fpdf->SetY(74);
    $fpdf->SetX(40);
    $fpdf->Write(2,"Cēsu nov., Cēsis, Lielā Skolas iela 6,
                                              
                                          LV-4101");

    $fpdf->SetY(86);
    $fpdf->SetX(40);
    $fpdf->Write(2,"Banka: Swedbank AS 
    
                                          SWIFT kods: HABALV22 
                    
                                          Konts:  LV95NDEA0000085091704");

    $fpdf->SetY(62);
    $fpdf->SetX(110);
    $fpdf->Write(2,"27661535");
    $fpdf->SetY(74);
    $fpdf->SetX(110);
    $fpdf->Write(2,"info@naked.lv");
    $fpdf->SetY(86);
    $fpdf->SetX(120);
    $fpdf->Write(2,"Reinis");


        $fpdf->Line(10, 100, 220 -20, 100);
    $fpdf->SetY(133);
    $fpdf->SetX(165);
    $fpdf->Write(2, "TEST");
    $fpdf->SetY(100);




///////////2 DALA//////////////////////////////////////////////
        $fpdf->Line(140, 100, 160 -20   , 45);
        $fpdf->SetFillColor(224,224,224);
        $fpdf->Cell(0,55,'',0,1,'L',1);
    // VIRSRAKSTI
    $fpdf->SetFont('DejaVuBold','',7);
    $fpdf->SetY(104);
    $fpdf->Write(2, "Rēķinu saņēma:");
    $fpdf->SetY(116);
    $fpdf->Write(2, "Reģistrācijas nr:");
    $fpdf->SetY(128);
    $fpdf->Write(2, "Adrese:");
    $fpdf->SetY(140);
    $fpdf->Write(2, "Bankas dati:");

    $fpdf->SetY(104);
    $fpdf->SetX(95);
    $fpdf->Write(2,"Tālrunis:");
    $fpdf->SetY(116);
    $fpdf->SetX(95);
    $fpdf->Write(2,"E-pasts:");
    $fpdf->SetY(128);
    $fpdf->SetX(95);
    $fpdf->Write(2,"Kontaktpersona:");

    $fpdf->SetY(104);
    $fpdf->SetX(143);
    $fpdf->Write(2,"Rēķins par:");
  //  $fpdf->Line(10, 150, 305 -20, 150);

////////// INFO/////////////
    $fpdf->SetFont('DejaVu','',7);
    $fpdf->SetY(104);
    $fpdf->SetX(40);
    $fpdf->Write(2,$rekina_san);
    $fpdf->SetY(116);
    $fpdf->SetX(40);
    $fpdf->Write(2,$reg_numurs);
    $fpdf->SetY(128);
    $fpdf->SetX(40);
    $fpdf->Write(2,"$adress_iela,");
    $fpdf->SetY(132);
    $fpdf->SetX(40);
    $fpdf->Write(2,$pasta_ind);
    $fpdf->SetY(140);
    $fpdf->SetX(40);
    $fpdf->Write(2,"Banka: $banka");
    $fpdf->SetY(144);
    $fpdf->SetX(40);
    $fpdf->Write(2,"SWIFT kods: $swift");
    $fpdf->SetY(148);
    $fpdf->SetX(40);
    $fpdf->Write(2,"Konts: $konts");


    $fpdf->SetY(116);
    $fpdf->SetX(143);
    $fpdf->MultiCell( 0, 5  , $rekins_par, 1);


    $fpdf->SetY(104);
    $fpdf->SetX(110);
    $fpdf->Write(2,$tele);
    $fpdf->SetY(116);
    $fpdf->SetX(110);
    $fpdf->Write(2,$emails);
    $fpdf->SetY(128);
    $fpdf->SetX(120);
    $fpdf->Write(2,$kontaktpersona);


//  3 dala ///
    // virsraksti //
    $fpdf->SetFont('DejaVuBold','',7);
    $fpdf->SetY(162);
    $fpdf->Write(2, "APRAKSTS");

    $fpdf->SetX(60);
    $fpdf->Write(2, "STUNDAS LIKME");

    $fpdf->SetX(90);
    $fpdf->Write(2, "STUNDAS");

    $fpdf->SetX(110);
    $fpdf->Write(2, "FIKSĒTA MAKSA");

    $fpdf->SetX(140);
    $fpdf->Write(2, "ATLAIDE");

    $fpdf->SetX(170);
    $fpdf->Write(2, "KOPĀ");


// INFO//

    $fpdf->Line(10, 165, 220 -20, 165);

    $fpdf->SetFont('DejaVu','',7);
    $fpdf->SetY(169);
    $fpdf->SetX(170);
    $rezz = number_format($rez, 2, ',', '');
    $fpdf->Write(2, "$rezz €");



    $fpdf->Line(10, 175, 220 -20, 175);
   // $fpdf->Line(10, 165, 305 -20, 165);
   // $fpdf->Line(10, 170, 305 -20, 170);
   // $fpdf->Line(10, 175, 305 -20, 175);
  //  $fpdf->Line(10, 180, 305 -20, 180);
  //  $fpdf->Line(10, 185, 305 -20, 185);
   // $fpdf->Line(10, 190, 305 -20, 190);
   // $fpdf->Line(10, 195, 305 -20, 195);
   // $fpdf->Line(10, 200, 305 -20, 200);

 // $fpdf->Write(5,$f_name);
    //$fpdf->Multicell(0,2,"This is a multi-line text string\nNew line\nNew line");




// Then put a blue underlined link
    $fpdf->SetTextColor(0,0,255);
    $fpdf->SetFont('','U');
    $fpdf->output();
}
?>