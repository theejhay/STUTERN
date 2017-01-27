  <?php 
/*
Write a working snippet with a function that can accept HTTP POST and then send the entire data received via CURL POST to another URL.


*/

function curl_post_data(){
    $ch = curl_init();                    // Initiate cURL
    $url = "http://www.websitename.com/curl_quest.php"; // Where you want to post data
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_POST, true);  // Tell cURL you want to post something
    curl_setopt($ch, CURLOPT_POSTFIELDS, "var1=value1&var2=value2&var_n=value_n"); // Define what you want to post
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the output in string format
    $output = curl_exec ($ch); // Execute

    curl_close ($ch); // Close cURL handle

   return var_dump($output); // Show output

}


?>