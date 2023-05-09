@extends("layouts.app")

@section("content")

<section>
    <div class="container">
    <div class="mb-3 text-end">
    <a class="btn btn-primary" href="{{ route('education.create') }}" role="button">{{ __('Education create') }}</a>
    </div>
       <div class="card">
        <div class="card-header">
            <h1>
                {{__("Educations list")}}
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
                    @foreach ($educations as $education)
                    <tr>
                        <th scope="row">{{$education->id}}</th>
                        <td>{{$education->title}}</td>
                        <td>{{$education->timeFrom}}</td>
                        <td>{{$education->timeTill}}</td>
                        <td>
                            <a href="{{route('education.destroy',[$education])}}" class="btn btn-danger me-3">{{__("Delete")}}</a>
                            <a href="{{route('education.edit', [$education])}}" class="btn btn-primary">{{__("Edit")}}</a>
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