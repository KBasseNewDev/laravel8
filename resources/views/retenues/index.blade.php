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
        <div><h2>Gestion Employe</h2></div>
        <ul>

            <li class="dropdown"><a href="#">Ajouter<span>&rsaquo;</span></a>
                <ul>
                    <li><a href="{{ route('employes.create')}}">Employe</a></li>
                    <li><a href="{{ route('groupes.create')}}">Groupe</a></li>
                    <li><a href="{{ route('services.create')}}">Service</a></li>
                    <li><a href="{{ route('grades.create')}}">Grade</a></li>
                    <li><a href="{{ route('primes.create')}}">Primes</a></li>
                    <li><a href="{{ route('retenues.create')}}">Retenues</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#">Ajouter Accessoire<span>&rsaquo;</span></a>
                <ul>
                    <li><a href="#">Prime</a></li>
                    <li><a href="#">Retenue</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#">Listing<span>&rsaquo;</span></a>
                <ul>
                    <li><a href="{{ route('services.index')}}">Services</a></li>
                    <li><a href="{{ route('groupes.index')}}">Groupes</a></li>
                    <li><a href="{{ route('employes.index')}}">Employes</a></li>
                    <li><a href="{{ route('grades.index')}}">Grades</a></li>
                    <li><a href="{{ route('primes.index')}}">Primes</a></li>
                    <li><a href="{{ route('retenues.index')}}">Retenues</a></li>
                    <li><a href="">Employes Par Groupes</a></li>
                    <li><a href="">Employe Par Service</a></li>
                    
                </ul>
            </li>
        </ul>
    </nav>








	<h1 style="text-align: center;">Liste des Retenues</h1>
	<table style="align-self: center; float: right; border-collapse: collapse; border:medium solid #000000; width:50%; text-align: left;" class="table table-bordered">
		<tr style="border:thin solid #6495ed; width: 25%; font-family: sans-serif; border:thin solid #6495ed; padding: 5px; text-align: center;">
			<td>id</td> <td>Nom</td><td>Montant</td><td>Action</td>
		</tr>

	
	
		
		@foreach($retenues as $retenue)
		<tr style="border:thin solid #6495ed; width: 25%; font-family: sans-serif; border:thin solid #6495ed; padding: 5px; text-align: center;">
			<td>{{$retenue->idRetenue}}</td>
			<td>{{$retenue->nomRetenue}}</td>
			<td>{{$retenue->montantRetenue}}</td>
			
			
			<td>
				<a href="{{route('retenues.edit',$retenue->idRetenue)}}">Editer </a>
				<a href="{{route('retenues.destroy',$retenue->idRetenue)}}">supprimer </a>
			</td>
		</tr>
		@endforeach
	</table>

	
@endsection