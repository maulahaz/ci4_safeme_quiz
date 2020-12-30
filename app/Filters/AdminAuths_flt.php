<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminAuths_flt implements FilterInterface
{
    public function before(RequestInterface $request)
    {
        $roleID = session()->get('Role_id');
        if($roleID != "5"){
            return redirect()->to(base_url('pages/forbidden'));
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response)
    {
        // Do something here
    }
}