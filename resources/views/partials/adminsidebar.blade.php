{!! HTML::link('/', 'Home') !!}
<br><br>
{!! HTML::link('categorie/1', 'Algorithmie') !!}
<br><br>
{!! HTML::link('categorie/2', 'Programmation') !!}
<br><br><br><br><br>
<a href="{{ URL::action('Admin\PostsController@index') }}"  style="color:#f04040">Administration des articles</a><br><br>
<a href="{{ URL::action('Admin\PostsController@create') }}"  style="color:#398f14">Cr&eacute;er un nouvel article</a>
<div class="menu">
    {!! HTML::link('auth/logout', 'D&eacute;connexion') !!}
</div>