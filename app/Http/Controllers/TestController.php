<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function cek(Request $request)
    {
        $data = [];

        $data['ip'] = $request->ip();
        $data['client_ip'] = $request->getClientIp();
        $data['client_ips'] = $request->getClientIps();

        return $data;
    }
}
