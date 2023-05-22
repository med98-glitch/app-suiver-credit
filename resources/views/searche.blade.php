@extends('layouts.master')
@section('content')
<div class="container ftr">
   
    <form class="addcredit" action="{{url('/findfolder')}}"  method="GET">
      @csrf
        <p class="h4 mb-5">Trouver dossier</p>
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <!-- Text input -->
        <div class="mb-4">
          <select class="form-control" id="type" name="prenom">
            <option value="" selected disabled hidden>Selectioner prenom</option>
            @foreach ($all_credits_prenom as $row)
            <option>{{$row->prenom}}</option>
            @endforeach
          </select>
          <label class="form-label" for="Type">Prenom</label>
          </div>
          <div class=" mb-4">
            <select class="form-control" id="type" name="nom">
                <option value="" selected disabled hidden>Selectioner nom</option>
                @foreach ($all_credits as $row)
                <option>{{$row->nom}}</option>
                @endforeach
            </select>
            <label class="form-label" for="Type">Nom</label>
            </div>
            <div class=" mb-4">
                <select class="form-control" id="type" name="type">
                    <option value="" selected disabled hidden>Selectioner type de dossier</option>
                    @foreach ($all_credits_typrcredits as $row)
                    <option>{{$row->typecredits}}</option>
                    @endforeach
                </select>
                <label class="form-label" for="Type">Type de doosier</label>
                </div>
    <!-- Submit button -->
        <button type="submit" class="btn btn-info buttonadd">Rechercher</button>
      </form>
</div>

@endsection