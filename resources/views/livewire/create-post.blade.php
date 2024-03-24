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

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Text</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr></tr>
        <td>{{ $post->name }}</td>
        <td> <button type="button" class="btn btn-danger">Delete</button></td>
        <td> <button type="button" class="btn btn-primary">Edit</button></td>
        </tr>
        @endforeach


        </tbody>
      </table>
</div>
