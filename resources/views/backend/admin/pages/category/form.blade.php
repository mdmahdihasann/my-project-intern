@extends('admin-dashboard.dashboard')
@section('title',$title)
@push('styles')

@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-header form-header">
                <h5 class="card-title fw-600">Category {{ $title }}</h5>
            </div>
            <div class="bg-white px-4 py-3 mb-3 shadow-sm rounded">
                <form action="{{ isset($category_edit) ? route('admin.category.update',$category_edit->id) : route('admin.category.store') }}" method="POST">
                    @csrf
                    @isset($category_edit)
                    @method('PATCH')
                        <input type="hidden" name="update_id" value="{{ $category_edit->id }}">
                    @endisset
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form-label" class="required">Category Name</label>
                                <input class="form-control" type="text" name="category_name" placeholder="name" value="{{ $category_edit->category_name ?? old('category_name') }}">
                                <div>
                                    @error('category_name')
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
                                    <option value="1" @isset($category_edit)
                                        {{ $category_edit->status == 1 ? 'selected' : '' }}
                                    @endisset>publish</option>
                                    <option value="2" @isset($category_edit)
                                    {{ $category_edit->status == 2 ? 'selected' : '' }}
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
                           <button type="submit" class="btn btn-lg btn-primary">{{ isset($category_edit) ? 'Update' : 'Create' }}</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

@endpush
