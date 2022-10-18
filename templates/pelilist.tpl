{include file="header.tpl"}

<form action="agregar" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Pelicula</label>
                <input name="nombre" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label>director</label>
            <input name="director" type="text" class="form-control">
        </div>
        <div class="form-group">
                <label>duracion</label>
                <input name="duracion" type="float" class="form-control">
        </div>
        

        <div class="col-3">
            <div class="form-group">
                <label>streaming</label>
                <select name="priority" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
        </div>
    </div>

    <button type="submit"  class="btn btn-primary mt-2">Guardar</button>
</form>

<ul class="list-group">
    {foreach from=$peliculas item=$pelicula}
        <li class='
                list-group-item d-flex justify-content-between align-items-center
                {if $pelicula->streaming_fk} streaming_fk {/if}
            '>
            <span> <b>{$pelicula->nombre}</b> - {$pelicula->director} ({$pelicula->duracion}) </span>
            <div class="ml-auto">
            {if !$pelicula->streaming_fk}
                <a href='finalize/{$pelicula->id_peliculas}' type='button' class='btn btn-success'>Finalizar</a>
            {/if}
            <a href='delete/{$pelicula->id_peliculas}' type='button' class='btn btn-danger'>Borrar</a>
        </div>

        </li>
    {/foreach}
</ul>

<p class="mt-3"><small>Mostrando {$count} pelicula{/strip}</small></p>

{include file="footer.tpl"}

