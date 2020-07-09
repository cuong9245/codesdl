<div class="table-responsive">

    


    <table class="table" id="tours-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Code</th>
                <th>Departureday</th>
                
               
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tours as $tour)
            <?php    

                $datetime = new \Carbon\Carbon($tour->departureDay.' '.$tour->departureTime);
                $now = \Carbon\Carbon::now();
                $image = App\Models\imageTour::where('imageTour_id', $tour->id)->get();
                if (strtotime($now) < strtotime($datetime)) {
                    $tourstime[] = $tour->id;
                }

                
            ?>
            <tr>
                <td>{{ $tour->id }}</td>
                <td>{{ $tour->Name }}</td>
                <td>{{ $tour->Code }}</td>
                <td>{{ $tour->departureDay }}</td>
                
               
                <td>
                    {!! Form::open(['route' => ['tours.destroy', $tour->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        
                        <a href="{{ route('tours.show', [$tour->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tours.edit', [$tour->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>

                       

                        <a href="{{ route('places.show', [$tour->id]) }}" class='btn btn-default btn-xs'><i class="fa fa-paper-plane"></i></a>

                        <a href="{{ route('programTours.show', [$tour->id]) }}" class='btn btn-default btn-xs'><i class="fa fa-id-card-o"></i></a>

                        <a href="{{ route('faqs.create')}}?tourid={{ $tour->id }}" class='btn btn-default btn-xs'><i class="fa fa-question-circle-o"></i></a>

                        <a href="{{ route('imageTours.show', [$tour->id]) }}" class='btn btn-default btn-xs {{ (count($image)==0?'btn-danger':'') }}'><i class="fa fa-file-image-o"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    @if(empty($tourstime))
    <div><h2 style="color: red;"> Tất cả các tour đã quá hạn, vui lòng gia hạn lại cho tour  </h2></div>
    @endif
    


    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
