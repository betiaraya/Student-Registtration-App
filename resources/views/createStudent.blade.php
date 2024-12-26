@extends('mainTemplate')
@section('otherContent')

<form action="{{ route('create_post') }}" method="POST">

@csrf
<center>
        <h1 >Join Us</h1>

        <div class="studentname boxes">
            <label> Name:</label><br>
        </div>
        <div class="stuname">
            <input type="text" name="stuName" placeholder="first name"><br>
        </div>
        <div class="surname boxes">
           <label for="">Last name:</label>
        </div>
        <div class="stusurname">
            <input type="text" name="stuSurname" class="form-control" placeholder="last name"><br>
        </div>
        <div class="studentdepartment boxes">
            <label> Department:</label><br>
        </div>
        <div class="studepartement">
            <input type="text" name="stuDepartment" placeholder="department"><br>
        </div>
        <div class="button-container boxes">
            <button type="submit" name="send" value="Create">Create</button>
        </div>


</center>

</form>

@endsection

