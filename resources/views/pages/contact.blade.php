@extends('layouts.master')

@section('contact')
<div class="google-map">
    <div id="googleMap"></div>
</div>
<div class="contact-info">
    <h2>How to Find Us</h2>
    <p>Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante. Aenean finibus velit id urna vehicula, nec maximus est sollicitudin.</p>
    <div class="contact-address mt-50">
        <p><span>address:</span> 10 Suffolk st Soho, London, UK</p>
        <p><span>telephone:</span> +12 34 567 890</p>
        <p><a href="mailto:contact@essence.com">contact@essence.com</a></p>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
<script src="{{ asset('js/map-active.js') }}"></script>
@endpush
