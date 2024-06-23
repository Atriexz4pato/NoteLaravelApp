<x-app-layout>
<div class="h-[40vh] w-[50vw] m-5 bg-gray-500 p-5 rounded-lg space-y-4">
    <div>
        <h1 class="">Note: {{$note->created_at->diffForHumans() }}</h1>
        <div class="space-x-4">
            <a href="{{route('note.edit', $note->id)}}">Edit</a>
            <form action="{{route('note.destroy', $note )}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </div>
    </div>
    <div>
        <div>
            {{$note->note}}
        </div>
    </div>
</div>

</x-app-layout>
