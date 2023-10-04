




<div class="bottom-data">

    <div class="orders">
        <div class="header">
            <i class='bx bx-receipt'></i>
            <h3>Empresas</h3>
            <i class='bx bx-plus'data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
            <i class='bx bx-search'></i>
        </div>
        <table class="table-responsive " wire:poll>
            <thead>
                <tr>
                    <th>Razão Social</th>
                    <th>CNPJ</th>
                    <th>Estado</th>
                    <th>Ação</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($aux as $auxs)
                    
                    <tr>
                        <td>
                            <p>{{$auxs->razao_social}}</p>
                        </td>
                        <td>{{$auxs->cnpj}}</td>
                        <td><span class="status completed">Empresa Verificado</span></td>
                        <td>     <button wire:click='apagar({{$auxs->id}})' type="button" class="btn btn-outline-danger">Delete</button> </td>
                    </tr>
                    @endforeach
    
            </tbody>
        </table>
    </div>


  



