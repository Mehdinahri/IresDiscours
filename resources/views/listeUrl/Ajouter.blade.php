@extends('layouts.app')

@section('css')
<style>
    .form-group{
        margin-bottom: 3%;
    }
    .form-control{
        margin-top: 10px;
    }
</style>
    
@endsection

@section('content')
<div class="cal-md-12 mt-4">
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('success')}}
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
    </div>

    @endif
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            @foreach ($errors->all() as $error)
                - {{$error}} <br>
            @endforeach
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
    <section class="contact-form-section pb-5">
	    <div class="container pb-5">
		       <div class="form-wrapper shadow-lg single-col-max-width mx-auto p-5">
                    <form role="form" action="{{route('listeUrl.store')}}" method="post">
                        @csrf
				        <h3 class="text-center mb-4">Ajouter URL</h3>
				        <div class="row">                                                           
			                <div class="form-group col-md-6">
			                    <label class="" for="R_solution">Résolution</label>
			                    <input type="text" class="form-control" id="R_solution" name="R_solution" placeholder="Résolution" minlength="2" required="" aria-required="true">
			                </div>                    
			                <div class="form-group col-md-6">
			                    <label class="" for="Ann_e">Année</label>
                                <input type="text" class="form-control" id="Ann_e" name="Ann_e" placeholder="Année" minlength="4" required="" aria-required="true">
			                </div>
                            <div class="form-group col-md-6">
			                    <label class="" for="URL_Anglais">URL Anglais</label>
                                <input type="text" class="form-control" id="URL_Anglais" name="URL_Anglais" placeholder="URL Anglais" minlength="1" required="" aria-required="true">
			                </div>
                            <div class="form-group col-md-6">
			                    <label class="" for="URL_Fran_ais">URL Français</label>
                                <input type="text" class="form-control" id="URL_Fran_ais" name="URL_Fran_ais" placeholder="URL Français" minlength="1" required="" aria-required="true">
			                </div>
                            <div class="form-group col-md-6">
			                    <label class="" for="URL_Arabe">URL Arabe</label>
                                <input type="text" class="form-control" id="URL_Arabe" name="URL_Arabe" placeholder="URL Arabe" minlength="1" required="" aria-required="true">
			                </div>
                            <div class="form-group col-12 text-center">
			                    <button type="submit" class="btn btn-block btn-success py-2">Ajouter</button>
                                <a href="{{route('listeUrl.index')}}" class="btn btn-block btn-warning py-2">Annuler</a>
			                </div>
			            </div><!--//form-row-->
			        </form>
		       </div>
	    </div><!--//container-->
    </section>
</div>
@endsection