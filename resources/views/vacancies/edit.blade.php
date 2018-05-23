<div class="col-sm-8 blog-main">
    {!! Form::model($vacancy, ['route' => ['vacancies.update', $vacancy->id], 'method' => 'put']) !!}


    <h1>Edit a vacancy</h1>


    {{ csrf_field() }}

    <div class="form-group">
        <label for="title">Title</label>
        <input type="Title" class="form-control" id="title" value="{{ $vacancy->title }}" name="title" required>
    </div>
    <div class="form-group">
        <label for="body">body</label>
        <textarea id="body" name="body"  class="form-control" required>{{ $vacancy->body }}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile">
        <p class="help-block">Example block-level help text here.</p>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox"> Check me out
        </label>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">publish</button>
    </div>
    {!! Form::close() !!}

</div>