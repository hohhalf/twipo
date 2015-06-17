<div class="form-group">
    {!! Form::label('title', 'Заголовок:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_by', 'Имя:') !!}
    {!! Form::text('published_by', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('twip', 'Твип:') !!}
    {!! Form::textarea('twip', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_button, ['class' => 'btn btn-primary form-control']) !!}
</div>