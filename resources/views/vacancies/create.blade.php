<div class="col-sm-8 blog-main">

        <h1>Create a vacancy</h1>

        <hr>

        <form method="POST" action="{{ url('vacancies/store')}}">

            {{csrf_field()}}

            <div class="form-group" method="POST" action="/vacancies/store">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body" class="form-control"></textarea>
            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-primary">Create</button>

            </div>

        </form>
</div>

