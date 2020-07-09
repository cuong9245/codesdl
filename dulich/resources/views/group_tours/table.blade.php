<div class="table-responsive">
    <table class="table" id="groupTours-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Url Rewrite</th>
        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($groupTours as $groupTour)
            <tr>
                <td>{{ $groupTour->Name }}</td>
            <td>{{ $groupTour->url_rewrite }}</td>
            <td><img src="{!!  $groupTour->image  !!}" alt="{!! $groupTour->image !!}" class="img-responsive" width="150" height="150"></td>
                <td>
                    {!! Form::open(['route' => ['groupTours.destroy', $groupTour->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('groupTours.show', [$groupTour->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('groupTours.edit', [$groupTour->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
