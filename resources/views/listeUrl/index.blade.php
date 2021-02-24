@extends('layouts.app')

@section('content')
<div class="cal-md-12 p-3" style="text-align: end;">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Accueil</a></li>
          <li class="breadcrumb-item active" aria-current="page">Discours URL</li>
        </ol>
      </nav>
      <div class="row">
        <div class="col-md-4 col-sm-6 col-12 info-box">
          <span class="info-box-icon text-light bg-danger"><i class="fas fa-link"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">URLs</span>
            <span class="info-box-number">{{ count($urls) }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <div class="col-md-4 col-sm-6 col-12">
        </div>
        <div class="col-md-4 col-sm-6 col-12 text-right">
            <a class="btn btn-primary f-right" href="{{route('listeUrl.create')}}"><i class="fas fa-plus"></i> Ajouter</a>
        </div>
    </div>
</div>
@if(Session::has('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">

            {{Session::get('success')}}
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"></span>
              </button>
        </div>

    @endif
<div class="cal-md-12 mt-4" style=" border: 1px solid #f2dbdf; padding: 1%; border-radius: 6px; ">
    <table id="example" class="table table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>Année</th>
                <th>Résolution</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($urls as $url)
                <tr>
                    <td>{{$url->id}} </td>
                    <td>{{$url->Ann_e}}</td>
                    <td>{{$url->R_solution}}</td>
                    <td>
                        <form role="form" action="{{ url("/listeUrl/$url->id") }}" method="post" id="form{{$url->id}}">
                            @csrf
                            @method("DELETE")
                            <a class="btn btn-danger btn-sm text-light" onclick="deleteConfirmation({{ $url->id }})"><i class="fas fa-trash-alt"></i> Supprimer</a>
                            <a class ="btn btn-info btn-sm text-light" href="{{route('listeUrl.edit',$url->id)}}"><i class="fas fa-edit"></i> Modifier</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>id</th>
                <th>Année</th>
                <th>Résolution</th>
                <th>Action</th>
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
    $("#URL").addClass("active");
});
</script>
@endsection