<?php

namespace App\Http\Livewire;


use App\Models\Post;
use Livewire\Component;

class ListPost extends Component
{
    public $updateStateId = 0;
    protected $listeners=[
        'postCreated' => '$refresh'
    ];
    public function render()
    {
        return view('livewire.list-post',[
            'posts'=>Post::Latest()->get()
        ]);
        
    }
    public function showUpdateForm($postId){
        $this->updateStateId=$postId;
        $post=Post::find($postId);
        $this->body=$post->body;
    }
    public function delet($postId){
        $post = Post::find($postId);
        $post->delet();
    }
}
