<div class="table-responsive">
    <table class="table" id="authors-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Alamat</th>
            <th>Jml Artikel</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($authors as $author)
            <tr>
                <td>{{ $author->name }}</td>
                <td>{{ $author->alamat }}</td>
                <td>{{ $author->jml_artikel }}</td>
                <td>
                        
                        {{-- <a href="{{ route('posts.trend', [$author->id]) }}"
                            class='btn btn-primary'>
                             <i class="far fa-eye"></i>
                             jml artikel
                         </a> --}}
                        {{-- <a href="/posts.trend", [$author->id]"
                            class='btn btn-primary'>
                             <i class="far fa-eye"></i>
                             jml artikel
                         </a> --}}
                </td>
                <td width="120">
                    {!! Form::open(['route' => ['authors.destroy', $author->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('authors.show', [$author->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('authors.edit', [$author->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}

                        {{-- <form method="GET" action="{{ url{{ 'trend' }} }}"> --}}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
