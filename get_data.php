<?php

require 'vendor/autoload.php';
use Vimeo\Vimeo;

$client = new Vimeo("0aa197976d9da6c4177a96b1c1880728aab372b9", "VQ6SGXkv4fkE6fMxQ7KUO9U7QW8x6uw3WDBbCa8KZMvphEZpZbMI3buoxUO/cI+8NEmk3lC0RWVWmz9lvSXn8nK72J3Cfe3B7ti52ZBuklT4AdYp946HSYxfOlsLEJPC","7fc9e853454498d27cbe99ccb1b82ae9");

$client->request($uri, array(
  'name' => '{new video title}',
  'description' => '{new video description}',
), 'PATCH');

echo 'The title and description for ' . $uri . ' has been edited.';