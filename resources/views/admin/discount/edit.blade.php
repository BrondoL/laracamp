@extends("layouts.app")

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card mt-3">
                    <div class="card-header">
                        Update Discount
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.discount.update', $discount->id) }}" method="POST">
                            @csrf
                            @method("PUT")
                            <input type="hidden" name="id" value="{{ $discount->id }}">
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    required value="{{ old('name', $discount->name) }}">
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="code" class="form-label">Code</label>
                                <input type="text" name="code" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('code', $discount->code) }}" required>
                                @if ($errors->has('code'))
                                    <p class="text-danger">{{ $errors->first('code') }}</p>
                                @endif
                            </div>
                            <div class=" form-group mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" cols="0" rows="2"
                                    class="form-control @error('name') is-invalid @enderror">{{ old('description', $discount->description) }}</textarea>
                                @if ($errors->has('description'))
                                    <p class="text-danger">{{ $errors->first('description') }}</p>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="percentage" class="form-label">Discount Percentage</label>
                                <input type="number" name="percentage" min="1" max="100"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('percentage', $discount->percentage) }}" required>
                                @if ($errors->has('percentage'))
                                    <p class="text-danger">{{ $errors->first('percentage') }}</p>
                                @endif
                            </div>
                            <button class="  btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
