<?php

namespace App\Livewire;

use App\Models\Post as PostModel;
use Livewire\Component;

class CreatePost extends Component
{

    public $name;
    public $post;

    public function AddData()
    {
        $this->validate(
            ["name"=> "required"]
        );
        PostModel::create([
            'name'=> $this->name,
        ]);

        return redirect()->back()->with('message',"This is Success Message");


    }

    public function render()
    {

        return view('livewire.create-post',
         [
            'posts'=>PostModel::all(),
        ]);
    }
}
