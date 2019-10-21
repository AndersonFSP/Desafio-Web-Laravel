@extends('adminlte::page')

@section('title', 'Desafio Web Laravel-Users')

@section('content_header')
<script type="text/javascript">

    function deleteData(id){
        var id = id;
        var url = '{{ route("destroy", ":id") }}';
        url = url.replace(':id', id);
        $("#deleteForm").attr('action', url);
    }

    function Submit(){
        $("#deleteForm").submit();
    }
 </script>
    <br>
    <h1>Usuários</h1>
    <br>
    <div>
  <table width='80%' class="table table-striped table-dark">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Emprego</th>
        <th>E-mail</th>
        <th  colspan="2" ></th>


    </tr>

      @foreach ($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->emprego}}</td>
        <td>{{$user->email}}</td>
        <form action="{{route('formEditUser', ['user'=> $user->id])}}" method="get">
            @csrf
            <td> <input type="hidden" name="user" value="{{$user->id}}">
            <input type="submit" value="Editar" class='btn btn-primary'></td>

        </form>
         <td><input type='submit' value='Remover' onclick="deleteData({{$user->id}})" class="btn btn-danger" data-toggle="modal" data-target="#delete"></td>
      </tr>
      @endforeach


    </table>

    </div>

@stop
<div class='modal fade' id='delete' tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
            <form action="" id='deleteForm' method="post">
                    @method('delete')
                    @csrf
        <div class="modal-content">
            <div class="modal-header">

                <button type='button' class="close" data-dismiss="modal">
                        <span>&times;</span>
                </button>
            </div>


            <div class="modal-body">
                    <p>Tem certeza que deseja excluir o usuario ?</p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger" onclick="Submit()">Excluir</button>

            </div>

        </div>
    </div>
</div>
@section('content')

@stop

<script>
</script>
