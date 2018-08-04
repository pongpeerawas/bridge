<?php

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8_general', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 005', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
  require_once(dirname(__FILE__).'/lang/eng.php');
  $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('angsanaupc', '', 10);


// add a page
$pdf->AddPage();

// set cell padding
$pdf->setCellPaddings(1, 1, 1, 1);

// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);

// set color for background
$pdf->SetFillColor(255, 255, 127);

// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)

$title = <<<EOD
<h2>สัญญาเช่าหอพัก</h2>
EOD;
$pdf->WriteHTMLCell(0,0,'','' ,$title, 0, 1, 0, true, 'C', true);

$table ='<table border="0">';

foreach($data as $row){
  $table .='<tr>
  <td ></td>
  <td ></td>
  <td ></td>

  <td style="text-align: left">
  ทำที่ หอพักน้องจุม <br>
  วันที่ '.$row->Con_Date.'
  </td>

  </tr>';
}
// $no=1;
foreach($data as $row){
  $table .='<tr style="text-align: left">
  <br>

  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; สัญญานี้จะเรียกว่า “ผู้ให้เช่า” ฝ่ายหนึ่งกับคุณ &nbsp;'.$row->Re_Name.'  อยู่ที่:&nbsp;'.$row->Re_Adress.' โทร:&nbsp;'.$row->Re_Phone.'
  ซึ่งต่อไปในสัญญานี้จะเรียกว่า “ผู้เช่า” ฝ่ายหนึ่ง คู่สัญญาได้ตกลงกันดังนี้ี้
    </tr>';
    $table .='<tr style="text-align: left">
  <br>

  ข้อ 1. ผู้ให้เช่าตกลงให้เช่าและผู้เช่าตกลงเช่าห้องพักเลขที่ '.$row->Room_Number.' ในอาคารของผู้ให้เช่าเพื่อเป็นที่อยู่อาศัยภายใต้ระเบียบที่ผู้ให้เช่ากาหนด โดยเฉพาะไม่ก่อกวน ต้องสงบในยามวิกาล &nbsp;&nbsp;ไม่ทะเลาะวิวาท ไม่ทาผิดศีลธรรมและกฎหมาย
  <br>

  ข้อ 2. ผู้เช่าตกลงชาระค่าเช่าให้แก่ผู้ให้เช่าล่วงหน้า '.$row->Con_Cash.'บาท และเป็นรายเดือน โดยกาหนดชาระค่าเช่าภายในวันที่ 1  ของทุกเดือน ในอัตราค่าเช่าเดือนละ 3000 บาท
  <br>

  ข้อ 3. ผู้เช่าตกลงจะนาค่าเช่ามาชาระให้ ณ ที่ทาการของผู้ให้เช่าหรือตัวแทนภายกาหนด
  <br>

  ข้อ 4. ห้ามเช่าช่วงเป็นอันขาด เว้นแต่ผู้ให้เช่าตกลงยินยอมด้วยเป็นลายลักษณ์อักษร
  <br>

  ข้อ 5. ค่าน้าประปา ค่าไฟฟ้า และค่าใช้จ่ายอื่น ถ้ามิให้เรียกเก็บตามอัตราในมิเตอร์หรือโดยเฉลี่ยจากผู้เช่า
  <br>

  ข้อ 6. ผู้เช่าต้องบารุงรักษาห้องเช่ารวมถึงอุปกรณ์ไฟฟ้า มุ้งลวด กระจกบานเกล็ด กุญแจห้อง กลอนประตู พักลม หลอดไฟ เสื่อ ฝาผนัง และอื่น ๆ ให้อยู่ในสภาพที่ดีอยู่เสมอ &nbsp;&nbsp; หากเกิดชารุดเสียหายไม่ว่าด้วยเหตุใดก็ตาม ผู้เช่าต้องทาให้กับคืนสู่สภาพเดิมทันที ด้วยค่าใช้จ่ายของผู้เช่า
  <br>

  ข้อ 7. ผู้เช่ามีหน้าที่รักษาความสะอาดตามกฎหมาย ไม่เก็บวัตถุไวไฟหรือสิ่งอันตรายหรือสิ่งต้องห้ามตามกฎหมาย ผู้เช่ายินยอมให้ผู้ให้เช่าเข้าตรวจความถูกต้องเรียบร้อยในห้อง

  <br>
  ข้อ 8. ผู้เช่าจะดัดแปลงต่อเติมหรือรื้อถอนทรัพย์สินที่เช่าทั้งหมดหรือบางส่วนได้ ต่อเมื่อได้รับความยินยอมเป็นหนังสือจากผู้ให้เช่า
  <br>

  ข้อ 9. ถ้าผู้เช่าผิดสัญญาไม่ชาระค่าเช่าตามกาหนดไว้ในข้อ 2. ผู้ให้เช่าต้องทวงสิทธิไว้ในการกลับเข้าครอบครองทรัพย์สินที่เช่าตามสัญญานี้โดยฉบับพลัน &nbsp;&nbsp;และผู้เช่ายอมให้ผู้ให้เช่าย้ายบุคคลหรือทรัพย์สินของผู้เช่าออกไปจากทรัพย์ที่เช่าตามสัญญานี้
  <br>

  ข้อ 10. ผู้เช่ามีหน้าที่แจ้งให้ผู้ให้เช่าทราบล่วงหน้าในการเลิกเช่าไม่น้อยกว่าสามสิบวันจึงจะได้รับเงินล่วงหน้าคืนหรืออยู่อาศัยโดยหักจากการชาระล่วงหน้าตามข้อ 2
  <br>

  ข้อ 11. ในวันทาสัญญานี้ ผู้เช่าได้ตรวจตราทรัพย์สินที่เช่าแล้วเห็นว่ามีสภาพปกติดีทุกประการและผู้ให้เช่าได้ส่งมอบทรัพย์สินที่เช่าให้แก่ผู้เช่าแล้ว
<br><br>
  คู่สัญญาทั้งสองฝ่ายได้อ่านและทาความเข้าใจดีแล้ว จึงลงลายมือชื่อไว้เป็นหลักฐาน
  </tr>';



  $table .='<tr ><br><br><br><br>
  <td style="text-align: center" >ลงชื่อ……………………………………ผู้เช่า<br>  ('.$row->Re_Name.' )</td>
  <td></td>
  <td style="text-align: center"> ลงชื่อ……………………………….ผู้ให้เช่า<br>  (………………………………………)</td>
  </tr>';
}

$table .='</table>';
$pdf->WriteHTMLCell(0,0,'','', $table, 0, 1, 0, true, 'C', true);

// move pointer to last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document

ob_clean();
$pdf->Output('report_room.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
