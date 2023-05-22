@extends('layouts.master')
@section('content')
<div class="container">
   
    <form class="addcredit" action="{{url('/addcredits')}}" method="POST">
      @csrf
        <p class="h4">A jouter noveaux credits</p>
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div class="">
              <input type="text" id="Prenom" class="form-control" name="prenom"/>
              <span style="color: red;">@error('prenom'){{$message}} @enderror</span> <br>
              <label class="form-label" for="Prenom" >Prenom</label>
            </div>  
          </div>
          <div class="col">
            <div class="">
              <input type="text" id="Nom" class="form-control" name="nom "/>
              <span style="color: red;">@error('nom'){{$message}} @enderror</span> <br>
              <label class="form-label" for="Nom" >Nom</label>
            </div>
          </div>
        </div>
      
        <!-- Text input -->
        <div class=" mb-4">
          <select class="form-control" id="type" name="Type">
            <option>Auto</option>
            <option>Medical</option>
            <option>Immobilier</option>
          </select>
          <span style="color: red;">@error('type'){{$message}} @enderror</span> <br>
          <label class="form-label" for="Type">Type de credit</label>
          </div>
        
        <div class=" mb-4">
          <input type="text" id="Montant" class="form-control" name="montant"/>
          <span style="color: red;">@error('montant'){{$message}} @enderror</span> <br>
          <label class="form-label" for="Montant" >Montant</label>
        </div>
      
        <!-- Text input -->
        <div class=" mb-4">
          <input type="text" id="Périod" class="form-control" name="Period" />
          <span style="color: red;">@error('period'){{$message}} @enderror</span> <br>
          <label class="form-label" for="Périod">Périod</label>
        </div>
      
        <!-- Email input -->
        <div class="mb-4">
          <input type="number" id="Telephone" class="form-control" name="Telephone" />
          <span style="color: red;">@error('telephone'){{$message}} @enderror</span> <br>
          <label class="form-label" for="Telephone">Telephone</label>
        </div>
      
        <!-- Number input -->
        <div class="mb-4">
          <input type="email" id="email" class="form-control" name="email" />
          <span style="color: red;">@error('email'){{$message}} @enderror</span> <br>
          <label class="form-label" for="email">Email</label>
        </div>
      
        <!-- Message input -->
        <div class="mb-4">
          <textarea class="form-control" id="Informations" rows="4" name="information" ></textarea>
          <span style="color: red;">@error('information'){{$message}} @enderror</span> <br>
          <label class="form-label" for="Informations">Informations Complémentaires</label>
        </div>
        
      
    <!-- Submit button -->
        <button type="submit" class="btn btn-info buttonadd">Ajouter credit</button>
      </form>
</div>
@if(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>
@endif
@endsection