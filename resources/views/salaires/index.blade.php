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
        <div><h2>Salaire</h2></div>
        <ul>

            <li><a href="{{ route('employes.index')}}">Saisir Salaire</a></li>
            <li><a href="#">Email</a></li>
            <li><a href="#">Imprimer Bulletin</a></li>
            <li><a href="#">Reglement Salaire</a></li>
            <li class="dropdown"><a href="#">Listing<span>&rsaquo;</span></a>
                <ul>
                    <li class="dropdown_two"><a href="">Etats Salaire<span>&rsaquo;</span></a>
                        <ul>
                            <li><a href="#">Avancement Salaire</a></li>
                            <li><a href="#">salaire Implaye</a></li>
                            <li><a href="#">Salaire Paye</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </li>
        </ul>
    </nav>







	

	
@endsection