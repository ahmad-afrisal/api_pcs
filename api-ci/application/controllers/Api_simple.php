<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_simple extends CI_Controller {

	public function getAdmin()
	{
        $this->load->model('ModelAdmin');

        $data['admin'] = $this->ModelAdmin->getAdminModel();

        $data_json = array(
            "success" => true,
            "message" => "Data Found",
            "data" => $data['admin']
        );

        // print_r($data_json);

        echo json_encode($data_json);
        
    }
    
    
}
