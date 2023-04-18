<?php
require APPPATH . 'libraries\RestController.php';
require APPPATH . 'libraries\Format.php';
use chriskacerguis\RestServer\RestController; 
     
class Users extends RestController {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
      
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function index_get($id = 0)
	{
        $data=["data"=>"dta"];
     
        $this->response($data, RestController::HTTP_OK);
	}
    
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_post()
    {
        $input = $this->input->post('name');
        $data=array("name"=>$input);
     
        $this->response($data, RestController::HTTP_OK);
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id)
    {
        $input = $this->put();
        $this->db->update('items', $input, array('id'=>$id));
     
        $this->response(['Item updated successfully.'], RestController::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id)
    {
        $this->db->delete('items', array('id'=>$id));
       
        $this->response(['Item deleted successfully.'], RestController::HTTP_OK);
    }

    	
}