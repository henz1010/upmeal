<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Recomended;

class PostsList extends Component
{
    public $posts;
    public $recposts;
    public $recommends;
    public function render()
    {
        $this->posts = Post::OrderBy('created_at', 'desc')->take(5)->get();
        $this->recommends = Recomended::where('user_id',auth()->user()->id)->first();
        if(!is_null($this->recommends)){

            $this->recposts = Post::where('cuisine_id',$this->recommends->cuisine_id)->take(5)->get();
        }else{
            $this->recposts = null;
        }
        return view('livewire.posts-list');
    }
}
