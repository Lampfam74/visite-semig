@extends('./visiteur.adminnav')
@section('main')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Administrateur v2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tableau de bord</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
       @include('header')
        <!-- /.row -->
        @if(session()->has('msg'))
        <div class="alert alert-success">
            {{ session()->get('msg') }}
        </div>
        @endif
        <form method="post" action="{{ route('accueil.store') }}" enctype="multipart/form-data">
          @csrf
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row">
            <div class="col">
              <div  class="form-outline">
                <label class="form-label" for="form6Example1">PRENOM </label> 
                <input type="text" id="form6Example1" name="prenom" class="form-control" />
                
              </div>
            </div>
            <div class="col">
              <div  class="form-outline">
                <label class="form-label"  for="form6Example2">NOM</label>
                <input type="text" id="form6Example2"  name="nom" class="form-control" />
               
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div  class="form-outline">
                <label class="form-label" for="form6Example1">Telephone </label>
                <input type="text" id="form6Example1" name="telephone" class="form-control" />
               
              </div>
            </div>
            <div class="col">
              <div  class="form-outline">
                <label class="form-label" for="form6Example2">Date</label>
                <input type="datetime-local" id="form6Example2" name="date"  class="form-control" value="<?php echo date('Y-m-d H:i:s');?>" />
               
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-12">
                <label for="">Direction </label>
                <select name="direction" id="" class="form-control select">
                  @forelse ($directions as $vis)
                    <option value="{{ $vis->libelle }}">{{ $vis->libelle }}</option>
                    @empty
                    <td>pas de données</td>
                    @endforelse
                </select>
            </div>
        </div>
          <!-- Message input -->
          <div  class="form-outline ">
            <label class="form-label" for="form6Example7">Destination</label>
            <textarea class="form-control" id="summernote" name="destination" rows="4"></textarea>
            
          </div>

          </div>
        
          <!-- Submit button -->
        <div class="col-sm-6">
          <button  type="submit" class="btn btn-primary  ">Ajouter</button>
          <button  type="reset" class="btn btn-danger ">Annuler</button>
        </div>
        </form>
    </section>
</div> 
@endsection
