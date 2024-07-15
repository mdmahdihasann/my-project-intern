@extends('admin-dashboard.dashboard')
@section('title',$title)
@push('styles')

@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-header form-header">
                <h5 class="card-title fw-600">Product {{ $title }}</h5>
            </div>
            <div class="bg-white px-4 py-3 mb-3 shadow-sm rounded">
                <form action="{{ isset($productedit) ? route('admin.product.update',$productedit->id) : route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($productedit)
                    @method('PATCH')
                        <input type="hidden" name="update_id" value="{{ $productedit->id }}">
                    @endisset
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form-label" class="required">Product Name</label>
                                <input class="form-control" type="text" name="name" placeholder="name" value="{{ $productedit->name ?? old('name') }}">
                                <div>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form-label" class="required">Product Price</label>
                                <input class="form-control" type="text" name="price" placeholder="price" value="{{ $productedit->price ?? old('price') }}">
                                <div>
                                    @error('price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form-label" class="required">Category</label>
                                <select name="category_id" class="form-select form-control">
                                    <option value="">Select Category</option>
                                    @foreach ($category as $value)
                                    <option value="{{ $value->id }}" @isset($productedit)
                                        {{ $productedit->category_id == $value->id ? 'selected' : '' }}
                                    @endisset>{{ $value->category_name }}</option>
                                    @endforeach
                                    
                                </select>
                                <div>
                                    @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form-label" class="required">Photo</label>
                                <input type="file" name="photo" class="form-control py-0" value="@isset($productedit)
                                    {{ $productedit->photo }}
                                @endisset">
                                @isset($productedit)
                                    <img src="{{ asset('product/'.$productedit->photo) }}" alt="" style="width: 50px; height: 60px;">
                                @endisset
                                <div>
                                    @error('photo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form-label" class="required">Status</label>
                                <select name="status" class="form-control">
                                    <option value="">Select status</option>
                                    <option value="1" @isset($productedit)
                                        {{ $productedit->status == 1 ? 'selected' : '' }}
                                    @endisset>publish</option>
                                    <option value="2" @isset($productedit)
                                    {{ $productedit->status == 2 ? 'selected' : '' }}
                                @endisset>pending</option>
                                </select>
                                <div>
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 text-right">
                           <button type="submit" class="btn btn-lg btn-primary">{{ isset($productedit) ? 'Update' : 'Create' }}</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

@endpush
