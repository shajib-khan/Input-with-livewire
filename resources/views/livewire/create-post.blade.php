<div>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    <form wire:submit="AddData">
        @error('name') <span class="error">{{ $message }}</span> @enderror
          <input type="text"wire:model="name">

        <button class="btn btn-primary">Submit</button>
      </form>

    @foreach ($posts as $post)
    <p>{{ $post->name }}</p>
    <a href=""button class="btn btn-danger">delete</button>

@endforeach
</div>
