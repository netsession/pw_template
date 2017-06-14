<div id="navigation">
<!--
      <label class="toggle" for="toggle"><span>Menue</span></label>
      <input class="toggle" id="toggle" type="checkbox">
-->
      <nav>
      <?php $treeMenu = $modules->get("MarkupSimpleNavigation");
      $options = array(
      'show_root' => true,
      'parent_class' => 'parent',
      'current_class' => 'current',
      //'selector' => 'parent!=1028|8622',
      'max_levels' => 2,
      'code_formatting' => true,
      );
      echo $treeMenu->render($options) . "\n";
?>
      </nav>
</div>
