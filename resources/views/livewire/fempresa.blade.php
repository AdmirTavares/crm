
<div class="bottom-data" style="width: 50%;">

  <div class="orders">
<form wire:submit='registrar_empresa'>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Razão Social</label>
      <input  wire:model='razao_social' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      @error('razao_social')
          
          <div id="emailHelp" class="form-text">{{$message}}</div>

      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">CNPJ</label>
      <input wire:model='cnpj' type="text" class="form-control" id="exampleInputPassword1">
      @error('cnpj')
          
      <div id="emailHelp" class="form-text">{{$message}}</div>

  @enderror
    </div>
    <div class="spinner-border text-primary" role="status" wire:loading.delay>
      <span class="visually-hidden">Loading...</span>
    </div>
    <button wire:loading.remove type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
</div>