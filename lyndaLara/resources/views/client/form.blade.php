@extends('layouts.app')

@section('content')
    <div class="row">
      <div class="medium-12 large-12 columns">
        <h4>{{ $modify == 1 ? 'Modify Client' : 'New Client' }}</h4>
        <form action="{{ $modify == 1 ? route('update_client', ['client_id' => $client_id]) : route('create_client') }}" method="post">
          {{ csrf_field() }}
          <div class="medium-4 columns">
            <label>Title</label>
            <select name="title">
              <small class="error">{{ $errors->first('title') }}</small>
              @foreach ($titles as $title)
                <option value="{{ $title }}">{{ $title }}.</option>
              @endforeach
            </select>
          </div>
          <div class="medium-4 columns">
            <label>Name</label>
            <input name="name" value="{{ old('name') ? old('name') : $name }}" type="text">
            <small class="error">{{ $errors->first('name') }}</small>
          </div>
          <div class="medium-4 columns">
            <label>Last Name</label>
            <input name="last_name" value="{{ old('last_name') ? old('last_name') : $last_name }}" type="text">
            <small class="error">{{ $errors->first('last_name') }}</small>
          </div>
          <div class="medium-8 columns">
            <label>Address</label>
            <input name="address" value="{{ old('address') ? old('address') : $address }}" type="text">
            <small class="error">{{ $errors->first('address') }}</small>
          </div>
          <div class="medium-4 columns">
            <label>zip_code</label>
            <input name="zip_code" value="{{ old('zip_code') ? old('zip_code') : $zip_code }}" type="text">
            <small class="error">{{ $errors->first('zip_code') }}</small>
          </div>
          <div class="medium-4 columns">
            <label>City</label>
            <input name="city" value="{{ old('city') ? old('city') : $city }}" type="text">
            <small class="error">{{ $errors->first('city') }}</small>
          </div>
          <div class="medium-4 columns">
            <label>State</label>
            <input name="state" value="{{ old('state') ? old('state') : $state }}" type="text">
            <small class="error">{{ $errors->first('state') }}</small>
          </div>
          <div class="medium-12 columns">
            <label>Email</label>
            <input name="email" value="{{ old('email') ? old('email') : $email }}" type="text">
            <small class="error">{{ $errors->first('email') }}</small>
          </div>
          <div class="medium-12 columns">
            <input value="SAVE" class="button success hollow" type="submit">
          </div>
        </form>
      </div>
    </div>
@endsection