<div class="table-responsive">
    <table class="table" id="faqs-table">
        <thead>
            <tr>
                <th>Question</th>
        <th>Answer</th>
        <th>Tourid</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($faqs as $faqs)

        <?php  

            $link = App\Models\Tour::find($faqs->tourId);

        ?>
            <tr>
                <td>{{ $faqs->question }}</td>
            <td>{{ $faqs->answer }}</td>


            <td><a href="/tourDetails/{{ $link->url_rewrite }}">link faq</a></td>
                <td>
                    {!! Form::open(['route' => ['faqs.destroy', $faqs->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('faqs.show', [$faqs->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('faqs.edit', [$faqs->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
