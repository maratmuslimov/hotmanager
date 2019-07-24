<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mikrotik extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') == FALSE) {
            redirect(base_url());
        }
        $this->load->model(['hotspot_model', 'system_model']);
    }

    // public function index()
    // {
    //     $data['resource'] = $this->system_model->resource();
    //     echo json_encode($data);
    // }

    // public function dhcp_leases()
    // {
    //     $data['dhcp_leases'] = $this->system_model->dhcp_leases();
    //     echo json_encode($data);
    // }

    // public function ip_pool()
    // {
    //     $data['ip_pool'] = $this->system_model->ip_pool();
    //     echo json_encode($data);
    // }

    public function reboot()
    {
        $this->system_model->reboot();
        redirect(base_url('auth/logout'));
    }

    public function shutdown()
    {
        $this->system_model->shutdown();
        redirect(base_url('auth/logout'));
    }
}
