<html>
      <head>
            <meta charset="UTF-8">
            <title>The Rolling Dice</title>
            <style>
			           body {
				                font-size: 2000%; 
				                background-color: #000000; 
				                color: #00FF00; 
				                text-align: center;
				              }
		        </style>
      </head>
      <body>
      <?php
        
			class RollingDice {
            
				public $n;
        public function ThrowDice() {
                
					$this->n = rand(1, 6);
                
					return $this->n;
            
				    }

        } 

			$myThrow = new RollingDice();
 // vytvoreni nove instance       
			echo $myThrow->ThrowDice();

   // zavolani a vypis metody hod kostkou   
		?>
      <form action="" method="POST">
      <input type="Submit" name="roll" value="Roll dice">
      </form>
	</body>
</html>


