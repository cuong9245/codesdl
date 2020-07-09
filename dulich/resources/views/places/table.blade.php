<div class="table-responsive">
    <table class="table" id="places-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($places as $places)
            <tr>
                <td>{{ $places->name }}</td>
                <td><img src="{!!  $places->image  !!}" alt="{!! $places->image !!}" class="img-responsive" width="150" height="150"></td>
                <td>
                    {!! Form::open(['route' => ['places.destroy', $places->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('places.show', [$places->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('places.edit', [$places->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
