				<div id="suche">
	    <form id='search_form' action='<?php echo $config->urls->root?>suche/' method='get'>
	      <input type='text' name='q' id='search_query' placeholder= 'suchen...' value='<?php echo htmlentities($input->whitelist('q'), ENT_QUOTES, 'UTF-8'); ?>' />
	      <button type="submit" class="submit"><i class="icon-search icon"></i></button>
	    </form>
    </div>
