@extends('emails.base-email')

@section('body')

<p>Welcome to InetSpaceMan!</p>

<p>Please <a href="{!! getenv('HOST') !!}/verify-account?token={!! $token !!}">Click here to activate</a> your account.</p>

@stop
