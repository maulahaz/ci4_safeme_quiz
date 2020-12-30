<?php namespace App\Controllers;

class Template extends BaseController
{
	public function index()
	{
        // redirect('homepage/template');
        return redirect()->to('template/homepage');
    }
    
    public function homepage()
    {
        $data['title'] = "Belajar CI4";
        return view('template/v_homepage', $data);
    }

    public function admin_gent()
    {
        $data['title'] = "Belajar CI4";
        return view('template/v_admin_gent_test', $data);
        // return view('template/v_admin_gent', $data);
    }
    
    public function admin()
    {
        $data['title'] = "Belajar CI4";
        return view('template/v_admin', $data);
    }   
    
    public function blank_page()
    {
        $data['title'] = "Belajar CI4";
        return view('template/v_blank', $data);
    }   
    
    public function mobilefirst(){
        // $data['title'] = "Belajar CI4 - Mobilefirst";
        $data['title'] = "Mobile First with Bootstrap-4";
        $data['css_file'] = "mobilefirst/css_mobilefirst";
        // $data['view_file'] = "mobilefirst/v_mobilefirst";
        // $data['js_file'] = "mobilefirst/js_mobilefirst";
        return view('template/v_mobilefirst', $data);
    }

}
