@extends('layouts.app')

@section('css')
<style>
    .card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    font-size: 32px;
  }

  .card-counter .count-name{
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.8;
    font-size: 18px;
  }
  .col-md-4{
      cursor: pointer;
  }
  a {
        text-decoration: none;
    }
</style>
    
@endsection

@section('content')
<div class="mt-5 row">
<div class="col-md-4">
    <a href="{{route('discour.index')}}">
        <div class="card-counter primary">
        <i class="fas fa-archway"></i>
        <span class="count-numbers">12</span>
        <span class="count-name">Discours</span>
        </div>
    </a>
  </div>

  <div class="col-md-4">
    <a href="#"></a>
        <div class="card-counter danger">
        <i class="fas fa-link"></i>
        <span class="count-numbers">599</span>
        <span class="count-name">Discours URL</span>
        </div>
    </a>
  </div>

  <div class="col-md-4">
      <a href="#">
        <div class="card-counter success">
        <i class="fa fa-database"></i>
        <span class="count-numbers">6875</span>
        <span class="count-name">Discours Sahara</span>
        </div>
      </a>
  </div>
</div>
@endsection