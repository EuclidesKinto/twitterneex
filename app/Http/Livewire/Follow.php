<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Follow extends Component
{
    public $listeners = ['replyRefresh' => 'render'];
    public User $user;
    public Follow $follow;

    public function render()
    {
        return view('livewire.follow');
    }

    public function followed()
    {
        // dd(Auth::user()->followers());
        Auth::user()->followers()->create([
            'followed_user_id' => Auth::user()->id,
            'follower_id' => $this->user->id,
        ]);
        $this->emit('replyRefresh');
    }
    public function unfollow()
    {
        Auth::user()->followers()->delete();
        $this->emit('replyRefresh');
    }
}
