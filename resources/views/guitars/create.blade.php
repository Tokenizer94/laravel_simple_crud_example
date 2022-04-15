@extends('layout')

@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        <form action="{{ route('guitars.store') }}" method="POST" class="form bg-white p-6 border-1">
            @csrf
            <div>
                <label for="name" class="text-sm">Guitar Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="text-lg border-1">
                @error('name')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="brand" class="text-sm">Brand</label>
                <input type="text" name="brand" id="brand" class="text-lg border-1" value="{{ old('brand') }}">
                @error('brand')
                    <div class=" form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="year_made" class="text-sm">Year Made</label>
                <input type="text" name="year_made" id="year_made" class="text-lg border-1" value="{{ old('year_made') }}">
                @error('year_made')
                    <div class=" form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <button class="border-1" type="submit">Submit</button>
            </div>
        </form>

    </div>
@endsection
