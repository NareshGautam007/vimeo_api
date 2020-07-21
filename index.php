<?php
require 'vendor/autoload.php';
use Vimeo\Vimeo;

$client = new Vimeo("0aa197976d9da6c4177a96b1c1880728aab372b9", "VQ6SGXkv4fkE6fMxQ7KUO9U7QW8x6uw3WDBbCa8KZMvphEZpZbMI3buoxUO/cI+8NEmk3lC0RWVWmz9lvSXn8nK72J3Cfe3B7ti52ZBuklT4AdYp946HSYxfOlsLEJPC","7fc9e853454498d27cbe99ccb1b82ae9");

$response = $client->request('/tutorial', array(), 'GET');
echo "<pre>";
//print_r($response);

// $file_name = "C:\Users\NARESH The DEVELOPER\Desktop\Videos\kgf_version2.MP4";
// $uri = $client->upload($file_name, array(
//   "name" => "kgf Version2",
//   "description" => "The description goes here."
// ));

// echo "Your video URI is: " . $uri;

// echo "<br>";
// $response = $client->request($uri . '?fields=transcode.status');
// if ($response['body']['transcode']['status'] === 'complete') {
//   print 'Your video finished transcoding.';
// } elseif ($response['body']['transcode']['status'] === 'in_progress') {
//   print 'Your video is still transcoding.';
// } else {
//   print 'Your video encountered an error during transcoding.';
// }


// $response = $client->request($uri . '?fields=link');
// echo "Your video link is: " . $response['body']['link'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Upload Video Codeigniter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <form action="https://api.vimeo.com/me/videos/118501714" method="post" enctype="multipart/form-data">
  	<h3>PLease Upload The Video</h3>
    <input type="file" id="defaultCheck" name="file_data">
    <br>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
