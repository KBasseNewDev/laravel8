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
                    <li><a href="{{ route('primes.create')}}">Prime</a></li>
                    <li><a href="{{ route('retenues.create')}}">Rtetenue</a></li>
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
                    
                    <li><a href="{{ route('services.index')}}">Service</a></li>
                    <li><a href="{{ route('groupes.index')}}">Groupe</a></li>
                    <li><a href="{{ route('grades.index')}}">Grade</a></li>
                    <li><a href="{{ route('employes.index')}}">Employe</a></li>
                    <li><a href="{{ route('primes.index')}}">Prime</a></li>
                    <li><a href="{{ route('retenues.index')}}">Retenue</a></li>
                    <li><a href="">Employes Par Groupes</a></li>
                    <li><a href="">Employe Par Service</a></li>
                    
                </ul>
            </li>
        </ul>
    </nav>



	<div class="container d-flex align-items-center justify-content-center">
                  <div class="row">
                         @if (session('succes'))
                        <div class="alert alert-success" role="alert">
                            {{ session('succes') }}
                        </div>
                        @endif
                        <div class="col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1">
                              <h2 style="text-align: center !important;">Modifier Grade</h2>
                              <form action="{{route('grades.update', ['grade'=>$grade->idGrade]) }}" method="POST" validate>
                                    {{ csrf_field() }}

                                    {{ method_field('PUT')}}


                                    <div class="form-group {{ $errors->has('nomGrade') ? 'has-error' : '' }}">
                                          <label for="nomGrade" class="control-label">Nom Du Grade</label>
                                          <input type="text" name="nomGrade" value="{{$grade->nomGrade??old('nomGrade')}}" id="Grade" class="form-control" required="required">
                                          {!! $errors->first('nomGrade', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                          <label for="codeGrade" class="control-label">Code Du Grade</label>
                                          <input type="text" name="codeGrade" value="{{$grade->codeGrade??old('codeGrade')}}" id="othername" class="form-control" required="required">
                                    </div>
                                    <div class="form-group">
                                          <label for="salaireBaseGrade" class="control-label">Salairre Base du Grade</label>
                                          <input type="salaireBaseGrade" name="salaireBaseGrade" value="{{$grade->salaireBaseGrade??old('salaireBaseGrade')}}" id="date" class="form-control" required="required">
                                          {!! $errors->first('salaireBaseGrade', '<span class="help-block">:message</span>') !!}
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