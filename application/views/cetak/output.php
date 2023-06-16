<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">
<?php foreach ($siswa as $tp) { ?>
  <?php foreach ($profil as $pr) { ?>
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<title>Bukti Daftar Ulang <?= $tp->nama_lengkap ?></title>
<style id="FORMULIR DAFTAR ULANG PPDB 2023 FIX_8599_Styles">

	{mso-displayed-decimal-separator:"\,";
	mso-displayed-thousand-separator:"\.";}
.font58599
	{color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font68599
	{color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font78599
	{color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.xl158599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl658599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl668599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl678599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl688599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl698599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl708599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl718599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl728599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl738599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl748599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl758599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl768599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl778599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl788599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl798599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl808599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl818599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:13.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl828599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:13.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl838599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl848599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl858599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl868599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl878599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl888599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl898599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl908599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl918599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl928599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl938599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl948599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl958599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl968599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl978599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:13.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl988599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl998599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl1008599
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}

</style>
</head>

<body>

<div id="form" align=center>

<table border=0 cellpadding=0 cellspacing=0>
 <th style="width:25px;" colspan=2></th>
 <th style="width:220px"></th>
 <th style="width:52px"></th>
 <th style="width:13px"></th>
 <th style="width:10px"></th>
 <tr height=22 style='mso-height-source:userset;height:16.5pt'>
  <td colspan=2 rowspan=3><?= $imgpath['logo'] ?></td>
 <td colspan=4 class=xl818599 >FORMULIR DAFTAR
  ULANG</td>
 </tr>
 <tr height=22 style='mso-height-source:userset;height:16.5pt'>
  <td colspan=4 class=xl978599>PESERTA DIDIK BARU <?=
  strtoupper($pr->nama) ?></td>
 </tr>
 <tr height=22 style='mso-height-source:userset;height:16.5pt'>
  <td colspan=4 class=xl978599>TAHUN PELAJARAN <?= $pr->th_ajaran ?></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl668599></td>
  <td class=xl668599></td>
  <td class=xl668599></td>
  <td class=xl668599></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'>1.</td>
  <td colspan=2 class=xl678599>NAMA PESERTA DIDIK</td>
  <td class=xl678599></td>
  <td class=xl698599>:</td>
  <td class=xl918599><?= $tp->nama_lengkap ?></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'>2.</td>
  <td colspan=2 class=xl678599><font class="font68599">NISN </font><font
  class="font58599">(Nomor Induk Siswa Nasional)</font></td>
  <td class=xl678599></td>
  <td class=xl698599>:</td>
  <td class=xl918599><?= $tp->nisn ?></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'>3.</td>
  <td colspan=2 class=xl678599>JALUR DITERIMA</td>
  <td class=xl678599></td>
  <td class=xl698599>:</td>
  <td class=xl918599><?= $tp->masuk_jalur ?></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'>4.</td>
  <td colspan=2 class=xl678599><font class="font68599">NIK </font><font
  class="font58599">(No. Induk Kependudukan)</font></td>
  <td class=xl678599></td>
  <td class=xl698599>:</td>
  <td class=xl918599><?= $tp->nik ?></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'>5.</td>
  <td colspan=2 class=xl678599>NO KARTU KELUARGA</td>
  <td class=xl698599></td>
  <td class=xl698599>:</td>
  <td class=xl678599><?= $tp->no_kk ?></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'>6.</td>
  <td colspan=2 class=xl678599>JENIS KELAMIN</td>
  <td class=xl698599></td>
  <td class=xl698599>:</td>
  <td class=xl918599><?= $tp->jk ?></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'>7.</td>
  <td colspan=2 class=xl678599>KELAHIRAN</td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl678599></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl698599>TEMPAT LAHIR</td>
  <td class=xl698599></td>
  <td class=xl698599>:</td>
  <td class=xl918599><?= $tp->tempat_lahir ?></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl698599>PROVINSI</td>
  <td class=xl698599></td>
  <td class=xl698599>:</td>
  <td class=xl918599><?= $tp->prov_lahir ?></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl698599>TANGGAL LAHIR</td>
  <td class=xl698599></td>
  <td class=xl698599>:</td>
  <td class=xl918599><?= $this->Model_APS->tgl_id($tp->tgl_lahir)
  ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'>8.</td>
  <td colspan=2 class=xl678599>AGAMA</td>
  <td class=xl698599></td>
  <td class=xl698599>:</td>
  <td class=xl918599><?= $tp->agama ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'>9.</td>
  <td colspan=3 class=xl678599>ASAL SEKOLAH</td>
  <td class=xl698599>:</td>
  <td class=xl918599><?= $tp->asal ?></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl668599 style='height:13.5pt'>10.</td>
  <td colspan=3 class=xl678599>ALAMAT PESERTA DIDIK</td>
  <td class=xl698599></td>
  <td class=xl678599></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl668599 style='height:13.5pt'></td>
  <td class=xl678599></td>
  <td class=xl698599>RT / RW</td>
  <td class=xl698599></td>
  <td class=xl698599>:</td>
  <td class=xl928599><?= $tp->rt ?> / <?= $tp->rw ?></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl668599 style='height:13.5pt'></td>
  <td class=xl678599></td>
  <td class=xl698599>JALAN</td>
  <td class=xl698599></td>
  <td class=xl698599>:</td>
  <td class=xl928599><?= $tp->jalan ?></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl668599 style='height:13.5pt'></td>
  <td class=xl678599></td>
  <td class=xl698599>DESA/KEL</td>
  <td class=xl698599></td>
  <td class=xl698599>:</td>
  <td class=xl928599><?= $tp->desa ?></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl668599 style='height:13.5pt'></td>
  <td class=xl678599></td>
  <td class=xl698599>KECAMATAN</td>
  <td class=xl698599></td>
  <td class=xl698599>:</td>
  <td class=xl918599><?= $tp->kec ?></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl668599 style='height:13.5pt'></td>
  <td class=xl678599></td>
  <td class=xl698599>KAB/KOTA</td>
  <td class=xl698599></td>
  <td class=xl698599>:</td>
  <td class=xl918599><?= $tp->kab ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'>11.</td>
  <td colspan=2 class=xl678599>NAMA ORANG TUA</td>
  <td class=xl698599>AYAH<span style='mso-spacerun:yes'> </span></td>
  <td class=xl698599>:</td>
  <td class=xl928599><?= $tp->nama_ayah ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl698599></td>
  <td class=xl698599>IBU</td>
  <td class=xl698599>:</td>
  <td class=xl928599><?= $tp->nama_ibu ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'>12.</td>
  <td colspan=2 class=xl678599>PEKERJAAN ORANG TUA</td>
  <td class=xl698599>AYAH<span style='mso-spacerun:yes'> </span></td>
  <td class=xl698599>:</td>
  <td class=xl928599><?= $tp->pk_ayah ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl698599></td>
  <td class=xl698599>IBU</td>
  <td class=xl698599>:</td>
  <td class=xl928599><?= $tp->pk_ibu ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'>13.</td>
  <td colspan=2 class=xl678599>PENGHASILAN ORANG TUA</td>
  <td class=xl698599>AYAH<span style='mso-spacerun:yes'> </span></td>
  <td class=xl698599>:</td>
  <td class=xl928599><?= $tp->ph_ayah ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl698599>IBU</td>
  <td class=xl698599>:</td>
  <td class=xl928599><?= $tp->ph_ibu ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'>14.</td>
  <td colspan=3 class=xl678599>NAMA WALI PESERTA DIDIK</td>
  <td class=xl698599>:</td>
  <td class=xl918599><?= $tp->nama_wali ?></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl668599 style='height:13.5pt'></td>
  <td colspan=3 class=xl718599>(Jika tidak tinggal dengan orang tua)</td>
  <td class=xl698599></td>
  <td class=xl678599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'>15.</td>
  <td colspan=3 class=xl678599>PEKERJAAN WALI PESERTA DIDIK</td>
  <td class=xl698599>:</td>
  <td class=xl918599><?= $tp->pk_wali ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'>16.</td>
  <td colspan=3 class=xl718599>ALAMAT WALI PESERTA DIDIK</td>
  <td class=xl698599></td>
  <td class=xl678599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl698599>RT / RW</td>
  <td class=xl698599></td>
  <td class=xl698599>:</td>
  <td class=xl918599><?= $tp->rt_wali ?> / <?= $tp->rw_wali
  ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl698599>JALAN</td>
  <td class=xl698599></td>
  <td class=xl698599>:</td>
  <td class=xl918599><?= $tp->jalan_wali ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl698599>DESA/KEL</td>
  <td class=xl698599></td>
  <td class=xl698599>:</td>
  <td class=xl918599><?= $tp->desa_wali ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl698599>KECAMATAN</td>
  <td class=xl698599></td>
  <td class=xl698599>:</td>
  <td class=xl918599><?= $tp->kec_wali ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl698599>KAB/KOTA</td>
  <td class=xl698599></td>
  <td class=xl698599>:</td>
  <td class=xl918599><?= $tp->kab_wali ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td colspan=2 class=xl678599 style="text-align: center;">Mengetahui</td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl938599 style="text-align: center;">Srengat, <?= $this->Model_APS->tgl_id(date("Y-m-d"))
  ?></span></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td colspan=2 class=xl678599 style="text-align: center;">Orang Tua/ Wali *)</td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl688599 style="text-align: center;">Calon Peserta Didik</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 class=xl668599 style='height:19.5pt'></td>
  <td class=xl678599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 class=xl668599 style='height:19.5pt'></td>
  <td class=xl678599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td colspan=2 class=xl918599 style="text-align: center;"><?= $tp->ttdnama ?></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl948599 style="text-align: center;"><?= $tp->nama_lengkap ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td class=xl678599 colspan=2 rowspan=4><?= $imgpath['path'] ?></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
 </tr>
 <tr height=27 style='page-break-before:always;mso-height-source:userset;
  height:20.25pt'>
  <td colspan=6 height=27 class=xl658599 style='height:20.25pt'>DAFTAR ISIAN /
  IDENTITAS PESERTA DIDIK</td>
 </tr>
 <tr height=27 style='mso-height-source:userset;height:20.25pt'>
  <td colspan=6 height=27 class=xl658599 style='height:20.25pt'>UNTUK MENGISI
  BUKU INDUK</td>
 </tr>
 <tr style='mso-height-source:userset;height:6pt'>
  <td class=xl758599></td>
  <td class=xl718599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td colspan=3 height=21 class=xl718599 style='height:15.75pt'>JALUR
  PENERIMAAN</td>
  <td class=xl758599></td>
  <td class=xl758599>:</td>
  <td class=xl958599><?= $tp->masuk_jalur ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td colspan=3 height=21 class=xl718599 style='height:15.75pt'>NOMOR URUT
  DITERIMA</td>
  <td class=xl758599></td>
  <td class=xl758599>:</td>
  <td class=xl958599><?= $tp->no_urut ?></td>
 </tr>
 <tr style='mso-height-source:userset;height:6pt'>
  <td class=xl758599></td>
  <td class=xl718599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl778599 style='height:18.0pt'>A.</td>
  <td colspan=5 class=xl768599>KETERANGAN<span style='mso-spacerun:yes'> 
  </span>TENTANG DIRI PESERTA DIDIK</td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl738599>NISN</td>
  <td class=xl738599></td>
  <td class=xl788599>:</td>
  <td class=xl968599><?= $tp->nisn ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>1.</td>
  <td class=xl718599>Nama Lengkap Peserta Didik</td>
  <td class=xl718599></td>
  <td class=xl758599>:</td>
  <td class=xl958599><?= $tp->nama_lengkap ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl718599>Nama Panggilan</td>
  <td class=xl718599></td>
  <td class=xl758599>:</td>
  <td class=xl958599><?= $tp->nama_panggilan ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>2.</td>
  <td class=xl718599>Jenis Kelamin</td>
  <td class=xl718599></td>
  <td class=xl758599>:</td>
  <td class=xl958599><?= $tp->jk ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>3.<span style='mso-spacerun:yes'> </span></td>
  <td class=xl718599>Tempat Dan Tanggal Lahir</td>
  <td class=xl718599></td>
  <td class=xl758599>:</td>
  <td class=xl958599><?= "$tp->tempat_lahir, "?> <?= $this->Model_APS->tgl_id("$tp->tgl_lahir") ?></span></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>4.<span style='mso-spacerun:yes'> </span></td>
  <td class=xl718599>Agama</td>
  <td class=xl718599></td>
  <td class=xl758599>:</td>
  <td class=xl958599><?= $tp->agama ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>5.</td>
  <td class=xl718599>Kewarganegaraan</td>
  <td class=xl718599></td>
  <td class=xl758599>:</td>
  <td class=xl958599><?= $tp->kw ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>6.</td>
  <td class=xl718599>Anak Ke</td>
  <td class=xl718599></td>
  <td class=xl758599>:</td>
  <td class=xl958599><?= $tp->anak_ke ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>7.<span style='mso-spacerun:yes'> </span></td>
  <td class=xl718599>Jumlah Saudara Kandung</td>
  <td class=xl718599></td>
  <td class=xl758599>:</td>
  <td class=xl958599><?= $tp->jml_saudara_kd ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>8.<span style='mso-spacerun:yes'> </span></td>
  <td class=xl718599>Jumlah Saudara Tiri</td>
  <td class=xl718599></td>
  <td class=xl758599>:</td>
  <td class=xl958599><?= $tp->jml_saudara_tr ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>9.</td>
  <td class=xl718599>Jumlah Saudara Angkat</td>
  <td class=xl718599></td>
  <td class=xl758599>:</td>
  <td class=xl958599><?= $tp->jml_saudara_ak ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>10.</td>
  <td class=xl718599>Status Anak</td>
  <td class=xl718599></td>
  <td class=xl758599>:</td>
  <td class=xl958599><?= $tp->status_anak ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>11.</td>
  <td class=xl718599>Bahasa Sehari Hari Di Rumah</td>
  <td class=xl718599></td>
  <td class=xl758599>:</td>
  <td class=xl958599><?= $tp->bahasa ?></td>
 </tr>
 <tr style='mso-height-source:userset;height:6pt'>
  <td class=xl758599></td>
  <td class=xl718599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl778599 style='height:18.0pt'>B.</td>
  <td colspan=2 class=xl768599>KETERANGAN TEMPAT TINGGAL</td>
  <td class=xl778599></td>
  <td class=xl778599></td>
  <td class=xl758599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>12.</td>
  <td class=xl678599>Alamat Peserta Didik</td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl678599>RT / RW</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl928599><?= $tp->rt ?> / <?= $tp->rw ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl678599>Jalan</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl928599><?= $tp->jalan ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl678599>Desa/Kelurahan</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl928599><?= $tp->desa ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl678599>Kecamatan</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl918599><?= $tp->kec ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl678599>Kab / Kota *)</td>
  <td class=xl758599></td>
  <td class=xl678599>:</td>
  <td class=xl918599><?= $tp->kab ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>13.</td>
  <td class=xl718599>Nomor Telepon/ HP</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->notelp ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>14.</td>
  <td class=xl718599>Tinggal Dengan Orang Tua/ Wali/</td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl718599>Saudara/ Kos</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->tinggal ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>15.</td>
  <td class=xl718599>Jarak Tempat Tinggal Ke Sekolah</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->jarak.' Kilometer' ?></td>
 </tr>
 <tr style='mso-height-source:userset;height:6pt'>
  <td class=xl758599></td>
  <td class=xl718599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl778599 style='height:18.0pt'>C.</td>
  <td colspan=2 class=xl768599>KETERANGAN KESEHATAN</td>
  <td class=xl768599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>16.</td>
  <td class=xl718599>Golongan Darah</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->goldar ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>17.</td>
  <td class=xl718599>Penyakit Yang Pernah di Derita</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->penyakit ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>18.</td>
  <td class=xl718599>Kelainan Jasmani</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->kelainan ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>19.</td>
  <td class=xl718599>Tinggi Dan Berat Badan</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->tinggi_badan.' cm' ?> dan <?= $tp->berat_badan.' Kg' ?></span></td>
 </tr>
 <tr height=10 style='mso-height-source:userset;height:10pt'>
  <td class=xl758599></td>
  <td class=xl718599></td>
  <td class=xl708599>(Saat Diterima Di Sekolah Ini)</td>
  <td class=xl708599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl778599 style='height:18.0pt'>D.</td>
  <td colspan=2 class=xl768599>KETERANGAN PENDIDIKAN</td>
  <td class=xl768599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>20.</td>
  <td class=xl718599>Pendidikan SMP/MTs/Sederajat</td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl718599>a. Nama Sekolah</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->asal ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl848599>b. NPSN SMP/MTs/Sederajat</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->smp_npsn ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl718599>c. Nomor Ijazah / SKL</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->smp_no ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl718599>d. Tanggal Ijazah / SKL</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->smp_tgl ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>21.</td>
  <td class=xl718599>Pendidikan SD/MI/Sedrajat</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl718599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl718599>a. Nama Sekolah</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->sd_asal ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl848599>b. NPSN SD/MI/Sederajat</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->sd_npsn ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl718599>c. Nomor Ijazah / SKL</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->sd_no ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl718599>d. Tanggal Ijazah / SKL</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->sd_tgl ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl718599>e. NISN di Ijazah SD/MI/Sederajat</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->nisn ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>22.</td>
  <td class=xl718599>Pindahan</td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl718599>a. Dari Sekolah</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->pindahan_asal ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl718599>b. Alasan Pindah</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->pindahan_alasan ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>23.</td>
  <td class=xl718599>Diterima Di Sekolah Ini</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl718599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;
  height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl718599>a. Kelas (X)</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->masuk_kelas ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl718599>b. Jalur Masuk</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->masuk_jalur ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl718599>c. Tanggal diterima</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->masuk_tgl ?></td>
 </tr>
 <tr style='mso-height-source:userset;height:6pt'>
  <td class=xl758599></td>
  <td class=xl718599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl778599 style='height:18.0pt'>E.</td>
  <td colspan=5 class=xl768599>KETERANGAN TENTANG AYAH KANDUNG</td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>24.</td>
  <td class=xl718599><font class="font58599">Nama Lengkap </font><font
  class="font78599">(sesuai KK)</font></td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->nama_ayah ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>25.</td>
  <td class=xl718599>Tempat Dan Tanggal Lahir</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->ttl_ayah ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>26.<span style='mso-spacerun:yes'> </span></td>
  <td class=xl718599>Agama</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->agama_ayah ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>27.<span style='mso-spacerun:yes'> </span></td>
  <td class=xl718599>Kewarganegaraan</td>
  <td class=xl718599></td>
  <td class=xl958599>:</td>
  <td class=xl958599><?= $tp->kw_ayah ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>28.</td>
  <td class=xl718599>Pendidikan Terakhir</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->pdd_ayah ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>29.</td>
  <td class=xl718599>Pekerjaan</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->pk_ayah ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>30.</td>
  <td class=xl718599>Penghasilan Setiap Bulan</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->ph_ayah ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>31.</td>
  <td class=xl718599>Alamat Rumah</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->alamat_ortu ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>32.</td>
  <td class=xl718599>Nomor Telepon/HP</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->notelp_ayah ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>33.</td>
  <td class=xl798599>Masih Hidup/Meninggal Dunia Tahun</td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl958599><?= $tp->status_ayah ?></td>
 </tr>
 <tr style='mso-height-source:userset;height:6pt'>
  <td class=xl758599></td>
  <td class=xl718599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl778599 style='height:18.0pt'>F.</td>
  <td colspan=5 class=xl768599>KETERANGAN TENTANG IBU KANDUNG</td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>32.</td>
  <td class=xl718599><font class="font58599">Nama Lengkap </font><font
  class="font78599">(sesuai KK)</font></td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->nama_ibu ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>33.</td>
  <td class=xl718599>Tempat Dan Tanggal Lahir</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->ttl_ibu ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>34.<span style='mso-spacerun:yes'> </span></td>
  <td class=xl718599>Agama</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->agama_ibu ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>35.<span style='mso-spacerun:yes'> </span></td>
  <td class=xl718599>Kewarganegaraan</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->kw_ibu ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>36.</td>
  <td class=xl718599>Pendidikan Terakhir</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->pdd_ibu ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>37.</td>
  <td class=xl718599>Pekerjaan</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->pk_ibu ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>38.</td>
  <td class=xl718599>Penghasilan Setiap Bulan</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->ph_ibu ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>39.</td>
  <td class=xl718599>Alamat Rumah</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->alamat_ortu ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>40.</td>
  <td class=xl718599>Nomor Telepon/HP</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->notelp_ibu ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>41.</td>
  <td class=xl798599>Masih Hidup/Meninggal Dunia Tahun</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->status_ibu ?></td>
 </tr>
 <tr style='mso-height-source:userset;height:6pt'>
  <td class=xl758599></td>
  <td class=xl718599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl778599 style='height:18.0pt'>G.</td>
  <td colspan=5 class=xl768599>KETERANGAN TENTANG WALI PESERA DIDIK</td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>42.</td>
  <td class=xl718599><font class="font58599">Nama Lengkap </font><font
  class="font78599">(sesuai KK)</font></td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->nama_wali ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>43.</td>
  <td class=xl718599>Tempat Dan Tanggal Lahir</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->ttl_wali ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>44.</td>
  <td class=xl718599>Agama</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->agama_wali ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>45.</td>
  <td class=xl718599>Kewarganegaraan</td>
  <td class=xl718599></td>
  <td class=xl958599>:</td>
  <td class=xl958599><?= $tp->kw_wali ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599>46.</td>
  <td class=xl718599>Pendidikan Terakhir</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->pdd_wali ?></td>
 </tr>
 <tr height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl758599 style='height:16.5pt'></td>
  <td class=xl718599>47.</td>
  <td class=xl718599>Pekerjaan</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->pk_wali ?></td>
 </tr>
 <tr height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl758599 style='height:16.5pt'></td>
  <td class=xl718599>48.</td>
  <td class=xl718599>Penghasilan Setiap Bulan</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->ph_wali ?></td>
 </tr>
 <tr height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl758599 style='height:16.5pt'></td>
  <td class=xl718599>49.</td>
  <td class=xl718599>Alamat Rumah</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= 'Jalan '.$tp->jalan_wali.' RT '.$tp->rt_wali.' RW '.$tp->rw_wali.' Desa '.$tp->desa_wali?></td>
 </tr>
 <tr class=xl158599 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl758599 style='height:16.5pt'></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl958599><?= 'Kec. '.$tp->kec_wali.' Kab./Kota
  '.$tp->kab_wali ?></span></td>
 </tr>
 <tr height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl758599 style='height:16.5pt'></td>
  <td class=xl718599>50.</td>
  <td class=xl718599>Nomor Telepon/HP</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->notelp_wali ?></td>
 </tr>
 <tr style='mso-height-source:userset;height:6pt'>
  <td class=xl758599></td>
  <td class=xl718599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
  <td class=xl758599></td>
 </tr>
 <tr height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl778599 style='height:16.5pt'>H.</td>
  <td colspan=3 class=xl768599>KEGEMARAN (HOBY) PESERTA DIDIK</td>
  <td class=xl768599></td>
  <td class=xl768599></td>
 </tr>
 <tr height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl758599 style='height:16.5pt'></td>
  <td class=xl718599>51.</td>
  <td class=xl718599>Kesenian</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->hobi_kes ?></td>
 </tr>
 <tr height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl758599 style='height:16.5pt'></td>
  <td class=xl718599>52.</td>
  <td class=xl718599>Olah Raga</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->hobi_or ?></td>
 </tr>
 <tr height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl758599 style='height:16.5pt'></td>
  <td class=xl718599>53.</td>
  <td class=xl718599>Kemasyarakatan/ormas</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->hobi_masy ?></td>
 </tr>
 <tr height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl758599 style='height:16.5pt'></td>
  <td class=xl718599>54.</td>
  <td class=xl718599>Lain-Lain</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->hobi_lain ?></td>
 </tr>
 <tr height=22 style='mso-height-source:userset;height:13pt'>
  <td height=22 class=xl778599 style='height:13pt'>I.</td>
  <td colspan=2 class=xl768599>DATA TAMBAHAN (Jika Ada)</td>
  <td class=xl768599></td>
  <td class=xl768599></td>
  <td class=xl768599></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:10pt'>
  <td class=xl758599></td>
  <td class=xl718599>55.</td>
  <td class=xl718599>Nomor KKS</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->no_kks ?></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:10pt'>
  <td class=xl758599></td>
  <td class=xl718599>56.</td>
  <td class=xl718599>Nomor PKH</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->no_pkh ?></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:10pt'>
  <td class=xl758599></td>
  <td class=xl718599>57.</td>
  <td class=xl718599>Nomor KIP</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->no_kip ?></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:10pt'>
  <td class=xl758599></td>
  <td class=xl718599>58.</td>
  <td class=xl718599>Nomor KIS</td>
  <td class=xl718599></td>
  <td class=xl718599>:</td>
  <td class=xl958599><?= $tp->no_kis ?></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:20pt'>
  <td class=xl758599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl758599 style='height:15.75pt'></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl938599 style="text-align: center;">Srengat, <?= $this->Model_APS->tgl_id(date("Y-m-d")) ?></span></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl758599 style='height:15.75pt'></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl688599 style="text-align: center;">Calon Peserta Didik</td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl758599 style='height:15.75pt'></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl758599 style='height:15.75pt'></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl758599 style='height:15.75pt'></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl958599 style="text-align: center;"><?= $tp->nama_lengkap ?></td>
 </tr>
 <tr height=25 style='page-break-before:always;mso-height-source:userset;
  height:18.75pt'>
  <td colspan=6 height=25 class=xl818599 style='height:18.75pt'>SURAT<span
  style='mso-spacerun:yes'>  </span>PERNYATAAN CALON PESERTA DIDIK</td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.75pt'>
  <td colspan=6 height=25 class=xl978599 style='height:18.75pt'><?=
  strtoupper($pr->nama) ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl758599 style='height:15.75pt'></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td colspan=4 height=24 class=xl678599 style='height:18.0pt'>Yang bertanda
  tangan dibawah ini Saya:</td>
  <td class=xl678599></td>
  <td class=xl678599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599>1.</td>
  <td class=xl678599>Nama Lengkap</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= $tp->nama_lengkap ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599>2.<span style='mso-spacerun:yes'> </span></td>
  <td class=xl678599>Tempat dan Tanggal Lahir</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= "$tp->tempat_lahir, "?> <?= $this->Model_APS->tgl_id("$tp->tgl_lahir") ?></span></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599>3.</td>
  <td class=xl678599>Jenis Kelamin</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= $tp->jk ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599>4.</td>
  <td class=xl678599>Agama</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= $tp->agama ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599>5.</td>
  <td class=xl678599>Nomor Pendaftaran/ PIN</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= $tp->no_pendaftaran ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599>6.</td>
  <td class=xl678599>Di Terima Di Kelas</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= $tp->masuk_kelas ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599>7.</td>
  <td class=xl678599>Nama Orang Tua</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= $tp->nama_ayah.' / '.$tp->nama_ibu ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599>8.</td>
  <td class=xl678599>Pekerjaan Orang Tua</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= $tp->pk_ayah.' / '.$tp->pk_ibu ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599>9.</td>
  <td class=xl678599>Agama Orang Tua</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= $tp->agama_ayah.' / '.$tp->agama_ibu ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599>10.</td>
  <td class=xl678599>Nama Wali</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= $tp->nama_wali ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599>11.</td>
  <td class=xl678599>Pekerjaan wali</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= $tp->pk_wali ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599>12.</td>
  <td colspan=2 class=xl678599>Hubungan Keluarga Dengan Wali</td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= $tp->hub_wali ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599>13.</td>
  <td class=xl678599>Alamat Orang Tua/ Wali</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= $tp->alamat_ortu ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td colspan=4 height=24 class=xl678599 style='height:18.0pt'>Dengan
  sungguh-sungguh dan Penuh Kesadaran<span style='mso-spacerun:yes'> </span></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td colspan=6 height=24 class=xl778599 style='height:18.0pt'>MENYATAKAN :</td>
 </tr>
 <tr height=10 style='mso-height-source:userset;height:7.5pt'>
  <td height=10 class=xl778599 style='height:7.5pt'></td>
  <td class=xl778599></td>
  <td class=xl778599></td>
  <td class=xl778599></td>
  <td class=xl778599></td>
  <td class=xl778599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td colspan=6 height=24 class=xl678599 style='height:18.0pt'>Bahwa selama
  menjadi peserta didik di SMAN 1 Srengat, Saya :</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 class=xl668599 style='height:19.5pt'></td>
  <td class=xl858599>1.</td>
  <td colspan=4 class=xl808599>Bertakwa kepada Tuhan Yang Maha Esa</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 class=xl668599 style='height:19.5pt'></td>
  <td class=xl858599>2.</td>
  <td colspan=4 class=xl808599>Akan belajar dengan tekun dan penuh semangat;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 class=xl668599 style='height:19.5pt'></td>
  <td class=xl858599>3.</td>
  <td colspan=4 class=xl808599>Akan menjaga nama baik diri sendiri, keluarga
  dan sekolah;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 class=xl668599 style='height:19.5pt'></td>
  <td class=xl858599>4.</td>
  <td colspan=4 class=xl808599>Sanggup mentaati dan mematuhi peraturan dan tata
  tertib yang berlaku di SMAN 1 Srengat;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 class=xl668599 style='height:19.5pt'></td>
  <td class=xl858599>5.</td>
  <td colspan=4 class=xl808599>Tidak menikah selama menjadi peserta didik di
  SMAN 1 Srengat</td>
 </tr>
 <tr height=43 style='mso-height-source:userset;height:32.25pt'>
  <td height=43 class=xl668599 style='height:32.25pt'></td>
  <td class=xl858599>6.</td>
  <td colspan=4 class=xl898599 >Tidak terlibat
  kasus Narkotika, Perkelahian, Kejahatan, Pencurian, Perjudian dan sebagainya
  yang mengakibatkan terancam pidana;</td>
 </tr>
 <tr height=28 style='mso-height-source:userset;height:21.0pt'>
  <td height=28 class=xl668599 style='height:21.0pt'></td>
  <td class=xl858599>7.</td>
  <td colspan=4 class=xl808599>Akan mengikuti pendidikan agama yang sesuai
  dengan agama<span style='mso-spacerun:yes'>  </span>yang saya anut;</td>
 </tr>
 <tr height=41 style='mso-height-source:userset;height:30.75pt'>
  <td height=41 class=xl668599 style='height:30.75pt'></td>
  <td class=xl868599>8.</td>
  <td colspan=4 class=xl898599 >Apabila saya tidak
  mentaati ketentuan yang ditetapkan oleh sekolah dan pernyataan yang saya
  buat, saya sanggup menerima sanksi yaitu:</td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.75pt'>
  <td height=25 class=xl668599 style='height:18.75pt'></td>
  <td class=xl808599></td>
  <td colspan=4 class=xl808599>a. Tidak diperkenankan mengikuti pelajaran
  selama jangka waktu tertentu</td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.75pt'>
  <td height=25 class=xl668599 style='height:18.75pt'></td>
  <td class=xl808599></td>
  <td colspan=4 class=xl808599>b. Dikembalikan ke orang tua / Wali</td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td colspan=6 height=24 class=xl678599 style='height:18.0pt'>Surat pernyataan
  ini saya buat dengan sebenar-benarnya, dengan diketahui orang tua / Wali</td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td colspan=2 class=xl678599 style="text-align: center;">Mengetahui</td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl938599 style="text-align: center;">Srengat, <?=
  $this->Model_APS->tgl_id(date("Y-m-d"))
  ?></span></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td colspan=2 class=xl678599 style="text-align: center;">Orang Tua/ Wali *)</td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl688599 style="text-align: center;">Yang Membuat Pernyataan</td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
 </tr>
 <tr height=34 style='mso-height-source:userset;height:25.5pt'>
  <td height=34 class=xl668599 style='height:25.5pt'></td>
  <td class=xl678599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl888599 width=312 style='width:234pt'><span style='color:white;'>------------------------</span>Meterai <br>
  <span style='color:white;'>----------------------</span>Rp. 10.000</td>
 </tr>
 <tr height=34 style='mso-height-source:userset;height:25.5pt'>
  <td height=34 class=xl668599 style='height:25.5pt'></td>
  <td class=xl678599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl878599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td colspan=2 class=xl918599 style="text-align: center;"><?= $tp->ttdnama ?></td>
  <td class=xl698599></td>
  <td class=xl698599></td>
  <td class=xl948599 style="text-align: center;"><?= $tp->nama_lengkap ?></td>
 </tr>
 <tr height=33 style='page-break-before:always;mso-height-source:userset;
  height:24.75pt'>
  <td colspan=6 height=33 class=xl818599 style='height:24.75pt'>SURAT<span
  style='mso-spacerun:yes'>  </span>PERNYATAAN ORANG TUA / WALI</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.75pt'>
  <td colspan=6 height=33 class=xl978599 style='height:24.75pt'>CALON PESERTA
  DIDIK <?= strtoupper($pr->nama) ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl758599 style='height:18.0pt'></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
  <td class=xl718599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td colspan=3 height=24 class=xl678599 style='height:18.0pt'>Yang bertanda
  tangan dibawah ini Saya:</td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599>1.</td>
  <td class=xl678599>Nama Orang Tua / Wali *)</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= $tp->ttdnama ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599>2.<span style='mso-spacerun:yes'> </span></td>
  <td class=xl678599>Tempat dan Tanggal Lahir</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= $tp->ttdttl ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599>3.</td>
  <td class=xl678599>Pekerjaan Orang Tua / Wali</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= $tp->ttdpk ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599>4.</td>
  <td class=xl678599>Alamat Orang Tua/ Wali</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= $tp->ttdalamat ?></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl668599 style='height:18.0pt'></td>
  <td class=xl678599>5.</td>
  <td class=xl688599>Nomor Telepon Orang Tua/ Wali</td>
  <td class=xl688599></td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= $tp->ttdtelp ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599>6.</td>
  <td class=xl678599>Agama</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= $tp->ttdagama ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599>7.</td>
  <td class=xl678599>Nama Lengkap Peserta Didik</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= $tp->nama_lengkap ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599>8.</td>
  <td class=xl678599>Jenis Kelamin</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= $tp->jk ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599>9.</td>
  <td class=xl678599>Diterima Di Kelas</td>
  <td class=xl678599></td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= $tp->masuk_kelas ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599>10.</td>
  <td colspan=2 class=xl678599>Hubungan Keluarga Dengan Wali</td>
  <td class=xl678599>:</td>
  <td class=xl958599><?= $tp->hub_wali ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td colspan=6 height=21 class=xl788599 style='height:15.75pt'>MENYATAKAN :</td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td colspan=6 height=21 class=xl678599 style='height:15.75pt'>Bahwa selaku
  Orang Tua / wali *) dari calon Peserta Didik<span style='mso-spacerun:yes'> 
  </span>yang namanya tersebut diatas, Saya :</td>
 </tr>
 <tr height=43 style='mso-height-source:userset;height:32.25pt'>
  <td height=43 class=xl668599 style='height:32.25pt'></td>
  <td class=xl808599>1.</td>
  <td colspan=4 class=xl998599 >Bersedia
  menbimbing dan mengawasi calon peserta didik tersebut untuk mentaati dan
  mematuhi peraturan dan tata tertib yang berlaku di <?= $pr->nama ?>;</td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.25pt'>
  <td height=23 class=xl668599 style='height:17.25pt'></td>
  <td class=xl808599>2.</td>
  <td colspan=4 class=xl1008599>Sanggup membiayai peserta didik tersebut sampai
  tamat/lulus dari <?= $pr->nama ?>;</td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.25pt'>
  <td height=23 class=xl668599 style='height:17.25pt'></td>
  <td class=xl808599>3.</td>
  <td colspan=4 class=xl808599>Calon Peserta didik tersebut diatas akan
  mengikuti pendidikan agama yang di anut;</td>
 </tr>
 <tr height=45 style='mso-height-source:userset;height:33.75pt'>
  <td height=45 class=xl668599 style='height:33.75pt'></td>
  <td class=xl808599>4.</td>
  <td colspan=4 class=xl998599 >Sanggup tidak
  menikahkan calon peserta didik yang namanya tersebut diatas selama menjadi
  peserta didik di <?= $pr->nama ?>;</td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.25pt'>
  <td height=23 class=xl668599 style='height:17.25pt'></td>
  <td class=xl678599>5.</td>
  <td colspan=4 class=xl908599 >Tidak Keberatan
  Peserta didik tersebut di atas akan menerima sanksi antara lain:</td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.25pt'>
  <td height=23 class=xl668599 style='height:17.25pt'></td>
  <td class=xl678599></td>
  <td colspan=4 class=xl808599>a. Tidak diperkenankan mengikuti pelajaran
  selama jangka waktu tertentu;</td>
 </tr>
 <tr height=50 style='mso-height-source:userset;height:37.5pt'>
  <td height=50 class=xl668599 style='height:37.5pt'></td>
  <td class=xl678599></td>
  <td colspan=4 class=xl998599 >b. Dikembalikan ke
  saya apabila saya tidak membimbing dan mengawasinya sehingga peserta didik
  tersebut tidak mentaati peraturan dan tata tertib yang berlaku di <?=
  $pr->nama ?></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td colspan=6 height=21 class=xl678599 style='height:15.75pt'>Demikian
  pernyataan ini saya buat dengan sebenar-benarnya dan penuh rasa tanggung
  jawab.</td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td colspan=2 class=xl938599 style="text-align: center;">Srengat, <?= $this->Model_APS->tgl_id(date("Y-m-d")) ?></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td colspan=2 class=xl688599 style="text-align: center;">Yang Membuat Pernyataan</td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td colspan=2 class=xl688599 style="text-align: center;">Orang Tua / Wali *)</td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl668599 style='height:15.75pt'></td>
  <td colspan=2 class=xl918599 style="text-align: center;"><?= $tp->ttdnama ?></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
 </tr>
 <tr>
  <td height=150 class=xl668599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td colspan=3 height=21 class=xl678599 style='height:15.75pt'>*) Coret yang
  tidak sesuai</td>
  <td class=xl678599></td>
  <td class=xl678599></td>
  <td class=xl678599></td>
 </tr>
</table>

</div>


</body>
<?php } ?>
<?php } ?>
</html>
