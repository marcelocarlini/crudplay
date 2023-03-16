@extends('header')
@section('navbar_basico')

<link href="{{ asset('css/formulario_cliente.css') }}" rel="stylesheet">
    <div class="box">
        <form action="">
            <fieldset>
                <legend><b>Formulário</b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone">Telefone</label>
                </div>
                <br><br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" nome="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <input type="radio" id="masculino" nome="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <input type="radio" id="outro" nome="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <div class="inputBox">
                    <label for="data_nascimento">Data de nascimento</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
@endsection

