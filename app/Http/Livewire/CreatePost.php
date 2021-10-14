<?php

namespace App\Http\Livewire;

Use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{
    public $body;
    public function render()
    {
        return view('livewire.create-post');
    }
    public function createPost(){
        Post::create([
            'user_id'=> Auth::id(),
            'body'=>$this->body
        ]);
        $this->body="";
        $this->emit('postreated');
    }
}
