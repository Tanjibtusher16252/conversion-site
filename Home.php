<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Page 1</title>

</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-1"></div>
            
            <div class="col-10">
            
                <div class="box">
                
              
                <font color="red"><h1><b>Page 1 [Home]</b></h1></font>
                <?php
		$converterErr =  "";
		$converter = ""; 
		

         


		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_POST['converter'])) {
				$converterErr = "Field can not be empty";
			}
			else {
				$converter = $_POST['converter'];
                
			}

			 
             

            $filepath = "data.txt"; 
            $f = fopen($filepath,'a');
            fwrite($f,"$converter  \n");
		
		}
        
	?>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                    <br>
                    <font color="red"><h2><b>Conversion Site</b></h1></font>

                    <button onclick="location.href='Home.php'" class="button"><b>1.Home</b></button>
                    
                   <button onclick="location.href='Conversion-rate.php'" class="button"><b>2.Conversion-rate</b></button>

                   <button onclick="location.href='History.php'" class="button"><b>3.History</b></button>
                   <br>
                    
                    
                   <font color="red"><h2><b>Converter:</b></h1></font>
                   <br>
			<select id="converter" name="converter">
			  <option value=" "> </option>
			  <option value="feet to inch">Feet to Inch</option>
              <option value="inch to feet">Inch to Feet</option>
              <option value="mm to inch">Mm to Inch</option>
              <option value="kg to gram">Kg to Gram</option>
			  <option value="m to km">M to Km</option>			  
			</select>
            <span style="color: red"><?php echo $ConverterErr; ?></span>
                    
                   
              
                    </a> 
                    <br>
                  
                    <b>value:</b><span><?php echo "$a";?></span><br>
<b>result:</b> <span><?php echo "$b";?></span><br>  

                    






                </div>




           
           </div>

            <div class="col-1"></div>
            
        </div>
        </div>
</body>
</html>