@extends('layout')

@section('page-content')
<form action={{ route('student.create') }} method="post">
    @csrf
    <div class="form-group"></div>
    <label>CNE</label>
    <input name="cne" type="text" class="form-control" placeholder="enter cne">
    </div>

    <div class="form-group"></div>
    <label>First Name</label>
    <input name="firstname" type="text" class="form-control" placeholder="enter First Name">
    </div>

    <div class="form-group"></div>
    <label>Second Name</label>
    <input name="lastname" type="text" class="form-control" placeholder="enter Second Name">
    </div>

    <div class="form-group"></div>
    <label>age</label>
    <input name="age" type="text" class="form-control" placeholder="enter age">
    </div>

    <div class="form-group"></div>
    <label>Speciality</label>
    <input name="Speciality" type="text" class="form-control" placeholder="enter Speciality">
    </div>
    <input type="submit" class="btn.btn-info" value="save">
    <input type="reset" class="btn.btn-warning" value="reset">
</form>

@endsection
