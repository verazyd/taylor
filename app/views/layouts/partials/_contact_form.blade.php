<h5>How Can We Help?</h5>
<form role="form">
    <!--Name Form Input -->
    <div class="form-group">
        {{ Form::label('name', 'Name*:') }}
        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) }}
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Email*:') }}
        {{ Form::email('name', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('phone', 'Phone*:') }}
        {{ Form::email('phone', null, ['class' => 'form-control']) }}
    </div>
    <!--Description Form Input -->
    <div class="form-group">
        {{ Form::label('description', 'Description*:') }}
        {{ Form::textarea('description', null, ['class' => 'form-control']) }}
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>