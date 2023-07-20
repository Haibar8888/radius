@extends('admin.layouts.base')

@section('title','Group')

@section('content')
{{-- tambah data --}}
<div class="row">   
    <div class="col-md-12">
        {{-- Table --}}
        <div class="card" id="my-card">
        <div class="card-header">
            <h3 class="card-title">Edit Data</h3>
            <div class="card-tools">
            <!-- Collapse Button -->
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            {{-- form tambah movie --}}
        <form action="{{route("group.update",[$group->id])}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf   
            <div class="card-body">
            <div class="form-group">
                <label for="groupname">Groupname</label>
                <input type="text" class="form-control" id="groupname" name="groupname" placeholder="Groupname" value="{{ old('groupname', isset($group->groupname) ? $group->groupname : '') }}">
                @if($errors->has('groupname'))
                    <p style="font-style: bold; color: red;">{{ $errors->first('groupname') }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="attribute">Attribute</label>
                <input type="text" class="form-control" id="attribute" name="attribute" placeholder="attribute" value="{{ old('attribute', isset($group->attribute) ? $group->attribute : '') }}">
            </div>

            <div class="form-group">
                <label for="op">Op</label>
                <input type="text" class="form-control" id="op" name="op" placeholder=":=" value="{{ old('op', isset($group->op) ? $group->op : '') }}">
            </div>

            <div class="form-group">
                <label for="download">Download</label>
                <input type="text" class="form-control" id="download" name="download" placeholder="Download" value="{{old('download', isset($down) ? $down : '') }}" >
            </div>

            <div class="form-group">
                <label for="upload">Upload</label>
                <input type="text" class="form-control" id="upload" name="upload" placeholder="Upload" value="{{ old('upload', isset($up) ? $up : '') }}">
            </div>
            {{-- <div class="form-group">
                <label>Featured</label>
                <select class="custom-select" name="featured">
                <option value="0">No</option>
                <option value="1">Yes</option>
                </select>
            </div> --}}
            </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-dark">Submit</button>
        </div>
      </form>
        </div>
    </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        $('#my-card').CardWidget() 
   </script> 
   <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    //   "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    });

  });
</script>
@endsection

   
