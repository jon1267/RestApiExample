<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Наименование</th>
        <th scope="col">Автор</th>
        <th scope="col">Издательство</th>
    </tr>
    </thead>
    <tbody>
    @forelse($books as $book)
        <tr>
            <th scope="row">{{ $book->id }}</th>
            <td>{{ $book->title }}</td>
            @if(count($book->authors))
                <td>
                    @foreach($book->authors as $author)
                        {{ $author->name }} <br>
                    @endforeach
                </td>
            @else
                <td>  </td>
            @endif
            <td>{{ $book->publisher->title }}</td>
        </tr>
    @empty
        <tr>
            <td>Not found any books</td>
        </tr>

    @endforelse
    </tbody>
</table>

<div id="pagination">
    {{ $books->links() }}
</div>


