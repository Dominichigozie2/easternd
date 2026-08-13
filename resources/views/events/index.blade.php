@extends('layouts.app')

@section('title', 'News & Events - Eastern Distilleries')

@section('content')
<div class="page-hero">
    <div class="container">
        <h3>News & Events</h3>
        <div class="click-back-menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><i class="fa-solid fa-chevron-right" style="font-size: 0.75rem;"></i></li>
            <li>News & Events</li>
        </div>
    </div>
</div>

<section style="padding: 90px 0; background: var(--bg-light);">
    <div class="container">
        <div class="section-title-wrap">
            <span class="subtitle">MEDIA & ANNOUNCEMENTS</span>
            <h2 class="section-title-navy">Corporate Newsroom</h2>
        </div>

        @if($events->count())
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
                @foreach($events as $event)
                    <div class="brand-card" style="padding: 0; overflow: hidden;">
                        @if($event->image)
                            <div style="height: 230px; overflow: hidden; position: relative;">
                                <img src="{{ asset('uploads/' . $event->image) }}" alt="{{ $event->title }}" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.src='{{ asset('img/bright_distillery_facility.jpg') }}'">
                                <div style="position: absolute; bottom: 15px; left: 15px; background: var(--brand-navy); padding: 5px 14px; border-radius: 50px; border: 1px solid var(--brand-gold); color: var(--brand-gold); font-size: 0.8rem; font-weight: 800;">
                                    <i class="fa-regular fa-calendar"></i> {{ $event->date ? $event->date->format('F d, Y') : '' }}
                                </div>
                            </div>
                        @endif
                        <div style="padding: 28px; flex: 1; display: flex; flex-direction: column;">
                            <h3 style="font-family: var(--font-heading); color: var(--brand-navy); font-size: 1.35rem; margin-bottom: 12px;">{{ $event->title }}</h3>
                            <p style="color: var(--text-body); font-size: 0.93rem; line-height: 1.6; margin-bottom: 25px; flex: 1;">{{ Str::limit($event->writeup, 130) }}</p>
                            <a href="{{ route('events.show', $event->id) }}" class="card-link-gold">Read Full Coverage <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div style="text-align: center; padding: 60px; color: var(--text-muted);">
                <h3>No published news articles at this time. Check back soon!</h3>
            </div>
        @endif
    </div>
</section>
@endsection
