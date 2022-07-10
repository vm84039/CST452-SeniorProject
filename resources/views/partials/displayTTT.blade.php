@for($i=0; $i < count($squares); $i++)
    @if ($squares[$i] == 0)
        <button class="butt box" style="color: white"type="button" value="$i">&nbsp</button>
    @elseif($squares[$i] == 1)
        <button class="butt box disabled" type="button">X</button>
    @else
        <button class="butt box disabled" type="button" >O</button>
    @endif
@endfor
