<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{
    public $name;

    public function AddData()
    {
        $this->validate(
            ["name"=> "required"]
        );
        Post::create([
            'name'=> $this->name,
        ]);

        return redirect()->back()->with('message',"This is Success Message");


    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
