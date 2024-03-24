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
        $posts->update([
            'name' => $this->name
        ]);

        // Redirect back with success message
        return redirect()->back()->with('message', "This is a success message");
    }
    public function EditName()
    {
        $this->validate([
            'name' => 'required',
        ]);
        $posts = PostModel::find($this->name);
        $posts->update([
            'name'=> $this->name
        ]);
        return redirect()->back()->with('message',"This is Success Message");
    }
    public function render()
    {
        return view('livewire.edit-post');
    }
}
