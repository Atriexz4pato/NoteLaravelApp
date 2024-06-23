<x-app-layout>
<div class="flex flex-col itesmce w-[70vw] mx-10 px-10 py-10 space-y-5">
    <a href="{{route('note.create')}}">
        New note
    </a>
    <div class="block space-y-5">
        @foreach ($notes as $note)
        <div class="flex space-x-2 bg-gray-500 p-4 rounded-lg ">
            <div class="w-[40vw]">{{Str::words($note->note,10)}}

            </div>
            <div class="space-x-2">
                <a class="" href="{{route('note.show', $note->id)}}">View</a>
                <a href="{{route('note.edit', $note->id)}}">Edit</a>
               <form action="{{route('note.destroy', $note->id )}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
            </div>
        </div>
        @endforeach
        
        
    </div>
    {{$notes->links()}}
</div>
</x-app-layout>
