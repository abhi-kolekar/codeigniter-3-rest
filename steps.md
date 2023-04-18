
1. download 3.1 codeigniter
2. donwload https://github.com/chriskacerguis/codeigniter-restserver file
3. language file move language
4. Format.php and RestController.php move to libraries
5. rest.php move to config

6. create controller and add line
require APPPATH . 'libraries\RestController.php';
require APPPATH . 'libraries\Format.php';
use chriskacerguis\RestServer\RestController; 


controller must be extend with RestController;
every function name is name_method. _method define http method

response send 
    $this->response($data, statuscode);
    $this->response(['Item deleted successfully.'], RestController::HTTP_OK);



    
