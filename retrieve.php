<?php 
function LoadXML()
{
  $YourLink = '';
  $xml = file_get_contents($YourLink);
  file_put_contents('./content.xml', $xml);
}
?>