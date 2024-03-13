@extends('./Superadmin.nav')
@section('main')
<style>
    .container{
    padding: 100px;
}
</style>
<div class="container" >
    @if(session()->has('msg'))
    <div class="alert alert-success">
        {{ session()->get('msg') }}
    </div>
    @endif
    <form method="POST" action="{{ Route('direction.store') }}" enctype="multipart/form-data">
        @csrf
        <!-- 2 column grid layout with text inputs for the first and last names -->
       
            <!-- Text input -->
                <div  class="form-outline">
                    <label class="form-label" for="form6Example1">Designation </label>
                    <input type="text" id="form6Example3" name="libelle" class="form-control" />
                </div>           
                <div  class="form-outline">
                    <label class="form-label" for="form6Example1">Email</label>
                  <input type="email" id="form6Example4" name="email" class="form-control" />
                </div>
       
                <div  class="form-outline">
                    <label class="form-label" for="form6Example1">Telephone</label>
                  <input type="tel" id="form6Example5" name="telephone" class="form-control" />
                </div>
        <!-- Submit button -->
                <div class="col">
                    <button  type="submit" class="btn btn-primary">ajouter</button>
                    <button  type="reset" class="btn btn-warning">Annuler</button>
                </div>
    </form>
</div> 
@endsection