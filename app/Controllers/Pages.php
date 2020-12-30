<?php 
namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
        return redirect()->to('accounts/list');
    }

    function forbidden()
    {
        $data['title'] = "Forbidden - SafeMe Apps by MHz";
        $data['pageTitle'] = "Access Denied";
        return view('pages/v_forbidden', $data);
    }

    function undercon()
    {
        $data['title'] = "Under construction - SafeMe Apps by MHz";
        $data['pageTitle'] = "Under Construction";
        return view('pages/v_undercon', $data);
    }

    function test()
    {
        $data['title'] = "Belajar CI4";
        $data['headline'] = "Dashboard - ".$data['title'];
        $data['viewFile'] = "pages/v_dashboard";
        // $data['jsFile'] = "homepage/js_homepage";
        return view('templates/londinium/v_admin', $data);
    }

}