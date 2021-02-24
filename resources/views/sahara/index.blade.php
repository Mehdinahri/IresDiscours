@extends('layouts.app')

@section('content')
<div class="cal-md-12 p-3" style="text-align: end;">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Accueil</a></li>
          <li class="breadcrumb-item active" aria-current="page">Discours Sahara</li>
        </ol>
      </nav>
    <div class="row">
        <div class="col-md-4 col-sm-6 col-12 info-box">
          <span class="info-box-icon text-light bg-success"><i class="fas fa-hourglass-start"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Discours Sahara</span>
            <span class="info-box-number">{{ count($discours) }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <div class="col-md-4 col-sm-6 col-12">
        </div>
        <div class="col-md-4 col-sm-6 col-12 text-right">
            <a class="btn btn-primary f-right" href="{{route('sahara.create')}}"><i class="fas fa-plus"></i> Ajouter</a>
        </div>
    </div>
</div>
@if(Session::has('success'))

<div class="alert alert-success" role="alert" style="margin: 1%; width:100%">

    {{Session::get('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
</div>

@endif
<div class="cal-md-12 mt-4" style=" border: 1px solid #f2dbdf; padding: 1%; border-radius: 6px; ">
    <table id="example" class="table table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>Type</th>
                <th>Titre</th>
                <th>Date de publication</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($discours as $discour)
                <tr>
                    <td>{{$discour->id_discours }} </td>
                    <td>{{$discour->type_d}}</td>
                    <td>{{substr($discour->Occasion, 0, 50)}}...</td>
                    <td>{{$discour->Date}}</td>
                    <td>
                        <form role="form" action="{{ url("/sahara/$discour->id_discours") }}" method="post" id='form{{$discour->id_discours}}'>
                            @csrf
                            @method("DELETE")
                            <a class="btn btn-danger btn-sm text-light" onclick="deleteConfirmation({{ $discour->id_discours }})"><i class="fas fa-trash-alt"></i> Supprimer</a>
                            <a class ="btn btn-info btn-sm text-light" href="{{ url("/sahara/$discour->id_discours/edit") }}"><i class="fas fa-edit"></i> Modifier</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>id</th>
                <th>Type</th>
                <th>Titre</th>
                <th>Date de publication</th>
            </tr>
        </tfoot>
    </table>
</div>
@endsection
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

<script type="text/javascript">

    function deleteConfirmation(pack) {
        swal({
            title: "Suppression?",
            text: "Veuillez vous assurer et ensuite confirmer!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Oui, Supprimez-le!",
            cancelButtonText: "Non, Annuler!",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {
                $('#form'+pack).submit();
            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
</script>
<script>
    $(document).ready(function(){
    $(".nav-link").removeClass("active");
    $("#Sahara").addClass("active");
});
</script>
@endsection