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
                              <h2 style="text-align: center !important;">Modifier Employe</h2>
                              <form action="{{route('employes.update', ['employe'=>$employe->idEmploye]) }}" method="POST" validate>
                                    {{ csrf_field() }}

                                    {{ method_field('PUT')}}


                                    <div class="form-group {{ $errors->has('nomEmploye') ? 'has-error' : '' }}">
                                          <label for="nomEmploye" class="control-label">Nom De L'Employé</label>
                                          <input type="text" name="nomEmploye" value="{{$employe->nomEmploye??old('nomEmploye')}}" id="name" class="form-control" required="required">
                                          {!! $errors->first('nomEmploye', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                          <label for="prenomEmploye" class="control-label">Prenom De L'Employé</label>
                                          <input type="text" name="prenomEmploye" value="{{$employe->prenomEmploye??old('prenomEmploye')}}" id="othername" class="form-control" required="required">
                                    </div>
                                    <div class="form-group">
                                          <label for="dateNaissance" class="control-label">Date de Naissance</label>
                                          <input type="date" name="dateNaissance" value="{{$employe->dateNaissance??old('dateNaissance')}}" id="date" class="form-control" required="required">
                                          {!! $errors->first('dateNaissance', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                          <label for="telephoneEmploye" class="control-label">Numero Téléphone</label>
                                          <input type="tel" name="telephoneEmploye" value="{{$employe->telephoneEmploye??old('telephoneEmploye')}}" id="tel" class="form-control" required="required">
                                          {!! $errors->first('telephoneEmploye', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                          <label for="matriculeEmploye" class="control-label">Matricule</label>
                                          <input type="text" name="matriculeEmploye" value="{{$employe->matriculeEmploye??old('matriculeEmploye')}}" id="matricule" class="form-control" required="required">
                                          {!! $errors->first('matriculeEmploye', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                          <label for="professionEmploye" class="control-label">Profession</label>
                                          <input type="text" name="professionEmploye" value="{{$employe->professionEmploye??old('professionEmploye')}}" id="profession" class="form-control" required="required">
                                          {!! $errors->first('professionEmploye', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                          <label for="villeEmploye" class="control-label">Ville / Rue</label>
                                          <input type="text" name="villeEmploye" value="{{$employe->villeEmploye??old('villeEmploye')}}" id="ville" class="form-control" required="required">
                                          {!! $errors->first('villeEmploye', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                          <label for="dateEmbauche" class="control-label">Date D'Embauche</label>
                                          <input type="date" name="dateEmbauche" value="{{$employe->dateEmbauche??old('dateEmbauche')}}" id="dateEmbauche" class="form-control" required="required">
                                          {!! $errors->first('dateEmbauche', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                          <label for="situationMatrimonialeEmploye" class="control-label">Situation Matrimoniale</label>
                                          <input type="text" name="situationMatrimonialeEmploye" value="{{$employe->situationMatrimonialeEmploye??old('situationMatrimonialeEmploye')}}" id="situ" class="form-control" required="required">
                                          {!! $errors->first('situationMatrimonialeEmploye', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                          <label for="emailEmploye" class="control-label">Email</label>
                                          <input type="email" name="emailEmploye" value="{{$employe->emailEmploye??old('emailEmploye')}}" id="email" class="form-control" required="required">
                                          {!! $errors->first('emailEmploye', '<span class="help-block">:message</span>') !!}
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