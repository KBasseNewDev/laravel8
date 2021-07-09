@extends('layouts.app')
@section('css')
      <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html, body{
            height: 100%;
            background: linear-gradient(to top right, #80cbc4, #e1bee7, #80ddea, #d1c4e9);
        }
        nav{
            position: absolute;
            top: auto;
            bottom: auto;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            height: 100%;
            background-color: #5cb85c;
            box-shadow: 5px 7px 10px rgba(0, 0, 0, 0.5);
        }
        nav ul{
            position: relative;
            list-style-type: none;
        }
        nav ul li a{
            display: flex;
            align-items: center;
            font-family: arial;
            font-size: 1.15em;
            text-decoration: none;
            text-transform: capitalize;
            color: #000;
            padding: 10px 30px;
            height: 50px;
            transition: .5s ease;
            border-radius: 0 30px;
        }
        nav ul li a:hover{
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
        }
        nav ul ul{
            position: absolute;
            left: 220px;
            width:200px;
            top:0;
            display: none;
            background: rgba(155, 39, 176, .4);
            border-radius: 5px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, .1);
        }
        nav ul span{
            position: absolute;
            right: 20px;
            font-size: 1.5em; 

        }
        nav ul .dropdown{
            position: relative;
        }
        nav ul .dropdown:hover > ul{
            display:initial;
        }
        nav ul .dropdown_two ul{
            position: absolute;
            left: 200px;
            top: 0;
        }
        nav ul .dropdown_two:hover ul{
            display:initial;  
        }
    </style>
@stop
@section('content')
	<nav>
        <div><h2>Espace Employe</h2></div>
        <ul>

            <li><a href="#">Bulletin</a></li>
            <li><a href="{{ route('requetes.create')}}">Requete</a></li>
        </ul>
    </nav>


    <div class="container d-flex align-items-center justify-content-center">
    	<div class="row">
    		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
    			<p class="text-muted text-center"> If you have in trouble this service, please <a href="mailto:marcofome123@gmail.com"> ask for help</a>.</p>

    			<form action="{{ route('requetes.store')}}" method="POST">
    				{{ csrf_field() }}
    				<div class="form-group">
    					<label for="nomEmploye" class="control-label">Nom</label>
    					<input type="text" name="nomEmploye" id="nomEmploye" class="form-control" required="required">
    					{!! $errors->first('nomEmploye', '<span class="help-block">:message</span>') !!}
    				</div>

    				<div class="form-group">
    					<label for="emailEmploye" class="control-label">Email</label>
    					<input type="email" name="emailEmploye" id="emailEmploye" class="form-control" required="required">
    					{!! $errors->first('emailEmploye', '<span class="help-block">:message</span>') !!}
    				</div>

    				<div class="form-group">
    					<label for="message" class="control-label sr-only">Message</label>
    					<textarea class="form-control" rows="10" cols="10" required="required" name="message" id="message"></textarea>
    					{!! $errors->first('message', '<span class="help-block">:message</span>') !!}
    				</div>

    				<div class="form-group">
    					<button class="btn btn-dark btn-block">Submite Enquery &raquo;</button>
    				</div>
    			</form>
    		</div>
    	</div>
    </div>
@stop
