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

	


    





	<h1 style="text-align: center;">Bulletin De</h1>

    



    <form method="{{route('salaires.store') }}" action="POST">
        {{ csrf_field() }}


        <table style="align-self: center; float: right;  width:80%; text-align: left;" class="">
            <tr>
                <td> <p style="">Nom et Prénom:  {{$employe->nomEmploye}} {{$employe->prenomEmploye}}</p></td><td> <p style="">Situation Matrimoniale: {{$employe->situationMatrimonialeEmploye}}</p></td>
            </tr>
            <tr>
                <td><p style="">Date D'Embauche: {{$employe->dateEmbauche}}</p></td>
                <td><p style="">Profession: {{$employe->professionEmploye}}</p></td> 
            </tr>   
                
            <tr>
                <td><p style="">Période Du:  <input type="text" name="periodeSalaire"></p></td>
                <td><p style="">Service:  <input type="text" name="text"></p> </td>   
                
            </tr>   
        </table>

        <table style="align-self: center; float: right; border-collapse: collapse; border:medium solid #000000; width:80%; text-align: left;" class="table table-bordered">
            <div class="form-group row">
                <tr style="border:thin solid #6495ed; width: 25%; font-family: sans-serif; border:thin solid #6495ed; padding: 5px; text-align: center;">
                    <th>Rubrique De Paie</th> <th>Base</th> <th>Taux</th> <th>Gains</th> <th>Retenue</th>
                </tr>
            </div>

            
            <div class="form-group row">
                <tr style="border:thin solid #6495ed; width: 25%; font-family: sans-serif; border:thin solid #6495ed; padding: 5px; text-align: center;">
                    <td>Salaire mensuel</td>
                    <td><input class="form-control" type="number" name="baseSalaire"> </td>
                    <td><input class="form-control" type="number" name="tauxSalaire"></td>
                    <td></td>
                    <td></td>
                    
                   
                </tr>
            </div>

            <div class="form-group row">
                <tr style="border:thin solid #6495ed; width: 25%; font-family: sans-serif; border:thin solid #6495ed; padding: 5px; text-align: center;">
                    <td>Indemnité de logement</td>
                    <td> </td>
                    <td></td>
                    <td><input class="form-control" type="number" name="gainSalaire"></td>
                    <td></td>
                    
                   
                </tr>
            </div>

            <div class="form-group row">
                <tr style="border:thin solid #6495ed; width: 25%; font-family: sans-serif; border:thin solid #6495ed; padding: 5px; text-align: center;">
                    <td>Indemnité de transport</td>
                    <td> </td>
                    <td></td>
                    <td><input class="form-control" type="number" name="gainSalaire"></td>
                    <td></td>
                    
                   
                </tr>
            </div>

            
            <div class="form-group row">
                <tr style="border:thin solid #6495ed; width: 25%; font-family: sans-serif; border:thin solid #6495ed; padding: 5px; text-align: center;">
                    <td>Prime de technicité</td>
                    <td> </td>
                    <td></td>
                    <td><input class="form-control" type="number" name="gainSalaire"></td>
                    <td></td>
                    
                    
                </tr>
            </div>

            <div class="form-group row">
                <tr style="border:thin solid #6495ed; width: 25%; font-family: sans-serif; border:thin solid #6495ed; padding: 5px; text-align: center;">
                    <td>Prime d'ancienneté</td>
                    <td> </td>
                    <td></td>
                    <td><input class="form-control" type="number" name="gainSalaire"></td>
                    <td></td>   
                </tr>
            </div>

            <div class="form-group row">
                <tr style="border:thin solid #6495ed; width: 25%; font-family: sans-serif; border:thin solid #6495ed; padding: 5px; text-align: center;">
                    <th>Total</th>
                    <td> </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </div>

            <div class="form-group row">
                <tr style="border:thin solid #6495ed; width: 25%; font-family: sans-serif; border:thin solid #6495ed; padding: 5px; text-align: center;">
                    <td>Fiscale</td>
                    <td> </td>
                    <td></td>
                    <td></td>
                    <td><input class="form-control" type="number" name="retenueSalaire"></td>   
                </tr>
            </div>

            <div class="form-group row">
                <tr style="border:thin solid #6495ed; width: 25%; font-family: sans-serif; border:thin solid #6495ed; padding: 5px; text-align: center;">
                    <td>IRPP</td>
                    <td> </td>
                    <td></td>
                    <td></td>
                    <td><input class="form-control" type="number" name="retenueSalaire"></td>    
                </tr>
            </div>

            <div class="form-group row">
                <tr style="border:thin solid #6495ed; width: 25%; font-family: sans-serif; border:thin solid #6495ed; padding: 5px; text-align: center;">
                    <td>CAC/IRPP</td>
                    <td> </td>
                    <td></td>
                    <td></td>
                    <td><input class="form-control" type="number" name="retenueSalairee"></td>  
                </tr>
            </div>

            <div class="form-group row">
                <tr style="border:thin solid #6495ed; width: 25%; font-family: sans-serif; border:thin solid #6495ed; padding: 5px; text-align: center;">
                    <td>Cotisations</td>
                    <td> </td>
                    <td></td>
                    <td></td>
                    <td><input class="form-control" type="number" name="retenueSalaire"></td>    
                </tr>
            </div>

            <div class="form-group row">
                <tr style="border:thin solid #6495ed; width: 25%; font-family: sans-serif; border:thin solid #6495ed; padding: 5px; text-align: center;">
                    <td>RAV</td>
                    <td> </td>
                    <td></td>
                    <td></td>
                    <td><input class="form-control" type="number" name="retenueSalaire"></td>  
                </tr>
            </div>

            <div class="form-group row">
                <tr style="border:thin solid #6495ed; width: 25%; font-family: sans-serif; border:thin solid #6495ed; padding: 5px; text-align: center;">
                    <td>Crédit foncier salarial</td>
                    <td> </td>
                    <td></td>
                    <td></td>
                    <td><input class="form-control" type="number" name="retenueSalaire"></td> 
                </tr>
            </div>
        </table>
        

        <table style="align-self: center; float: right; border-collapse: collapse; border:medium solid #000000; width:80%; text-align: left;" class="table table-bordered">
            <div class="form-group row">
                <tr style="border:thin solid #6495ed; width: 25%; font-family: sans-serif; border:thin solid #6495ed; padding: 5px; text-align: center;">
                    <th>Cumuls</th> <th>Salaire brute</th> <th>Net imposable</th> <th>Charges salaires</th> <th>Heures sup</th> <th>Avantages natures</th> <th>Net à payer</th>
                </tr>
            </div>

        
            <div class="form-group row">
                <tr style="border:thin solid #6495ed; width: 25%; font-family: sans-serif; border:thin solid #6495ed; padding: 5px; text-align: center;">
                    <th>Période</th>
                    <td> </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><input class="form-control" type="text" name="avantageNature"></td>
                    <td></td>  
                </tr>
            </div>    
        </table>

        <div class="form-group">
            <button class="btn btn-primary btn-block">Go &raquo;</button>
        </div>
    </form>
	
@endsection