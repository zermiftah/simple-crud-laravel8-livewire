<div>
    {{ $body }}
    <textarea
    wire:model="body" 
    class="shadow appearance-none border rounded w-full  text-gray-700 leading-tight focus:outline-none 
    focus:shadow-outline" rows="3" placeholder="Post Something..."></textarea>
    
    <div class=" mt-2 flex justify-end">
        <button
        wire:click="createPost"
        class="bg-blue-500 hover:bg-blue-700  py-4 px-6">Post</button>   
    </div>
</div>
