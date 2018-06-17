<?php

namespace App\Http\Controllers;

use App\RequestBooking;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function sendRequest (Request $request)
    {
        $name = $request['name'];
        $email = $request['email'];
        $phone =  $request['phone'];
        $humans = $request['humans'];
        $arriving = $request['arriving'];
        $departing = $request['departing'];
        $type = $request['type'];
        $callBack = $request['callback'] or 'Не надо звонить обратно;';
        $text = $request['wishes'] or '';
        $wishes = $type . ' | ' . $humans . ' персон | ' . $callBack . ' | ' . $arriving . ' - ' . $departing . ' | ' . $text;

        $bookingItem = new RequestBooking();
        $bookingItem->name = $name;
        $bookingItem->email = $email;
        $bookingItem->phone = $phone;
        $bookingItem->status = 0;
        $bookingItem->wishes = $wishes;

        if ($bookingItem->save())
        {
            return redirect()->route('for-redirect');
        } else {
            return redirect()->route('/hello');
        }

    }

    public function bookingPage ()
    {
        $requests = RequestBooking::orderBy('created_at', 'desc')->get();
        if ($requests)
        {
            return view('admin.tab1',['elems' => $requests]);
        }
    }

}
