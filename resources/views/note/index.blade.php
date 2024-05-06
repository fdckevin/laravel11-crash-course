<x-layout>
    <div class="note-container">
        <a href="#" class="new-note-btn">
            New Note
        </a>
        <div class="notes">
            @foreach ($notes as $note)
                 <div class="note-body">
                    {{ Str::words($note-> note, 30) }}
                </div>
                <div class="note-buttons">
                    <a href="#" class="note-edit-btn">View</a>
                    <a href="#" class="note-edit-btn">Edit</a>
                    <button class="note-delete-button">Delete</button>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
