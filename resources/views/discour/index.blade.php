@extends('layouts.app')

@section('content')
<div class="cal-md-12 p-3" style="text-align: end;">
    <a class="btn btn-primary f-right" href="#"><i class="fas fa-plus"></i> Ajouter</a>
</div>
<div class="cal-md-12 mt-4">
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
                    <td>{{$discour->Id_Discours}} </td>
                    <td>{{$discour->Type}}</td>
                    <td>{{substr($discour->Occasion, 0, 50)}}...</td>
                    <td>{{$discour->Date_disc}}</td>
                    <td>
                        <a class ="btn btn-danger btn-sm" href="#">Supprimer</a>
                        <a class ="btn btn-info btn-sm" href="#">Modifier</a>
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