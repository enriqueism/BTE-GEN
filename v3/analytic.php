<?php
require_once '../conf/DbConnector.php';
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
                            or die('<p><font color=red>Fehler bei der Datenbankverbindung: ' .
                                    mysqli_connect_errno() . ': ' . mysqli_connect_error() . '</p>');
$sql = "SELECT Book.Book_ID, Book.Book_Name, Book.Book_Vol, Series.Ser_Name FROM Series, Book WHERE Series.Ser_ID = Book.Series_Ser_ID";
$result = mysqli_query($db, $sql);


$a = array('252'=>789,'328'=>62,'283'=>603,'253'=>564,'269'=>509,'308'=>48,'324'=>434,'279'=>411,'152'=>4,'323'=>345,'276'=>31,'273'=>307,'282'=>303,'274'=>3,'145'=>296,'161'=>288,'327'=>283,'325'=>279,'144'=>278,'1'=>27,'317'=>262,'312'=>257,'322'=>25,'291'=>245,'287'=>239,'76'=>234,'285'=>233,'281'=>231,'24'=>226,'153'=>225,'65'=>224,'156'=>217,'18'=>217,'28'=>217,'79'=>216,'271'=>212,'26'=>211,'154'=>207,'235'=>205,'157'=>203,'246'=>198,'158'=>193,'155'=>191,'257'=>191,'259'=>189,'29'=>188,'159'=>187,'160'=>186,'330'=>186,'133'=>184,'247'=>178,'25'=>178,'27'=>176,'165'=>174,'80'=>174,'71'=>173,'278'=>172,'2'=>17,'239'=>163,'234'=>162,'82'=>16,'338'=>158,'81'=>158,'280'=>157,'83'=>157,'11'=>152,'84'=>152,'318'=>15,'19'=>148,'66'=>143,'67'=>143,'68'=>143,'7'=>143,'85'=>142,'242'=>141,'298'=>14,'70'=>14,'21'=>139,'260'=>139,'265'=>139,'20'=>138,'62'=>138,'23'=>137,'74'=>136,'240'=>134,'292'=>134,'307'=>133,'72'=>133,'166'=>131,'306'=>13,'311'=>13,'69'=>129,'134'=>128,'22'=>128,'13'=>127,'244'=>127,'241'=>126,'261'=>126,'262'=>126,'73'=>126,'245'=>125,'320'=>125,'75'=>124,'15'=>122,'129'=>119,'17'=>119,'266'=>118,'64'=>118,'12'=>117,'238'=>117,'299'=>116,'16'=>115,'295'=>114,'63'=>114,'243'=>112,'9'=>112,'297'=>111,'10'=>11,'167'=>11,'200'=>11,'275'=>11,'14'=>109,'219'=>108,'211'=>107,'270'=>105,'296'=>105,'8'=>104,'173'=>103,'49'=>103,'168'=>102,'179'=>1,'169'=>99,'184'=>99,'256'=>98,'264'=>98,'332'=>97,'52'=>97,'212'=>96,'174'=>94,'183'=>94,'188'=>93,'345'=>93,'172'=>92,'214'=>92,'215'=>92,'294'=>92,'137'=>91,'187'=>91,'263'=>91,'333'=>91,'176'=>9,'181'=>9,'77'=>9,'171'=>89,'175'=>89,'177'=>89,'180'=>89,'185'=>89,'136'=>88,'170'=>88,'286'=>88,'316'=>88,'186'=>87,'50'=>86,'51'=>86,'222'=>85,'30'=>85,'44'=>85,'192'=>84,'329'=>83,'213'=>82,'220'=>82,'178'=>8,'201'=>8,'224'=>8,'336'=>8,'236'=>79,'337'=>79,'78'=>79,'103'=>78,'248'=>78,'223'=>77,'86'=>77,'189'=>76,'202'=>76,'209'=>76,'326'=>76,'48'=>76,'190'=>75,'237'=>75,'225'=>74,'230'=>74,'233'=>73,'88'=>73,'221'=>72,'31'=>72,'90'=>72,'135'=>71,'182'=>71,'217'=>71,'272'=>71,'59'=>71,'203'=>7,'92'=>7,'205'=>69,'206'=>69,'226'=>69,'228'=>69,'249'=>69,'53'=>69,'191'=>68,'319'=>68,'33'=>68,'229'=>67,'208'=>66,'227'=>66,'231'=>66,'232'=>66,'91'=>66,'207'=>65,'3'=>65,'35'=>65,'204'=>64,'32'=>64,'342'=>64,'334'=>63,'37'=>63,'300'=>62,'216'=>61,'218'=>61,'339'=>61,'89'=>61,'303'=>6,'34'=>6,'87'=>6,'254'=>59,'255'=>59,'42'=>58,'268'=>57,'46'=>57,'194'=>56,'199'=>56,'302'=>56,'36'=>56,'60'=>56,'304'=>55,'305'=>55,'196'=>54,'251'=>54,'99'=>54,'293'=>53,'39'=>5,'197'=>49,'301'=>49,'40'=>49,'43'=>49,'61'=>49,'98'=>49,'193'=>48,'38'=>48,'47'=>48,'94'=>48,'138'=>47,'267'=>47,'4'=>47,'45'=>46,'195'=>45,'277'=>45,'340'=>45,'341'=>45,'343'=>44,'347'=>44,'93'=>44,'198'=>43,'344'=>43,'132'=>42,'309'=>42,'164'=>41,'101'=>4,'210'=>37,'284'=>36,'250'=>35,'102'=>34,'258'=>33,'54'=>33,'331'=>32,'139'=>31,'149'=>31,'335'=>3,'128'=>29,'131'=>29,'346'=>28,'104'=>24,'125'=>21,'55'=>21,'288'=>19,'5'=>19,'57'=>19,'118'=>18,'58'=>17,'105'=>15,'289'=>15,'127'=>14,'290'=>14,'110'=>13,'314'=>13,'106'=>12,'120'=>12,'121'=>12,'122'=>12,'146'=>12,'315'=>12,'108'=>11,'109'=>11,'112'=>11,'143'=>11,'114'=>1,'116'=>1,'117'=>1,'147'=>1,'148'=>1,'111'=>9,'113'=>9,'124'=>9,'107'=>8,'115'=>8,'123'=>8,'119'=>7);
while ($zeile = mysqli_fetch_array($result)) {
    if (array_key_exists($zeile['Book_ID'], $a) ) {
        echo $a[$zeile['Book_ID']] . ";" . $zeile['Ser_Name'] . ";" . $zeile['Book_Vol'] . ";" . $zeile['Book_Name'] . "\n";
    }
}
?>
