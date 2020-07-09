<div class="table-responsive">
    <table class="table" id="imageTours-table">
        <thead>
            <tr>
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($imageTours as $imageTour)
            <tr>
                <td><img src="{!!  $imageTour->image !!}" alt="{!! $imageTour->image !!}" class="img-responsive" width="150" height="150"></td>
                <td>
                    {!! Form::open(['route' => ['imageTours.destroy', $imageTour->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('imageTours.show', [$imageTour->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('imageTours.edit', [$imageTour->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
