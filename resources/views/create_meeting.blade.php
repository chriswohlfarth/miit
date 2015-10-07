@extends('layouts/master')

@section('content')

<div id="content" class="container">
<form action="" method="post" id="Meetingform" >

<h2 id="newmeeting">New meeting</h2>

  <div class="form-group">
    <label for="name">Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Name">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Email">
  </div>

  <div class="form-group">
  <label for="description">Description</label>
  <textarea class="form-control" rows="5" id="description" placeholder="Description"></textarea>
</div>

  <div class="form-group" id="timeinput">
  <label for="exampleInputEmail1">Add dates</label>
	<input id="datetimepicker" type="text" class="form-control" placeholder="Add dates">
	</div>

	<a id="btn2" href="#">Add</a>

	 <div class="form-group">
    <label for="email/invite">Email/Invite</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Email/Invite">
  </div>
 
  <button type="submit" class="btn btn-success">New meeting</button>

  <fieldset>
        <legend>Inputs</legend>
            <div id="extender"></div>
            <p><a href="#" id="add">Add</a></p>
    </fieldset>

</form>
</div>

@endsection