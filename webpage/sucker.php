<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
        <link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>

     <?php if(isset($_POST['name']) && isset($_POST['section']) && isset($_POST['card_numb']) && isset($_POST['card']) ){?>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?php echo $_POST["name"]; ?></dd>

			<dt>Section</dt>
			<dd> <?php echo $_POST["section"]; ?></dd>

			<dt>Credit Card</dt>
			<dd><?php echo $_POST["card_numb"]; ?> (<?php echo $_POST["card"]; ?>)</dd> 
		</dl>



              <h4>Here are all the suckers who have submitted here: </h4>
            <?php
                        	
            $student_name = $_POST['name'];
            $student_section = $_POST['section'];
            $student_card_number = $_POST['card_numb'];
            $student_card_type = $_POST['card'];
            $content = $student_name . ";" . $student_section . ";" . $student_card_number . ";" . $student_card_type . "\n";
            $fp = fopen('suckers.txt', 'a');
            fwrite($fp, $content);
            fclose($fp);

              $file = file_get_contents('suckers.txt', true);
               echo "<pre>" . $file . "</pre>";
            ?>
               
             <?php } else {
               echo '<h1>Sorry</h1>';
               echo 'You didn\'t fill out the form completely!  <a href="buyagrade.php">Try again?</a>';
              }?>
	</body>
</html>  
