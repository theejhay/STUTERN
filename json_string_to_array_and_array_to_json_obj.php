<?php
/*
Create a Class named converter that has two methods that do the following: 
- Converts a JSON String to an array and returns the array 
- Converts an array into a JSON Object and returns the object

*/


class converter
{
	public $me = "";

	// - Converts a JSON String to an array and returns the 		array

	public function json_to_array()
	{

		//JSON string here
			$JSON_example = 
		'[
			{
				"name":"Ogunyemi taiwo john", 
				"Gender":"Male"
			},

			{
				"name":"Ogunyemi kehinde felicia","Gender":"Female"
			}
		]';


			
		// Convert JSON string to an Array

		$JSON_array = json_decode($JSON_example, true);

		// Output the Array
		$array = print_r($JSON_array);
		
	}	

			// - Converts an array into a JSON Object and returns the object

		public function convert_array_into_JSON_Object()
		{
			$example = array
			(
				'a' => 1,
				'b' => 2,
				'c' => 3,
				'd' => 4, 
				'e' => 5
			);

			//Encoding in JSON
			$json_obj = json_encode($example);

			return $json_obj; //Output
		}
	
}
$con = new converter;
echo $con-> json_to_array();

echo "<br/>";

echo $con-> convert_array_into_JSON_Object();



?>