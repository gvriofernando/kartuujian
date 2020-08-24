<?php
	session_start();
	error_reporting(0);
	include "inc/constant.php";
	include "inc/config.php";
	$matkulnya = $_POST['select_matkul'];
	$semesternya = $_POST['select_semester'];
	$sql = "SELECT 
				a.kode_matkul, 
				b.username, 
				b.nama 
			FROM 
				jadwal_ujian a, 
				user b 
			WHERE 
				a.semester = b.semester
			AND a.semester = '$semesternya'
			AND a.kode_matkul = '$matkulnya'";
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
<link rel=File-List href="daftarhadir_files/filelist.xml">
<style id="jadwal_kuliah_11611_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl1511611
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
.xl6311611
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
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6411611
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
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6511611
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6611611
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6711611
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
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6811611
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
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6911611
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
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7011611
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7111611
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:24.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7211611
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:24.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7311611
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:24.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7411611
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:24.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7511611
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
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7611611
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
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7711611
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
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7811611
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
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7911611
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8011611
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
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8111611
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
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8211611
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
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8311611
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
	text-align:left;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8411611
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
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8511611
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
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8611611
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
-->
</style>
</head>

<body>

<div id="jadwal_kuliah_11611" align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=704 style='border-collapse:
 collapse;table-layout:fixed;width:528pt'>
 <col width=64 span=11 style='width:48pt'>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1511611 width=64 style='height:15.0pt;width:48pt'></td>
  <td class=xl1511611 width=64 style='width:48pt'></td>
  <td class=xl1511611 width=64 style='width:48pt'></td>
  <td class=xl1511611 width=64 style='width:48pt'></td>
  <td class=xl1511611 width=64 style='width:48pt'></td>
  <td class=xl1511611 width=64 style='width:48pt'></td>
  <td class=xl1511611 width=64 style='width:48pt'></td>
  <td class=xl1511611 width=64 style='width:48pt'></td>
  <td class=xl1511611 width=64 style='width:48pt'></td>
  <td class=xl1511611 width=64 style='width:48pt'></td>
  <td class=xl1511611 width=64 style='width:48pt'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1511611 style='height:15.0pt'></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl1511611 style='height:15.0pt'></td>
  <td class=xl1511611></td>
  <td rowspan=4 height=80 width=64 style='height:60.0pt;width:48pt' align=left
  valign=top><![if !vml]><span style='mso-ignore:vglayout;
  position:absolute;z-index:1;margin-left:0px;margin-top:1px;width:64px;
  height:80px'><img width=64 height=80
  src="dist/img/logopoltekes.png" v:shapes="Picture_x0020_1"></span><![endif]><span
  style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td rowspan=4 height=80 class=xl6911611 width=64 style='height:60.0pt;
    width:48pt'>&nbsp;</td>
   </tr>
  </table>
  </span></td>
  <td colspan=8 rowspan=2 class=xl7111611 style='border-right:.5pt solid black'>DAFTAR
  HADIR UJIAN</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1511611 style='height:15.0pt'></td>
  <td class=xl1511611></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1511611 style='height:15.0pt'></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td colspan=6 class=xl8611611>PROGRAM STUDI KEPERAWATAN CIREBON</td>
  <td class=xl6711611>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1511611 style='height:15.0pt'></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl6711611>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1511611 style='height:15.0pt'></td>
  <td class=xl1511611></td>
  <td class=xl6911611>&nbsp;</td>
  <td class=xl8111611>&nbsp;</td>
  <td class=xl8111611>&nbsp;</td>
  <td class=xl8111611>&nbsp;</td>
  <td class=xl8111611>&nbsp;</td>
  <td class=xl8111611>&nbsp;</td>
  <td class=xl8111611>&nbsp;</td>
  <td class=xl8111611>&nbsp;</td>
  <td class=xl8211611>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1511611 style='height:15.0pt'></td>
  <td class=xl1511611></td>
  <td colspan=2 class=xl8311611>Mata Kuliah</td>
  <td class=xl6611611>:</td>
  <td class=xl1511611>
  	<?php 
  		$sql2 = "SELECT * FROM matkul WHERE kode_matkul = '$matkulnya'";
  		$result2 = mysqli_query($con,$sql2);
  		$row = mysqli_fetch_array($result2);
  		echo $row['nama_matkul'];
  	?>
  </td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl6711611>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1511611 style='height:15.0pt'></td>
  <td class=xl1511611></td>
  <td colspan=2 class=xl8311611>Semester</td>
  <td class=xl6611611>:</td>
  <td class=xl1511611><?php echo $semesternya; ?></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl6711611>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1511611 style='height:15.0pt'></td>
  <td class=xl1511611></td>
  <td class=xl6811611>&nbsp;</td>
  <td class=xl6511611></td>
  <td class=xl6611611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl6711611>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1511611 style='height:15.0pt'></td>
  <td class=xl1511611></td>
  <td class=xl8511611>No</td>
  <td colspan=3 class=xl8511611 style='border-left:none'>NIM</td>
  <td colspan=4 class=xl8511611 style='border-left:none'>Nama Mahasiswa</td>
  <td class=xl8511611 style='border-left:none'>TTD</td>
 </tr>
<?php
    $i=1;
    while($data = mysqli_fetch_array($result)){
?> 
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1511611 style='height:15.0pt'></td>
  <td class=xl1511611></td>
  <td class=xl7011611 style='border-top:none'><?php echo $i; ?></td>
  <td colspan=3 class=xl7611611 style='border-right:.5pt solid black;
  border-left:none'><?php echo $data['username']; ?></td>
  <td colspan=4 class=xl7611611 style='border-right:.5pt solid black;
  border-left:none'><?php echo $data['nama']; ?></td>
  <td class=xl7011611 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
<?php
		$i++;
}
?>  
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1511611 style='height:15.0pt'></td>
  <td class=xl1511611></td>
  <td class=xl7911611>&nbsp;</td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl6711611>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1511611 style='height:15.0pt'></td>
  <td class=xl1511611></td>
  <td class=xl7911611>&nbsp;</td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl6711611>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1511611 style='height:15.0pt'></td>
  <td class=xl1511611></td>
  <td class=xl7911611>&nbsp;</td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611>Cirebon,</td>
  <td class=xl1511611></td>
  <td class=xl6711611>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1511611 style='height:15.0pt'></td>
  <td class=xl1511611></td>
  <td class=xl7911611>&nbsp;</td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl6711611>TTD</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1511611 style='height:15.0pt'></td>
  <td class=xl1511611></td>
  <td class=xl7911611>&nbsp;</td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611 colspan=2>Pengawas 1</td>
  <td class=xl6711611>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1511611 style='height:15.0pt'></td>
  <td class=xl1511611></td>
  <td class=xl7911611>&nbsp;</td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611 colspan=2>Pengawas2</td>
  <td class=xl6711611>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1511611 style='height:15.0pt'></td>
  <td class=xl1511611></td>
  <td class=xl7911611>&nbsp;</td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl1511611></td>
  <td class=xl6711611>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1511611 style='height:15.0pt'></td>
  <td class=xl1511611></td>
  <td class=xl8011611>&nbsp;</td>
  <td class=xl6311611>&nbsp;</td>
  <td class=xl6311611>&nbsp;</td>
  <td class=xl6311611>&nbsp;</td>
  <td class=xl6311611>&nbsp;</td>
  <td class=xl6311611>&nbsp;</td>
  <td class=xl6311611>&nbsp;</td>
  <td class=xl6311611>&nbsp;</td>
  <td class=xl6411611>&nbsp;</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
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
