<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $character->character_name }} Sheet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>


<body>
    
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                {{ $character->character_name }}
            </h1>
        </div>
    </div>

    <div class="py-10 text-centar">
        <div class="m-auto">
            <!--<span class="uppercase text-blue-500 font-bold text-xs italic">
                Class: {{ $character->class_name }}
            </span>-->
        
            <span class="uppercase text-blue-500 font-bold text-xs italic">
                Spellcasting Ability Modifier: {{ $character->SAM }}
            </span>
        </div>

        <ul>
            <p class="text-lg text-gray-700 py-3">
                Spells:
            </p>

            <p>Cantrip:</p>
            @forelse ($character->spells as $spell)
                @if (($spell->level) == "cantrip")
                    <li class="inline italic text-gray-600 px-1 py-6">
                        
                        <a href = "{{ route('spells.showSpell',$spell->id) }}" target="_blank">{{$spell->spell_name}}</a>
                        
                    </li>
                @endif
            @empty
                <p>No spells found.</p>
            @endforelse

            <br>

            <p>1st level:</p>
            @forelse ($character->spells as $spell)
                @if (($spell->level) == "1")
                    <li class="inline italic text-gray-600 px-1 py-6">
                        <input type="checkbox" value="1">
                        <a href = "{{ route('spells.showSpell',$spell->id) }}" target="_blank">{{$spell->spell_name}}</a> 
                    </li>
                @endif
            @empty
                <p>No spells found.</p>
            @endforelse

            <br>

            <p>2nd level:</p>
            @forelse ($character->spells as $spell)
                @if (($spell->level) == "2")
                    <li class="inline italic text-gray-600 px-1 py-6">
                        <input type="checkbox" value="1">
                        <a href = "{{ route('spells.showSpell',$spell->id) }}" target="_blank">{{$spell->spell_name}}</a>
                    </li>
                @endif
            @empty
                <p>No spells found.</p>
            @endforelse

            <br>

            <p>3rd level:</p>
            @forelse ($character->spells as $spell)
                @if (($spell->level) == "3")
                    <li class="inline italic text-gray-600 px-1 py-6">
                        <input type="checkbox" value="1">
                        <a href = "{{ route('spells.showSpell',$spell->id) }}" target="_blank">{{$spell->spell_name}}</a>
                    </li>
                @endif
            @empty
                <p>No spells found.</p>
            @endforelse

            <br>

            <p>4th level:</p>
            @forelse ($character->spells as $spell)
                @if (($spell->level) == "4")
                    <li class="inline italic text-gray-600 px-1 py-6">
                        <input type="checkbox" value="1">
                        <a href = "{{ route('spells.showSpell',$spell->id) }}" target="_blank">{{$spell->spell_name}}</a>
                    </li>
                @endif
            @empty
                <p>No spells found.</p>
            @endforelse

            <br>

            <p>5th level:</p>
            @forelse ($character->spells as $spell)
                @if (($spell->level) == "5")
                    <li class="inline italic text-gray-600 px-1 py-6">
                        <input type="checkbox" value="1">
                        <a href = "{{ route('spells.showSpell',$spell->id) }}" target="_blank">{{$spell->spell_name}}</a>
                    </li>
                @endif
            @empty
                <p>No spells found.</p>
            @endforelse

            <br>

            <p>6th level:</p>
            @forelse ($character->spells as $spell)
                @if (($spell->level) == "6")
                    <li class="inline italic text-gray-600 px-1 py-6">
                        <input type="checkbox" value="1">
                        <a href = "{{ route('spells.showSpell',$spell->id) }}" target="_blank">{{$spell->spell_name}}</a>
                    </li>
                @endif
            @empty
                <p>No spells found.</p>
            @endforelse

            <br>

            <p>7th level:</p>
            @forelse ($character->spells as $spell)
                @if (($spell->level) == "7")
                    <li class="inline italic text-gray-600 px-1 py-6">
                        <input type="checkbox" value="1">
                        <a href = "{{ route('spells.showSpell',$spell->id) }}" target="_blank">{{$spell->spell_name}}</a>
                    </li>
                @endif
            @empty
                <p>No spells found.</p>
            @endforelse

            <br>

            <p>8th level:</p>
            @forelse ($character->spells as $spell)
                @if (($spell->level) == "8")
                    <li class="inline italic text-gray-600 px-1 py-6">
                        <input type="checkbox" value="1">
                        <a href = "{{ route('spells.showSpell',$spell->id) }}" target="_blank">{{$spell->spell_name}}</a>
                    </li>
                @endif
            @empty
                <p>No spells found.</p>
            @endforelse

            <br>

            <p>9th level:</p>
            @forelse ($character->spells as $spell)
                @if (($spell->level) == "9")
                    <li class="inline italic text-gray-600 px-1 py-6">
                        <input type="checkbox" value="1">
                        <a href = "{{ route('spells.showSpell',$spell->id) }}" target="_blank">{{$spell->spell_name}}</a>
                    </li>
                @endif
            @empty
                <p>No spells found.</p>
            @endforelse
        </ul>

        <hr class="mt-4 mb-8">
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>