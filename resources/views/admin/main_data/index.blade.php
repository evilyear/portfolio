@extends("layouts.app")

@section("content")

<section>
    <div class="container">
    <div class="mb-3 text-end">
    <a class="btn btn-primary" href="{{ route('main_data.create') }}" role="button">{{ __('Main data create') }}</a>
    
    </div>
       <div class="card">
        <div class="card-header">
            <h1>
                {{__("Main data list")}}
            </h1>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Key</th>
                    <th scope="col">Text</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($main_datas as $main_data)
                    <tr>
                        <th scope="row">{{$main_data->id}}</th>
                        <td>{{$main_data->key}}</td>
                        <td>{{$main_data->text}}</td>
                    
                        <td>
                            <a href="{{route('main_data.destroy',[$main_data])}}" class="btn btn-danger me-3">{{__("Delete")}}</a>
                            <a href="{{route('main_data.edit', [$main_data])}}" class="btn btn-primary">{{__("Edit")}}</a>
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