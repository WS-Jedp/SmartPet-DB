@extends('AdminViews\adminTemplate')

@section('titleWeb')
    Users
@endsection


@section('actionsAdmin')
    <article class="col-12 m-0 p-3 d-flex flex-column justify-content-start align-items-start row sectSubscriptions">
        <h2 class="m-0 p-0">Empleados</h2>
        <hr class="m-0 mb-3 p-0">
        <p class="text-black">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo rem inventore hic illo ipsa dignissimos nemo aliquid error eveniet vero.
        </p>
        <div class="col-12 m-0 p-0 d-flex flex-column justify-content-between align-items-start row formData">
        
            <form class="col-12 m-0 p-2 d-flex flex-column justify-contetn-center align-items-start row" action="">
                
                <section class="col-12 m-0 p-0 d-flex flex-row row">

                    {{-- Nombres y Apellidos --}}
                    <div class="col-6 m-0 p-2">
                        <label for="employee">
                            Nombre de la persona
                        </label>
                        <input type="text" placeholder="Ingresa el nombre" name="employee">
                    </div>
                    <div class="col-6 m-0 p-2">
                        <label for="last_name">
                            Apellido de la persona
                        </label>
                        <input type="text" placeholder="Ingresa el apellido" name="last_name">
                    </div>

                    {{-- Correo --}}
                     <div class="col-12 m-0 p-2">
                        <label for="email">
                            Correo de la persona
                        </label>
                        <input type="text" placeholder="Ingresa el correo" name="email">
                    </div>
                    <div class="col-12 m-0 p-2">
                        <label for="username">
                            Usuario de la persona
                        </label>
                        <input type="text" placeholder="Ingresa el usuario" name="username">
                    </div>

                    {{-- Contraseña --}}
                    <div class="col-6 m-0 p-2">
                        <label for="password">
                            Contraseña de la persona
                        </label>
                        <input type="password" placeholder="Ingresa la contraseña" name="password">
                    </div>
                    <div class="col-6 m-0 p-2">
                        <label for="confirmPassword">
                            Confirma de la contraseña
                        </label>
                        <input type="password" placeholder="Confirma la contraseña" name="confirmPassword">
                    </div>

                    {{-- Description --}}
                    <div class="col-12 m-0 p-2">
                        <label for="description">
                            Descripcion de la persona
                        </label>
                        <textarea name="description" cols="30" rows="10" placeholder="Ingresa tu descripcion"></textarea>
                    </div>
                    
                    {{-- Tarjeta de credito y Banco --}}
                    <div class="col-6 m-0 p-2">
                        <label for="credit_car">
                            Tarjeta de credito de la persona (opcional)
                        </label>
                        <input type="text" placeholder="Ingresa el numero de la tarjeta de credito" name="credit_car">
                    </div>
                    <div class="col-6 m-0 p-2">
                        <label for="bank_account">
                            Cuenta de banco (opcional)
                        </label>
                        <input type="text" placeholder="Confirma la contraseña" name="bank_account">
                    </div>

                      {{--tipo de usuario y subscripcion --}}
                    
                    <div class="col-6 m-0 p-2">
                        <label for="id_type_user">
                            Tipo de empleado
                        </label>
                        <select name="id_type_user">
                            <option value="1">Veterinario</option>
                            <option value="2">Cuidador</option>
                            <option value="3">Admin</option>
                        </select>
                    </div>
                    <div class="col-6 m-0 p-2">
                        <label for="id_subscriptio">
                            Tipo de subscripcion
                        </label>
                        <select name="id_subscriptio">
                            <option value="1">Gold</option>
                            <option value="2">Silver</option>
                            <option value="3">Bronze</option>
                        </select>
                    </div>

                    {{-- Telefono --}}
                    <div class="col-6 m-0 p-2">
                        <label for="phone_number">
                            Numero telefonico de la persona
                        </label>
                        <input type="text" placeholder="Ingresa el numero telefonico" name="phone_number">
                    </div>
                    <div class="col-6 m-0 p-2">
                        <label for="photo">
                            Numero telefonico de la persona
                        </label>
                        <input type="file" placeholder="Selecciona una foto" name="photo">
                    </div>
                </section>


                <div class="m-0 p-0 col-12 d-flex flex-row row">

                    <div class="col-3 m-0 p-2">
                        <button class="btnSmart btn-mainGreen">Crear Usuario</button>
                    </div>
                    <div class="col-3 p-2">
                        <button class="btnSmart btn-secondGreen">Regresar</button>
                    </div>
                </div>

                
                </form>
            
        </div>

        <div class="col-12 d-flex flex-row justify-content-start align-items-center row m-0 p-0">

            

        </div>


    </article>
@endsection