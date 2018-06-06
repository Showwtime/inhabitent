<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

		<a href="#" class="search-toggle">
			<i class="fa fa-search"></i>
		</a>
		<label>
			<input type="search" class="search-field" placeholder="TYPE AND HIT ENTER" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		<input id="search-submit" type="submit" class="search-submit screen-reader-text" value="Search">
		
</form>
