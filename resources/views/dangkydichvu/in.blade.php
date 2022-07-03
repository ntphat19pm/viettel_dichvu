<?php
 header("Content-Type: application/vnd.ms-word");
 header("Expires: 0");
 header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
 header("content-disposition: attachment;filename={$data->doanhnghiep->tendoanhnghiep}.doc");
?>

<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv=Content-Type content="text/html; charset=windows-1258">
<meta name=Generator content="Microsoft Word 15 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
@font-face
	{font-family:"Segoe UI";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"\.VnArial";
	panose-1:2 11 114 0 0 0 0 0 0 0;}
@font-face
	{font-family:Times;
	panose-1:2 2 6 3 5 4 5 2 3 4;}
@font-face
	{font-family:"\.VnTime";
	panose-1:2 11 114 0 0 0 0 0 0 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:0cm;
	line-height:107%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
h1
	{mso-style-name:"Heading 1\,Heading 1\(Report Only\)\,Chapter\,Heading 1\(Report Only\)1\,Chapter1\,H1\,DO NOT USE_h1\,Level 1 Topic Heading\,12\,Heading One\,Heading A\,Section Heading\,Heading X\,Chapter Head\,1\,Header 1\,proj\,proj1\,proj5\,proj6\,proj7\,proj8\,proj9\,proj10\,proj11\,proj12";
	mso-style-link:"Heading 1 Char\,Heading 1\(Report Only\) Char\,Chapter Char\,Heading 1\(Report Only\)1 Char\,Chapter1 Char\,H1 Char\,DO NOT USE_h1 Char\,Level 1 Topic Heading Char\,12 Char\,Heading One Char\,Heading A Char\,Section Heading Char\,Heading X Char\,Chapter Head Char\,1 Char";
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	text-align:justify;
	text-justify:inter-ideograph;
	page-break-after:avoid;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-link:"Footer Char";
	margin:0cm;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{mso-style-name:"List Paragraph\,Norm\,Paragraph\,List Paragraph1\,�o\1EA1n c\1EE7a Danh s�ch\,List Paragraph11\,�o\1EA1n c\D83B\DE7ADanh s�ch\,List Paragraph111\,Nga 3\,List Paragraph2\,Colorful List - Accent 11\,List Paragraph21\,�o\1EA1n cDanh s�ch\,\00D0o\1EA1n c\D83B\DE7ADanh s�ch\,List Paragraph3\,\00D0o\1EA1n cDanh s�ch";
	mso-style-link:"List Paragraph Char\,Norm Char\,Paragraph Char\,List Paragraph1 Char\,�o\1EA1n c\1EE7a Danh s�ch Char\,List Paragraph11 Char\,�o\1EA1n c\D83B\DE7ADanh s�ch Char\,List Paragraph111 Char\,Nga 3 Char\,List Paragraph2 Char\,Colorful List - Accent 11 Char\,List Paragraph21 Char";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:36.0pt;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{mso-style-name:"List Paragraph\,Norm\,Paragraph\,List Paragraph1\,�o\1EA1n c\1EE7a Danh s�ch\,List Paragraph11\,�o\1EA1n c\D83B\DE7ADanh s�ch\,List Paragraph111\,Nga 3\,List Paragraph2\,Colorful List - Accent 11\,List Paragraph21\,�o\1EA1n cDanh s�ch\,\00D0o\1EA1n c\D83B\DE7ADanh s�ch\,List Paragraph3\,\00D0o\1EA1n cDanh s�chCxSpFir";
	mso-style-link:"List Paragraph Char\,Norm Char\,Paragraph Char\,List Paragraph1 Char\,�o\1EA1n c\1EE7a Danh s�ch Char\,List Paragraph11 Char\,�o\1EA1n c\D83B\DE7ADanh s�ch Char\,List Paragraph111 Char\,Nga 3 Char\,List Paragraph2 Char\,Colorful List - Accent 11 Char\,List Paragraph21 Char";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{mso-style-name:"List Paragraph\,Norm\,Paragraph\,List Paragraph1\,�o\1EA1n c\1EE7a Danh s�ch\,List Paragraph11\,�o\1EA1n c\D83B\DE7ADanh s�ch\,List Paragraph111\,Nga 3\,List Paragraph2\,Colorful List - Accent 11\,List Paragraph21\,�o\1EA1n cDanh s�ch\,\00D0o\1EA1n c\D83B\DE7ADanh s�ch\,List Paragraph3\,\00D0o\1EA1n cDanh s�chCxSpMid";
	mso-style-link:"List Paragraph Char\,Norm Char\,Paragraph Char\,List Paragraph1 Char\,�o\1EA1n c\1EE7a Danh s�ch Char\,List Paragraph11 Char\,�o\1EA1n c\D83B\DE7ADanh s�ch Char\,List Paragraph111 Char\,Nga 3 Char\,List Paragraph2 Char\,Colorful List - Accent 11 Char\,List Paragraph21 Char";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{mso-style-name:"List Paragraph\,Norm\,Paragraph\,List Paragraph1\,�o\1EA1n c\1EE7a Danh s�ch\,List Paragraph11\,�o\1EA1n c\D83B\DE7ADanh s�ch\,List Paragraph111\,Nga 3\,List Paragraph2\,Colorful List - Accent 11\,List Paragraph21\,�o\1EA1n cDanh s�ch\,\00D0o\1EA1n c\D83B\DE7ADanh s�ch\,List Paragraph3\,\00D0o\1EA1n cDanh s�chCxSpLas";
	mso-style-link:"List Paragraph Char\,Norm Char\,Paragraph Char\,List Paragraph1 Char\,�o\1EA1n c\1EE7a Danh s�ch Char\,List Paragraph11 Char\,�o\1EA1n c\D83B\DE7ADanh s�ch Char\,List Paragraph111 Char\,Nga 3 Char\,List Paragraph2 Char\,Colorful List - Accent 11 Char\,List Paragraph21 Char";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:36.0pt;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.dieu, li.dieu, div.dieu
	{mso-style-name:dieu;
	mso-style-link:"dieu Char";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	text-indent:36.0pt;
	font-size:13.0pt;
	font-family:"Times New Roman",serif;
	color:blue;
	font-weight:bold;}
span.dieuChar
	{mso-style-name:"dieu Char";
	mso-style-link:dieu;
	font-family:"Times New Roman",serif;
	color:blue;
	font-weight:bold;}
p.NormalText, li.NormalText, div.NormalText
	{mso-style-name:NormalText;
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:72.0pt;
	text-indent:-36.0pt;
	font-size:10.0pt;
	font-family:".VnArial",sans-serif;}
p.NormalT1, li.NormalT1, div.NormalT1
	{mso-style-name:NormalT1;
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:72.0pt;
	text-indent:-36.0pt;
	font-size:10.0pt;
	font-family:".VnArial",sans-serif;}
span.ListParagraphChar
	{mso-style-name:"List Paragraph Char\,Norm Char\,Paragraph Char\,List Paragraph1 Char\,�o\1EA1n c\1EE7a Danh s�ch Char\,List Paragraph11 Char\,�o\1EA1n c\D83B\DE7ADanh s�ch Char\,List Paragraph111 Char\,Nga 3 Char\,List Paragraph2 Char\,Colorful List - Accent 11 Char\,List Paragraph21 Char";
	mso-style-link:"List Paragraph\,Norm\,Paragraph\,List Paragraph1\,�o\1EA1n c\1EE7a Danh s�ch\,List Paragraph11\,�o\1EA1n c\D83B\DE7ADanh s�ch\,List Paragraph111\,Nga 3\,List Paragraph2\,Colorful List - Accent 11\,List Paragraph21\,�o\1EA1n cDanh s�ch\,\00D0o\1EA1n c\D83B\DE7ADanh s�ch\,List Paragraph3\,\00D0o\1EA1n cDanh s�ch";
	font-family:"Calibri",sans-serif;}
span.FooterChar
	{mso-style-name:"Footer Char";
	mso-style-link:Footer;}
span.Heading1Char
	{mso-style-name:"Heading 1 Char\,Heading 1\(Report Only\) Char\,Chapter Char\,Heading 1\(Report Only\)1 Char\,Chapter1 Char\,H1 Char\,DO NOT USE_h1 Char\,Level 1 Topic Heading Char\,12 Char\,Heading One Char\,Heading A Char\,Section Heading Char\,Heading X Char\,Chapter Head Char\,1 Char";
	mso-style-link:"Heading 1\,Heading 1\(Report Only\)\,Chapter\,Heading 1\(Report Only\)1\,Chapter1\,H1\,DO NOT USE_h1\,Level 1 Topic Heading\,12\,Heading One\,Heading A\,Section Heading\,Heading X\,Chapter Head\,1\,Header 1\,proj\,proj1\,proj5\,proj6\,proj7\,proj8\,proj9\,proj10\,proj11\,proj12";
	font-family:"Times New Roman",serif;
	font-weight:bold;}
.MsoChpDefault
	{font-family:"Calibri",sans-serif;}
.MsoPapDefault
	{margin-bottom:8.0pt;
	line-height:107%;}
 /* Page Definitions */
 @page WordSection1
	{size:612.0pt 792.0pt;
	margin:70.9pt 42.55pt 2.0cm 99.25pt;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
-->
</style>

</head>

<body lang=VI style='word-wrap:break-word'>

<div class=WordSection1>

<p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
line-height:115%'><b><span lang=EN-US style='font-size:13.0pt;line-height:115%;
font-family:"Times New Roman",serif'>C&#7896;NG HOÀ X&Atilde; H&#7896;I
CH&#7910; NGH&#296;A VI&#7878;T NAM</span></b></p>

<p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
line-height:115%'><b><span lang=EN-US style='font-size:13.0pt;line-height:115%;
font-family:"Times New Roman",serif'>Đ&#7897;c l&#7853;p - T&#7921; do -
H&#7841;nh phúc</span></b></p>

<p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
line-height:115%'><b><span lang=EN-US style='font-size:13.0pt;line-height:115%;
font-family:"Times New Roman",serif'>------------ oOo ------------</span></b></p>

<p class=MsoNormal align=center style='margin-top:12.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:0cm;text-align:center;text-indent:1.0cm;
line-height:normal'><b><span lang=EN-US style='font-size:15.0pt;font-family:
"Times New Roman",serif;color:black'>H&#7906;P Đ&#7890;NG MUA BÁN</span></b></p>

<p class=MsoNormal align=center style='margin-top:12.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:0cm;text-align:center;line-height:normal'><b><span
lang=EN-US style='font-size:15.0pt;font-family:"Times New Roman",serif;
color:black'>PH&#7846;N M&#7872;M</span></b><b><span lang=EN-US
style='font-size:15.0pt;font-family:"Times New Roman",serif;color:red'> </span></b><b><span
lang=EN-US style='font-size:15.0pt;font-family:"Times New Roman",serif;
color:black'>C&#7892;NG THÔNG TIN ĐI&#7878;N T&#7916;</span></b></p>

<p class=MsoNormal align=center style='margin-top:12.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:0cm;text-align:center'><i><span lang=EN-US
style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif;
color:black'>S&#7889;:</span></i><i><span lang=EN-US style='font-size:13.0pt;
line-height:107%;font-family:"Times New Roman",serif;color:black'> </span></i><i><span
lang=DE style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif;
color:black'></span></i><i><span lang=EN-US style='font-size:13.0pt;
line-height:107%;font-family:"Times New Roman",serif;color:black'>{{$data->mahd}}</span></i></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
28.1pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>Căn c&#7913; B&#7897; lu&#7853;t Dân
s&#7921; s&#7889; 91/2015/QH13 ngày 24 tháng 11 năm 2015 c&#7911;a Qu&#7889;c h&#7897;i
nư&#7899;c C&#7897;ng h&ograve;a X&atilde; h&#7897;i Ch&#7911; ngh&#297;a Vi&#7879;t
Nam;</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
28.1pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>Căn c&#7913; Lu&#7853;t Thương m&#7841;i
s&#7889; 36/2005/QH11 ngày 14 tháng 6 năm 2005 c&#7911;a Qu&#7889;c h&#7897;i
nư&#7899;c C&#7897;ng h&ograve;a X&atilde; h&#7897;i Ch&#7911; ngh&#297;a Vi&#7879;t
Nam;</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
28.1pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>Căn c&#7913; Lu&#7853;t Công ngh&#7879;
thông tin s&#7889; 67/2006/QH11 ngày 29 tháng 6 năm 2006 c&#7911;a Qu&#7889;c h&#7897;i
nư&#7899;c C&#7897;ng h&ograve;a X&atilde; h&#7897;i Ch&#7911; ngh&#297;a Vi&#7879;t
Nam;</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
28.1pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>Căn c&#7913; Ngh&#7883; đ&#7883;nh s&#7889;
71/2007/NĐ-CP ngày 03 tháng 5 năm 2007 c&#7911;a Chính ph&#7911; quy đ&#7883;nh
chi ti&#7871;t về hư&#7899;ng d&#7851;n th&#7921;c hi&#7879;n m&#7897;t s&#7889;
đi&#7873;u c&#7911;a Lu&#7853;t Công ngh&#7879; thông tin v&#7873; công nghi&#7879;p
công ngh&#7879; thông tin;</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
28.1pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>Căn c&#7913; nhu c&#7847;u về kh&#7843;
năng c&#7911;a hai Bên,</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
28.1pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>Hôm nay, ngày 01 tháng 07 năm 2022,
t&#7841;i {{$data->doanhnghiep->tendoanhnghiep}} chúng tôi đ&#7841;i di&#7879;n cho các Bên
k&yacute; k&#7871;t H&#7907;p đ&#7891;ng, g&#7891;m có:</span></p>

<p class=MsoNormal style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm'><b><span lang=EN-US style='font-size:13.0pt;line-height:
107%;font-family:"Times New Roman",serif;letter-spacing:-1.2pt'>BÊN MUA&nbsp;</span></b><b><span
lang=EN-US style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>:
</span></b><b><span lang=EN-US style='font-size:13.0pt;line-height:107%;
font-family:"Times New Roman",serif;text-transform: uppercase'>{{$data->doanhnghiep->tendoanhnghiep}}</span></b></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:6.0pt;
margin-left:92.15pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-92.15pt;line-height:15.0pt'><span lang=EN-US style='font-size:13.0pt;
font-family:"Times New Roman",serif'>Ngư&#7901;i đ&#7841;i di&#7879;n: <span style='text-transform: uppercase'>{{$data->doanhnghiep->nguoidaidien}}</span> Ch&#7913;c
v&#7909;: Hi&#7879;u trư&#7903;ng</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:6.0pt;
margin-left:92.15pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-92.15pt;line-height:15.0pt'><span lang=EN-US style='font-size:13.0pt;
font-family:"Times New Roman",serif'>Đ&#7883;a ch&#7881;: {{$data->doanhnghiep->diachi}}</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
115%'><a name="OLE_LINK1"></a><a name="OLE_LINK2"><span lang=EN-US
style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif'>Quy&#7871;t
đ&#7883;nh thành l&#7853;p/Gi&#7845;y ch&#7913;ng nh&#7853;n đăng k&yacute;
doanh nghi&#7879;p s&#7889;: ..............................</span></a></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
115%'><span lang=EN-US style='font-size:13.0pt;line-height:115%;font-family:
"Times New Roman",serif'>Nơi c&#7845;p: UBND Tỉnh An Giang Ngày c&#7845;p: ...................................</span></p>

<p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-justify:
inter-ideograph;line-height:15.0pt'><span lang=EN-US style='font-size:13.0pt;
font-family:"Times New Roman",serif'>Đi&#7879;n tho&#7841;i: {{$data->doanhnghiep->coquan}}  Fax:
....................</span></p>

<p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-justify:
inter-ideograph;line-height:15.0pt'><span lang=EN-US style='font-size:13.0pt;
font-family:"Times New Roman",serif'>M&atilde; s&#7889; thu&#7871;: {{$data->doanhnghiep->mst}}</span></p>

<p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-justify:
inter-ideograph;line-height:15.0pt'><span lang=EN-US style='font-size:13.0pt;
font-family:"Times New Roman",serif'>Tài kho&#7843;n:
.................................................................................</span></p>

<p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-justify:
inter-ideograph;line-height:15.0pt'><span lang=EN-US style='font-size:13.0pt;
font-family:"Times New Roman",serif'>Ngân hàng: ....................................................................</span></p>

<p class=MsoNormal style='margin-bottom:6.0pt'><b><span lang=EN-US
style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>BÊN
BÁN<a name="OLE_LINK7"></a><a name="OLE_LINK8">: VIETTEL AN GIANG - CHI NHÁNH T&#7852;P
    ĐOÀN CÔNG NGHI&#7878;P - VI&#7876;N THÔNG QUÂN Đ&#7896;I</a></span></b></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:6.0pt;
margin-left:92.15pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-92.15pt;line-height:15.0pt'><a name="_Hlk71633277"><span lang=EN-US
style='font-size:13.0pt;font-family:"Times New Roman",serif'>Ngư&#7901;i đ&#7841;i
di&#7879;n: <b>NGUY&#7876;N TRƯ&#7900;NG GIANG</b> Ch&#7913;c v&#7909;:
<b>Giám đ&#7889;c</b></span></a></p>

<p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-justify:
inter-ideograph;line-height:15.0pt'><span lang=EN-US style='font-size:13.0pt;
font-family:"Times New Roman",serif'>(Theo gi&#7845;y &#7910;y quy&#7873;n s&#7889;:
469/GUQ-CNVTQĐ ngày 27/01/2022 v&#7873; vi&#7879;c th&#7921;c hi&#7879;n nhi&#7879;m
v&#7909; c&#7911;a T&#7853;p đoàn t&#7841;i các Viettel T&#7881;nh/Thành ph&#7889;)</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:6.0pt;
margin-left:92.15pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-92.15pt;line-height:15.0pt'><span lang=EN-US style='font-size:13.0pt;
font-family:"Times New Roman",serif'>Đ&#7883;a ch&#7881;: 269B Nguy&#7877;n
Thái H&#7885;c, Phư&#7901;ng M&#7929; H&ograve;a, TP. Long Xuyên, t&#7881;nh An
Giang.</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
115%'><span lang=EN-US style='font-size:13.0pt;line-height:115%;font-family:
"Times New Roman",serif'>Gi&#7845;y ch&#7913;ng nh&#7853;n đăng k&yacute; ho&#7841;t
đ&#7897;ng chi nhánh s&#7889;: 0100109106-041</span></p>

<p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-justify:
inter-ideograph;line-height:15.0pt'><span lang=EN-US style='font-size:13.0pt;
font-family:"Times New Roman",serif'>Đi&#7879;n tho&#7841;i: 02966.555555</span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
1.0cm;line-height:115%'><span lang=EN-US style='font-size:13.0pt;line-height:
115%;font-family:"Times New Roman",serif;color:black'>Bên Mua và Bên Bán sau
đây đư&#7907;c g&#7885;i riêng là "Bên" và g&#7885;i chung là "các Bên" ho&#7863;c
"hai Bên".</span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;line-height:115%'><span class=dieuChar><span lang=EN-US
style='font-size:13.0pt;line-height:115%;color:black;font-weight:normal'>Sau
khi bàn b&#7841;c và th&#7887;a thu&#7853;n, Các Bên th&#7889;ng nh&#7845;t
k&yacute; k&#7871;t H&#7907;p đ&#7891;ng mua bên Ph&#7847;n m&#7873;m C&#7893;ng
thông tin đi&#7879;n t&#7917; (sau đây g&#7885;i t&#7855;t là "H&#7907;p đ&#7891;ng&quot;)
v&#7899;i các đi&#7873;u kho&#7843;n và đi&#7873;u ki&#7879;n c&#7909; th&#7875;
như sau:</span></span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;line-height:115%'><b><span lang=EN-US style='font-size:13.0pt;
line-height:115%;font-family:"Times New Roman",serif;color:black'>ĐI&#7872;U 1.
GI&#7842;I THÍCH T&#7914; NG&#7918; </span></b></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
1.0cm;line-height:115%'><span lang=EN-US style='font-size:13.0pt;line-height:
115%;font-family:"Times New Roman",serif;color:black'>Trong H&#7907;p đ&#7891;ng
này, các t&#7915; ng&#7919; dư&#7899;i đâyy đư&#7907;c hi&#7875;u như sau:</span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
115%'><span lang=EN-US style='font-size:13.0pt;line-height:115%;font-family:
"Times New Roman",serif;color:black'>1.1. <b>"H&#7907;p đ&#7891;ng"</b> là sự thỏa thuận giữa Bên Mua và Bên Bán, được thể hiện bằng văn bản này, được hai Bên ký kết, bao gồm cả Phụ lục và tài liệu kèm theo.</span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black'>1.2. <b>"Giá tr&#7883; h&#7907;p
    đ&#7891;ng"</b> là tổng số tiền mà Bên Mua phải trả cho Bên Bán theo Hợp đồng.</span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black'>1.3. <b>"Ph&#7847;n m&#7873;m"/ "</b></span><b><span
lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>Ph&#7847;n m&#7873;m</span></b><span lang=EN-US> </span><b><span
lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>C&#7893;ng thông tin đi&#7879;n t&#7917;" </span></b><span
lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>là các hạng mục thuộc phạm vi cung cấp quy định tại Hợp đồng này mà Bên Bán phải cung cấp cho Bên Mua.</span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black'>1.4. <b>"Đ&#7883;a ch&#7881; truy
c&#7853;p"</b> là địa chỉ của website mà Bên Bán bàn giao cho Bên Mua.</span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black'>1.5. <b>"Tài kho&#7843;n qu&#7843;n
tr&#7883;"</b> là Tài khoản mà Bên Bán bàn giao cho Bên Mua để sử dụng Phần mềm.</span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black;letter-spacing:-.2pt'>1.6. </span><b><span
lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
letter-spacing:-.2pt'>"Ngày"</span></b><span lang=EN-US style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;letter-spacing:-.2pt'> là ngày dương lịch, được tính liên tục, kể cả thứ bảy, chủ nhật và ngày nghỉ lễ, tết theo quy định của pháp luật.</span></span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black;letter-spacing:-.2pt'>1.7. </span><b><span
lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
letter-spacing:-.2pt'>"Ngày làm vi&#7879;c"</span></b><span lang=EN-US
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
letter-spacing:-.2pt'> là ngày dương lịch, trừ thứ bảy, chủ nhật và ngày nghỉ lễ, tết theo quy định của pháp luật.</span></span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><b><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black'>ĐI&#7872;U 2. PH&#7840;M VI CUNG
C&#7844;P, THÀNH PH&#7846;N C&#7910;A H&#7906;P Đ&#7890;NG</span></b></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><b><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif'>2.1. <span style='color:black'>Ph&#7841;m vi cung
c&#7845;p:</span></span></b></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black'>- Bên Mua đ&#7891;ng &yacute; mua và Bên
Bán đ&#7891;ng &yacute; bán </span><span lang=EN-US style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>Ph&#7847;n m&#7873;m</span><span
lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:red'> </span><b><span lang=EN-US style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif;color:black'>C&#7893;ng thông tin đi&#7879;n
t&#7917;</span></b><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;color:black'> </span><span lang=EN-US
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>theo danh mục, số lượng, giá cả, tính năng quy định tại các Phụ lục đính kèm. Các Phụ lục là một phần không thể tách rời của Hợp đồng này.</span></p>

<p class=MsoNormal style='margin-top:1.5pt;margin-right:0cm;margin-bottom:1.5pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
110%'><span lang=EN-US style='font-size:13.0pt;line-height:110%;font-family:
"Times New Roman",serif;color:black'>- Phần mềm Cổng thông tin điện tử là điểm truy cập tập trung, tích hợp các kênh thông tin các dịch vụ, ứng dụng, là sản phẩm phần mềm được phát triển trên một sản phẩm cổng lõi, thực hiện trao đổi thông tin, dữ liệu với các hệ thống thông tin, đồng thời cung cấp và trao đổi với người sử dụng thông qua một phương thức thống nhất trên nền tảng web tại bất kỳ thời điểm nào và bất kỳ đâu.</span></p>

<p class=MsoNormal style='margin-bottom:0cm;text-align:justify;text-justify:
inter-ideograph;line-height:115%'><b><span lang=EN-US style='font-size:13.0pt;
line-height:115%;font-family:"Times New Roman",serif'>2.2. Thành ph&#7847;n
c&#7911;a<span style='color:black'> H&#7907;p đ&#7891;ng và th&#7913; t&#7921;
    ưu tiên pháp l&yacute; như sau:</span></span></b></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:-.4pt;margin-bottom:
2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
line-height:115%'><span lang=EN-US style='font-size:13.0pt;line-height:115%;
font-family:"Times New Roman",serif;color:black'>2.2.1. Văn bản Hợp đồng (kèm theo các Phụ lục);</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:-.4pt;margin-bottom:
2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
line-height:115%'><span lang=EN-US style='font-size:13.0pt;line-height:115%;
font-family:"Times New Roman",serif;color:black'>2.2.2. Các tài liệu kèm theo khác (nếu có).</span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><b><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black'>ĐI&#7872;U 3. TI&#7870;N Đ&#7896; CUNG
C&#7844;P, BÀN GIAO VÀ NGHI&#7878;M THU PH&#7846;N M&#7872;M</span></b></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:.05pt;margin-bottom:
2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
line-height:110%'><b><span lang=EN-US style='font-size:13.0pt;line-height:110%;
font-family:"Times New Roman",serif;color:black'>3.1. Ti&#7871;n đ&#7897; cung
c&#7845;p:</span></b><span lang=EN-US style='font-size:13.0pt;line-height:110%;
font-family:"Times New Roman",serif;color:black'> Bên Bán bàn giao Phần mềm (bao gồm Địa chỉ truy cập và Tài khoản quản trị) cho Bên Mua trong vòng tối đa ba (03) ngày làm việc kể từ ngày Hợp đồng có hiệu lực.</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:.05pt;margin-bottom:
2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
line-height:110%'><b><span lang=EN-US style='font-size:13.0pt;line-height:110%;
font-family:"Times New Roman",serif;color:black'>3.2. Bàn giao và nghi&#7879;m
thu: </span></b></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:.05pt;margin-bottom:
2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
line-height:110%'><span lang=EN-US style='font-size:13.0pt;line-height:110%;
font-family:"Times New Roman",serif;color:black'>- Tại thời điểm Bên Bán bàn giao Phần mềm, hai Bên sẽ ký kết Biên bản bàn giao và nghiệm thu Phần mềm.</span></p>

<p class=MsoNormal style='margin-top:2.4pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
117%'><span lang=EN-US style='font-size:13.0pt;line-height:117%;font-family:
"Times New Roman",serif;color:black'>- Trong vòng ba (03) ngày làm việc kể từ ngày hai Bên ký Biên bản bàn giao và nghiệm thu Phần mềm, Bên Bán phải cung cấp cho Bên Mua các tài liệu sau:</span></p>

<p class=MsoNormal style='margin-top:2.4pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
9.0pt;line-height:122%'><span lang=EN-US style='font-size:13.0pt;line-height:
122%;font-family:"Times New Roman",serif;color:black'>+ Tài liệu hướng dẫn sử dụng Phần mềm;</span></p>

<p class=MsoNormal style='margin-top:2.4pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
9.0pt;line-height:122%'><span lang=EN-US style='font-size:13.0pt;line-height:
122%;font-family:"Times New Roman",serif;color:black'>+ Các tài liệu khác (nếu có).</span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;line-height:120%'><b><span lang=EN-US style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>ĐI&#7872;U 4.
GIÁ TR&#7882; H&#7906;P Đ&#7890;NG, TH&#7900;I H&#7840;N VÀ PHƯƠNG TH&#7912;C
THANH TOÁN</span></b></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><b><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black'>4.1. Giá tr&#7883; H&#7907;p đ&#7891;ng: {{number_format($data->thanhtien)}} VNĐ.</span></b><b><span
lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black;background:yellow'> </span></b></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><i><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black'>(B&#7857;ng ch&#7919;:
...................................................................................
đ&#7891;ng/.)</span></i></p>

<p class=MsoNormal style='margin-top:1.5pt;margin-right:.55pt;margin-bottom:
1.5pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
line-height:110%'><span lang=EN-US style='font-size:13.0pt;line-height:110%;
font-family:"Times New Roman",serif;color:black'>Đơn giá và số lượng Phần mềm được quy định chi tiết tại Phụ lục 01 kèm theo Hợp đồng này.</span></p>

<p class=MsoNormal style='margin-top:1.5pt;margin-right:.55pt;margin-bottom:
1.5pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
line-height:110%'><span lang=EN-US style='font-size:13.0pt;line-height:110%;
font-family:"Times New Roman",serif;color:black'>Tổng giá trị Hợp đồng nêu trên đã bao gồm các loại thuế, phí, lệ phí (nếu có) theo quy định của pháp luật.
</span></p>

<p class=MsoNormal style='margin-top:1.5pt;margin-right:.55pt;margin-bottom:
1.5pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
line-height:110%'><i><span lang=EN-US style='font-size:13.0pt;line-height:110%;
font-family:"Times New Roman",serif;color:black'>Ghi chú: Ph&#7847;n m&#7873;m
là đ&#7889;i tư&#7907;ng không ch&#7883;u thu&#7871; giá tr&#7883; gia tăng.</span></i></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
117%'><b><span lang=EN-US style='font-size:13.0pt;line-height:117%;font-family:
"Times New Roman",serif;color:black'>4.2. Th&#7901;i h&#7841;n và phương
th&#7913;c thanh toán:</span></b></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
117%'><b><span lang=EN-US style='font-size:13.0pt;line-height:117%;font-family:
"Times New Roman",serif;color:black'>4.2.1. Th&#7901;i h&#7841;n thanh toán:</span></b><span
lang=EN-US style='font-size:13.0pt;line-height:117%;font-family:"Times New Roman",serif;
color:black'> </span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
31.7pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif;color:black'>Bên Mua thanh toán cho Bên Bán 100% giá trị Hợp đồng làm 01 (một) lần trong vòng …….. (…..) ngày làm việc sau khi hai Bên ký Biên bản bàn giao và nghiệm thu Phần mềm, đồng thời Bên Mua đã nhận được hóa đơn tài chính hợp lệ từ Bên Bán.</span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
117%'><b><span lang=EN-US style='font-size:13.0pt;line-height:117%;font-family:
"Times New Roman",serif;color:black'>4.2.2. Phương th&#7913;c thanh toán:</span></b></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
31.7pt;line-height:120%'><span lang=DE style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>Tiền mặt, chuyển khoản hoặc các hình thức thanh toán hợp lệ khác theo thỏa thuận của các Bên.</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'> Thông
tin </span><span lang=NL style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif'>tài kho&#7843;n c&#7911;a Bên Bán:</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
36.0pt;line-height:120%'><i><span lang=NL style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>Đơn v&#7883; th&#7909; hư&#7903;ng: <b>T&#7853;p
    Đoàn Công nghi&#7879;p - Vi&#7877;n thông Quân đ&#7897;i</b></span></i></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
36.0pt;line-height:120%'><i><span lang=NL style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>Đ&#7883;a ch&#7881;: <b>Lô D26, ngõ 3, đường Tôn Thất Thuyết, phường Yên Hòa, quận Cầu Giấy, Hà Nội</b></span></i></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
36.0pt;line-height:120%'><i><span lang=NL style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>S&#7889; tài kho&#7843;n: <b>0514100060101</b></span></i></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
36.0pt;line-height:120%'><i><span lang=NL style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>T&#7841;i ngân hàng: <b>TMCP Quân đ&#7897;i
- Chi Nhánh Đi&#7879;n Biên Ph&#7911; </b></span></i></p>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt'><a name="_Toc287339765"><b><span lang=NL
style='font-size:13.0pt;font-family:"Times New Roman",serif'>ĐI&#7872;U 5.
QUY&#7872;N VÀ NGH&#296;A V&#7908; C&#7910;A CÁC BÊN</span></b></a></p>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt'><b><span lang=NL style='font-size:13.0pt;
font-family:"Times New Roman",serif'>5.1. Quy&#7873;n và ngh&#297;a v&#7909;
c&#7911;a Bên Mua</span></b></p>

<p class=MsoNormal style='margin-top:1.5pt;margin-right:0cm;margin-bottom:1.5pt;
margin-left:1.0cm;text-align:justify;text-justify:inter-ideograph;line-height:
110%'><span lang=IT style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif;
letter-spacing:-.4pt'>Bên Mua có các quyền và nghĩa vụ sau đây:</span></p>

<p class=MsoListParagraphCxSpFirst style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Được quyền yêu cầu Bên Bán hỗ trợ hướng dẫn, đào tạo sử dụng Phần mềm trong thời gian hiệu lực của Hợp đồng.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Được sử dụng phiên bản mới nhất của Phần mềm.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Được bàn giao tài khoản quản trị Phần mềm, toàn quyền sở hữu tài khoản được Bên Bán bàn giao và nội dung dữ liệu do Bên Mua tạo lập. Bên Mua chịu mọi trách nhiệm trước pháp luật về việc sử dụng Phần mềm và nội dung dữ liệu do Bên Mua tạo lập trên Phần mềm.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Chịu trách nhiệm về việc bảo mật thông tin tài khoản quản trị Phần mềm và toàn bộ các hoạt động được thực hiện bởi tài khoản này. Thông báo ngay cho Bên Mua nếu nghi ngờ hay biết rằng thông tin tài khoản quản trị Phần mềm đã bị lộ thông tin hoặc bị chiếm quyền sử dụng.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Thanh toán đầy đủ và đúng hạn giá trị Hợp đồng theo quy định tại Điều 4 của Hợp đồng, trừ trường hợp hai Bên có thỏa thuận khác.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Kịp thời thông báo cho Bên Bán các lỗi phát sinh trong quá trình sử dụng Phần mềm.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:37.5pt;text-align:justify;
text-justify:inter-ideograph;text-indent:-18.0pt'><span lang=IT
style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif'>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:115%;
font-family:"Times New Roman",serif'>Thông báo kịp thời cho Bên Bán trong trường hợp có một bên thứ ba trực tiếp hoặc gián tiếp khiếu nại/khiếu kiện về việc Phần mềm do Bên Bán cung cấp theo Hợp đồng vi phạm bản quyền. Bên Mua sẽ không được tự ý chấp nhận khiếu nại của bên thứ ba. Theo yêu cầu của Bên Bán, Bên Mua sẽ phối hợp với Bên Bán bảo vệ quyền và lợi ích hợp pháp của Bên Bán trước mọi khiếu nại/khiếu kiện của bên thứ ba.</span></p>

<p class=MsoListParagraphCxSpLast style='margin-top:2.25pt;margin-right:0cm;
margin-bottom:2.25pt;margin-left:37.5pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:112%'><span lang=IT style='font-size:13.0pt;
line-height:112%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:112%;
font-family:"Times New Roman",serif'>Đảm bảo an toàn bảo mật thông tin về những nội dung, tính năng sản phẩm và toàn bộ nội dung mà Bên Bán đào tạo, hướng dẫn Bên Mua khi sử dụng Phần mềm.</span></p>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt'><b><span lang=IT style='font-size:13.0pt;
font-family:"Times New Roman",serif'>5.2. Quy&#7873;n và ngh&#297;a v&#7909;
c&#7911;a Bên Bán</span></b></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:1.0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=IT style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
letter-spacing:-.4pt'>Bên Bán có các quyền và nghĩa vụ sau đây:</span></p>

<p class=MsoListParagraphCxSpFirst style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:36.0pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;letter-spacing:-.3pt'>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;letter-spacing:-.3pt'>Yêu cầu Bên Mua thực hiện đúng thỏa thuận, cam kết theo quy định của Hợp đồng này.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.5pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Hướng dẫn Bên Mua quản lý và sử dụng phần mềm theo đúng quy định, quy trình của Bên Bán.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.5pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Bàn giao tài khoản quản trị Phần mềm cho Bên Mua.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.5pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Kh&#7855;c ph&#7909;c các l&#7895;i phát
sinh trong quá tr&igrave;nh xây d&#7921;ng và phát tri&#7875;n Ph&#7847;n
m&#7873;m trong th&#7901;i gian hi&#7879;u l&#7921;c c&#7911;a H&#7907;p
đ&#7891;ng tr&#7915; các </span><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>h&#7887;ng hóc x&#7843;y
ra do nguyên nhân b&#7845;t kh&#7843; kháng </span><span lang=IT
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>ho&#7863;c do l&#7895;i c&#7911;a</span><span lang=IT
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>
Bên Mua.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.5pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Khóa Tài khoản quản trị Phần mềm trong trường hợp Bên Mua có hành vi vi phạm Hợp đồng.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.5pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Có quyền cung cấp thông tin của Bên Mua khi có yêu cầu của cơ quan quản lý nhà nước có thẩm quyền theo quy định của Pháp luật.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.5pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Được miễn trừ mọi trách nhiệm phát sinh không phải do lỗi của Viettel trong quá trình Bên Mua sử dụng Phần mềm.</span></p>

<p class=MsoListParagraphCxSpLast style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.5pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Thông báo cho Bên Mua trong trường hợp Bên Bán thực hiện kế hoạch nâng cấp, tu bổ, sửa chữa Phần mềm để đảm bảo chất lượng hoạt động của Phần mềm.</span></p>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt;background:white'><b><span lang=IT
style='font-size:13.0pt;font-family:"Times New Roman",serif;color:black'>ĐI&#7872;U
6. Đ&#7846;U M&#7888;I LIÊN H&#7878; VÀ NH&#7852;N BÀN GIAO, NGHI&#7878;M THU</span></b></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:36.0pt;line-height:120%;background:white'><span lang=IT
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>Hai Bên thống nhất đầu mối liên hệ, nhận bàn giao, nghiệm thu và triển khai thực hiện các nội dung của Hợp đồng như sau:</span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='background:white;border-collapse:collapse;border:none'>
 <tr>
  <td width=313 valign=top style='width:234.85pt;border:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
  text-indent:0cm;line-height:120%'><b><span lang=IT style='font-size:13.0pt;
  line-height:120%;font-family:"Times New Roman",serif;color:black'>Bên Mua</span></b></p>
  <p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
  text-indent:0cm;line-height:120%'><span lang=IT style='font-size:13.0pt;
  line-height:120%;font-family:"Times New Roman",serif;color:black'>Tên đơn
  v&#7883;:.........................</span></p>
  <p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
  text-indent:0cm;line-height:120%'><span lang=IT style='font-size:13.0pt;
  line-height:120%;font-family:"Times New Roman",serif;color:black'>Ông/Bà:
  ............................</span></p>
  <p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
  text-indent:0cm;line-height:120%'><span lang=IT style='font-size:13.0pt;
  line-height:120%;font-family:"Times New Roman",serif;color:black'>Đ&#7883;a
  ch&#7881;: ..................</span></p>
  <p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
  text-indent:0cm;line-height:120%'><span lang=IT style='font-size:13.0pt;
  line-height:120%;font-family:"Times New Roman",serif;color:black'>Đi&#7879;n
  tho&#7841;i: ..................</span></p>
  <p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
  text-indent:0cm;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
  line-height:120%;font-family:"Times New Roman",serif;color:black'>Email:
  ............................</span></p>
  </td>
  <td width=313 valign=top style='width:234.85pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
  text-indent:0cm;line-height:120%'><b><span lang=EN-US style='font-size:13.0pt;
  line-height:120%;font-family:"Times New Roman",serif;color:black'>Bên Bán</span></b></p>
  <p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
  text-indent:0cm;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
  line-height:120%;font-family:"Times New Roman",serif;color:black'>Tên đơn
  v&#7883;: ....................</span></p>
  <p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
  text-indent:0cm;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
  line-height:120%;font-family:"Times New Roman",serif;color:black'>Ông/Bà:
  ..........................</span></p>
  <p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
  text-indent:0cm;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
  line-height:120%;font-family:"Times New Roman",serif;color:black'>Đ&#7883;a
  ch&#7881;: .................</span></p>
  <p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
  text-indent:0cm;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
  line-height:120%;font-family:"Times New Roman",serif;color:black'>Đi&#7879;n
  tho&#7841;i: ...............</span></p>
  <p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
  text-indent:0cm;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
  line-height:120%;font-family:"Times New Roman",serif;color:black'>Email:
  ..........................</span></p>
  </td>
 </tr>
</table>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt'><b><span lang=EN-US style='font-size:13.0pt;
font-family:"Times New Roman",serif'>ĐI&#7872;U 7. B&#7842;O M&#7852;T THÔNG
TIN</span></b></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><a name="_Toc278298189"></a><span style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>7.1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Các </span><span style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>Bên cam kết giữ bí mật tất cả các thông tin, báo cáo, tài liệu, dữ liệu có được từ Bên kia theo Hợp đồng. Không có sự đồng ý trước bằng văn bản của Bên cung cấp thông tin, Bên nhận thông tin không được tiết lộ bất kì thông tin, báo cáo, tài liệu và dữ liệu của Bên cung cấp thông tin cho Bên thứ ba. Các Bên cam kết tiến hành các biện pháp bảo mật và các hoạt động dự phòng cần thiết và phù hợp để đảm bảo giữ bí mật những thông tin trên và đảm bảo những thông tin này không bị sử dụng sai mục đích trong quá trình thực hiện và sau khi kết thúc Hợp đồng. Tuy nhiên, những hạn chế nêu trên sẽ không áp dụng đối với một trong số các thông tin sau: </span></p>

<p class=NormalT1 style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:56.9pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-21.6pt;line-height:120%'><span style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>Những thông tin mà bên nhận thông tin có bằng chứng chứng minh mình đã biết từ nguồn cung cấp thông tin khác không liên quan đến bên kia trước thời điểm mà thông tin đó được thông báo; </span></p>

<p class=NormalT1 style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:56.9pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-21.6pt;line-height:120%'><span style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>b)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>Những thông tin có được từ các nguồn khác mà không cần phải giữ bí mật hoặc không bị cấm sử dụng;</span></p>

<p class=NormalT1 style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:56.9pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-21.6pt;line-height:120%'><span style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>c)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>Những thông tin công khai hoặc đã trở nên công khai với công chúng mà không phải do lỗi của bên nhận thông tin;</span></p>

<p class=NormalT1 style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:56.9pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-21.6pt;line-height:120%'><span style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>d)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>Những thông tin mà bên nắm giữ thông tin không phải giữ bí mật khi tiết lộ cho người khác. </span></p>

<p class=NormalT1 style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:56.9pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-21.6pt;line-height:120%'><span style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>e)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>Những thông tin do bên nhận thông tin tự phát triển một cách độc lập;</span></p>

<p class=NormalT1 style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:56.9pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-21.6pt;line-height:120%'><span style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>f)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>Thông tin bị tiết lộ theo quy định của pháp luật, yêu cầu của toà án hoặc của cơ quan nhà nước có thẩm quyền; </span></p>

<p class=NormalT1 style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:56.9pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-21.6pt;line-height:120%'><span style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>g)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>Những thông tin bị tiết lộ cho các công ty thành viên của Một Bên, các giám đốc, nhân viên, bên tư vấn hoặc cố vấn của bên nhận thông tin hoặc của công ty liên kết (việc tiết lộ thông tin trong từng trường hợp sẽ tuân theo các quy định và/ hoặc thoả thuận liên quan tới bảo mật tương tự như trong Hợp đồng) trong trường hợp việc tiết lộ đó là cần thiết để thực hiện Hợp đồng. Bên tiết lộ thông tin phải chịu trách nhiệm và đảm bảo rằng bên được nhận thông tin sẽ không tiết lộ thông tin được cung cấp cho bất kỳ một bên nào khác.</span></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif'>7.2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>Bất kể việc các Bên đã tiến hành các biện pháp bảo mật và hoạt động dự phòng, như đã quy định ở khoản 6.1, nếu Bên nào tiết lộ thông tin mà không được phép hoặc sử dụng sai mục đích, Bên đó sẽ chịu trách nhiệm và bồi thường cho Bên còn lại các thiệt hại phát sinh thực tế, trực tiếp (nếu có) theo quy định của pháp luật. Trừ trường hợp có thỏa thuận cụ thể khác, mối quan hệ khách hàng giữa Khách hàng (Bên Mua) với Bên Bán không được xem là thông tin bảo mật và các Bên có thể tiết lộ sự việc này với các khách hàng, khách hàng tiềm năng hoặc các Bên thứ ba khác.</span></p>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt'><a name="_Toc287339767"><b><span
style='font-size:13.0pt;font-family:"Times New Roman",serif'>ĐI&#7872;U 8.
PH&#7840;T VI PH&#7840;M H&#7906;P Đ&#7890;NG VÀ B&#7890;I THƯ&#7900;NG
THI&#7878;T H&#7840;I</span></b></a></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif'>8.1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>Bên vi phạm Hợp đồng phải bồi thường các thiệt hại trực tiếp, thực tế cho Bên kia do sự vi phạm Hợp đồng của mình gây ra theo quy định của pháp luật ngoại trừ các trường hợp Bất khả kháng như quy định tại Điều 8 của Hợp đồng.</span></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif'>8.2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>Ngoài khoản bồi thường thiệt hại nêu trên, Bên vi phạm còn phải trả một khoản tiền phạt hợp đồng cho Bên bị vi phạm do hành vi vi phạm gây ra. Mức phạt vi phạm hợp đồng được xác định bằng 8% giá trị phần nghĩa vụ hợp đồng bị vi phạm.</span></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif'>8.3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>Nếu Bên Mua không thực hiện hoặc thực hiện không đầy đủ nghĩa vụ thanh toán theo quy định của Hợp đồng thì Bên Mua phải chịu phạt 0,1% cho mỗi ngày chậm thanh toán nhưng giá trị tiền phạt vi phạm không vượt quá 08% giá trị số tiền chậm thanh toán. </span></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif'>8.4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>Nếu một Bên đơn phương chấm dứt Hợp đồng mà không thuộc những điều khoản cho phép đơn phương chấm dứt Hợp đồng theo quy định của Hợp đồng/pháp luật hoặc không có sự đồng ý trước bằng văn bản của Bên kia thì phải chịu phạt 08% tổng giá trị Hợp đồng.</span></p>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt'><a name="_Toc287339768"><b><span
lang=EN-US style='font-size:13.0pt;font-family:"Times New Roman",serif'>ĐI&#7872;U
9. B&#7844;T KH&#7842; KHÁNG</span></b></a></p>

<p class=MsoListParagraphCxSpFirst style='margin-top:2.0pt;margin-right:-.3pt;
margin-bottom:2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-36.0pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>9.1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;color:black'>“Bất khả kháng” là các sự kiện xảy ra một cách khách quan, không thể lường trước được và không thể khắc phục được làm ảnh hưởng tới việc thực hiện Hợp đồng mặc dù đã áp dụng mọi biện pháp cần thiết và khả năng cho phép của mỗi bên hoặc các bên. Sự kiện Bất khả kháng bao gồm nhưng không giới hạn thiên tai, hoả hoạn, lũ lụt, động đất, tai nạn, thảm họa, dịch bệnh, thực hiện quyết định của cơ quan nhà nước có thẩm quyền mà các Bên không thể biết trước được vào thời điểm giao kết và thực hiện Hợp đồng và các sự kiện bất khả kháng khác theo quy định của pháp luật.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:-.3pt;
margin-bottom:2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-36.0pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>9.2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;color:black'>Trường hợp một Bên không thể thực hiện các nghĩa vụ của mình do sự kiện bất khả kháng (“Bên bị ảnh hưởng”), Bên bị ảnh hưởng sẽ ngay lập tức thông báo cho Bên còn lại (“Bên không bị ảnh hưởng”) bằng văn bản về sự kiện bất khả kháng, bằng chứng về việc xảy ra sự kiện bất khả kháng, khoảng thời gian xảy ra sự kiện bất khả kháng và những hậu quả có thể xảy ra liên quan đến việc thực hiện Hợp đồng chậm nhất trong vòng 03 ngày làm việc kể từ ngày xảy ra sự kiện bất khả kháng và thường xuyên thông báo về quá trình khắc phục, giải quyết sự kiện bất khả kháng. </span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:-.3pt;
margin-bottom:2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-36.0pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>9.3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;color:black'>Bên b&#7883; &#7843;nh hư&#7903;ng
có trách nhi&#7879;m th&#7921;c hi&#7879;n m&#7885;i n&#7895; l&#7921;c và các
bi&#7879;n pháp c&#7847;n thi&#7871;t đ&#7875; </span><span lang=EN-US
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>gi&#7843;m thi&#7875;u &#7843;nh hư&#7903;ng c&#7911;a s&#7921;
ki&#7879;n b&#7845;t kh&#7843; kháng đ&#7889;i v&#7899;i vi&#7879;c th&#7921;c
hi&#7879;n ngh&#297;a v&#7909; c&#7911;a</span><span lang=EN-US
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'> m&igrave;nh. </span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:-.3pt;
margin-bottom:2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-36.0pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>9.4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;color:black'>Khi sự kiện bất khả kháng xảy ra thì nghĩa vụ của các Bên theo Hợp đồng tạm thời không thực hiện và sẽ ngay lập tức phục hồi khi sự kiện bất khả kháng chấm dứt hoặc bị loại bỏ. </span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:-.3pt;
margin-bottom:2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-36.0pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>9.5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;color:black'>Trừ quy định tại Khoản 8.6 Điều này, Bên bị ảnh hưởng sẽ không bị coi là vi phạm các quy định của Hợp đồng hoặc chịu trách nhiệm đối với Bên còn lại do việc chậm trễ thực hiện các nghĩa vụ của mình (quy định này chỉ áp dụng đối với những nghĩa vụ không thể thực hiện được do ảnh hưởng của sự kiện bất khả kháng). Trường hợp Sự kiện Bất khả kháng kéo dài hơn ba mươi (30) ngày thì Bên không bị ảnh hưởng có quyền gửi văn bản thông báo chấm dứt Hợp đồng cho Bên Bánị ảnh hưởng. Trong trường hợp này, Hợp đồng sẽ chấm dứt hiệu lực kể từ ngày Bên không bị ảnh hưởng gửi văn bản thông báo. Khi Hợp đồng chấm dứt theo quy định tại Điều này, các Bên có nghĩa vụ hợp tác để giải quyết các nghĩa vụ còn tồn đọng.<span
style='color:black'> </span></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:-.3pt;
margin-bottom:2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-36.0pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>9.6.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;color:black'>Trường hợp Bên bị ảnh hưởng không thực hiện các nghĩa vụ quy định tại Khoản 8.2, 8.3 và 8.4 Điều này thì các quy định tại Khoản 8.5 Điều này sẽ không được áp dụng và các Bên có nghĩa vụ tuân thủ theo các quy định Hợp đồng.</span></p>

<p class=MsoListParagraphCxSpLast style='margin-top:2.0pt;margin-right:-.3pt;
margin-bottom:2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-36.0pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>9.7.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;color:black;letter-spacing:-.2pt'>Khi kết thúc sự kiện bất khả kháng, Bên vi phạm Hợp đồng phải thông báo ngay bằng văn bản cho Bên kia biết, nếu không thông báo kịp thời cho Bên kia thì phải bồi thường toàn bộ thiệt hại theo quy định của pháp luật.</span></p>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt'><a name="_Toc218056848"><b><span lang=PL
style='font-size:13.0pt;font-family:"Times New Roman",serif'>ĐI&#7872;U 10. CHUY&#7874;N
NHƯ&#7906;NG, CHUY&#7874;N GIAO H&#7906;P Đ&#7890;NG</span></b></a><b><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'></span></b></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;line-height:
17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>10.1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>Các Bên đảm bảo sẽ thực hiện các biện pháp cần thiết và hợp pháp để Hợp đồng tiếp tục có hiệu lực đối với người kế thừa quyền sở hữu của mỗi Bên. </span></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;line-height:
17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>10.2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>Không Bên nào được chuyển nhượng hoặc chuyển giao cho một bên thứ ba toàn bộ hoặc một phần quyền và/hoặc nghĩa vụ của mình theo Hợp đồng nếu không được sự đồng ý trước bằng văn bản của Bên kia.</span></p>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt'><b><span lang=PL style='font-size:13.0pt;
font-family:"Times New Roman",serif'>ĐI&#7872;U 11. CAM K&#7870;T VÀ B&#7842;O
Đ&#7842;M</span></b></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;text-indent:
0cm;line-height:17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'> </span><span
style='font-size:13.0pt;font-family:"Times New Roman",serif'>Mỗi Bên cam kết và bảo đảm: có đủ năng lực, tư cách pháp lý theo quy định của pháp luật để ký kết và thực hiện các nghĩa vụ của mình theo Hợp đồng; người ký kết Hợp đồng của mình có đủ thẩm quyền ký kết Hợp đồng.</span></p>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt'><a name="_Toc287339769"><b><span lang=PL
style='font-size:13.0pt;font-family:"Times New Roman",serif'>ĐI&#7872;U 12. CH&#7844;M
D&#7912;T H&#7906;P Đ&#7890;NG</span></b></a></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
36.0pt;line-height:17.0pt'><span lang=PT-BR style='font-size:13.0pt;font-family:
"Times New Roman",serif'>Hợp đồng chấm dứt trong các trường hợp sau:</span></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>12.1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>H</span><span lang=PT-BR style='font-size:
13.0pt;line-height:120%;font-family:"Times New Roman",serif;color:black'>ai Bên đã hoàn thành toàn bộ nghĩa vụ của mình quy định trong Hợp đồng</span><span lang=PT-BR
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>.</span></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>12.2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Theo thỏa thuận của Hai Bên. Trong trường hợp đó, Hai Bên sẽ thoả thuận về các điều kiện cụ thể liên quan tới việc chấm dứt Hợp đồng.</span></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>12.3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Bên Bán có quyền đơn phương chấm dứt Hợp đồng nếu Bên Mua có hành vi làm ảnh hưởng đến an toàn viễn thông và an ninh thông tin.</span></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>12.4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Một trong hai Bên bị phá sản, giải thể.</span></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>12.5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Trư&#7901;ng</span><span lang=PT-BR
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>
hợp Bất khả kháng theo quy định tại Điều 8 của Hợp đồng.</span></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>12.6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Khi có yêu cầu của Cơ quan Nhà nước có thẩm quyền.</span></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>12.7.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Các</span><span lang=PT-BR
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>
trường hợp khác theo quy định của Hợp đồng và pháp luật.</span></p>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt'><b><span lang=PT-BR style='font-size:13.0pt;
font-family:"Times New Roman",serif'>ĐI&#7872;U 13. LU&#7852;T ÁP D&#7908;NG VÀ
GI&#7842;I QUY&#7870;T TRANH CH&#7844;P</span></b></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;line-height:
17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>13.1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>Hợp đồng được điều chỉnh và giải thích theo pháp luật Việt Nam.</span></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;line-height:
17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>13.2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>Mọi tranh chấp phát sinh từ hoặc liên quan đến Hợp đồng sẽ được giải quyết thông qua thương lượng giữa các Bên. Nếu các Bên không thương lượng được thì bất kỳ Bên nào cũng có quyền khởi kiện tại Tòa án có thẩm quyền theo quy định của pháp luật. Phán quyết của Toà án sẽ là quyết định cuối cùng và có giá trị bắt buộc đối với các Bên. Án phí và mọi chi phí có liên quan đến việc giải quyết tranh chấp theo quyết định/bản án có hiệu lực pháp luật của Tòa án, bao gồm cả chi phí luật sư (nếu có) sẽ do Bên thua kiện chịu.</span></p>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt'><b><span lang=EN-US style='font-size:13.0pt;
font-family:"Times New Roman",serif'>ĐI&#7872;U 14. ĐI&#7872;U KHO&#7842;N
CHUNG</span></b></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;line-height:
17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>14.1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>Hợp đồng có hiệu lực kể từ ngày được ký kết bởi đại diện hợp pháp của hai Bên. Hợp đồng thay thế tất cả các thỏa thuận trước đó (nếu có) giữa các Bên liên quan đến giao dịch này.</span></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;line-height:
17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>14.2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>Hợp đồng hết hiệu lực và tự động thanh lý sau khi hai Bên hoàn thành toàn bộ nghĩa vụ của mình quy định trong Hợp đồng.</span></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;line-height:
17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>14.3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>Bất kỳ sửa đổi hoặc bổ sung nào đối với Hợp đồng sẽ chỉ có hiệu lực khi có thoả thuận bằng văn bản của các Bên.</span></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;line-height:
17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>14.4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>Trong phạm vi cho phép, các Bên cam kết trao đổi, ký kết, chuyển giao mọi thông tin và tài liệu cũng như tiến hành mọi hoạt động, đưa ra mọi quyết định cần thiết để thực hiện Hợp đồng.</span></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;line-height:
17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>14.5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>Hợp đồng có tính ràng buộc và có hiệu lực pháp luật đối với các Bên cũng như các tổ chức kế thừa quyền lợi và trách nhiệm của các Bên theo Hợp đồng.</span></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;line-height:
17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>14.6.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>Nếu bất kỳ một hoặc một số quy định trong Hợp đồng bị coi là vô hiệu, bất hợp pháp hoặc không có hiệu lực thi hành theo pháp luật Việt Nam thì tính hiệu lực, hợp pháp và hiệu lực thi hành của các quy định còn lại của Hợp đồng sẽ không bị ảnh hưởng hoặc suy giảm bằng bất kỳ cách thức nào.</span></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;line-height:
17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>14.7.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>Hợp đồng kèm theo các bản Phụ lục được lập thành 02 (hai) bản có giá trị pháp lý như nhau, mỗi Bên giữ 01 (một) bản.</span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=617
 style='border-collapse:collapse'>
 <tr style='height:127.9pt'>
  <td width=309 valign=top style='width:231.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:127.9pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>Đ&#7840;I
  DI&#7878;N BÊN BÁN</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:14.0pt;line-height:107%;font-family:"Times New Roman",serif'>Nguy&#7877;n
  Trư&#7901;ng Giang</span></b></p>
  </td>
  <td width=309 valign=top style='width:231.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:127.9pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>Đ&#7840;I
  DI&#7878;N BÊN MUA</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:14.0pt;line-height:107%;font-family:"Times New Roman",serif'>{{$data->doanhnghiep->nguoidaidien}}</span></b></p>
  </td>
 </tr>
</table>

    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:3.0pt;
    margin-left:0cm;line-height:normal'><b><span lang=PL style='font-size:14.0pt;
    font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:3.0pt;
    margin-left:0cm;line-height:normal'><b><span lang=PL style='font-size:14.0pt;
    font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:3.0pt;
    margin-left:0cm;line-height:normal'><b><span lang=PL style='font-size:14.0pt;
    font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:3.0pt;
    margin-left:0cm;line-height:normal'><b><span lang=PL style='font-size:14.0pt;
    font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:3.0pt;
    margin-left:0cm;line-height:normal'><b><span lang=PL style='font-size:14.0pt;
    font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:3.0pt;
    margin-left:0cm;line-height:normal'><b><span lang=PL style='font-size:14.0pt;
    font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:3.0pt;
    margin-left:0cm;line-height:normal'><b><span lang=PL style='font-size:14.0pt;
    font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:3.0pt;
    margin-left:0cm;line-height:normal'><b><span lang=PL style='font-size:14.0pt;
    font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:3.0pt;
    margin-left:0cm;line-height:normal'><b><span lang=PL style='font-size:14.0pt;
    font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:3.0pt;
    margin-left:0cm;line-height:normal'><b><span lang=PL style='font-size:14.0pt;
    font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:3.0pt;
    margin-left:0cm;line-height:normal'><b><span lang=PL style='font-size:14.0pt;
    font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:3.0pt;
    margin-left:0cm;line-height:normal'><b><span lang=PL style='font-size:14.0pt;
    font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:3.0pt;
    margin-left:0cm;line-height:normal'><b><span lang=PL style='font-size:14.0pt;
    font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:3.0pt;
    margin-left:0cm;line-height:normal'><b><span lang=PL style='font-size:14.0pt;
    font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:3.0pt;
    margin-left:0cm;line-height:normal'><b><span lang=PL style='font-size:14.0pt;
    font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

<p class=MsoNormal align=center style='text-align:center'><b><span lang=DE
style='font-size:15.0pt;line-height:107%;font-family:"Times New Roman",serif'>PH&#7908;
L&#7908;C 01</span></b><i><span lang=PL style='font-size:13.0pt;line-height:
107%;font-family:"Times New Roman",serif'>: </span></i><b><span lang=DE
style='font-size:15.0pt;line-height:107%;font-family:"Times New Roman",serif'>B&#7842;NG
GIÁ CHI TI&#7870;T</span></b></p>

<p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:0cm;text-align:center'><i><span lang=DE
style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif;
color:black'>(Kèm theo H&#7907;p đ&#7891;ng s&#7889;:</span></i><i><span
lang=DE style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif;
color:black'> {{$data->mahd}})</span></i></p>

<div align=center>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="99%"
 style='border-collapse:collapse;border:none'>
 <tr style='height:17.3pt'>
  <td width="9%" style='width:9.04%;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:17.3pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><b><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>STT</span></b></p>
  </td>
  <td width="34%" style='width:34.86%;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:17.3pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><b><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>Kho&#7843;n
  m&#7909;c</span></b></p>
  </td>
  <td width="10%" valign=top style='width:10.6%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:17.3pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><b><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>Đơn
  v&#7883; tính</span></b></p>
  </td>
  <td width="13%" style='width:13.66%;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:17.3pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><b><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>S&#7889;
  lư&#7907;ng</span></b></p>
  </td>
  <td width="17%" style='width:17.04%;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:17.3pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><b><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>Đơn
  giá </span></b></p>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><b><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>(VNĐ)</span></b></p>
  </td>
  <td width="14%" style='width:14.8%;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:17.3pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><b><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>Thành
  ti&#7873;n (VNĐ)</span></b></p>
  </td>
 </tr>
 <tr style='height:43.1pt'>
  <td width="9%" style='width:9.04%;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:43.1pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><b><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif;
  color:black'>1</span></b></p>
  </td>
  <td width="34%" style='width:34.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:43.1pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><span lang=EN-US style='font-size:13.0pt;line-height:
  107%;font-family:"Times New Roman",serif;color:black'>Ph&#7847;n m&#7873;m C&#7893;ng
  thông tin đi&#7879;n t&#7917;</span></p>
  </td>
  <td width="10%" valign=top style='width:10.6%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:43.1pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><b><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif;
  color:black'>Năm</span></b></p>
  </td>
  <td width="13%" valign=top style='width:13.66%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:43.1pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif;
  color:black'>{{$data->soluong}}</span></p>
  </td>
  <td width="17%" valign=top style='width:17.04%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:43.1pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><b><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif;
  color:black'>{{number_format($data->dichvu->gia)}}</span></b></p>
  </td>
  <td width="14%" valign=top style='width:14.8%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:43.1pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif;
  color:black'>{{number_format($data->thanhtien)}}</span></p>
  </td>
 </tr>
 <tr style='height:17.3pt'>
  <td width="85%" colspan=5 valign=top style='width:85.2%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:17.3pt'>
  <p class=MsoNormal align=right style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:right'><b><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif;
  color:black'>T&#7893;ng ti&#7873;n chưa bao g&#7891;m thu&#7871; GTGT</span></b></p>
  </td>
  <td width="14%" valign=top style='width:14.8%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:17.3pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif;
  color:black'>{{number_format($data->thanhtien)}}</span></p>
  </td>
 </tr>
 <tr style='height:17.3pt'>
  <td width="85%" colspan=5 valign=top style='width:85.2%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:17.3pt'>
  <p class=MsoNormal align=right style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:right'><b><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif;
  color:black'>Thu&#7871; GTGT (Ph&#7847;n m&#7873;m là đ&#7889;i tu&#7907;ng
  không ch&#7883;u thu&#7871; GTGT)</span></b></p>
  </td>
  <td width="14%" valign=top style='width:14.8%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:17.3pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><b><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif;
  color:black'>\</span></b></p>
  </td>
 </tr>
 <tr style='height:17.3pt'>
  <td width="85%" colspan=5 valign=top style='width:85.2%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:17.3pt'>
  <p class=MsoNormal align=right style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:right'><b><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif;
  color:black'>T&#7893;ng c&#7897;ng</span></b></p>
  </td>
  <td width="14%" valign=top style='width:14.8%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:17.3pt'>
  <p class=MsoNormal align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif;
  color:black'>{{number_format($data->thanhtien)}}</span></p>
  </td>
 </tr>
</table>

</div>

<p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:3.0pt;
margin-left:0cm'><b><span lang=DE style='font-size:1.0pt;line-height:107%;
font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

<p class=MsoNormal style='margin-top:4.0pt;margin-right:0cm;margin-bottom:4.0pt;
margin-left:0cm'><b><span lang=EN-US style='font-size:13.0pt;line-height:107%;
font-family:"Times New Roman",serif'>B&#7857;ng ch&#7919;:</span></b><span
lang=EN-US style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif;
color:red'> </span><b><span lang=EN-US style='font-size:13.0pt;line-height:
107%;font-family:"Times New Roman",serif;color:black'>................................................................/.</span></b></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
letter-spacing:-.2pt'>Phụ lục này là phần không thể tách rời của Hợp đồng số </span><span lang=DE
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>{{$data->mahd}}</span><span lang=DE
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:red'> </span><span lang=DE style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;letter-spacing:-.2pt'>được lập thành 02 (hai) bản có giá trị pháp lý như nhau, mỗi Bên giữ 01 (một) bản, </span><span lang=DE style='font-size:
13.0pt;line-height:120%;font-family:"Times New Roman",serif'>và có hiệu lực kể từ ngày đại diện hợp pháp của hai Bên chính thức ký tên, đóng dấu./.</span></p>

<p class=MsoNormal align=center style='text-align:center;line-height:130%'><b><span
lang=DE style='font-size:13.0pt;line-height:130%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

<p class=MsoNormal align=center style='text-align:center;line-height:130%'><b><span
lang=DE style='font-size:13.0pt;line-height:130%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

<p class=MsoNormal align=center style='text-align:center;line-height:130%'><b><span
lang=DE style='font-size:15.0pt;line-height:130%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=DE
style='font-size:14.0pt;font-family:".VnTime",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=DE
style='font-size:14.0pt;font-family:".VnTime",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=DE
style='font-size:14.0pt;font-family:".VnTime",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=DE
style='font-size:14.0pt;font-family:".VnTime",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=DE
style='font-size:14.0pt;font-family:".VnTime",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=DE
style='font-size:14.0pt;font-family:".VnTime",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=DE
style='font-size:14.0pt;font-family:".VnTime",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=DE
style='font-size:14.0pt;font-family:".VnTime",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=DE
style='font-size:14.0pt;font-family:".VnTime",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=DE
style='font-size:14.0pt;font-family:".VnTime",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=DE
style='font-size:14.0pt;font-family:".VnTime",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=DE
style='font-size:14.0pt;font-family:".VnTime",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=DE
style='font-size:14.0pt;font-family:".VnTime",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=DE
style='font-size:14.0pt;font-family:".VnTime",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=DE
style='font-size:14.0pt;font-family:".VnTime",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=DE
style='font-size:14.0pt;font-family:".VnTime",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span lang=DE
style='font-size:14.0pt;font-family:".VnTime",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal align=center style='text-align:center;line-height:130%'><b><span
lang=DE style='font-size:15.0pt;line-height:130%;font-family:"Times New Roman",serif'>PH&#7908;
L&#7908;C 02</span></b></p>

<p class=MsoNormal align=center style='text-align:center;line-height:130%'><b><span
lang=DE style='font-size:15.0pt;line-height:130%;font-family:"Times New Roman",serif'>TÍNH
NĂNG PH&#7846;N M&#7872;M C&#7892;NG THÔNG TIN ĐI&#7878;N T&#7916;</span></b></p>

<p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:0cm;text-align:center'><i><span lang=DE
style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif;
color:black'>(Kèm theo H&#7907;p đ&#7891;ng s&#7889;:</span></i><i><span
lang=DE style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif;
color:black'> {{$data->mahd}})</span></i></p>

<p class=MsoNormal align=center style='text-align:center;line-height:130%'><span
lang=DE style='font-size:13.0pt;line-height:130%;font-family:"Times New Roman",serif;
color:black'>Th&#7901;i gian s&#7917; d&#7909;ng: ....... năm, tính t&#7915;
ngày ...... tháng ...... năm 20.......</span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=662
 style='margin-left:-28.6pt;border-collapse:collapse;border:none'>
 <thead>
  <tr style='height:12.7pt'>
   <td width=47 style='width:35.45pt;border:solid windowtext 1.0pt;padding:
   5.0pt 5.4pt 5.0pt 5.4pt;height:12.7pt'>
   <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-2.0pt;
   margin-bottom:0cm;margin-left:0cm;text-align:center;line-height:110%'><b><span
   lang=EN-US style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>STT</span></b></p>
   </td>
   <td width=132 style='width:99.25pt;border:solid windowtext 1.0pt;border-left:
   none;padding:5.0pt 5.4pt 5.0pt 5.4pt;height:12.7pt'>
   <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:0cm;
   margin-top:0cm;text-align:center;line-height:110%'><b><span lang=EN-US
   style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Tên
   tính năng</span></b></p>
   </td>
   <td width=482 style='width:361.45pt;border:solid windowtext 1.0pt;
   border-left:none;padding:5.0pt 5.4pt 5.0pt 5.4pt;height:12.7pt'>
   <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:0cm;
   margin-top:0cm;text-align:center;line-height:110%'><b><span lang=EN-US
   style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Mô
   t&#7843; tóm t&#7855;t</span></b></p>
   </td>
  </tr>
 </thead>
 <tr style='height:30.85pt'>
  <td width=662 colspan=3 style='width:496.15pt;border:solid windowtext 1.0pt;
  border-top:none;padding:5.0pt 5.4pt 5.0pt 5.4pt;height:30.85pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:0cm;margin-top:
  0cm;line-height:110%'><b><i><span lang=EN-US style='font-size:13.0pt;
  line-height:110%;font-family:"Times New Roman",serif'>Tính năng cơ b&#7843;n</span></i></b></p>
  </td>
 </tr>
 <tr style='height:12.7pt'>
  <td width=47 style='width:35.45pt;border:solid windowtext 1.0pt;border-top:
  none;padding:5.0pt 5.4pt 5.0pt 5.4pt;height:12.7pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-2.0pt;
  margin-bottom:0cm;margin-left:0cm;text-align:center;line-height:110%'><span
  lang=EN-US style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>1</span></p>
  </td>
  <td width=132 style='width:99.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:5.0pt 5.4pt 5.0pt 5.4pt;height:12.7pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:0cm;margin-top:
  0cm;line-height:110%'><span lang=EN-US style='font-size:13.0pt;line-height:
  110%;font-family:"Times New Roman",serif'>Giao di&#7879;n các trang</span></p>
  </td>
  <td width=482 style='width:361.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:5.0pt 5.4pt 5.0pt 5.4pt;height:12.7pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=FR
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=FR
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>L&#7921;a
  ch&#7885;n m&#7897;t trang m&#7851;u</span></p>
  </td>
 </tr>
 <tr style='height:13.8pt'>
  <td width=47 style='width:35.45pt;border:solid windowtext 1.0pt;border-top:
  none;padding:5.0pt 5.4pt 5.0pt 5.4pt;height:13.8pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-2.0pt;
  margin-bottom:0cm;margin-left:0cm;text-align:center;line-height:110%'><span
  lang=EN-US style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>2</span></p>
  </td>
  <td width=132 style='width:99.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:5.0pt 5.4pt 5.0pt 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:0cm;margin-top:
  0cm;line-height:110%'><span lang=EN-US style='font-size:13.0pt;line-height:
  110%;font-family:"Times New Roman",serif'>Qu&#7843;n tr&#7883; danh m&#7909;c</span></p>
  </td>
  <td width=482 style='width:361.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:5.0pt 5.4pt 5.0pt 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Cung
  c&#7845;p tính năng Thêm, s&#7917;a, xóa danh m&#7909;c d&#7877; dàng</span></p>
  </td>
 </tr>
 <tr style='height:115.45pt'>
  <td width=47 style='width:35.45pt;border:solid windowtext 1.0pt;border-top:
  none;padding:5.0pt 5.4pt 5.0pt 5.4pt;height:115.45pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-2.0pt;
  margin-bottom:0cm;margin-left:0cm;text-align:center;line-height:110%'><span
  lang=EN-US style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>3</span></p>
  </td>
  <td width=132 style='width:99.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:5.0pt 5.4pt 5.0pt 5.4pt;height:115.45pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:0cm;margin-top:
  0cm;line-height:110%'><span lang=EN-US style='font-size:13.0pt;line-height:
  110%;font-family:"Times New Roman",serif'>Qu&#7843;n l&yacute; tin t&#7913;c</span></p>
  </td>
  <td width=482 style='width:361.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:5.0pt 5.4pt 5.0pt 5.4pt;height:115.45pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Hi&#7875;n
  th&#7883; tin t&#7913;c theo danh m&#7909;c.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:25.5pt;text-indent:-11.3pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Courier New"'>-<span
  style='font:7.0pt "Times New Roman"'> </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Mỗi bài viết có thể thuộc nhiều chuyên mục khác nhau tránh việc người quản trị phải nhập nhiều lần cùng một nội dung.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Thêm,
  s&#7917;a, xóa tin t&#7913;c.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:25.5pt;text-indent:-11.3pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Courier New"'>-<span
  style='font:7.0pt "Times New Roman"'> </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Thêm,
  s&#7917;a, xóa linh ho&#7841;t, d&#7877; dàng.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:25.5pt;text-indent:-11.3pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Courier New"'>-<span
  style='font:7.0pt "Times New Roman"'> </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Đưa
  thêm các t&#7879;p đính kèm theo bài vi&#7871;t như: &#7843;nh, video minh h&#7885;a,
  t&#7879;p văn b&#7843;n.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Ki&#7875;m
  duy&#7879;t tin t&#7913;c.</span></p>
  </td>
 </tr>
 <tr style='height:19.0pt'>
  <td width=47 style='width:35.45pt;border:solid windowtext 1.0pt;border-top:
  none;padding:5.0pt 5.4pt 5.0pt 5.4pt;height:19.0pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-2.0pt;
  margin-bottom:0cm;margin-left:0cm;text-align:center;line-height:110%'><span
  lang=EN-US style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>4</span></p>
  </td>
  <td width=132 style='width:99.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:5.0pt 5.4pt 5.0pt 5.4pt;height:19.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:0cm;margin-top:
  0cm;line-height:110%'><span lang=EN-US style='font-size:13.0pt;line-height:
  110%;font-family:"Times New Roman",serif'>Qu&#7843;n l&yacute; t&igrave;m ki&#7871;m</span></p>
  </td>
  <td width=482 style='width:361.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:5.0pt 5.4pt 5.0pt 5.4pt;height:19.0pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Hi&#7875;n
  th&#7883; các g&#7907;i &yacute; liên quan đ&#7871;n các t&#7915; khóa c&#7847;n
  t&igrave;m ki&#7871;m.</span></p>
  </td>
 </tr>
 <tr style='height:46.5pt'>
  <td width=47 style='width:35.45pt;border:solid windowtext 1.0pt;border-top:
  none;padding:5.0pt 5.4pt 5.0pt 5.4pt;height:46.5pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-2.0pt;
  margin-bottom:0cm;margin-left:0cm;text-align:center;line-height:110%'><span
  lang=EN-US style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>5</span></p>
  </td>
  <td width=132 style='width:99.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:5.0pt 5.4pt 5.0pt 5.4pt;height:46.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:0cm;margin-top:
  0cm;line-height:110%'><span lang=EN-US style='font-size:13.0pt;line-height:
  110%;font-family:"Times New Roman",serif'>Qu&#7843;n l&yacute; banner</span></p>
  </td>
  <td width=482 style='width:361.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:5.0pt 5.4pt 5.0pt 5.4pt;height:46.5pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>V&#7883;
  trí banner theo trang, theo danh m&#7909;c ...</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Kéo thả đưa ra các banner chạy hai bên, banner popup hiển thị một cách dễ dàng</span></p>
  </td>
 </tr>
 <tr style='height:19.0pt'>
  <td width=47 style='width:35.45pt;border:solid windowtext 1.0pt;border-top:
  none;padding:5.0pt 5.4pt 5.0pt 5.4pt;height:19.0pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-2.0pt;margin-bottom:
  0cm;margin-left:7.1pt;line-height:110%'><span lang=EN-US style='font-size:
  13.0pt;line-height:110%;font-family:"Times New Roman",serif'>6</span></p>
  </td>
  <td width=132 style='width:99.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:5.0pt 5.4pt 5.0pt 5.4pt;height:19.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:0cm;margin-top:
  0cm;line-height:110%'><span lang=EN-US style='font-size:13.0pt;line-height:
  110%;font-family:"Times New Roman",serif'>Qu&#7843;n tr&#7883; giao di&#7879;n
  hi&#7875;n th&#7883;</span></p>
  </td>
  <td width=482 style='width:361.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:5.0pt 5.4pt 5.0pt 5.4pt;height:19.0pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Có thể tùy chỉnh giao diện cho nhiều trang: Trang chủ, các trang trong ...</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Thay đổi, thêm mới chỉnh sửa các vùng giao diện bằng các thao tác kéo thả cấu hình đơn giản với nhiều tiện ích để lựa chọn.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Cấu hình hệ thống trực quan: Thay thế Logo, Banner, Thay ảnh nền, màu nền, Thay đổi thông tin chân trang, Lựa chọn các khung hiển thị bài viết ...</span></p>
  </td>
 </tr>
 <tr style='height:63.5pt'>
  <td width=47 style='width:35.45pt;border:solid windowtext 1.0pt;border-top:
  none;padding:5.0pt 5.4pt 5.0pt 5.4pt;height:63.5pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-2.0pt;
  margin-bottom:0cm;margin-left:0cm;text-align:center;line-height:110%'><span
  lang=EN-US style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>7</span></p>
  </td>
  <td width=132 style='width:99.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:5.0pt 5.4pt 5.0pt 5.4pt;height:63.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:0cm;margin-top:
  0cm;line-height:110%'><span lang=EN-US style='font-size:13.0pt;line-height:
  110%;font-family:"Times New Roman",serif'>Các tính năng khác hỗ trợ</span></p>
  </td>
  <td width=482 style='width:361.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:5.0pt 5.4pt 5.0pt 5.4pt;height:63.5pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Bảng dữ liệu: Thời khóa biểu, Lịch công tác ...</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Thống kê bài viết: thống kê số lượng bài viết, tác giả ...</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Thống kê truy cập: thống kê số lượng người truy cập</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>H&#7887;i đáp</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Liên h&#7879;</span></p>
  </td>
 </tr>
 <tr style='height:8.75pt'>
  <td width=662 colspan=3 style='width:496.15pt;border:solid windowtext 1.0pt;
  border-top:none;padding:5.0pt 5.4pt 5.0pt 5.4pt;height:8.75pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:0cm;margin-top:
  0cm;line-height:110%'><b><span lang=EN-US style='font-size:13.0pt;line-height:
  110%;font-family:"Times New Roman",serif'>M&#7897;t s&#7889; tính năng khác</span></b></p>
  </td>
 </tr>
 <tr style='height:32.55pt'>
  <td width=47 style='width:35.45pt;border:solid windowtext 1.0pt;border-top:
  none;padding:5.0pt 5.4pt 5.0pt 5.4pt;height:32.55pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-2.0pt;
  margin-bottom:0cm;margin-left:0cm;text-align:center;line-height:110%'><span
  lang=EN-US style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>1</span></p>
  </td>
  <td width=132 style='width:99.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:5.0pt 5.4pt 5.0pt 5.4pt;height:32.55pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:0cm;margin-top:
  0cm;line-height:110%'><span lang=EN-US style='font-size:13.0pt;line-height:
  110%;font-family:"Times New Roman",serif'>Phân quy&#7873;n qu&#7843;n tr&#7883;</span></p>
  </td>
  <td width=482 style='width:361.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:5.0pt 5.4pt 5.0pt 5.4pt;height:32.55pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Hệ thống cho phép phân quyền cho các tài khoản người dùng với vai trò khác nhau: Phóng viên, Biên tập viên, Tổng biên tập ...</span></p>
  </td>
 </tr>
 <tr style='height:27.05pt'>
  <td width=47 style='width:35.45pt;border:solid windowtext 1.0pt;border-top:
  none;padding:5.0pt 5.4pt 5.0pt 5.4pt;height:27.05pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-2.0pt;
  margin-bottom:0cm;margin-left:0cm;text-align:center;line-height:110%'><span
  lang=EN-US style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>2</span></p>
  </td>
  <td width=132 style='width:99.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:5.0pt 5.4pt 5.0pt 5.4pt;height:27.05pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:0cm;margin-top:
  0cm;line-height:110%'><span lang=EN-US style='font-size:13.0pt;line-height:
  110%;font-family:"Times New Roman",serif'>C&#7845;u h&igrave;nh h&#7879; th&#7889;ng</span></p>
  </td>
  <td width=482 style='width:361.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:5.0pt 5.4pt 5.0pt 5.4pt;height:27.05pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Điều chỉnh tiêu đề website</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Điều chỉnh thông tin liên hệ và các cài đặt nâng cao khác</span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span lang=EN-US style='font-family:"Times New Roman",serif'>&nbsp;</span></p>

<p class=MsoNormal><span lang=EN-US style='font-family:"Times New Roman",serif'>&nbsp;</span></p>

<h1 style='margin:0cm'><span lang=DE style='font-size:13.0pt'>&nbsp;</span></h1>

<p class=MsoNormal><span lang=DE>&nbsp;</span></p>

<span lang=DE style='font-size:11.0pt;line-height:107%;font-family:"Calibri",sans-serif'><br
clear=all style='page-break-before:always'>
</span>

<p class=MsoNormal><span lang=DE>&nbsp;</span></p>

<h1 align=center style='margin:0cm;text-align:center'><span style='font-size:
13.0pt'>C&#7896;NG H&Ograve;A X&Atilde; H&#7896;I CH&#7910; NGH&#296;A
VI&#7878;T NAM</span></h1>

<h1 align=center style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:21.6pt;text-align:center;text-indent:-21.6pt'><u><span lang=EN-US
style='font-size:13.0pt'>Đ&#7897;c l&#7853;p - T&#7921; do - H&#7841;nh phúc</span></u></h1>

<h1 align=center style='text-align:center'><span lang=EN-US style='font-size:
5.0pt;font-weight:normal'>&nbsp;</span></h1>

<p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:0cm;text-align:center;line-height:110%'><b><span
lang=EN-US style='font-size:14.0pt;line-height:110%;font-family:"Times New Roman",serif'>BIÊN
B&#7842;N BẢN GIAO VÀ NGHI&#7878;M THU</span></b></p>

<p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:0cm;text-align:center;line-height:110%'><b><span
lang=EN-US style='font-size:14.0pt;line-height:110%;font-family:"Times New Roman",serif'>PH&#7846;N
M&#7872;M<span style='color:red'> </span><span style='color:black'>C&#7892;NG
THÔNG TIN ĐI&#7878;N T&#7916;</span></span></b></p>

<p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:0cm;text-align:center;line-height:110%'><span
lang=EN-US style='font-size:1.0pt;line-height:110%;font-family:"Times New Roman",serif;
color:black'>&nbsp;</span></p>

<p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:0cm;text-align:center;line-height:120%'><i><span
lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>(Kèm theo H&#7907;p đ&#7891;ng s&#7889;:</span></i><i><span
lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'> {{$data->mahd}})</span></i></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
31.7pt;line-height:120%'><span lang=DE style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif;color:black'>Căn cứ theo hợp đồng <span style='letter-spacing:-.2pt'>s&#7889;</span>: </span><i><span
lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>{{$data->mahd}} </span></i><span lang=DE
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>giữa Nhà trẻ Hoa Hồng và Viettel An Giang - Chi nhánh Tập đoàn Công nghiệp - Viễn thông Quân đội;</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-indent:31.7pt;line-height:120%'><span lang=DE
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>Căn cứ quá trình bàn giao thực tế,</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
31.7pt;line-height:120%'><span lang=DE style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>Hôm nay, ngày ..... tháng ..... năm 20....., đại diện Hai Bên cùng ký vào biên bản bàn giao Phần mềm Cổng thông tin điện tử với nội dung như sau:</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;line-height:120%'><b><span lang=DE style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black;letter-spacing:
-1.2pt'>BÊN MUA&nbsp;</span></b><b><span lang=DE style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>: </span></b><b><span
lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black; text-transform: uppercase'>{{$data->doanhnghiep->tendoanhnghiep}}</span></b></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>Người đại diện: {{$data->doanhnghiep->nguoidaidien}} Ch&#7913;c
v&#7909;: Hi&#7879;u trư&#7903;ng</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>Đi&#7879;n tho&#7841;i: </span><span lang=DE style='font-size:
13.0pt;line-height:120%;font-family:"Times New Roman",serif'>{{$data->doanhnghiep->sdt}}</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:6.0pt;
margin-left:92.15pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-92.15pt;line-height:15.0pt'><span lang=DE style='font-size:13.0pt;font-family:
"Times New Roman",serif;color:black'>Đ&#7883;a ch&#7881;: </span><span lang=DE
style='font-size:13.0pt;font-family:"Times New Roman",serif'>{{$data->doanhnghiep->diachi}}</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><b><span lang=DE style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;letter-spacing:-1.2pt'>BÊN BÁN:</span></b><b><span
lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>
<span style='letter-spacing:-1.2pt'>VIETTEL</span> AN GIANG - CHI NHÁNH <span
style='letter-spacing:-1.2pt'>T&#7852;P ĐOÀN CÔNG NGHI&#7878;P - VI&#7876;N
THÔNG QUÂN Đ&#7896;I</span></span></b></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>Ngư&#7901;i đ&#7841;i di&#7879;n: <b>NGUYỄN TRƯỜNG GIANG</b> Ch&#7913;c v&#7909;: <b>Giám đ&#7889;c</b></span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>(Theo giấy Ủy quyền số: 469/GUQ-CNVTQĐ ngày 27/01/2022 về việc thực hiện nhiệm vụ của Tập đoàn tại các Viettel Tỉnh/Thành phố)</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>Đi&#7879;n tho&#7841;i: 02966.555555 </span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;line-height:120%'><span lang=DE style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>Đ&#7883;a ch&#7881;:
269B Nguy&#7877;n Thái H&#7885;c, Phư&#7901;ng M&#7929; H&ograve;a, TP. </span><span
lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>Long Xuyên, t&#7881;nh An Giang.</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif'>Sau quá tr&igrave;nh bên giao th&#7921;c t&#7871;, Hai
Bên th&#7889;ng nh&#7845;t k&yacute; k&#7871;t Biên b&#7843;n bên giao và nghi&#7879;m
thu </span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;color:black'>Ph&#7847;n m&#7873;m</span><span
lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:red'> </span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;color:black'>C&#7893;ng thông tin đi&#7879;n
t&#7917;</span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'> v&#7899;i các đi&#7873;u kho&#7843;n sau đây:</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
0cm;line-height:120%'><b><span lang=NL style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></b><b><span lang=NL style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>1.	Bên Bán đã hoàn thành việc triển khai </span></b><b><span lang=EN-US style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>Ph&#7847;n m&#7873;m</span></b><b><span
lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:red'> </span></b><b><span lang=EN-US style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif;color:black'>C&#7893;ng thông tin đi&#7879;n
t&#7917; </span></b><b><span lang=NL style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>cho Bên Mua theo H&#7907;p đ&#7891;ng, c&#7909;
th&#7875; như sau:</span></b></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:14.2pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-14.2pt;line-height:120%'><i><span lang=NL style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>+ Tri&#7875;n khai h&#7879; th&#7889;ng
Ph&#7847;n m&#7873;m</span></i><span lang=NL> </span><i><span lang=NL
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>C&#7893;ng thông tin đi&#7879;n t&#7917;</span></i><i><span
lang=NL style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>:</span></i></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
27.0pt;line-height:120%'><span lang=NL style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>Bên Bán đã hoàn thành triển khai </span><span lang=NL style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black'>Ph&#7847;n m&#7873;m</span><span lang=NL> </span><span
lang=NL style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>Cổng thông tin điện tử </span><span lang=NL
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>với đầy đủ tính năng quy định tại Phụ lục 02 của Hợp đồng, đảm bảo các tính năng Phần mềm chạy đúng, chính xác, ổn định và đạt yêu cầu.</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:14.2pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-14.2pt;line-height:120%'><i><span lang=NL style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>+ Bàn giao Tài khoản quản trị Phần mềm và hướng dẫn sử dụng:</span></i></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:14.2pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-14.2pt;line-height:120%'><span lang=NL style='font-size:13.0pt;line-height:
120%;font-family:Wingdings'>-<span style='font:7.0pt "Times New Roman"'> </span></span><span
lang=NL style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>Bàn giao tài khoản quản trị Phần mềm: Bên Bán đã bàn giao và Bên Mua đã tiếp nhận đầy đủ thông tin tài khoản quản trị Phần mềm, cụ thể:</span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='margin-left:12.5pt;border-collapse:collapse;border:none'>
 <tr>
  <td width=47 valign=top style='width:35.4pt;border:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0cm;
  margin-bottom:6.0pt;margin-left:0cm;text-align:center'><b><span lang=NL
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>STT</span></b></p>
  </td>
  <td width=139 valign=top style='width:104.15pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0cm;
  margin-bottom:6.0pt;margin-left:0cm;text-align:center'><b><span lang=NL
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>Tài
  kho&#7843;n</span></b></p>
  </td>
  <td width=139 valign=top style='width:104.25pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0cm;
  margin-bottom:6.0pt;margin-left:0cm;text-align:center'><b><span lang=NL
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>M&#7853;t
  kh&#7849;u</span></b></p>
  </td>
  <td width=282 valign=top style='width:211.25pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0cm;
  margin-bottom:6.0pt;margin-left:0cm;text-align:center'><b><span lang=NL
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>Ghi
  chú</span></b></p>
  </td>
 </tr>
 <tr>
  <td width=47 style='width:35.4pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=NL
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>1</span></p>
  </td>
  <td width=139 valign=bottom style='width:104.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span lang=NL style='font-size:13.0pt;line-height:107%;
  font-family:"Times New Roman",serif'>&nbsp;</span></p>
  </td>
  <td width=139 valign=bottom style='width:104.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span lang=NL style='font-size:13.0pt;line-height:107%;
  font-family:"Times New Roman",serif'>&nbsp;</span></p>
  </td>
  <td width=282 style='width:211.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  6.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph'><span
  lang=NL style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>Tài
  kho&#7843;n qu&#7843;n tr&#7883; Ph&#7847;n m&#7873;m</span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:3.0pt;
margin-left:14.2pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-14.2pt;line-height:115%'><span lang=NL style='font-size:13.0pt;line-height:
115%;font-family:Wingdings'>-<span style='font:7.0pt "Times New Roman"'> </span></span><span
lang=NL style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif'>Hướng dẫn sử dụng: Bên Bán đã hướng dẫn, cung cấp tài liệu và Bên Mua đã tiếp nhận đầy đủ tài liệu về </span><span lang=NL style='font-size:13.0pt;
line-height:115%;font-family:"Times New Roman",serif;color:black'>Ph&#7847;n m&#7873;m</span><span
lang=NL style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif;
color:red'> </span><span lang=NL style='font-size:13.0pt;line-height:115%;
font-family:"Times New Roman",serif;color:black'>C&#7893;ng thông tin đi&#7879;n
t&#7917; </span><span lang=NL style='font-size:13.0pt;line-height:115%;
font-family:"Times New Roman",serif'>để Bên Mua làm tham chiếu trong suốt quá trình sử dụng Phần mềm, cụ thể:</span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='margin-left:12.5pt;border-collapse:collapse;border:none'>
 <tr>
  <td width=47 valign=top style='width:35.4pt;border:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center;line-height:115%'><b><span
  lang=NL style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif'>STT</span></b></p>
  </td>
  <td width=371 valign=top style='width:277.9pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center;line-height:115%'><b><span
  lang=NL style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif'>Tên
  tài li&#7879;u</span></b></p>
  </td>
  <td width=83 valign=top style='width:62.3pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center;line-height:115%'><b><span
  lang=NL style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif'>S&#7889;
  lư&#7907;ng</span></b></p>
  </td>
  <td width=109 valign=top style='width:81.6pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center;line-height:115%'><b><span
  lang=NL style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif'>Ghi
  chú</span></b></p>
  </td>
 </tr>
 <tr>
  <td width=47 style='width:35.4pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center;line-height:115%'><span
  lang=NL style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif'>1</span></p>
  </td>
  <td width=371 style='width:277.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
  line-height:115%'><span lang=NL style='font-size:13.0pt;line-height:115%;
  font-family:"Times New Roman",serif'>Tài li&#7879;u hư&#7899;ng d&#7851;n qu&#7843;n
  tr&#7883; Ph&#7847;n m&#7873;m</span></p>
  </td>
  <td width=83 style='width:62.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center;line-height:115%'><span
  lang=NL style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif'>1</span></p>
  </td>
  <td width=109 style='width:81.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center;line-height:115%'><span
  lang=NL style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif'>B&#7843;n
  m&#7873;m</span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
110%'><span lang=EN-US style='font-size:13.0pt;line-height:110%;font-family:
"Times New Roman",serif'></span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
110%'><i><span lang=EN-US style='font-size:13.0pt;line-height:110%;font-family:
"Times New Roman",serif'>+ </span></i><i><span lang=SV style='font-size:13.0pt;
line-height:110%;font-family:"Times New Roman",serif'>Đánh giá t&igrave;nh tr&#7841;ng
k&#7929; thu&#7853;t:</span></i></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:36.0pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-18.0pt;line-height:110%'><span lang=SV style='font-size:13.0pt;line-height:
110%;font-family:"Tahoma",sans-serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=SV style='font-size:13.0pt;line-height:110%;
font-family:"Times New Roman",serif;letter-spacing:-.05pt'>Tài liệu và Phần mềm Bên Bán cung cấp đáp ứng yêu cầu của bên Mua </span><span
lang=SV style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>
theo Hợp đồng.</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:36.0pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-18.0pt;line-height:110%'><span lang=EN-US style='font-size:13.0pt;line-height:
110%;font-family:"Tahoma",sans-serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US style='font-size:13.0pt;line-height:110%;
font-family:"Times New Roman",serif'>T&#7891;n t&#7841;i: Không.</span></p>

<p class=MsoListParagraph style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:36.0pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:20.0pt'><b><span lang=PT-BR style='font-size:
13.0pt;font-family:"Times New Roman",serif'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></b><b><span lang=PT-BR style='font-size:13.0pt;font-family:"Times New Roman",serif'>Trách
nhi&#7879;m c&ograve;n l&#7841;i c&#7911;a các Bên </span></b></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
115%'><span lang=PT-BR style='font-size:13.0pt;line-height:115%;font-family:
"Times New Roman",serif'>Bên Mua thanh toán cho Bên Bán theo quy định của Hợp đồng.</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
27.0pt;line-height:115%'><span lang=PT-BR style='font-size:13.0pt;line-height:
115%;font-family:"Times New Roman",serif'>Hai Bên cùng thống nhất ký Biên bản Bàn giao và Nghiệm thu Hợp đồng số </span><span
lang=DE style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif;
color:black'>{{$data->mahd}}.</span><i><span lang=DE
style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif;
color:black'> </span></i><span lang=PT-BR style='font-size:13.0pt;line-height:
115%;font-family:"Times New Roman",serif'>Hợp đồng này sẽ </span><span
lang=PL style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif'>t&#7921;
đ&#7897;ng thanh l&yacute; </span><span lang=DE style='font-size:13.0pt;
line-height:115%;font-family:"Times New Roman",serif;color:black'>sau khi hai
Bên hoàn thành toàn bộ nghĩa vụ của mình quy định trong Hợp đồng</span><span lang=PT-BR style='font-size:13.0pt;
line-height:115%;font-family:"Times New Roman",serif'>. </span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
31.5pt;line-height:115%'><span lang=PT-BR style='font-size:13.0pt;line-height:
115%;font-family:"Times New Roman",serif'>Biên bản này được lập thành 02 (hai) bản có giá trị pháp lý như nhau, mỗi Bên giữ 01 (một) bản./.</span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=617
 style='border-collapse:collapse'>
 <tr style='height:127.9pt'>
  <td width=309 valign=top style='width:231.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:127.9pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>Đ&#7840;I
  DI&#7878;N BÊN BÁN</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:14.0pt;line-height:107%;font-family:"Times New Roman",serif'>Nguy&#7877;n
  Trư&#7901;ng Giang</span></b></p>
  </td>
  <td width=309 valign=top style='width:231.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:127.9pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>Đ&#7840;I
  DI&#7878;N BÊN MUA</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:14.0pt;line-height:107%;font-family:"Times New Roman",serif'>{{$data->doanhnghiep->nguoidaidien}}</span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal align=center style='margin-top:4.0pt;margin-right:0cm;
margin-bottom:4.0pt;margin-left:0cm;text-align:center'><b><span lang=DE
style='font-size:15.0pt;line-height:107%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

<p class=MsoNormal><b><span lang=DE style='font-size:15.0pt;line-height:107%;
font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

</div>

</body>

</html>
