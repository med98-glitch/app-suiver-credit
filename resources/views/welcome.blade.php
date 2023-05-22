@extends('layouts.master')
@section('content')
<div class="container table-principal">
  <a href="{{url('/rechercher')}}" class="text-white"><button type="button" class="btn btn-outline-info mb-3">Chercher un dossier</button></a>
<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Nom</th>
      <th>Catégorie</th>
      <th>Montant octroyé</th>
      <th>Durée </th>
      <th>Statut</th>
      <th>Observation</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($all_credits as $row)
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="../assets/images/ico.png"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">{{$row['nom'].$row['prenom']}}</p>
            <p class="text-muted mb-0">{{$row['email']}}</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">{{$row['typecredits']}}</p>	
        <p class="text-muted mb-0"></p>
      </td>
      <td> {{$row['montant']}}</td>
      <td>{{$row['period']}} mois</td>
      <?php
      if(function_exists('statuweclcomepage')=== false)
      {
      function statuweclcomepage($credit){
          if($credit == 'en attente'){
          ?>
           <span class="badge badge-warning rounded-pill d-inline">En attente</span>
          <?php
          }elseif ($credit == 'validé') {
              ?>
              
              <span class="badge badge-success rounded-pill d-inline">Validé</span>
          </div>
          <?php
          } else {
              ?>
             <span class="badge badge-danger rounded-pill d-inline">No validé</span>
          </div>
          <?php
          }
          }
        }
          ?>
      <td>
        @php
                statuweclcomepage($row->statu)
        @endphp
      </td>
      </td>
      <td>{!!$row->observation!!}</td>
      <td>
  
        <form action="{{url('/details')}}"  method="GET">
          @csrf
        <input type="hidden" name="Z3pzdHJ2I" value="{{$row['id']}}">
        <input type="hidden" name="datea" value="{{$row['created_at']}}">
        <input type="hidden" name="nom" value="{{$row['nom']}}">
        <input type="hidden" name="prenom" value="{{$row['prenom']}}">
       <button type="submit" class="btn btn-outline-info mb-3"> Consulter le dossier </button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="pagination">
  {{$all_credits->links()}}

</div>


</div>


@endsection