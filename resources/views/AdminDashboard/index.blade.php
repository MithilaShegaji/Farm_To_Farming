<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        .add-button {
            float: right;
            margin-bottom: 10px;
            text-decoration: none;
            background-color: #008CBA;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Contacts</h1>
    <a href="{{route('addedit')}}" class="add-button">+</a>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>State</th>
            <th>Pincode</th>
            <th>Action</th>
        </tr>
        @php $i=1;@endphp
                @foreach($userdata as $formdata)
        <tr>
            <td>{{$i}}</td>
            <td>{{$formdata->name}}</td>
            <td>{{$formdata->adress}}</td>
            <td>{{$formdata->phone}}</td>
            <td>{{$formdata->state}}</td>
            <td>{{$formdata->pincode}}</td>
            <td>
                <a href="{{route('form.edit',['id'=>$formdata->id])}}">
                edit
                </a>
                <a href="{{route('form.delete',['id'=>$formdata->id])}}">
                delete
                </a>
            </td>
        </tr>
        @php $i++ @endphp
                @endforeach
        
    </table>
</body>
</html>
