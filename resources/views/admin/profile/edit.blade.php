@extends('layouts.admin')

@section('title', 'Admin Profile Settings - EDFI Admin')

@section('content')
<div class="page-header">
    <h1>Admin Profile & Password</h1>
</div>

<div class="card" style="max-width: 600px;">
    <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Display Name *</label>
            <input type="text" id="name" name="name" class="form-control" required value="{{ old('name', $user->name) }}">
        </div>

        <div class="form-group">
            <label for="username">Username *</label>
            <input type="text" id="username" name="username" class="form-control" required value="{{ old('username', $user->username) }}">
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $user->email) }}">
        </div>

        <div class="form-group">
            <label for="avatar">Profile Avatar</label>
            @if($user->avatar)
                <div style="margin-bottom: 10px;">
                    <img src="{{ asset('uploads/' . $user->avatar) }}" style="height: 60px; width: 60px; border-radius: 50%; object-fit: cover; border: 2px solid #d9aa52;">
                </div>
            @endif
            <input type="file" id="avatar" name="avatar" class="form-control">
        </div>

        <hr style="border: 0; border-top: 1px solid #232733; margin: 25px 0;">

        <div class="form-group">
            <label for="password">New Password (Leave blank to keep current password)</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter new password">
        </div>

        <button type="submit" class="btn-primary"><i class="fa-solid fa-floppy-disk"></i> Update Profile Settings</button>
    </form>
</div>
@endsection
