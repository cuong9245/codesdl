<div class="table-responsive">
    <table class="table" id="tickets-table">
        <thead>
            <tr>
                <th>From</th>
        <th>To</th>
        <th>Type</th>
        <th>Price</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tickets as $ticket)

            <?php   

                if ($ticket->type =="1") {
                    $type  = "one way";
                }
                else{
                    $type  = "round trip";
                }

            ?>
            <tr>
                <td>{{ $ticket->from }}</td>
            <td>{{ $ticket->to }}</td>


            <td>{{ $type }}</td>
            <td>{{ $ticket->price }}$</td>
                <td>
                    {!! Form::open(['route' => ['tickets.destroy', $ticket->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tickets.show', [$ticket->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tickets.edit', [$ticket->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
