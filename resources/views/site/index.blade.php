@extends('site.components.layout')

@section('title', 'HOME || MY PROFILE')

@section('slider')
    @includeIf('site.components.partials.slider')
@endsection

@section('about')
    @includeIf('site.components.partials.about')
@endsection

@section('skill')
    @includeIf('site.components.partials.skill')
@endsection

@section('service')
    @includeIf('site.components.partials.service')
@endsection

@section('hire')
    @includeIf('site.components.partials.hire')
@endsection

@section('client')
    @includeIf('site.components.partials.client')
@endsection

@section('work')
    @includeIf('site.components.partials.work')
@endsection

@section('blog')
    @includeIf('site.components.partials.blog')
@endsection

@section('contact')
    @includeIf('site.components.partials.contact')
@endsection
