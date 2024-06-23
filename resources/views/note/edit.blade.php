<x-app-layout>
<div>
    <h1>Edit your Note</h1>
    <form action="{{route('note.update', $note->id)}}" method="POST">
       @csrf
        @method('PUT')
        <textarea name="note" id="" rows="10">{{$note->note}}</textarea>
        <div>
            <a href="{{route('note.index')}}">Cancel</a>
            <button>Update</button>

        </div>
    </form>
</div>
</x-app-layout>
