<?php

require_once __DIR__ . '/vendor/autoload.php';

$courseId = '123456';
$teacherEmail = 'alice@example.edu';
$teacher = new Google_Service_Classroom_Teacher(array(
  'userId' => $teacherEmail
));
try {
  $teacher = $service->courses_teachers->create($courseId, $teacher);
  printf("User '%s' was added as a teacher to the course with ID '%s'.\n",
      $teacher->profile->name->fullName, $courseId);
} catch (Google_Service_Exception $e) {
  if ($e->getCode() == 409) {
    printf("User '%s' is already a member of this course.\n", $teacherEmail);
  } else {
    throw $e;
  }
}


?>