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
	{mso-style-name:"List Paragraph\,Norm\,Paragraph\,List Paragraph1\,???o\1EA1n c\1EE7a Danh s???ch\,List Paragraph11\,???o\1EA1n c\D83B\DE7ADanh s???ch\,List Paragraph111\,Nga 3\,List Paragraph2\,Colorful List - Accent 11\,List Paragraph21\,???o\1EA1n cDanh s???ch\,\00D0o\1EA1n c\D83B\DE7ADanh s???ch\,List Paragraph3\,\00D0o\1EA1n cDanh s???ch";
	mso-style-link:"List Paragraph Char\,Norm Char\,Paragraph Char\,List Paragraph1 Char\,???o\1EA1n c\1EE7a Danh s???ch Char\,List Paragraph11 Char\,???o\1EA1n c\D83B\DE7ADanh s???ch Char\,List Paragraph111 Char\,Nga 3 Char\,List Paragraph2 Char\,Colorful List - Accent 11 Char\,List Paragraph21 Char";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:36.0pt;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{mso-style-name:"List Paragraph\,Norm\,Paragraph\,List Paragraph1\,???o\1EA1n c\1EE7a Danh s???ch\,List Paragraph11\,???o\1EA1n c\D83B\DE7ADanh s???ch\,List Paragraph111\,Nga 3\,List Paragraph2\,Colorful List - Accent 11\,List Paragraph21\,???o\1EA1n cDanh s???ch\,\00D0o\1EA1n c\D83B\DE7ADanh s???ch\,List Paragraph3\,\00D0o\1EA1n cDanh s???chCxSpFir";
	mso-style-link:"List Paragraph Char\,Norm Char\,Paragraph Char\,List Paragraph1 Char\,???o\1EA1n c\1EE7a Danh s???ch Char\,List Paragraph11 Char\,???o\1EA1n c\D83B\DE7ADanh s???ch Char\,List Paragraph111 Char\,Nga 3 Char\,List Paragraph2 Char\,Colorful List - Accent 11 Char\,List Paragraph21 Char";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{mso-style-name:"List Paragraph\,Norm\,Paragraph\,List Paragraph1\,???o\1EA1n c\1EE7a Danh s???ch\,List Paragraph11\,???o\1EA1n c\D83B\DE7ADanh s???ch\,List Paragraph111\,Nga 3\,List Paragraph2\,Colorful List - Accent 11\,List Paragraph21\,???o\1EA1n cDanh s???ch\,\00D0o\1EA1n c\D83B\DE7ADanh s???ch\,List Paragraph3\,\00D0o\1EA1n cDanh s???chCxSpMid";
	mso-style-link:"List Paragraph Char\,Norm Char\,Paragraph Char\,List Paragraph1 Char\,???o\1EA1n c\1EE7a Danh s???ch Char\,List Paragraph11 Char\,???o\1EA1n c\D83B\DE7ADanh s???ch Char\,List Paragraph111 Char\,Nga 3 Char\,List Paragraph2 Char\,Colorful List - Accent 11 Char\,List Paragraph21 Char";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{mso-style-name:"List Paragraph\,Norm\,Paragraph\,List Paragraph1\,???o\1EA1n c\1EE7a Danh s???ch\,List Paragraph11\,???o\1EA1n c\D83B\DE7ADanh s???ch\,List Paragraph111\,Nga 3\,List Paragraph2\,Colorful List - Accent 11\,List Paragraph21\,???o\1EA1n cDanh s???ch\,\00D0o\1EA1n c\D83B\DE7ADanh s???ch\,List Paragraph3\,\00D0o\1EA1n cDanh s???chCxSpLas";
	mso-style-link:"List Paragraph Char\,Norm Char\,Paragraph Char\,List Paragraph1 Char\,???o\1EA1n c\1EE7a Danh s???ch Char\,List Paragraph11 Char\,???o\1EA1n c\D83B\DE7ADanh s???ch Char\,List Paragraph111 Char\,Nga 3 Char\,List Paragraph2 Char\,Colorful List - Accent 11 Char\,List Paragraph21 Char";
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
	{mso-style-name:"List Paragraph Char\,Norm Char\,Paragraph Char\,List Paragraph1 Char\,???o\1EA1n c\1EE7a Danh s???ch Char\,List Paragraph11 Char\,???o\1EA1n c\D83B\DE7ADanh s???ch Char\,List Paragraph111 Char\,Nga 3 Char\,List Paragraph2 Char\,Colorful List - Accent 11 Char\,List Paragraph21 Char";
	mso-style-link:"List Paragraph\,Norm\,Paragraph\,List Paragraph1\,???o\1EA1n c\1EE7a Danh s???ch\,List Paragraph11\,???o\1EA1n c\D83B\DE7ADanh s???ch\,List Paragraph111\,Nga 3\,List Paragraph2\,Colorful List - Accent 11\,List Paragraph21\,???o\1EA1n cDanh s???ch\,\00D0o\1EA1n c\D83B\DE7ADanh s???ch\,List Paragraph3\,\00D0o\1EA1n cDanh s???ch";
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
font-family:"Times New Roman",serif'>C&#7896;NG HO?? X&Atilde; H&#7896;I
CH&#7910; NGH&#296;A VI&#7878;T NAM</span></b></p>

<p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
line-height:115%'><b><span lang=EN-US style='font-size:13.0pt;line-height:115%;
font-family:"Times New Roman",serif'>??&#7897;c l&#7853;p - T&#7921; do -
H&#7841;nh ph??c</span></b></p>

<p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
line-height:115%'><b><span lang=EN-US style='font-size:13.0pt;line-height:115%;
font-family:"Times New Roman",serif'>------------ oOo ------------</span></b></p>

<p class=MsoNormal align=center style='margin-top:12.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:0cm;text-align:center;text-indent:1.0cm;
line-height:normal'><b><span lang=EN-US style='font-size:15.0pt;font-family:
"Times New Roman",serif;color:black'>H&#7906;P ??&#7890;NG MUA B??N</span></b></p>

<p class=MsoNormal align=center style='margin-top:12.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:0cm;text-align:center;line-height:normal'><b><span
lang=EN-US style='font-size:15.0pt;font-family:"Times New Roman",serif;
color:black'>PH&#7846;N M&#7872;M</span></b><b><span lang=EN-US
style='font-size:15.0pt;font-family:"Times New Roman",serif;color:red'> </span></b><b><span
lang=EN-US style='font-size:15.0pt;font-family:"Times New Roman",serif;
color:black'>C&#7892;NG TH??NG TIN ??I&#7878;N T&#7916;</span></b></p>

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
120%;font-family:"Times New Roman",serif'>C??n c&#7913; B&#7897; lu&#7853;t D??n
s&#7921; s&#7889; 91/2015/QH13 ng??y 24 th??ng 11 n??m 2015 c&#7911;a Qu&#7889;c h&#7897;i
n??&#7899;c C&#7897;ng h&ograve;a X&atilde; h&#7897;i Ch&#7911; ngh&#297;a Vi&#7879;t
Nam;</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
28.1pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>C??n c&#7913; Lu&#7853;t Th????ng m&#7841;i
s&#7889; 36/2005/QH11 ng??y 14 th??ng 6 n??m 2005 c&#7911;a Qu&#7889;c h&#7897;i
n??&#7899;c C&#7897;ng h&ograve;a X&atilde; h&#7897;i Ch&#7911; ngh&#297;a Vi&#7879;t
Nam;</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
28.1pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>C??n c&#7913; Lu&#7853;t C??ng ngh&#7879;
th??ng tin s&#7889; 67/2006/QH11 ng??y 29 th??ng 6 n??m 2006 c&#7911;a Qu&#7889;c h&#7897;i
n??&#7899;c C&#7897;ng h&ograve;a X&atilde; h&#7897;i Ch&#7911; ngh&#297;a Vi&#7879;t
Nam;</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
28.1pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>C??n c&#7913; Ngh&#7883; ??&#7883;nh s&#7889;
71/2007/N??-CP ng??y 03 th??ng 5 n??m 2007 c&#7911;a Ch??nh ph&#7911; quy ??&#7883;nh
chi ti&#7871;t v??? h??&#7899;ng d&#7851;n th&#7921;c hi&#7879;n m&#7897;t s&#7889;
??i&#7873;u c&#7911;a Lu&#7853;t C??ng ngh&#7879; th??ng tin v&#7873; c??ng nghi&#7879;p
c??ng ngh&#7879; th??ng tin;</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
28.1pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>C??n c&#7913; nhu c&#7847;u v??? kh&#7843;
n??ng c&#7911;a hai B??n,</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
28.1pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>H??m nay, ng??y 01 th??ng 07 n??m 2022,
t&#7841;i {{$data->doanhnghiep->tendoanhnghiep}} ch??ng t??i ??&#7841;i di&#7879;n cho c??c B??n
k&yacute; k&#7871;t H&#7907;p ??&#7891;ng, g&#7891;m c??:</span></p>

<p class=MsoNormal style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm'><b><span lang=EN-US style='font-size:13.0pt;line-height:
107%;font-family:"Times New Roman",serif;letter-spacing:-1.2pt'>B??N MUA&nbsp;</span></b><b><span
lang=EN-US style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>:
</span></b><b><span lang=EN-US style='font-size:13.0pt;line-height:107%;
font-family:"Times New Roman",serif;text-transform: uppercase'>{{$data->doanhnghiep->tendoanhnghiep}}</span></b></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:6.0pt;
margin-left:92.15pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-92.15pt;line-height:15.0pt'><span lang=EN-US style='font-size:13.0pt;
font-family:"Times New Roman",serif'>Ng??&#7901;i ??&#7841;i di&#7879;n: <span style='text-transform: uppercase'>{{$data->doanhnghiep->nguoidaidien}}</span> Ch&#7913;c
v&#7909;: Hi&#7879;u tr??&#7903;ng</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:6.0pt;
margin-left:92.15pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-92.15pt;line-height:15.0pt'><span lang=EN-US style='font-size:13.0pt;
font-family:"Times New Roman",serif'>??&#7883;a ch&#7881;: {{$data->doanhnghiep->diachi}}</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
115%'><a name="OLE_LINK1"></a><a name="OLE_LINK2"><span lang=EN-US
style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif'>Quy&#7871;t
??&#7883;nh th??nh l&#7853;p/Gi&#7845;y ch&#7913;ng nh&#7853;n ????ng k&yacute;
doanh nghi&#7879;p s&#7889;: ..............................</span></a></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
115%'><span lang=EN-US style='font-size:13.0pt;line-height:115%;font-family:
"Times New Roman",serif'>N??i c&#7845;p: UBND T???nh An Giang Ng??y c&#7845;p: ...................................</span></p>

<p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-justify:
inter-ideograph;line-height:15.0pt'><span lang=EN-US style='font-size:13.0pt;
font-family:"Times New Roman",serif'>??i&#7879;n tho&#7841;i: {{$data->doanhnghiep->coquan}}  Fax:
....................</span></p>

<p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-justify:
inter-ideograph;line-height:15.0pt'><span lang=EN-US style='font-size:13.0pt;
font-family:"Times New Roman",serif'>M&atilde; s&#7889; thu&#7871;: {{$data->doanhnghiep->mst}}</span></p>

<p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-justify:
inter-ideograph;line-height:15.0pt'><span lang=EN-US style='font-size:13.0pt;
font-family:"Times New Roman",serif'>T??i kho&#7843;n:
.................................................................................</span></p>

<p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-justify:
inter-ideograph;line-height:15.0pt'><span lang=EN-US style='font-size:13.0pt;
font-family:"Times New Roman",serif'>Ng??n h??ng: ....................................................................</span></p>

<p class=MsoNormal style='margin-bottom:6.0pt'><b><span lang=EN-US
style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>B??N
B??N<a name="OLE_LINK7"></a><a name="OLE_LINK8">: VIETTEL AN GIANG - CHI NH??NH T&#7852;P
    ??O??N C??NG NGHI&#7878;P - VI&#7876;N TH??NG QU??N ??&#7896;I</a></span></b></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:6.0pt;
margin-left:92.15pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-92.15pt;line-height:15.0pt'><a name="_Hlk71633277"><span lang=EN-US
style='font-size:13.0pt;font-family:"Times New Roman",serif'>Ng??&#7901;i ??&#7841;i
di&#7879;n: <b>NGUY&#7876;N TR??&#7900;NG GIANG</b> Ch&#7913;c v&#7909;:
<b>Gi??m ??&#7889;c</b></span></a></p>

<p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-justify:
inter-ideograph;line-height:15.0pt'><span lang=EN-US style='font-size:13.0pt;
font-family:"Times New Roman",serif'>(Theo gi&#7845;y &#7910;y quy&#7873;n s&#7889;:
469/GUQ-CNVTQ?? ng??y 27/01/2022 v&#7873; vi&#7879;c th&#7921;c hi&#7879;n nhi&#7879;m
v&#7909; c&#7911;a T&#7853;p ??o??n t&#7841;i c??c Viettel T&#7881;nh/Th??nh ph&#7889;)</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:6.0pt;
margin-left:92.15pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-92.15pt;line-height:15.0pt'><span lang=EN-US style='font-size:13.0pt;
font-family:"Times New Roman",serif'>??&#7883;a ch&#7881;: 269B Nguy&#7877;n
Th??i H&#7885;c, Ph??&#7901;ng M&#7929; H&ograve;a, TP. Long Xuy??n, t&#7881;nh An
Giang.</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
115%'><span lang=EN-US style='font-size:13.0pt;line-height:115%;font-family:
"Times New Roman",serif'>Gi&#7845;y ch&#7913;ng nh&#7853;n ????ng k&yacute; ho&#7841;t
??&#7897;ng chi nh??nh s&#7889;: 0100109106-041</span></p>

<p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-justify:
inter-ideograph;line-height:15.0pt'><span lang=EN-US style='font-size:13.0pt;
font-family:"Times New Roman",serif'>??i&#7879;n tho&#7841;i: 02966.555555</span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
1.0cm;line-height:115%'><span lang=EN-US style='font-size:13.0pt;line-height:
115%;font-family:"Times New Roman",serif;color:black'>B??n Mua v?? B??n B??n sau
????y ????&#7907;c g&#7885;i ri??ng l?? "B??n" v?? g&#7885;i chung l?? "c??c B??n" ho&#7863;c
"hai B??n".</span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;line-height:115%'><span class=dieuChar><span lang=EN-US
style='font-size:13.0pt;line-height:115%;color:black;font-weight:normal'>Sau
khi b??n b&#7841;c v?? th&#7887;a thu&#7853;n, C??c B??n th&#7889;ng nh&#7845;t
k&yacute; k&#7871;t H&#7907;p ??&#7891;ng mua b??n Ph&#7847;n m&#7873;m C&#7893;ng
th??ng tin ??i&#7879;n t&#7917; (sau ????y g&#7885;i t&#7855;t l?? "H&#7907;p ??&#7891;ng&quot;)
v&#7899;i c??c ??i&#7873;u kho&#7843;n v?? ??i&#7873;u ki&#7879;n c&#7909; th&#7875;
nh?? sau:</span></span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;line-height:115%'><b><span lang=EN-US style='font-size:13.0pt;
line-height:115%;font-family:"Times New Roman",serif;color:black'>??I&#7872;U 1.
GI&#7842;I TH??CH T&#7914; NG&#7918; </span></b></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
1.0cm;line-height:115%'><span lang=EN-US style='font-size:13.0pt;line-height:
115%;font-family:"Times New Roman",serif;color:black'>Trong H&#7907;p ??&#7891;ng
n??y, c??c t&#7915; ng&#7919; d??&#7899;i ????yy ????&#7907;c hi&#7875;u nh?? sau:</span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
115%'><span lang=EN-US style='font-size:13.0pt;line-height:115%;font-family:
"Times New Roman",serif;color:black'>1.1. <b>"H&#7907;p ??&#7891;ng"</b> l?? s??? th???a thu???n gi???a B??n Mua v?? B??n B??n, ???????c th??? hi???n b???ng v??n b???n n??y, ???????c hai B??n k?? k???t, bao g???m c??? Ph??? l???c v?? t??i li???u k??m theo.</span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black'>1.2. <b>"Gi?? tr&#7883; h&#7907;p
    ??&#7891;ng"</b> l?? t???ng s??? ti???n m?? B??n Mua ph???i tr??? cho B??n B??n theo H???p ?????ng.</span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black'>1.3. <b>"Ph&#7847;n m&#7873;m"/ "</b></span><b><span
lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>Ph&#7847;n m&#7873;m</span></b><span lang=EN-US> </span><b><span
lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>C&#7893;ng th??ng tin ??i&#7879;n t&#7917;" </span></b><span
lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>l?? c??c h???ng m???c thu???c ph???m vi cung c???p quy ?????nh t???i H???p ?????ng n??y m?? B??n B??n ph???i cung c???p cho B??n Mua.</span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black'>1.4. <b>"??&#7883;a ch&#7881; truy
c&#7853;p"</b> l?? ?????a ch??? c???a website m?? B??n B??n b??n giao cho B??n Mua.</span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black'>1.5. <b>"T??i kho&#7843;n qu&#7843;n
tr&#7883;"</b> l?? T??i kho???n m?? B??n B??n b??n giao cho B??n Mua ????? s??? d???ng Ph???n m???m.</span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black;letter-spacing:-.2pt'>1.6. </span><b><span
lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
letter-spacing:-.2pt'>"Ng??y"</span></b><span lang=EN-US style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;letter-spacing:-.2pt'> l?? ng??y d????ng l???ch, ???????c t??nh li??n t???c, k??? c??? th??? b???y, ch??? nh???t v?? ng??y ngh??? l???, t???t theo quy ?????nh c???a ph??p lu???t.</span></span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black;letter-spacing:-.2pt'>1.7. </span><b><span
lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
letter-spacing:-.2pt'>"Ng??y l??m vi&#7879;c"</span></b><span lang=EN-US
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
letter-spacing:-.2pt'> l?? ng??y d????ng l???ch, tr??? th??? b???y, ch??? nh???t v?? ng??y ngh??? l???, t???t theo quy ?????nh c???a ph??p lu???t.</span></span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><b><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black'>??I&#7872;U 2. PH&#7840;M VI CUNG
C&#7844;P, TH??NH PH&#7846;N C&#7910;A H&#7906;P ??&#7890;NG</span></b></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><b><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif'>2.1. <span style='color:black'>Ph&#7841;m vi cung
c&#7845;p:</span></span></b></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black'>- B??n Mua ??&#7891;ng &yacute; mua v?? B??n
B??n ??&#7891;ng &yacute; b??n </span><span lang=EN-US style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>Ph&#7847;n m&#7873;m</span><span
lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:red'> </span><b><span lang=EN-US style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif;color:black'>C&#7893;ng th??ng tin ??i&#7879;n
t&#7917;</span></b><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;color:black'> </span><span lang=EN-US
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>theo danh m???c, s??? l?????ng, gi?? c???, t??nh n??ng quy ?????nh t???i c??c Ph??? l???c ????nh k??m. C??c Ph??? l???c l?? m???t ph???n kh??ng th??? t??ch r???i c???a H???p ?????ng n??y.</span></p>

<p class=MsoNormal style='margin-top:1.5pt;margin-right:0cm;margin-bottom:1.5pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
110%'><span lang=EN-US style='font-size:13.0pt;line-height:110%;font-family:
"Times New Roman",serif;color:black'>- Ph???n m???m C???ng th??ng tin ??i???n t??? l?? ??i???m truy c???p t???p trung, t??ch h???p c??c k??nh th??ng tin c??c d???ch v???, ???ng d???ng, l?? s???n ph???m ph???n m???m ???????c ph??t tri???n tr??n m???t s???n ph???m c???ng l??i, th???c hi???n trao ?????i th??ng tin, d??? li???u v???i c??c h??? th???ng th??ng tin, ?????ng th???i cung c???p v?? trao ?????i v???i ng?????i s??? d???ng th??ng qua m???t ph????ng th???c th???ng nh???t tr??n n???n t???ng web t???i b???t k??? th???i ??i???m n??o v?? b???t k??? ????u.</span></p>

<p class=MsoNormal style='margin-bottom:0cm;text-align:justify;text-justify:
inter-ideograph;line-height:115%'><b><span lang=EN-US style='font-size:13.0pt;
line-height:115%;font-family:"Times New Roman",serif'>2.2. Th??nh ph&#7847;n
c&#7911;a<span style='color:black'> H&#7907;p ??&#7891;ng v?? th&#7913; t&#7921;
    ??u ti??n ph??p l&yacute; nh?? sau:</span></span></b></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:-.4pt;margin-bottom:
2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
line-height:115%'><span lang=EN-US style='font-size:13.0pt;line-height:115%;
font-family:"Times New Roman",serif;color:black'>2.2.1. V??n b???n H???p ?????ng (k??m theo c??c Ph??? l???c);</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:-.4pt;margin-bottom:
2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
line-height:115%'><span lang=EN-US style='font-size:13.0pt;line-height:115%;
font-family:"Times New Roman",serif;color:black'>2.2.2. C??c t??i li???u k??m theo kh??c (n???u c??).</span></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><b><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black'>??I&#7872;U 3. TI&#7870;N ??&#7896; CUNG
C&#7844;P, B??N GIAO V?? NGHI&#7878;M THU PH&#7846;N M&#7872;M</span></b></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:.05pt;margin-bottom:
2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
line-height:110%'><b><span lang=EN-US style='font-size:13.0pt;line-height:110%;
font-family:"Times New Roman",serif;color:black'>3.1. Ti&#7871;n ??&#7897; cung
c&#7845;p:</span></b><span lang=EN-US style='font-size:13.0pt;line-height:110%;
font-family:"Times New Roman",serif;color:black'> B??n B??n b??n giao Ph???n m???m (bao g???m ?????a ch??? truy c???p v?? T??i kho???n qu???n tr???) cho B??n Mua trong v??ng t???i ??a ba (03) ng??y l??m vi???c k??? t??? ng??y H???p ?????ng c?? hi???u l???c.</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:.05pt;margin-bottom:
2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
line-height:110%'><b><span lang=EN-US style='font-size:13.0pt;line-height:110%;
font-family:"Times New Roman",serif;color:black'>3.2. B??n giao v?? nghi&#7879;m
thu: </span></b></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:.05pt;margin-bottom:
2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
line-height:110%'><span lang=EN-US style='font-size:13.0pt;line-height:110%;
font-family:"Times New Roman",serif;color:black'>- T???i th???i ??i???m B??n B??n b??n giao Ph???n m???m, hai B??n s??? k?? k???t Bi??n b???n b??n giao v?? nghi???m thu Ph???n m???m.</span></p>

<p class=MsoNormal style='margin-top:2.4pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
117%'><span lang=EN-US style='font-size:13.0pt;line-height:117%;font-family:
"Times New Roman",serif;color:black'>- Trong v??ng ba (03) ng??y l??m vi???c k??? t??? ng??y hai B??n k?? Bi??n b???n b??n giao v?? nghi???m thu Ph???n m???m, B??n B??n ph???i cung c???p cho B??n Mua c??c t??i li???u sau:</span></p>

<p class=MsoNormal style='margin-top:2.4pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
9.0pt;line-height:122%'><span lang=EN-US style='font-size:13.0pt;line-height:
122%;font-family:"Times New Roman",serif;color:black'>+ T??i li???u h?????ng d???n s??? d???ng Ph???n m???m;</span></p>

<p class=MsoNormal style='margin-top:2.4pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
9.0pt;line-height:122%'><span lang=EN-US style='font-size:13.0pt;line-height:
122%;font-family:"Times New Roman",serif;color:black'>+ C??c t??i li???u kh??c (n???u c??).</span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;line-height:120%'><b><span lang=EN-US style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>??I&#7872;U 4.
GI?? TR&#7882; H&#7906;P ??&#7890;NG, TH&#7900;I H&#7840;N V?? PH????NG TH&#7912;C
THANH TO??N</span></b></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><b><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black'>4.1. Gi?? tr&#7883; H&#7907;p ??&#7891;ng: {{number_format($data->thanhtien)}} VN??.</span></b><b><span
lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black;background:yellow'> </span></b></p>

<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><i><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black'>(B&#7857;ng ch&#7919;:
...................................................................................
??&#7891;ng/.)</span></i></p>

<p class=MsoNormal style='margin-top:1.5pt;margin-right:.55pt;margin-bottom:
1.5pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
line-height:110%'><span lang=EN-US style='font-size:13.0pt;line-height:110%;
font-family:"Times New Roman",serif;color:black'>????n gi?? v?? s??? l?????ng Ph???n m???m ???????c quy ?????nh chi ti???t t???i Ph??? l???c 01 k??m theo H???p ?????ng n??y.</span></p>

<p class=MsoNormal style='margin-top:1.5pt;margin-right:.55pt;margin-bottom:
1.5pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
line-height:110%'><span lang=EN-US style='font-size:13.0pt;line-height:110%;
font-family:"Times New Roman",serif;color:black'>T???ng gi?? tr??? H???p ?????ng n??u tr??n ???? bao g???m c??c lo???i thu???, ph??, l??? ph?? (n???u c??) theo quy ?????nh c???a ph??p lu???t.
</span></p>

<p class=MsoNormal style='margin-top:1.5pt;margin-right:.55pt;margin-bottom:
1.5pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
line-height:110%'><i><span lang=EN-US style='font-size:13.0pt;line-height:110%;
font-family:"Times New Roman",serif;color:black'>Ghi ch??: Ph&#7847;n m&#7873;m
l?? ??&#7889;i t??&#7907;ng kh??ng ch&#7883;u thu&#7871; gi?? tr&#7883; gia t??ng.</span></i></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
117%'><b><span lang=EN-US style='font-size:13.0pt;line-height:117%;font-family:
"Times New Roman",serif;color:black'>4.2. Th&#7901;i h&#7841;n v?? ph????ng
th&#7913;c thanh to??n:</span></b></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
117%'><b><span lang=EN-US style='font-size:13.0pt;line-height:117%;font-family:
"Times New Roman",serif;color:black'>4.2.1. Th&#7901;i h&#7841;n thanh to??n:</span></b><span
lang=EN-US style='font-size:13.0pt;line-height:117%;font-family:"Times New Roman",serif;
color:black'> </span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
31.7pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif;color:black'>B??n Mua thanh to??n cho B??n B??n 100% gi?? tr??? H???p ?????ng l??m 01 (m???t) l???n trong v??ng ??????.. (???..) ng??y l??m vi???c sau khi hai B??n k?? Bi??n b???n b??n giao v?? nghi???m thu Ph???n m???m, ?????ng th???i B??n Mua ???? nh???n ???????c h??a ????n t??i ch??nh h???p l??? t??? B??n B??n.</span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:1.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
117%'><b><span lang=EN-US style='font-size:13.0pt;line-height:117%;font-family:
"Times New Roman",serif;color:black'>4.2.2. Ph????ng th&#7913;c thanh to??n:</span></b></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
31.7pt;line-height:120%'><span lang=DE style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>Ti???n m???t, chuy???n kho???n ho???c c??c h??nh th???c thanh to??n h???p l??? kh??c theo th???a thu???n c???a c??c B??n.</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'> Th??ng
tin </span><span lang=NL style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif'>t??i kho&#7843;n c&#7911;a B??n B??n:</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
36.0pt;line-height:120%'><i><span lang=NL style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>????n v&#7883; th&#7909; h??&#7903;ng: <b>T&#7853;p
    ??o??n C??ng nghi&#7879;p - Vi&#7877;n th??ng Qu??n ??&#7897;i</b></span></i></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
36.0pt;line-height:120%'><i><span lang=NL style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>??&#7883;a ch&#7881;: <b>L?? D26, ng?? 3, ???????ng T??n Th???t Thuy???t, ph?????ng Y??n H??a, qu???n C???u Gi???y, H?? N???i</b></span></i></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
36.0pt;line-height:120%'><i><span lang=NL style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>S&#7889; t??i kho&#7843;n: <b>0514100060101</b></span></i></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
36.0pt;line-height:120%'><i><span lang=NL style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>T&#7841;i ng??n h??ng: <b>TMCP Qu??n ??&#7897;i
- Chi Nh??nh ??i&#7879;n Bi??n Ph&#7911; </b></span></i></p>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt'><a name="_Toc287339765"><b><span lang=NL
style='font-size:13.0pt;font-family:"Times New Roman",serif'>??I&#7872;U 5.
QUY&#7872;N V?? NGH&#296;A V&#7908; C&#7910;A C??C B??N</span></b></a></p>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt'><b><span lang=NL style='font-size:13.0pt;
font-family:"Times New Roman",serif'>5.1. Quy&#7873;n v?? ngh&#297;a v&#7909;
c&#7911;a B??n Mua</span></b></p>

<p class=MsoNormal style='margin-top:1.5pt;margin-right:0cm;margin-bottom:1.5pt;
margin-left:1.0cm;text-align:justify;text-justify:inter-ideograph;line-height:
110%'><span lang=IT style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif;
letter-spacing:-.4pt'>B??n Mua c?? c??c quy???n v?? ngh??a v??? sau ????y:</span></p>

<p class=MsoListParagraphCxSpFirst style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>???????c quy???n y??u c???u B??n B??n h??? tr??? h?????ng d???n, ????o t???o s??? d???ng Ph???n m???m trong th???i gian hi???u l???c c???a H???p ?????ng.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>???????c s??? d???ng phi??n b???n m???i nh???t c???a Ph???n m???m.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>???????c b??n giao t??i kho???n qu???n tr??? Ph???n m???m, to??n quy???n s??? h???u t??i kho???n ???????c B??n B??n b??n giao v?? n???i dung d??? li???u do B??n Mua t???o l???p. B??n Mua ch???u m???i tr??ch nhi???m tr?????c ph??p lu???t v??? vi???c s??? d???ng Ph???n m???m v?? n???i dung d??? li???u do B??n Mua t???o l???p tr??n Ph???n m???m.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Ch???u tr??ch nhi???m v??? vi???c b???o m???t th??ng tin t??i kho???n qu???n tr??? Ph???n m???m v?? to??n b??? c??c ho???t ?????ng ???????c th???c hi???n b???i t??i kho???n n??y. Th??ng b??o ngay cho B??n Mua n???u nghi ng??? hay bi???t r???ng th??ng tin t??i kho???n qu???n tr??? Ph???n m???m ???? b??? l??? th??ng tin ho???c b??? chi???m quy???n s??? d???ng.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Thanh to??n ?????y ????? v?? ????ng h???n gi?? tr??? H???p ?????ng theo quy ?????nh t???i ??i???u 4 c???a H???p ?????ng, tr??? tr?????ng h???p hai B??n c?? th???a thu???n kh??c.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>K???p th???i th??ng b??o cho B??n B??n c??c l???i ph??t sinh trong qu?? tr??nh s??? d???ng Ph???n m???m.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:37.5pt;text-align:justify;
text-justify:inter-ideograph;text-indent:-18.0pt'><span lang=IT
style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif'>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:115%;
font-family:"Times New Roman",serif'>Th??ng b??o k???p th???i cho B??n B??n trong tr?????ng h???p c?? m???t b??n th??? ba tr???c ti???p ho???c gi??n ti???p khi???u n???i/khi???u ki???n v??? vi???c Ph???n m???m do B??n B??n cung c???p theo H???p ?????ng vi ph???m b???n quy???n. B??n Mua s??? kh??ng ???????c t??? ?? ch???p nh???n khi???u n???i c???a b??n th??? ba. Theo y??u c???u c???a B??n B??n, B??n Mua s??? ph???i h???p v???i B??n B??n b???o v??? quy???n v?? l???i ??ch h???p ph??p c???a B??n B??n tr?????c m???i khi???u n???i/khi???u ki???n c???a b??n th??? ba.</span></p>

<p class=MsoListParagraphCxSpLast style='margin-top:2.25pt;margin-right:0cm;
margin-bottom:2.25pt;margin-left:37.5pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:112%'><span lang=IT style='font-size:13.0pt;
line-height:112%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:112%;
font-family:"Times New Roman",serif'>?????m b???o an to??n b???o m???t th??ng tin v??? nh???ng n???i dung, t??nh n??ng s???n ph???m v?? to??n b??? n???i dung m?? B??n B??n ????o t???o, h?????ng d???n B??n Mua khi s??? d???ng Ph???n m???m.</span></p>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt'><b><span lang=IT style='font-size:13.0pt;
font-family:"Times New Roman",serif'>5.2. Quy&#7873;n v?? ngh&#297;a v&#7909;
c&#7911;a B??n B??n</span></b></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:1.0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=IT style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
letter-spacing:-.4pt'>B??n B??n c?? c??c quy???n v?? ngh??a v??? sau ????y:</span></p>

<p class=MsoListParagraphCxSpFirst style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:36.0pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;letter-spacing:-.3pt'>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;letter-spacing:-.3pt'>Y??u c???u B??n Mua th???c hi???n ????ng th???a thu???n, cam k???t theo quy ?????nh c???a H???p ?????ng n??y.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.5pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>H?????ng d???n B??n Mua qu???n l?? v?? s??? d???ng ph???n m???m theo ????ng quy ?????nh, quy tr??nh c???a B??n B??n.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.5pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>B??n giao t??i kho???n qu???n tr??? Ph???n m???m cho B??n Mua.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.5pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Kh&#7855;c ph&#7909;c c??c l&#7895;i ph??t
sinh trong qu?? tr&igrave;nh x??y d&#7921;ng v?? ph??t tri&#7875;n Ph&#7847;n
m&#7873;m trong th&#7901;i gian hi&#7879;u l&#7921;c c&#7911;a H&#7907;p
??&#7891;ng tr&#7915; c??c </span><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>h&#7887;ng h??c x&#7843;y
ra do nguy??n nh??n b&#7845;t kh&#7843; kh??ng </span><span lang=IT
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>ho&#7863;c do l&#7895;i c&#7911;a</span><span lang=IT
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>
B??n Mua.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.5pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Kh??a T??i kho???n qu???n tr??? Ph???n m???m trong tr?????ng h???p B??n Mua c?? h??nh vi vi ph???m H???p ?????ng.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.5pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>C?? quy???n cung c???p th??ng tin c???a B??n Mua khi c?? y??u c???u c???a c?? quan qu???n l?? nh?? n?????c c?? th???m quy???n theo quy ?????nh c???a Ph??p lu???t.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.5pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>???????c mi???n tr??? m???i tr??ch nhi???m ph??t sinh kh??ng ph???i do l???i c???a Viettel trong qu?? tr??nh B??n Mua s??? d???ng Ph???n m???m.</span></p>

<p class=MsoListParagraphCxSpLast style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:37.5pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:120%'><span lang=IT style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IT style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Th??ng b??o cho B??n Mua trong tr?????ng h???p B??n B??n th???c hi???n k??? ho???ch n??ng c???p, tu b???, s???a ch???a Ph???n m???m ????? ?????m b???o ch???t l?????ng ho???t ?????ng c???a Ph???n m???m.</span></p>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt;background:white'><b><span lang=IT
style='font-size:13.0pt;font-family:"Times New Roman",serif;color:black'>??I&#7872;U
6. ??&#7846;U M&#7888;I LI??N H&#7878; V?? NH&#7852;N B??N GIAO, NGHI&#7878;M THU</span></b></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:36.0pt;line-height:120%;background:white'><span lang=IT
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>Hai B??n th???ng nh???t ?????u m???i li??n h???, nh???n b??n giao, nghi???m thu v?? tri???n khai th???c hi???n c??c n???i dung c???a H???p ?????ng nh?? sau:</span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='background:white;border-collapse:collapse;border:none'>
 <tr>
  <td width=313 valign=top style='width:234.85pt;border:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
  text-indent:0cm;line-height:120%'><b><span lang=IT style='font-size:13.0pt;
  line-height:120%;font-family:"Times New Roman",serif;color:black'>B??n Mua</span></b></p>
  <p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
  text-indent:0cm;line-height:120%'><span lang=IT style='font-size:13.0pt;
  line-height:120%;font-family:"Times New Roman",serif;color:black'>T??n ????n
  v&#7883;:.........................</span></p>
  <p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
  text-indent:0cm;line-height:120%'><span lang=IT style='font-size:13.0pt;
  line-height:120%;font-family:"Times New Roman",serif;color:black'>??ng/B??:
  ............................</span></p>
  <p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
  text-indent:0cm;line-height:120%'><span lang=IT style='font-size:13.0pt;
  line-height:120%;font-family:"Times New Roman",serif;color:black'>??&#7883;a
  ch&#7881;: ..................</span></p>
  <p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
  text-indent:0cm;line-height:120%'><span lang=IT style='font-size:13.0pt;
  line-height:120%;font-family:"Times New Roman",serif;color:black'>??i&#7879;n
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
  line-height:120%;font-family:"Times New Roman",serif;color:black'>B??n B??n</span></b></p>
  <p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
  text-indent:0cm;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
  line-height:120%;font-family:"Times New Roman",serif;color:black'>T??n ????n
  v&#7883;: ....................</span></p>
  <p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
  text-indent:0cm;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
  line-height:120%;font-family:"Times New Roman",serif;color:black'>??ng/B??:
  ..........................</span></p>
  <p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
  text-indent:0cm;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
  line-height:120%;font-family:"Times New Roman",serif;color:black'>??&#7883;a
  ch&#7881;: .................</span></p>
  <p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
  text-indent:0cm;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
  line-height:120%;font-family:"Times New Roman",serif;color:black'>??i&#7879;n
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
font-family:"Times New Roman",serif'>??I&#7872;U 7. B&#7842;O M&#7852;T TH??NG
TIN</span></b></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><a name="_Toc278298189"></a><span style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>7.1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>C??c </span><span style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif'>B??n cam k???t gi??? b?? m???t t???t c??? c??c th??ng tin, b??o c??o, t??i li???u, d??? li???u c?? ???????c t??? B??n kia theo H???p ?????ng. Kh??ng c?? s??? ?????ng ?? tr?????c b???ng v??n b???n c???a B??n cung c???p th??ng tin, B??n nh???n th??ng tin kh??ng ???????c ti???t l??? b???t k?? th??ng tin, b??o c??o, t??i li???u v?? d??? li???u c???a B??n cung c???p th??ng tin cho B??n th??? ba. C??c B??n cam k???t ti???n h??nh c??c bi???n ph??p b???o m???t v?? c??c ho???t ?????ng d??? ph??ng c???n thi???t v?? ph?? h???p ????? ?????m b???o gi??? b?? m???t nh???ng th??ng tin tr??n v?? ?????m b???o nh???ng th??ng tin n??y kh??ng b??? s??? d???ng sai m???c ????ch trong qu?? tr??nh th???c hi???n v?? sau khi k???t th??c H???p ?????ng. Tuy nhi??n, nh???ng h???n ch??? n??u tr??n s??? kh??ng ??p d???ng ?????i v???i m???t trong s??? c??c th??ng tin sau: </span></p>

<p class=NormalT1 style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:56.9pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-21.6pt;line-height:120%'><span style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>Nh???ng th??ng tin m?? b??n nh???n th??ng tin c?? b???ng ch???ng ch???ng minh m??nh ???? bi???t t??? ngu???n cung c???p th??ng tin kh??c kh??ng li??n quan ?????n b??n kia tr?????c th???i ??i???m m?? th??ng tin ???? ???????c th??ng b??o; </span></p>

<p class=NormalT1 style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:56.9pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-21.6pt;line-height:120%'><span style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>b)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>Nh???ng th??ng tin c?? ???????c t??? c??c ngu???n kh??c m?? kh??ng c???n ph???i gi??? b?? m???t ho???c kh??ng b??? c???m s??? d???ng;</span></p>

<p class=NormalT1 style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:56.9pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-21.6pt;line-height:120%'><span style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>c)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>Nh???ng th??ng tin c??ng khai ho???c ???? tr??? n??n c??ng khai v???i c??ng ch??ng m?? kh??ng ph???i do l???i c???a b??n nh???n th??ng tin;</span></p>

<p class=NormalT1 style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:56.9pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-21.6pt;line-height:120%'><span style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>d)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>Nh???ng th??ng tin m?? b??n n???m gi??? th??ng tin kh??ng ph???i gi??? b?? m???t khi ti???t l??? cho ng?????i kh??c. </span></p>

<p class=NormalT1 style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:56.9pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-21.6pt;line-height:120%'><span style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>e)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>Nh???ng th??ng tin do b??n nh???n th??ng tin t??? ph??t tri???n m???t c??ch ?????c l???p;</span></p>

<p class=NormalT1 style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:56.9pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-21.6pt;line-height:120%'><span style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>f)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>Th??ng tin b??? ti???t l??? theo quy ?????nh c???a ph??p lu???t, y??u c???u c???a to?? ??n ho???c c???a c?? quan nh?? n?????c c?? th???m quy???n; </span></p>

<p class=NormalT1 style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:56.9pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-21.6pt;line-height:120%'><span style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>g)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>Nh???ng th??ng tin b??? ti???t l??? cho c??c c??ng ty th??nh vi??n c???a M???t B??n, c??c gi??m ?????c, nh??n vi??n, b??n t?? v???n ho???c c??? v???n c???a b??n nh???n th??ng tin ho???c c???a c??ng ty li??n k???t (vi???c ti???t l??? th??ng tin trong t???ng tr?????ng h???p s??? tu??n theo c??c quy ?????nh v??/ ho???c tho??? thu???n li??n quan t???i b???o m???t t????ng t??? nh?? trong H???p ?????ng) trong tr?????ng h???p vi???c ti???t l??? ???? l?? c???n thi???t ????? th???c hi???n H???p ?????ng. B??n ti???t l??? th??ng tin ph???i ch???u tr??ch nhi???m v?? ?????m b???o r???ng b??n ???????c nh???n th??ng tin s??? kh??ng ti???t l??? th??ng tin ???????c cung c???p cho b???t k??? m???t b??n n??o kh??c.</span></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif'>7.2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>B???t k??? vi???c c??c B??n ???? ti???n h??nh c??c bi???n ph??p b???o m???t v?? ho???t ?????ng d??? ph??ng, nh?? ???? quy ?????nh ??? kho???n 6.1, n???u B??n n??o ti???t l??? th??ng tin m?? kh??ng ???????c ph??p ho???c s??? d???ng sai m???c ????ch, B??n ???? s??? ch???u tr??ch nhi???m v?? b???i th?????ng cho B??n c??n l???i c??c thi???t h???i ph??t sinh th???c t???, tr???c ti???p (n???u c??) theo quy ?????nh c???a ph??p lu???t. Tr??? tr?????ng h???p c?? th???a thu???n c??? th??? kh??c, m???i quan h??? kh??ch h??ng gi???a Kh??ch h??ng (B??n Mua) v???i B??n B??n kh??ng ???????c xem l?? th??ng tin b???o m???t v?? c??c B??n c?? th??? ti???t l??? s??? vi???c n??y v???i c??c kh??ch h??ng, kh??ch h??ng ti???m n??ng ho???c c??c B??n th??? ba kh??c.</span></p>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt'><a name="_Toc287339767"><b><span
style='font-size:13.0pt;font-family:"Times New Roman",serif'>??I&#7872;U 8.
PH&#7840;T VI PH&#7840;M H&#7906;P ??&#7890;NG V?? B&#7890;I TH??&#7900;NG
THI&#7878;T H&#7840;I</span></b></a></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif'>8.1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>B??n vi ph???m H???p ?????ng ph???i b???i th?????ng c??c thi???t h???i tr???c ti???p, th???c t??? cho B??n kia do s??? vi ph???m H???p ?????ng c???a m??nh g??y ra theo quy ?????nh c???a ph??p lu???t ngo???i tr??? c??c tr?????ng h???p B???t kh??? kh??ng nh?? quy ?????nh t???i ??i???u 8 c???a H???p ?????ng.</span></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif'>8.2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>Ngo??i kho???n b???i th?????ng thi???t h???i n??u tr??n, B??n vi ph???m c??n ph???i tr??? m???t kho???n ti???n ph???t h???p ?????ng cho B??n b??? vi ph???m do h??nh vi vi ph???m g??y ra. M???c ph???t vi ph???m h???p ?????ng ???????c x??c ?????nh b???ng 8% gi?? tr??? ph???n ngh??a v??? h???p ?????ng b??? vi ph???m.</span></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif'>8.3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>N???u B??n Mua kh??ng th???c hi???n ho???c th???c hi???n kh??ng ?????y ????? ngh??a v??? thanh to??n theo quy ?????nh c???a H???p ?????ng th?? B??n Mua ph???i ch???u ph???t 0,1% cho m???i ng??y ch???m thanh to??n nh??ng gi?? tr??? ti???n ph???t vi ph???m kh??ng v?????t qu?? 08% gi?? tr??? s??? ti???n ch???m thanh to??n. </span></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif'>8.4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>N???u m???t B??n ????n ph????ng ch???m d???t H???p ?????ng m?? kh??ng thu???c nh???ng ??i???u kho???n cho ph??p ????n ph????ng ch???m d???t H???p ?????ng theo quy ?????nh c???a H???p ?????ng/ph??p lu???t ho???c kh??ng c?? s??? ?????ng ?? tr?????c b???ng v??n b???n c???a B??n kia th?? ph???i ch???u ph???t 08% t???ng gi?? tr??? H???p ?????ng.</span></p>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt'><a name="_Toc287339768"><b><span
lang=EN-US style='font-size:13.0pt;font-family:"Times New Roman",serif'>??I&#7872;U
9. B&#7844;T KH&#7842; KH??NG</span></b></a></p>

<p class=MsoListParagraphCxSpFirst style='margin-top:2.0pt;margin-right:-.3pt;
margin-bottom:2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-36.0pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>9.1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;color:black'>???B???t kh??? kh??ng??? l?? c??c s??? ki???n x???y ra m???t c??ch kh??ch quan, kh??ng th??? l?????ng tr?????c ???????c v?? kh??ng th??? kh???c ph???c ???????c l??m ???nh h?????ng t???i vi???c th???c hi???n H???p ?????ng m???c d?? ???? ??p d???ng m???i bi???n ph??p c???n thi???t v?? kh??? n??ng cho ph??p c???a m???i b??n ho???c c??c b??n. S??? ki???n B???t kh??? kh??ng bao g???m nh??ng kh??ng gi???i h???n thi??n tai, ho??? ho???n, l?? l???t, ?????ng ?????t, tai n???n, th???m h???a, d???ch b???nh, th???c hi???n quy???t ?????nh c???a c?? quan nh?? n?????c c?? th???m quy???n m?? c??c B??n kh??ng th??? bi???t tr?????c ???????c v??o th???i ??i???m giao k???t v?? th???c hi???n H???p ?????ng v?? c??c s??? ki???n b???t kh??? kh??ng kh??c theo quy ?????nh c???a ph??p lu???t.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:-.3pt;
margin-bottom:2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-36.0pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>9.2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;color:black'>Tr?????ng h???p m???t B??n kh??ng th??? th???c hi???n c??c ngh??a v??? c???a m??nh do s??? ki???n b???t kh??? kh??ng (???B??n b??? ???nh h?????ng???), B??n b??? ???nh h?????ng s??? ngay l???p t???c th??ng b??o cho B??n c??n l???i (???B??n kh??ng b??? ???nh h?????ng???) b???ng v??n b???n v??? s??? ki???n b???t kh??? kh??ng, b???ng ch???ng v??? vi???c x???y ra s??? ki???n b???t kh??? kh??ng, kho???ng th???i gian x???y ra s??? ki???n b???t kh??? kh??ng v?? nh???ng h???u qu??? c?? th??? x???y ra li??n quan ?????n vi???c th???c hi???n H???p ?????ng ch???m nh???t trong v??ng 03 ng??y l??m vi???c k??? t??? ng??y x???y ra s??? ki???n b???t kh??? kh??ng v?? th?????ng xuy??n th??ng b??o v??? qu?? tr??nh kh???c ph???c, gi???i quy???t s??? ki???n b???t kh??? kh??ng. </span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:-.3pt;
margin-bottom:2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-36.0pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>9.3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;color:black'>B??n b&#7883; &#7843;nh h??&#7903;ng
c?? tr??ch nhi&#7879;m th&#7921;c hi&#7879;n m&#7885;i n&#7895; l&#7921;c v?? c??c
bi&#7879;n ph??p c&#7847;n thi&#7871;t ??&#7875; </span><span lang=EN-US
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>gi&#7843;m thi&#7875;u &#7843;nh h??&#7903;ng c&#7911;a s&#7921;
ki&#7879;n b&#7845;t kh&#7843; kh??ng ??&#7889;i v&#7899;i vi&#7879;c th&#7921;c
hi&#7879;n ngh&#297;a v&#7909; c&#7911;a</span><span lang=EN-US
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'> m&igrave;nh. </span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:-.3pt;
margin-bottom:2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-36.0pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>9.4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;color:black'>Khi s??? ki???n b???t kh??? kh??ng x???y ra th?? ngh??a v??? c???a c??c B??n theo H???p ?????ng t???m th???i kh??ng th???c hi???n v?? s??? ngay l???p t???c ph???c h???i khi s??? ki???n b???t kh??? kh??ng ch???m d???t ho???c b??? lo???i b???. </span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:-.3pt;
margin-bottom:2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-36.0pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>9.5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;color:black'>Tr??? quy ?????nh t???i Kho???n 8.6 ??i???u n??y, B??n b??? ???nh h?????ng s??? kh??ng b??? coi l?? vi ph???m c??c quy ?????nh c???a H???p ?????ng ho???c ch???u tr??ch nhi???m ?????i v???i B??n c??n l???i do vi???c ch???m tr??? th???c hi???n c??c ngh??a v??? c???a m??nh (quy ?????nh n??y ch??? ??p d???ng ?????i v???i nh???ng ngh??a v??? kh??ng th??? th???c hi???n ???????c do ???nh h?????ng c???a s??? ki???n b???t kh??? kh??ng). Tr?????ng h???p S??? ki???n B???t kh??? kh??ng k??o d??i h??n ba m????i (30) ng??y th?? B??n kh??ng b??? ???nh h?????ng c?? quy???n g???i v??n b???n th??ng b??o ch???m d???t H???p ?????ng cho B??n B??n??? ???nh h?????ng. Trong tr?????ng h???p n??y, H???p ?????ng s??? ch???m d???t hi???u l???c k??? t??? ng??y B??n kh??ng b??? ???nh h?????ng g???i v??n b???n th??ng b??o. Khi H???p ?????ng ch???m d???t theo quy ?????nh t???i ??i???u n??y, c??c B??n c?? ngh??a v??? h???p t??c ????? gi???i quy???t c??c ngh??a v??? c??n t???n ?????ng.<span
style='color:black'> </span></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:2.0pt;margin-right:-.3pt;
margin-bottom:2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-36.0pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>9.6.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;color:black'>Tr?????ng h???p B??n b??? ???nh h?????ng kh??ng th???c hi???n c??c ngh??a v??? quy ?????nh t???i Kho???n 8.2, 8.3 v?? 8.4 ??i???u n??y th?? c??c quy ?????nh t???i Kho???n 8.5 ??i???u n??y s??? kh??ng ???????c ??p d???ng v?? c??c B??n c?? ngh??a v??? tu??n th??? theo c??c quy ?????nh H???p ?????ng.</span></p>

<p class=MsoListParagraphCxSpLast style='margin-top:2.0pt;margin-right:-.3pt;
margin-bottom:2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-36.0pt;line-height:120%'><span lang=EN-US style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>9.7.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;color:black;letter-spacing:-.2pt'>Khi k???t th??c s??? ki???n b???t kh??? kh??ng, B??n vi ph???m H???p ?????ng ph???i th??ng b??o ngay b???ng v??n b???n cho B??n kia bi???t, n???u kh??ng th??ng b??o k???p th???i cho B??n kia th?? ph???i b???i th?????ng to??n b??? thi???t h???i theo quy ?????nh c???a ph??p lu???t.</span></p>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt'><a name="_Toc218056848"><b><span lang=PL
style='font-size:13.0pt;font-family:"Times New Roman",serif'>??I&#7872;U 10. CHUY&#7874;N
NH??&#7906;NG, CHUY&#7874;N GIAO H&#7906;P ??&#7890;NG</span></b></a><b><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'></span></b></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;line-height:
17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>10.1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>C??c B??n ?????m b???o s??? th???c hi???n c??c bi???n ph??p c???n thi???t v?? h???p ph??p ????? H???p ?????ng ti???p t???c c?? hi???u l???c ?????i v???i ng?????i k??? th???a quy???n s??? h???u c???a m???i B??n. </span></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;line-height:
17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>10.2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>Kh??ng B??n n??o ???????c chuy???n nh?????ng ho???c chuy???n giao cho m???t b??n th??? ba to??n b??? ho???c m???t ph???n quy???n v??/ho???c ngh??a v??? c???a m??nh theo H???p ?????ng n???u kh??ng ???????c s??? ?????ng ?? tr?????c b???ng v??n b???n c???a B??n kia.</span></p>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt'><b><span lang=PL style='font-size:13.0pt;
font-family:"Times New Roman",serif'>??I&#7872;U 11. CAM K&#7870;T V?? B&#7842;O
??&#7842;M</span></b></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;text-indent:
0cm;line-height:17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'> </span><span
style='font-size:13.0pt;font-family:"Times New Roman",serif'>M???i B??n cam k???t v?? b???o ?????m: c?? ????? n??ng l???c, t?? c??ch ph??p l?? theo quy ?????nh c???a ph??p lu???t ????? k?? k???t v?? th???c hi???n c??c ngh??a v??? c???a m??nh theo H???p ?????ng; ng?????i k?? k???t H???p ?????ng c???a m??nh c?? ????? th???m quy???n k?? k???t H???p ?????ng.</span></p>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt'><a name="_Toc287339769"><b><span lang=PL
style='font-size:13.0pt;font-family:"Times New Roman",serif'>??I&#7872;U 12. CH&#7844;M
D&#7912;T H&#7906;P ??&#7890;NG</span></b></a></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
36.0pt;line-height:17.0pt'><span lang=PT-BR style='font-size:13.0pt;font-family:
"Times New Roman",serif'>H???p ?????ng ch???m d???t trong c??c tr?????ng h???p sau:</span></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>12.1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>H</span><span lang=PT-BR style='font-size:
13.0pt;line-height:120%;font-family:"Times New Roman",serif;color:black'>ai B??n ???? ho??n th??nh to??n b??? ngh??a v??? c???a m??nh quy ?????nh trong H???p ?????ng</span><span lang=PT-BR
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>.</span></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>12.2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Theo th???a thu???n c???a Hai B??n. Trong tr?????ng h???p ????, Hai B??n s??? tho??? thu???n v??? c??c ??i???u ki???n c??? th??? li??n quan t???i vi???c ch???m d???t H???p ?????ng.</span></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>12.3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>B??n B??n c?? quy???n ????n ph????ng ch???m d???t H???p ?????ng n???u B??n Mua c?? h??nh vi l??m ???nh h?????ng ?????n an to??n vi???n th??ng v?? an ninh th??ng tin.</span></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>12.4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>M???t trong hai B??n b??? ph?? s???n, gi???i th???.</span></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>12.5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Tr??&#7901;ng</span><span lang=PT-BR
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>
h???p B???t kh??? kh??ng theo quy ?????nh t???i ??i???u 8 c???a H???p ?????ng.</span></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>12.6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>Khi c?? y??u c???u c???a C?? quan Nh?? n?????c c?? th???m quy???n.</span></p>

<p class=NormalText style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;
line-height:120%'><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>12.7.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=PT-BR style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>C??c</span><span lang=PT-BR
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>
tr?????ng h???p kh??c theo quy ?????nh c???a H???p ?????ng v?? ph??p lu???t.</span></p>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt'><b><span lang=PT-BR style='font-size:13.0pt;
font-family:"Times New Roman",serif'>??I&#7872;U 13. LU&#7852;T ??P D&#7908;NG V??
GI&#7842;I QUY&#7870;T TRANH CH&#7844;P</span></b></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;line-height:
17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>13.1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>H???p ?????ng ???????c ??i???u ch???nh v?? gi???i th??ch theo ph??p lu???t Vi???t Nam.</span></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;line-height:
17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>13.2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>M???i tranh ch???p ph??t sinh t??? ho???c li??n quan ?????n H???p ?????ng s??? ???????c gi???i quy???t th??ng qua th????ng l?????ng gi???a c??c B??n. N???u c??c B??n kh??ng th????ng l?????ng ???????c th?? b???t k??? B??n n??o c??ng c?? quy???n kh???i ki???n t???i T??a ??n c?? th???m quy???n theo quy ?????nh c???a ph??p lu???t. Ph??n quy???t c???a To?? ??n s??? l?? quy???t ?????nh cu???i c??ng v?? c?? gi?? tr??? b???t bu???c ?????i v???i c??c B??n. ??n ph?? v?? m???i chi ph?? c?? li??n quan ?????n vi???c gi???i quy???t tranh ch???p theo quy???t ?????nh/b???n ??n c?? hi???u l???c ph??p lu???t c???a T??a ??n, bao g???m c??? chi ph?? lu???t s?? (n???u c??) s??? do B??n thua ki???n ch???u.</span></p>

<p class=NormalText style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
3.0pt;margin-left:0cm;text-align:justify;text-justify:inter-ideograph;
text-indent:0cm;line-height:17.0pt'><b><span lang=EN-US style='font-size:13.0pt;
font-family:"Times New Roman",serif'>??I&#7872;U 14. ??I&#7872;U KHO&#7842;N
CHUNG</span></b></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;line-height:
17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>14.1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>H???p ?????ng c?? hi???u l???c k??? t??? ng??y ???????c k?? k???t b???i ?????i di???n h???p ph??p c???a hai B??n. H???p ?????ng thay th??? t???t c??? c??c th???a thu???n tr?????c ???? (n???u c??) gi???a c??c B??n li??n quan ?????n giao d???ch n??y.</span></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;line-height:
17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>14.2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>H???p ?????ng h???t hi???u l???c v?? t??? ?????ng thanh l?? sau khi hai B??n ho??n th??nh to??n b??? ngh??a v??? c???a m??nh quy ?????nh trong H???p ?????ng.</span></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;line-height:
17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>14.3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>B???t k??? s???a ?????i ho???c b??? sung n??o ?????i v???i H???p ?????ng s??? ch??? c?? hi???u l???c khi c?? tho??? thu???n b???ng v??n b???n c???a c??c B??n.</span></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;line-height:
17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>14.4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>Trong ph???m vi cho ph??p, c??c B??n cam k???t trao ?????i, k?? k???t, chuy???n giao m???i th??ng tin v?? t??i li???u c??ng nh?? ti???n h??nh m???i ho???t ?????ng, ????a ra m???i quy???t ?????nh c???n thi???t ????? th???c hi???n H???p ?????ng.</span></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;line-height:
17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>14.5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>H???p ?????ng c?? t??nh r??ng bu???c v?? c?? hi???u l???c ph??p lu???t ?????i v???i c??c B??n c??ng nh?? c??c t??? ch???c k??? th???a quy???n l???i v?? tr??ch nhi???m c???a c??c B??n theo H???p ?????ng.</span></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;line-height:
17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>14.6.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>N???u b???t k??? m???t ho???c m???t s??? quy ?????nh trong H???p ?????ng b??? coi l?? v?? hi???u, b???t h???p ph??p ho???c kh??ng c?? hi???u l???c thi h??nh theo ph??p lu???t Vi???t Nam th?? t??nh hi???u l???c, h???p ph??p v?? hi???u l???c thi h??nh c???a c??c quy ?????nh c??n l???i c???a H???p ?????ng s??? kh??ng b??? ???nh h?????ng ho???c suy gi???m b???ng b???t k??? c??ch th???c n??o.</span></p>

<p class=NormalText style='margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;
margin-left:35.45pt;text-align:justify;text-justify:inter-ideograph;line-height:
17.0pt'><span lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>14.7.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=PL style='font-size:13.0pt;font-family:"Times New Roman",serif'>H???p ?????ng k??m theo c??c b???n Ph??? l???c ???????c l???p th??nh 02 (hai) b???n c?? gi?? tr??? ph??p l?? nh?? nhau, m???i B??n gi??? 01 (m???t) b???n.</span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=617
 style='border-collapse:collapse'>
 <tr style='height:127.9pt'>
  <td width=309 valign=top style='width:231.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:127.9pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>??&#7840;I
  DI&#7878;N B??N B??N</span></b></p>
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
  Tr??&#7901;ng Giang</span></b></p>
  </td>
  <td width=309 valign=top style='width:231.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:127.9pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>??&#7840;I
  DI&#7878;N B??N MUA</span></b></p>
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
GI?? CHI TI&#7870;T</span></b></p>

<p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:0cm;text-align:center'><i><span lang=DE
style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif;
color:black'>(K??m theo H&#7907;p ??&#7891;ng s&#7889;:</span></i><i><span
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
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>????n
  v&#7883; t??nh</span></b></p>
  </td>
  <td width="13%" style='width:13.66%;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:17.3pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><b><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>S&#7889;
  l??&#7907;ng</span></b></p>
  </td>
  <td width="17%" style='width:17.04%;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:17.3pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><b><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>????n
  gi?? </span></b></p>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><b><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>(VN??)</span></b></p>
  </td>
  <td width="14%" style='width:14.8%;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:17.3pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><b><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>Th??nh
  ti&#7873;n (VN??)</span></b></p>
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
  th??ng tin ??i&#7879;n t&#7917;</span></p>
  </td>
  <td width="10%" valign=top style='width:10.6%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:43.1pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><b><span lang=EN-US
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif;
  color:black'>N??m</span></b></p>
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
  color:black'>T&#7893;ng ti&#7873;n ch??a bao g&#7891;m thu&#7871; GTGT</span></b></p>
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
  color:black'>Thu&#7871; GTGT (Ph&#7847;n m&#7873;m l?? ??&#7889;i tu&#7907;ng
  kh??ng ch&#7883;u thu&#7871; GTGT)</span></b></p>
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
letter-spacing:-.2pt'>Ph??? l???c n??y l?? ph???n kh??ng th??? t??ch r???i c???a H???p ?????ng s??? </span><span lang=DE
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>{{$data->mahd}}</span><span lang=DE
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:red'> </span><span lang=DE style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;letter-spacing:-.2pt'>???????c l???p th??nh 02 (hai) b???n c?? gi?? tr??? ph??p l?? nh?? nhau, m???i B??n gi??? 01 (m???t) b???n, </span><span lang=DE style='font-size:
13.0pt;line-height:120%;font-family:"Times New Roman",serif'>v?? c?? hi???u l???c k??? t??? ng??y ?????i di???n h???p ph??p c???a hai B??n ch??nh th???c k?? t??n, ????ng d???u./.</span></p>

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
lang=DE style='font-size:15.0pt;line-height:130%;font-family:"Times New Roman",serif'>T??NH
N??NG PH&#7846;N M&#7872;M C&#7892;NG TH??NG TIN ??I&#7878;N T&#7916;</span></b></p>

<p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:0cm;text-align:center'><i><span lang=DE
style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif;
color:black'>(K??m theo H&#7907;p ??&#7891;ng s&#7889;:</span></i><i><span
lang=DE style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif;
color:black'> {{$data->mahd}})</span></i></p>

<p class=MsoNormal align=center style='text-align:center;line-height:130%'><span
lang=DE style='font-size:13.0pt;line-height:130%;font-family:"Times New Roman",serif;
color:black'>Th&#7901;i gian s&#7917; d&#7909;ng: ....... n??m, t??nh t&#7915;
ng??y ...... th??ng ...... n??m 20.......</span></p>

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
   style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>T??n
   t??nh n??ng</span></b></p>
   </td>
   <td width=482 style='width:361.45pt;border:solid windowtext 1.0pt;
   border-left:none;padding:5.0pt 5.4pt 5.0pt 5.4pt;height:12.7pt'>
   <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:0cm;
   margin-top:0cm;text-align:center;line-height:110%'><b><span lang=EN-US
   style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>M??
   t&#7843; t??m t&#7855;t</span></b></p>
   </td>
  </tr>
 </thead>
 <tr style='height:30.85pt'>
  <td width=662 colspan=3 style='width:496.15pt;border:solid windowtext 1.0pt;
  border-top:none;padding:5.0pt 5.4pt 5.0pt 5.4pt;height:30.85pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:0cm;margin-top:
  0cm;line-height:110%'><b><i><span lang=EN-US style='font-size:13.0pt;
  line-height:110%;font-family:"Times New Roman",serif'>T??nh n??ng c?? b&#7843;n</span></i></b></p>
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
  110%;font-family:"Times New Roman",serif'>Giao di&#7879;n c??c trang</span></p>
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
  c&#7845;p t??nh n??ng Th??m, s&#7917;a, x??a danh m&#7909;c d&#7877; d??ng</span></p>
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
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>M???i b??i vi???t c?? th??? thu???c nhi???u chuy??n m???c kh??c nhau tr??nh vi???c ng?????i qu???n tr??? ph???i nh???p nhi???u l???n c??ng m???t n???i dung.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Th??m,
  s&#7917;a, x??a tin t&#7913;c.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:25.5pt;text-indent:-11.3pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Courier New"'>-<span
  style='font:7.0pt "Times New Roman"'> </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Th??m,
  s&#7917;a, x??a linh ho&#7841;t, d&#7877; d??ng.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:25.5pt;text-indent:-11.3pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Courier New"'>-<span
  style='font:7.0pt "Times New Roman"'> </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>????a
  th??m c??c t&#7879;p ????nh k??m theo b??i vi&#7871;t nh??: &#7843;nh, video minh h&#7885;a,
  t&#7879;p v??n b&#7843;n.</span></p>
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
  th&#7883; c??c g&#7907;i &yacute; li??n quan ??&#7871;n c??c t&#7915; kh??a c&#7847;n
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
  tr?? banner theo trang, theo danh m&#7909;c ...</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>K??o th??? ????a ra c??c banner ch???y hai b??n, banner popup hi???n th??? m???t c??ch d??? d??ng</span></p>
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
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>C?? th??? t??y ch???nh giao di???n cho nhi???u trang: Trang ch???, c??c trang trong ...</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Thay ?????i, th??m m???i ch???nh s???a c??c v??ng giao di???n b???ng c??c thao t??c k??o th??? c???u h??nh ????n gi???n v???i nhi???u ti???n ??ch ????? l???a ch???n.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>C???u h??nh h??? th???ng tr???c quan: Thay th??? Logo, Banner, Thay ???nh n???n, m??u n???n, Thay ?????i th??ng tin ch??n trang, L???a ch???n c??c khung hi???n th??? b??i vi???t ...</span></p>
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
  110%;font-family:"Times New Roman",serif'>C??c t??nh n??ng kh??c h??? tr???</span></p>
  </td>
  <td width=482 style='width:361.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:5.0pt 5.4pt 5.0pt 5.4pt;height:63.5pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>B???ng d??? li???u: Th???i kh??a bi???u, L???ch c??ng t??c ...</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Th???ng k?? b??i vi???t: th???ng k?? s??? l?????ng b??i vi???t, t??c gi??? ...</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Th???ng k?? truy c???p: th???ng k?? s??? l?????ng ng?????i truy c???p</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>H&#7887;i ????p</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>Li??n h&#7879;</span></p>
  </td>
 </tr>
 <tr style='height:8.75pt'>
  <td width=662 colspan=3 style='width:496.15pt;border:solid windowtext 1.0pt;
  border-top:none;padding:5.0pt 5.4pt 5.0pt 5.4pt;height:8.75pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:0cm;margin-top:
  0cm;line-height:110%'><b><span lang=EN-US style='font-size:13.0pt;line-height:
  110%;font-family:"Times New Roman",serif'>M&#7897;t s&#7889; t??nh n??ng kh??c</span></b></p>
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
  110%;font-family:"Times New Roman",serif'>Ph??n quy&#7873;n qu&#7843;n tr&#7883;</span></p>
  </td>
  <td width=482 style='width:361.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:5.0pt 5.4pt 5.0pt 5.4pt;height:32.55pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>H??? th???ng cho ph??p ph??n quy???n cho c??c t??i kho???n ng?????i d??ng v???i vai tr?? kh??c nhau: Ph??ng vi??n, Bi??n t???p vi??n, T???ng bi??n t???p ...</span></p>
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
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>??i???u ch???nh ti??u ????? website</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;text-indent:-14.2pt;line-height:110%'><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:Wingdings'>*<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=EN-US
  style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>??i???u ch???nh th??ng tin li??n h??? v?? c??c c??i ?????t n??ng cao kh??c</span></p>
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
style='font-size:13.0pt'>??&#7897;c l&#7853;p - T&#7921; do - H&#7841;nh ph??c</span></u></h1>

<h1 align=center style='text-align:center'><span lang=EN-US style='font-size:
5.0pt;font-weight:normal'>&nbsp;</span></h1>

<p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:0cm;text-align:center;line-height:110%'><b><span
lang=EN-US style='font-size:14.0pt;line-height:110%;font-family:"Times New Roman",serif'>BI??N
B&#7842;N B???N GIAO V?? NGHI&#7878;M THU</span></b></p>

<p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:0cm;text-align:center;line-height:110%'><b><span
lang=EN-US style='font-size:14.0pt;line-height:110%;font-family:"Times New Roman",serif'>PH&#7846;N
M&#7872;M<span style='color:red'> </span><span style='color:black'>C&#7892;NG
TH??NG TIN ??I&#7878;N T&#7916;</span></span></b></p>

<p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:0cm;text-align:center;line-height:110%'><span
lang=EN-US style='font-size:1.0pt;line-height:110%;font-family:"Times New Roman",serif;
color:black'>&nbsp;</span></p>

<p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:2.0pt;margin-left:0cm;text-align:center;line-height:120%'><i><span
lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>(K??m theo H&#7907;p ??&#7891;ng s&#7889;:</span></i><i><span
lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'> {{$data->mahd}})</span></i></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
31.7pt;line-height:120%'><span lang=DE style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif;color:black'>C??n c??? theo h???p ?????ng <span style='letter-spacing:-.2pt'>s&#7889;</span>: </span><i><span
lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>{{$data->mahd}} </span></i><span lang=DE
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>gi???a {{$data->doanhnghiep->tendoanhnghiep}} v?? Viettel An Giang - Chi nh??nh T???p ??o??n C??ng nghi???p - Vi???n th??ng Qu??n ?????i;</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-indent:31.7pt;line-height:120%'><span lang=DE
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>C??n c??? qu?? tr??nh b??n giao th???c t???,</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
31.7pt;line-height:120%'><span lang=DE style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>H??m nay, ng??y ..... th??ng ..... n??m 20....., ?????i di???n Hai B??n c??ng k?? v??o bi??n b???n b??n giao Ph???n m???m C???ng th??ng tin ??i???n t??? v???i n???i dung nh?? sau:</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;line-height:120%'><b><span lang=DE style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black;letter-spacing:
-1.2pt'>B??N MUA&nbsp;</span></b><b><span lang=DE style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>: </span></b><b><span
lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black; text-transform: uppercase'>{{$data->doanhnghiep->tendoanhnghiep}}</span></b></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>Ng?????i ?????i di???n: {{$data->doanhnghiep->nguoidaidien}} Ch&#7913;c
v&#7909;: Hi&#7879;u tr??&#7903;ng</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>??i&#7879;n tho&#7841;i: </span><span lang=DE style='font-size:
13.0pt;line-height:120%;font-family:"Times New Roman",serif'>{{$data->doanhnghiep->sdt}}</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:6.0pt;
margin-left:92.15pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-92.15pt;line-height:15.0pt'><span lang=DE style='font-size:13.0pt;font-family:
"Times New Roman",serif;color:black'>??&#7883;a ch&#7881;: </span><span lang=DE
style='font-size:13.0pt;font-family:"Times New Roman",serif'>{{$data->doanhnghiep->diachi}}</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><b><span lang=DE style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;letter-spacing:-1.2pt'>B??N B??N:</span></b><b><span
lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>
<span style='letter-spacing:-1.2pt'>VIETTEL</span> AN GIANG - CHI NH??NH <span
style='letter-spacing:-1.2pt'>T&#7852;P ??O??N C??NG NGHI&#7878;P - VI&#7876;N
TH??NG QU??N ??&#7896;I</span></span></b></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>Ng??&#7901;i ??&#7841;i di&#7879;n: <b>NGUY???N TR?????NG GIANG</b> Ch&#7913;c v&#7909;: <b>Gi??m ??&#7889;c</b></span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>(Theo gi???y ???y quy???n s???: 469/GUQ-CNVTQ?? ng??y 27/01/2022 v??? vi???c th???c hi???n nhi???m v??? c???a T???p ??o??n t???i c??c Viettel T???nh/Th??nh ph???)</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=DE style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>??i&#7879;n tho&#7841;i: 02966.555555 </span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;line-height:120%'><span lang=DE style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>??&#7883;a ch&#7881;:
269B Nguy&#7877;n Th??i H&#7885;c, Ph??&#7901;ng M&#7929; H&ograve;a, TP. </span><span
lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>Long Xuy??n, t&#7881;nh An Giang.</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
120%'><span lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif'>Sau qu?? tr&igrave;nh b??n giao th&#7921;c t&#7871;, Hai
B??n th&#7889;ng nh&#7845;t k&yacute; k&#7871;t Bi??n b&#7843;n b??n giao v?? nghi&#7879;m
thu </span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;color:black'>Ph&#7847;n m&#7873;m</span><span
lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:red'> </span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif;color:black'>C&#7893;ng th??ng tin ??i&#7879;n
t&#7917;</span><span lang=EN-US style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'> v&#7899;i c??c ??i&#7873;u kho&#7843;n sau ????y:</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
0cm;line-height:120%'><b><span lang=NL style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></b><b><span lang=NL style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>1.	B??n B??n ???? ho??n th??nh vi???c tri???n khai </span></b><b><span lang=EN-US style='font-size:13.0pt;
line-height:120%;font-family:"Times New Roman",serif;color:black'>Ph&#7847;n m&#7873;m</span></b><b><span
lang=EN-US style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:red'> </span></b><b><span lang=EN-US style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif;color:black'>C&#7893;ng th??ng tin ??i&#7879;n
t&#7917; </span></b><b><span lang=NL style='font-size:13.0pt;line-height:120%;
font-family:"Times New Roman",serif'>cho B??n Mua theo H&#7907;p ??&#7891;ng, c&#7909;
th&#7875; nh?? sau:</span></b></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:14.2pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-14.2pt;line-height:120%'><i><span lang=NL style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>+ Tri&#7875;n khai h&#7879; th&#7889;ng
Ph&#7847;n m&#7873;m</span></i><span lang=NL> </span><i><span lang=NL
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>C&#7893;ng th??ng tin ??i&#7879;n t&#7917;</span></i><i><span
lang=NL style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>:</span></i></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
27.0pt;line-height:120%'><span lang=NL style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>B??n B??n ???? ho??n th??nh tri???n khai </span><span lang=NL style='font-size:13.0pt;line-height:120%;font-family:
"Times New Roman",serif;color:black'>Ph&#7847;n m&#7873;m</span><span lang=NL> </span><span
lang=NL style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif;
color:black'>C???ng th??ng tin ??i???n t??? </span><span lang=NL
style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>v???i ?????y ????? t??nh n??ng quy ?????nh t???i Ph??? l???c 02 c???a H???p ?????ng, ?????m b???o c??c t??nh n??ng Ph???n m???m ch???y ????ng, ch??nh x??c, ???n ?????nh v?? ?????t y??u c???u.</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:14.2pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-14.2pt;line-height:120%'><i><span lang=NL style='font-size:13.0pt;line-height:
120%;font-family:"Times New Roman",serif'>+ B??n giao T??i kho???n qu???n tr??? Ph???n m???m v?? h?????ng d???n s??? d???ng:</span></i></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:14.2pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-14.2pt;line-height:120%'><span lang=NL style='font-size:13.0pt;line-height:
120%;font-family:Wingdings'>-<span style='font:7.0pt "Times New Roman"'> </span></span><span
lang=NL style='font-size:13.0pt;line-height:120%;font-family:"Times New Roman",serif'>B??n giao t??i kho???n qu???n tr??? Ph???n m???m: B??n B??n ???? b??n giao v?? B??n Mua ???? ti???p nh???n ?????y ????? th??ng tin t??i kho???n qu???n tr??? Ph???n m???m, c??? th???:</span></p>

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
  style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>T??i
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
  ch??</span></b></p>
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
  lang=NL style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>T??i
  kho&#7843;n qu&#7843;n tr&#7883; Ph&#7847;n m&#7873;m</span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:3.0pt;
margin-left:14.2pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-14.2pt;line-height:115%'><span lang=NL style='font-size:13.0pt;line-height:
115%;font-family:Wingdings'>-<span style='font:7.0pt "Times New Roman"'> </span></span><span
lang=NL style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif'>H?????ng d???n s??? d???ng: B??n B??n ???? h?????ng d???n, cung c???p t??i li???u v?? B??n Mua ???? ti???p nh???n ?????y ????? t??i li???u v??? </span><span lang=NL style='font-size:13.0pt;
line-height:115%;font-family:"Times New Roman",serif;color:black'>Ph&#7847;n m&#7873;m</span><span
lang=NL style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif;
color:red'> </span><span lang=NL style='font-size:13.0pt;line-height:115%;
font-family:"Times New Roman",serif;color:black'>C&#7893;ng th??ng tin ??i&#7879;n
t&#7917; </span><span lang=NL style='font-size:13.0pt;line-height:115%;
font-family:"Times New Roman",serif'>????? B??n Mua l??m tham chi???u trong su???t qu?? tr??nh s??? d???ng Ph???n m???m, c??? th???:</span></p>

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
  lang=NL style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif'>T??n
  t??i li&#7879;u</span></b></p>
  </td>
  <td width=83 valign=top style='width:62.3pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center;line-height:115%'><b><span
  lang=NL style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif'>S&#7889;
  l??&#7907;ng</span></b></p>
  </td>
  <td width=109 valign=top style='width:81.6pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center;line-height:115%'><b><span
  lang=NL style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif'>Ghi
  ch??</span></b></p>
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
  font-family:"Times New Roman",serif'>T??i li&#7879;u h??&#7899;ng d&#7851;n qu&#7843;n
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
line-height:110%;font-family:"Times New Roman",serif'>????nh gi?? t&igrave;nh tr&#7841;ng
k&#7929; thu&#7853;t:</span></i></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:36.0pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-18.0pt;line-height:110%'><span lang=SV style='font-size:13.0pt;line-height:
110%;font-family:"Tahoma",sans-serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=SV style='font-size:13.0pt;line-height:110%;
font-family:"Times New Roman",serif;letter-spacing:-.05pt'>T??i li???u v?? Ph???n m???m B??n B??n cung c???p ????p ???ng y??u c???u c???a b??n Mua </span><span
lang=SV style='font-size:13.0pt;line-height:110%;font-family:"Times New Roman",serif'>
theo H???p ?????ng.</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:36.0pt;text-align:justify;text-justify:inter-ideograph;text-indent:
-18.0pt;line-height:110%'><span lang=EN-US style='font-size:13.0pt;line-height:
110%;font-family:"Tahoma",sans-serif'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US style='font-size:13.0pt;line-height:110%;
font-family:"Times New Roman",serif'>T&#7891;n t&#7841;i: Kh??ng.</span></p>

<p class=MsoListParagraph style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
2.0pt;margin-left:36.0pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-18.0pt;line-height:20.0pt'><b><span lang=PT-BR style='font-size:
13.0pt;font-family:"Times New Roman",serif'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></b><b><span lang=PT-BR style='font-size:13.0pt;font-family:"Times New Roman",serif'>Tr??ch
nhi&#7879;m c&ograve;n l&#7841;i c&#7911;a c??c B??n </span></b></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;line-height:
115%'><span lang=PT-BR style='font-size:13.0pt;line-height:115%;font-family:
"Times New Roman",serif'>B??n Mua thanh to??n cho B??n B??n theo quy ?????nh c???a H???p ?????ng.</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
27.0pt;line-height:115%'><span lang=PT-BR style='font-size:13.0pt;line-height:
115%;font-family:"Times New Roman",serif'>Hai B??n c??ng th???ng nh???t k?? Bi??n b???n B??n giao v?? Nghi???m thu H???p ?????ng s??? </span><span
lang=DE style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif;
color:black'>{{$data->mahd}}.</span><i><span lang=DE
style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif;
color:black'> </span></i><span lang=PT-BR style='font-size:13.0pt;line-height:
115%;font-family:"Times New Roman",serif'>H???p ?????ng n??y s??? </span><span
lang=PL style='font-size:13.0pt;line-height:115%;font-family:"Times New Roman",serif'>t&#7921;
??&#7897;ng thanh l&yacute; </span><span lang=DE style='font-size:13.0pt;
line-height:115%;font-family:"Times New Roman",serif;color:black'>sau khi hai
B??n ho??n th??nh to??n b??? ngh??a v??? c???a m??nh quy ?????nh trong H???p ?????ng</span><span lang=PT-BR style='font-size:13.0pt;
line-height:115%;font-family:"Times New Roman",serif'>. </span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm;text-align:justify;text-justify:inter-ideograph;text-indent:
31.5pt;line-height:115%'><span lang=PT-BR style='font-size:13.0pt;line-height:
115%;font-family:"Times New Roman",serif'>Bi??n b???n n??y ???????c l???p th??nh 02 (hai) b???n c?? gi?? tr??? ph??p l?? nh?? nhau, m???i B??n gi??? 01 (m???t) b???n./.</span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=617
 style='border-collapse:collapse'>
 <tr style='height:127.9pt'>
  <td width=309 valign=top style='width:231.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:127.9pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>??&#7840;I
  DI&#7878;N B??N B??N</span></b></p>
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
  Tr??&#7901;ng Giang</span></b></p>
  </td>
  <td width=309 valign=top style='width:231.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:127.9pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=PT-BR style='font-size:13.0pt;line-height:107%;font-family:"Times New Roman",serif'>??&#7840;I
  DI&#7878;N B??N MUA</span></b></p>
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
