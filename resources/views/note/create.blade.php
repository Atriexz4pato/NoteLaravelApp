<x-layout>
    <div>
        <h1>Create New Note</h1>
        <form method="POST" action="{{route('note.store')}}">
            <textarea name="note" id="" cols="30" rows="10" placeholder="Enter your note here"></textarea>
            <div>
                <a href="{{route('note.index')}}">Cancel</a>
                <button>Submit</button>
            </div>
        </form>
    </div>
</x-layout>
