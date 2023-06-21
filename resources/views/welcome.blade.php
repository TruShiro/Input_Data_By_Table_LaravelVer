<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table test</title>
</head>
<body> 
    
<form action="{{route('exchange')}}" method="POST" enctype="multipart/form-data">

            <button type="submit" class="btn btn-primary"> {{ csrf_field() }}Submit</button>
        </form>
<br><br>

<form action="{{route('adding')}}" method="POST" enctype="multipart/form-data">
<div class="form-group">
<label for="ScanCode">Scan your Item</label>
<input class="form-control" type="text" id="ScanCode" name="ScanCode" required>
</div>

<button type="submit" class="btn btn-primary">{{ csrf_field() }}Add More(input)</button>
        </form>

<table class="table table-bordered">
            <thead>
                <tr>
                <td>Name</td>
                <td>Item_Name</td>
                <td>Item_Code</td>
                </tr>
            </thead>
            <tbody>
                @if(!empty($inputdatas))
                @foreach($inputdatas as $inputdata)
                <tr>
                <td>{{$inputdata->name}}</td>
                <td>{{$inputdata->itemname}}</td>
                <td>{{$inputdata->itemcode}}</td>        
                </tr>
                @endforeach
                @endif
</tbody>
</table>    
</body>
</html>