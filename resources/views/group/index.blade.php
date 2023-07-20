@extends('admin.layouts.base')

@section('title','Group')

@section('content')
{{-- tambah data --}}
<div class="row">   
    <div class="col-md-12">
        {{-- Tabel Movie --}}
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Group Tabel</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Groupname</th>
                    <th>Attribute</th>
                    <th>OP</th>
                    <th>Value</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($datas as $data) 
                        <tr>
                            <td>{{$data->groupname}}</td>
                            <td>{{$data->attribute}}</td>
                            <td>{{$data->op}}</td>
                            <td>{{$data->value}}</td>   
                            <td>
                                <div class="btn-group">
                                        <button type="button" class="btn btn-default">Action</button>
                                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                        <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" href="{{ route('group.edit', $data->id) }}">Edit</a>
                                            <form action="{{ route('group.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Are you sure want to delete this data ?');">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="dropdown-item" value="Delete">
                                            </form>   
                                        </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Groupname</th>
                    <th>Attribute</th>
                    <th>OP</th>
                    <th>Value</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

        {{-- Table --}}
        <div class="card" id="my-card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data</h3>
            <div class="card-tools">
            <!-- Collapse Button -->
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            {{-- form tambah movie --}}
        <form action="{{route("group.store")}}" method="POST" enctype="multipart/form-data">
            @csrf   
            <div class="card-body">
            <div class="form-group">
                <label for="groupname">Groupname</label>
                <input type="text" class="form-control" id="groupname" name="groupname" placeholder="Groupname">
            </div>

            <div class="form-group">
                <label for="attribute">Attribute</label>
                <input type="text" class="form-control" id="attribute" name="attribute" placeholder="attribute" value="Mikrotik-Rate-Limit">
            </div>

            <div class="form-group">
                <label for="op">Op</label>
                <input type="text" class="form-control" id="op" name="op" placeholder=":=">
            </div>

            <div class="form-group">
                <label for="download">Download</label>
                <input type="text" class="form-control" id="download" name="download" placeholder="Download">
            </div>

            <div class="form-group">
                <label for="upload">Upload</label>
                <input type="text" class="form-control" id="upload" name="upload" placeholder="Upload">
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

   
