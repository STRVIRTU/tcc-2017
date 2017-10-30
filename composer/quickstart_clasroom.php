
<?php
require_once __DIR__ . '/vendor/autoload.php';


define('APPLICATION_NAME', 'Classroom API PHP Quickstart');
define('CREDENTIALS_PATH', '~/.credentials/classroom.googleapis.com-php-quickstart.json');
define('CLIENT_SECRET_PATH', __DIR__ . '/client_secret.json');
// If modifying these scopes, delete your previously saved credentials
// at ~/.credentials/classroom.googleapis.com-php-quickstart.json
define('SCOPES', implode(' ', array(
  'https://www.googleapis.com/auth/classroom.courses',
  'https://www.googleapis.com/auth/classroom.rosters',

)
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

// Get the API client and construct the service object.
$client = getClient();
$service = new Google_Service_Classroom($client);

// Print the first 10 courses the user has access to.

// $course = new Google_Service_Classroom_Course(array(
//   'name' => 'Matemática',
//   'section' => 'Period 2',
//   'descriptionHeading' => 'Welcome to 10th Grade Biology',
//   'description' => 'We\'ll be learning about about the structure of living ' .
//                    'creatures from a combination of textbooks, guest ' .
//                    'lectures, and lab work. Expect to be excited!',
//   'room' => '301',
//   'ownerId' => 'me',
//   'courseState' => 'PROVISIONED'
// ));
// $course = $service->courses->create($course);
// printf("Course created: %s (%s)\n", $course->name, $course->id);


// $courseId = '5964844561';
// $teacherEmail = 'andrejandrey@ceepcascavel.com.br';
// $teacher = new Google_Service_Classroom_Teacher(array(
//   'userId' => $teacherEmail
// ));
// try {
//   $teacher = $service->courses_teachers->create($courseId, $teacher);
//   printf("User '%s' was added as a teacher to the course with ID '%s'.\n",
//       $teacher->profile->name->fullName, $courseId);
// } catch (Google_Service_Exception $e) {
//   if ($e->getCode() == 409) {
//     printf("User '%s' is already a member of this course.\n", $teacherEmail);
//   } else {
//     throw $e;
//   }
// }

$courseId = '5964844561';
$enrollmentCode = 'g0ioc9';
$student = new Google_Service_Classroom_Student(array(
  'userId' => 'vinicius.stanoga@ceepcascavel.com.br'
));
$params = array(
  'enrollmentCode' => $enrollmentCode
);
try {
  $student = $service->courses_students->create($courseId, $student, $params);
  printf("User '%s' was enrolled  as a student in the course with ID '%s'.\n",
      $student->profile->name->fullName, $courseId);
} catch (Google_Service_Exception $e) {
  if ($e->getCode() == 409) {
    print "You are already a member of this course.\n";
  } else {
    throw $e;
  }
}
