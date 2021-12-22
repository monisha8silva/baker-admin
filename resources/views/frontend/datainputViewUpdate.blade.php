<div class="html">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="row">
    <div class="col-6"><div class="jumbotron">
<div class="contaner"> 
  


    
<form action="/update/{{ $food[0]->FoodId }}" method="post"   enctype="multipart/form-data">
{{ csrf_field() }}
  <table width="48%" >
    <tr>
      <td width="38%"><label for="Name">Name</label>&nbsp;</td>

      <td width="62%">
        <div class="form-group">
            <input class="form-control" type="text" name="Name" id="Name" value="{{ $food[0]->Name }}"/>&nbsp;
        <div>
      </td>
    </tr>
    <tr>
      <td><label for="FoodTypeId">WebCategoryId</label>&nbsp;</td>
      <td> <input class="form-control" type="text" name="FoodTypeId" id="FoodTypeId" value="{{ $food[0]->WebCategoryId }}"/>&nbsp;</td>
    </tr>
    <tr>
      <td><label for="Price">Price</label>&nbsp;</td>
      <td>  <input class="form-control" type="text" name="Price" id="Price" value="{{ $food[0]->Price }}"/>&nbsp;</td>
    </tr>
    <tr>
      <td><label for="Image">Image</label>&nbsp;</td>
      <td> <input class="form-control" type="file" name="Image" id="Image" value=""/>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input class="form-control" type="submit" name="update" id="update" value="Submit" /></td>
    </tr>
  </table>

</form>
</div>
    <div class="col-6">

    </div>
  </div>

</div>    

</div>


</div>