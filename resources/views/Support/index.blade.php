

@if ($errors->has('support_name'))
    <strong>"{{ $errors->first('support_name') }}"</strong>
@endif

 @foreach ($supports as $support)
    <p> {{ $support->support_id . '.' . $support->support_name }} 
    <form action='{{ url("support/$support->support_id") }}' method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <input type="submit" value="Delete">
    </form>
    </p>
@endforeach 


<form action="{{ url('support') }}" method="POST">
    {{csrf_field()}}
    <input type="text" placeholder="name" name="support_name">
    <input type="text" placeholder="mail" name="support_mail">
    <input type="text" placeholder="questions" name="support_questions">
    <input type='submit'>
</form>

<form action='{{ url("support/$support->support_id") }}' method="POST">
    {{csrf_field()}}
    {{ method_field('DELETE') }}
    <input type="text" placeholder="ID" name="support_id">
    <input type='submit' value="刪除">
</form>