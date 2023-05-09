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
                {{__("Skills create")}}
            </h1>
        </div>
        <div class="card-body">
           <form action="{{route('skill.store')}}" method="POST">
            @csrf
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
                            <label for="title-{{ $localItem }}" class="form-label">{{__("Title")}}</label>
                            <input type="text" 
                            class="form-control @error($localItem.'.title') is-invalid @enderror" 
                            id="title-{{ $localItem }}" 
                            name="{{ $localItem }}[title]" 
                            placeholder="Title"
                            value="{{ old($localItem.'.title') }}">
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="mb-3">
                <button type="submit" class="btn btn-success">{{__("Save")}}</button>
            </div>
            </form>
        </div>
       </div>
    </div>
</section>




@endsection