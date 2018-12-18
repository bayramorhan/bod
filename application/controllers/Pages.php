<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

  public function view($page = 'default')
  	{
        $js = array(
          'default' => 'default',
          'package-list' => 'package-list',
          'categories' => 'categories'
        );

        if ( ! file_exists(APPPATH.'views/common/'.$page.'.php'))
        {
					$this->output->set_status_header('404');
          $data["page"] = '404';
        } else {
  				$data["page"] = $page;
          $data["jslib"] = $js[$page];
          $data["scripts"] = $custom_scripts[$page];
  			}

  	   $this->load->view('template/default',$data);

  	}

}
