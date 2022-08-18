<div class="woo_search woo_search_with_cats">
	<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
		<input 	type="search"
				class="woo_search__input"
				placeholder="<?php _e('Busque aqui...', 'copycats'); ?>"
				value="<?php echo get_search_query() ?>"
				name="s"
				title="Search"
		/>
		<!-- insert if condition here -->
		<div class="woo_search__categories">
		    <div class="woo_search__category active_category" data-category="">
		        <span><?php esc_attr_e('Todo', 'copycats'); ?></span>
		    </div>
		</div>
		<button type="submit"><span class="icon-search"></span></button>
	</form>
</div>