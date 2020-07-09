<div class="table-responsive">
    <table class="table" id="whySelects-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Detail</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($whySelects as $whySelect)
            <tr>
                <td>{{ $whySelect->name }}</td>
            <td>{{ $whySelect->detail }}</td>
                <td>
                    {!! Form::open(['route' => ['whySelects.destroy', $whySelect->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('whySelects.show', [$whySelect->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('whySelects.edit', [$whySelect->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
