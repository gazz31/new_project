   
<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">          


        <link rel="stylesheet" href="first.css">
	</head>

	<body>
        <header>
            <a href="index.php"><div class="first">Zapraszamy</div></a>
        </header>
        
        <nav>
             <h1 class="one">Produkty w warzywniaku!</h1>
           
               
               
            
                        <?php
                        $ogorek = $_POST['one'];
                        $pietruszka = $_POST['two'];
                        $por = $_POST['three'];

                    
                  
                    
                    {?>
            
                        <div class="wynik">
                            <p class="para">
                            <?php
                        if (isset($_POST['submited']))
                        {
                            if (empty($ogorek) || empty($pietruszka) || empty($por))
                            {
                                echo "<p class='a' style='text-align:center'> Nie wypełniłeś odpowiednio wymaganych pól.<br> Proszę o poprawne wypełnienie 'wszystkich' pól.</p>";
                            }
                            else
                            {
                                $ogorek = 3*$ogorek;
                                echo "Za ogórki należy się $ogorek zł <br>";
                                $pietruszka = 2*$pietruszka;
                                echo "Za pietruszkę $pietruszka zł <br>";
                                $por = 1*$por;
                                echo "Za pora musisz wydać $por zł <br>";
                                echo "Dziękuje za udane zakupy :-)";
                            }
                                
                        }
                        
                        
                        ?>
                            </p>
                        </div>
                    <?php
                    } ?>
            
                
             
              
            
              
              
              <a href="index.php"><button type="button" name="button" class="button-1-3d">Powrót do strony głównej</button></a>
            
            
           
            
        </nav>
	</body>
</html>














