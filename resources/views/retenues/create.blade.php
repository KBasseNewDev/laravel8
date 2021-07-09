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



	<div class="container d-flex align-items-center justify-content-center">
                  <div class="row">
                         @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif
                        <div class="col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1">
                              <h2 style="text-align: center !important;">Ajouter Nouvelle Retenue</h2>
                              <form action="{{route('retenues.store') }}" method="POST" validate>
                                    {{ csrf_field() }}
                                    <div class="form-group {{ $errors->has('nomRetenue') ? 'has-error' : '' }}">
                                          <label for="nomRetenue" class="control-label">Nom Retenue</label>
                                          <input type="text" name="nomRetenue" value="{{old('nomRetenue')}}" id="nomRetenue" class="form-control" required="required">
                                          {!! $errors->first('nomRetenue', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                          <label for="montantRetenue" class="control-label">Montant De La Retenue</label>
                                          <input type="text" name="montantRetenue" value="{{old('montantRetenue')}}" id="montantRetenue" class="form-control" required="required">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                          <button class="btn btn-dark btn-block">Enregistrer &raquo;</button>
                                    </div>
                              </form>
                  </div>
            </div>
      </div>
@stop