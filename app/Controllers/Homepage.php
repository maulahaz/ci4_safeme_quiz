<?php namespace App\Controllers;

class Homepage extends BaseController
{
	public function index()
	{
        // redirect('homepage/template');
        return redirect()->to('homepage/admin');
    }
    
    public function admin()
    {
        $data['title'] = "Belajar CI4";
        return view('template/v_admin', $data);
    }

    function home(){
        $data['title'] = "Belajar CI4";
        $data['view_file'] = "homepage/v_content";
        // $data['js_file'] = "homepage/js_homepage";
        return view('template/v_homepage', $data);
    }

    function mobile(){
        $data['title'] = "Belajar CI4 Mobile version";
        $data['view_file'] = "mobile/v_content";
        $data['js_file'] = "mobile/js_mobile";
        return view('template/v_mobileapp', $data);
    }

}
