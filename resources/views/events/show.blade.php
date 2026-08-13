@extends('layouts.app')

@section('title', $event->title . ' - EDFI News')

@section('content')
<div class="page-hero">
    <div class="container">
        <h3>News Article</h3>
        <div class="click-back-menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><i class="fa-solid fa-chevron-right" style="font-size: 0.75rem;"></i></li>
            <li><a href="{{ route('events.index') }}">Newsroom</a></li>
            <li><i class="fa-solid fa-chevron-right" style="font-size: 0.75rem;"></i></li>
            <li>Detail</li>
        </div>
    </div>
</div>

<section style="padding: 80px 0; background: var(--bg-light);">
    <div class="container" style="max-width: 900px;">
        @if($event->image)
            <div style="border-radius: 16px; overflow: hidden; margin-bottom: 40px; border: 2px solid var(--brand-gold); box-shadow: var(--shadow-hover);">
                <img src="{{ asset('uploads/' . $event->image) }}" alt="{{ $event->title }}" style="width: 100%; max-height: 480px; object-fit: cover;">
            </div>
        @endif

        <div style="background: #ffffff; padding: 45px; border-radius: 16px; border: 1px solid var(--border-light); box-shadow: var(--shadow-soft);">
            <div style="margin-bottom: 25px; border-bottom: 1px solid var(--border-light); padding-bottom: 20px;">
                <span style="color: var(--brand-gold); font-size: 0.88rem; font-weight: 800;"><i class="fa-regular fa-calendar"></i> {{ $event->date ? $event->date->format('F d, Y') : '' }}</span>
                <h1 style="font-family: var(--font-heading); color: var(--brand-navy); margin-top: 10px; font-size: 2.3rem;">{{ $event->title }}</h1>
            </div>

            <div style="color: var(--text-body); font-size: 1.1rem; line-height: 1.8; margin-bottom: 35px;">
                {!! nl2br(e($event->writeup)) !!}
            </div>

            @if($event->link)
                <div style="margin-top: 20px;">
                    <a href="{{ $event->link }}" target="_blank" class="btn-gold">Visit External Link <i class="fa-solid fa-up-right-from-square"></i></a>
                </div>
            @endif
        </div>
    </div>
</section>
@endsection
