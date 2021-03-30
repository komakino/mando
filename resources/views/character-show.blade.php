<h1>{{$character->name}} {{$character->gender == 'male' ? '♂' : '♀'}}</h1>

<img src="{{$character->image}}" />

<dl>
    <dt>Aliases</dt>
    <dd>{{implode(', ',$character->aliases)}}</dd>

    <dt>Species</dt>
    <dd>{{$character->species}}</dd>
</dl>