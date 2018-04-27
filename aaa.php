<html>
	<head>
		  <meta http-equiv="Content-Type" content="text/html;chaset=utf-8" >  
		<title></title>
	</head>
	<body >
		<center>
		<?php echo "1.aa"; ?>2.bb <?php echo "3.cc"; ?>
			<form method="get"name="jishuan">
				
				<br /><input type="number" name="a" maxlength="3" placeholder="数字" value="<?php echo $a;?>"/>
				
				<select name="b" size="1">
		<option value="1"  selected="selected">+</option>
				<option value="2" >-</option>
				<option value="3" >*</option>
				<option value="4" >/</option></li>
				<br /><input type="number" name="c" maxlength="3" placeholder="数字"  value="<?php echo $c;?>"/>
		
			<br /><input type="submit" value="计算" name="sub"/>
			</form>
			
			<?php
    $sum="";
    $a=$_GET['a'];
    $c=$_GET['c'];
 

    $num1 = $_GET["a"];
    $num2 = $_GET["c"];
    if($_GET["b"]=="1")
        $sum = $num1+$num2;
    if($_GET["b"]=="2")
        $sum = $num1-$num2;
    if($_GET["b"]=="3")6
        $sum = $num1*$num2;
    if($_GET["b"]=="4")
        $sum = $num1/$num2;
if(isset($_GET["sub"]))
        echo $sum;
?>


</center>
	</body>
	
</html>