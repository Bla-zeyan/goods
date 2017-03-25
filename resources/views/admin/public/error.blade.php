@if(!is_string($errors))
    @if(count($errors) > 0)
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@else
    @if(!empty($error))
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-danger">
                    <li>{{$error}}</li>
                </div>
            </div>
        </div>
    @endif
@endif