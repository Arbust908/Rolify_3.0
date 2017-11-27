@extends('layouts.app')

@section('content')
  <section class="row">
    <article class="col-xs-12 bg-info">
      <div class="col-xs-12 text-warning">
        <h2>{{$monsterSingle->name}}</h2>
      </div>
      <div class="col-xs-12">
        <h5>{{$monsterSingle->size}} {{$monsterSingle->race}} || {{$monsterSingle->aligment}}</h5>
      </div>
      <hr>
      <div class="col-xs-4">
        <strong>AC:</strong> {{$monsterSingle->armorClass}} |
      </div>
      <div class="col-xs-4">
        <strong>HP:</strong> {{$monsterSingle->hitPoints}} |
      </div>
      <div class="col-xs-4">
        <strong>Speed:</strong> {{$monsterSingle->speed}}
      </div>
      <div class="col-xs-6 col-sm-2">
        <em><abbr title="Strength">STR</abbr></em> {{$monsterSingle->str}} <strong>({{$monsterSingle->calcMOD($monsterSingle->str)}})</strong> |
      </div>
      <div class="col-xs-6 col-sm-2">
        <em><abbr title="Dexterity">DEX</abbr></em> {{$monsterSingle->dex}} <strong>({{$monsterSingle->calcMOD($monsterSingle->dex)}})</strong> |
      </div>
      <div class="col-xs-6 col-sm-2">
        <em><abbr title="Constitution">CON</abbr></em> {{$monsterSingle->con}} <strong>({{$monsterSingle->calcMOD($monsterSingle->con)}})</strong> |
      </div>
      <div class="col-xs-6 col-sm-2">
        <em><abbr title="Inteligence">INT</abbr></em> {{$monsterSingle->int}} <strong>({{$monsterSingle->calcMOD($monsterSingle->int)}})</strong> |
      </div>
      <div class="col-xs-6 col-sm-2">
        <em><abbr title="Wisdom">WIS</abbr></em> {{$monsterSingle->wis}} <strong>({{$monsterSingle->calcMOD($monsterSingle->wis)}})</strong> |
      </div>
      <div class="col-xs-6 col-sm-2">
        <em><abbr title="Charisma">CHA</abbr></em> {{$monsterSingle->cha}} <strong>({{$monsterSingle->calcMOD($monsterSingle->cha)}})</strong>
      </div>
      <ul>
        <li><strong>Saveing Throw:</strong>{{$monsterSingle->saveingThrow}}</li>
        <li><strong>Skills:</strong>{{$monsterSingle->skills}}</li>
        <li><strong>Immunities:</strong>{{$monsterSingle->damageImmunities}}</li>
        <li><strong>Languages:</strong>{{$monsterSingle->languages}}</li>
        <li><strong>Senses:</strong>{{$monsterSingle->senses}}</li>
        <li><strong>CR:</strong>{{$monsterSingle->challengeRating}}</li>
        <li><strong>Traits:</strong>{{$monsterSingle->traits}}</li>
        <li><strong>Actions:</strong>{{$monsterSingle->actions}}</li>
        <li><strong>Legendary Actions:</strong>{{$monsterSingle->legendaryActions}}</li>
        <li><strong>Rarity:</strong>{{$monsterSingle->rarity}}</li>
      </ul>
    </article>

    <hr>
    <code>
      <br>
      {{$monsterSingle->id}} || Created:_ {{$monsterSingle->created_at}} || Updated:_ {{$monsterSingle->updated_at}}
      <br>
    </code>
    <hr>
  </section>
  <section class="row">
    <article class="col-xs-12">
      <a href="{{url('/monster')}}" class="btn btn-danger">Volver a Monstros</a>
    </article>
  </section>
@endsection
