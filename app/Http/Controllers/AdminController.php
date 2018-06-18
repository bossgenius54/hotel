<?php

namespace App\Http\Controllers;

use App\News;
use App\RequestBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check())
        {
            if (Auth::user()->getAuthIdentifier() === 4){
                return redirect()->route('tab1');
            }else {
                return redirect()->route('for-redirect');
            }
        }else {
            return redirect()->route('login');
        }

    }

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
            $emailText = 'Ваш запрос был принят, и сейчас рассматривается. В течении 10 мин с вами свяжутся по email или телефону';
//            Mail::send('landing',['email'=
            mail($email,'Ваш запрос рассматривается',$emailText);
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

    public function newsPanel ()
    {
        $news = News::orderBy('created_at','desc')->get();
        if ($news)
        {
            return view('admin.tab2',['elems'=>$news]);
        }
    }

    public function insertNews (Request $request)
    {
        $title = $request['title'];
        $img_name = $request['img_name'];
        $text =  $request['text'];

        $news = new News();
        $news->title = $title;
        $news->img_name = $img_name;
        $news->text = $text;

        if ($news->save())
        {
            return redirect()->route('tab2');
        } else {
            return redirect()->route('/hello');
        }
    }

    public function accept ($id)
    {
        $accept = RequestBooking::where('id',$id)->first();
        $accept->status = '1';
        if ($accept->save())
        {
            return redirect()->route('tab1');
        }
    }
    public function decline ($id)
    {
        $decline = RequestBooking::where('id',$id)->first();
        $decline->status = '2';
        if ($decline->save())
        {
            return redirect()->route('tab1');
        }
    }
    public function delete ($id)
    {
        $delete = RequestBooking::where('id',$id)->delete();

        if ($delete)
        {
            return redirect()->route('tab1');
        }
    }

    public function deleteNews($id)
    {
        $delete = News::where('id',$id)->delete();

        if ($delete)
        {
            return redirect()->route('tab2');
        }
    }

}
