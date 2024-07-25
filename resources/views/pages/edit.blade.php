<h1>UPDATE</h1>

<form action="{{ route('note.update',$note['id']) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="title">title</label>
        <input type="text" name="title" value="{{ $note['title'] }}">
    </div>
    <div>
        <label for="message">message</label>
        <input type="text" name="message" value="{{ $note['message'] }}">
    </div>
    <button>SEND</button>
</form>
 