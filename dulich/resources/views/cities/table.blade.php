<div class="table-responsive">
    <table class="table" id="cities-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Image</th>
        <th>Customer</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cities as $city)
            <tr>
                <td>{{ $city->name }}</td>
            <td><img src="{!!  $city->image !!}" alt="{!! $city->image !!}" class="img-responsive" width="150" height="150"></td>
            <td>{{ $city->customer }}</td>
                <td>
                    {!! Form::open(['route' => ['cities.destroy', $city->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cities.show', [$city->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cities.edit', [$city->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
