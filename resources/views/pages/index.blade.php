<h1>index</h1><br>

<a href="{{ route('note.create') }}">create</a><br>

<table>
    <tr>
        <th>#</th>
        <th>title</th>
        <th>message</th>
        <th>action</th>
    </tr>
    @foreach ($note as $row)
        <tr>
         <td>{{ $row['id']; }}</td>
         <td>{{ $row['title']; }}</td>
         <td>{{ $row['message']; }}</td>
         <td>
           <a href="{{ route('note.show',$row['id']) }}">show</a>
           <a href="{{ route('note.edit',$row['id']) }}">edit</a>
           <form action="{{ route('note.destroy',$row['id']) }}">
            @csrf
            @method('DELETE')
            <BUtton>DELETE</BUtton>
           </form>
         </td>
        </tr>
    @endforeach
</table>