<div>
    @foreach ($posts as $post)
        <div class="flex flex-col bg-white p-6 my-5 shadow-xl rounded-md">
        <span class="text-xl">{{ $post->user->name }}   </span> 
        <span>{{ $post->body }}</span>
        <span>{{ $post->created_at->diffForHumans() }}</span>
        <button 
        wire:click="showUpdateForm{{ $post->id }}"
        class="p-2 bg-teal-600 rounded-r-md">Edit</button>  
        <button 
        wire:click="delete{{ $post->id }}"
        class="p-2 bg-teal-600 rounded-r-md">Delete</button>
    </div>   
    <div>
        @if($updateStateId !== $post->id)
            <span>{{ $post->body }}</span>
        @endif
        @if($updateStateId === $post->id)
            <textarea
            wire:model="body" 
            class="shadow appearance-none border rounded w-full  text-gray-700 leading-tight focus:outline-none 
            focus:shadow-outline" rows="3" ></textarea>
        @endif
    @endforeach

</div>
