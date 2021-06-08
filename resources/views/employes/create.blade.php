@extends('layouts.app')
@section('content')
	<div class="sidebar-nav sidebar-expand-md sidebar-light bg-white shadow-sm" style="width: 300px; position: absolute; top: 58px; bottom: -300px; border-radius: 10px; box-shadow: 5px 7px 10px;">
		<h2>Gestion Employe</h2>

		<!-- Left Side Of Navbar -->
        <ul class="sidebar-nav mr-auto" style="position: relative; list-style: none;">
        	<li class="">
        		<a class="" href="{{ route('employes.create')}}" style="display: flex; text-decoration: none; font-family: arial; font-size: 1.15em; align-items: left; color: #000; padding: 10px 10px; border-radius: 0 30px;">Ajouter Nouvel Employe</a>
        	</li>
            <li class="dropdown">
            	<a class="" href="#" style="display: flex; text-decoration: none; font-family: arial; font-size: 1.15em; align-items: left; color: #000; padding: 10px 10px; border-radius: 0 30px;">Listing
            		<span>&rsaquo;</span></a>
            	<ul class="" style="position: relative; list-style: none;">
            		<li class="">
            			<a class="" href="#" style="display: flex; text-decoration: none; font-family: arial; font-size: 1.15em; align-items: left; color: #000; padding: 10px 10px; border-radius: 0 30px;">Services</a>
            		</li>
                    <li class="">
                    	<a class="" href="#" style="display: flex; text-decoration: none; font-family: arial; font-size: 1.15em; align-items: left; color: #000; padding: 10px 10px; border-radius: 0 30px;">Groupes</a>
                    </li>
            		<li class="">
            			<a class="" href="{{ route('employes.index')}}" style="display: flex; text-decoration: none; font-family: arial; font-size: 1.15em; align-items: left; color: #000; padding: 10px 10px; border-radius: 0 30px;">Employes</a>
            		</li>
            		<li class="dropdown_tow">
            			<a class="" href="#" style="display: flex; text-decoration: none; font-family: arial; font-size: 1.15em; align-items: left; color: #000; padding: 10px 10px; border-radius: 0 30px;">Etats Salaire
            				<span>&rsaquo;</span>
            			</a>
            				<ul class="" style="position: relative; list-style: none;">
				            	<li class="">
				            		<a class="" href="#" style="display: flex; text-decoration: none; font-family: arial; font-size: 1.15em; align-items: left; color: #000; padding: 10px 10px; border-radius: 0 30px;">Avancement Salaire</a>
				            	</li>
				            	<li class="">
				            		<a class="" href="#" style="display: flex; text-decoration: none; font-family: arial; font-size: 1.15em; align-items: left; color: #000; padding: 10px 10px; border-radius: 0 30px;">Salaire Impaye</a>
				            	</li>
				            	<li class="">
				            		<a class="" href="#" style="display: flex; text-decoration: none; font-family: arial; font-size: 1.15em; align-items: left; color: #000; padding: 10px 10px; border-radius: 0 30px;">Salaire Paye</a>
				            	</li>
            				</ul>
            		</li>
                    <li class="">
                    	<a class="" href="#" style="display: flex; text-decoration: none; font-family: arial; font-size: 1.15em; align-items: left; color: #000; padding: 10px 10px; border-radius: 0 30px;">Employes Par Groupes</a>
                    </li>
            		<li class="">
            			<a class="" href="#" style="display: flex; text-decoration: none; font-family: arial; font-size: 1.15em; align-items: left; color: #000; padding: 10px 10px; border-radius: 0 30px;">Employe Par Service</a>
            		</li>
            	</ul>
            </li>
            <li class="">
            	<a class="" href="#" style="display: flex; text-decoration: none; font-family: arial; font-size: 1.15em; align-items: left; color: #000; padding: 10px 10px; border-radius: 0 30px;">Saisir Salaire</a>
            </li>
            <li class="dropdown">
            	<a class="" style="display: flex; text-decoration: none; font-family: arial; font-size: 1.15em; align-items: left; color: #000; padding: 10px 10px; border-radius: 0 30px;">Ajouter Accessoire
            		<span>&rsaquo;</span>
            	</a>
            		<ul class="" style="position: relative; list-style: none;">
				       	<li class="">
				       		<a class="" href="#" style="display: flex; text-decoration: none; font-family: arial; font-size: 1.15em; align-items: left; color: #000; padding: 10px 10px; border-radius: 0 30px;">Prime</a>
				       	</li>
				       	<li class="">
				       		<a class="" href="#" style="display: flex; text-decoration: none; font-family: arial; font-size: 1.15em; align-items: left; color: #000; padding: 10px 10px; border-radius: 0 30px;">Retenue</a>
				       	</li>
            		</ul>
           	</li>          
        </ul>
	</div>







	<div class="container d-flex align-items-center justify-content-center">
                  <div class="row">
                        <div class="col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1">
                              <h2 style="text-align: center !important;">Ajouter Nouvel Employe</h2>
                              <form action="{{route('employes.store') }}" method="POST" validate>
                                    {{ csrf_field() }}
                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                          <label for="name" class="control-label">Nom De L'Employé</label>
                                          <input type="text" name="name" id="name" class="form-control" required="required">
                                          {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                          <label for="othername" class="control-label">Prenom De L'Employé</label>
                                          <input type="text" name="othername" id="othername" class="form-control" required="required">
                                    </div>
                                    <div class="form-group">
                                          <label for="date" class="control-label">Date de Naissance</label>
                                          <input type="date" name="date" id="date" class="form-control" required="required">
                                          {!! $errors->first('date', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                          <label for="tel" class="control-label">Numero Téléphone</label>
                                          <input type="tel" name="tel" id="tel" class="form-control" required="required">
                                          {!! $errors->first('tel', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                          <label for="matricule" class="control-label">Matricule</label>
                                          <input type="text" name="matricule" id="matricule" class="form-control" required="required">
                                          {!! $errors->first('matricule', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                          <label for="profession" class="control-label">Profession</label>
                                          <input type="text" name="profession" id="profession" class="form-control" required="required">
                                          {!! $errors->first('matricule', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                          <label for="ville" class="control-label">Ville / Rue</label>
                                          <input type="text" name="ville" id="ville" class="form-control" required="required">
                                          {!! $errors->first('ville', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                          <label for="cnps" class="control-label">Numero De La CNPS</label>
                                          <input type="text" name="cnps" id="cnps" class="form-control" required="required">
                                          {!! $errors->first('cnps', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                          <label for="situation" class="control-label">Situation Matrimoniale</label>
                                          <input type="text" name="situation" id="situ" class="form-control" required="required">
                                          {!! $errors->first('situation', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                          <label for="email" class="control-label">Email</label>
                                          <input type="email" name="email" id="email" class="form-control" required="required">
                                          {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
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