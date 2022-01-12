<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    function checkdata()
    {
        return login::all();
    }

    public function getPost(Request $reqs)
    {
        $users = \App\Models\login::get();
        foreach ($users as $user) {
            $usernamedatabase = $user->name;
            $usernameentered = $reqs->input('username');
            $passwordDB = $user->password;
            $passwordentered = $reqs->input('password');

            if (
                $usernamedatabase == $usernameentered &&
                $passwordDB == $passwordentered
            ) {
                return view('reachin', compact('usernamedatabase'));
            }
        }
        return view('reachLogin');
    }

    public function deletePost($id)
    {
        $postToDelet = news::find($id);
        $image_path = 'storage/app/public/images/' . $postToDelet->news_picture;

        if (File::exists($image_path)) {
            File::delete($image_path);
        } else {
            echo 'Hello';
        }
        $postToDelet->delete();

        return redirect('News');
    }

    public function addNews(Request $reqs)
    {
        $name = $reqs->file('file');
        $image_name = $name->getClientOriginalName();
        $path = 'public/images/';
        echo $path . $image_name;
        $send = $reqs->file('file')->storeAs($path, $image_name);

        try {
            $news = new news();
            $news->news_title = $reqs['title'];
            $news->news_body = $reqs['body'];
            $news->news_picture = $image_name;
            $news->save();
            return redirect('News')->with('status', 'Insert successfully');
        } catch (Exception $e) {
            return redirect('News')->with('failed', 'operation failed');
        }
    }

    public function getAllPosts()
    {
        $News = \App\Models\news::paginate(5);

        return view('news', compact('News'));
    }

    public function editpost($id)
    {
        $postToEdit = news::find($id);
        return view('editnews', compact('postToEdit'));
    }

    public function addpost()
    {
        return view('addnews');
    }
}
