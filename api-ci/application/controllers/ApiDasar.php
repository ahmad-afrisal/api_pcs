<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApiDasar extends CI_Controller {

	public function getAdmin()
	{
        $this->load->model('ModelAdmin');

        // $data['admin'] = $this->ModelAdmin->getAdminModel();

        // $this->load->view('v_admin', $data);
        $data_admin = $this->ModelAdmin->getAdminModel();

        $result = array(
            "success" => true,
            "message" => "data_found",
            "data" => $data_admin,
            );
    
        echo json_encode($result);
    }
    
    
}
