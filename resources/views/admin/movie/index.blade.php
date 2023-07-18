@extends('admin.layouts.base')
@section('title','Movies')
    
@section('content')
{{-- tambah data --}}
<div class="row">   
    <div class="col-md-12">
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
              <form enctype="multipart/form-data" method="POST" action="">
        <div class="card-body">
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="e.g Guardian of The Galaxy">
          </div>
          <div class="form-group">
            <label for="trailer">Trailer</label>
            <input type="text" class="form-control" id="trailer" name="trailer" placeholder="Video url">
          </div>
          <div class="form-group">
            <label for="duration">Duration</label>
            <input type="text" class="form-control" id="duration" name="duration" placeholder="1h 39m">
          </div>
          <div class="form-group">
            <label>Date:</label>
            <div class="input-group date" id="release-date" data-target-input="nearest">
              <input type="text" name="release_date" class="form-control datetimepicker-input" data-target="#release-date"/>
              <div class="input-group-append" data-target="#release-date" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="short-about">Casts</label>
            <input type="text" class="form-control" id="short-about" name="casts" placeholder="Jackie Chan">
          </div>
          <div class="form-group">
            <label for="short-about">Categories</label>
            <input type="text" class="form-control" id="short-about" name="categories" placeholder="Action, Fantasy">
          </div>
          <div class="form-group">
            <label for="small-thumbnail">Small Thumbnail</label>
            <input type="file" class="form-control" name="small_thumbnail">
          </div>
          <div class="form-group">
            <label for="large-thumbnail">Large Thumbnail</label>
            <input type="file" class="form-control" name="large_thumbnail">
          </div>
          <div class="form-group">
            <label for="short-about">Short About</label>
            <input type="text" class="form-control" id="short-about" name="short_about" placeholder="Awesome Movie">
          </div>
          <div class="form-group">
            <label for="short-about">About</label>
            <input type="text" class="form-control" id="about" name="about" placeholder="Awesome Movie">
          </div>
          <div class="form-group">
            <label>Featured</label>
            <select class="custom-select" name="featured">
              <option value="0">No</option>
              <option value="1">Yes</option>
            </select>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
        </div>
    </div>
    </div>
</div>

{{-- Tabel Movie --}}
  <div class="row">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Movies</h3>
        </div>
        
        <div class="card-body">
          {{-- <div class="row">
            <div class="col-md-12 mb-2">
              <a href="" class="btn btn-warning">Create Movie</a>
            </div>
          </div> --}}

          <div class="row">
            <div class="col-md-12">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Thumbnail</th>
                    <th>Categories</th>
                    <th>Casts</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')
    <script>
        $('#my-card').CardWidget() 
   </script> 
@endsection

   
