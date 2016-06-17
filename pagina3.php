<html>
<head>
	<title>sugerencias</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="estilo.css">
<div class="h">
<?php
if ($_REQUEST['radio1']=="hombre")
{
	$hombre=(495/(1.0324-0.19077*log10($_REQUEST['cintura']-$_REQUEST['cuello'
		])+0.15456*log10($_REQUEST['alto']))-450);
	$igch=round($hombre,2);
	echo $_REQUEST['nombre']." su indice de grasa corporal es de:";
	echo $igch."%";
	if ($_REQUEST['edad']<=24){
	switch ($igch) {
		case (($igch>=2) && ($igch>=7)):
		 	echo "esta situado en el rango de:ESENCIAL";
			break;
		case (($igch>7) && ($igch<=12)):
			echo "esta situado en el rango de:ATLETA";
			break;
		case (($igch>12) && ($igch<=15)):
			echo "esta situado en el rango de:EXCELENTE";
			break;
		case (($igch>15) && ($igch<=20)):
			echo "esta situado en el rango de:BUENO";
			break;
		case (($igch>20) && ($igch<=25)):
			echo "situado en el rango de:ESTANDAR";
			break;
		case (($igch>25) && ($igch<=30)):
			echo "situado en el rango de:SOBREPESO";
			break;
		case ($igch>30) :
			echo "situado en el rango de:OBESIDAD";
			break;
		}
	}
	if (($_REQUEST['edad']>=25) && ($_REQUEST['edad']<=29)){
	switch ($igch) {
		case (($igch>=0) && ($igch<=7)):
			echo "situado en el rango de:ESENCIAL ";
			break;
		case (($igch>7) && ($igch<=12)):
			echo "situado en el rango de:ATLETA ";
			break;
		case (($igch>12) && ($igch<=16)):
			echo "esta situado en el rango de:EXCELENTE ";
			break;
		case (($igch>16) && ($igch<=21)):
			echo "esta situado en el rango de:BUENO ";
			break;
		case (($igch>21) && ($igch<=26)):
			echo "esta situado en el rango de:ESTANDAR ";
			break;
		case (($igch>26) && ($igch<=31)):
			echo "esta situado en el rango de:SOBREPESO ";
			break;
		case ($igch>31) :
			echo "esta situado en el rango de:OBESIDAD ";
			break;
	}
}
if (($_REQUEST['edad']>=35) && ($_REQUEST['edad']<=39)){
	switch ($igch) {
		case (($igch>=0) && ($igch<=7)):
			echo "esta situado en el rango de:ESENCIAL";
			break;
		case (($igch>7) && ($igch<=12)):
			echo "esta situado en el rango de:ATLETA";
			break;
		case (($igch>12) && ($igch<=19)):
			echo "esta situado en el rango de:EXCELENTE";
			break;
		case (($igch>19) && ($igch<=23)):
			echo "esta situado en el rango de:BUENO";
			break;
		case (($igch>23) && ($igch<=28)):
			echo "esta situado en el rango de:ESTANDAR";
			break;
		case (($igch>28) && ($igch<=33)):
			echo "esta situado en el rango de:SOBREPESO";
			break;
		case ($igch>33) :
			echo "esta situado en el rango de:OBESIDAD";
			break;
	}
}
if (($_REQUEST['edad']>=40) && ($_REQUEST['edad']<=44)){
	switch ($igch) {
		case (($igch>=0) && ($igch<=7)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igch>7) && ($igch<=12)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igch>12) && ($igch<=21)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igch>21) && ($igch<=24)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igch>24) && ($igch<=29)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igch>29) && ($igch<=34)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igch>34) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if (($_REQUEST['edad']>=45) && ($_REQUEST['edad']<=49)){
	switch ($igch) {
		case (($igch>=0) && ($igch<=7)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igch>7) && ($igch<=12)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igch>12) && ($igch<=23)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igch>23) && ($igch<=26)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igch>26) && ($igch<=31)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igch>31) && ($igch<=36)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igch>36) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if (($_REQUEST['edad']>=50) && ($_REQUEST['edad']<=54)){
	switch ($igch) {
		case (($igch>=0) && ($igch<=7)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igch>7) && ($igch<=12)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igch>12) && ($igch<=25)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igch>25) && ($igch<=28)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igch>28) && ($igch<=33)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igch>33) && ($igch<=37)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igch>37) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if (($_REQUEST['edad']>=55) && ($_REQUEST['edad']<=59)){
	switch ($igch) {
		case (($igch>=0) && ($igch<=7)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igch>7) && ($igch<=12)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igch>12) && ($igch<=26)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igch>26) && ($igch<=29)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igch>29) && ($igch<=34)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igch>34) && ($igch<=38)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igch>38) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if ($_REQUEST['edad']>=60){
	switch ($igch) {
		case (($igch>=0) && ($igch<=7)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igch>7) && ($igch<=12)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igch>12) && ($igch<=27)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igch>27) && ($igch<=30)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igch>30) && ($igch<=35)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igch>35) && ($igch<=39)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igch>39) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
}
}}
elseif ($_REQUEST['radio1']=="mujer") {
	$mujer=(595/(1.29579-0.35004*log10($_REQUEST['cintura']+$_REQUEST['cadera'
		]-$_REQUEST['cuello'])+0.221*log10($_REQUEST['alto']))-450);
	$igcm=round($mujer,2);
	echo $_REQUEST['nombre']." su indice de grasa corporal es de:";
	echo $igcm."%";
if (($_REQUEST['edad']>=25) && ($_REQUEST['edad']<=29)){
	switch ($igcm) {
		case (($igcm>=0) && ($igcm<=2)):
			echo "el cual esta situado en el rango de:ESENCIAL ";
			break;
		case (($igcm>2) && ($igcm<=6)):
			echo "el cual esta situado en el rango de:ATLETA ";
			break;
		case (($igcm>6) && ($igcm<=10)):
			echo "el cual esta situado en el rango de:EXCELENTE ";
			break;
		case (($igcm>10) && ($igcm<=16)):
			echo "el cual esta situado en el rango de:BUENO ";
			break;
		case (($igcm>16) && ($igcm<=19)):
			echo "el cual esta situado en el rango de:ESTANDAR ";
			break;
		case (($igcm>19) && ($igcm<=24)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igcm>24) :
			echo "el cual esta situado en el rango de:OBESIDAD ";
			break;
	}
}
if (($_REQUEST['edad']>=30) && ($_REQUEST['edad']<=34)){
	switch ($igcm) {
		case (($igcm>=0) && ($igcm<=2)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igcm>2) && ($igcm<=6)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igcm>6) && ($igcm<=11)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igcm>11) && ($igcm<=17)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igcm>17) && ($igcm<=19)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igcm>19) && ($igcm<=25)):
			echo "el cual esta situado en el rango de:SOBREPESO";
			break;
		case ($igcm>25) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if (($_REQUEST['edad']>=35) && ($_REQUEST['edad']<=39)){
	switch ($igcm) {
		case (($igcm>=0) && ($igcm<=2)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igcm>2) && ($igcm<=6)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igcm>6) && ($igcm<=12)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igcm>12) && ($igcm<=18)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igcm>18) && ($igcm<=19)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igcm>19) && ($igcm<=26)):
			echo "el cual esta situado en el rango de:SOBREPESO";
			break;
		case ($igcm>26) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if (($_REQUEST['edad']>=40) && ($_REQUEST['edad']<=44)){
	switch ($igcm) {
		case (($igcm>=0) && ($igcm<=2)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igcm>2) && ($igcm<=6)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igcm>6) && ($igcm<=13)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igcm>13) && ($igcm<=19)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igcm>19) && ($igcm<=19)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igcm>19) && ($igcm<=27)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igcm>27) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if (($_REQUEST['edad']>=45) && ($_REQUEST['edad']<=49)){
	switch ($igcm) {
		case (($igcm>=0) && ($igcm<=2)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igcm>2) && ($igcm<=6)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igcm>6) && ($igcm<=15)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igcm>15) && ($igcm<=21)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igcm>21) && ($igcm<=25)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igcm>25) && ($igcm<=28)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igcm>28) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if (($_REQUEST['edad']>=50) && ($_REQUEST['edad']<=54)){
	switch ($igcm) {
		case (($igcm>=0) && ($igcm<=2)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igcm>2) && ($igcm<=6)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igcm>6) && ($igcm<=17)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igcm>17) && ($igcm<=23)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igcm>23) && ($igcm<=26)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igcm>26) && ($igcm<=29)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igcm>29) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if (($_REQUEST['edad']>=55) && ($_REQUEST['edad']<=59)){
	switch ($igcm) {
		case (($igcm>=0) && ($igcm<=2)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igcm>2) && ($igcm<=6)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igcm>6) && ($igcm<=19)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igcm>19) && ($igcm<=24)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igcm>24) && ($igcm<=28)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igcm>28) && ($igcm<=30)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igcm>30) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if ($_REQUEST['edad']>=60){
	switch ($igcm) {
		case (($igcm>=0) && ($igcm<=2)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igcm>2) && ($igcm<=6)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igcm>6) && ($igcm<=20)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igcm>20) && ($igcm<=25)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igcm>25) && ($igcm<=29)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igcm>29) && ($igcm<=31)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igcm>31) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}}
?>
</div>
</body>
</html>