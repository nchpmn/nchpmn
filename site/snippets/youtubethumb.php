<?php /**
 * Youtube
 *
 * @version YouTube API V2
 * @param str youtube video url
 * @return object || void
 * @copyright w3bees.com
 */
function getytthumb($id)
{
  # YouTube api v2 url
  $apiURL = 'http://gdata.youtube.com/feeds/api/videos/'. $id .'?v=2&alt=jsonc';

  # curl options
  $options = array(
    CURLOPT_URL  => $apiURL,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_BINARYTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_TIMEOUT => 5 );

  # connect api server through cURL
  $ch = curl_init();
  curl_setopt_array($ch, $options);
  # execute cURL
  $json = curl_exec($ch) or die( curl_error($ch) );
  # close cURL connect
  curl_close($ch);

  # decode json encoded data
  if ($data = json_decode($json))
    return (object) $data->data;
}


return $getytthumb->thumbnail->hqDefault;


?>