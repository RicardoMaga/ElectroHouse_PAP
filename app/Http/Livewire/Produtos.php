<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Produto;
use Livewire\WithPagination;

class Produtos extends Component
{

    use WithPagination;
    public $categoria;
    public $preco;
    public $modelo;
    public $dimensoes;
    public $uso;
    public $marca;
    public $imagem;
    public $modelId;
    public $modalFormVisible=false;
    public $modalConfirmDeleteVisible;
    
    public $search='';


    public function render()
    {
        return view('livewire.produtos',['data'=>$this->read()]);
    }

    public function read()
    {
        return Produto::where('categoria','like','%'.$this->search.'%')->orderby('id','DESC')->paginate(20);
    }
 //regras de inserçao na base de dados
    public function rules(){
        return[
            'categoria'=>'required',
            'modelo'=>'required',
            'preco'=>'required',
            'marca'=>'required',
            'dimensoes'=>'required',
            'uso'=>'required'
            
        ];
    }
// Mapear o modelo do componente
    public function modelData(){
        return[
            'categoria' => $this->categoria,
            'modelo' => $this->modelo,
            'preco' => $this->preco,
            'marca' => $this->marca,
            'dimensoes' => $this->dimensoes,
            'uso' => $this->uso
            
        ];
        
    }
//carregar o modelo
    public function loadModel(){
        $data=Produto::find($this->modelId);
        $this->categoria=$data->categoria;
        $this->modelo=$data->modelo;
        $this->preco=$data->preco;
        $this->marca=$data->marca;
        $this->dimensoes=$data->dimensoes;
        $this->uso=$data->uso;
        

    }
    //guardar
    public function create()
    {
       $this->validate();
       Produto::create($this->modelData());
        $this->modalFormVisible = false;
        $this->reset();

    }

    public function update()
    {
        $this->validate();
        Produto::find($this->modelId)->update($this->modelData());
        $this->modalFormVisible = false;

    }

    public function delete()
    {
         Produto::destroy($this->modelId);
        $this->modalConfirmDeleteVisible = false;
        $this->resetPage();
    }


    // Cria o modal de criar 

    public function createShowModal()
    {
        $this->resetValidation();
        $this->reset();
        $this->modalFormVisible = true;
    }


    //cria o modal de editar

    public function updateShowModal($id)
    {
        $this->resetValidation();
        $this->reset();
        $this->modalFormVisible = true;
        $this->modelId = $id;
        $this->loadModel();
    }

    //cria o modal de delete
    public function deleteShowModal($id)
    {
        $this->modelId = $id;
        $this->modalConfirmDeleteVisible = true;
    }



}
