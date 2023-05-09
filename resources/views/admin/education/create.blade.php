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
                {{__("Education create")}}
            </h1>
        </div>
        <div class="card-body">
           <form action="{{route('education.store')}}" method="POST">
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
                                value="{{ old($localItem.'.title') }}"
                              >
                        </div>
                        <div class="mb-3">
                            <label for="text-{{ $localItem }}" class="form-label">{{__("Text")}}</label>
                            <textarea class="form-control @error($localItem.'.text') is-invalid @enderror" 
                            id="text-{{ $localItem }}" 
                            name="{{ $localItem }}[text]" 
                            rows="3">{{ old($localItem.'.text') }}</textarea>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">   
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="timeFrom" class="form-label">{{__("Time from")}}</label>
                        <input type="date" 
                        class="form-control @error('timeFrom') is-invalid @enderror" 
                        id="timeFrom" 
                        name="timeFrom" 
                        placeholder="2015"  
                        value="{{ old('timeFrom') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="timeTill" class="form-label">{{__("Time till")}}</label>
                        <input type="date" 
                        class="form-control @error('timeTill') is-invalid @enderror" 
                        id="timeTill" 
                        name="timeTill" 
                        placeholder="2015" 
                        value="{{ old('timeTill') }}">
                    </div>
                </div>
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