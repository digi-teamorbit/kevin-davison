@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-white mt-5">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box card">
                <div class="card-body">
                    <h3 class="box-title pull-left">Feature #{{ $feature->id }}</h3>
                    
                        <a class="btn btn-success pull-right" href="{{ url('/admin/feature') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $feature->id }}</td>
                            </tr>
                            <tr><th> Title </th><td> {{ $feature->title }} </td></tr><tr><th> Description </th><td><?= html_entity_decode($feature->description) ?></td></tr><tr><th> Image </th><td><img src="{{ asset($feature->image) }}"></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.admin.footer')
</div>
@endsection

