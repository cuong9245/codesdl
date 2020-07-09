<div class="table-responsive">
    <table class="table" id="promotions-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Image</th>
        <th>Detail</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($promotions as $promotion)
            <tr>
                <td>{{ $promotion->Title }}</td>
            <td><img src="{!!  $promotion->image  !!}" alt="{!! $promotion->image !!}" class="img-responsive" width="150" height="150"></td>
            <td>{!! $promotion->Detail !!}</td>
                <td>
                    {!! Form::open(['route' => ['promotions.destroy', $promotion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('promotions.show', [$promotion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('promotions.edit', [$promotion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
