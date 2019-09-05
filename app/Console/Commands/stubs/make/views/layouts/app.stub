@extends('tabler::layouts.main')

@if (auth()->check())
    @section('user-avatar', 'https://www.gravatar.com/avatar/' . md5(auth()->user()->email) . '?d=mm')
@section('user-name', auth()->user()->name)
@section('user-role', "Web Developer")
@endif

