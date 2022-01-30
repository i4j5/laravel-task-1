
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                     <div class="mb-3">
                        <label for="link" class="col-form-label text-md-end">Link</label>
                        <input placeholder="http://example.com" id="link" type="text" class="form-control " name="link">
                    </div>
                    <div class="mb-3">
                        <button id="btn" class="btn btn-primary">Get a short link</button>
                    </div>
                    <div id="error"></div>
                    <div id="short-link"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var link = document.getElementById('link');
    var btn = document.getElementById('btn');
    var error = document.getElementById('error');
    var shortLink = document.getElementById('short-link');

    btn.addEventListener( 'click' , function() {
        shortLink.innerHTML = '';
        error.innerHTML = '';

        window.axios.post('/api/add-link', {
            link: link.value
        })
        .then(function (response) {
            if (response.data) {
                shortLink.innerHTML = response.data;
            } else {
                error.innerHTML = 'Error: invalid link';
            }
        });
    });
</script>
@endsection


