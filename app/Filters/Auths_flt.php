<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auths_flt implements FilterInterface
{
    public function before(RequestInterface $request)
    {
    	$isLoggedin = session()->get('isLoggedin');
        if($isLoggedin == FALSE){
	        return redirect()->to(base_url('auths/signin'));
	    }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response)
    {
        // Do something here
    }
}