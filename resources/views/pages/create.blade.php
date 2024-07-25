<h1>CEATE</h1>

<form action="{{ route('note.store') }}" method="POST">
@csrf
<div>
    <label for="title">title</label>
    <input type="text" name="title">
</div>
<div>
    <label for="message">message</label>
    <input type="text" name="message">
</div>
<button>SEND</button>
</form>