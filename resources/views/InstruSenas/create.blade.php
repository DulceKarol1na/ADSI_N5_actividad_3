@extends('layouts.template')
@section('content')

<!DOCTYPE html>
<html>
<head>
<title>Registro Instructor</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>

<div class= "container">
    <div class= "row">
    <div class= "col-md-9 offset-md-3">
        <form action  ="{{route('InstruSenas.store')}}" method = "POST"> 
        @csrf 
        <table   class="table table-success table-striped">
        <tr>
            <th class="text-center" colspan="4" >Registro Instructor</th>
        </tr>
                <tr>
                <th scope="col"># Identificacion</th>
                <td> <input type ="text" class ="from-control" name ="identificationnumber" value = ""> </td>
                <th scope="col">Ficha</th>
                <td> 
                    <select name="courses_id" id="courses_id">
                            @foreach ($Courses as $Course)
                            <option value ="{{$Course ['id']}}">{{$Course['id']}}</option>
                            @endforeach
                    </select> 
                </td> 
                </tr>
                <tr>
                <th scope="col">Nombre </th>
                <td> <input type ="text" class ="from-control" name ="name" value = ""></td>
                <th scope="col">Apellido</th>
                <td> <input type ="text" class ="from-control" name ="lastaname" value = ""></td>
                </tr>
                <tr>
                <th  colspan="2"scope="col">Email</th>
                <td  colspan="2"> <input type ="text" class ="from-control" name ="email" value = ""> </td>
                </tr>
                <tr>
                <th colspan="2" scope="col">Programa</th>
                <td colspan="2"> 
                <select name="program_id" id="program_id">
                        @foreach ($Programs as $Program)
                        <option value ="{{$Program ['id']}}"> {{$Program['name']}}</option>
                        @endforeach
                    </select> 
                </td>   
                </tr>
                <tr>
                <th colspan="2" scope="col">Jornada</th>
                <td colspan="2"> 
                    <select name="workingday_id" id="workingday_id">
                        @foreach ($Workingdays as $workingday)
                        <option value ="{{$workingday ['id']}}"> {{$workingday['name']}}</option>
                        @endforeach
                    </select> 
                </td>
                </tr>
            </table>
           <button type ="submit" class="btn btn-outline-secondary">Crear Registro</button>                
           <a href="{{route('InstruSenas.index')}}" class="btn btn-outline-success">Regresar</a>
        
            </form>
        </div>
    </div>
</div>

</body>

</html>








@endsection 