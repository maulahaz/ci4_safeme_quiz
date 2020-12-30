<?php

function appName()
{
    $appName = "SafeMe Apps by MHz";
    return $appName;
}

function get_nice_date($timestamp, $format){
    //==Convert String date to some format
    switch ($format) {
        case 'full':
            // * Full, Friday 11th of February 2018 at 11:05:20 AM. (a= am, A= AM)
        $the_date = date('l jS \of F Y \a\t h:i:s A', strtotime($timestamp));
        break;
        case 'cool':
            // * cool, Friday 11th of February 2018.
        $the_date = date('l jS \of F Y', strtotime($timestamp));
        break;
        case 'shorter1':
            // * Shorter1, 11th of February 2018.
        $the_date = date('jS \of F Y', strtotime($timestamp));
        break;
        case 'shorter2':
            // * Shorter2, February 11, 2018, 11:05 am. (a= am, A= AM)
        $the_date = date('F j, Y, g:i a', strtotime($timestamp));
        break;  
        case 'mini':
            // * Mini, 11th Feb 2018.
        $the_date = date('jS M Y', strtotime($timestamp));
        break;
        case 'mysql':
            // * MySQL DATETIME format,  2018-02-11 11:05:20.
        $the_date = date('Y-m-d H:i:s', strtotime($timestamp));
        break;  
        case 'mysql_date':
            // * MySQL DATETIME format,  2018-02-11.
        $the_date = date('Y-m-d', strtotime($timestamp));
        break;  
        case 'oldschool':
            // * Oldschool, 11/2/18.
        $the_date = date('j\/n\/y', strtotime($timestamp));
        break;
        case 'datepicker_us':
            // * Datepicker, 02/11/2018.
        $the_date = date('m\/d\/Y', strtotime($timestamp));
        break;                  
        case 'datepicker_dmy':
            // * Datepicker, 11-2-2018.
        $the_date = date('d\-m\-Y', strtotime($timestamp));
        break;
        case 'datepicker_mdy':
            // * Datepicker, 2-11-2018.
        $the_date = date('m\-d\-Y', strtotime($timestamp));
        break;  
        case 'datepicker_mdy_dot':
            // * Datepicker mdy with dot, 2-11-18.
        $the_date = date('m.d.y', strtotime($timestamp));
        break;
        case 'ymd':
            // * ymd format, 20180211.
        $the_date = date('Ymd', strtotime($timestamp));
        break;      
        case 'monyear':
            // * MonYear, February 2018.
        $the_date = date('F Y', strtotime($timestamp));
        break;
        case 'mydate':
            // * mydate, dd-mmm-yy, 11-Feb-18..
        $the_date = date('d-M-y', strtotime($timestamp));
        break;
        case 'overtime':
            // * mydate, dd-mmm-yy, 11-Feb-18..
        $the_date = date('d-M-y H:i', strtotime($timestamp));
        break;                                      
        default:
            // *mine,  Mmm-dd-yy, Feb-11-18.
        $the_date = date('M-d-y ', strtotime($timestamp));
        break;  
    }
    return $the_date;
}

function splitDateTime($getWhat, $mysqlDateTime)
{
    // $mysqlDateTime = "2012-10-19 18:19:56";
    $splitTimeStamp = explode(" ",$mysqlDateTime);
    $date = $splitTimeStamp[0];
    $time = $splitTimeStamp[1];
    if($getWhat == "date"){
        return $date;
    }elseif ($getWhat == "time") {
        return $time;
    }

}

function getUserInfo($param = null){
    return session()->get($param);
}

function isLoggedin(){
    $isLoggedin = session()->get('isLoggedin');
    dd($isLoggedin);
    if($isLoggedin == FALSE){
        return redirect()->to(base_url('auths/signin'));
    }
}

function isAdmin(){
    $roleID = session()->get('Role_id');
    // dd($roleID);
    if($roleID != "5"){
        return redirect()->to(base_url('pages/forbidden'));
    }
}

function isAjax(){
    if (!$this->request->isAJAX()) {
        return redirect()->to(base_url('pages/forbidden'));
    }
}

function showSchema($table)
{
    //==Using Query builder:
    $db = \Config\Database::connect();
    // $builder = $db->table($table);
    $sqlQry = "SHOW COLUMNS FROM $table";
    //$qrySchema = $builder->query($sqlQry);//->get();
    $qrySchema = $db->query($sqlQry)->getResult();
    // dd($qrySchema);
    // return $qrySchema;

    foreach ($qrySchema as $key) {
        $nama_kolom = $key->Field;
        if($nama_kolom != 'uid'){
            // *Test
            echo "'".$nama_kolom."',";
        }   
                
    }
}


// Or use MySQL's built in DATE_FORMAT function:

// SELECT DATE_FORMAT(datetime, '%d/%b/%Y') datetime FROM table

// Or, you can mix a bit of both flavours:

// SELECT UNIX_TIMESTAMP(datetime) timestamp FROM table;

// $formatted = date('d/M/Y', strtotime($timestamp));
// The last method is handy if you need to get several different formats on the same page; say, you would like to print the date and time separately, then you can just use date('d/M/Y', strtotime($timestamp)) and date('H:i', strtotime($timestamp)) without any further conversions.

?>