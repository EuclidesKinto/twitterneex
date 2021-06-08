<?php

namespace App\Http\Livewire;

use App\Models\Like;
use App\Models\User;
use App\Models\Tweet;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class FeedTweets extends Component
{

    public $user;
    protected $rules = [
        'tweet' => 'required|min:3|max:255'
    ];

    public function render()
    {
        ///$this->likes = Like::with('tw')->get();
        $tweets = Tweet::latest()->with('likes')->get();
        //$tweets = Auth::user()->tweets()->latest()->with('likes')->get();
        //dd($tweets);
        //Auth::user()->load('comments.author');
        return view('livewire.feed-tweets', compact('tweets'));
    }
    public function create()
    {
        $this->validate();

        //dd(Auth::user());

        Auth::user()->tweets()->create([
            'tweet' => $this->tweet,
        ]);

        $this->tweet = '';
    }

    public function like($id)
    {
        $tweet = Tweet::find($id);

        $tweet->likes()->create([
            'user_id' => Auth::user()->id,
            'status' => 1,
        ]);

    }

    public function deslike(Tweet $tweet)
    {
        $tweet->likes()->delete();
    }
}
