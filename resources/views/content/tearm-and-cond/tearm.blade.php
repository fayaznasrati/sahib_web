@extends('layouts/contentNavbarLayout')

@section('title', 'menus')

@section('page-script')
    <script src="{{ asset('assets/js/form-basic-inputs.js') }}"></script>
@endsection
<!-- In your blade template -->

@section('content')
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Tearm /</span>
        @if (isset($tearm))
            Update
        @else
            Create
        @endif Tearms & Condations

    </h4>

    @include('content.alert.alert')
    <div class="row">

        <div class="card mb-4">
            <h5 class="card-header">
                @if (isset($tearm))
                    Update
                @else
                    Create
                @endif Tearms & Condations
            </h5>
            <div class="card-body">

                @if (isset($tearm))
                    <form action="{{ route('tearms.update', $tearm->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                    @else
                        <form action="{{ route('tearms.store') }}" method="POST" enctype="multipart/form-data">
                @endif
                @csrf
                <div class="form-floating">
                    <div class="row">


                        <div class="col-md-8">
                            <div class="form-floating">
                                <textarea class="tinymce-editor form-control" name="tearm_and_condation">
                                     {!! old('tearm_and_condation', $tearm->tearm_and_condation ?? '') !!}
                                </textarea>
                                <div id="floatingInputHelp" class="form-text">
                                    @if (isset($tearm))
                                        Update
                                    @else
                                        Write
                                    @endif the name of tearm here
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-floating"> 
                                <select name="tearm_on" class="form-control form-select-sm">
                                  <option selected>Select Tearm On</option>
                                  @foreach ($tearm_on as $t_on )
                                  <option @if (isset($tearm)) {{$tearm->tearm_on == $t_on? 'selected': ''}}
                                  @endif value="{{$t_on}}">{{$t_on}}</option>
                                  @endforeach
                                 
                               
                                </select>
                                <div id="floatingInputHelp" class="form-text">
                                    @if (isset($tearm))
                                        Update
                                    @else
                                        Write
                                    @endif the name of tearm here
                                </div>

                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-floating">
                                <button type="submit" class="btn btn-lg btn-dark">
                                    @if (isset($tearm))
                                        Update
                                    @else
                                        Create
                                    @endif
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
                </form>
            </div>
        </div>

        {{-- table of tearms --}}
        <!-- Basic Bootstrap Table -->
        <div class="card ">
            <h5 class="card-header">Tearm And Condation Table</h5>
            <div class="table-responsive text-nowrap">
                <table class="table pb-5">
                    <thead>
                        <tr>
                            <th>#No</th>
                            <th>Tearm On</th>
                            <th>Tearm</th>
                            <th>Actions</th>
                        </tr>
                    </thead> @php
                        $i = 1;
                    @endphp
                    {{-- {{$tearms}} --}}
                    <tbody class="table-border-bottom-0">
                        @foreach ($tearms as $tearm)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{!! Str::limit($tearm->tearm_and_condation, 100) !!}
                                </td>

                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $tearm->tearm_on }}</strong></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('tearms.show', $tearm->id) }}"><i
                                                    class="bx bx-show-alt me-1"></i> show</a>
                                            <a class="dropdown-item" href="{{ route('tearms.edit', $tearm->id) }}"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <form id="delete-form" action="{{ route('tearms.destroy', $tearm->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item" type="submit"><i
                                                        class="bx bx-trash me-1"></i>Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>

@endsection
