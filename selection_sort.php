<!doctype HTML>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="" />
	<title>Selection Sort</title>
	<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/dark-hive/jquery-ui.css"/>
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"/>
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	
	<script>
	$(document).ready(function(){
	
	});
	</script>
</head>
<!-- PHP DECLARE FUNCTIONS AND VARIABLES -->
<?php
	// Generate random array
	function random_array($size, $min, $max)
		{
			for ($index = 0; $index < $size; $index++) 
			{
				$rand_value = rand($min, $max);
				$array[] = $rand_value;	
			}
			return $array;
		}

	function selection_sort($array)
	{
		// Declare Variables
		$array_length = count($array);
		$min_val = $array[0];

		// Sort the array
		for ($index = 0; $index < $array_length; $index++) 
		{ 
			// Stagger indexes to compare minimum values
			$sort_index = $index;

			// Get current minimum value in array
			for ($sort_index; $sort_index < $array_length; $sort_index++) {
				if ($min_val > $array[$sort_index] || $min_val == null)
				{
					$min_val = $array[$sort_index];
					$temp = $sort_index;
				}
			}

			// Store current array postion in a temporary variable
			$temp_position = $array[$index];
			// Set next sorted position in array to minimum value
			$array[$index] = $min_val;
			// Store temporary variable wher minimum value was found
			$array[$temp] = $temp_position;
			// Set minimum value to null
			$min_val = null;
		}
		return $array;
	}

	// Declare Variables
	$array_size = 100;
	$min = 0;
	$max = 10000;
?>
<!-- END OF PHP DECLARATIONS -->
<body>
	<div class="container">
	    <?php
	    	$random_array = random_array($array_size, $min, $max);
	    	var_dump($random_array);
	    	$sorted_array = selection_sort($random_array);
	    	var_dump($sorted_array);
	    ?>
	</div> <!--End of #container -->
</body>
</html>