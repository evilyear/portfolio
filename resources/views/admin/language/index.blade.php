@extends("layouts.app")

@section("content")

<section>
    <div class="container">
       <div class="card">
        <div class="card-header">
            <h1>
                {{__("Languages list")}}
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
                    @foreach ($languages as $language)
                    <tr>
                        <th scope="row">{{$language->id}}</th>
                        <td>{{$language->title}}</td>
                    
                        <td>
                            <a href="{{route('language.destroy',[$language])}}" class="btn btn-danger me-3">{{__("Delete")}}</a>
                            <a href="{{route('language.edit', [$language])}}" class="btn btn-primary">{{__("Edit")}}</a>
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