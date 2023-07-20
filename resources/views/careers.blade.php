<x-layout>
    <div class= container-fluid p-5 bg-info text-center text-white">
        <div class="row justity-content-center">
            <h1 class= display-l >
               Lavora con noi   
            </h1>
        </div>
    </div>
    <div class= container my-s >
        <div class="row justify-content-center align-items-center border rounded D-2 shadow">
            <div class="col-12 col-md-6">
                 <h2>Lavora come amministratore</h2>
                 <p>cosa farai: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe aliquid nisi reiciendis repellat consequuntur sit enim dignissimos. Soluta, inventore. Id laudantium aut hic neque voluptates! Ipsum fuga dolorum facilis cum!</p>
            </div>
            <div class="col-21 col-md-6">
              @if ($errors->any())
                <div class="alert alert-danger"></div>
                   <ul>
                       @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif
              <form class="p-5" action="" method="">
                @csrf
                <div class="mb-3">
                     <label for= role class= form-label >per quale ruolo t stal canaidandor</Label>
                    <select name="role" id="role-id" class="form-control">
                    <option value="">Scegli qui</option>
                    <option admin="">administrator</option>
                    <option writer="">redattore</option>
                    <option revisor="">revisore</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">email</Label>
                    <imput name="email" type="email " class="form-control" id="email" value="{{old('email') ?? auth::user()->email}}">
                    
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">parlaci di te </Label>
                    <imput name="message" type="message " cols="30" row="7" class="form-control" >{{old('message') ?? auth::user()->email}}">
                    
                </div>
                <div>
                    <button class="btn btn-info text-info text-white">invia la candidatura</button>
                </div>
            </form>
            </div>
        </div>
    </div>
<x-layout>     
