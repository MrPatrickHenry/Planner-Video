@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
<form method="POST" action="/vlog/entry">
            <div class="form-group">

<fieldset>
    <legend>Enter Vlog entry</legend>
               <input name="title" placeholder="title" type="text"></input>
<textarea name="desc" placeholder="desc"></textarea>
               <input name="preperation" placeholder="preperation" type="text"></input>
               <input name="materials" placeholder="materials" type="text"></input>
               <input name="intro" placeholder="intro" type="text"></input>
                              <input name="main" placeholder="main" type="text"></input>

               <input name="outro" placeholder="outro" type="text"></input>
               <input name="titles" placeholder="titles" type="text"></input>
               <input name="credits" placeholder="credits" type="text"></input>
               <label>filmed</label>
               <input name="filmed" placeholder="filmed" type="date"></input>
               <label>uploaded</label>

               <input name="uploaded" placeholder="uploaded" type="date"></input>
               <label>scheduled</label>

               <input name="scheduled" placeholder="scheduled" type="date"></input>
               <input name="tags" placeholder="tags" type="text"></input>
               <input name="links" placeholder="links" type="text"></input>
               <input name="sites" placeholder="sites" type="text"></input>
               <input name="social" placeholder="socials medias sites" type="text"></input>
               <input name="series" placeholder="series" type="text"></input>
                              <input name="no" placeholder="series" type="text"></input>

            <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>

        </form>                </div>
            </div>
        </div>
    </div>
</div>
@endsection
