<style type="text/css">
    .glyphicon-off{
        color: red;
    }
    .glyphicon-ok{
        color:green;
    }
</style>

<div class="table-responsive">
    <table class="table" id="commentClients-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Email</th>
        <th>Title</th>
        <th>Content</th>
        <th>Star</th>
        <th>Liked</th>
        <th>Status</th>
        <th>Date</th>
         <th>Page</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>

        @foreach($commentClients as $commentClient)

            <?php  
                $toururl = App\Models\Tour::find($commentClient->id_page);
                $url     = $toururl['url_rewrite'];
                if($commentClient->status == 0){
                    $hienthistt  = "ẩn";
                }
                else{
                    $hienthistt  = "Hiển thị" ;   
                }
            ?>


            <tr>
                <td>{{ $commentClient->name }}</td>
            <td>{{ $commentClient->email }}</td>
            <td>{{ $commentClient->title }}</td>
            <td>{{ $commentClient->content }}</td>
            <td>{{ $commentClient->star }}</td>
            <td>{{ $commentClient->liked }}</td>
            <td>{{ $hienthistt }}</td>
            <td>{{ $commentClient->date }}</td>


            <td><a href="{{ route('tourDetails', [$url]) }}">link</td>
                <td>
                    {!! Form::open(['route' => ['commentClients.destroy', $commentClient->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('commentClients.show', [$commentClient->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>

                        @if($commentClient->status == 0)
                        <a href="{{ route('commentClients.edit', [$commentClient->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-ok"></i></a>
                        @else
                        <a href="{{ route('commentClients.edit', [$commentClient->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-off"></i></a>
                        @endif
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
