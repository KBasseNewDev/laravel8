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
@endsection