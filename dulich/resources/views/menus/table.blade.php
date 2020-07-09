<div class="table-responsive">
    <table class="table" id="menus-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Originalmenu</th>
        <th>Link</th>
        <th>Active</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>

        <?php  $routes = array("Trang chủ","About", "blog", "become local express", "contact","Faqs", "Tour"); ?>   
        @foreach($menus as $menu)
            <tr>
                <td>{{ $menu->Name }}</td>
            <td>{{ $routes[$menu->originalMenu] }}</td>
            <td>{{ $menu->Link }}</td>
            @if($menu->active =="1")
            <td>Hiển thị </td>
            @else
            <td>Ẩn</td>
            @endif
                <td>
                    {!! Form::open(['route' => ['menus.destroy', $menu->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('menus.show', [$menu->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('menus.edit', [$menu->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
