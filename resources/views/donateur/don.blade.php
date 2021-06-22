@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                {{-- {!! Form::label($for, $text, [$options]) !!} --}}
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Name')}}</label>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection