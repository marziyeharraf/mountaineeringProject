<?php

namespace App\Http\Controllers;

use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;

use App\Models\Akhbar;
use App\Models\Post;
use App\Models\Newscomment;

use App\Models\PlainsThisweek;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function getmainpage()
    {
        $PlainsThisweek = PlainsThisweek::find(1);
        $posts = Post::latest()->take(3)->get();
        $akhbar = Akhbar::latest()->take(3)->get();
        return view('index', ['akhbar' => $akhbar, 'posts' => $posts, 'PlainsThisweek' => $PlainsThisweek]);
    }

    public function getindex()
    {
        $akhbar = Akhbar::orderBy('created_at', 'desc')->paginate(2);
        $Newscomment = Newscomment::all();
        return view('news', ['akhbar' => $akhbar, 'Newscomments' => $Newscomment]);
    }

    public function getadminlist()
    {
        $akhbar = Akhbar::orderBy('created_at', 'desc')->paginate(9);
        return view('admin.listNews', ['akhbar' => $akhbar]);
    }

    public function getpost($id)
    {
        $akhbar = Akhbar::all();
        $khabar = Akhbar::find($id);
        $Newscomment = Newscomment::where('post_id', $id)->get();
        return view('detailsNews', ['khabar' => $khabar, 'akhbar' => $akhbar, 'Newscomments' => $Newscomment]);
    }

    public function getadmincreate()
    {
        return view('admin.createNews');
    }

    public function getadminedit($id)
    {
        $akhbar = Akhbar::find($id);
        return view('admin.editNews', ['akhbar' => $akhbar]);
    }

    public function getadmindelete($id)
    {
        $akhbar = Akhbar::find($id);
        $akhbar->delete();
        return redirect()->route('adminNews.list')->with('info', 'succsessfully delete');
    }

    public function postadmincreate(Request $request)
    {
        $this->validate($request, ['title' => 'required|min:3',
            'image' => 'required|mimes:jpg,jpeg,png,gif|max:10240',
        ]);

        $user = Auth::user();
        if (!$user) {
            return redirect()->back();
        }
        $address = '/post/' . date('Y') . '/' . date('m');
        $destination = base_path() . '/public' . $address;
        if (!is_dir($destination)) {
            mkdir($destination, 0777, true);
        }
        $destination = $destination . '/';
        $filename = rand(1111111, 99999999) . date('Y') . date('m') . '.' . $request->image->guessClientExtension();
        $file = $request->file('image');
        $file->move($destination, $filename);
        $akhbar = new Akhbar([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'date' => $request->input('date'),
            'image' => $address . '/' . $filename

        ]);
        $user->akhbars()->save($akhbar);
        $akhbar->save();
        return redirect()->route('adminNews.list');//->with('info', 'post created successfully.title is' . $request->input('title'));
    }

    public function postadminupdate(Request $request)
    {
        $this->validate($request, ['title' => 'required|min:3',
            'image' => 'required|mimes:jpg,jpeg,png,gif|max:10240'
        ]);
        $akhbar = Akhbar::find($request->input('id'));
        $akhbar->title = $request->input('title');
        $akhbar->content = $request->input('content');
        $akhbar->date = $request->input('date');

        $address = '/post/' . date('Y') . '/' . date('m');
        $destination = base_path() . '/public' . $address;
        if (!is_dir($destination)) {
            mkdir($destination, 0777, true);
        }
        $destination = $destination . '/';
        $filename = rand(1111111, 99999999) . date('Y') . date('m') . '.' . $request->image->guessClientExtension();
        $file = $request->file('image');
        $file->move($destination, $filename);
        $akhbar->image = $address . '/' . $filename;
        $akhbar->save();
        return redirect()->route('adminNews.list')->with('info', 'post created successfully.title is' . $request->input('title'));

    }

    //comments
    public function createPostComment(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email',
            'message' => 'required'
        ]);

        $Newscomments = new Newscomment([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'post_id' => $request->input('post_id'),
            'status' => 0
        ]);
        $Newscomments->save();
        return redirect()->back()->with('info', 'کامنت شما با موفقیت ارسال شد با تایید ادمین بر روی سایت نشان داده خواهد شد.');
    }

    public function getComment()
    {
        $akhbar = Akhbar::all();
        $Newscomment = Newscomment::orderBy('created_at', 'desc')->paginate(9);
        return view('admin.NewsComment', ['akhbar' => $akhbar, 'Newscomments' => $Newscomment]);
    }

    public function getadmincommentdelete($id)
    {
        $Newscomment = Newscomment::find($id);
        $Newscomment->delete();
        return redirect()->route('adminNewsComments')->with('info', 'succsessfully dele');
    }


    public function accComment($id)
    {
        $Newscomment = Newscomment::find($id);
        $Newscomment->status = 2;
        $Newscomment->save();
        return redirect()->back()->with('info', 'کامنت منتشر شد');
    }

}
