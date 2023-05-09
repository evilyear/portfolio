@extends("layouts.app")

@section("content")

<section>
    <div class="container">
    <div class="mb-3 text-end">
    <a class="btn btn-primary" href="{{ route('reference.create') }}" role="button">{{ __('Reference create') }}</a>
    
    </div>
       <div class="card">
        <div class="card-header">
            <h1>
                {{__("References list")}}
            </h1>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($references as $reference)
                    <tr>
                        <th scope="row">{{$reference->id}}</th>
                        <td><img src="/{{$reference->image}}" class="img-fluid" width="50"></td>
                        <td>{{$reference->title}}</td>
                        <td>
                            <a href="{{route('reference.destroy',[$reference])}}" class="btn btn-danger me-3">{{__("Delete")}}</a>
                            <a href="{{route('reference.edit', [$reference])}}" class="btn btn-primary">{{__("Edit")}}</a>
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