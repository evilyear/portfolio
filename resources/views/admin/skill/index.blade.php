@extends("layouts.app")

@section("content")

<section>
    <div class="container">
    <div class="mb-3 text-end">
    <a class="btn btn-primary" href="{{ route('skill.create') }}" role="button">{{ __('Skills create') }}</a>
    
    </div>
       <div class="card">
        <div class="card-header">
            <h1>
                {{__("Skills list")}}
            </h1>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skills as $skill)
                    <tr>
                        <th scope="row">{{$skill->id}}</th>
                        <td>{{$skill->title}}</td>
                        <td>
                            <a href="{{route('skill.destroy',[$skill])}}" class="btn btn-danger me-3">{{__("Delete")}}</a>
                            <a href="{{route('skill.edit', [$skill])}}" class="btn btn-primary">{{__("Edit")}}</a>
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