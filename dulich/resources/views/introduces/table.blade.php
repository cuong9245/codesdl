<div class="table-responsive">
    <table class="table" id="introduces-table">
        <thead>
            <tr>
                <th>Image</th>
        <th>Name</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($introduces as $introduce)
            <tr>

            <td><img src="{!!  $introduce->image  !!}" alt="{!!$introduce->image !!}" class="img-responsive" width="150" height="150"></td>    
                <td>{{ $introduce->image }}</td>
            <td>{{ $introduce->name }}</td>
            <td>{{ $introduce->description }}</td>
                <td>
                    {!! Form::open(['route' => ['introduces.destroy', $introduce->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('introduces.show', [$introduce->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('introduces.edit', [$introduce->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
