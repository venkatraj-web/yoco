@extends('layouts.main_master')
@section('content')
    @if (Session::has("success"))
    <span style="color:green">{{ Session::get("success") }}</span>
    @endif
    @if (Session::has("fail"))
    <span style="color:red">{{ Session::get("fail") }}</span>
    @endif

    <style>
        .contact_form{
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

    <div class="contact_form">
        <form action="{{url('/contact/store')}}" method="POST">
            @csrf
            <div style="margin:2rem;">
                <label for="">Name</label>
                <div>
                    <input type="text" name="name" placeholder="enter name" value="{{ old("name") }}">
                </div>
                <div>
                    @error("name")
                        <span style="color:red">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div style="margin:2rem;">
                <label for="">Email</label>
                <div>
                    <input type="email" name="email" placeholder="enter email" value="{{ old("email") }}">
                </div>
                <div>
                    @error("email")
                        <span style="color:red">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div style="margin:2rem;">
                <label for="">Company Type</label>
                <div style="display:flex;">
                    <input type="radio" name="company_type" placeholder="select company type" value="indivitual">
                    <h3>Indivitual</h3>
                </div>
                <div style="display:flex;">
                    <input type="radio" name="company_type" placeholder="select company type" value="organization">
                    <h3>organization</h3>
                </div>
                <div>
                    @error("company_type")
                        <span style="color:red">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div style="margin:2rem;">
                <label for="">Organization</label>
                <div>
                    <input type="text" name="organization" placeholder="enter organization name" value="{{ old("organization") }}">
                </div>
                <div>
                    @error("organization")
                        <span style="color:red">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div style="margin:2rem;">
                <input type="submit" value="submit">
            </div>
        </form>
    </div>
@endsection