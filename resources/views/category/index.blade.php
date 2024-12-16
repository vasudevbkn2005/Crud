<table border="1px">
    <thead>
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($category as $i)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$i->name}}</td>
            <td>{{$i->des}}</td>
            <td><a href="/category/{{$i['id']}}/edit">Edit</a></td>
            <td>
                <form action="/category/{{$i['id']}}" method="post">
                    @csrf
                    @method('delete')
                    <button>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
