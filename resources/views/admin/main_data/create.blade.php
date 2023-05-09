@extends("layouts.app")

@section("content")

<section>
    <div class="container">
       <div class="card">
        <div class="card-header">
            <h1>
                {{__("Main data create")}}
            </h1>
        </div>
        <div class="card-body">
           <form action="{{route('main_data.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="text" class="form-label">{{__("Key")}}</label>
                <input class="form-control" type="text" id="key" name="key" rows="3">
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
                            <textarea class="form-control" id="text-{{ $localItem }}" name="{{ $localItem }}[text]" rows="3"></textarea>
                        </div>
                    </div>
                @endforeach
            
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Success</button>
            </div>
            </form>
        </div>
       </div>
    </div>
</section>




@endsection