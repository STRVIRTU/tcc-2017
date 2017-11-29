<?php
require_once __DIR__ . '/vendor/autoload.php';


define('APPLICATION_NAME', 'Directory API PHP Quickstart');
define('CREDENTIALS_PATH', '../credentials/admin-directory_v1-php-quickstart.json');
define('CLIENT_SECRET_PATH', __DIR__ . '/client_secret.json');
// If modifying these scopes, delete your previously saved credentials
// at ~/.credentials/admin-directory_v1-php-quickstart.json
define('SCOPES', implode(' ', array(
  'https://www.googleapis.com/auth/admin.directory.user')
));

if (php_sapi_name() != 'cli') {
  throw new Exception('This application must be run on the command line.');
}

/**
 * Returns an authorized API client.
 * @return Google_Client the authorized client object
 */
function getClient() {
  $client = new Google_Client();
  $client->setApplicationName(APPLICATION_NAME);
  $client->setScopes(SCOPES);
  $client->setAuthConfig(CLIENT_SECRET_PATH);
  $client->setAccessType('offline');

  // Load previously authorized credentials from a file.
  $credentialsPath = expandHomeDirectory(CREDENTIALS_PATH);
  if (file_exists($credentialsPath)) {
    $accessToken = json_decode(file_get_contents($credentialsPath), true);
  } else {
    // Request authorization from the user.
    $authUrl = $client->createAuthUrl();
    printf("Open the following link in your browser:\n%s\n", $authUrl);
    print 'Enter verification code: ';
    $authCode = trim(fgets(STDIN));

    // Exchange authorization code for an access token.
    $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);

    // Store the credentials to disk.
    if(!file_exists(dirname($credentialsPath))) {
      mkdir(dirname($credentialsPath), 0700, true);
    }
    file_put_contents($credentialsPath, json_encode($accessToken));
    printf("Credentials saved to %s\n", $credentialsPath);
  }
  $client->setAccessToken($accessToken);

  // Refresh the token if it's expired.
  if ($client->isAccessTokenExpired()) {
    $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
    file_put_contents($credentialsPath, json_encode($client->getAccessToken()));
  }
  return $client;
}

/**
 * Expands the home directory alias '~' to the full path.
 * @param string $path the path to expand.
 * @return string the expanded path.
 */
function expandHomeDirectory($path) {
  $homeDirectory = getenv('HOME');
  if (empty($homeDirectory)) {
    $homeDirectory = getenv('HOMEDRIVE') . getenv('HOMEPATH');
  }
  return str_replace('~', realpath($homeDirectory), $path);
}

// // Get the API client and construct the service object.
$client = getClient();
$service = new Google_Service_Directory($client);

// // Print the first 10 users in the domain.
// $dir = new Google_Service_Directory($client);
// // SET UP THE USER/USERNAME OBJECTS
// $user = new Google_Service_Directory_User();
// $name = new Google_Service_Directory_UserName();
// $new_person = array();
// // SET THE ATTRIBUTES
// $name->setGivenName('Luan');
// $name->setFamilyName('SGU');
// $user->setName($name);
// $user->setHashFunction("SHA-1");
// $user->setPrimaryEmail("luan.sgu@ceepcascavel.com.br");
// $user->setPassword(hash("sha1","testing123"));
// // the JSON object shows us that externalIds is an array, so that's how we set it here
// $user->setExternalIds(array("value"=>28790,"type"=>"custom","customType"=>"EmployeeID"));
// $result = $dir->users->insert($user);
// echo "New user ".$result->primaryEmail." created successfully.";

$dir = new Google_Service_Directory($client);
$user = new Google_Service_Directory_User();
$id = $dir->users->get($email);
$unique_google_id = $id['id'];
$user->setPassword(hash('sha1','newPassword1234?'));
$user->setHashFunction("SHA-1");
$dir->users->update($unique_google_id,$user);