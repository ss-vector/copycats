<div class="woo_search woo_search_with_cats">
	<form role="search" class="navbar-search" method="get" action="<?php echo home_url( '/' ); ?>">
		<!-- insert if condition here and label -->
		<div class="input-group">
			<input 	type="search"
					class="woo_search__input"
					placeholder="<?php _e('Busque aqui...', 'copycats'); ?>"
					value="<?php echo get_search_query() ?>"
					name="s"
					title="Search"
			/>
		    <div class="input-group-addon search-categories" data-category="">
		        <span><?php esc_attr_e('Todo', 'copycats'); ?></span>
		    </div>
		    <div class="input-group-btn">
				<button type="submit" class="btn btn-primary"><span class="search-btn">Buscar</span></button>
		    </div>

		</div>

	</form>
</div>