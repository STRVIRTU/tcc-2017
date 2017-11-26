<?php


require_once __DIR__ . '/composer/vendor/autoload.php';
class Classroom {
  
      private $name;
      private $password;
      private $id;
      private $newpass;

      function __construct(){
    
            define('APPLICATION_NAME', 'Directory API PHP Quickstart');
            define('CREDENTIALS_PATH', '~/.credentials/admin-directory_v1-php-quickstart.json');
            define('CLIENT_SECRET_PATH', __DIR__ . '/composer/client_secret.json');
            // If modifying these scopes, delete your previously saved credentials
            // at ~/.credentials/admin-directory_v1-php-quickstart.json
            define('SCOPES', implode(' ', array(
              'https://www.googleapis.com/auth/admin.directory.user')
            ));

            // if (php_sapi_name() != 'cli') {
            //   throw new Exception('This application must be run on the command line.');
            // }

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
           



      }
      
      public function __get($var){
          return $this->$var;
      }
      public function __set($var, $valor){
        $this->$var = $valor;
      }


      public function novoUsuario() {
        try{
            $client = getClient();
            $service = new Google_Service_Directory($client);  
            $dir = new Google_Service_Directory($client);
            // SET UP THE USER/USERNAME OBJECTS
            $user = new Google_Service_Directory_User();
            $name = new Google_Service_Directory_UserName();
            $new_person = array();
            // SET THE ATTRIBUTES
            $name->setGivenName($this->name);
            $name->setFamilyName('SGU');
            $user->setName($name);
            $user->setHashFunction("SHA-1");
            $user->setPrimaryEmail($this->id);
            $user->setPassword(hash("sha1",$this->password));
            // the JSON object shows us that externalIds is an array, so that's how we set it here
            $user->setExternalIds(array("value"=>28790,"type"=>"custom","customType"=>"EmployeeID"));
            $result = $dir->users->insert($user);
           
            return "Novo usuário ".$result->primaryEmail." criado com sucesso.";
          }catch(Exception $e){
              return '<div class="alert alert-danger col-md-6 center fade in">'.
                  '<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>'.
                  '<p class="text-center">Sem conexao! Nao foi possível acessar o google.</p>'.
               '</div>';
          }

      }

      public function updatePassword(){
        
        $dir = new Google_Service_Directory($client);
        $user = new Google_Service_Directory_User();
        $id = $dir->users->get($email);
        $unique_google_id = $id['id'];
        $user->setPassword(hash('sha1','newPassword1234?'));
        $user->setHashFunction('SHA-1');
        $dir->users->update($unique_google_id,$user);

      }
}
?>