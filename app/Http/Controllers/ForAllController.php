<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use App\Models\xolat;

class ForAllController extends Controller
{
    public function index()
    {

        return view('welcome');
    }

    public function check()
    {
        $shtrix = request()->query('code');
        $user = Order::where('shtrix', '=', $shtrix)->first();

        if ($user === null) {
            return '{"success": false, "data": {"code": "12345", "date": false, "action": false, "mail_code": false, "whois": false}}';
        } else {
            $ac = $user->xolat;
            $date = $user->updated_at;
            return '{"success": true, "data": {"code": "'.$shtrix.'", "date": "'.$date.'", "action": "'.$shtrix.'", "mail_code": false, "whois": false}}';
        }
//        if(isset($order->id)){
//   return '{"success": true, "data": {"code": "12345", "date": false, "action": 1, "mail_code": false, "whois": false}}';
//   }else{
//         return '{"success": false, "data": {"code": "12345", "date": false, "action": false, "mail_code": false, "whois": false}}';
//        }
    }

    public function destroy($id)
    {
        Order::where('id', $id)->delete();
        return back();
    }

    public function edit($id)
    {
        $order = Order::find($id);
        $xolat = xolat::all();
        return view('admin.edit', compact('order', 'xolat'));
    }

    public function editpost($id, Request $request)
    {
        $post = Order::find($id);
        $post->xolat = $request->category;
        $post->save();
        return redirect('/admin');
    }
}
