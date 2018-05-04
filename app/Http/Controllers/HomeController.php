<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\Post;


class HomeController extends Controller
{
    protected $user;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {   
        $posts = Post::all();
        return view('homes.home')->with(['posts'=>$posts]);
    }
    public function study()
    {
        echo 'Bạn đã đến trang học tập ';
    }
    public function work()
    {
        echo 'Bạn đã đến trang công việc ';
    }
    public function inforIT()
    {
          echo 'Bạn đã đến trang tin tức ';
    }
    public function game()
    {
          echo 'Bạn đã đến trang game ';
    }
    public function bloger()
    {
          echo 'Bạn đã đến trang bloger ';
    }
    public function contact()
    {
          echo 'Bạn đã đến trang liên kết ';
    }


}
