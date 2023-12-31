@extends('layouts.master')



@section('title', $title_singular)

@section('hero_area')
    @include('partials.page_header', ['content'=> '<h2 class="product-title">'. $title .'</h2>'])
@endsection

@section('actions')
    @isset($showModel)
        {!! $showModel->getActions() !!}
    @endisset
    @isset($edit_url)
        {!! CoralsForm::link(url($edit_url), trans('Corals::labels.edit'), ['class'=>'btn btn-primary']) !!}
    @endisset
@endsection

@section('js')
@endsection
