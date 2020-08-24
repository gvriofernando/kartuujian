<?php 
	session_start();
	error_reporting(0);
	include "inc/constant.php";
	include "inc/config.php";
?>
<?php
	$nim = $_SESSION['suser'];
	$semesternya = $_SESSION['ssemester'];
	$namausers = $_SESSION['snamanyauser'];
	$sql = "SELECT
				DATE_FORMAT(a.tanggal, '%d-%m-%Y') as tanggal,
				DATE_FORMAT(a.waktu,'%k:%i') as waktu,
				a.kode_matkul,
				b.nama_matkul,
				c.keterangan,
				c.nim_mahasiswa,
				b.bobot_sks,
				a.jenis_ujian
			FROM 
				jadwal_ujian a,
				matkul b,
				absensi c
			WHERE
				a.kode_matkul = b.kode_matkul
			AND
				a.semester = '$semesternya'
			AND
				c.kode_matkul = a.kode_matkul
			AND
				c.keterangan = 'Mencukupi'
			AND
				c.nim_mahasiswa = '$nim' ";
	$result = mysqli_query($con,$sql);
?>
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 15">
<link rel=File-List href="jadwal_kuliah_files/filelist.xml">
<style id="jadwal_kuliah_20605_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl1520605
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6320605
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	background:#8EA9DB;
	mso-pattern:black none;
	white-space:nowrap;}
.xl6420605
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:#8EA9DB;
	mso-pattern:black none;
	white-space:nowrap;}
.xl6520605
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#8EA9DB;
	mso-pattern:black none;
	white-space:nowrap;}
.xl6620605
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#8EA9DB;
	mso-pattern:black none;
	white-space:nowrap;}
.xl6720605
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#8EA9DB;
	mso-pattern:black none;
	white-space:nowrap;}
.xl6820605
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	background:#8EA9DB;
	mso-pattern:black none;
	white-space:nowrap;}
.xl6920605
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:#D9E1F2;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7020605
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	background:#8EA9DB;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7120605
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#8EA9DB;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7220605
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:#8EA9DB;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7320605
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#8EA9DB;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7420605
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#8EA9DB;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7520605
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	background:#8EA9DB;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7620605
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:22.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:#8EA9DB;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7720605
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:22.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#8EA9DB;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7820605
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#8EA9DB;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7920605
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	background:#8EA9DB;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8020605
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#8EA9DB;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8120605
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#8EA9DB;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8220605
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#8EA9DB;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8320605
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#8EA9DB;
	mso-pattern:black none;
	white-space:nowrap;}
-->
</style>
</head>

<body>

<div id="jadwal_kuliah_20605" align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=1027 style='border-collapse:
 collapse;table-layout:fixed;width:770pt'>
 <col width=64 span=3 style='width:48pt'>
 <col width=72 style='mso-width-source:userset;mso-width-alt:2633;width:54pt'>
 <col width=98 style='mso-width-source:userset;mso-width-alt:3584;width:74pt'>
 <col width=103 style='mso-width-source:userset;mso-width-alt:3766;width:77pt'>
 <col width=23 style='mso-width-source:userset;mso-width-alt:841;width:17pt'>
 <col width=71 style='mso-width-source:userset;mso-width-alt:2596;width:53pt'>
 <col width=260 style='mso-width-source:userset;mso-width-alt:9508;width:195pt'>
 <col width=64 style='width:48pt'>
 <col width=80 style='mso-width-source:userset;mso-width-alt:2925;width:60pt'>
 <col width=64 style='width:48pt'>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1520605 width=64 style='height:15.0pt;width:48pt'></td>
  <td class=xl1520605 width=64 style='width:48pt'></td>
  <td class=xl1520605 width=64 style='width:48pt'></td>
  <td class=xl1520605 width=72 style='width:54pt'></td>
  <td class=xl1520605 width=98 style='width:74pt'></td>
  <td class=xl1520605 width=103 style='width:77pt'></td>
  <td class=xl1520605 width=23 style='width:17pt'></td>
  <td class=xl1520605 width=71 style='width:53pt'></td>
  <td class=xl1520605 width=260 style='width:195pt'></td>
  <td class=xl1520605 width=64 style='width:48pt'></td>
  <td class=xl1520605 width=80 style='width:60pt'></td>
  <td class=xl1520605 width=64 style='width:48pt'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1520605 style='height:15.0pt'></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1520605 style='height:15.0pt'></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1520605 style='height:15.0pt'></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
  <td class=xl1520605></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1520605 style='height:15.0pt'></td>
  <td class=xl1520605></td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
 </tr>
 <tr height=38 style='height:28.5pt'>
  <td height=38 class=xl1520605 style='height:28.5pt'></td>
  <td class=xl1520605></td>
  <td class=xl6320605>&nbsp;</td>
  <td align=left valign=top><![if !vml]><span style='mso-ignore:vglayout;
  position:absolute;z-index:1;margin-left:0px;margin-top:1px;width:66px;
  height:83px'><img width=66 height=83
  src="dist/img/logopoltekes.png" v:shapes="Picture_x0020_1"></span><![endif]><span
  style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td height=38 class=xl6520605 width=72 style='height:28.5pt;width:54pt'>&nbsp;</td>
   </tr>
  </table>
  </span></td>
  <td colspan=7 class=xl7620605 style='border-right:.5pt solid black'>Kartu
  Ujian Mahasiswa</td>
  <td class=xl6320605>&nbsp;</td>
 </tr>
 <tr height=25 style='height:18.75pt'>
  <td height=25 class=xl1520605 style='height:18.75pt'></td>
  <td class=xl1520605></td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6620605>&nbsp;</td>
  <td colspan=7 class=xl7920605 style='border-right:.5pt solid black'>Program
  Studi Keperawatan Cirebon</td>
  <td class=xl6320605>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1520605 style='height:15.0pt'></td>
  <td class=xl1520605></td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6620605>&nbsp;</td>
  <td colspan=7 class=xl7520605 style='border-right:.5pt solid black'>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1520605 style='height:15.0pt'></td>
  <td class=xl1520605></td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6520605>&nbsp;</td>
  <td class=xl7220605>&nbsp;</td>
  <td class=xl7220605>&nbsp;</td>
  <td class=xl7220605>&nbsp;</td>
  <td class=xl7220605>&nbsp;</td>
  <td class=xl7220605>&nbsp;</td>
  <td class=xl7220605>&nbsp;</td>
  <td class=xl7320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl1520605 style='height:15.75pt'></td>
  <td class=xl1520605></td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6720605>Nama</td>
  <td class=xl6820605>:</td>
  <td colspan=6 class=xl7020605 style='border-right:.5pt solid black'><?php echo $namausers; ?></td>
  <td class=xl6320605>&nbsp;</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl1520605 style='height:15.75pt'></td>
  <td class=xl1520605></td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6720605>NIM</td>
  <td class=xl6820605>:</td>
  <td class=xl7020605><?php echo $nim; ?></td>
  <td class=xl7020605>&nbsp;</td>
  <td class=xl7020605>&nbsp;</td>
  <td class=xl7020605>&nbsp;</td>
  <td class=xl7020605>&nbsp;</td>
  <td class=xl7120605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl1520605 style='height:15.75pt'></td>
  <td class=xl1520605></td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6720605>Semester</td>
  <td class=xl6820605>:</td>
  <td class=xl7020605><?php echo $semesternya; ?></td>
  <td class=xl7020605>&nbsp;</td>
  <td class=xl7020605>&nbsp;</td>
  <td class=xl7020605>&nbsp;</td>
  <td class=xl7020605>&nbsp;</td>
  <td class=xl7120605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl1520605 style='height:15.75pt'></td>
  <td class=xl1520605></td>
  <td class=xl6320605>&nbsp;</td>
  <td colspan=8 class=xl8120605 style='border-right:.5pt solid black'>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1520605 style='height:15.0pt'></td>
  <td class=xl1520605></td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6920605>Tanggal</td>
  <td class=xl6920605 style='border-left:none'>Waktu</td>
  <td colspan=2 class=xl6920605 style='border-left:none'>Kode Mata Kuliah</td>
  <td colspan=2 class=xl6920605 style='border-left:none'>Nama Mata Kuliah</td>
  <td class=xl6920605 style='border-left:none'>SKS</td>
  <td class=xl6920605 style='border-left:none'>Jenis Ujian</td>
  <td class=xl6320605>&nbsp;</td>
 </tr>
<?php
    $i=1;
    while($data = mysqli_fetch_array($result)){
?>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1520605 style='height:15.0pt'></td>
  <td class=xl1520605></td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl7420605 style='border-top:none'><?php echo $data['tanggal'] ?></td>
  <td class=xl7420605 style='border-top:none;border-left:none'><?php echo $data['waktu'] ?></td>
  <td colspan=2 class=xl8320605 style='border-left:none'><?php echo $data['kode_matkul'] ?></td>
  <td colspan=2 class=xl7420605 style='border-left:none'><?php echo $data['nama_matkul'] ?></td>
  <td class=xl6420605 style='border-top:none;border-left:none'><?php echo $data['bobot_sks'] ?></td>
  <td class=xl6420605 style='border-top:none;border-left:none'><?php echo $data['jenis_ujian'] ?></td>
  <td class=xl6320605>&nbsp;</td>
 </tr>
 <?php
		$i++;
}
?> 
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1520605 style='height:15.0pt'></td>
  <td class=xl1520605></td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1520605 style='height:15.0pt'></td>
  <td class=xl1520605></td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td colspan=2 class=xl7520605>Paraf Admin</td>
  <td class=xl6320605>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1520605 style='height:15.0pt'></td>
  <td class=xl1520605></td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1520605 style='height:15.0pt'></td>
  <td class=xl1520605></td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1520605 style='height:15.0pt'></td>
  <td class=xl1520605></td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1520605 style='height:15.0pt'></td>
  <td class=xl1520605></td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1520605 style='height:15.0pt'></td>
  <td class=xl1520605></td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
  <td colspan=2 class=xl7520605>&nbsp;</td>
  <td class=xl6320605>&nbsp;</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=72 style='width:54pt'></td>
  <td width=98 style='width:74pt'></td>
  <td width=103 style='width:77pt'></td>
  <td width=23 style='width:17pt'></td>
  <td width=71 style='width:53pt'></td>
  <td width=260 style='width:195pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=80 style='width:60pt'></td>
  <td width=64 style='width:48pt'></td>
 </tr>
 <![endif]>
</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>
