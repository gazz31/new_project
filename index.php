<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		  <script type="text/javascript">
            function clock()
            {
                var data = new Date();
                var day = data.getDate();
                if (day<10){day="0"+day;}
                var month = data.getMonth()+1;
                if (month<10){month="0"+month;}
                var year = data.getFullYear();
                var hour = data.getHours();
                if (hour<10){hour="0"+hour;}
                var min = data.getMinutes();
                if (min<10){min="0"+min;}
                var sec = data.getSeconds();
                if (sec<10){sec="0"+sec;}
                
                document.getElementById("czas").innerHTML = day + "/" + month + "/" + year + "    " + hour + ":" + min + ":" + sec;
                
                setTimeout("clock()", 1000);
                
            }

        </script>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">          


        <link rel="stylesheet" href="first.css">
   
	</head>

	<body onload="clock();">
        <header>
            <a href="index.php"><div class="first">Zapraszamy</div></a>
           
        </header>
        
        <nav>
           
             
             <h1 class="one">Produkty w warzywniaku!</h1>
             <div id="czas"  class="clock"></div>
            <ul>
               
                <li class="ziele"><p class="n1">Zielenina</p><a  href="http://definicja.net/definicja/Zielenina"><h4 class="e"><img class="grafika_0"  src="grafika/definicje.jpg"/><p class="i">Definicja zieleniny</p></h4></a></li>
                <li class="warzywa"><p class="wa"><p class="n1">Warzywa</p><div class="warzywa-div"><a class="click" href="http://www.poradnikzdrowie.pl/zywienie/co-jesz/ogorek-wlasciwosci-odzywcze-jakie-witaminy-ma-ogorek_37516.html"><img class="grafika"  src="grafika/ogorek.jpg"/><p class="zero">ogórek</p></a><a class="click" href="http://rosliny.urzadzamy.pl/baza-roslin/warzywa/pietruszka-zwyczajna,17_1079/"><img class="grafika"  src="grafika/pietruszka.jpg"/><p class="zero">pietruszka</p></a><a class="click" href="http://www.poradnikzdrowie.pl/zywienie/co-jesz/por-wlasciwosci-i-wartosci-odzywcze_43347.html"><img class="grafika"  src="grafika/por.jpg"/><p class="zero">por</p></a></div></li>
                
                
                
                
                
                
                <li class="cennik"><p class="n1">Cennik</p><form class="formu" action="wynik.php" method="post">
                    <p class="a">ogórek 3zł/kg</p><input class="pole" type="number" name="one"/><br>
                    <p class="a">pietruszka 2zł/kg</p> <input class="pole" type="number" name="two"/><br>
                    <p class="a">por 1zł/kg</p><input class="pole" type="number" name="three"/><br>
                 <small>Wymagane jest aby wypełnić wszystkie pola produktów.</small> <br>   
                <input class="suma" type="submit" value="suma za produkty" name="submited"/>
               
               
                
            
              
                </form></li>
                
                
            
            
            </ul>
            
        </nav>
	</body>
</html>