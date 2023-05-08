@extends("layouts.app")

@section("content")

<section>
    <div class="container">
       <div class="card">
        <div class="card-header">
            <h1>
                {{__("Skill elements list")}}
            </h1>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Skill</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skill_elements as $skill_element)
                    <tr>
                        <th scope="row">{{$skill_element->id}}</th>
                        <td>{{$skill_element->title}}</td>
                        <td>{{$skill_element->skill->title}}</td>
                        <td>
                            <a href="{{route('skill_element.destroy',[$skill_element])}}" class="btn btn-danger me-3">{{__("Delete")}}</a>
                            <a href="{{route('skill_element.edit', [$skill_element])}}" class="btn btn-primary">{{__("Edit")}}</a>
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