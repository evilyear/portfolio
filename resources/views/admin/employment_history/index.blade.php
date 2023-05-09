@extends("layouts.app")

@section("content")

<section>
    <div class="container">
    <div class="mb-3 text-end">
    <a class="btn btn-primary" href="{{ route('employment_history.create') }}" role="button">{{ __('Employment history create') }}</a>
    
    </div>
       <div class="card">
        <div class="card-header">
            <h1>
                {{__("Employments list")}}
            </h1>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Time From</th>
                    <th scope="col">Time Till</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employment_histories as $employment_history)
                    <tr>
                        <th scope="row">{{$employment_history->id}}</th>
                        <td>{{$employment_history->title}}</td>
                        <td>{{$employment_history->timeFrom}}</td>
                        <td>{{$employment_history->timeTill}}</td>
                        <td>
                            <a href="{{route('employment_history.destroy',[$employment_history])}}" class="btn btn-danger me-3">{{__("Delete")}}</a>
                            <a href="{{route('employment_history.edit', [$employment_history])}}" class="btn btn-primary">{{__("Edit")}}</a>
                    </td>
                    </tr>
                    @endforeach
                    
       
                </tbody>
            </table>
        </div>
       </div>
    </div>
    
</section>




@endsection