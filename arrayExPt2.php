<?php
	echo "Write a PHP script to count a total number of duplicate elements in an array.</br></br> ";

	$nums = file("nums.txt");

	$unique = array_unique($nums);

	$duplicates = array_diff_assoc($nums, $unique);

	print_r( $duplicates);
?>


<?php
	echo "</br></br></br></br>Write a PHP script to count the frequency of each element of an array.</br></br> ";

	$nums= file("nums.txt");

	print_r(array_count_values($nums));
?>


<?php
echo "</br></br></br></br>Write a PHP script to separate odd and even integers in separate arrays. </br> ";
	$nums= file("nums.txt");

	for($a=1;$a<=14;$a++)
	{
		if($nums[$a]%2!=0)
		{
			print"<br>"."Odd Number = ".$nums[$a];
		}
	}
print"<br>";
	for($a=0;$a<=14;$a++)
	{
		if($nums[$a]%2==0)
		{
			print"<br>"."Even Number = ".$nums[$a];
		}
	}

?>

