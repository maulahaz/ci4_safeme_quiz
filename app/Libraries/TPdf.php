<?php 
// namespace App\Libraries;

require_once dirname(__FILE__) . '/TCPDF/tcpdf.php';
//==or:
// require_once APPPATH.'/libraries/tcpdf/tcpdf.php';

class TPdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }
}