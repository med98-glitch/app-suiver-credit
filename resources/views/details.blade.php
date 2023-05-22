@extends('layouts.master')
@section('content')

<div
  class="bg-image"
  style="
    background-image: url('assets/images/login.jpeg');
        height: 600px;
  "
></div>

<div class="container">
  @foreach ($details as $row)
    <div class="row">
      <div class="col-sm">
        <form action="/sendemil" method="GET">
          @csrf
        <div class="card cardtop">
          <?php $url =url()->full(); 
          ?>
          <input type="hidden" name="url" value="<?php echo $url;?>">
          <input type="hidden" name="id" value="{{$row->id}}">
            <div class="card-text">
              <h5 class="card-title">{{$row->nom }} {{ $row->prenom }}<br> </h5>
               <hr class="line">
              <p>Tel: {{$row->telephone}} <br> Email: {{$row->email}} </p>  
              <p class="card-text textbol">Suite à votre demande du crédit auto, nous vous transmettons le message suivant de la part de notre service client, y compris votre situation actuelle.</p>
              <div class="card-text">Cordialement, <br>De CC coteaux.</div>
            </div>
          </div>
         <br>
          @if(Session::get('success'))
          <div class="alert alert-success">
            {{Session::get('success')}}
          </div>
          @endif
          @if(Session::get('fail'))
          <div class="alert alert-danger">
            {{Session::get('fail')}}
          </div>
          @endif
          <div class="card second-card ">
            <div class="card-text">
              <h5 class="card-title">observation</h5>
              <hr class="line">
              <p>{!!$row->observation!!}</p>
             <!--- <ol class="list-group list-group-light list-group-numbered">
                <li class="list-group-item"></li>
              </ol>-->
            </div>
          </div>
          <button type="submit" class="btn  btn-rounded" style="background-color:#000090;color:white;padding-left:40px;padding-right:40px;"> Envoyer un e-mail</button>
        </form>
        <br>
      
      </div>
      <div class="col-sm">
        <div class="card second-card">
          <div class="card-text">
            <h5 class="card-title">Votre demande</h5>
             <hr class="line">
            <div class="row">
              <div class="col-sm" >
               <p> Catégorie</p>
               <p> Montant octroyé</p>
               <p> Durée</p>
               <p> Statut</p>
              </div>
              <div class="col-sm textbol" style="text-align:right">
             <p>{{$row->typecredits }}</p>
             <p>{{$row->montant }}</p>
             <p>{{$row->period }}</p>
             <p>{{$row->statu }}</p>
              </div>
            </div>
          </div>
          
        </div>
        <div class="card cardbuttom">
          <div class="card-text">
            <h5 class="card-title">Coordonnées</h5>
             <hr class="line">
            <p>Rue des coteaux,<br> 
              239 à 1030 Schaerbeek.</p>  
            <p class="card-text ">Ouvert du lundi au vendredi <br>de 9H00 à 12H00<br>  
              et de 13H00 à 17H30
              </p>
            <div class="card-text textbol">
              +32 2 209 12 00 <br>info@cc-coteaux.be</div>
          </div>
        </div>
      </div>
  
    </div>
    @endforeach
  </div>    
<!-- Background image -->
@endsection
