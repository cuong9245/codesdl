<div class="table-responsive">
    <table class="table" id="banners-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($banners as $banner)
            <tr>
                <td>{{ $banner->name }}</td>
            <td><img src="{!!  $banner->image !!}" alt="{!! $banner->image !!}" class="img-responsive" width="150" height="150"></td>
                <td>
                    {!! Form::open(['route' => ['banners.destroy', $banner->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('banners.show', [$banner->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('banners.edit', [$banner->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
