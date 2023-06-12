<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">
<?php foreach ($siswa as $tp) { ?>
  <?php foreach ($profil as $pr) { ?>
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<title>Bukti Daftar Ulang <?= $tp->nama_lengkap ?></title>
<style id="template_23733_Styles">

	{mso-displayed-decimal-separator:"\,";
	mso-displayed-thousand-separator:"\.";}
.font523733
	{color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;}
.font623733
	{color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;}
.font723733
	{color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;}
.font823733
	{color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;}
.xl6523733
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
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6623733
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
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6723733
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
.xl6823733
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
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
.xl6923733
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
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7023733
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
.xl7123733
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
.xl7223733
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
.xl7323733
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
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
.xl7423733
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
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
.xl7523733
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
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
.xl7623733
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
.xl7723733
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
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7823733
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
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7923733
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
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8023733
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
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
.xl8123733
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:700;
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
.xl8223733
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
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8323733
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
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
.xl8423733
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
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
.xl8523733
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8623733
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
	text-align:right;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8723733
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
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
.xl8823733
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
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8923733
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
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9023733
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
.xl9123733
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9223733
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9323733
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9423733
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9523733
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9623733
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9723733
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
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9823733
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
	white-space:normal;}
.xl9923733
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
	white-space:normal;}
.xl10023733
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:18.0pt;
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
.xl10123733
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
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10223733
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:16.0pt;
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
.xl10323733
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
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10423733
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
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10523733
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
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10623733
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
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10723733
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
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10823733
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
	border:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10923733
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
	text-align:center;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl11023733
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
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl11123733
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
	vertical-align:top;
	border:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11223733
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
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl11323733
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
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl11423733
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
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl11523733
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
	text-align:right;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}

</style>
</head>

<body>


<div id="template_23733" align=center x:publishsource="Excel">
<?php ?>
<table border=0 cellpadding=0 cellspacing=0>
  <th class=xl6523733 width=6 style='width:5pt' colspan=2 rowspan=4><?= $imgpath['path'] ?></th>
  <?php  ?>
  <th class=xl6623733 width=25 style='width:19pt'></th>
  <th style='width:10px'></th>
  <th style='width:80px'></th>
  <th style='width:80px'></th>
  <th class=xl6523733 width=13 style='width:10pt'></th>
  <th class=xl6523733 width=13 style='width:10pt'></th>
  <th class=xl6523733 width=19 style='width:14pt'></th>
  <th class=xl6523733 width=19 style='width:14pt'></th>
  <th class=xl6523733 width=19 style='width:14pt'></th>
  <th class=xl6523733 width=19 style='width:14pt'></th>
  <th class=xl6523733 width=19 style='width:14pt'></th>
  <th class=xl6523733 width=19 style='width:14pt'></th>
  <th class=xl6523733 width=19 style='width:14pt'></th>
  <th class=xl6523733 width=19 style='width:14pt'></th>
  <th class=xl6523733 width=19 style='width:14pt'></th>
  <th class=xl6523733 width=19 style='width:14pt'></th>
  <th class=xl6523733 width=19 style='width:14pt'></th>
  <th class=xl6523733 width=19 style='width:14pt'></th>
  <th class=xl6523733 width=19 style='width:14pt'></th>
  <th class=xl6523733 width=19 style='width:14pt'></th>
  <th class=xl6523733 width=19 style='width:14pt'></th>
  <th class=xl6523733 width=19 style='width:14pt'></th>
  <th class=xl6523733 width=19 style='width:14pt'></th>

 <tr class=xl6523733 height=27 style='height:20.25pt'>
  <td colspan=23 class=xl10223733>FORMULIR DAFTAR ULANG</td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=25 style='height:18.75pt'>
  <td colspan=23 class=xl6823733>PESERTA DIDIK BARU <?= strtoupper($pr->nama) ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=25 style='height:18.75pt'>
  <td colspan=23 class=xl6823733>TAHUN PELAJARAN <?= date("Y")?>/<?= date("Y")+1 ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl6923733></td>
  <td class=xl6923733></td>
  <td class=xl6923733></td>
  <td class=xl6923733></td>
  <td class=xl6923733></td>
  <td class=xl6923733></td>
  <td class=xl6923733></td>
  <td class=xl6923733></td>
  <td class=xl6923733></td>
  <td class=xl6923733></td>
  <td class=xl6923733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=39 style='mso-height-source:userset;height:29.25pt'>
  <td height=39 class=xl6523733 style='height:29.25pt'></td>
  <td class=xl10923733>1.</td>
  <td class=xl9023733 colspan=4>NAMA PESERTA DIDIK</td>
  <td class=xl11023733>:</td>
  <td colspan=18 class=xl11123733 width=342 style='width:252pt'><?= $tp->nama_lengkap ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=9 style='mso-height-source:userset;height:6.75pt'>
  <td height=9 class=xl6523733 style='height:6.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=11 style='mso-height-source:userset;height:8.25pt'>
  <td height=11 class=xl6523733 style='height:8.25pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733>2.</td>
  <td class=xl7023733 colspan=4>NIK<span style='mso-spacerun:yes'> </span>(<font
  class="font623733">No. Induk Kependudukan)</font></td>
  <td class=xl7223733>:</td>
  <td colspan=18 class=xl10123733><?= $tp->nik ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=11 style='mso-height-source:userset;height:8.25pt'>
  <td height=11 class=xl6523733 style='height:8.25pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733>3.</td>
  <td class=xl7023733 colspan=3>JENIS KELAMIN</td>
  <td class=xl7223733></td>
  <td class=xl7223733>:</td>
  <td colspan=18 class=xl10123733><?= $tp->jk ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=8 style='mso-height-source:userset;height:6.0pt'>
  <td height=8 class=xl6523733 style='height:6.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7323733></td>
  <td class=xl7323733></td>
  <td class=xl7323733></td>
  <td class=xl7323733></td>
  <td class=xl7323733></td>
  <td class=xl7323733></td>
  <td class=xl7423733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733>4.<span style='mso-spacerun:yes'></span></td>
  <td class=xl7023733 colspan=3>KELAHIRAN</td>
  <td class=xl7223733></td>
  <td class=xl7223733>:</td>
  <td class=xl7223733 colspan=4>TEMPAT</td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td colspan=18 class=xl10123733><?= $tp->tempat_lahir ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733 colspan=5>PROVINSI</td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td colspan=18 class=xl10123733><?= $tp->prov_lahir ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733 colspan=7>TANGGAL LAHIR</td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td colspan=18 class=xl10123733><?= $this->Model_APS->tgl_id($tp->tgl_lahir) ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=8 style='mso-height-source:userset;height:6.0pt'>
  <td height=8 class=xl6523733 style='height:6.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733>5.<span style='mso-spacerun:yes'></span></td>
  <td class=xl7023733 colspan=4>NISN<font class="font723733">(Nomor Induk Siswa
  Nasional)</font></td>
  <td class=xl7223733>:</td>
  <td colspan=18 class=xl10123733><?= $tp->nisn ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=9 style='mso-height-source:userset;height:6.75pt'>
  <td height=9 class=xl6523733 style='height:6.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733>6.<span style='mso-spacerun:yes'></span></td>
  <td class=xl7023733 colspan=2>AGAMA</td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733>:</td>
  <td colspan=18 class=xl10123733><?= $tp->agama ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=9 style='mso-height-source:userset;height:6.75pt'>
  <td height=9 class=xl6523733 style='height:6.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733>7.</td>
  <td class=xl7023733 colspan=3>ASAL SEKOLAH</td>
  <td class=xl7223733></td>
  <td class=xl7223733>:</td>
  <td colspan=18 class=xl10123733><?= $tp->asal ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=10 style='mso-height-source:userset;height:7.5pt'>
  <td height=10 class=xl6523733 style='height:7.5pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl6523733 style='height:13.5pt'></td>
  <td class=xl6923733>8.</td>
  <td class=xl7023733 colspan=4>ALAMAT PESERTA DIDIK</td>
  <td class=xl7223733>:</td>
  <td class=xl7223733 colspan=2>RT</td>
  <td colspan=3 class=xl10123733 style="text-align: center;"><?= $tp->rt ?></td>
  <td class=xl7223733></td>
  <td class=xl7223733 colspan=2>RW</td>
  <td colspan=3 class=xl10123733 style="text-align: center;"><?= $tp->rw ?></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl6523733 style='height:13.5pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733 colspan=3>JALAN</td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td colspan=12 class=xl10123733><?= $tp->jalan ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl6523733 style='height:13.5pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733 colspan=5>DESA/KEL</td>
  <td class=xl7223733></td>
  <td colspan=12 class=xl10123733><?= $tp->desa ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl6523733 style='height:13.5pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733 colspan=6>KECAMATAN</td>
  <td colspan=12 class=xl10123733><?= $tp->kec ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl6523733 style='height:13.5pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733 colspan=5>KAB/KOTA</td>
  <td class=xl7223733></td>
  <td colspan=12 class=xl10123733><?= $tp->kab ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=9 style='mso-height-source:userset;height:6.75pt'>
  <td height=9 class=xl6523733 style='height:6.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733>9.</td>
  <td class=xl7023733 colspan=3>NAMA ORANG TUA</td>
  <td class=xl7223733></td>
  <td class=xl7223733>:</td>
  <td class=xl7223733 colspan=3>AYAH<span style='mso-spacerun:yes'></span></td>
  <td colspan=15 class=xl10123733><?= $tp->nama_ayah ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733 colspan=2>IBU</td>
  <td class=xl7223733></td>
  <td colspan=15 class=xl10123733><?= $tp->nama_ibu ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=8 style='mso-height-source:userset;height:6.0pt'>
  <td height=8 class=xl6523733 style='height:6.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733>10.</td>
  <td class=xl7023733 colspan=4>PEKERJAAN ORANG TUA</td>
  <td class=xl7223733>:</td>
  <td class=xl7223733 colspan=3>AYAH<span style='mso-spacerun:yes'></span></td>
  <td colspan=15 class=xl10123733><?= $tp->pk_ayah ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733 colspan=2>IBU</td>
  <td class=xl7223733></td>
  <td colspan=15 class=xl10123733><?= $tp->pk_ibu ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=6 style='mso-height-source:userset;height:4.5pt'>
  <td height=6 class=xl6523733 style='height:4.5pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733>11.</td>
  <td class=xl7023733 colspan=4>PENGHASILAN ORANG TUA</td>
  <td class=xl7223733>:</td>
  <td colspan=18 class=xl10123733><?= "Ayah $tp->ph_ayah / Ibu $tp->ph_ibu" ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=13 style='mso-height-source:userset;height:9.75pt'>
  <td height=13 class=xl6523733 style='height:9.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7523733 colspan=4>(Penghasilan Ayah dan Ibu per bulan)</td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=10 style='mso-height-source:userset;height:7.5pt'>
  <td height=10 class=xl6523733 style='height:7.5pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733>12.</td>
  <td class=xl7023733 colspan=4>NAMA WALI PESERTA DIDIK</td>
  <td class=xl7223733>:</td>
  <td colspan=18 class=xl10123733><?= $tp->nama_wali ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=12 style='mso-height-source:userset;height:9.0pt'>
  <td height=12 class=xl6523733 style='height:9.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7523733 colspan=4>(Jika tidak tinggal dengan orang tua)</td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=10 style='mso-height-source:userset;height:7.5pt'>
  <td height=10 class=xl6523733 style='height:7.5pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733>13.</td>
  <td class=xl7623733 colspan=6>PEKERJAAN WALI PESERTA DIDIK</td>
  <td class=xl7223733>:</td>
  <td colspan=16 class=xl10123733><?= $tp->pk_wali ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733>14.</td>
  <td class=xl7623733 colspan=4>ALAMAT WALI PESERTA DIDIK</td>
  <td class=xl7223733>:</td>
  <td class=xl7223733 colspan=2>RT</td>
  <td colspan=3 class=xl10123733 style="text-align: center;"><?= $tp->rt_wali ?></td>
  <td class=xl7223733></td>
  <td class=xl7223733 colspan=2>RW</td>
  <td colspan=3 class=xl10123733 style="text-align: center;"><?= $tp->rw_wali ?></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733 colspan=3>JALAN</td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td colspan=12 class=xl10123733><?= $tp->jalan_wali ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733 colspan=5>DESA/KEL</td>
  <td class=xl7223733></td>
  <td colspan=12 class=xl10123733><?= $tp->desa_wali ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733 colspan=6>KECAMATAN</td>
  <td colspan=12 class=xl10123733><?= $tp->kec_wali ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733 colspan=5>KAB/KOTA<span style='mso-spacerun:yes'></span></td>
  <td class=xl7223733></td>
  <td colspan=12 class=xl10123733><?= $tp->kab_wali ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733 colspan=3>Srengat,<span style='mso-spacerun:yes'></span></td>
  <td class=xl7123733 colspan=4><?= $this->Model_APS->tgl_id(date("Y-m-d")) ?></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733 colspan=2>Mengetahui</td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733 colspan=7>Calon Peserta Didik</td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733 colspan=3>Orang Tua/ Wali *)</td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td colspan=3 class=xl10723733><?= $tp->ttdnama ?></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td colspan=9 class=xl10623733><?= $tp->nama_lengkap ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl7223733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl7723733></td>
  <td class=xl7823733></td>
  <td class=xl7723733></td>
  <td class=xl7723733></td>
  <td class=xl7723733></td>
  <td class=xl7723733></td>
  <td class=xl7723733></td>
  <td class=xl7723733></td>
  <td class=xl7723733></td>
  <td class=xl7723733></td>
  <td class=xl7723733></td>
  <td class=xl7723733></td>
  <td class=xl7723733></td>
  <td class=xl7723733></td>
  <td class=xl7723733></td>
  <td class=xl7923733></td>
  <td class=xl7923733></td>
  <td class=xl7923733></td>
  <td class=xl7923733></td>
  <td class=xl8023733></td>
  <td class=xl8023733></td>
  <td class=xl8023733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6623733></td>
  <td class=xl6723733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6623733></td>
  <td class=xl6723733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl8623733>1</td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6623733></td>
  <td class=xl6723733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
 </tr>

 <tr class=xl6523733 height=27 style='mso-height-source:userset;height:20.25pt'>
  <td height=27 class=xl6523733 style='height:20.25pt'></td>
  <td colspan=24 class=xl6823733>DAFTAR ISIAN / IDENTITAS PESERTA DIDIK</td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=27 style='mso-height-source:userset;height:20.25pt'>
  <td height=27 class=xl6523733 style='height:20.25pt'></td>
  <td colspan=24 class=xl6823733>UNTUK MENGISI BUKU INDUK</td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6823733></td>
  <td class=xl8123733></td>
  <td class=xl6823733></td>
  <td class=xl6823733></td>
  <td class=xl6823733></td>
  <td class=xl6823733></td>
  <td class=xl6823733></td>
  <td class=xl6823733></td>
  <td class=xl6823733></td>
  <td class=xl6823733></td>
  <td class=xl6823733></td>
  <td class=xl6823733></td>
  <td class=xl6823733></td>
  <td class=xl6823733></td>
  <td class=xl6823733></td>
  <td class=xl6823733></td>
  <td class=xl6823733></td>
  <td class=xl6823733></td>
  <td class=xl6823733></td>
  <td class=xl6823733></td>
  <td class=xl6823733></td>
  <td class=xl6823733></td>
  <td class=xl6823733></td>
  <td class=xl6823733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl7623733 colspan=4>JALUR PENERIMAAN</td>
  <td class=xl8223733></td>
  <td class=xl8223733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->masuk_jalur ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl7623733 colspan=5>NOMOR URUT DITERIMA</td>
  <td class=xl8223733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->no_urut ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=10 style='mso-height-source:userset;height:7.5pt'>
  <td height=10 class=xl6523733 style='height:7.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8323733>A.</td>
  <td class=xl8323733 colspan=11>KETERANGAN<span style='mso-spacerun:yes'>
  </span>TENTANG DIRI PESERTA DIDIK</td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7823733>NISN</td>
  <td class=xl7823733></td>
  <td class=xl7823733></td>
  <td class=xl8523733>:</td>
  <td colspan=10 class=xl10123733  style="text-align: center;"><?= $tp->nisn ?></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>1.</td>
  <td class=xl7623733 colspan=3>Nama Lengkap Peserta Didik</td>
  <td class=xl8223733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->nama_lengkap ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733 colspan=2>Nama Panggilan</td>
  <td class=xl7623733></td>
  <td class=xl8223733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->nama_panggilan ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>2.</td>
  <td class=xl7623733 colspan=2>Jenis Kelamin</td>
  <td class=xl7623733></td>
  <td class=xl8223733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->jk ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>3.<span style='mso-spacerun:yes'></span></td>
  <td class=xl7623733 colspan=3>Tempat Dan Tanggal Lahir</td>
  <td class=xl8223733>:</td>
  <td colspan=18 class=xl7623733><?= "$tp->tempat_lahir, "?> <?= $this->Model_APS->tgl_id("$tp->tgl_lahir") ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>4.<span style='mso-spacerun:yes'></span></td>
  <td class=xl7623733>Agama</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl8223733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->agama ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>5.</td>
  <td class=xl7623733 colspan=2>Kewarganegaraan</td>
  <td class=xl7623733></td>
  <td class=xl8223733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->kw ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>6.</td>
  <td class=xl7623733 colspan=2>Anak Ke-Berapa</td>
  <td class=xl7623733></td>
  <td class=xl8223733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->anak_ke ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>7.<span style='mso-spacerun:yes'></span></td>
  <td class=xl7623733 colspan=3>Jumlah Saudara Kandung</td>
  <td class=xl8223733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->jml_saudara_kd ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>8.<span style='mso-spacerun:yes'></span></td>
  <td class=xl7623733 colspan=2>Jumlah Saudara Tiri</td>
  <td class=xl7623733></td>
  <td class=xl8223733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->jml_saudara_tr ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>9.</td>
  <td class=xl7623733 colspan=3>Jumlah Saudara Angkat</td>
  <td class=xl8223733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->jml_saudara_ak ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>10.</td>
  <td class=xl7623733 colspan=2>Status Anak</td>
  <td class=xl7623733></td>
  <td class=xl8223733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->status_anak ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>11.</td>
  <td class=xl7623733 colspan=3>Bahasa Sehari Hari Di Rumah</td>
  <td class=xl8223733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->bahasa ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=14 style='mso-height-source:userset;height:10.5pt'>
  <td height=14 class=xl6523733 style='height:10.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8323733>B.</td>
  <td class=xl8323733 colspan=6>KETERANGAN TEMPAT TINGGAL</td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>12.</td>
  <td class=xl7023733 colspan=3>Alamat Peserta Didik</td>
  <td class=xl7023733>:</td>
  <td class=xl7023733 colspan=2>RT</td>
  <td colspan=3 class=xl10823733 style="text-align: center;"><?= $tp->rt ?></td>
  <td class=xl6923733></td>
  <td class=xl6923733>RW</td>
  <td class=xl6923733></td>
  <td colspan=3 class=xl10823733 style="text-align: center;"><?= $tp->rw ?></td>
  <td class=xl6923733></td>
  <td class=xl6923733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733 colspan=2>Jalan</td>
  <td class=xl6923733></td>
  <td class=xl6923733></td>
  <td class=xl6923733></td>
  <td class=xl6923733></td>
  <td colspan=12 class=xl10823733><?= $tp->jalan ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733 colspan=6>Desa/Kelurahan</td>
  <td colspan=12 class=xl10823733><?= $tp->desa ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733 colspan=4>Kecamatan</td>
  <td class=xl6923733></td>
  <td class=xl6923733></td>
  <td colspan=12 class=xl10823733><?= $tp->kec ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733 colspan=5>Kab / Kota *)</td>
  <td class=xl6923733></td>
  <td colspan=12 class=xl10823733><?= $tp->kab ?></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl8223733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>13.</td>
  <td class=xl7623733 colspan=2>Nomor Telepon/ HP</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->notelp ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>14.</td>
  <td class=xl7623733 colspan=3>Tinggal Dengan Orang Tua/ Wali/</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733 colspan=2>Saudara/ Kos</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->tinggal ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>15.</td>
  <td class=xl7623733 colspan=3>Jarak Tempat Tinggal Ke Sekolah</td>
  <td class=xl7623733>:</td>
  <td colspan=13 class=xl7623733><?= $tp->jarak.' Kilometer' ?></td>
  <td class=xl7623733></td>
  <td class=xl7623733 colspan=4></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=14 style='mso-height-source:userset;height:10.5pt'>
  <td height=14 class=xl6523733 style='height:10.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8423733>C.</td>
  <td class=xl8323733 colspan=4>KETERANGAN KESEHATAN</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>16.</td>
  <td class=xl7623733 colspan=2>Golongan Darah</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->goldar ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>17.</td>
  <td class=xl7623733 colspan=3>Penyakit Yang Pernah di Derita</td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->penyakit ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>18.</td>
  <td class=xl7623733 colspan=2>Kelainan Jasmani</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->kelainan ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>19.</td>
  <td class=xl7623733 colspan=3>Tinggi Dan Berat Badan</td>
  <td class=xl7623733>:</td>
  <td colspan=2 class=xl7623733><?= $tp->tinggi_badan.' cm' ?></td>
  <td class=xl7623733 colspan=2></td>
  <td class=xl7623733 colspan=2>dan<span style='mso-spacerun:yes'></span></td>
  <td colspan=2 class=xl7623733><?= $tp->berat_badan.' Kg' ?></td>
  <td class=xl7623733 colspan=2></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6523733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=19 style='mso-height-source:userset;height:14.25pt'>
  <td height=19 class=xl6523733 style='height:14.25pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7523733 colspan=3>(Saat Diterima Di Sekolah Ini)</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=13 style='mso-height-source:userset;height:9.75pt'>
  <td height=13 class=xl6523733 style='height:9.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8423733>D.</td>
  <td class=xl8323733 colspan=4>KETERANGAN PENDIDIKAN</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>20.</td>
  <td class=xl7623733 colspan=3>Pendidikan Sebelumnya</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733 colspan=2>a. Tamatan Dari</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->asal ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733 colspan=3>b. Tanggal Dan Nomor Ijazah</td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->tgl_no_ijazah ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733 colspan=3>c. Tanggal Dan Nomor SKL</td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->tgl_no_skl ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733 colspan=2>d. Lama Belajar<span
  style='mso-spacerun:yes'></span></td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->lama_belajar ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733 colspan=3>e. Nomor Peserta UNAS/UNBK</td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->nopeserta_un ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733 colspan=2>f. Nomor SKHUN</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->no_skhu ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl8623733>2</td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl8623733></td>
 </tr>
 <tr class=xl6523733 height=24 style='page-break-before:always;mso-height-source:
  userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>21.</td>
  <td class=xl7623733>Pindahan</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733 colspan=2>a. Dari Sekolah</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->pindahan_asal ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733 colspan=2>b. Alasan Pindah</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->pindahan_alasan ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=12 style='mso-height-source:userset;height:9.0pt'>
  <td height=12 class=xl6523733 style='height:9.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td colspan=18 class=xl8223733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>22.</td>
  <td class=xl7623733 colspan=3>Diterima Di Sekolah Ini</td>
  <td class=xl7623733></td>
  <td colspan=18 class=xl8223733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733>a. Kelas</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->masuk_kelas ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733 colspan=2>b. Kelompok/Jalur</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->masuk_jalur ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733 colspan=2>c. Tanggal</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->masuk_tgl ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=13 style='mso-height-source:userset;height:9.75pt'>
  <td height=13 class=xl6523733 style='height:9.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8423733>E.</td>
  <td class=xl8323733 colspan=10>KETERANGAN TENTANG AYAH KANDUNG</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>23.</td>
  <td class=xl7623733 colspan=3>Nama Lengkap <font class="font723733">(sesuai
  KK)</font></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->nama_ayah ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>24.</td>
  <td class=xl7623733 colspan=3>Tempat Dan Tanggal Lahir</td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->ttl_ayah ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>25.<span style='display:none'><span
  style='mso-spacerun:yes'></span></span></td>
  <td class=xl7623733>Agama</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->agama_ayah ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>26.<span style='display:none'><span
  style='mso-spacerun:yes'></span></span></td>
  <td class=xl7623733 colspan=2>Kewarganegaraan</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->kw_ayah ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>27.</td>
  <td class=xl7623733 colspan=2>Pendidikan Terakhir</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->pdd_ayah ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>28.</td>
  <td class=xl7623733>Pekerjaan</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->pk_ayah ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>29.</td>
  <td class=xl7623733 colspan=3>Penghasilan Setiap Bulan</td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->ph_ayah ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>30.</td>
  <td class=xl7623733 colspan=2>Alamat Rumah</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->alamat_ortu ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733 colspan=2>Nomor Telepon/HP</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->notelp_ayah ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>31.</td>
  <td class=xl8723733 colspan=3>Masih Hidup/Meninggal Dunia Tahun</td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->status_ayah ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=10 style='mso-height-source:userset;height:7.5pt'>
  <td height=10 class=xl6523733 style='height:7.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8423733>F.</td>
  <td class=xl8323733 colspan=9>KETERANGAN TENTANG IBU KANDUNG</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>32.</td>
  <td class=xl7623733 colspan=3>Nama Lengkap <font class="font723733">(sesuai
  KK)</font></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->nama_ibu ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>33.</td>
  <td class=xl7623733 colspan=3>Tempat Dan Tanggal Lahir</td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->ttl_ibu ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>34.<span style='display:none'><span
  style='mso-spacerun:yes'></span></span></td>
  <td class=xl7623733>Agama</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->agama_ibu ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>35.<span style='display:none'><span
  style='mso-spacerun:yes'></span></span></td>
  <td class=xl7623733 colspan=2>Kewarganegaraan</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->kw_ibu ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>36.</td>
  <td class=xl7623733 colspan=2>Pendidikan Terakhir</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->pdd_ibu ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>37.</td>
  <td class=xl7623733>Pekerjaan</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->pk_ibu ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>38.</td>
  <td class=xl7623733 colspan=3>Penghasilan Setiap Bulan</td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->ph_ibu ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>39.</td>
  <td class=xl7623733 colspan=2>Alamat Rumah</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->alamat_ortu ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733 colspan=2>Nomor Telepon/HP</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->notelp_ibu ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>40.</td>
  <td class=xl8723733 colspan=3>Masih Hidup/Meninggal Dunia Tahun</td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->status_ibu ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=12 style='mso-height-source:userset;height:9.0pt'>
  <td height=12 class=xl6523733 style='height:9.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8423733>G.</td>
  <td class=xl8323733 colspan=11>KETERANGAN TENTANG WALI PESERA DIDIK</td>
  <td class=xl8723733 colspan=11>(Diisi jika tidak ikut dengan orang tua)</td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>41.</td>
  <td class=xl7623733 colspan=3>Nama Lengkap <font class="font723733">(sesuai
  KK)</font></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->nama_wali ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>42.</td>
  <td class=xl7623733 colspan=3>Tempat Dan Tanggal Lahir</td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->ttl_wali ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>43.<span style='display:none'><span
  style='mso-spacerun:yes'></span></span></td>
  <td class=xl7623733>Agama</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->agama_wali ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>44.<span style='display:none'><span
  style='mso-spacerun:yes'></span></span></td>
  <td class=xl7623733 colspan=2>Kewarganegaraan</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->kw_wali ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>45.</td>
  <td class=xl7623733 colspan=2>Pendidikan Terakhir</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->pdd_wali ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>46.</td>
  <td class=xl7623733>Pekerjaan</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->pk_wali ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>47.</td>
  <td class=xl7623733 colspan=3>Penghasilan Setiap Bulan</td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->ph_wali ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>48.</td>
  <td class=xl7623733 colspan=2>Alamat Rumah</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= 'Jalan '.$tp->jalan_wali.' RT '.$tp->rt_wali.' RW '.$tp->rw_wali.' Desa '.$tp->desa_wali?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td colspan=18 class=xl7623733><?= 'Kec. '.$tp->kec_wali.' Kab./Kota '.$tp->kab_wali ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733 colspan=2>Nomor Telepon/HP</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->notelp_wali ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=11 style='mso-height-source:userset;height:8.25pt'>
  <td height=11 class=xl6523733 style='height:8.25pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl8723733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl8423733>H.</td>
  <td class=xl8323733 colspan=8>KEGEMARAN (HOBY) PESERTA DIDIK</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>49.</td>
  <td class=xl7623733>Kesenian</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->hobi_kes ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>50.</td>
  <td class=xl7623733 colspan=2>Olah Raga</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->hobi_or ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>51.</td>
  <td class=xl7623733 colspan=3>Kemasyarakatan/ormas</td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->hobi_masy ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>52.</td>
  <td class=xl7623733>Lain-Lain</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td colspan=18 class=xl7623733><?= $tp->hobi_lain ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl8823733>3</td>
 </tr>
 <tr class=xl6523733 height=22 style='page-break-before:always;mso-height-source:
  userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl8823733></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl8423733>I.</td>
  <td class=xl8323733 colspan=12>KETERANGAN PERKEMBANGAN PESERTA DIDIK</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>53.</td>
  <td class=xl7623733 colspan=3>Menerima Beasiswa/Bantuan</td>
  <td class=xl7623733>:</td>
  <td class=xl7623733 colspan=19></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>54.</td>
  <td class=xl7623733 colspan=3>Meninggalkan Sekolah Ini</td>
  <td class=xl7623733>:</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733 colspan=3>a. Tanggal Meninggalkan Sekolah</td>
  <td class=xl7623733>:</td>
  <td class=xl7623733 colspan=19></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733>b. Alasan</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td class=xl7623733 colspan=19></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>55.<span style='display:none'><span
  style='mso-spacerun:yes'></span></span></td>
  <td class=xl8923733 colspan=2>Akhir Pendidikan</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733 colspan=3>a. Tamat Belajar / Lulus Tahun</td>
  <td class=xl7623733>:</td>
  <td class=xl7623733 colspan=19></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733 colspan=3>b. Nomor Surat Keterangan Lulus</td>
  <td class=xl7623733>:</td>
  <td class=xl7623733 colspan=19></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733 colspan=2>c. Nomor Ijazah</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td class=xl7623733 colspan=19></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733 colspan=3>d. Nilai Rata-rata Ijazah</td>
  <td class=xl7623733>:</td>
  <td class=xl7623733 colspan=19></td>
 </tr>
 <tr class=xl6523733 height=9 style='mso-height-source:userset;height:6.75pt'>
  <td height=9 class=xl6523733 style='height:6.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8423733>J.</td>
  <td class=xl8323733 colspan=16>KETERANGAN SETELAH SELESAI PENDIDIKAN/LULUS
  SMA</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>56.</td>
  <td class=xl7623733 colspan=3>Akan Melanjutkan Ke</td>
  <td class=xl7623733>:</td>
  <td class=xl7623733 colspan=19></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>57.<span style='display:none'><span
  style='mso-spacerun:yes'></span></span></td>
  <td class=xl7623733 colspan=3>Jurusan Yang Akan dipilih</td>
  <td class=xl7623733>:</td>
  <td class=xl7623733 colspan=19></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733>58.</td>
  <td class=xl7623733 colspan=2>Akan Bekerja Di</td>
  <td class=xl7623733></td>
  <td class=xl7623733>:</td>
  <td class=xl7623733 colspan=19></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7123733 colspan=3>Srengat,<span style='mso-spacerun:yes'></span></td>
  <td class=xl7623733 colspan=4><?= $this->Model_APS->tgl_id(date("Y-m-d")) ?></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7123733 colspan=7>Calon Peserta Didik</td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td colspan=9 class=xl10623733><?= $tp->nama_lengkap ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl8823733>4</td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6523733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='page-break-before:always;mso-height-source:
  userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=34 style='mso-height-source:userset;height:25.5pt'>
  <td height=34 class=xl6523733 style='height:25.5pt'></td>
  <td colspan=24 class=xl10023733>SURAT<span style='mso-spacerun:yes'>
  </span>PERNYATAAN CALON PESERTA DIDIK</td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=34 style='mso-height-source:userset;height:25.5pt'>
  <td height=34 class=xl6523733 style='height:25.5pt'></td>
  <td colspan=24 class=xl10023733><?= strtoupper($pr->nama) ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl7023733 colspan=5>Yang bertanda tangan dibawah ini Saya:</td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>1.</td>
  <td class=xl7023733 colspan=2>Nama Lengkap</td>
  <td class=xl7023733></td>
  <td class=xl7023733>:</td>
  <td colspan=18 class=xl7023733><?= $tp->nama_lengkap ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>2.<span style='mso-spacerun:yes'></span></td>
  <td class=xl7023733 colspan=3>Tempat dan Tanggal Lahir</td>
  <td class=xl7023733>:</td>
  <td colspan=18 class=xl7023733><?= "$tp->tempat_lahir, "?> <?= $this->Model_APS->tgl_id("$tp->tgl_lahir") ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>3.</td>
  <td class=xl7023733 colspan=2>Jenis Kelamin</td>
  <td class=xl7023733></td>
  <td class=xl7023733>:</td>
  <td colspan=18 class=xl7023733><?= $tp->jk ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>4.</td>
  <td class=xl7023733>Agama</td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733>:</td>
  <td colspan=18 class=xl7023733><?= $tp->agama ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>5.</td>
  <td class=xl7023733 colspan=3>Nomor Pendaftaran/ PIN</td>
  <td class=xl7023733>:</td>
  <td colspan=18 class=xl7023733><?= $tp->no_pendaftaran ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>6.</td>
  <td class=xl7023733 colspan=2>Di Terima Di Kelas</td>
  <td class=xl7023733></td>
  <td class=xl7023733>:</td>
  <td colspan=18 class=xl7023733><?= $tp->masuk_kelas ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>7.</td>
  <td class=xl7023733 colspan=2>Nama Orang Tua</td>
  <td class=xl7023733></td>
  <td class=xl7023733>:</td>
  <td colspan=18 class=xl7023733><?= $tp->nama_ayah.' / '.$tp->nama_ibu ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>8.</td>
  <td class=xl7023733 colspan=3>Pekerjaan Orang Tua</td>
  <td class=xl7023733>:</td>
  <td colspan=18 class=xl7023733><?= $tp->pk_ayah.' / '.$tp->pk_ibu ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>9.</td>
  <td class=xl7023733 colspan=2>Agama Orang Tua</td>
  <td class=xl7023733></td>
  <td class=xl7023733>:</td>
  <td colspan=18 class=xl7023733><?= $tp->agama_ayah.' / '.$tp->agama_ibu ?><span
  style='mso-spacerun:yes'></span></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>10.</td>
  <td class=xl7023733 colspan=2>Nama Wali</td>
  <td class=xl7023733></td>
  <td class=xl7023733>:</td>
  <td colspan=18 class=xl7023733><?= $tp->nama_wali ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>11.</td>
  <td class=xl7023733 colspan=2>Pekerjaan wali</td>
  <td class=xl7023733></td>
  <td class=xl7023733>:</td>
  <td colspan=18 class=xl7023733><?= $tp->pk_wali ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>12.</td>
  <td class=xl7023733 colspan=3>Hubungan Keluarga Dengan Wali</td>
  <td class=xl7023733>:</td>
  <td colspan=18 class=xl7023733><?= $tp->hub_wali ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>13.</td>
  <td class=xl7023733 colspan=3>Alamat Orang Tua/ Wali</td>
  <td class=xl7023733>:</td>
  <td colspan=18 class=xl7023733><?= $tp->alamat_ortu ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td colspan=24 class=xl6923733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td colspan=24 class=xl7023733>Dengan sungguh-sungguh dan Penuh
  Kesadaran<span style='mso-spacerun:yes'></span></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td colspan=24 class=xl8223733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td colspan=24 class=xl8423733>MENYATAKAN :</td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=10 style='mso-height-source:userset;height:7.5pt'>
  <td height=10 class=xl6523733 style='height:7.5pt'></td>
  <td colspan=24 class=xl8423733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl7023733 colspan=13>Bahwa selama menjadi peserta didik di SMAN 1
  Srengat, Saya :</td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 class=xl6523733 style='height:19.5pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>1.</td>
  <td class=xl7023733 colspan=8>Akan belajar dengan tekun dan penuh semangat;</td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 class=xl6523733 style='height:19.5pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>2.</td>
  <td class=xl7023733 colspan=12>Akan menjaga nama baik diri sendiri, keluarga
  dan sekolah;</td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 class=xl6523733 style='height:19.5pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>3.</td>
  <td class=xl7023733 colspan=22>Sanggup mentaati dan mematuhi peraturan dan
  tata tertib yang berlaku di SMAN 1 Srengat;</td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 class=xl6523733 style='height:19.5pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>4.</td>
  <td class=xl7023733 colspan=14>Tidak menikah selama menjadi peserta didik di
  SMAN 1 Srengat</td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=43 style='mso-height-source:userset;height:32.25pt'>
  <td height=43 class=xl6523733 style='height:32.25pt'></td>
  <td class=xl6923733></td>
  <td class=xl9023733>5.</td>
  <td colspan=22 class=xl9823733 width=564 style='width:419pt'>Tidak terlibat
  kasus Narkotika, Perkelahian, Kejahatan, Pencurian, Perjudian dan sebagainya
  yang mengakibatkan terancam pidana;</td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=28 style='mso-height-source:userset;height:21.0pt'>
  <td height=28 class=xl6523733 style='height:21.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>6.</td>
  <td class=xl7023733 colspan=18>Akan mengikuti pendidikan agama yang sesuai
  dengan agama<span style='mso-spacerun:yes'> </span>yang saya anut;</td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=41 style='mso-height-source:userset;height:30.75pt'>
  <td height=41 class=xl6523733 style='height:30.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl9023733>7.<span style='mso-spacerun:yes'></span></td>
  <td colspan=22 class=xl9823733 width=564 style='width:419pt'>Apabila saya
  tidak mentaati ketentuan yang ditetapkan oleh sekolah dan pernyataan yang
  saya buat, saya sanggup menerima sanksi yaitu:</td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=25 style='mso-height-source:userset;height:18.75pt'>
  <td height=25 class=xl6523733 style='height:18.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7023733 colspan=16>a. Tidak diperkenankan mengikuti pelajaran
  selama jangka waktu tertentu</td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=25 style='mso-height-source:userset;height:18.75pt'>
  <td height=25 class=xl6523733 style='height:18.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7023733 colspan=5>b. Dikembalikan ke orang tua / Wali</td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl7023733 colspan=21>Surat pernyataan ini saya buat dengan
  sebenar-benarnya, dengan diketahui orang tua / Wali</td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td colspan=24 rowspan=3 class=xl6923733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733 colspan=3>Srengat,</td>
  <td class=xl7123733 colspan=4><?= $this->Model_APS->tgl_id(date("Y-m-d")) ?></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733 colspan=2>Mengetahui</td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733 colspan=9>Yang Membuat Pernyataan</td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733 colspan=3>Orang Tua/ Wali *)</td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl9123733 colspan=3>Materai</td>
  <td class=xl9223733>&nbsp;</td>
  <td class=xl9323733>&nbsp;</td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl9423733 colspan=4>Rp. 10.000,00</td>
  <td class=xl9623733>&nbsp;</td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td colspan=3 class=xl10723733><?= $tp->ttdnama ?></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td colspan=9 class=xl10623733><?= $tp->nama_lengkap ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6523733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl8823733>5</td>
 </tr>
 <tr class=xl6523733 height=24 style='page-break-before:always;mso-height-source:
  userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl8823733></td>
 </tr>
 <tr class=xl6523733 height=33 style='mso-height-source:userset;height:24.75pt'>
  <td height=33 class=xl6523733 style='height:24.75pt'></td>
  <td colspan=24 class=xl10023733>SURAT<span style='mso-spacerun:yes'>
  </span>PERNYATAAN ORANG TUA / WALI</td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=33 style='mso-height-source:userset;height:24.75pt'>
  <td height=33 class=xl6523733 style='height:24.75pt'></td>
  <td colspan=24 class=xl10023733>CALON PESERTA DIDIK <?= strtoupper($pr->nama) ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl7023733 colspan=5>Yang bertanda tangan dibawah ini Saya:</td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>1.</td>
  <td class=xl7023733 colspan=3>Nama Orang Tua / Wali *)</td>
  <td class=xl11523733>:</td>
  <td colspan=18 class=xl7023733><?= $tp->ttdnama ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>2.<span style='mso-spacerun:yes'></span></td>
  <td class=xl7023733 colspan=3>Tempat dan Tanggal Lahir</td>
  <td class=xl11523733>:</td>
  <td colspan=18 class=xl7023733><?= $tp->ttdttl ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>3.</td>
  <td class=xl7023733 colspan=3>Pekerjaan Orang Tua / Wali</td>
  <td class=xl11523733>:</td>
  <td colspan=18 class=xl7023733><?= $tp->ttdpk ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>4.</td>
  <td class=xl7023733 colspan=3>Alamat Orang Tua/ Wali</td>
  <td class=xl11523733>:</td>
  <td colspan=18 class=xl7023733><?= $tp->ttdalamat ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl6523733 style='height:18.0pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>5.</td>
  <td class=xl7123733 colspan=3>Nomor Telepon Orang Tua/ Wali</td>
  <td class=xl11523733>:</td>
  <td colspan=18 class=xl7023733><?= $tp->ttdtelp ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>6.</td>
  <td class=xl7023733>Agama</td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl11523733>:</td>
  <td colspan=18 class=xl7023733><?= $tp->ttdagama ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>7.</td>
  <td class=xl7023733 colspan=3>Nama Lengkap Peserta Didik</td>
  <td class=xl11523733>:</td>
  <td colspan=18 class=xl7023733><?= $tp->nama_lengkap ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>8.</td>
  <td class=xl7023733 colspan=2>Jenis Kelamin</td>
  <td class=xl7023733></td>
  <td class=xl11523733>:</td>
  <td colspan=18 class=xl7023733><?= $tp->jk ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>9.</td>
  <td class=xl7023733 colspan=2>Diterima Di Kelas</td>
  <td class=xl7023733></td>
  <td class=xl11523733>:</td>
  <td colspan=18 class=xl7023733><?= $tp->masuk_kelas ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>10.</td>
  <td class=xl7023733 colspan=3>Hubungan Keluarga Dengan Wali</td>
  <td class=xl11523733>:</td>
  <td colspan=18 class=xl7023733><?= $tp->hub_wali ?></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td colspan=24 class=xl8523733>MENYATAKAN :</td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl7023733 colspan=23>Bahwa selaku Orang Tua / wali *) dari calon
  Peserta Didik<span style='mso-spacerun:yes'> </span>yang namanya tersebut
  diatas, Saya :</td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=43 style='mso-height-source:userset;height:32.25pt'>
  <td height=43 class=xl6523733 style='height:32.25pt'></td>
  <td class=xl6923733></td>
  <td class=xl9023733>1.</td>
  <td colspan=22 class=xl9823733 width=564 style='width:419pt'>Bersedia
  membimbing dan mengawasi calon peserta didik tersebut untuk mentaati dan
  mematuhi peraturan dan tata tertib yang berlaku di SMAN 1 Srengat;</td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td height=23 class=xl6523733 style='height:17.25pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>2.</td>
  <td colspan=21 class=xl7023733>Sanggup membiayai peserta didik tersebut
  sampai tamat/lulus dari SMAN 1 Srengat;</td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td height=23 class=xl6523733 style='height:17.25pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>3.</td>
  <td class=xl7023733 colspan=19>Calon Peserta didik tersebut diatas akan
  mengikuti pendidikan agama yang di anut;</td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=45 style='mso-height-source:userset;height:33.75pt'>
  <td height=45 class=xl6523733 style='height:33.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl9023733>4.</td>
  <td colspan=21 class=xl9823733 width=545 style='width:405pt'>Sanggup tidak
  menikahkan calon peserta didik yang namanya tersebut diatas selama menjadi
  peserta didik di SMAN 1 Srengat;</td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td height=23 class=xl6523733 style='height:17.25pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733>5.</td>
  <td colspan=22 class=xl9723733 width=564 style='width:419pt'>Tidak Keberatan
  Peserta didik tersebut di atas akan menerima sanksi antara lain:</td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td height=23 class=xl6523733 style='height:17.25pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7023733 colspan=17>a. Tidak diperkenankan mengikuti pelajaran
  selama jangka waktu tertentu;</td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td colspan=22 class=xl9823733 width=564 style='width:419pt'>b. <font
  class="font823733">Dikembalikan ke saya </font><font class="font523733">apabila
  saya tidak membimbing dan mengawasinya sehingga</font></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td colspan=22 class=xl9923733 width=564 style='width:419pt'><span
  style='mso-spacerun:yes'> </span>peserta didik tersebut tidak mentaati
  peraturan dan tata tertib yang berlaku di SMAN 1<span
  style='mso-spacerun:yes'></span></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl6523733 style='height:16.5pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td colspan=2 class=xl7223733><span style='mso-spacerun:yes'>
  </span>Srengat</td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl7023733 colspan=19>Pernyataan ini saya buat dengan
  sebenar-benarnya dan penuh rasa tanggung jawab.</td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7123733 colspan=3>Srengat,</td>
  <td class=xl7123733 colspan=4><?= $this->Model_APS->tgl_id(date("Y-m-d")) ?></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7123733 colspan=9>Yang Membuat Pernyataan</td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7123733 colspan=7>Orang Tua / Wali *)</td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7123733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7223733></td>
  <td colspan=9 class=xl10723733><?= $tp->ttdnama ?></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl6923733>*)</td>
  <td class=xl7023733 colspan=3>Coret yang tidak sesuai</td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl7023733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl8823733>6</td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6523733></td>
 </tr>
 <tr class=xl6523733 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6523733 style='height:15.75pt'></td>
  <td class=xl8223733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl7623733></td>
  <td class=xl6723733></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=6 style='width:5pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=21 style='width:16pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=81 style='width:61pt'></td>
  <td width=13 style='width:10pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
 </tr>
 <![endif]>
</table>

</div>

</body>

</html>
<?php } ?>
<?php } ?>