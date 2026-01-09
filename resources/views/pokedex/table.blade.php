<table class="table table-bordered bg-white">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>type</th>
        <th>species</th>
        <th>height</th>
        <th>weight</th>
        <th>hp</th>
        <th>attack</th>
        <th>defense</th>
        <th>image</th>
        <th>tools</th>
    </tr>

    @foreach($pokedexes as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->name }}</td>
        <td>{{ $p->type }}</td>
        <td>{{ $p->species }}</td>
        <td>{{ $p->height }}</td>
        <td>{{ $p->weight }}</td>
        <td>{{ $p->hp }}</td>
        <td>{{ $p->attack }}</td>
        <td>{{ $p->defense }}</td>
        <td>{{ $p->image }}</td>
        <td>
            <a href="/pokedex/{{ $p->id }}" class="btn btn-warning">แก้ไข</a>
            <a href="/pokedex/delete/{{ $p->id }}" class="btn btn-danger">ลบ</a>

        </td>
    </tr>
    @endforeach
</table>
