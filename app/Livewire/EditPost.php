<?php
namespace App\Livewire;
use App\Models\Post as PostModel;
use Livewire\Component;
class EditPost extends Component
{
    public $name;
    public $PostModel;

    public function mount($id)
    {
        $posts = PostModel::findOrFail($id);
       $this->name =$posts->name;
    }
   
    public function render()
    {
        return view('livewire.edit-post');
    }
}
