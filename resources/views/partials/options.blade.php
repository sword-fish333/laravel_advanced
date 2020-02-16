<select name="{{$field ?? 'test'}}" id="{{$field ?? 'test'}}">
@foreach($channels as $channel)
    <option value="{{$channel->id}}">{{$channel->name}}</option>
@endforeach
</select>