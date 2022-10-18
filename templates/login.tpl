{include 'header.tpl'}
{if isset($smarty.session.USER_ID) }     <h2> LOGUEADO </h2> 
{else}
<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="validate">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
        {if $error} 
            <div class="alert alert-danger mt-3">
                {$error}
            </div>
        {/if}

    </form>
</div>
{/if}
{include file="footer.tpl"}

