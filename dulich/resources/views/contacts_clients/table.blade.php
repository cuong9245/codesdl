<div class="table-responsive">
    <table class="table" id="contactsClients-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Email</th>
        <th>Message</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($contactsClients as $contactsClient)
            <tr>
                <td>{{ $contactsClient->name }}</td>
            <td>{{ $contactsClient->email }}</td>
            <td>{{ $contactsClient->message }}</td>
                <td>
                    {!! Form::open(['route' => ['contactsClients.destroy', $contactsClient->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('contactsClients.show', [$contactsClient->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('contactsClients.edit', [$contactsClient->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
