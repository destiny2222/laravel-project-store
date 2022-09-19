@extends('admin.layout.menu')
@section('page-title','Categories')
@section('page-breadcrumb','All categories')
@section('content')
@section('link', route('admin.categories.create'))
@section('linkText', 'Create new')
    @if($categories->isNotEmpty())
        <div class="row">
            @foreach ($categories as $categor)
                <div class="col-xl-3 col-md-6">
                <div class="card product-box h-100">
                    <div class="card-body">
                        <div class="product-img">
                            <img src="{{ asset("storage/categories/".$categor->image) }}" class="img-fluid mx-auto d-block rounded-top" alt="work-thumbnail">
                            <div class="product-overlay">
                                <ul class="list-inline product-links social-links mb-0">
                                    <li class="list-inline-item">
                                        <a href="{{ route('admin.categories.edit', $categor->id) }}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="dripicons-document-edit"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <form action="{{ route('admin.categories.destroy', $categor->id) }}" class="form-inline" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i> remove
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="detail mt-3">
                            <h4 class="font-16 text-center"><a href="" class="text-dark">{{ $categor->name }}</a> </h4>
                        </div>
                    </div>
                </div>
                <!-- end product-box -->
            </div>
            @endforeach
        </div>
    <!-- end row -->
    @endif
@endsection