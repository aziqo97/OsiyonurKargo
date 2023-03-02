<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ForAllController extends Controller
{
    public function check()
    {
        return '{"success": false, "data": {"code": "12345", "date": false, "action": false, "mail_code": false, "whois": false}}';
    }
}
