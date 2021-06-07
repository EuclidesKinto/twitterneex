<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class FeedTweets extends Component
{
    public $tweet = '';
    protected $rules = [
        'tweet' => 'required|min:3|max:255'
    ];

    public function render()
    {
        $tweets = Tweet::with('user')->latest()->get();
        return view('livewire.feed-tweets', compact('tweets'));
    }
    public function create()
    {
        $this->validate();

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
        ]);
    }

    public function deslike(Tweet $tweet)
    {

        $tweet->likes()->delete();
    }
}
