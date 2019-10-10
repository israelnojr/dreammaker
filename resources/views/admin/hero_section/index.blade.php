@extends('layouts.app')

@section('title','Hero Section')

@push('css')
    
@endpush

@section('content')
    <div class="content">
    @include('layouts.partial.message')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('hero-section.create') }}" class="btn btn-primary">Add New</a>
                    
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">All Hero Section</h4>
                        </div>
                        <div class="card-content table-responsive table-custom">
                            <table id="table" class="table table-striped " cellspacing="0" width="100%" height="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>BTN Redirect URL</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                  @foreach($hero as $key=>$header)
                                        <tr>
                                            <td> {{$key + 1}} </td>
                                            <td> {{$header->header_title}} </td>
                                            <td> {{$header->header_desc}} </td>
                                            <td> <a href="{{$header->hero_btn_url}}"> {{$header->hero_btn_url}} </a></td>
                                            <td><img class="img-responsive img-thumbnail" src="{{ asset('uploads/hero-section/'.$header->hero_img) }}" 
                                                style="height: 100px; width: 100px" alt=""></td>
                                            <td>{{ $header->created_at->toFormattedDateString()}}</td>
                                            <td>{{ $header->updated_at->toFormattedDateString()}}</td>
                                            <td>
                                                <a href="{{ route('hero-section.edit',$header->id) }}" class="btn btn-info btn-sm">
                                                    <i class="material-icons">mode_edit</i>
                                                </a>

                                                <form id="delete-form-id" action="{{ route('hero-section.destroy',$header->id) }}" 
                                                    style="display: none;" method="POST">
                                                    @csrf @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-id').submit();
                                                    }else { event.preventDefault(); }">  <i class="material-icons">delete</i>
                                                </button>
                                            </td> 
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush