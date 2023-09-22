@extends('layouts.app')
@section('title','About Us')
@section('content')
<div class="content">
<div class="box box-primary">
<div class="content">
    @include('adminlte-templates::common.errors')
     <div class="block">
            <!-- Normal Form Title -->
            <div class="block-title">
               <h2><strong>Create New </strong> About Us</h2>
            </div>
                    {!! Form::open(['route' => 'aboutUses.store']) !!}

                        @include('about_uses.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
