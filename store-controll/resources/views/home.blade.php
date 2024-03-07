@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        <h6>Hello <strong>{{ Auth::user()->name }}</strong>,</h6>
                        Welcome to store controll!
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{--About Us--}}
                        <div>
                            <ul>
                                <li><strong>About Us</strong></li>
                            </ul>
                            <div>
                        <span>If you start a simple bussiness this is the right system for you. With our system you can
                            <strong>register, list, edit and delete</strong> elements of your bussiness.
                            Come be part of store controll you too.
                        </span>
                            </div>
                        </div>
                        <div>
                            <img src="/images/stores_1.jpg" style="height: 150px;width: 200px; border-radius: 15px" alt="">
                            <img src="/images/stores_2.jpg" style="height: 150px;width: 200px; border-radius: 15px" alt="">
                        </div>
                        {{--Options Currently Available--}}
                        <br>
                        <div>
                            <ul>
                                <li><strong>Options Currently Available</strong></li>
                                <br>
                                <ul>
                                    <li>Products</li>
                                    <li>Costumers</li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
