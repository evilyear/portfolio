@extends("layouts.app")

@section("content")

<section>
    <div class="container">
       <div class="card">
        <div class="card-header">
            <h1>
                {{__("References update")}}
            </h1>
        </div>
        <div class="card-body">
           <form action="{{route('reference.update',[$reference])}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                            <label for="link" class="form-label">{{__("Link")}}</label>
                            <input type="text" class="form-control" id="link" name="link" placeholder="Link">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">{{__("Image")}}</label>
                            <input class="form-control" type="file" id="image" name="image">
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
                            <label for="title-{{ $localItem }}" class="form-label">{{__("Title")}}</label>
                            <input type="text" class="form-control" id="title-{{ $localItem }}" name="{{ $localItem }}[title]" placeholder="Title" 
                            value="{{$reference->translate($localItem)->title}}">
                        </div>
                        <div class="mb-3">
                            <label for="text-{{ $localItem }}" class="form-label">{{__("Text")}}</label>
                            <textarea class="form-control" id="text-{{ $localItem }}" name="{{ $localItem }}[text]" rows="3"></textarea>
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