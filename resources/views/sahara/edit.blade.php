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

        <div class="alert alert-success" role="alert" style="margin: 1%; width:100%">

            {{Session::get('success')}}

        </div>

    @endif
    @if($errors->any())
        <div class="alert alert-danger" role="alert" style="margin: 1%; width:100%">
          @foreach ($errors->all() as $error)
              - {{$error}} <br>
          @endforeach
        </div>
      @endif
    <section class="contact-form-section pb-5">
	    <div class="container pb-5">
		       <div class="form-wrapper shadow-lg single-col-max-width mx-auto p-5">
                    <form role="form" action="{{ url('/sahara/'.$discour->id_discours) }}" method="post">
                        @csrf
                        @method('PUT')
				        <h3 class="text-center mb-4">Modifier Discours</h3>
                        <div class="row">                                                           
			                <div class="form-group col-md-6">
			                    <label class="" for="Occasion">Titre</label>
			                    <input type="text" class="form-control" id="Occasion" name="Occasion" value="{{$discour->Occasion}}" minlength="2" required="" aria-required="true">
			                    <input type="hidden" id="id_discours " value="{{$discour->id_discours}}">
			                </div>                    
			                <div class="form-group col-md-6">
			                    <label class="" for="type_d">Type</label>
                                <select class="form-control" name="type_d">
                                    <option value="D" @if($discour->type_d == 'D') selected @endif>Discours</option>
                                    <option value="A" @if($discour->type_d == 'A') selected @endif>Allocution</option>
                                  </select>
			                </div>
                            <div class="form-group col-12">
			                    <label class="" for="Date">Date de publication</label>
			                    <input type="date" class="form-control" value="{{$discour->Date}}" id="Date" name="Date" required="" aria-required="true">
			                </div>
			                <div class="form-group col-12">
			                    <label class="" for="Extrait_en_fran_ais">Extrait en Français</label>
			                    <textarea class="form-control" id="Extrait_en_fran_ais" name="Extrait_en_fran_ais" rows="10" required="" aria-required="true">{{$discour->Extrait_en_fran_ais}}</textarea>
			                </div>
			                <div class="form-group col-12">
			                    <label class="" for="Extrait_en_anglais">Extrait en Anglais</label>
			                    <textarea class="form-control" id="Extrait_en_anglais" name="Extrait_en_anglais" rows="10" required="" aria-required="true">{{$discour->Extrait_en_anglais}}</textarea>
			                </div>
                            <div class="form-group col-12">
			                    <label class="" for="Extrait_ar">Extrait en Arabe</label>
			                    <textarea class="form-control" id="Extrait_ar" name="Extrait_ar" rows="10" required="" aria-required="true" style=" text-align: right; ">{{$discour->Extrait_ar}}</textarea>
			                </div>
                            <div class="form-group col-md-6">
			                    <label class="" for="URL_FR">Nom Ficher Fr</label>
			                    <input type="text" class="form-control" id="URL_FR" value="{{$discour->URL_FR}}" placeholder="Nom Ficher Fr" name="URL_FR" required="" aria-required="true">
			                </div>                    
			                <div class="form-group col-md-6">
			                    <label class="" for="URL_Ar">Nom Ficher Ar</label>
			                    <input type="text" class="form-control" id="URL_Ar" value="{{$discour->URL_Ar}}" placeholder="Nom Ficher Ar" name="URL_Ar" required="" aria-required="true">
			                </div>                 
			                <div class="form-group col-md-6">
			                    <label class="" for="URL_Eng">Nom Ficher Eng</label>
			                    <input type="text" class="form-control" id="URL_Eng" value="{{$discour->URL_Eng}}" placeholder="Nom Ficher Eng" name="URL_Eng" required="" aria-required="true">
			                </div>
                            <div class="form-group col-12 text-center">
			                    <button type="submit" class="btn btn-block btn-success py-2">Modifier</button>
                                <a href="{{route('discour.index')}}" class="btn btn-block btn-warning py-2">Annuler</a>
			                </div>                    
			            </div><!--//form-row-->
			        </form>
		       </div>
	    </div><!--//container-->
    </section>
</div>
@endsection