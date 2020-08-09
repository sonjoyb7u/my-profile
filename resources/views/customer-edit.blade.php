@extends('layouts.app')

@section('content')
    <customer-edit-component :customer="{{ $customer }}"></customer-edit-component>
@endsection




