<form action="<?php echo home_url('/'); ?>" method="get" class="search-form">
    <label for="search" class="sr-only">Rechercher</label>
    <input type="search" id="search" name="s" placeholder="Recherche ..." value="<?php the_search_query(); ?>">
    <button type="submit">Ok</button>
</form>
