@extends('layouts.app')

@section('content')

<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

<div class="card-header">Dashboard</div>
<body class="card-container">
                    <div class='center'>
                    	<ul class='shortcuts'>
                        	<li><a href="{{ route('outlet_map.index') }}" class='map'><span>Outlet Map</span></a></li>
                            <li><a href="{{ route('outlets.create') }}" class='new'><span>Add Outlet</span></a></li>
                            <li><a href="{{ route('outlets.index') }}" class='list'><span>Outlet List</span></a></li>
                            <li><a href="{{ route('logout') }}" 
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" 
                            class='logout'><span>Logout</span></a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                        </ul>
                    </div>
</div>
@endsection
