@extends('layouts.app')

@section('content')
  <section>
    <article class="row">
      <table class="col-xs-12">
        <tr>
          <th>Name</th>
          <th>Rarity</th>
          <th>AC</th>
          <th>Hp</th>
          <th>CR</th>
          <th></th>
        </tr>
        @forelse ($monsters as $key => $monster)
          <tr>
            <td>{{$monster->name}}</td>
            <td>
              <img src="/img/rarity/{{$monster->rarity}}.svg" width="40px" alt="This monster is {{$monster->rarity}}">
            </td>
            <td>{{$monster->armorClass}}</td>
            <td>{{$monster->hitPoints}}</td>
            <td>{{$monster->challengeRating}}</td>
            <td>
              <a href="{{url('/monster')}}/{{$monster->id}}">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>Ver Más
              </a>
            </td>
          </tr>
        @empty
          <span>There are no <strong>Monsters</strong> Here. You are safe, <em>for now</em></span>
        @endforelse
      </table>
    </article>
  </section>
@endsection
