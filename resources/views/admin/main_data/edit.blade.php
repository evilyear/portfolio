@extends("layouts.app")

@section("content")

<section>
    <div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
       <div class="card">
        <div class="card-header">
            <h1>
                {{__("Main data update")}}
            </h1>
        </div>
        <div class="card-body">
           <form action="{{route('main_data.update',[$main_data])}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="text" class="form-label">{{__("Key")}}</label>
                <input class="form-control @error('key') is-invalid @enderror" 
                type="text" 
                id="key" 
                name="key" 
                value="{{old('key', $main_data->key)}}"
                >
            </div>
            <ul class="nav nav-tabs " role="tablist">
                @foreach( config('translatable.locales') as  $localItem)
                    <li class="nav-item">
                        <button
                            type="button"
                            class="nav-link @if($localItem == config('translatable.fallback_locale')) active @endif"
                            data-bs-toggle="tab"
                            data-bs-target="#{{$localItem}}"
                            role="tab"
                            aria-selected="@if($localItem == config('translatable.fallback_locale')) true @else false  @endif"
                        >
                            {{$localItem}}
                        </button>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content">
                @foreach( config('translatable.locales') as  $localItem)
                    <div class="tab-pane fade @if($localItem == config('translatable.fallback_locale')) active show @endif" id="{{$localItem}}" role="tabpanel">
                        <div class="mb-3">
                            <label for="text-{{ $localItem }}" class="form-label">{{__("Text")}}</label>
                            <textarea class="form-control @error($localItem.'.text') is-invalid @enderror" 
                            id="text-{{ $localItem }}" 
                            name="{{ $localItem }}[text]" 
                            rows="3">{{old($localItem.'.text', $main_data->translate($localItem)->text)}}</textarea>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
            </form>
        </div>
       </div>
    </div>
</section>




@endsection