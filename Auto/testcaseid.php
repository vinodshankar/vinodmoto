<?php
// 0 Index will contain testcase id
// 1 Index will contain required script

$testcase = array();
$testSequence = array("jscookieforsession","servercookie","cookie","cookie_add_delete","ajax_post","ajax_get","PassXMLData","SoapbasedCall_GetpostIIS","multipleajaxcalls","get","post","multipartUpload","jqueryformsubmit","scrollintoviewlinks","windowopen","windowopen_self","windowopen_menubar0","windowopen_menubar1","windowopen_widthheight","windowopen_alert","window_blur","setinterval","setintervalclearinterval","settimeout","setandcleartimeout","windowopen_emptywidthheight","confirm","createpopup","windowfocus","moveby","moveto","print_window","prompt_window","resizeby","resizeto","scrollby","scrollto","defaultstatus","framelength","historyback","historyback2","historyforward","historyback3","msgwindow","innerwidth","setandgetinnerwidth","setandgetinnerheight","windowlength","openerdocumentwrite","parentlocation","screenlefttop","screenXY","windowtopself","setstatus","getstatus","screenavailheight","screenavailwidth","screencolordepth","screenheight","screenpixeldepth","screenwidth","navigatorappcodename","navigatorappname","navigatorappversion","navigatorcookieenabled","navigatorplatform","navigatoruseragent","navigatorjavaenabled","navigatortaintenabled","locationhash","locationhost","locationhostname","locationhref","locationpathname","locationport","locationprotocol","locationsearch","locationassign","locationreload","locationreplace","anchorslength","anchorsinnerHTML","documentcookie","documentmode","documentdomain","formslength","linksproperty","imageslength","lastmodified","readystate","referrer","title","documentURL","documentopen","documentopenclose","guiinteration","hyperlinks","multiplelabel","multipleselect","selectlabel","KBDisplacement","liftedcorner","curledcorners","perspective","raisedbox","singleverticalcurve","singlehorizontalcurve","verticalcurves","horizontalcurves","rotatedbox","dropshadow","cssgredient","check","digest","regexppatternmatch","regexppatternmatch_is","regexppatternmatch_isgi","regexppatternmatch_test","regexppatternmatch_exec","Browserexternallinks","saverestore","scale","rotation","translate","transform","transformcombined","drawline","drawline_changewidth","drawline_width_return","linecap","linejoin","linejoin_miter","miterlimitcombined","fontarial","defaultfontsetting","textaligncombined","defaulttextalign","textBaseline","defaulttextBaseline","movePath","closePath","drawquadraticcurve","drawquadraticcurve_cp1x","drawbezier","drawdrawbezier_cp1x","arcTo_x2","arcTo","arcTo_r","arcTo_x1","arcTo_y1","arcTo_y2","drawarc_r","drawarc_sAngle","drawarc_x","drawarc_y","drawarc","drawarc_clockwise","drawarc_eAngle","drawrect_height","drawrect_width","drawrect_x","drawrect_y","drawrect","fillstyle_color","fillstyle","defaultfillstyle","strokestyle","strokestyle_color","drawfill","drawclip","ispointInpath","ispointInpath_1","clearRect","clearRect_height","clearRect_width","clearRect_x","clearRect_y","filltext_text","filltext_x","filltext_y","filltext","filltext_maxWidth","stroketext_maxwidth","stroketext_text","stroketext_x","stroketext_y","stroketext","measureText","measureText_text","drawImage","drawImage_y","drawImage_x","drawImage_width","drawImage_height","drawImage_dwidth","drawImage_dx","drawImage_dy","drawImage_dheight","globalalpha","globalalpha_0and1","globalcompositeoperation","composition","shadowblur","shadowcolor","shadowoffsetx","shadowoffsety","HTML5_tags","geotest","geo","storage","Webworker_start_stop","webworker","sharedworkers","webworker_import1","webworker_import2","sharedworkers","inlineworkers","echotest","websql","websqlstorage","new-inputs","fivewebworker","Image_localstorage","Image_sessionstorage","Imagedb","animate","draganddrop","draganddropbackforth","gradient_lefttoright","gradient_toptobottom","gradient_redblack","gradientmultipleaddColorStop","gradientRadialGradient","HTML5externallinks");



$testcase['jscookieforsession'][0] = "VT206-0009";
$testcase['jscookieforsession'][1] = "jscookieforsession";
$testcase['jscookieforsession'][2] = "";

$testcase['servercookie'][0] = "VT206-0009,VT206-0010,VT206-0011,VT206-0012,VT206-0014";
$testcase['servercookie'][1] = "servercookie";
$testcase['servercookie'][2] = "";

$testcase['cookie'][0] = "VT206-0010,VT206-0011";
$testcase['cookie'][1] = "cookie";
$testcase['cookie'][2] = "";

$testcase['cookie_add_delete'][0] = "VT206-0011,VT206-0013";
$testcase['cookie_add_delete'][1] = "cookie_add_delete";
$testcase['cookie_add_delete'][2] = "";

$testcase['ajax_post'][0] = "VT206-0018,VT206-0019";
$testcase['ajax_post'][1] = "ajax_post";
$testcase['ajax_post'][2] = "";

$testcase['ajax_get'][0] = "VT206-0018,VT206-0020";
$testcase['ajax_get'][1] = "ajax_get";
$testcase['ajax_get'][2] = "";

$testcase['PassXMLData'][0] = "VT206-0021";
$testcase['PassXMLData'][1] = "PassXMLData";
$testcase['PassXMLData'][2] = "";

$testcase['SoapbasedCall_GetpostIIS'][0] = "VT206-0021,VT206-0022,VT206-0023,VT206-0043,VT206-0044,VT206-0045,VT206-0319";
$testcase['SoapbasedCall_GetpostIIS'][1] = "";
$testcase['SoapbasedCall_GetpostIIS'][2] = "";

$testcase['multipleajaxcalls'][0] = "VT206-0025";
$testcase['multipleajaxcalls'][1] = "multipleajaxcalls";
$testcase['multipleajaxcalls'][2] = "";

$testcase['get'][0] = "VT206-0046";
$testcase['get'][1] = "";
$testcase['get'][2] = "";

$testcase['post'][0] = "VT206-0047";
$testcase['post'][1] = "";
$testcase['post'][2] = "";

$testcase['multipartUpload'][0] = "VT206-0048";
$testcase['multipartUpload'][1] = "";
$testcase['multipartUpload'][2] = "";


$testcase['jqueryformsubmit'][0] = "VT206-0049";
$testcase['jqueryformsubmit'][1] = "jquery.min";
$testcase['jqueryformsubmit'][2] = "";


$testcase['scrollintoviewlinks'][0] = "VT206-0050,VT206-0051,VT206-0052,VT206-0053,VT206-0054,VT206-0055,VT206-0056,VT206-0057,VT206-0058,VT206-0059,VT206-0060,VT206-0061,VT206-0062,VT206-0063,VT206-0064,VT206-0065";
$testcase['scrollintoviewlinks'][1] = "";
$testcase['scrollintoviewlinks'][2] = "";

$testcase['windowopen'][0] = "VT206-0066";
$testcase['windowopen'][1] = "windowopen";
$testcase['windowopen'][2] = "";

$testcase['windowopen_self'][0] = "VT206-0067";
$testcase['windowopen_self'][1] = "windowopen_self";
$testcase['windowopen_self'][2] = "";

$testcase['windowopen_menubar0'][0] = "VT206-0068";
$testcase['windowopen_menubar0'][1] = "windowopen_menubar0";
$testcase['windowopen_menubar0'][2] = "";

$testcase['windowopen_menubar1'][0] = "VT206-0069";
$testcase['windowopen_menubar1'][1] = "windowopen_menubar1";
$testcase['windowopen_menubar1'][2] = "";

$testcase['windowopen_widthheight'][0] = "VT206-0070";
$testcase['windowopen_widthheight'][1] = "windowopen_widthheight";
$testcase['windowopen_widthheight'][2] = "";

$testcase['windowopen_alert'][0] = "VT206-0071";
$testcase['windowopen_alert'][1] = "windowopen_alert";
$testcase['windowopen_alert'][2] = "";

$testcase['window_blur'][0] = "VT206-0072";
$testcase['window_blur'][1] = "window_blur";
$testcase['window_blur'][2] = "";

$testcase['setinterval'][0] = "VT206-0073";
$testcase['setinterval'][1] = "";
$testcase['setinterval'][2] = "";

$testcase['setintervalclearinterval'][0] = "VT206-0074";
$testcase['setintervalclearinterval'][1] = "";
$testcase['setintervalclearinterval'][2] = "";

$testcase['settimeout'][0] = "VT206-0075";
$testcase['settimeout'][1] = "";
$testcase['settimeout'][2] = "";

$testcase['setandcleartimeout'][0] = "VT206-0076";
$testcase['setandcleartimeout'][1] = "setandcleartimeout";
$testcase['setandcleartimeout'][2] = "";


$testcase['windowopen_emptywidthheight'][0] = "VT206-0077,VT206-0078,VT206-0079";
$testcase['windowopen_emptywidthheight'][1] = "windowopen_emptywidthheight";
$testcase['windowopen_emptywidthheight'][2] = "";


$testcase['confirm'][0] = "VT206-0080";
$testcase['confirm'][1] = "confirm";
$testcase['confirm'][2] = "";

$testcase['createpopup'][0] = "VT206-0081";
$testcase['createpopup'][1] = "createpopup";
$testcase['createpopup'][2] = "";

$testcase['windowfocus'][0] = "VT206-0082";
$testcase['windowfocus'][1] = "windowfocus";
$testcase['windowfocus'][2] = "";

$testcase['moveby'][0] = "VT206-0083";
$testcase['moveby'][1] = "moveby";
$testcase['moveby'][2] = "";

$testcase['moveto'][0] = "VT206-0084";
$testcase['moveto'][1] = "moveto";
$testcase['moveto'][2] = "";

$testcase['print_window'][0] = "VT206-0085";
$testcase['print_window'][1] = "print_window";
$testcase['print_window'][2] = "";

$testcase['prompt_window'][0] = "VT206-0086";
$testcase['prompt_window'][1] = "prompt_window";
$testcase['prompt_window'][2] = "";


$testcase['resizeby'][0] = "VT206-0087";
$testcase['resizeby'][1] = "resizeby";
$testcase['resizeby'][2] = "";

$testcase['resizeto'][0] = "VT206-0088";
$testcase['resizeto'][1] = "resizeto";
$testcase['resizeto'][2] = "";


$testcase['scrollby'][0] = "VT206-0089";
$testcase['scrollby'][1] = "scrollby";
$testcase['scrollby'][2] = "";

$testcase['scrollto'][0] = "VT206-0090";
$testcase['scrollto'][1] = "scrollto";
$testcase['scrollto'][2] = "";

$testcase['defaultstatus'][0] = "VT206-0091";
$testcase['defaultstatus'][1] = "defaultstatus";
$testcase['defaultstatus'][2] = "";

$testcase['framelength'][0] = "VT206-0092";
$testcase['framelength'][1] = "framelength";
$testcase['framelength'][2] = "";

$testcase['historyback'][0] = "VT206-0093";
$testcase['historyback'][1] = "historyback";
$testcase['historyback'][2] = "";

$testcase['historyback2'][0] = "VT206-0094";
$testcase['historyback2'][1] = "historyback2";
$testcase['historyback2'][2] = "";

$testcase['historyforward'][0] = "VT206-0095";
$testcase['historyforward'][1] = "historyforward";
$testcase['historyforward'][2] = "";

$testcase['historyback3'][0] = "VT206-0096";
$testcase['historyback3'][1] = "historyback3";
$testcase['historyback3'][2] = "";

$testcase['msgwindow'][0] = "VT206-0097";
$testcase['msgwindow'][1] = "msgwindow";
$testcase['msgwindow'][2] = "";

$testcase['innerwidth'][0] = "VT206-0098,VT206-0100";
$testcase['innerwidth'][1] = "innerwidth";
$testcase['innerwidth'][2] = "";

$testcase['setandgetinnerwidth'][0] = "VT206-0099";
$testcase['setandgetinnerwidth'][1] = "setandgetinnerwidth";
$testcase['setandgetinnerwidth'][2] = "";

$testcase['setandgetinnerheight'][0] = "VT206-0101";
$testcase['setandgetinnerheight'][1] = "setandgetinnerheight";
$testcase['setandgetinnerheight'][2] = "";

$testcase['windowlength'][0] = "VT206-0102";
$testcase['windowlength'][1] = "";
$testcase['windowlength'][2] = "";

$testcase['openerdocumentwrite'][0] = "VT206-0103";
$testcase['openerdocumentwrite'][1] = "openerdocumentwrite";
$testcase['openerdocumentwrite'][2] = "";

$testcase['scrollxyoffset'][0] = "VT206-0104";
$testcase['scrollxyoffset'][1] = "scrollxyoffset";
$testcase['scrollxyoffset'][2] = "";




$testcase['parentlocation'][0] = "VT206-0105";
$testcase['parentlocation'][1] = "parentlocation";
$testcase['parentlocation'][2] = "";



$testcase['screenlefttop'][0] = "VT206-0106,VT206-0107";
$testcase['screenlefttop'][1] = "screenlefttop";
$testcase['screenlefttop'][2] = "";

$testcase['screenXY'][0] = "VT206-0108,VT206-0109";
$testcase['screenXY'][1] = "screenXY";
$testcase['screenXY'][2] = "";

$testcase['windowtopself'][0] = "VT206-0110,VT206-0113";
$testcase['windowtopself'][1] = "windowtopself";
$testcase['windowtopself'][2] = "";

$testcase['setstatus'][0] = "VT206-0111";
$testcase['setstatus'][1] = "";
$testcase['setstatus'][2] = "";

$testcase['getstatus'][0] = "VT206-0112";
$testcase['getstatus'][1] = "";
$testcase['getstatus'][2] = "";

$testcase['screenavailheight'][0] = "VT206-0114";
$testcase['screenavailheight'][1] = "";
$testcase['screenavailheight'][2] = "";



$testcase['screenavailwidth'][0] = "VT206-0115";
$testcase['screenavailwidth'][1] = "";
$testcase['screenavailwidth'][2] = "";

$testcase['screencolordepth'][0] = "VT206-0116";
$testcase['screencolordepth'][1] = "";
$testcase['screencolordepth'][2] = "";



$testcase['screenheight'][0] = "VT206-0117";
$testcase['screenheight'][1] = "";
$testcase['screenheight'][2] = "";

$testcase['screenpixeldepth'][0] = "VT206-0118";
$testcase['screenpixeldepth'][1] = "";
$testcase['screenpixeldepth'][2] = "";

$testcase['screenwidth'][0] = "VT206-0119";
$testcase['screenwidth'][1] = "";
$testcase['screenwidth'][2] = "";

$testcase['navigatorappcodename'][0] = "VT206-0120";
$testcase['navigatorappcodename'][1] = "";
$testcase['navigatorappcodename'][2] = "";

$testcase['navigatorappname'][0] = "VT206-0121";
$testcase['navigatorappname'][1] = "";
$testcase['navigatorappname'][2] = "";

$testcase['navigatorappversion'][0] = "VT206-0122";
$testcase['navigatorappversion'][1] = "";
$testcase['navigatorappversion'][2] = "";

$testcase['navigatorcookieenabled'][0] = "VT206-0123";
$testcase['navigatorcookieenabled'][1] = "";
$testcase['navigatorcookieenabled'][2] = "";

$testcase['navigatorplatform'][0] = "VT206-0124";
$testcase['navigatorplatform'][1] = "";
$testcase['navigatorplatform'][2] = "";

$testcase['navigatoruseragent'][0] = "VT206-0125";
$testcase['navigatoruseragent'][1] = "";
$testcase['navigatoruseragent'][2] = "";

$testcase['navigatorjavaenabled'][0] = "VT206-0126";
$testcase['navigatorjavaenabled'][1] = "";
$testcase['navigatorjavaenabled'][2] = "";

$testcase['navigatortaintenabled'][0] = "VT206-0127";
$testcase['navigatortaintenabled'][1] = "";
$testcase['navigatortaintenabled'][2] = "";

$testcase['locationhash'][0] = "VT206-0128";
$testcase['locationhash'][1] = "";
$testcase['locationhash'][2] = "";

$testcase['locationhost'][0] = "VT206-0129";
$testcase['locationhost'][1] = "";
$testcase['locationhost'][2] = "";

$testcase['locationhostname'][0] = "VT206-0130";
$testcase['locationhostname'][1] = "";
$testcase['locationhostname'][2] = "";

$testcase['locationhref'][0] = "VT206-0131";
$testcase['locationhref'][1] = "";
$testcase['locationhref'][2] = "";

$testcase['locationpathname'][0] = "VT206-0132";
$testcase['locationpathname'][1] = "";
$testcase['locationpathname'][2] = "";


$testcase['locationport'][0] = "VT206-0133";
$testcase['locationport'][1] = "";
$testcase['locationport'][2] = "";

$testcase['locationprotocol'][0] = "VT206-0134";
$testcase['locationprotocol'][1] = "";
$testcase['locationprotocol'][2] = "";

$testcase['locationsearch'][0] = "VT206-0135";
$testcase['locationsearch'][1] = "";
$testcase['locationsearch'][2] = "";

$testcase['locationassign'][0] = "VT206-0136";
$testcase['locationassign'][1] = "locationassign";
$testcase['locationassign'][2] = "";

$testcase['locationreload'][0] = "VT206-0137";
$testcase['locationreload'][1] = "locationreload";
$testcase['locationreload'][2] = "";

$testcase['locationreplace'][0] = "VT206-0138";
$testcase['locationreplace'][1] = "locationreplace";
$testcase['locationreplace'][2] = "";



$testcase['anchorslength'][0] = "VT206-0139";
$testcase['anchorslength'][1] = "";
$testcase['anchorslength'][2] = "";

$testcase['anchorsinnerHTML'][0] = "VT206-0140";
$testcase['anchorsinnerHTML'][1] = "";
$testcase['anchorsinnerHTML'][2] = "";

$testcase['documentcookie'][0] = "VT206-0141";
$testcase['documentcookie'][1] = "";
$testcase['documentcookie'][2] = "";

$testcase['documentmode'][0] = "VT206-0142";
$testcase['documentmode'][1] = "";
$testcase['documentmode'][2] = "";

$testcase['documentdomain'][0] = "VT206-0143";
$testcase['documentdomain'][1] = "";
$testcase['documentdomain'][2] = "";

$testcase['formslength'][0] = "VT206-0144";
$testcase['formslength'][1] = "";
$testcase['formslength'][2] = "";

$testcase['linksproperty'][0] = "VT206-0145";
$testcase['linksproperty'][1] = "";
$testcase['linksproperty'][2] = "";

$testcase['imageslength'][0] = "VT206-0146";
$testcase['imageslength'][1] = "";
$testcase['imageslength'][2] = "";

$testcase['lastmodified'][0] = "VT206-0147";
$testcase['lastmodified'][1] = "";
$testcase['lastmodified'][2] = "";

$testcase['readystate'][0] = "VT206-0148";
$testcase['readystate'][1] = "";
$testcase['readystate'][2] = "";

$testcase['referrer'][0] = "VT206-0149";
$testcase['referrer'][1] = "";
$testcase['referrer'][2] = "";

$testcase['title'][0] = "VT206-0150";
$testcase['title'][1] = "";
$testcase['title'][2] = "";

$testcase['documentURL'][0] = "VT206-0151";
$testcase['documentURL'][1] = "";
$testcase['documentURL'][2] = "";

$testcase['documentopen'][0] = "VT206-0152";
$testcase['documentopen'][1] = "";
$testcase['documentopen'][2] = "";

$testcase['documentopenclose'][0] = "VT206-0153";
$testcase['documentopenclose'][1] = "";
$testcase['documentopenclose'][2] = "";

$testcase['guiinteration'][0] = "VT206-0156";
$testcase['guiinteration'][1] = "";
$testcase['guiinteration'][2] = "";

$testcase['hyperlinks'][0] = "VT206-0157";
$testcase['hyperlinks'][1] = "";
$testcase['hyperlinks'][2] = "";

$testcase['multiplelabel'][0] = "VT206-0158";
$testcase['multiplelabel'][1] = "";
$testcase['multiplelabel'][2] = "";

$testcase['multipleselect'][0] = "VT206-0158";
$testcase['multipleselect'][1] = "";
$testcase['multipleselect'][2] = "";

$testcase['selectlabel'][0] = "VT206-0158";
$testcase['selectlabel'][1] = "";
$testcase['selectlabel'][2] = "";





$testcase['KBDisplacement'][0] = "VT206-0241,VT206-0242,VT206-0243,VT206-0244,VT206-0245,VT206-0246,VT206-0247,VT206-0248,VT206-0249,VT206-0250,VT206-0251,VT206-0252,VT206-0253,VT206-0254,VT206-0255,VT206-0256,VT206-0257,VT206-0258,VT206-0259,VT206-0260,VT206-0261,VT206-0262";
$testcase['KBDisplacement'][1] = "";
$testcase['KBDisplacement'][2] = "";

$testcase['liftedcorner'][0] = "VT206-0160";
$testcase['liftedcorner'][1] = "";
$testcase['liftedcorner'][2] = "liftedcorner";

$testcase['curledcorners'][0] = "VT206-0161";
$testcase['curledcorners'][1] = "";
$testcase['curledcorners'][2] = "curledcorners";

$testcase['perspective'][0] = "VT206-0162";
$testcase['perspective'][1] = "";
$testcase['perspective'][2] = "perspective";

$testcase['raisedbox'][0] = "VT206-0163";
$testcase['raisedbox'][1] = "";
$testcase['raisedbox'][2] = "raisedbox";

$testcase['singleverticalcurve'][0] = "VT206-0164";
$testcase['singleverticalcurve'][1] = "";
$testcase['singleverticalcurve'][2] = "singleverticalcurve";

$testcase['singlehorizontalcurve'][0] = "VT206-0165";
$testcase['singlehorizontalcurve'][1] = "";
$testcase['singlehorizontalcurve'][2] = "singlehorizontalcurve";

$testcase['verticalcurves'][0] = "VT206-0166";
$testcase['verticalcurves'][1] = "";
$testcase['verticalcurves'][2] = "verticalcurves";

$testcase['horizontalcurves'][0] = "VT206-0167";
$testcase['horizontalcurves'][1] = "";
$testcase['horizontalcurves'][2] = "horizontalcurves";

$testcase['rotatedbox'][0] = "VT206-0168";
$testcase['rotatedbox'][1] = "";
$testcase['rotatedbox'][2] = "rotatedbox";

$testcase['dropshadow'][0] = "VT206-0169";
$testcase['dropshadow'][1] = "";
$testcase['dropshadow'][2] = "dropshadow";

$testcase['cssgredient'][0] = "VT206-0170,VT206-0171,VT206-0172,VT206-0173,VT206-0174,VT206-0175,VT206-0176";
$testcase['cssgredient'][1] = "";
$testcase['cssgredient'][2] = "cssgredient";

$testcase['check'][0] = "VT206-0177,VT206-0178,VT206-0179,VT206-0180,VT206-0181,VT206-0182,VT206-0183,VT206-0184,VT206-0185";
$testcase['check'][1] = "";
$testcase['check'][2] = "";

$testcase['digest'][0] = "VT206-0186,VT206-0187,VT206-0188,VT206-0189,VT206-0190,VT206-0191,VT206-0192,VT206-0193,VT206-0194";
$testcase['digest'][1] = "";
$testcase['digest'][2] = "";


$testcase['regexppatternmatch'][0] = "VT206-0237";
$testcase['regexppatternmatch'][1] = "";
$testcase['regexppatternmatch'][2] = "";

$testcase['regexppatternmatch_is'][0] = "VT206-0238";
$testcase['regexppatternmatch_is'][1] = "";
$testcase['regexppatternmatch_is'][2] = "";

$testcase['regexppatternmatch_isgi'][0] = "VT206-0238";
$testcase['regexppatternmatch_isgi'][1] = "";
$testcase['regexppatternmatch_isgi'][2] = "";

$testcase['regexppatternmatch_test'][0] = "VT206-0239";
$testcase['regexppatternmatch_test'][1] = "";
$testcase['regexppatternmatch_test'][2] = "";

$testcase['regexppatternmatch_exec'][0] = "VT206-0240";
$testcase['regexppatternmatch_exec'][1] = "";
$testcase['regexppatternmatch_exec'][2] = "";

$testcase['Browserexternallinks'][0] = "VT206-0024,VT206-0263,VT206-0264,VT206-0265,VT206-0266,VT206-0267,VT206-0268,VT206-0269,VT206-0270,VT206-0271,VT206-0272,VT206-0273,VT206-0274,VT206-0275,VT206-0276,VT206-0277,VT206-0278,VT206-0279,VT206-0280,VT206-0281,VT206-0282,VT206-0283,VT206-0284,VT206-0285,VT206-0286,VT206-0287,VT206-0288,VT206-0289,VT206-0290,VT206-0291,VT206-0292,VT206-0293,VT206-0296,VT206-0298,VT206-0299,VT206-0300,VT206-0301,VT206-0302,VT206-0303,VT206-0304,VT206-0305,VT206-0306,VT206-0307,VT206-0308";
$testcase['Browserexternallinks'][1] = "";
$testcase['Browserexternallinks'][2] = "";









$testcase['saverestore'][0] = "VT227-0001";
$testcase['saverestore'][1] = "saverestore";
$testcase['saverestore'][2] = "";

$testcase['scale'][0] = "VT227-0002";
$testcase['scale'][1] = "scale";
$testcase['scale'][2] = "";

$testcase['rotation'][0] = "VT227-0003";
$testcase['rotation'][1] = "rotation";
$testcase['rotation'][2] = "";

$testcase['translate'][0] = "VT227-0004";
$testcase['translate'][1] = "translate";
$testcase['translate'][2] = "";

$testcase['transform'][0] = "VT227-0005";
$testcase['transform'][1] = "transform";
$testcase['transform'][2] = "";

$testcase['transformcombined'][0] = "VT227-0005,VT227-0006,VT227-0007";
$testcase['transformcombined'][1] = "transformcombined";
$testcase['transformcombined'][2] = "transformcombined";

$testcase['drawline'][0] = "VT227-0008";
$testcase['drawline'][1] = "drawline";
$testcase['drawline'][2] = "";

$testcase['drawline_changewidth'][0] = "VT227-0009";
$testcase['drawline_changewidth'][1] = "drawline_changewidth";
$testcase['drawline_changewidth'][2] = "";

$testcase['drawline_width_return'][0] = "VT227-0010";
$testcase['drawline_width_return'][1] = "drawline_width_return";
$testcase['drawline_width_return'][2] = "";

$testcase['linecap'][0] = "VT227-0011,VT227-0012,VT227-0013";
$testcase['linecap'][1] = "linecap";
$testcase['linecap'][2] = "linecap";

$testcase['linejoin'][0] = "VT227-0014,VT227-0015,VT227-0016";
$testcase['linejoin'][1] = "linejoin";
$testcase['linejoin'][2] = "linejoin";

$testcase['linejoin_miter'][0] = "VT227-0017";
$testcase['linejoin_miter'][1] = "linejoin_miter";
$testcase['linejoin_miter'][2] = "linejoin_miter";


$testcase['miterlimitcombined'][0] = "VT227-0018";
$testcase['miterlimitcombined'][1] = "miterlimitcombined";
$testcase['miterlimitcombined'][2] = "miterlimitcombined";

$testcase['fontarial'][0] = "VT227-0019";
$testcase['fontarial'][1] = "";
$testcase['fontarial'][2] = "";

$testcase['defaultfontsetting'][0] = "VT227-0020";
$testcase['defaultfontsetting'][1] = "";
$testcase['defaultfontsetting'][2] = "";

$testcase['textaligncombined'][0] = "VT227-0021,VT227-0022,VT227-0023,VT227-0024,VT227-0025";
$testcase['textaligncombined'][1] = "textaligncombined";
$testcase['textaligncombined'][2] = "textaligncombined";

$testcase['defaulttextalign'][0] = "VT227-0026";
$testcase['defaulttextalign'][1] = "";
$testcase['defaulttextalign'][2] = "";

$testcase['textBaseline'][0] = "VT227-0027,VT227-0028,VT227-0029,VT227-0030,VT227-0031,VT227-0032";
$testcase['textBaseline'][1] = "textBaseline";
$testcase['textBaseline'][2] = "textBaseline";

$testcase['defaulttextBaseline'][0] = "VT227-0033";
$testcase['defaulttextBaseline'][1] = "";
$testcase['defaulttextBaseline'][2] = "";

$testcase['movePath'][0] = "VT227-0034";
$testcase['movePath'][1] = "movePath";
$testcase['movePath'][2] = "movePath";

$testcase['closePath'][0] = "VT227-0035";
$testcase['closePath'][1] = "";
$testcase['closePath'][2] = "";

$testcase['drawquadraticcurve'][0] = "VT227-0036";
$testcase['drawquadraticcurve'][1] = "drawquadraticcurve";
$testcase['drawquadraticcurve'][2] = "";

$testcase['drawquadraticcurve_cp1x'][0] = "VT227-0036";
$testcase['drawquadraticcurve_cp1x'][1] = "drawquadraticcurve_cp1x";
$testcase['drawquadraticcurve_cp1x'][2] = "drawquadraticcurve_cp1x";

$testcase['drawbezier'][0] = "VT227-0037";
$testcase['drawbezier'][1] = "drawbezier";
$testcase['drawbezier'][2] = "";

$testcase['drawdrawbezier_cp1x'][0] = "VT227-0037";
$testcase['drawdrawbezier_cp1x'][1] = "drawdrawbezier_cp1x";
$testcase['drawdrawbezier_cp1x'][2] = "drawdrawbezier_cp1x";

$testcase['arcTo_x2'][0] = "VT227-0038";
$testcase['arcTo_x2'][1] = "arcTo_x2";
$testcase['arcTo_x2'][2] = "arcTo_x2";


$testcase['arcTo'][0] = "VT227-0038";
$testcase['arcTo'][1] = "";
$testcase['arcTo'][2] = "";

$testcase['arcTo_r'][0] = "VT227-0038";
$testcase['arcTo_r'][1] = "arcTo_r";
$testcase['arcTo_r'][2] = "arcTo_r";

$testcase['arcTo_x1'][0] = "VT227-0038";
$testcase['arcTo_x1'][1] = "arcTo_x1";
$testcase['arcTo_x1'][2] = "arcTo_x1";

$testcase['arcTo_y1'][0] = "VT227-0038";
$testcase['arcTo_y1'][1] = "arcTo_y1";
$testcase['arcTo_y1'][2] = "arcTo_y1";

$testcase['arcTo_y2'][0] = "VT227-0038";
$testcase['arcTo_y2'][1] = "arcTo_y2";
$testcase['arcTo_y2'][2] = "arcTo_y2";

$testcase['drawarc_r'][0] = "VT227-0039";
$testcase['drawarc_r'][1] = "drawarc_r";
$testcase['drawarc_r'][2] = "drawarc_r";

$testcase['drawarc_sAngle'][0] = "VT227-0039";
$testcase['drawarc_sAngle'][1] = "drawarc_sAngle";
$testcase['drawarc_sAngle'][2] = "drawarc_sAngle";

$testcase['drawarc_x'][0] = "VT227-0039";
$testcase['drawarc_x'][1] = "drawarc_x";
$testcase['drawarc_x'][2] = "drawarc_x";


$testcase['drawarc_y'][0] = "VT227-0039";
$testcase['drawarc_y'][1] = "drawarc_y";
$testcase['drawarc_y'][2] = "drawarc_y";

$testcase['drawarc'][0] = "VT227-0039";
$testcase['drawarc'][1] = "";
$testcase['drawarc'][2] = "";

$testcase['drawarc_clockwise'][0] = "VT227-0039";
$testcase['drawarc_clockwise'][1] = "drawarc_clockwise";
$testcase['drawarc_clockwise'][2] = "drawarc_clockwise";

$testcase['drawarc_eAngle'][0] = "VT227-0039";
$testcase['drawarc_eAngle'][1] = "drawarc_eAngle";
$testcase['drawarc_eAngle'][2] = "drawarc_eAngle";





$testcase['drawrect_height'][0] = "VT227-0040";
$testcase['drawrect_height'][1] = "drawrect_height";
$testcase['drawrect_height'][2] = "drawrect_height";

$testcase['drawrect_width'][0] = "VT227-0040";
$testcase['drawrect_width'][1] = "drawrect_width";
$testcase['drawrect_width'][2] = "drawrect_width";

$testcase['drawrect_x'][0] = "VT227-0040";
$testcase['drawrect_x'][1] = "drawrect_x";
$testcase['drawrect_x'][2] = "drawrect_x";

$testcase['drawrect_y'][0] = "VT227-0040";
$testcase['drawrect_y'][1] = "drawrect_y";
$testcase['drawrect_y'][2] = "drawrect_y";

$testcase['drawrect'][0] = "VT227-0040";
$testcase['drawrect'][1] = "";
$testcase['drawrect'][2] = "";

$testcase['fillstyle_color'][0] = "VT227-0041";
$testcase['fillstyle_color'][1] = "fillstyle_color";
$testcase['fillstyle_color'][2] = "fillstyle_color";

$testcase['fillstyle'][0] = "VT227-0042";
$testcase['fillstyle'][1] = "";
$testcase['fillstyle'][2] = "";


$testcase['defaultfillstyle'][0] = "VT227-0042";
$testcase['defaultfillstyle'][1] = "";
$testcase['defaultfillstyle'][2] = "";

$testcase['strokestyle'][0] = "VT227-0043";
$testcase['strokestyle'][1] = "";
$testcase['strokestyle'][2] = "";

$testcase['strokestyle_color'][0] = "VT227-0043";
$testcase['strokestyle_color'][1] = "strokestyle_color";
$testcase['strokestyle_color'][2] = "strokestyle_color";


$testcase['drawfill'][0] = "VT227-0044";
$testcase['drawfill'][1] = "";
$testcase['drawfill'][2] = "";

$testcase['drawclip'][0] = "VT227-0045";
$testcase['drawclip'][1] = "";
$testcase['drawclip'][2] = "";

$testcase['ispointInpath'][0] = "VT227-0046";
$testcase['ispointInpath'][1] = "";
$testcase['ispointInpath'][2] = "";

$testcase['ispointInpath_1'][0] = "VT227-0047";
$testcase['ispointInpath_1'][1] = "";
$testcase['ispointInpath_1'][2] = "";

$testcase['clearRect'][0] = "VT227-0048";
$testcase['clearRect'][1] = "";
$testcase['clearRect'][2] = "";

$testcase['clearRect_height'][0] = "VT227-0048";
$testcase['clearRect_height'][1] = "clearRect_height";
$testcase['clearRect_height'][2] = "clearRect_height";

$testcase['clearRect_width'][0] = "VT227-0048";
$testcase['clearRect_width'][1] = "clearRect_width";
$testcase['clearRect_width'][2] = "clearRect_width";

$testcase['clearRect_x'][0] = "VT227-0048";
$testcase['clearRect_x'][1] = "clearRect_x";
$testcase['clearRect_x'][2] = "clearRect_x";

$testcase['clearRect_y'][0] = "VT227-0048";
$testcase['clearRect_y'][1] = "clearRect_y";
$testcase['clearRect_y'][2] = "clearRect_y";





$testcase['filltext_text'][0] = "VT227-0049";
$testcase['filltext_text'][1] = "filltext_text";
$testcase['filltext_text'][2] = "filltext_text";

$testcase['filltext_x'][0] = "VT227-0049";
$testcase['filltext_x'][1] = "filltext_x";
$testcase['filltext_x'][2] = "filltext_x";

$testcase['filltext_y'][0] = "VT227-0049";
$testcase['filltext_y'][1] = "filltext_y";
$testcase['filltext_y'][2] = "filltext_y";

$testcase['filltext'][0] = "VT227-0049";
$testcase['filltext'][1] = "";
$testcase['filltext'][2] = "";

$testcase['filltext_maxWidth'][0] = "VT227-0049";
$testcase['filltext_maxWidth'][1] = "filltext_maxWidth";
$testcase['filltext_maxWidth'][2] = "filltext_maxWidth";



$testcase['stroketext_maxwidth'][0] = "VT227-0050";
$testcase['stroketext_maxwidth'][1] = "stroketext_maxwidth";
$testcase['stroketext_maxwidth'][2] = "stroketext_maxwidth";


$testcase['stroketext_text'][0] = "VT227-0050";
$testcase['stroketext_text'][1] = "stroketext_text";
$testcase['stroketext_text'][2] = "stroketext_text";

$testcase['stroketext_x'][0] = "VT227-0050";
$testcase['stroketext_x'][1] = "stroketext_x";
$testcase['stroketext_x'][2] = "stroketext_x";

$testcase['stroketext_y'][0] = "VT227-0050";
$testcase['stroketext_y'][1] = "stroketext_y";
$testcase['stroketext_y'][2] = "stroketext_y";

$testcase['stroketext'][0] = "VT227-0050";
$testcase['stroketext'][1] = "";
$testcase['stroketext'][2] = "";


$testcase['measureText'][0] = "VT227-0051";
$testcase['measureText'][1] = "";
$testcase['measureText'][2] = "";


$testcase['measureText_text'][0] = "VT227-0051";
$testcase['measureText_text'][1] = "measureText_text";
$testcase['measureText_text'][2] = "measureText_text";


$testcase['drawImage'][0] = "VT227-0052";
$testcase['drawImage'][1] = "";
$testcase['drawImage'][2] = "";

$testcase['drawImage_y'][0] = "VT227-0052";
$testcase['drawImage_y'][1] = "drawImage_y";
$testcase['drawImage_y'][2] = "drawImage_y";

$testcase['drawImage_x'][0] = "VT227-0052";
$testcase['drawImage_x'][1] = "drawImage_x";
$testcase['drawImage_x'][2] = "drawImage_x";



$testcase['drawImage_width'][0] = "VT227-0053";
$testcase['drawImage_width'][1] = "drawImage_width";
$testcase['drawImage_width'][2] = "drawImage_width";

$testcase['drawImage_height'][0] = "VT227-0053";
$testcase['drawImage_height'][1] = "drawImage_height";
$testcase['drawImage_height'][2] = "drawImage_height";





$testcase['drawImage_dwidth'][0] = "VT227-0054";
$testcase['drawImage_dwidth'][1] = "drawImage_dwidth";
$testcase['drawImage_dwidth'][2] = "drawImage_dwidth";

$testcase['drawImage_dx'][0] = "VT227-0054";
$testcase['drawImage_dx'][1] = "drawImage_dx";
$testcase['drawImage_dx'][2] = "drawImage_dx";

$testcase['drawImage_dy'][0] = "VT227-0054";
$testcase['drawImage_dy'][1] = "drawImage_dy";
$testcase['drawImage_dy'][2] = "drawImage_dy";

$testcase['drawImage_dheight'][0] = "VT227-0054";
$testcase['drawImage_dheight'][1] = "drawImage_dheight";
$testcase['drawImage_dheight'][2] = "drawImage_dheight";


$testcase['globalalpha'][0] = "VT227-0055";
$testcase['globalalpha'][1] = "";
$testcase['globalalpha'][2] = "";

$testcase['globalalpha_0and1'][0] = "VT227-0056,VT227-0057";
$testcase['globalalpha_0and1'][1] = "globalalpha_0and1";
$testcase['globalalpha_0and1'][2] = "globalalpha_0and1";

$testcase['globalcompositeoperation'][0] = "VT227-0058,VT227-0059,VT227-0060,VT227-0061,VT227-0062,VT227-0063,VT227-0064,VT227-0065,VT227-0066,VT227-0067,VT227-0068";
$testcase['globalcompositeoperation'][1] = "globalcompositeoperation";
$testcase['globalcompositeoperation'][2] = "globalcompositeoperation";

$testcase['composition'][0] = "VT227-0058,VT227-0059,VT227-0060,VT227-0061,VT227-0062,VT227-0063,VT227-0064,VT227-0065,VT227-0066,VT227-0067,VT227-0068";
$testcase['composition'][1] = "composition";
$testcase['composition'][2] = "";

$testcase['shadowblur'][0] = "VT227-0069";
$testcase['shadowblur'][1] = "";
$testcase['shadowblur'][2] = "";

$testcase['shadowcolor'][0] = "VT227-0070";
$testcase['shadowcolor'][1] = "";
$testcase['shadowcolor'][2] = "";

$testcase['shadowoffsetx'][0] = "VT227-0071";
$testcase['shadowoffsetx'][1] = "";
$testcase['shadowoffsetx'][2] = "";

$testcase['shadowoffsety'][0] = "VT227-0072";
$testcase['shadowoffsety'][1] = "";
$testcase['shadowoffsety'][2] = "";


$testcase['shadowcircle'][0] = "VT227-0072";
$testcase['shadowcircle'][1] = "";
$testcase['shadowcircle'][2] = "";


$testcase['HTML5_tags'][0] = "VT227-0073,VT227-0074,VT227-0075,VT227-0076,VT227-0077,VT227-0078,VT227-0079,VT227-0080,VT227-0081,VT227-0082,VT227-0083,VT227-0084,VT227-0085,VT227-0086,VT227-0087,VT227-0088,VT227-0089";
$testcase['HTML5_tags'][1] = "";
$testcase['HTML5_tags'][2] = "";

$testcase['geotest'][0] = "VT227-0099,VT227-0100,VT227-0101,VT227-0102,VT227-0103,VT227-0104,VT227-0105,VT227-0106,VT227-0107,VT227-0108,VT227-0109,VT227-0110";
$testcase['geotest'][1] = "";
$testcase['geotest'][2] = "geotest";

$testcase['geo'][0] = "VT227-0099,VT227-0100,VT227-0101,VT227-0102,VT227-0103,VT227-0104,VT227-0105,VT227-0106,VT227-0107,VT227-0108,VT227-0109,VT227-0110";
$testcase['geo'][1] = "geo";
$testcase['geo'][2] = "";


$testcase['storage'][0] = "VT227-0111,VT227-0112,VT227-0113,VT227-0114,VT227-0115,VT227-0116,VT227-0117,VT227-0118,VT227-0119,VT227-0120,VT227-0121,VT227-0122,VT227-0123,VT227-0124,VT227-0125,VT227-0126,VT227-0127,VT227-0128,VT227-0129,VT227-0130,VT227-0131,VT227-0132,VT227-0133,VT227-0134,VT227-0135,VT227-0136,VT227-0137,VT227-0138,VT227-0139,VT227-0140,VT227-0141,VT227-0142,VT227-0143,VT227-0144,VT227-0145,VT227-0146,VT227-0147,VT227-0148,VT227-0149,VT227-0150,VT227-0151,VT227-0152,VT227-0153,VT227-0154,VT227-0155,VT227-0156,VT227-0157,VT227-0158,VT227-0159";
$testcase['storage'][1] = "storage";
$testcase['storage'][2] = "";


$testcase['Webworker_start_stop'][0] = "VT227-0160,VT227-0161,VT227-0162,VT227-0163,VT227-0164";
$testcase['Webworker_start_stop'][1] = "";
$testcase['Webworker_start_stop'][2] = "";

$testcase['webworker'][0] = "VT227-0160,VT227-0161,VT227-0162,VT227-0163";
$testcase['webworker'][1] = "";
$testcase['webworker'][2] = "";

$testcase['webworker_import1'][0] = "VT227-0165";
$testcase['webworker_import1'][1] = "";
$testcase['webworker_import1'][2] = "";

$testcase['webworker_import2'][0] = "VT227-0166";
$testcase['webworker_import2'][1] = "";
$testcase['webworker_import2'][2] = "";



$testcase['sharedworkers'][0] = "VT227-0168";
$testcase['sharedworkers'][1] = "sharedworkers";
$testcase['sharedworkers'][2] = "";


$testcase['inlineworkers'][0] = "VT227-0169";
$testcase['inlineworkers'][1] = "";
$testcase['inlineworkers'][2] = "";


$testcase['echotest'][0] = "VT227-0171,VT227-0172,VT227-0173,VT227-0174,VT227-0175,VT227-0176,VT227-0177,VT227-0178";
$testcase['echotest'][1] = "";
$testcase['echotest'][2] = "";

$testcase['websql'][0] = "VT227-0180,VT227-0181,VT227-0182,VT227-0183,VT227-0184,VT227-0185,VT227-0186,VT227-0187";
$testcase['websql'][1] = "websql";
$testcase['websql'][2] = "websql";

$testcase['websqlstorage'][0] = "VT227-0180,VT227-0181,VT227-0182,VT227-0183,VT227-0184,VT227-0185,VT227-0186,VT227-0187";
$testcase['websqlstorage'][1] = "";
$testcase['websqlstorage'][2] = "";

$testcase['new-inputs'][0] = "VT227-0195,VT227-0196,VT227-0197,VT227-0198,VT227-0199,VT227-0200,VT227-0201,VT227-0202,VT227-0203,VT227-0204,VT227-0205,VT227-0206,VT227-0207,VT227-0208,VT227-0209,VT227-0210,VT227-0211,VT227-0212,VT227-0213,VT227-0214,VT227-0215,VT227-0216";
$testcase['new-inputs'][1] = "";
$testcase['new-inputs'][2] = "new-inputs";

$testcase['webworker_import2'][0] = "VT227-0217";
$testcase['webworker_import2'][1] = "";
$testcase['webworker_import2'][2] = "";

$testcase['fivewebworker'][0] = "VT227-0218";
$testcase['fivewebworker'][1] = "";
$testcase['fivewebworker'][2] = "";

$testcase['Image_localstorage'][0] = "VT227-0220";
$testcase['Image_localstorage'][1] = "";
$testcase['Image_localstorage'][2] = "Image_localstoragecss/base";

$testcase['Image_sessionstorage'][0] = "VT227-0221";
$testcase['Image_sessionstorage'][1] = "";
$testcase['Image_sessionstorage'][2] = "Image_sessionstoragecss/base";


$testcase['Imagedb'][0] = "VT227-0222";
$testcase['Imagedb'][1] = "";
$testcase['Imagedb'][2] = "Imagedbcss/base";

$testcase['animate'][0] = "VT227-0224";
$testcase['animate'][1] = "animate";
$testcase['animate'][2] = "";

$testcase['draganddrop'][0] = "VT227-0225";
$testcase['draganddrop'][1] = "draganddrop";
$testcase['draganddrop'][2] = "draganddrop";

$testcase['draganddropbackforth'][0] = "VT227-0226";
$testcase['draganddropbackforth'][1] = "draganddropbackforth";
$testcase['draganddropbackforth'][2] = "draganddropbackforth";



$testcase['gradient_lefttoright'][0] = "VT227-0227";
$testcase['gradient_lefttoright'][1] = "";
$testcase['gradient_lefttoright'][2] = "";


$testcase['gradient_toptobottom'][0] = "VT227-0228";
$testcase['gradient_toptobottom'][1] = "";
$testcase['gradient_toptobottom'][2] = "";


$testcase['gradient_redblack'][0] = "VT227-0229";
$testcase['gradient_redblack'][1] = "";
$testcase['gradient_redblack'][2] = "";

$testcase['createPatternRepeatxy'][0] = "VT227-0230";
$testcase['createPatternRepeatxy'][1] = "";
$testcase['createPatternRepeatxy'][2] = "";

$testcase['gradientmultipleaddColorStop'][0] = "VT227-0231";
$testcase['gradientmultipleaddColorStop'][1] = "";
$testcase['gradientmultipleaddColorStop'][2] = "";

$testcase['gradientRadialGradient'][0] = "VT227-0232";
$testcase['gradientRadialGradient'][1] = "";
$testcase['gradientRadialGradient'][2] = "";

 
$testcase['HTML5externallinks'][0] = "VT227-0167,VT227-0170,VT227-0179,VT227-0233,VT227-0234,VT227-0235,VT227-0223,VT227-0236,VT227-0237";
$testcase['HTML5externallinks'][1] = "";
$testcase['HTML5externallinks'][2] = "";

$testcaseReadiness = array();
$testReadinessSequence = array("cookie","ajax_post","ajax_get","ReadinessSoapbasedCall_GetpostIIS","check","digest","Readinessexternallinks","Readinessexternallinks","guiinteration","geotest","storage","Readinessexternallinks","websql");

$testcaseReadiness['cookie'][0]="VT200-155";
$testcaseReadiness['cookie'][1]="cookie";
$testcaseReadiness['cookie'][2]="";

$testcaseReadiness['ajax_post'][0] = "VT200-157";
$testcaseReadiness['ajax_post'][1] = "ajax_post";
$testcaseReadiness['ajax_post'][2] = "";

$testcaseReadiness['ajax_get'][0] = "VT200-158";
$testcaseReadiness['ajax_get'][1] = "ajax_get";
$testcaseReadiness['ajax_get'][2] = "";

$testcaseReadiness['ReadinessSoapbasedCall_GetpostIIS'][0] = "VT200-162,VT200-163";
$testcaseReadiness['ReadinessSoapbasedCall_GetpostIIS'][1] = "";
$testcaseReadiness['ReadinessSoapbasedCall_GetpostIIS'][2] = "";


$testcaseReadiness['check'][0] = "VT200-170";
$testcaseReadiness['check'][1] = "";
$testcaseReadiness['check'][2] = "";

$testcaseReadiness['digest'][0] = "VT200-172";
$testcaseReadiness['digest'][1] = "";
$testcaseReadiness['digest'][2] = "";

$testcaseReadiness['Readinessexternallinks'][0] = "VT200-173";
$testcaseReadiness['Readinessexternallinks'][1] = "";
$testcaseReadiness['Readinessexternallinks'][2] = "";

$testcaseReadiness['Readinessexternallinks'][0] = "VT200-174";
$testcaseReadiness['Readinessexternallinks'][1] = "";
$testcaseReadiness['Readinessexternallinks'][2] = "";

$testcaseReadiness['guiinteration'][0] = "VT200-177";
$testcaseReadiness['guiinteration'][1] = "";
$testcaseReadiness['guiinteration'][2] = "";

$testcaseReadiness['geotest'][0] = "VT200-187";
$testcaseReadiness['geotest'][1] = "";
$testcaseReadiness['geotest'][2] = "geotest";


$testcaseReadiness['storage'][0] = "VT200-190,VT200-193";
$testcaseReadiness['storage'][1] = "storage";
$testcaseReadiness['storage'][2] = "";

$testcaseReadiness['Readinessexternallinks'][0] = "VT200-197";
$testcaseReadiness['Readinessexternallinks'][1] = "";
$testcaseReadiness['Readinessexternallinks'][2] = "";

$testcaseReadiness['websql'][0] = "VT200-200";
$testcaseReadiness['websql'][1] = "websql";
$testcaseReadiness['websql'][2] = "websql";

?>